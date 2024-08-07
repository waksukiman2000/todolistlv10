<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'tasks';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['guarded'];

    protected $fillable = ['fillable'];
}
