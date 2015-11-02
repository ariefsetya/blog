@extends('app')

@section('content')

<div class="login-form block-shadow" 
	style="width:300px;margin:50px auto;padding:10px;">
    <form method="POST" action="{{ url('auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1 class="text-light">Sign In</h1>
        <hr class="thin">
        <br>
        <div class="input-control text full-size" data-role="input">
            <label for="user_login">User email:</label>
            <input type="text" name="email" id="user_login" style="padding-right: 29px;">
            <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
        </div>
        <br>
        <br>
        <div class="input-control password full-size" data-role="input">
            <label for="user_password">User password:</label>
            <input type="password" name="password" id="user_password" style="padding-right: 29px;">
            <button class="button helper-button reveal" tabindex="-1" type="button"><span class="mif-looks"></span></button>
        </div>
        <br>
        <br>
        <div class="form-actions">
            <button type="submit" class="button primary">Sign In</button>
        </div>
    </form>
</div>

@endsection
