<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    public function datasets()
    {
        return $this->hasMany(Dataset::class);
    }
}
