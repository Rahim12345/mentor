<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 12.07.2023
 * Time: 21:23
 */
$page_title             = 'Trainers';
$breadcrumbs_title      = 'Trainers';
$breadcrumbs_content    = 'Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium.';
$trainers               = [
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
    ],
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
    ],
];
shuffle($trainers);

$content                = view('pages/trainers');
 