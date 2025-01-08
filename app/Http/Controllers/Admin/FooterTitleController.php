<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterTitle\StoreFooterTitleRequest;
use App\Http\Requests\Admin\FooterTitle\UpdateFooterTitleRequest;
use App\Models\FooterTitle;
use Illuminate\Http\Request;
class FooterTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer_titles = FooterTitle::query()->paginate();
        return view('admin.footer_titles.index', compact('footer_titles'));
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
    public function store(StoreFooterTitleRequest $request)
    {
        if(FooterTitle::query()->count() >= 3){
            toastr()->warning('ساخت بیش از ستون برای فوتر مجاز نیست');
            return back();
        }
        FooterTitle::create($request->validated());
        toastr()->success('ستون فوتر با موفقیت ایجاد شد');
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
    public function update(UpdateFooterTitleRequest $request, FooterTitle $footer_title)
    {
        $footer_title->update($request->validated());
        toastr()->success('ستون فوتر با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterTitle $footer_title)
    {
        $footer_title->delete();
        toastr()->success('ستون فوتر با موفقیت حذف شد');
        return back();
    }
}
