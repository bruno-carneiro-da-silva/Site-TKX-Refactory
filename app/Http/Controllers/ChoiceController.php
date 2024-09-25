<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;

class ChoiceController extends Controller
{
    public function store(Request $request)
    {
        // Validar os dados recebidos
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:choices,email',
            'phone' => 'required|string|max:15|unique:choices,phone',
            'cnpj' => 'required|string|max:18|unique:choices,cnpj',
            'choices' => 'required|array',
        ]);

        $existingChoice = Choice::where('email', $validatedData['email'])
            ->orWhere('phone', $validatedData['phone'])
            ->orWhere('cnpj', $validatedData['cnpj'])
            ->first();

        if($existingChoice) {
            return response()->json([
                'message' => 'Já existe uma escolha com esses dados!',
                'data' => $existingChoice
            ], 409);
        }

        // Criar o recurso (aqui você pode salvar no banco de dados, por exemplo)
        $choice = Choice::create($validatedData);

        // Retornar uma resposta de sucesso
        return response()->json([
            'message' => 'Escolhas salvas com sucesso!',
            'data' => $choice
        ], 201);
    }

    public function findAll()
    {
        // Buscar todos os recursos
        $choices = Choice::all();

        // Retornar os recursos encontrados
        return response()->json([
            'data' => $choices
        ], 200);
    }

    public function show($id)
    {
        // Buscar o recurso
        $choice = Choice::find($id);

        // Verificar se o recurso foi encontrado
        if(!$choice) {
            return response()->json([
                'message' => 'Escolha não encontrada!'
            ], 404);
        }

        // Retornar o recurso encontrado
        return response()->json([
            'data' => $choice
        ], 200);
    }
}
