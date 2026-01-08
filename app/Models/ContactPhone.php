<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactPhone extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['contact_id','phone','is_primary'];

    protected $dates = ['deleted_at'];
}
