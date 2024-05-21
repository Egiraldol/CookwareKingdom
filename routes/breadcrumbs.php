<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home.index'));
});

Breadcrumbs::for('product.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Product', route('product.index'));
});

Breadcrumbs::for('product.show', function ($trail, $id, $name) {
    $trail->parent('product.index');
    $trail->push($name, route('product.show', ['id' => $id]));
});

Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

Breadcrumbs::for('register', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Register', route('register'));
});

Breadcrumbs::for('cart.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Cart', route('cart.index'));
});

Breadcrumbs::for('cart.purchase', function (BreadcrumbTrail $trail) {
    $trail->parent('cart.index');
    $trail->push('Purchase', route('cart.purchase'));
});

Breadcrumbs::for('myaccount.orders', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Orders', route('myaccount.orders'));
});

Breadcrumbs::for('movie.index', function (BreadcrumbTrail $trail) {
    $trail->push('Movies', route('movie.index'));
});

Breadcrumbs::for('movie.show', function (BreadcrumbTrail $trail, $id, $name) {
    $trail->parent('movie.index');
    $trail->push($name, route('movie.show', ['id' => $id]));
});
