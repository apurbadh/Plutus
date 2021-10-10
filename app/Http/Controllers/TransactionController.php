<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        return view("send");
    }

    public function sendMoney(Request $request)
    {
        $request->validate([
            "reciever" => "required|exists:users,email|not_in:".$request->user()->email,
            "amount" => "required|lte:".$request->user()->balance,
        ]);
        $amount = (int) $request->amount;
        $sender = $request->user();
        $reciever = User::where("email", $request->reciever)->first();
        Transaction::create(["sender_id" => $sender->id, "reciever_id" => $reciever->id, "amount" => $amount]);
        $sender->balance = $sender->balance - $amount;
        $sender->save();
        $reciever->balance = $reciever->balance + $amount;
        $reciever->save();
        return redirect()->back()->with("message", "Money Sent Sucessfully !");
    }

    public function transaction(Request $request)
    {
        return view("transactions");
    }
}
