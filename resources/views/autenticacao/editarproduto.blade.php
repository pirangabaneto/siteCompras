@extends('layouts.app')

@section('content')

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <h1> editarrrrrr</h1>
                    <form method="POST" action="{{ route('atualizarproduto') }}">
                        @csrf

                        <input type="hidden" name=" token" value="{{  csrf_token()  }}">
                        <input type="hidden" name="id" value="{{  $produto->id  }}">
                        <input type="text" name="nome" value="{{  $produto->nome  }}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('atualizarrrrrrr') }}
                                </button>
                            </div>
                        </div>
                    </form>

                   
                </div>
@endsection
