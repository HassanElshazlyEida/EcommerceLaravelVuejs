<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\AdminDatatable;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDatatable $admin)
    {
      return $admin->render('admin.admins.index',['title'=>__("admin.admin_table")]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.admins.create',['title'=>__("admin.admin_create")]);
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
           'email'=>'required|unique:admins|email',
           'password'=>'required|min:6',
       ],[],[
           'name'=>__("admin.admin_name"),
           'email'=>__("admin.admin_email"),
           'password'=>__("admin.admin_password"),
       ]);
        $data['password']=bcrypt(request('password'));
        Admin::create($data);
        session()->flash('success',__("admin.admin_created"));
        return redirect(aurl('admins'));
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
    public function edit(Admin $admin)
    {

       return view("admin.admins.edit",['title'=>__("admin.edit")],compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $data=$this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email|unique:admins,id,'.$admin->id,
            'password'=>'sometimes|nullable|min:6',
        ],[],[
            'name'=>__("admin.admin_name"),
            'email'=>__("admin.admin_email"),
            'password'=>__("admin.admin_password"),
        ]);
        if(request()->has('password'))
            $data['password']=bcrypt(request('password'));
        $admin->update($data);
        session()->flash('success',__("admin.admin_updated"));
        return redirect(aurl('admins'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
           $admin->delete();
           session()->flash('success',__("admin.admin_deleted"));
           return redirect(aurl('admins'));
    }
    public function multi_delete(){
          if(is_array(request('item'))){
            Admin::destroy(request('item'));
          }else {
            Admin::find(request('item'))->delete();
          }
          session()->flash('success',__("admin.admins_deleted"));
          return redirect(aurl('admins'));
    }
}
