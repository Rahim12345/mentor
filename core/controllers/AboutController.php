<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 21.06.2023
 * Time: 22:48
 */

$page_title             = 'Haqqımızda';
$breadcrumbs_title      = 'Haqqımızda';
$breadcrumbs_content    = 'Biz – Corn reklam agentliyi olaraq, həyatımızda ən faydalı bitkilərdən biri olan qarğıdalıdan faydalandıq. İşimizi onun düzülüşü kimi simmetrik, faydası kimi dəyərli etdik. Hər şeyin başladığı, addım-addım böyüdüyü, bu gündə davam edən ofisimizdə yeni fikirlərə həyat veririk. Xidmət verdiyimiz reklam dünyasında önə çıxmaq üçün fərqlilik yaratmağın və müştəri məmnuniyyətinin vacibliyinə inanırıq. 10 ilə yaxın reklam təcrübəmiz ilə 200-dən çox şirkətə reklam xidməti göstərmiş, hər sifarişimizə fərdi yanaşaraq, müştəri məmnuniyyətini ön plana çəkmişik.';
$content                = view('pages/about');

$about_section = [
    'src'=>'assets/img/about.jpg',
    'text'=>'
        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
        <p class="fst-italic">
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
        </p>
    '
];

$counts = [
    [
        'name' => 'Students',
        'start' => 0,
        'end' => 1232,
        'duration' => 1,
    ],
    [
        'name' => 'Courses',
        'start' => 0,
        'end' => 64,
        'duration' => 1,
    ],
    [
        'name' => 'Events',
        'start' => 0,
        'end' => 42,
        'duration' => 1,
    ],
    [
        'name' => 'Trainers',
        'start' => 0,
        'end' => 15,
        'duration' => 1,
    ]
];

$testimonials = [
    'title'=>'Testimonials',
    'sub_title'=>'What are they saying',
    'slides'=>[
        [
            'src'=>'assets/img/testimonials/testimonials-1.jpg',
            'name'=>'Saul Goodman',
            'profissinal'=>'Ceo &amp; Founder',
            'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
        ],
        [
            'src'=>'assets/img/testimonials/testimonials-1.jpg',
            'name'=>'Saul Goodman',
            'profissinal'=>'Ceo &amp; Founder',
            'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
        ],
        [
            'src'=>'assets/img/testimonials/testimonials-1.jpg',
            'name'=>'Saul Goodman',
            'profissinal'=>'Ceo &amp; Founder',
            'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
        ],
        [
            'src'=>'assets/img/testimonials/testimonials-1.jpg',
            'name'=>'Saul Goodman',
            'profissinal'=>'Ceo &amp; Founder',
            'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
        ],
    ]
];