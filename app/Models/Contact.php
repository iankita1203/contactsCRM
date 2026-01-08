<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ContactEmail;
use App\Models\ContactPhone;
use App\Models\ContactCustomField;

class Contacts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','gender','profile_image', 'attachment','status','merged_into'];

    protected $dates = ['deleted_at'];

    public function emails() {
        return $this->hasMany(ContactEmail::class);
    }

    public function phones() {
        return $this->hasMany(ContactPhone::class);
    }

    public function customFields() {
        return $this->hasMany(ContactCustomField::class);
    }
}
