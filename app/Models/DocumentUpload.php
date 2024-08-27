<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentUpload extends Model
{
    use HasFactory;
    protected $table ='document_upload';
    protected $fillable = [
        'name',
        'path'
    ];
}
