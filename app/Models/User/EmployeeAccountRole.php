<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\System\Role;


class EmployeeAccountRole extends Model
{
    use HasFactory;
    protected $table ='employee_roles';

    public function roles(){
        return $this->belongsTo(Role::class,'role_id');
    }
}
