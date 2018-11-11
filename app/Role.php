<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN    = 1;
    const TEACHER  = 2;
    const STUDENET = 3;
}
