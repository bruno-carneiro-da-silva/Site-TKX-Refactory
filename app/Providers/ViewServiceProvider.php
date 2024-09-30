<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

        /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Use a view composer to share the $recentPosts variable with the footer component
        View::composer(['layouts.layout1', 'layouts.layout2'], function ($view) {
            $recentPosts = [
                [
                    'title' => 'Lorem ipsum dolor, sit',
                    'image' => 'small-post.jpg',
                    'date' => '2024-02-12',
                    'id' => 1,
                    'route' => route('blog-details', ['id' => 1])
                ],
                [
                    'title' => 'Ajudando equipes a ter sucesso nos negócios',
                    'image' => 'small-post-2.jpg',
                    'date' => '2024-02-12',
                    'id' => 2,
                    'route' => route('blog-details', ['id' => 2])
                ]
            ];

            $view->with('recentPosts', $recentPosts);
        });
    }
}
