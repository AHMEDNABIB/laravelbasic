<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Dealers;

class Brands extends Model
{
    use HasFactory;

   public function dealers()
    {
        return $this->hasOne(Dealers::class, 'brand_id', 'id');
    }
}
