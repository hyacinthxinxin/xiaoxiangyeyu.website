<?php

namespace App\Model;


class AdminDingdong extends Model
{
    public function rooms() {
        return $this->hasMany(DingdongRoom::class, 'dingdong_id', 'id');
    }
}
