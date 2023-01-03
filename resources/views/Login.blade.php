@extends('MainBody.Main')

@section('container')
    <h5>mark ini body login</h5>
    <form action="/Home" enctype="multipart/form-data" method="GET">
        @csrf
        <h1>Login</h1>
        <div class="LoginForm">
            <Label>Email</Label>
            <br>
            <input type="email" name="email" placeholder="Enter Your Email">
            <br>
            <br>
            <label for="Password">Password</label>
            <br>
            <input type="password" name="password" placeholder="Enter Your Password">
            <br>
        </div>


        <br>
        <div class="RememberMe">
            <div>
                <input type="CheckBox" name="CheckList" checked={{ Cookie::get('mycookie') != null }}>
                <h5 style="display: inline-block">Remember Me</h5>
            </div>
        </div>

        <div class="LoginButton">
            <input type="submit" name="LoginButton" value="Login">
        </div>

        <br>

        <div class="Registerpage">
            <h5>Don't have an account?<a href="/register"> Register Here</a></h5>
        </div>


    </form>
@endsection
