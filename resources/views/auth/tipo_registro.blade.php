@extends('layouts.app')

<style>
    html, body {
           /* background-color: #fff;*/
           background-image: url("/images/registrar_mercado.png");
           background-size: 100% 100%;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">{{ __('Seleccionar tipo de registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('verificar_tipo_registro') }}" aria-label="{{ __('Verificar tipo de registro') }}">
                      @csrf
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="tipo" value="1">Clientes
                          <i class="fa fa-users lead"></i>
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="tipo" value="2">Empresa
                          <i class="fa fa-building lead"></i>
                        </label>
                      </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ir al registro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
