@extends('layouts.admin') @section('sidebar') @parent @endsection @section('maincontent')
    <div class="content-panel">
        <div class="adv-table">
            <div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <h2 class="form-login-heading">
                    @if( Session::has('message'))
                        {{Session::get('message')}}
                    @endif
                </h2>

                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
                    <thead>
                    <tr role="row">
                        <th>Sl No</th>
                        <th>Coupon Code</th>
                        <th>Coupon Discount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @if( $coupons )
                        <?php
                            $sl = 0;
                            foreach( $coupons as $coupun ) :
                            $sl++;
                        ?>
                        <tr>
                            <td><?php echo ( $sl <= 9) ? '0'.$sl : $sl; ?></td>
                            <td>{{ $coupun->name }}</td>
                            <td>{{ $coupun->discount}}</td>
                            <td><a href="{{url('couponeditform/'.$coupun->id)}}">Edit</a> | <a href="{{url('deletecoupon/'.$coupun->id)}}">Delete</a> </td>
                        </tr>
                        <?php endforeach; ?>
                    @endif
                    </tbody>
                </table>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="dataTables_info" id="hidden-table-info_info">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="span6">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                            <ul>
                                <li class="prev disabled"><a href="#">← Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next"><a href="#">Next → </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> @endsection
