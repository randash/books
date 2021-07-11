<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
      'name',
      'kind',
      'info',
      'sate',
      'price',
      'action',
      'author',
      'image',
      'user_id'
  ];


  public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function recived_massages()
    {
        return $this->hasMany(recived_massage::class);
    }
    public function sent_massages()
    {
        return $this->hasMany(sent_massage::class);
    }
}
