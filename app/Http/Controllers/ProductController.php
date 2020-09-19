<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->middleware([])->only([
            'create',
            'store'
        ]);
    }

    public function index()
    {
        $teste = 123;
        $teste2 = [4,4,2,6,8,3,7.2];
        $produtos = ['Tv', 'PC', 'Sofá'];
        $name = 'joao';
        return view('admin.pages.products.index', compact('name', 'teste', 'teste2', 'produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        dd('OK');
        
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'desc' => 'nullable|min:3|max:1000',
        //     'photo' => 'required|image'
        // ]);

        //dd('cadastrando');
        // dd($request->all());
        // dd($request->only(['nome', 'desc']));
        //dd($request->nome);
        // dd($request->has('nome'));
        if($request->file('photo')->isValid()) {
            //dd($request->photo->store('products'));
            $nameFile = $request->nome. '.' . $request->photo->extension();
            dd($request->photo->storeAs('products', $nameFile));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Detalhes do produto {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
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
        dd("Editando produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
