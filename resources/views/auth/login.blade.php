@extends('layouts.app')

@section('content')
<style>
    .block-small{
    max-width: 600px;
    margin: 0 auto;
}

.form-check{
    background-color: #f4f8ff;
    padding: 20px 65px;
    margin-top: 7px;
}
</style>
<div class="block-small">
    
     <form method="POST" action="{{ route('login') }}">
      @csrf
        
    

    <h1 class="h3 mb-3 font-weight-normal text-center mt-3">{{ __('Login') }}</h1>
    <label for="inputEmail">{{ __('E-Mail Address') }}:</label>
    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="email" required autofocus>
     @error('email')
        <p class="alert alert-danger">
            {{ $message }}
        </p>
      @enderror

    <label class="mt-3" for="inputPassword">{{ __('Password') }}:</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe" autocomplete="current-password" required>
      @error('password')
        <p class="alert alert-danger">
          {{ $message }}
        </p>
      @enderror
     <label class="mt-3" for="remember">
        <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
            <span class="ml-2">{{ __('Remember Me') }}</span>
    </label>

    @if (Route::has('password.request'))
                        <a class="float-right"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif

   
    <br><button class="btn btn-lg btn-info btn-block mt-3" type="submit">
        {{ __('Login') }}
    </button>
    <hr>
    <p class="text-center">
        @if (Route::has('register'))
            <p class="">
                {{ __("Don't have an account?") }}
                    <a class="" href="{{ route('register') }}">
                                {{ __('Register') }}
                    </a>
            </p>
        @endif</p>
</form>
</div>







@endsection
