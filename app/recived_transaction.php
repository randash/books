<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recived_transaction extends Model
{
  protected $fillable = [
      'sender_id',
      'book_id',
      'massage'
  ];
  public function user()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }
}
