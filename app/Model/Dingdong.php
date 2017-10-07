<?php

namespace App\Model;

class Dingdong extends Model
{
    public function controls()
    {
        return $this->hasMany(DingdongControl::class, 'dingdong_id', 'id');
    }
}
