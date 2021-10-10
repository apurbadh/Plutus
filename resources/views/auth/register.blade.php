@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/register.css"/>

<div class="container" style="margin: 10rem">
    @foreach ($errors->all() as $error)
                     <div class="alert alert-danger" role="alert">
                            {{ $error }}
                    </div>
                  @endforeach
                <div class="title">Sign Up</div>
                <div class="content">
                <form action="" method="POST">
                    @csrf
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your Username" required name="name" />
                    </div>
                    <div class="input-box">
                        <span className="details">Email</span>
                        <input type="email" placeholder="Enter your Email" required name="email" />
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your Password" name="password" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm your Password" name="password_confirmation" required />
                    </div>
                    </div>

                    <div class="button">
                    <input type="submit" value="Register" />
                    </div>
                </form>
                <a href="/login">Already Registered ?</a>
                </div>
            </div>
@endsection
