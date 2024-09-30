<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\DadosEsp32;
use Illuminate\Http\Request;
class SiteController extends Controller
{

    public function index()
    {
        return view('home');
    }
    
    public function graficos()
    {
        return view('graficos');
    }
    
    public function products()
    {
        return view('products');
    }

    public function dados()
    {
        return view('dados');
    }

    public function apiDados()
    {   
        $dados = DadosEsp32::orderby('id', 'desc')->get();
        return response()->json($dados);
    }

    public function dadosEsp32(Request $request)
    {
        try {
            
            // Captura do IP do usuário
            $ip = $request->ip();

            // Substitui vírgulas por pontos nos valores de temperatura, umidade e luz
            $temperatura = str_replace(',', '.', $request->temperatura);
            $umidade = str_replace(',', '.', $request->umidade);
            $luz = str_replace(',', '.', $request->luz);

            // Criando os dados no banco usando create()
            DadosEsp32::create([
                'n_equipamento' => $request->n_equipamento,
                'temperatura' => $temperatura,
                'umidade' => $umidade,
                'luz' => $luz,
                'movimento' => $request->movimento,
                'ip' => $ip,
            ]);

            // Retornando resposta de sucesso
            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            // Em caso de erro, retorne a falha
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
