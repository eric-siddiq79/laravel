@extends('layouts.admin')

@section('sidebar')
@parent
@endsection

@section('maincontent')
<div class="clearfix form-panel" style="margin: 15px 0 0 0; padding: 10px;">
    <h4 class="mb"><i class="fa fa-angle-right"></i>Create Category</h4>
    <div class="col-md-offset-3 col-md-6">
         <h2 class="form-login-heading">
            @if( Session::has('message')) 
                {{Session::get('message')}} 
            @endif 
         </h2>
        <form class="form" role="form" action="{{ route( 'savecategory' ) }}" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2"></label>
                <input type="text" name="catename" class="form-control" id="exampleInputEmail2" placeholder="Enter Category Name">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="text" name="catecode" class="form-control" id="exampleInputPassword2" placeholder="Category Code Number">
            </div>
            <button type="submit" class="btn btn-theme">Save</button>
        </form>
    </div>
</div>
<!-- /form-panel -->
@endsection