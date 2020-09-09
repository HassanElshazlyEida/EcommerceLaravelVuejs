<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\CountriesDatatable;
use Illuminate\Support\Facades\Storage;
use App\Country;
class CountriesController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CountriesDatatable $country)
    {
        return $country->render('admin.countries.index', ['title' => __('admin.countries')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.countries.create',['title'=>__("admin.create_countries")]);
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
            'country_name_ar' => 'required',
            'country_name_en' => 'required',
            'mob'             => 'required',
            'code'            => 'required',
            'logo'            => 'required|'.v_image(),
       ],[],[
            'country_name_ar' => __('admin.country_name_ar'),
            'country_name_en' => __('admin.country_name_en'),
            'mob'             => __('admin.mob'),
            'code'            => __('admin.code'),
            'logo'            => __('admin.logo_cr'),

       ]);
       if (request()->hasFile('logo')) {
            $data['logo'] = up()->upload([
                    'file'        => 'logo',
                    'path'        => 'countries',
                    'upload_type' => 'single',
                    'delete_file' => '',
                ]);
         }
         Country::create($data);
         session()->flash('success', __('admin.country_created'));
         return redirect(aurl('countries'));
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
    public function edit(Country $country)
    {

       return view("admin.countries.edit",['title'=>__("admin.country_edit")],compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $data=$this->validate(request(),[
            'country_name_ar' => 'required',
            'country_name_en' => 'required',
            'mob'             => 'required',
            'code'            => 'required',
            'logo'            => 'sometimes|nullable|'.v_image(),//sometimes if all request =[] so pass , if all request  ['email' => ''] and empty fail
        ], [], [
            'country_name_ar' => __('admin.country_name_ar'),
            'country_name_en' => __('admin.country_name_en'),
            'mob'             => __('admin.mob'),
            'code'            => __('admin.code'),
            'logo'            => __('admin.logo_cr'),
        ]);
        if (request()->hasFile('logo')) {
			$data['logo'] = up()->upload([
					'file'        => 'logo',
					'path'        => 'countries',
					'upload_type' => 'single',
					'delete_file' =>$country->logo,
				]);
		}
        $country->update($data);
        session()->flash('success',__("admin.country_updated"));
        return redirect(aurl('countries'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
           Storage::delete($country->logo);
           $country->delete();
           session()->flash('success',__("admin.country_deleted"));
           return redirect(aurl('countries'));
    }
    public function multi_delete(){
        if(is_array(request('item'))){
            foreach (request('item') as $id) {
                $countries = Country::find($id);
                Storage::delete($countries->logo);
                $countries->delete();
            }
            //we create here for loop cause storage have not function destory() for all documents as models
        } else {
            $countries = Country::find(request('item'));
            Storage::delete($countries->logo);
            $countries->delete();
        }
          session()->flash('success',__("admin.country_deleted"));
          return redirect(aurl('countries'));
    }
}
