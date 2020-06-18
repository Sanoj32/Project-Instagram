<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[''];   // to avoid mass fillable exveption

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/image/default.jpeg';
        return '/storage/'. $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
