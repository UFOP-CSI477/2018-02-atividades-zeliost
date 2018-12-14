<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Compra;

class CompraController extends Controller
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
      $compras = Compra::get()->sortBy('nome');
      return view ('compras.index')->with('compras', $compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'quantidade'=>'required',
        'data'=> 'required',
      ]);
      $share = new Share([
        'quantidade' => $request->get('quantidade'),
        'data'=> $request->get('data')
      ]);
      $share->save();
      return redirect('/compra')->with('parabéns', 'produto adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        return view('produtos.show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $produtos = Produto::find($id);
      return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
      'share_name'=>'required',
      'share_price'=> 'required|integer',
      'share_qty' => 'required|integer'
    ]);

    $share = Share::find($id);
    $share->share_name = $request->get('share_name');
    $share->share_price = $request->get('share_price');
    $share->share_qty = $request->get('share_qty');
    $share->save();

    return redirect('/shares')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $compras = Compra::find($id);
      $compras->delete();
      return redirect('/produtos')->with('parabens', 'Compra deletado com sucesso');
    }
}
