<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Notifications\TransactionNotification;
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
        $sender_data = ["message" => "You sent ".$reciever->name." $$amount", "amount" => $amount, "className" => "debit-amount", "symbol" => "-"];
        $sender->notify(new TransactionNotification($sender_data));
        $reciever_data = ["message" => "You got $$amount from ".$sender->name, "amount" => $amount, "className" => "credit-amount", "symbol" => "+"];
        $reciever->notify(new TransactionNotification($reciever_data));
        return redirect()->back()->with("message", "Money Sent Sucessfully !");
    }

    public function transaction(Request $request)
    {
        return view("transactions");
    }
}
