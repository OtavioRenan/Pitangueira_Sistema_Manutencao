@extends('layouts.login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-label-group">                
                        <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email">E-mail: </label>
                    </div>
                    <div class="form-label-group">              
                        <input type="password" id="senha" name="senha" class="form-control @error('senha') is-invalid @enderror" placeholder="******************" required autocomplete="current-senha">
                        @error('senha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="senha">Senha: </label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">
                            {{ __('Lembre-se') }}
                        </label>                        
                    </div>                    
                    <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit">Entrar</button><br/>
                    <div class="card card-signin ">    
                        <div class="d-flex justify-content-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-center text-body" href="{{ route('password.request') }}">
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
</div> <!-- container -->
@endsection
