<?php

namespace App\Model;

class Dingdong extends Model
{
    public function user() {
        return $this->belongsTo(AdminUser::class, 'admin_user_id', 'id');
    }

    public function controls()
    {
        return $this->hasMany(DingdongControl::class, 'dingdong_id', 'id');
    }
}
