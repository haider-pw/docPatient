<?php

namespace App\Http\Middleware;
use Auth;
use Closure;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        /**
         * Examples of usage (in routes.php or routes/web.php or in controllers with $this->middleware):

                1: ['middleware' => ['role:Level 1|Level 2|Level 5|Admin,null']]

                Passes if user has any role from the list of Level 1, Level 2, Level 5 or Admin, regardless of any permissions (described here by the word null)

                2: ['middleware' => ['role:Admin, add user|edit user']]

                Passes if user has Admin role, or either of these permissions: add user or edit user:
         */


        if (Auth::guest()) {
            return redirect($urlOfYourLoginPage);
        }

        $roles = explode('|', $role);
        if (! $request->user()->hasAnyRole($roles)) {
            abort(403);
        }

        //If No Permissions Specified, Then just redirect the User to his request.
        if ($permission === null) {
            return $next($request);
        }

        $permissions = explode('|', $permission);
        foreach($permissions as $permission) {
            if ($request->user()->hasPermissionTo($permission)) {
                return $next($request);
            }
        }

        abort(403);
    }
}
