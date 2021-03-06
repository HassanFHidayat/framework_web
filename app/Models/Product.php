<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'price', 'category_id'];
    protected $guarded = ['update_at', 'created_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
