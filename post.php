<?php

include('./functions.php');

$posts = [
    ['title' => 'post one', 'slug' => 'slug one', 'img' => 'img/pic1.jpg'],
];

$posts_tmp = get_template('./templates/elements/post_list.php', ['posts' => $posts]);

$elements_tmp = [
    'header' => get_template('./templates/elements/header.php'),
    'posts' => $posts_tmp,
    'contact_form' => get_template('./templates/elements/contact_form.php'),
    'footer' => get_template('./templates/elements/footer.php'),
];

$page_tmp = get_template('./templates/pages/home.php', $elements_tmp);

$layout_tmp = get_template('./templates/layouts/main.php', ['page' => $page_tmp]);

echo $layout_tmp;
