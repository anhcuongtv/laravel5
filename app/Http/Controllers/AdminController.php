<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminController extends Controller {

    use AuthenticatesAndRegistersUsers;

    protected $redirectAfterLogout = '/admin';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function __construct(Guard $auth, Registrar $registrar){
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->middleware('manager',['except'=>['login']]);
    }

	public function index()
    {
        $users = [];
        $all_user = User::all();
        foreach($all_user as $index=>$user)
        {
            $users[$index] = $user->toArray();
            foreach($user->roles as $role) {
                $users[$index]['roles'][] = $role->name;
            }
        }
        return view('backend.index')->with([
            'users' => $users
        ]);
	}

    public function login()
    {
        return view('login_admin');
    }

    public function logout()
    {
        $this->getLogout();
        return redirect('admin');

    }

    public function postlogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return redirect('admin');
        }

        return redirect($this->loginPath())
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => $this->getFailedLoginMessage(),
            ]);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
