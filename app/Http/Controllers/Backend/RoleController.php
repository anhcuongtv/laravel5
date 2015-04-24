<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller {

    public function __construct(){
        $this->middleware('manager');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function role()
    {
        $role_list = Role::all()->toArray();
        return view('backend.role.role_list')->with([
            "role_list"=>$role_list
        ]);
    }

    public function permission()
    {
        $permission_list = Permission::all()->toArray();
        return view('backend.role.permission_list')->with([
            "permission_list"=>$permission_list
        ]);
    }

    public function create_role()
    {
        $permission_arr = [];
        $permissions = Permission::all()->toArray();
        return view('backend.role.create_role')->with(
            [
                'permission_list'=>$permissions,
                'user_permission'=>$permission_arr
            ]
        );
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create_permission()
    {
        return view('backend.role.create_permission');
    }


	public function store_permission(Request $request)
	{
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
        ]);
        Permission::create($request->only(['name','display_name','description']));
        return redirect('admin/permission');
	}

    public function store_role(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
        ]);
        $role = Role::create($request->only(['name','display_name','description']));
        $permissions = $request->get('permission');
        if(is_array($permissions))
        {
            foreach($permissions as $permission)
            {
                $role->attachPermission(['id'=>$permission]);
            }
        }
        return redirect('admin/role');
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit_permission($id)
    {
        $permission = Permission::findOrFail($id);
        return view('backend.role.edit_permission')->with(['permission'=>$permission]);
	}

    public function edit_role($id)
    {
        $permission_arr = [];
        $role = Role::findOrFail($id);
        $user_permission = $role->perms()->get()->toArray();
        foreach($user_permission as $p)
        {
            $permission_arr[] = $p['name'];
        }
        $permissions = Permission::all()->toArray();
        return view('backend.role.edit_role')->with(['role'=>$role,'permission_list'=>$permissions,'user_permission'=>$permission_arr]);
    }

    public function update_role($id,Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
        ]);
        $role = Role::findOrFail($id);
        $role->update($request->all());

        $role->perms()->detach();

        $permissions = $request->get('permission');
        if(is_array($permissions))
        {
            foreach($permissions as $permission)
            {
                $role->attachPermission(['id'=>$permission]);
            }
        }
        return redirect('admin/role');
    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_permission($id,Request $request)
	{
		//
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
        ]);

        $permission = Permission::findOrFail($id);
        $permission->update($request->all());

        return redirect('admin/permission');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy_permission($id)
	{
		//
        Permission::destroy($id);
        return redirect('admin/permission');
	}


    public function destroy_role($id)
    {
        //
        Role::destroy($id);
        return redirect('admin/role');
    }
}
