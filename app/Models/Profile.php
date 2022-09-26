<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/D0KYAQYmpqrfRxARf27TElKPU5cUhLrQwZhr2VUB.jpg';
        return '/storage/' . $imagePath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
