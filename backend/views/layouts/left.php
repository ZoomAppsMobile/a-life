<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Мета теги', 'icon' => 'fa fa-user', 'url' => ['/metatags']],
                    ['label' => 'Переводы', 'icon' => 'fa fa-user', 'url' => ['/source-message']],
                    ['label' => 'Обратный звонок', 'icon' => 'fa fa-user', 'url' => ['/contact']],
                    ['label' => 'Отзывы', 'icon' => 'fa fa-user', 'url' => ['/reviews']],
                    ['label' => 'Правление', 'icon' => 'fa fa-user', 'url' => ['/pravlenie']],
                    ['label' => 'Страховые случаи', 'icon' => 'fa fa-user', 'url' => ['/insurance-case']],
                    ['label' => 'Вопросы с полезныех советов', 'icon' => 'fa fa-user', 'url' => ['/useful-tips']],
                    [
                        'label' => 'Главная страница',
                        'icon' => 'fa fa-home',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Слайдеры', 'icon' => 'fa fa-sliders', 'url' => ['/slider']],
                            ['label' => 'Новости', 'icon' => 'fa fa-newspaper-o', 'url' => ['/news']],
                            ['label' => 'Баннера', 'icon' => 'fa fa-picture-o', 'url' => ['/banner']],
                        ],
                    ],
                    ['label' => 'Пользователи', 'icon' => 'fa fa-user', 'url' => ['/user']],
                    [
                        'label' => 'Офисы',
                        'icon' => 'fa fa-home',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Офисы', 'icon' => 'fa fa-file-zip-o', 'url' => ['/offices']],
                            ['label' => 'Города', 'icon' => 'fa fa-file-zip-o', 'url' => ['/city']],
                        ],
                    ],
                    ['label' => 'Новости', 'icon' => 'fa fa-user', 'url' => ['/news']],
                    [
                        'label' => 'Меню',
                        'icon' => 'fa fa-home',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Верхнее меню', 'icon' => 'fa fa-file-zip-o', 'url' => ['/menu/top']],
                            ['label' => 'Нижнее меню', 'icon' => 'fa fa-file-zip-o', 'url' => ['/menu/footer']],
                        ],
                    ],
                    [
                        'label' => 'О компании',
                        'icon' => 'fa fa-bank',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Документы и публикации', 'icon' => 'fa fa-file-zip-o', 'url' => ['/document']],
                            ['label' => 'Партнеры и клиенты', 'icon' => 'fa fa-file-zip-o', 'url' => ['/partners-and-customers']],
                        ],
                    ],
                    [
                        'label' => 'Частным клиентам',
                        'icon' => 'fa fa-address-card-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Категории', 'icon' => 'fa fa-tag', 'url' => ['/blogcategory']],
                            ['label' => 'Блог', 'icon' => 'fa fa-pencil-square', 'url' => ['/blog']],
                            ['label' => 'Ваши выгоды', 'icon' => 'fa fa-user', 'url' => ['/your-benefits']],
                            ['label' => 'Механизм действия договора', 'icon' => 'fa fa-user', 'url' => ['/mechanism-of-the-contract']],
                        ],
                    ],
                    [
                        'label' => 'Вакансии',
                        'icon' => 'fa fa-bullhorn',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Список вакансий', 'icon' => 'fa fa-user', 'url' => ['/vacancy']],
                            ['label' => 'Отклики', 'icon' => 'fa fa-bookmark', 'url' => ['/are-distinguished']],
                        ],
                    ],
                    [
                        'label' => 'Клиентская поддержка',
                        'icon' => 'fa fa-life-ring',
                        'url' => '#',
                        'items' => [
                            ['label' => 'FAQ', 'icon' => 'fa fa-question-circle', 'url' => ['/faqcategory']],
                            ['label' => 'Полезные советы', 'icon' => 'fa fa-lightbulb-o', 'url' => ['/advise']],
                            ['label' => 'Термины', 'icon' => 'fa fa-trademark', 'url' => ['/term']],
                            ['label' => 'Заявление', 'icon' => 'fa fa-file-pdf-o', 'url' => ['/statement']],
                            ['label' => '', 'icon' => 'fa fa-file-pdf-o', 'url' => ['/event'],
                                'template'=> '<li><a href="{url}"><i class="fa fa-file-pdf-o"></i><span> Действие при наступлении <br/>страхового случая</span></a></li>'],
                        ],
                    ],
                ],
            ]
        ) ?>
    </section>

</aside>