<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // Buscar todos os blogs
        $blogs = Blog::all();

        // Retornar a view com os blogs
        return view('blogs.index', compact('blogs'));
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

    public function show($id)
    {
        // Buscar o blog
        $blog = Blog::find($id);

        // Verificar se o blog foi encontrado
        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog não encontrado!');
        }

        // Retornar a view com o blog
        return view('blogs.show', compact('blog'));
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
