<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::with('roles')->get();
        $users = User::all();
  
        /*$query = "SELECT u.id,u.name as usuari,u.email,r.name as rol, (

                        SELECT p.name
                        FROM permissions as p
                        LEFT JOIN role_has_permissions as rhp
                        ON rhp.permission_id = p.id
                        LEFT JOIN roles ro
                        ON ro.id = rhp.role_id
                        WHERE ro.id = r.id) as permis

                  FROM users as u
                  LEFT JOIN roles as r
                  ON u.id_role = r.id";*/

        //$query2 ="SELECT "           

       // $users = DB::select($query);
        //dd($users);
        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
/////////////////////////////////////////////////////////////
    public function roles_by_user($id)
    {   
        //$role = Role::findByName('Admin', 'web');
        //$role = Role::with('users')->where('id', $request->id_role)->get();

        //$user = DB::table('users')
        //print_r($role->name) ;

        //$roles = DB::table('roles')->pluck('id','name');
        //$roles = Role::findById($id, 'web');
        $query = "SELECT roles.name
                  FROM roles
                  LEFT JOIN users
                  ON users.id_role = roles.id
                  WHERE users.id_role = ".$id."";
        $result = DB::select($query);
        return view('users.index')->with($roles,$result);
    }
}
