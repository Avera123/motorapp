<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CouponStoreRequest;
use App\Http\Requests\CouponUpdateRequest;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::paginate();
        return view('coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponStoreRequest $request)
    {
        $coupon = Coupon::create($request->all());
        if($request->file('imgUrl')){
            $path = Storage::disk('public')->put('image', $request->file('imgUrl'));            
            $coupon->fill(['imgUrl'=> asset($path)])->save();            
        }
        return redirect()->route('coupons.edit', $coupon->id)
        ->with('info','cupón guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        return view('coupons.show', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return view('coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(CouponUpdateRequest $request, Coupon $coupon)
    {
        $coupon->update($request->all());
        $coupon -> fill($request->all())->save();
        if($request->file('imgUrl')){
            $path = Storage::disk('public')->put('image', $request->file('imgUrl'));            
            $coupon->fill(['imgUrl'=> asset($path)])->save();            
        }
        return redirect()->route('coupons.edit', $coupon->id)
        ->with('info','cupón actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon -> delete();
        return back()->with('info','cupón eliminado con éxito');
    }
}
