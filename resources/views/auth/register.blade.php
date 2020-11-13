@extends('layouts.login')
@section('content')
<div class="container">    
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Registrar</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-label-group">
                        <input name="nome" type="text" id="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                        @error('nome')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="nome">Nome: </label>
                    </div>
                    <div class="form-label-group">
                        <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email">E-mail: </label>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="cargo">Cargo: </label>
                        </div>
                        <div class="col-sm-10">
                            <select id="cargo" id="cargo" name="cargo" class="form-control @error('cargo') is-invalid @enderror" required>
                                <option selected>SELECIONAR</option>
                                <option value="1">TÉCNICO</option>
                                <option value="2">GESTOR</option>
                            </select>
                        </div>
                        @error('cargo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-label-group">              
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="*****************" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password">Senha: </label>
                    </div>
                    <div class="form-label-group">              
                        <input class="form-control @error('senha') is-invalid @enderror" placeholder="*****************" id="senha-confirm" type="password" name="senha_confirmation" required autocomplete="new-senha">
                        @error('senha-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="senha-confirm">Confirme a senha: </label>
                    </div>                                       
                    <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit">Registrar</button><br/>
                    <div class="card card-signin ">    
                        <div class="d-flex justify-content-center">
                            @if (Route::has('senha.request'))
                                <a class="btn btn-link text-center text-body" href="{{ route('senha.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div> <!-- card-body -->
        </div> <!-- card card-signin my-5 -->
      </div> <!-- col-sm-9 col-md-7 col-lg-5 mx-autos -->
    </div> <!-- row -->
</div>
@endsection