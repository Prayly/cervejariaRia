<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCerveja;
use App\Models\Cerveja;
use Illuminate\Http\Request;

class CervejaController extends Controller
{
    function index(){
        $contador=0;
        $Cervejas=Cerveja::all();//traz todos livros pro array
        return view('cervejaria.index',compact('Cervejas','contador'));
    }

    function cadastra(){
        return view('cervejaria.cadastra');
    }

    function store(StoreUpdateCerveja $request){
        if ($request->hasFile('nomeImagem')) {
            $input = $request->all();
            $filenameWithExt = $request->file('nomeImagem')->getClientOriginalName ();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('nomeImagem')->getClientOriginalExtension();
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            $request->file('nomeImagem')->storeAs('public/image', $fileNameToStore);

            $input['nomeImagem']="$fileNameToStore";

            Cerveja::create($input);//banco::create
            return redirect()-> route('cervejaria.index');

        }else { // Else add a dummy image
            $fileNameToStore = 'noimage.jpg';
        }
        return redirect()-> route('cervejaria.cadastra');
        
        
    }
    function show($id){
        $cerveja = Cerveja::find($id);//todas chaves primarias unique funciona
        if(!$cerveja){
            return redirect()->route('cervejaria.index')->with('message','Produto não encontrado');
        }
        return view('cervejaria.produto',compact('cerveja'));
    }

    function edit($id){
        $Cerveja = Cerveja::find($id);
        if(!$Cerveja){
            return redirect()->route('cervejaria.index')->with('message','Produto não encontrado');
        }

        return view('Cervejaria.edita',compact('Cerveja'));
    }

    function update(StoreUpdateCerveja $request, $id){
        $Cerveja = Cerveja::find($id);
        if ($request->hasFile('nomeImagem')) {
            $input = $request->all();
            $filenameWithExt = $request->file('nomeImagem')->getClientOriginalName ();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('nomeImagem')->getClientOriginalExtension();
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            $request->file('nomeImagem')->storeAs('public/image', $fileNameToStore);

            $input['nomeImagem']="$fileNameToStore";

            $Cerveja->update($input);
            return redirect()-> route('cervejaria.index');

        }
        $Cerveja->update($request->all());

        return redirect()->route('cervejaria.index')->with('message','Produto editado');
    }

    function destroy($id){
        $Cerveja = Cerveja::find($id);//todas chaves primarias unique funciona
        if(!$Cerveja){
            return redirect()->route('cervejaria.index')->with('message','Produto não encontrado');
        }
        $Cerveja->delete();
        return redirect()->route('cervejaria.index')->with('message','Produto deletado');
    }

}
