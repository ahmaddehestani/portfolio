<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Services\BrandService;
use Carbon\Carbon;


class BrandController extends Controller
{
    public function __construct(private BrandService $brandService)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $brands=Brand::all();
       return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {

        if ($request['icon']) {
            $file_image_url =Carbon::now()->microsecond . '.' . $request['icon']->extension();
            $request['icon']->storeAs('images', $file_image_url, 'public');
        }
        $data=$request->validated();
        $data['icon']=$file_image_url;
        $this->brandService->store($data);
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin.brand.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        if ($request['icon']) {
            $file_image_url =Carbon::now()->microsecond . '.' . $request['icon']->extension();
            $request['icon']->storeAs('images', $file_image_url, 'public');
        }
        $data=$request->validated();
        $data['icon']=$file_image_url;
       $this->brandService->update($brand,$data);
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {

      $this->brandService->destroy($brand);
        return redirect()->route('brand.index');
    }
}
