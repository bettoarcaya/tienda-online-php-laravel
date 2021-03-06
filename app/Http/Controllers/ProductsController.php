<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Producto;

use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $prod = Producto::all();
        return view('productos.index')->with("productos", $prod);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

      $produc = new Producto;
      return view('productos.create')->with("producto", $produc);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      //guardamos el producto obteniendo datos desde el formulario
      $produc = new Producto;

      $produc->title = $request->title;
      $produc->description = $request->description;
      $produc->precio = $request->pricing;
      $produc->user_id = Auth::user()->id;

      if($produc->save()){
        return redirect("/productos");
      }

      return view("productos.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
      $produc = Producto::find($id);

      return view('productos.show')->with('producto', $produc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
        $produc = Producto::find($id);
      return view('productos.editar')->with("producto", $produc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        $produc = Producto::find($id);

        $produc->title = $request->title;
        $produc->description = $request->description;
        $produc->precio = $request->pricing;

        if($produc->save()){
          return redirect('/productos');
        }

        return view('productos.editar')->with("producto", $produc);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
       //
       $product = Producto::find($id);

      return view('productos.eliminar')->with('producto', $product);
    }
    public function destroy($id){
        //
        $product = Producto::find($id);
        $product->delete();

      return redirect('/productos');
    }
}
