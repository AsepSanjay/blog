@extends('app')

@section('content')
<div class="login-form block-shadow" style="width:350px;margin:50px auto;padding10px;" >
        <form method="POST" action="{{ url('auth/login') }}">
        <input type="hidden" name="_token"value="{{ csrf_token() }}">           
         <h1 class="text-light">Sign In</h1>
            <hr class="thin">
            <br>
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">User email:</label>
                <input style="padding-right: 42px;" name="email" id="user_login" type="text">
                <button type="button" tabindex="-1" class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br>
            <br>
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">User password:</label>
                <input style="padding-right: 42px;" name="password" id="user_password" type="password">
                <button type="button" tabindex="-1" class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br>
            <br>
            <div class="form-actions">
                <button type="submit" class="button primary">Login</button>
            </div>
        </form>
    </div>
@endsection
