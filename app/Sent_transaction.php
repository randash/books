<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sent_transaction extends Model
{
  protected $fillable = [
      'reciver_id',
      'book_id',
      'massage'
  ];
  public function user()
    {
        return $this->belongsTo(User::class, 'reciver_id', 'id');
    }
}
