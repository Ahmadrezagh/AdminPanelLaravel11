<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\Admin\UpdateAdminRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next){
            if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && auth()->user()->can('admin')) ){
                return $next($request);
            }
            else {
                abort(404);
            }
        });
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->admins()->get();
        $roles = Role::query()->get();
        return view('admin.admins.index',compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(StoreAdminRequest $request)
    {
        $validated = $request->validated();
        if ($request->profile_image){
            $validated['profile_image'] = upload_file($request->profile_image, '/profiles');
        }
        $admin = User::create($validated);
        $admin->update(['type' => User::$TYPES[1]]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, User $admin)
    {
        $validated = $request->validated();
        if ($request->profile_image){
            $validated['profile_image'] = upload_file($request->profile_image, '/profiles');
        }
        if($validated['password'] == null){
            unset($validated['password']);
        }
        $admin->update($validated);
        if ($request->roles > 0) {
            $admin->roles()->sync([$request->roles]);
        }else{
            $admin->roles()->detach();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        return back();
    }
}
