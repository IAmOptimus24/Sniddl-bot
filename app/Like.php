<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'user_id',
    'post_id'
  ];

  public function post()
  {
    return $this->belongsTo('App\Post', 'post_id');
  }
}
