<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
       'user_id', 'client_name', 'phone',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function type_order(){
        return $this->belongsTo('App\TypeOrder');
    }

    public function type_client(){
        return $this->belongsTo('App\TypeClient');
    }

    public function type_payment(){
        return $this->belongsTo('App\TypePayment');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function service_office(){
        return $this->belongsTo(Office::class, 'office_id', 'id');
    }

    //public function avatar(){
       // return $this->hasManyThrough('App\UserAvatar', 'App\User', 'id', 'user_id');
        //return $this->user()->avatar();
   // }

    public function avatar(){
        return $this->user->avatar();
     }
}
