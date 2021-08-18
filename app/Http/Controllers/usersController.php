<?php


namespace App\Http\Controllers;

use App\User;
use App\TipoUsuario;
use App\Departamento;
use App\Municipio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(){}

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //VALIDACIÓN
        $this->validate($request,[
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'min:6',
            'confirm' => 'required_with:password|same:password|min:6'
        ]);

        $user = new User;
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect()->route('users.index')->with('flash','el usuario ha sido creado!');

    }

    public function edit(User $user)
    {     
        return view('users.edit', compact('user'));
    }

    public function update(User $user,  Request $request)
    {
        //VALIDACIÓN
        $this->validate($request,[
            'name' => 'required',
            'last_name' => 'required',            
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'min:6',
            'confirm' => 'required_with:password|same:password|min:6'
        ]);

        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect()->route('users.index')->with('flash','El usuario ha sido actualizado!');

    }

    public function destroy(User $user)
    {    
        $user->delete(); 
        return redirect()->route('users.index');
    }
}
