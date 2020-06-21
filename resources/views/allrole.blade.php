@extends('layouts.admin') @section('sidebar') @parent @endsection @section('maincontent')
<div class="content-panel">
	<div class="adv-table">
		<div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">
			<div class="container-fluid">
				<div class="row row-fluid">
					<div class="col-md-6 span6">
						<div id="hidden-table-info_length" class="dataTables_length">
							<label>
								<select size="1" name="hidden-table-info_length" aria-controls="hidden-table-info">
									<option value="10" selected="selected">10</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select> records per page</label>
						</div>
					</div>
					<div class="col-md-6 span6 text-right">
						<div class="dataTables_filter" id="hidden-table-info_filter">
							<label>Search:
								<input type="text" aria-controls="hidden-table-info">
							</label>
						</div>
					</div>
				</div>
			</div>
			<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
				<thead>
					<tr role="row">
						<th>Sl No</th>
                        <th>Role Name</th>
                        <th>Role Code</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<tr>
                        <td>01</td>
                        <td>Admin</td>
                        <td>01</td>
                        <td><a href="#">Edit</a> | <a href="#">Delete</a> </td>
                    </tr>
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