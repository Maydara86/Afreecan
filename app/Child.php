<?php

namespace App;

class Child extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
