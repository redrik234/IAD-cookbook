<?php

return [
    //Main Controller
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    '{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    //Account Controller
    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],

    'account/recovery' => [
        'controller' => 'account',
        'action' => 'recovery'
    ],

    'account/profile' => [
        'controller' => 'account',
        'action' => 'profile'
    ],

    'account/logout' => [
        'controller' => 'account',
        'action' => 'logout'
    ],

    //Post Controller
    'post/{id:\d+}' => [
        'controller' => 'post',
        'action' => 'view'
    ],

    'post/add' => [
        'controller' => 'post',
        'action' => 'add'
    ],

    //Admin Controller
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts'
    ],

    'admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts'
    ],

    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete'
    ],
];