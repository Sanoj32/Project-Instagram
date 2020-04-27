<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[''];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/v9E034nbiyGHDd5yEoZPOYcjthfvbHeonFu7kH2Y.jpeg';
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
