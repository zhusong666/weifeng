<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Admin\User;
use App\Model\Admin\Role;
use App\Model\Admin\Permission;
class RoleHasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        //获取用户的信息
        $users = User::find(session('id'));
        // dd($users);
        //获取跟用户关联的角色
        $user_role = $users->roles;

        $per_url = [];
        foreach($user_role as $k => $roles){

            //通过角色  找相对相应的权限
            $role_per = $roles->permissions;

            foreach($role_per as $k => $per){

                $per_url[] = $per->per_url;
            }
        }

        //获取角色应该有的权限
        $role_pers = array_unique($per_url);

        //获取当前控制器名称或方法
        $urls = \Route::current()->getActionName();

        if(in_array($urls,$role_pers)){
            
            return $next($request);

        } else {
            echo "<script> alert('没有权限哦');parent.location.href='/admin/index'; </script>"; 

            // return view('/admin/index');
        }

    }
}
