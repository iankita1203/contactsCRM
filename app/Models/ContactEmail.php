<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactEmail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['contact_id','email','is_primary'];

    protected $dates = ['deleted_at'];
}
