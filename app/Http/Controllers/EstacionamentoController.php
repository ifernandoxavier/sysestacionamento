<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelEstacionamento;
use App\Models\User;
use App\Http\Requests\EstacionamentoRequest;

class EstacionamentoController extends Controller
{    
    public function index()
    {
        //dd($this->objCarro->all());
        //dd($this->objCarro->find(3)->relUsers);
        $carro=ModelEstacionamento::all();
        return view('estacionamento', compact('carro'));
    }

    public function create()
    {
        $users=User::all();
        return view('create', compact('users'));
    }

    public function store(EstacionamentoRequest $request)
    {
        $cad=ModelEstacionamento::create([
            'placa'=>$request->placa,
            'modelo'=>$request->modelo,
            'id_user'=>$request->id_user,
            'date'=>$request->date,
            'time'=>$request->time
        ]);
        if($cad)
        {
            return redirect('estacionamento');
        }
    }
    public function show($id)
    {
        $carro=ModelEstacionamento::find($id);
        return view('show', compact('carro'));
    }
    public function edit($id)
    {
        $carro=ModelEstacionamento::find($id);
        $users=User::all();
        return view('create', compact('carro', 'users'));
    }
    public function update(EstacionamentoRequest $request, $id)
    {
        ModelEstacionamento::where(['id'=>$id])->update([
            'placa'=>$request->placa,
            'modelo'=>$request->modelo,
            'id_user'=>$request->id_user,
            'date'=>$request->date,
            'time'=>$request->time
        ]);

        return redirect('estacionamento');
    }
    public function destroy($id)
    {
       // return redirect('estacionamento');
       $del=ModelEstacionamento::destroy($id);
       return($del)?"sim":"não";
    }
}
