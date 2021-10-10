@extends('layouts.app')

@section("content")
<div class="container">
    <div id="send" amt={{ $user->balance }} style="margin: 10rem"></div>
</div>
@endsection
