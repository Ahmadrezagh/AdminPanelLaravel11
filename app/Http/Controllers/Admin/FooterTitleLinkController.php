<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterTitleLink\StoreFooterTitleLinkRequest;
use App\Http\Requests\Admin\FooterTitleLink\UpdateFooterTitleLinkRequest;
use App\Models\FooterTitle;
use App\Models\FooterTitleLink;
use Illuminate\Http\Request;
class FooterTitleLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterTitle $footer_title)
    {
        $footer_title_links = $footer_title->links()->paginate();
        return view('admin.footer_title_links.index', compact('footer_title', 'footer_title_links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FooterTitle $footer_title)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterTitleLinkRequest $request, FooterTitle $footer_title)
    {
        $footer_title->links()->create($request->validated());
        toastr()->success('لینک با موفقیت ایجاد شد');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterTitle $footer_title, FooterTitleLink $footer_title_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FooterTitle $footer_title, FooterTitleLink $footer_title_link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterTitleLinkRequest $request, FooterTitle $footer_title, FooterTitleLink $footer_title_link)
    {
        $footer_title_link->update($request->validated());
        toastr()->success('لینک با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterTitle $footer_title, FooterTitleLink $footer_title_link)
    {
        $footer_title_link->delete();
        toastr()->success('لینک با موفقیت حذف شد');
        return back();
    }
}
