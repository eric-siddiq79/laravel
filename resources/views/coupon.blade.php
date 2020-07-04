@extends('layouts.admin')

@section('sidebar')
@parent
@endsection

@section('maincontent')
<div class="form-panel">
    <h4 class="mb"><i class="fa fa-angle-right"></i> Inline Form</h4>
    <form class="form-inline" role="form" action="{{ route('savecoupon') }}">
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Coupon Code</label>
            <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Coupon Code" name="couponcode">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword2">Coupon Discount</label>
            <input type="number" class="form-control" id="exampleInputPassword2" placeholder="Coupon Discount" name="coupondiscount">
        </div>
        <button type="submit" class="btn btn-theme">Save</button>
    </form>
</div>
<!-- /form-panel -->
@endsection
