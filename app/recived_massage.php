<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recived_massage extends Model
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
    public function book()
      {
          return $this->belongsTo(Book::class, 'book_id', 'id');
      }
}
