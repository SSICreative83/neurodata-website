<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'file_path', 'data_type_id', 'user_id'];

    public function dataType()
    {
        return $this->belongsTo(DataType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
