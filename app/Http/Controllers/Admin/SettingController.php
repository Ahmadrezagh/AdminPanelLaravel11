<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\UpdateSettingRequest;
use App\Models\Setting;
use App\Models\SettingGroup;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SettingGroup $setting_group)
    {
        return view('admin.settings.index', compact('setting_group'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(SettingGroup $setting_group)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, SettingGroup $setting_group)
    {
        if ($request->settings ){
           foreach ($request->settings as $key => $value ) {
               if ($value){
                  $setting_group->settings()->where('key', '=', $key)->update(['value' => $value]);
                }
           }
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SettingGroup $setting_group, Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SettingGroup $setting_group, Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, SettingGroup $setting_group, Setting $setting)
    {

       // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SettingGroup $setting_group, Setting $setting)
    {
        //
    }
}
