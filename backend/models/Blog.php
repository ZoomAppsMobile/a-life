<?php

namespace backend\models;

use common\models\AdditionalProtectionInsurer;
use common\models\ChildsInsuranceCoverage;
use common\models\AdditionalInsuranceCoverage;
use common\models\BasicInsuranceCoverage;
use common\models\MechanismOfTheContract;
use common\models\MechanismOfTheContractBlog;
use common\models\YourBenefits;
use common\models\YourBenefitsBlog;
use Yii;

class Blog extends \common\models\CommonModel
{

    public $YourBenefits;
    public $YourBenefitsSorter;
    public $MechanismOfTheContract;
    public $MechanismOfTheContractSorter;

    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'thumb', 'image', 'content', 'content_kz', 'content_en', 'url', 'order', 'status', 'category'], 'required'],
            [['content', 'content_kz', 'content_en', 'status', 'bellowing_conditions', 'bellowing_conditions_kz', 'bellowing_conditions_en',
                'kase', 'spy', 'pens1', 'pens2', 'vig_banka', 'k_r_p', 'v_s_m_s', 'v_zn'], 'string'],
            [['order', 'category'], 'integer'],
            [['YourBenefits', 'MechanismOfTheContract'], 'safe'],
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'thumb', 'image', 'note', 'note_kz', 'note_en'], 'string', 'max' => 512],
            [['url'], 'string', 'max' => 200],
            [['url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'description' => 'Описание',
            'description_kz' => 'Описание Kz',
            'description_en' => 'Описание En',
            'thumb' => 'Маленькаяя картинка',
            'image' => 'Большая картинка',
            'content' => 'Конткент',
            'content_kz' => 'Контент Kz',
            'content_en' => 'Контент En',
            'note' => 'Заметка',
            'note_kz' => 'Заметка Kz',
            'note_en' => 'Заметка En',
            'url' => 'Ссылка',
            'order' => 'Порядок',
            'status' => 'Статус',
            'category' => 'Категории',
            'bellowing_conditions' => 'Условия страхования',
            'bellowing_conditions_kz' => 'Условия страхования kz',
            'bellowing_conditions_en' => 'Условия страхования en',
            'YourBenefits' => 'Ваши выгоды',
            'MechanismOfTheContract' => 'Механизм действия договора',
            'vig_banka' => 'Выгоды банка',
            'k_r_p' => 'Какие риски покрываются',
            'v_s_m_s' => 'Варианты сумм страховой защиты',
            'v_zn' => 'Важно знать',
        ];
    }

    public function getYourBenefitsBlogs()
    {
        return $this->hasMany(YourBenefitsBlog::className(), ['blog_id' => 'id']);
    }

    public function getYourBenefitsBlogsId()
    {
        return $this->hasMany(YourBenefitsBlog::className(), ['blog_id' => 'id'])
            ->viaTable('tag_to_post_bind', ['post_id' => 'id']);
    }

    public function getMechanismOfTheContractBlog()
    {
        return $this->hasMany(MechanismOfTheContractBlog::className(), ['blog_id' => 'id']);
    }

    public function getAdditionalInsuranceCoverage()
    {
        return $this->hasMany(AdditionalInsuranceCoverage::className(), ['blog_id' => 'id']);
    }

    public function getBasicInsuranceCoverage()
    {
        return $this->hasMany(BasicInsuranceCoverage::className(), ['blog_id' => 'id']);
    }

    public function getChildsInsuranceCoverage()
    {
        return $this->hasMany(ChildsInsuranceCoverage::className(), ['blog_id' => 'id']);
    }

    public function getAdditionalProtectionInsurer()
    {
        return $this->hasMany(AdditionalProtectionInsurer::className(), ['blog_id' => 'id']);
    }

    public function getItems()
    {
        return $this->hasMany(MechanismOfTheContract::className(), ['id' => 'mechanism_of_the_contract_id'])
            ->viaTable('mechanism_of_the_contract_blog', ['blog_id' => 'id'], function ($query) {
                $query->orderBy(['sort' => SORT_DESC]);
            });
    }

    public function Itemsblog($id)
    {
        return MechanismOfTheContract::find()
            ->select('{{%mechanism_of_the_contract}}.*')
            ->leftJoin('mechanism_of_the_contract_blog', 'mechanism_of_the_contract_blog.mechanism_of_the_contract_id = mechanism_of_the_contract.id')
            ->where("{{%mechanism_of_the_contract_blog}}.blog_id = $id")
            ->orderBy(['{{%mechanism_of_the_contract_blog}}.sort' => SORT_ASC])
            ->all();
    }

    public function Issetmotc($id, $blog_id)
    {
        $model = MechanismOfTheContractBlog::find()->where("mechanism_of_the_contract_id = $id AND blog_id = $blog_id")->one();

        return $model->id;
    }

    public function Issetybsc($id, $blog_id)
    {
        $model = YourBenefitsBlog::find()->where("your_benefits_id = $id AND blog_id = $blog_id")->one();

        return $model->id;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if(isset($_POST['title1']['new']) && count($_POST['title1']['new'] > 0))
        {
            AdditionalInsuranceCoverage::deleteAll(['blog_id' => $this->id]);
            foreach($_POST['title1']['new'] as $k => $value)
            {
                if($value)
                {
                    $attr = new AdditionalInsuranceCoverage();
                    $attr->title = $value;
                    $attr->text = $_POST['text1']['new'][$k];
                    $attr->blog_id = $this->id;
                    $attr->save(false);
                }
            }
        }
        if(isset($_POST['title']['new']) && count($_POST['title']['new'] > 0))
        {
            BasicInsuranceCoverage::deleteAll(['blog_id' => $this->id]);
            foreach($_POST['title']['new'] as $k => $value)
            {
                if($value)
                {
                    $attr = new BasicInsuranceCoverage();
                    $attr->title = $value;
                    $attr->text = $_POST['text']['new'][$k];
                    $attr->blog_id = $this->id;
                    $attr->save(false);
                }
            }
        }
        if(isset($_POST['title2']['new']) && count($_POST['title']['new'] > 0))
        {
            ChildsInsuranceCoverage::deleteAll(['blog_id' => $this->id]);
            foreach($_POST['title2']['new'] as $k => $value)
            {
                if($value)
                {
                    $attr = new ChildsInsuranceCoverage();
                    $attr->title = $value;
                    $attr->text = $_POST['text2']['new'][$k];
                    $attr->blog_id = $this->id;
                    $attr->save(false);
                }
            }
        }
        if(isset($_POST['title3']['new']) && count($_POST['title']['new'] > 0))
        {
            AdditionalProtectionInsurer::deleteAll(['blog_id' => $this->id]);
            foreach($_POST['title3']['new'] as $k => $value)
            {
                if($value)
                {
                    $attr = new AdditionalProtectionInsurer();
                    $attr->title = $value;
                    $attr->text = $_POST['text3']['new'][$k];
                    $attr->blog_id = $this->id;
                    $attr->save(false);
                }
            }
        }
        YourBenefitsBlog::deleteAll(['blog_id' => $this->id]);
        if($this->YourBenefits)
            foreach($this->YourBenefits as $k => $v){
                $YourBenefitsBlog = new YourBenefitsBlog();

                $YourBenefitsBlog->blog_id = $this->id;
                $YourBenefitsBlog->your_benefits_id = $v;
                $YourBenefitsBlog->sort = $_REQUEST['Blog']['YourBenefitsSorter'][$v];
                $YourBenefitsBlog->text = $_REQUEST['Blog']['YourBenefitsText'][$v];
                $YourBenefitsBlog->save(false);
            }
        MechanismOfTheContractBlog::deleteAll(['blog_id' => $this->id]);
        if($this->MechanismOfTheContract)
            foreach($this->MechanismOfTheContract as $k => $v){
                $YourBenefitsBlog = new MechanismOfTheContractBlog();

                $YourBenefitsBlog->blog_id = $this->id;
                $YourBenefitsBlog->mechanism_of_the_contract_id = $v;
//                if ($_REQUEST['Blog']['MechanismOfTheContractSorter'][$v])
                $YourBenefitsBlog->sort = $_REQUEST['Blog']['MechanismOfTheContractSorter'][$v];
                $YourBenefitsBlog->save(false);
            }
    }
}
