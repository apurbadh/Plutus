<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory;

    public function sender()
    {
        return $this->belongsTo(User::class, "sender_id");
    }

    public function reciever()
    {
        return $this->belongsTo(User::class, "reciever_id");
    }

    protected $fillable = [
        "sender_id",
        "reciever_id",
        "amount"
    ];
}
