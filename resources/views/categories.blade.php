@extends('layouts.admin')
@section('sidebar')

@parent @endsection

@section('maincontent')
<div class="content-panel">
    <div class="adv-table">
        <div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">
            <div class="container-fluid">
                <div class="row row-fluid">
					<h2 class="form-login-heading">
						@if( Session::has('message'))
							{{Session::get('message')}}
						@endif
					</h2>
                </div>
            </div>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
                <thead>
                    <tr role="row">
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Category Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <?php
						$sl = 0;
						foreach ( $categories as $category ){
							$sl++;
							?>
						<tr>
							<td><?php echo ( $sl <= 9) ? '0'.$sl : $sl; ?></td>
							<td><?php echo $category->name; ?></td>
							<td><?php echo $category->code; ?></td>
							<td><a href="{{ url( 'updatecategory' ) }}/{{$category->id}}">Edit</a> | <a href="{{ url( 'deletecategory')}}/{{$category->id}}">Delete</a> </td>
						</tr>
                    <?php
						}

					?>

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
</div>
@endsection
