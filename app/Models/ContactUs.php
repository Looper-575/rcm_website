<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable  = [
      'name', 'email', 'service', 'phone_number', 'date', 'time', 'time_zone', 'created_at', 'updated_at'
    ];
}
