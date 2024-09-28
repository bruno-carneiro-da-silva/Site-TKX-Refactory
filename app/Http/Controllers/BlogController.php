<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
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

        // Adicionar a rota para cada blog
        foreach ($blogs as &$blog) {
            $blog['route'] = route('blog-details', ['id' => $blog['id']]);
        }

        // Retornar a view com os blogs
        return view('index', compact('blogs'));
    }

    public function show($id)
    {
        // Mock dos dados do blog
        $blogs = [
            1 => [
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'author' => 'Beltrano de tal',
                'designation' => 'ANTT News',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua.',
                'image' => 'blog-12.png',
                'date' => '2023-01-20',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'quote' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim doloremque ex adipisci necessitatibus quaerat, tempora ipsam quidem iusto dolor sed reprehenderit nam neque suscipit blanditiis quam ratione quod quis aliquid.',
                'quote_author' => 'Davi',
                'tags' => ['Tecnologia', 'Ciência de Dados'],
                'comments' => [
                    [
                        'author' => 'James Smith',
                        'date' => '2024-03-20',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ],
                    [
                        'author' => 'Adom Smith',
                        'date' => '2024-02-20',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ],
                    [
                        'author' => 'Mr Smith',
                        'date' => '2023-02-28',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ]
                ]
            ],
            2 => [
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'author' => 'Fulano de tal',
                'designation' => 'TKX Truck',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua.',
                'image' => 'blog-12.png',
                'date' => '2023-01-20',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'quote' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim doloremque ex adipisci necessitatibus quaerat, tempora ipsam quidem iusto dolor sed reprehenderit nam neque suscipit blanditiis quam ratione quod quis aliquid.',
                'quote_author' => 'Davi',
                'tags' => ['Tecnologia', 'Ciência de Dados'],
                'comments' => [
                    [
                        'author' => 'James Smith',
                        'date' => '2024-03-20',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ],
                    [
                        'author' => 'Adom Smith',
                        'date' => '2024-02-20',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ],
                    [
                        'author' => 'Mr Smith',
                        'date' => '2023-02-28',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ]
                ]
            ],
            3 => [
                'title' => 'Lorem ipsum dolor sit amet.',
                'author' => 'Notícias Truck',
                'designation' => 'Consultoria',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua.',
                'image' => 'blog-12.png',
                'date' => '2023-01-20',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'quote' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim doloremque ex adipisci necessitatibus quaerat, tempora ipsam quidem iusto dolor sed reprehenderit nam neque suscipit blanditiis quam ratione quod quis aliquid.',
                'quote_author' => 'Davi',
                'tags' => ['Tecnologia', 'Ciência de Dados'],
                'comments' => [
                    [
                        'author' => 'James Smith',
                        'date' => '2024-03-20',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ],
                    [
                        'author' => 'Adom Smith',
                        'date' => '2024-02-20',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ],
                    [
                        'author' => 'Mr Smith',
                        'date' => '2023-02-28',
                        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                    ]
                ]
            ]
        ];

        // Buscar o blog pelo ID
        $blog = $blogs[$id] ?? null;

        // Verificar se o blog foi encontrado
        if (!$blog) {
            return redirect()->route('index')->with('error', 'Blog não encontrado!');
        }

        // Retornar a view com o blog
        return view('blog-details', compact('blog'));
    }

    public function create()
    {
        // Retornar a view para criar um novo blog
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // Validar os dados recebidos
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published_at' => 'nullable|date',
        ]);

        // Criar o blog
        $blog = Blog::create($validatedData);

        // Redirecionar para a lista de blogs com uma mensagem de sucesso
        return redirect()->route('blogs.index')->with('success', 'Blog criado com sucesso!');
    }

    public function edit($id)
    {
        // Buscar o blog
        $blog = Blog::find($id);

        // Verificar se o blog foi encontrado
        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog não encontrado!');
        }

        // Retornar a view para editar o blog
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validar os dados recebidos
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published_at' => 'nullable|date',
        ]);

        // Buscar o blog
        $blog = Blog::find($id);

        // Verificar se o blog foi encontrado
        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog não encontrado!');
        }

        // Atualizar o blog
        $blog->update($validatedData);

        // Redirecionar para a lista de blogs com uma mensagem de sucesso
        return redirect()->route('blogs.index')->with('success', 'Blog atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Buscar o blog
        $blog = Blog::find($id);

        // Verificar se o blog foi encontrado
        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog não encontrado!');
        }

        // Deletar o blog
        $blog->delete();

        // Redirecionar para a lista de blogs com uma mensagem de sucesso
        return redirect()->route('blogs.index')->with('success', 'Blog deletado com sucesso!');
    }
}
