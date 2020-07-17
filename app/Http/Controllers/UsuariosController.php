<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Mail\VerifyEmail;
use Mail;
use Illuminate\Support\Str;
class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('user_rols')->except(['perfil','update']);
    }

    public function index()
    {
        $users = User::where('id','<>',Auth::user()->id)->get();
        return view('usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('usuarios.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        try {
            $request['confirmation_code'] = Str::random(25);
            $user = User::create($request->all());
            

            if($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $avatarName  = 'avatar'.$user->id.'.png';
                $path = public_path().'/avatars/';
                $file->move($path,$avatarName);

                $user->avatar = 'avatars/'.$avatarName;
                $user->save();
            }
            $data = array('email'=> $request->email,'name'=> $request->name,'password'=> $request->password, 'confirmation_code'=> $request->confirmation_code);
            Mail::send('emails.confirmation_code', $data, function($message) use ($data) {
                $message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo');
            });

            return redirect('usuarios');

        }catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perfil(){
        $user = Auth::user();
        return view('usuarios.show',compact('user'));
    }
    public function show($id)
    {

        $user = User::findOrFail($id);
        return view('usuarios.show',compact('user'));
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
        $user = User::findOrFail($id);
        $user->fill($request->all())->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/usuarios');
    }
    public function verify($code)
    {
        $user = User::where('confirmation_code', $code)->first();

        if (! $user)
            return redirect('/');

        $user->confirmed = true;
        $user->confirmation_code = null;
        $user->save();

        return redirect('/login')->with('notification', 'Has confirmado correctamente tu correo!');
    }
}
