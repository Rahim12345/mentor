<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 21.06.2023
 * Time: 22:48
 */

$page_title             = 'Kurslar';
$breadcrumbs_title      = 'Courses';
$breadcrumbs_content    = 'Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium.';
$content                = view('pages/kurs');


$courses = [
    'title'=> ['title_1'=>'COURSES', 'title_2'=>'POPULAR COURSES'],
    'elements' => [
        [
            'id'=>1,
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
            'id'=>2,
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
            'id'=>3,
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
