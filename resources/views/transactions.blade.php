@extends("layouts.app")

@section("content")
<div class="row" style="margin-top: 10rem; margin-left: 30rem; margin-bottom:10rem;">
    <div class="col-sm-4">
        <h2 style="text-align: center">Sent</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Sent to</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach (auth()->user()->sent as $sent)
            <tr>
                <td>{{ $loop->index + 1}} </td>
                <td> {{ $sent->reciever->name }}</td>
                <td>{{ $sent->amount }}</td>
                <td> {{ $sent->created_at }}
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
 <div class="col-sm-4">
        <h2 style="text-align: center">Recieved</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Recieved From</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach (auth()->user()->recieved as $sent)
            <tr>
                <td>{{ $loop->index + 1}} </td>
                <td> {{ $sent->sender->name }}</td>
                <td>{{ $sent->amount }}</td>
                <td> {{ $sent->created_at }}
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
