@extends('layouts.app')

@section("content")
<div class="container">
    <form method="POST" action="" style="margin: 10rem">
        @foreach ($errors->all() as $error)
                     <div class="alert alert-danger" role="alert">
                            {{ $error }}
                    </div>
                  @endforeach
        @if (session()->has("message"))
           <div class="alert alert-success">
                {{ session()->get("message") }}
           </div>
        @endif
        @csrf
        <div id="send" amt={{ Auth::user()->balance }}></div>
    </form>
</div>

@endsection

