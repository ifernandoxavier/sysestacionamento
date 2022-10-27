@extends('layouts.main')

@section ('title', 'Estacionamento')

@section ('content')

    <div class="btnCadatrar mt-3 mb-4 btn-lg">
      <a href="{{url('estacionamento/create')}}">
        <button type="button" class="btn btn-success">Cadastrar</ion-icon></button>
      </a>
    </div>

    <div class="tableCarros">
      @csrf
        <table class="table">
            <thead class="table-dark">
                <tr>
                  <th scope="col">Placa</th>
                  <th scope="col">Modelo</th>
                  <th scope="col">Data de entrada</th>
                  <th scope="col">Hora de entrada</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($carro as $carros)
                <tr>
                  <td class="upperTexto">{{$carros->placa}}</td>
                  <td class="upperTexto">{{$carros->modelo}}</td>
                  <td class="upperTexto">{{ date('d/m/Y', strtotime($carros->date))}}</td>
                  <td class="upperTexto">{{$carros->time}}</td>
                  <td>
                    <a href="{{url("estacionamento/$carros->id/edit")}}">
                      <button type="button" class="btn btn-primary btn-sm"><ion-icon name="create-outline"></ion-icon></button>
                    </a>
                    <a href="{{url("estacionamento/$carros->id")}}">
                      <button type="button" class="btn btn-dark btn-sm"><ion-icon name="eye-outline"></ion-icon></button>
                    </a>
                    <a href="{{url("estacionamento/$carros->id")}}" class="js-del">
                      <button type="button" class="btn btn-danger btn-sm"><ion-icon name="cash-outline"></ion-icon></button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
         </table>
    </div>
@endsection