<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rezervacija extends Model
{
    //
    protected $table = 'rezervacija';

  //  public $primarykey = 'id';

    //public $timestamps = true;

    protected $fillable = [
       'ime_prezime','br_telefona', 'datum', 'vrijeme','user_id','odobrena'
   ];

   public function user()
    {
      return $this->belongsTo('App\User');
   }
}
