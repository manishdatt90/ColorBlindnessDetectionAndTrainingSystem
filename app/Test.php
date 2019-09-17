<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class, 'test_id', 'id');
    }

    public function isComplete()
    {
        return $this->answers()->count() >= 14;
    }

    public function hasRgd()
    {
        $correct = $this->answers()->where('is_correct', true)->get();

        return ($correct->where('is_rgd', true)->count() / $correct->count()) > 0.85;
    }
}
