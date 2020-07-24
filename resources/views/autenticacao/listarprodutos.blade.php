@extends('layouts.app')

@section('content')

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @csrf

                    <table border ='1'>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->marca}}</td>
                            <td>{{$produto->lote}}</td>
                            <td><a href='/produto/editar/{{ $produto->id }}'>Editar</a> - 
                            <a href='/produto/remover/{{ $produto->id }}'>Remover</a></td>
                        <tr>
                        @endforeach
                    </table>
                </div>
@endsection
