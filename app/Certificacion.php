<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    
    public function getRouteKeyName()
    {
        return 'url';
    }
}
