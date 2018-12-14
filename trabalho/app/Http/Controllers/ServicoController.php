<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Servico;

class ServicoController extends Controller
{

  public function __construct(){
    $this->middleware('auth')->except('index'); // except protege o dado
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $servicos = Servico::get()->sortBy('distancia'); // exibir mais proximos
      //$servicos = Servico::all();
      //$servicos = Servico::where("user_id", Auth::user()->id)->get();
      // garantir que apenas o usuario logado veja o seu serviço
      return view('servicos.index')->with('servicos', $servicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Servico::create($request->all());
      //return redirect('/servicos')->with('successo', 'Serviço adicionado com sucesso');

      $formInput = $request->except('imgservico');
      //validação
      $this->validate($request,[
        'servico'=>'required',
        'imgservico'=>'image|mimes:png,jpg,jpeg|max:10000',
        'email'=>'required',
        'telefone'=>'required',
        'distancia'=>'required',
      ]);

      // upload da imagem
      $imgservico = $request->imgservico;
      if($imgservico){
        $imagemName = $imgservico->getClientOriginalName();
        $imgservico->move('images', $imagemName);
        $formInput['imgservico']=$imagemName;
      }
      Servico::create($formInput);
      return redirect()->route('servicos.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
        return view('servicos.show')->with('servico', $servico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servico $servico)
    {
        return view('servicos.edit')->with('servico', $servico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {
      $servico->fill($request->all());
      $servico->save();
      session()->flash('mensagem', 'Serviço atualizado com sucesso!');
      return redirect()->route('servicos.show', $servico->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servico $servico) // do outro controller.. de outro modo
    {
      $servico->delete();
      session()->flash('mensagem', 'Servico excluido com sucesso!');
      return redirect()->route('servicos.index');
    }


    public function search(Request $request){
      $text = $request->servico;
      $registros = Registro::where('servico', 'LIKE', "%{text}%")->get();

      return view('servicos.index')
                ->with('servicos', $registros);

    }
}
