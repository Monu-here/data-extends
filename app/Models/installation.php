<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class installation extends Model
{
    use HasFactory;
    public function customer() {
        return $this->belongsTo(customer::class, 'customer_name');
    }
    public function app() {
        return $this->belongsTo(app::class,'app_name');
    }
}
