@extends('MainBody.Main')

@section('container')
@auth

@else
    <form action="/register" enctype="multipart/form-data" method="POST">
        @csrf
        <h1>Register</h1>
        <div class="RegisterForm">
            <Label>Name</Label>
            <br>
            <input type="text" name="name" placeholder="Enter Your Name">
            <br>
            <br>
            <label for="Email">Email</label>
            <br>
            <input type="email" name="email" placeholder="Enter Your Email">
            <br>
            <br>
            <label for="Password">Password</label>
            <br>
            <input type="password" name="password" placeholder="Enter Your Password">
            <br>
            <br>
            <label for="ConfirmPassword">Confirm Password</label>
            <br>
            <input type="password" name="ConfirmPassword" placeholder="Re-Type Your Password">
            <br>
            <br>
            <label for="">Gender</label>
            <br>
            <input type="radio" name="gender" value="Male">
            <label for="male">Male</label>
            <br>
            <input type="radio" name="gender" value="Female">
            <label for="Female">Female</label>
            <br>
            <br>
             <label for="DOB">Date Of burung</label>
            <br>
            <input type="date" name="DOB" placeholder="mm/dd/yyyy">
            <br>
            <br>
            <label for="Country">Country</label>
            <br>
            <select name="Country">
                <option value="option0" selected> Choose a country </option>
                <option value="option1"> Indonesia </option>
                <option value="option2"> Argentina </option>
                <option value="option3"> Portugal </option>
              </select>
            <br>
            <br>
            <div class="RegisterButton">
                <input type="submit" name="RegisterButton" value="Register">
            </div>

        </div>

        <div class="">

            @if($errors->has('name'))

                <p>{{ $errors->first('name') }}</p>

             @endif

            @if($errors->has('email'))

                <p>{{ $errors->first('email') }}</p>

            @endif

            @if($errors->has('password'))

                <p>{{ $errors->first('password') }}</p>

             @endif

            @if($errors->has('ConfirmPassword'))

                <p>{{ $errors->first('ConfirmPassword') }}</p>

             @endif

            @if($errors->has('gender'))

                <p>{{ $errors->first('gender') }}</p>

            @endif

            @if($errors->has('DOB'))

            <p>{{ $errors->first('DOB') }}</p>

            @endif

            @if($errors->has('Country'))

            <p>{{ $errors->first('Country') }}</p>

            @endif

            </div>

        </form>
        @endauth
        <br>
        <div class="">
            <h5> have an account?<a href="/login"> Login Here</a></h5>
        </div>



@endsection
