<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class researchers extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'researchers';
    protected $primaryKey = 'id_researchers';
    protected $fillable = [
        'pib',
        'email',
        'password'
    ];

       
}
