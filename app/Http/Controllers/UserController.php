<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Auth;
use App\Http\Controllers\View;
use Validator;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Crea una col·lecció amb tots els usuaris */
        $users = User::all();
        
        /* Retorna la col·lecció amb els usuaris a la vista 'users.index' */
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $user = new User($request->all());             //creació de l'usuari amb la informació rebuda
        $user->password = bcrypt($request->password);  //encriptació la contrasenya

        list($id_role,$role_name) = explode(' - ',$request->role); //divisió de les dades "id_role" i "role_name" que s'han enviat juntes

        /* Assignació de les dades del rol a l'usuari*/
        $user->id_role = $id_role;    
        $user->role_name = $role_name;

        DB::table('model_has_roles')->insert(
            ['role_id' => $user->id_role, 'model_id' => null, 'model_type' => 'App\User']
        );

        $user->save();
        /* Assignació del rol a l'usuari*/
        $user->assignRole($user->role_name);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($search)
    {   
        $search = urldecode($search);
        $users = User::select()
                ->where('name', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'asc')
                ->get();
        
        if (count($users) == 0){
            return View('admin.users.show')
            ->with('message', 'No s\'han trobat usuaris')
            ->with('users', $users);
        } else{
            return View('admin.users.show')
            ->with('users', $users)
            ->with('users', $users);
        }

        // Obtenir l'usuari
        //$user = User::find($id);

        // Mostrar la vista passant l'usuari
        //return view('admin.users.show')
            //->with('user', $user);
    }

    public function redirect($search)
    {
        
        if (empty($search)) return redirect()->back();

        dd($search);
        $user = urlencode(e($search));
        $route = "admin.users.show/$user";

        return redirect($route);
    }

    /*public function search($search){
        $search = urldecode($search);
        $users = User::select()
                ->where('name', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'asc')
                ->get();
        
        if (count($users) == 0){
            return View('admin.users.show')
            ->with('message', 'No s\'han trobat usuaris')
            ->with('search', $search);
        } else{
            return View('admin.users.show')
            ->with('users', $users)
            ->with('search', $search);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Obtenir l'usuari
        $user = User::find($id);

        // Mostrar la vista amb el formulari d'edició passant l'usuari
        return view('admin.users.edit')
            ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'role_name' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin.users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = User::find($id);
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->role_name = Input::get('role_name');

            DB::table('model_has_roles')
            ->where('model_id', $user->id)
            ->update(['role_id' => $user->id_role]);
            
            $user->save();

            

            // redirect
            Session::flash('message', 'Usuari modificat correctament!');
            return Redirect::to('admin/users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
