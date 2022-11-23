<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messageModel extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'number',
        'message',
        'remarks'
    ];
    protected $table='message';
    protected $primaryKey='id';
}
