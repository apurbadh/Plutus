@extends('layouts.app')

@section("content")

    <input type="hidden" id="notifications" value="{{ $notifications }}"/>
    <input type="hidden" id="user_balance" value="{{ Auth::user()->balance }}"/>
    <div id="dashboard-react"></div>
@endsection
