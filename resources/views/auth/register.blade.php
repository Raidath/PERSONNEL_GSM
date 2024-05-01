@extends('layouts.app')

{{--  @section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" required>
                                    <option value="admin">Admin</option>
                                    <option value="Chef_service">Chef_service</option>
                                    <option value="employe">Employe</option>
                                    <option value="stagiaire">Stagiaire</option>
                                </select>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}



{{--
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form id="registration-form" method="post" action="{{ route('register') }}" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Nom <span class="blue">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Adresse Email <span class="blue">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="password">Mot de passe <span class="blue">*</span></label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Votre mot de passe">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirmation">Confirmez le mot de passe <span class="blue">*</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmez votre mot de passe">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="types">Types <span class="blue">*</span></label>
                        <select name="types" id="types" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Chef_service">Chef service</option>
                            <option value="Employé">Employé</option>
                            <option value="Stagiaire">Stagiaire</option>
                        </select>
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <input type="submit" class="button1" value="Annuler">
                    </div>
                    <div class="col-md-6">
                        <input type="submit" class="button1" value="S'inscrire">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection  --}}






@section('content')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{--  <div class="card-header">{{ __('Register') }}</div>  --}}
                <div class="col-md-6">
                 <h1> Inscription</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            {{--  <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>  --}}

                            {{--  <div class="row mb-0">
                                <div class="col-md-6 offset-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>  --}}
                                {{--  <div class="row mb-0">
                                <div class="col-md-6 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                        </div>
                        <p>Si vous avez  un compte, <a href=" {{ route('login') }}" >cliquez ici pour vous connecter</a></p>  --}}
                        <div class="row mb-3">
                            <div class="col-md-1 text-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}

                                </button>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p>Si vous avez un compte, <a href="{{ route('login') }}">cliquez ici pour vous connecter</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
