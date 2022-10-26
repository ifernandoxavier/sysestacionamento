@extends('layouts.main')

@section ('title', 'Visualizar')

@section ('content')
    <div class="showID">
        @php
          $user=$carro->find($carro->id)->relUsers;  
        @endphp
        Id: {{$carro->id}} <br>
        Placa: {{$carro->placa}} <br>
        Modelo: {{$carro->modelo}} <br>
        Data de entrada: {{ date('d/m/Y', strtotime($carro->date))}}<br>
        Hora de entrada: {{$carro->time}} <br>
        Recebido por: {{$user->name}}<br>
    </div>

@endsection