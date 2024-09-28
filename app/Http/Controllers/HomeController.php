<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function blog_col_1()
    {
        return view('blog-col-1');
    }

    public function blog_col_2()
    {
        return view('blog-col-2');
    }

    public function blog_details_2()
    {
        return view('blog-details-2');
    }

    public function blog_details()
    {
        return view('blog-details');
    }

    public function blog()
    {
        return view('blog-col-1');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        // Mock dos dados do blog
        $blogs = [
            [
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'author' => 'Beltrano de tal',
                'designation' => 'ANTT News',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua.',
                'image' => 'blog-12.png',
                'date' => '2023-01-20',
                'id' => 1
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'author' => 'Fulano de tal',
                'designation' => 'TKX Truck',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua.',
                'image' => 'blog-12.png',
                'date' => '2023-01-20',
                'id' => 2
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet.',
                'author' => 'Notícias Truck',
                'designation' => 'Consultoria',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua.',
                'image' => 'blog-12.png',
                'date' => '2023-01-20',
                'id' => 3
            ]
        ];

        // Mock dos dados dos posts recentes
        $recentPosts = [
            [
                'title' => 'Lorem ipsum dolor, sit',
                'image' => 'small-post.jpg',
                'date' => '2024-02-12',
                'id' => 1
            ],
            [
                'title' => 'Ajudando equipes a ter sucesso nos negócios',
                'image' => 'small-post-2.jpg',
                'date' => '2024-02-12',
                'id' => 2
            ]
        ];

        // Adicionar a rota para cada blog
        foreach ($blogs as &$blog) {
            $blog['route'] = route('blog-details', ['id' => $blog['id']]);
        }

        // Adicionar a rota para cada post recente
        foreach ($recentPosts as &$post) {
            $post['route'] = route('blog-details', ['id' => $post['id']]);
        }

        // Retornar a view com os blogs e posts recentes
        return view('index', compact('blogs', 'recentPosts'));
    }

    public function service_details()
    {
        return view('service-details');
    }

    public function service()
    {
        return view('service');
    }

    public function team_details()
    {
        return view('team-details');
    }
}
