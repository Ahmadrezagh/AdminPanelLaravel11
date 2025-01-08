<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeaderLinks\StoreHeaderLinkRequest;
use App\Http\Requests\Admin\HeaderLinks\UpdateHeaderLinkRequest;
use App\Models\HeaderLink;
use Illuminate\Http\Request;


class HeaderLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header_links = HeaderLink::query()->paginate();
        return view('admin.header_links.index', compact('header_links'));
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
    public function store(StoreHeaderLinkRequest $request)
    {
        HeaderLink::create($request->validated());
        toastr()->success('لینک با موفقیت ایجاد شد');
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
    public function update(UpdateHeaderLinkRequest $request, HeaderLink $header_link)
    {
        $header_link->update($request->validated());
        toastr()->success('لینک با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeaderLink $header_link)
    {
        $header_link->delete();
        toastr()->success('لینک با موفقیت حذف شد');
        return back();
    }
}
