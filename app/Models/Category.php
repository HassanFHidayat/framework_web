<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";
    protected $primaryKey = "id";
    protected $fillable = ['name'];
    protected $guarded = ['update_at', 'created_at'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
