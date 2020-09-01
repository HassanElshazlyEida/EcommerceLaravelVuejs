<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersDatatable;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDatatable $users)
    {
      return $users->render('admin.users.index',['title'=>__("admin.users_table")]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.users.create',['title'=>__("admin.user_create")]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$this->validate(request(),[
           'name'=>'required',
           'level'=>'required|in:user,company,vendor',
           'email'=>'required|unique:users|email',
           'password'=>'required|min:6',
       ],[],[
           'name'=>__("admin.user_name"),
           'level'=>__("admin.level"),
           'email'=>__("admin.user_email"),
           'password'=>__("admin.user_password"),
       ]);
        $data['password']=bcrypt(request('password'));
        User::create($data);
        session()->flash('success',__("admin.user_created"));
        return redirect(aurl('users'));
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
    public function edit(User $user)
    {

       return view("admin.users.edit",['title'=>__("admin.user_edit")],compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data=$this->validate(request(),[
            'name'=>'required',
            'level'=>'required|in:user,company,vendor',
            'email'=>'required|email|unique:users,id,'.$user->id,
            'password'=>'sometimes|nullable|min:6',
        ],[],[
            'name'=>__("admin.user_name"),
            'level'=>__("admin.level"),
            'email'=>__("admin.user_email"),
            'password'=>__("admin.user_password"),
        ]);
        if(request()->has('password'))
            $data['password']=bcrypt(request('password'));
        $user->update($data);
        session()->flash('success',__("admin.user_updated"));
        return redirect(aurl('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
           $user->delete();
           session()->flash('success',__("admin.user_deleted"));
           return redirect(aurl('users'));
    }
    public function multi_delete(){
          if(is_array(request('item'))){
            User::destroy(request('item'));
          }else {
            User::find(request('item'))->delete();
          }
          session()->flash('success',__("admin.users_deleted"));
          return redirect(aurl('users'));
    }
}
