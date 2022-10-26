<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstacionamentoRequest;
use Illuminate\Http\Request;
use App\Models\ModelEstacionamento;
use App\Models\User;

class EstacionamentoController extends Controller
{
    private $objCarro;
    private $objUser;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objCarro = new ModelEstacionamento();
    }
    
    public function index()
    {
        //dd($this->objCarro->all());
        //dd($this->objCarro->find(3)->relUsers);
        $carro=$this->objCarro->all();
        return view('estacionamento', compact('carro'));
    }

    public function create()
    {
        $users=$this->objUser->all();
        return view('create', compact('users'));
    }

    public function store(EstacionamentoRequest $request)
    {
        $cad=$this->objCarro->create([
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
        $carro=$this->objCarro->find($id);
        return view('show', compact('carro'));
    }
    public function edit($id)
    {
        $carro=$this->objCarro->find($id);
        $users=$this->objUser->all();
        return view('create', compact('carro', 'users'));
    }
    public function update(EstacionamentoRequest $request, $id)
    {
        $this->objCarro->where(['id'=>$id])->update([
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
       $del=$this->objCarro->destroy($id);
       return($del)?"sim":"não";
    }
}
