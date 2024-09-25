<?php

namespace App\Http\Controllers;

use App\Models\Demandas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PainelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cadastro = Session::get('usuario');
        
        return view('painel.home.index', compact('cadastro'));
    }

    
    public function referencia()
    {

        return view('painel.tela_referencia.index');
    }

    
    public function marcadores()
    {
        return view('painel.tela_demandas.marcadores');
    }


    public function listar_demandas()
    {
        $demandas = Demandas::all();
        return view('painel.tela_demandas.index', compact('demandas'));
    }

    public function demandas()
    {
        
        return view('painel.tela_demandas.criar');
    }


    public function storeDemandas(Request $request) { 
     
        $demandas = Demandas::create([
            
            "tipo_arquivo"=> $request->tipo_arquivo,
            
            
        ]);
        
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid( )) 
        {
            $requestarquivo = $request->arquivo;
            $extension = $requestarquivo->extension();
            $arquivoName = md5($requestarquivo->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestarquivo->move(public_path('demandas'), $arquivoName);
            $nomearquivoCompleto = 'demandas/'.$arquivoName;
            $demandas->arquivo = $nomearquivoCompleto;
            // $demandas->nome_arquivo = $requestarquivo->getClientOriginalName();
            $demandas->save();
        }

        return response()->json([
            'status'=>'Success',
            "mensagem"=>'Cadastrado com sucesso'
        ]);

    }    

    public function entrega_demanda(){
        
        return view('painel.tela_demandas.listar_entrega');
    }
   
   
    public function visualizar_entregas(){
        
        return view('painel.tela_demandas.visualizar_entregas');
    }

    public function home_demandas_entregues($id){
        
        return view('painel.tela_demandas.home_demandas_entregues',  compact("id"));
    }

    public function analisar_demandas(){
        
        return view('painel.tela_demandas.analisar_demandas');
    }

    public function colocacao(){
        
        return view('painel.tela_demandas.colocacao');
    }
}   
