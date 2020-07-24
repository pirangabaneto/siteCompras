@extends('layouts.app')

@section('content')

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cadastrarproduto') }}">
                        @csrf

                        <!--Nome-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nameeeeeeeeeee') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{ old('name') }}" required autocomplete="name" autofocus  oninvalid="this.setCustomValidity('Please Enter valid sdfsdf')"  oninput="setCustomValidity('')" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!--Marca-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('marca') }}</label>

                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control @error('endereco') is-invalid @enderror" name="marca" value="{{ old('endereco') }}" required autocomplete="endereco" autofocus >

                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--lote-->
                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('lote') }}</label>

                            <div class="col-md-6">
                                <input id="lote" type="text" class="form-control @error('telefone') is-invalid @enderror" name="lote" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus >

                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registe3333333333r') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
@endsection
