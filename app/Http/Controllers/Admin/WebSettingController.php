<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WebSetting;

class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'msg';
         $setting = WebSetting::firstOrFail();
        // return $setting;
        return view('admin.websettings.index', compact('setting'));
        
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
        $setting = WebSetting::firstOrFail();
        // return $setting;
        return view('admin.websettings.edit', compact('setting'));
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
        //  return $request;
        
         $setting = WebSetting::findOrFail($id);
        // return $setting;
        $request->is_index == "on" ? $request->merge(['is_index' => true]) : $request->merge(['is_index' => false]);  
         $request->is_blogs_offers == "on" ? $request->merge(['is_blogs_offers' => true]) : $request->merge(['is_blogs_offers' => false]);
         $request->is_services_offers == "on" ? $request->merge(['is_services_offers' => true]) : $request->merge(['is_services_offers' => false]);

         $setting->update($request->all());

        return redirect()->route('admin.web-setting.index');
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
