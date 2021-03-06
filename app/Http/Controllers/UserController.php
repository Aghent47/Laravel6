<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ 
        $users = User::all();
        return view('usuarios.index',['users'=>$users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();//crear un nuevo objeto de tipo usuario

        $usuario->name = request('name');     
        $usuario->email = request('email');     
        $usuario->password = request('Password');    

        $usuario->save();

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuarios.show', ['user'=>User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('usuarios.edit', ['user'=>User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(UserFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = $request->get('name');     
        $usuario->email = $request->get('email');     
   
        $usuario->update();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $usuario = User::findOrFail($id);

        $usuario->delete();

        return redirect('/usuarios');
    }
}
