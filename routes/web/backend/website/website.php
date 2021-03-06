<?php


Route::group(['namespace' => 'WebSite'], function () {

    Route::resource('posts', 'PostController', [
        'names' => [
            'index' => 'dashboard.posts.index',
            'create' => 'dashboard.posts.create',
            'store' => 'dashboard.posts.store',
            'edit' => 'dashboard.posts.edit',
            'update' => 'dashboard.posts.update',
            'destroy' => 'dashboard.posts.destroy',
        ]
    ]);
    Route::resource('banners', 'BannerController', [
        'names' => [
            'index' => 'dashboard.banners.index',
            'create' => 'dashboard.banners.create',
            'store' => 'dashboard.banners.store',
            'edit' => 'dashboard.banners.edit',
            'update' => 'dashboard.banners.update',
            'destroy' => 'dashboard.banners.destroy',
        ]
    ]);

    Route::resource('services', 'ServicesController', [
        'names' => [
            'index' => 'dashboard.services.index',
            'create' => 'dashboard.services.create',
            'store' => 'dashboard.services.store',
            'edit' => 'dashboard.services.edit',
            'update' => 'dashboard.services.update',
            'destroy' => 'dashboard.services.destroy',
        ]
    ]);
    Route::resource('news', 'NewsController', [
        'names' => [
            'index' => 'dashboard.news.index',
            'create' => 'dashboard.news.create',
            'store' => 'dashboard.news.store',
            'edit' => 'dashboard.news.edit',
            'update' => 'dashboard.news.update',
            'destroy' => 'dashboard.news.destroy',
        ]
    ]);

    Route::resource('testimonials', 'TestimonialController', [
        'names' => [
            'index' => 'dashboard.testimonials.index',
            'create' => 'dashboard.testimonials.create',
            'store' => 'dashboard.testimonials.store',
            'edit' => 'dashboard.testimonials.edit',
            'update' => 'dashboard.testimonials.update',
            'destroy' => 'dashboard.testimonials.destroy',
        ]
    ]);

    Route::resource('pages', 'PagesController', [
        'names' => [
            'index' => 'dashboard.pages.index',
            'create' => 'dashboard.pages.create',
            'store' => 'dashboard.pages.store',
            'edit' => 'dashboard.pages.edit',
            'update' => 'dashboard.pages.update',
            'destroy' => 'dashboard.pages.destroy',
        ]
    ]);
    Route::resource('pages', 'PagesController', [
        'names' => [
            'index' => 'dashboard.pages.index',
            'create' => 'dashboard.pages.create',
            'store' => 'dashboard.pages.store',
            'edit' => 'dashboard.pages.edit',
            'update' => 'dashboard.pages.update',
            'destroy' => 'dashboard.pages.destroy',
        ]
    ]);


    Route::resource('products', 'ProductController', [
        'names' => [
            'index' => 'dashboard.products.index',
            'create' => 'dashboard.products.create',
            'store' => 'dashboard.products.store',
            'edit' => 'dashboard.products.edit',
            'update' => 'dashboard.products.update',
            'destroy' => 'dashboard.products.destroy',
            'show'=>'dashboard.products.show',
        ]
    ]);
    Route::resource('skill', 'SkillController', [
        'names' => [
            'index' => 'dashboard.skill.index',
            'create' => 'dashboard.skill.create',
            'store' => 'dashboard.skill.store',
            'edit' => 'dashboard.skill.edit',
            'update' => 'dashboard.skill.update',
            'destroy' => 'dashboard.skill.destroy',
        ]
    ]);
    Route::resource('gettouch', 'GetTouchController', [
        'names' => [
            'index' => 'dashboard.gettouch.index',
            'show'=>'dashboard.gettouch.show',
            'store' => 'dashboard.gettouch.store',
            'edit' => 'dashboard.gettouch.edit',
            'update' => 'dashboard.gettouch.update',
            'destroy' => 'dashboard.gettouch.destroy',
        ]
    ]);

});
