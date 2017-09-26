<?php

namespace App\Model;

class AdminPermission extends Model
{
    public function roles()
    {
        return $this->belongsToMany(AdminRole::class, 'admin_permission_roles', 'permission_id', 'role_id')
            ->withPivot(['permission_id', 'role_id']);
    }

}
