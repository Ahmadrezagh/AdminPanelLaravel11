<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next){
            if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && auth()->user()->can('user')) ){
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
        $users = User::query()->users()->get();
        return view('admin.users.index',compact('users'));
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
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        if ($request->profile_image){
            $validated['profile_image'] = upload_file($request->profile_image, '/profiles');
        }
        $user = User::create($validated);
        $user ->update(['type' => User::$TYPES[2]]);
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
    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();
        if ($request->profile_image){
            $validated['profile_image'] = upload_file($request->profile_image, '/profiles');
        }
        if($validated['password'] == null){
            unset($validated['password']);
        }
        $user->update($validated);
        $user->roles()->sync($request->roles);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
