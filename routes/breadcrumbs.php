<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('shopList', function ($trail) {
    $trail->push('Tdthghe', url('shopList'));
});


// Home > Blog
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('shopList');
    $trail->push('contact', route('contact'));
});

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });