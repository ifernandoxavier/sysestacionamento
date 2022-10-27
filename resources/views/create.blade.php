@extends('layouts.main')

@if (isset($carro))
@section ('title', 'Atualizando')
@else
@section ('title', 'Cadastrando entrada')
@endif

@section ('content')
    @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 alert alert-danger" role="alert">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
    @endif
    @if (isset($carro))
        <form name="formEdit" id="formEdit" method="POST" action="{{url("estacionamento/$carro->id")}}">
            @method('PUT')
    @else
        <form name="formCad" id="formCad" method="POST" action="{{url('estacionamento')}}">
    @endif
    <div class="createCarros">
            @csrf
            <input class="form-control" type="text" name="placa" id="placa" placeholder="Placa:" value="{{$carro->placa ?? ''}}" required> <br>
            <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo:" value="{{$carro->modelo ?? ''}}" required> <br>

            <input class="form-control" type="date" name="date" id="date" placeholder="Data:" required> <br>
            <input class="form-control" type="text" name="date2" id="date2" placeholder="Data:" value="{{$carro->date ?? ''}}"  required disabled> <br>

            <input class="form-control" type="time" name="time" id="time" placeholder="Time:" value="{{$carro->time ?? ''}}" required> <br>
            <select class="form-control" name="id_user" id="id_user" required> 
                <option value="{{$carro->relUsers->id ?? ''}}">{{$carro->relUsers->name ?? ''}}</option>
                @foreach ($users as $user)
                {
                    <option value="{{$user->id}}">{{$user->name}}</option>
                }
                @endforeach
            </select> <br>
            @if ((isset($carro)))
                <input class="btn btn-success" type="submit" value="Editar">
            @else
                <input class="btn btn-success" type="submit" value="Cadastrar">
            @endif
        </form>
    </div>
@endsection