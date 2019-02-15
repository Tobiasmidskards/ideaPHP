<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    // Table Name (Default Post)
    protected $table = 'ideas';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}
