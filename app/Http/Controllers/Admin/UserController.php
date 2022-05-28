<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rule;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role')->paginate(25);
        // dd($users);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::with('role')->get();
        $roles = Role::get();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'repeat_password' => 'required_with:password|same:password|min:6',
            'role_id' => 'required',
            'mobile_no' => 'required',
            'address' => 'required'
        ]);
        
        DB::beginTransaction();
        try {
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->mobile_no = $request->mobile_no;
            $user->address = $request->address;
            if($request->password){
                $user->password = bcrypt($request->password);
            }
            $user->save();

            // Mail::send('email.user-created', compact('user', 'request'), function ($message) use ($user) {
            //     $message->subject('PMEP User Registration');
            //     $message->from('info.pmep.np@gmail.com', 'PMEP MIS INFO');
            //     $message->to($user->email);
            // });

            DB::commit();
        }
        catch (Exception $e) {
            DB::rollback();
        }

        return redirect()->route('admin.users.index');
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
        $users = User::findOrFail($id);
        $roles = Role::get();
        return view('admin.users.edit', compact('users', 'roles'));
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
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'role_id' => 'required',
            'mobile_no' => 'required',
            'address' => 'required'
        ]);

        if($request->password){
            $this->validate($request, [
                'password' => 'min:6',
                'repeat_password' => 'required_with:password|same:password|min:6',
            ]);
        }
        
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->mobile_no = $request->mobile_no;
            $user->address = $request->address;
            if($request->password){
                $user->password = bcrypt($request->password);
            }
            $user->save();

            // Mail::send('email.user-created', compact('user', 'request'), function ($message) use ($user) {
            //     $message->subject('PMEP User Registration');
            //     $message->from('info.pmep.np@gmail.com', 'PMEP MIS INFO');
            //     $message->t;o($user->email);
            // });

            DB::commit();
        }
        catch (Exception $e) {
            DB::rollback();
        }

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->back();
    }
}
