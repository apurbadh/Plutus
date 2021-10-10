@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 10rem; margin-bottom:10rem">

                  @foreach ($errors->all() as $error)
                     <div class="alert alert-danger" role="alert">
                            {{ $error }}
                    </div>
                  @endforeach<div class="title">Log In</div>
                <div class="content">
                <form action="" method="POST">
                    @csrf
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Enter your Email" name="email" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your Password" name="password" required />
                    </div>
                    </div>
                    <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" />
                    <span class="gender-title">Save Login</span>
                    <br/>
                    <input type="checkbox" name="remember"/>  Remember Me

                    </div>
                    <div class="button">
                    <input type="submit" value="Login" />
                    </div>
                </form>
                <a href="/register">Not registered yet ?</a>
                </div>
</div>
@endsection
