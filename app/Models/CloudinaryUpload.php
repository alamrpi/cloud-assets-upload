<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudinaryUpload extends Model
{
    use HasFactory;
    protected $fillable = ['public_id', 'asset_url', 'created_at', 'updated_at'];
}
