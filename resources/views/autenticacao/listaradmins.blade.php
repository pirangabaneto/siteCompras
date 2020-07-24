@extends('layouts.app')

@section('content')

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @csrf

                    <table border ='1'>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->id}}</td>
                            <td>{{$admin->nome}}</td>
                            <td>{{$admin->endereco}}</td>
                            <td>{{$admin->telefone}}</td>
                            <td><a href='/admin/editar/{{ $admin->id }}'>Editar</a> - 
                            <a href='/admin/remover/{{ $admin->id }}'>Remover</a></td>
                        <tr>
                        @endforeach
                    </table>
                </div>
@endsection
