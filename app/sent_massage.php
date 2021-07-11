<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sent_massage extends Model
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
    public function book()
      {
          return $this->belongsTo(Book::class, 'book_id', 'id');
      }
}
