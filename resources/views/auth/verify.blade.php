@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de Email!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um lembrete de senha foi enviado ao seu Email.') }}
                        </div>
                    @endif

                    {{ __('Verifique sua caixa de Email.') }}
                    {{ __('Caso não tenha recebido seu email ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para solicitar novamente.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
