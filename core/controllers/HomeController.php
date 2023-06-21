<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 21.06.2023
 * Time: 22:09
 */

include 'core/helpers/color-generator.php';
$page_title = 'Əsas səhifə';

$about_section = [
    'sekil'     => 'assets/img/about.jpg',
    'basliq'    => 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
    'mezmun'    => '<p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        </p>',
];

$counts_section = [
    [
        'kateqoriya_adi'=>'Students',
        'say'=>1232
    ],
    [
        'kateqoriya_adi'=>'Courses',
        'say'=>64
    ],
    [
        'kateqoriya_adi'=>'Events',
        'say'=>42
    ],
    [
        'kateqoriya_adi'=>'Trainers',
        'say'=>15
    ]
];

$why_us_section = [
    'col_1'=>[
        'basliq'    => 'Why Choose Mentor?',
        'mezmun'    => '
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                            </p>
                           ',
        'link'      => 'about.html',

    ],
    'col_2'=>[
        [
            'icon'          => '<i class="bx bx-receipt"></i>',
            'basliq'        => 'Corporis voluptates sit',
            'intro_text'    => 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'
        ],
        [
            'icon'          => '<i class="bx bx-cube-alt"></i>',
            'basliq'        => 'Ullamco laboris ladore pan Excepteur sint occaeca',
            'intro_text'    => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt'
        ],
        [
            'icon'          => '<i class="bx bx-images"></i>',
            'basliq'        => 'Labore consequatur',
            'intro_text'    => 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere'
        ]
    ],
];

$features = [
    [
        'icon'          => ['class'=>'ri-store-line', 'color'=>'ffbb2c'],
        'link_text'     => 'Lorem Ipsum'
    ],
    [
        'icon'          => ['class'=>'ri-bar-chart-box-line', 'color'=>'5578ff'],
        'link_text'     => 'Dolor Sitema'
    ],
    [
        'icon'          => ['class'=>'ri-calendar-todo-line', 'color'=>'e80368'],
        'link_text'     => 'Sed perspiciatis'
    ],
    [
        'icon'          => ['class'=>'ri-paint-brush-line', 'color'=>'e361ff'],
        'link_text'     => 'Magni Dolores'
    ],
    [
        'icon'          => ['class'=>'ri-database-2-line', 'color'=>'47aeff'],
        'link_text'     => 'Nemo Enim'
    ],
    [
        'icon'          => ['class'=>'ri-gradienter-line', 'color'=>'ffa76e'],
        'link_text'     => 'Eiusmod Tempor'
    ],
    [
        'icon'          => ['class'=>'ri-file-list-3-line', 'color'=>'11dbcf'],
        'link_text'     => 'Midela Teren'
    ],
    [
        'icon'          => ['class'=>'ri-price-tag-2-line', 'color'=>'4233ff'],
        'link_text'     => 'Pira Neve'
    ],
    [
        'icon'          => ['class'=>'ri-anchor-line', 'color'=>'b2904f'],
        'link_text'     => 'Dirada Pack'
    ],
    [
        'icon'          => ['class'=>'ri-disc-line', 'color'=>'b20969'],
        'link_text'     => 'Moton Ideal'
    ],
    [
        'icon'          => ['class'=>'ri-base-station-line', 'color'=>'39cc61'],
        'link_text'     => 'Verdo Park'
    ],
    [
        'icon'          => ['class'=>'ri-fingerprint-line', 'color'=>'29cc61'],
        'link_text'     => 'Flavor Nivelanda'
    ],
];

$courses = [
    'title'=> ['title_1'=>'COURSES', 'title_2'=>'POPULAR COURSES'],
    'elements' => [
        [
            'src'=>'assets/img/course-1.jpg',
            'category'=>'Web Development',
            'price'=>169,
            'name'=>'Website Design',
            'intro_text'=>'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.',
            'trainer_src'=>'assets/img/trainers/trainer-1.jpg',
            'trainer_name'=>'Antonio',
            'visit'=>50,
            'like'=>65,
        ],
        [
            'src'=>'assets/img/course-2.jpg',
            'category'=>'Marketing',
            'price'=>250,
            'name'=>'Search Engine Optimization',
            'intro_text'=>'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.',
            'trainer_src'=>'assets/img/trainers/trainer-2.jpg',
            'trainer_name'=>'Lana',
            'visit'=>35,
            'like'=>42,
        ],
        [
            'src'=>'assets/img/course-3.jpg',
            'category'=>'Content',
            'price'=>180,
            'name'=>'Copywriting',
            'intro_text'=>'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.',
            'trainer_src'=>'assets/img/trainers/trainer-3.jpg',
            'trainer_name'=>'Brandon',
            'visit'=>20,
            'like'=>85,
        ],
    ]
];

$trainers = [
    [
        'src'=>'assets/img/trainers/trainer-1.jpg',
        'name'=>'Walter White',
        'profession'=>'Web Development',
        'intro_text'=>'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut',
        'social'=>[
            'twitter'=>'',
            'facebook'=>'',
            'instagram'=>'',
            'linkedin'=>'',
        ]
    ],
    [
        'src'=>'assets/img/trainers/trainer-2.jpg',
        'name'=>'Sarah Jhinson',
        'profession'=>'Marketing',
        'intro_text'=>'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus',
        'social'=>[
            'twitter'=>'',
            'facebook'=>'',
            'instagram'=>'',
            'linkedin'=>'',
        ]
    ],
    [
        'src'=>'assets/img/trainers/trainer-3.jpg',
        'name'=>'William Anderson',
        'profession'=>'William Anderson',
        'intro_text'=>'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara',
        'social'=>[
            'twitter'=>'',
            'facebook'=>'',
            'instagram'=>'',
            'linkedin'=>'',
        ]
    ]
];

$content = view('pages/home');