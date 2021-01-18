<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ZoomClass extends Model
{

    protected $table = 'zoomclasses'; 
     

    protected $fillable = [
    
        'title', 'user_id', 'zoom_email', 'meeting_id', 'meeting_password', 'jwt_key', 'jwt_secret'
    ]; 

}
