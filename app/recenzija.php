<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recenzija extends Model
{
    //
    protected $table = 'recenzijas';

  //  public $primarykey = 'id';

    //public $timestamps = true;

    protected $fillable = [
       'title', 'body', 'user_id'
   ];

   public function user()
    {
      return $this->belongsTo('App\User');
   }
}
