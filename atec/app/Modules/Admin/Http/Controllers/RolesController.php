<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Requests\RolesRequest;

use Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(10);

        return view('admin::pages.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::orderBy('page')->get();

        return view('admin::pages.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolesRequest $request)
    {
        // dd(request('permissions'));
        $role = Role::create(['name' => request('name')]);

        $role->syncPermissions(request('permissions'));

        return redirect()->route('admin.roles.index')->with('msg', 'Role Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin::pages.roles.show', compact('role')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::orderBy('page')->get();

        return view('admin::pages.roles.edit', compact('role', 'permissions')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolesRequest $request, Role $role)
    {
        $data = $request->all();
        $role->update(['name' => request('name')]);
        $role->syncPermissions(request('permissions'));

        return redirect()->route('admin.roles.index')->with('msg', 'Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if ($role->id == 1) {
            return redirect()->route('admin.roles.index')->with('msg', 'Role Can not be Deleted');
        }
        $role->delete();

        return redirect()->route('admin.roles.index')->with('msg', 'Role Deleted');
    }

    public function updatePermissions(Request $request)
    {
        $collection = Route::getRoutes();

        $routes = [];
        $permissions = [];

        foreach($collection as $route) {
            if ($route->getPrefix() == 'en/admin') {
                $routeName = $route->getName();
                if ($routeName && !in_array($routeName, config('permission.excluded_routes')) ) {
                    $routePartials = explode('.', $routeName);
                    // dd($routeName);
                    $page = $routePartials[1];
                    $action = $routePartials[2];

                    switch (true) {
                        case in_array($action, ['index', 'show']):
                            $permissions[$page .'_view'] = [
                                'page' => $page,
                                'action' => 'view',
                                'name' => $page .' view'
                            ];
                            break;
                        
                        case in_array($action, ['create', 'store']):
                            $permissions[$page .'_create'] = [
                                'page' => $page,
                                'action' => 'create',
                                'name' => $page .' create'
                            ];
                            break;
                        
                        case in_array($action, ['edit', 'update']):
                            $permissions[$page .'_edit'] = [
                                'page' => $page,
                                'action' => 'edit',
                                'name' => $page .' edit'
                            ];
                            break;
                        
                        case in_array($action, ['destory']):
                            $permissions[$page .'_delete'] = [
                                'page' => $page,
                                'action' => 'delete',
                                'name' => $page .' delete'
                            ];
                            break;
                        
                        default:
                            $permissions[$page .'_'. $action] = [
                                'page' => $page,
                                'action' => $action,
                                'name' => $page .' '. $action
                            ];
                            break;
                    }
                    
                    $routes[] = $routeName;
                }
            }
            // dd('zxc');
        }

        foreach ($permissions as $permission) {
            // dd($routeName);

            Permission::createOnlyNew($permission);
        }

        // dd($routes, $permissions);
        
        return back()->with('status', 'Permissions updated successfully.');
    }
}
