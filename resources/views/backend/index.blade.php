@extends('backend')

@section('content')
<!--  start page-heading -->
	<div id="page-heading">
		<h1>User Management</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized">{!! HTML::image('images/backend/shared/side_shadowleft.jpg','',array('width'=>20,'height'=>300)) !!}</th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized">{!! HTML::image('images/backend/shared/side_shadowright.jpg','',array('width'=>20,'height'=>300)) !!}</th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">

			<!--  start table-content  -->
			<div id="table-content">

				<!--  start message-green
				<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Product added sucessfully. <a href="">Add new one.</a></td>
					<td class="green-right"><a class="close-green"><img src="./images/backend/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-green -->



				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
                    <th class="table-header-check"><a id="toggle-all" ></a> </th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="">Name</a>	</th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="">Email</a></th>
                    <th class="table-header-repeat line-left"><a href="">Created Date</a></th>
                    <th class="table-header-repeat line-left"><a href="">Roles</a></th>
                    <th class="table-header-options line-left"><a href="">Options</a></th>
                </tr>
				@foreach($users as $index=>$user)
                <tr @if($index%2!=0) class="alternate-row" @endif>
                    <td><input  type="checkbox"/></td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['created_at'] }}</td>
                    <td>
                    @if(isset($user['roles']))
                    @foreach($user['roles'] as $role)
                        {{ $role }}
                    @endforeach
                    @endif
                    </td>
                    <td class="options-width">
                    <a href="" title="Edit" class="icon-1 info-tooltip"></a>
                    <a href="" title="Delete" class="icon-2 info-tooltip"></a>
                    </td>
                </tr>
				@endforeach



				</table>
				<!--  end product-table................................... -->
				</form>
			</div>
			<!--  end content-table  -->

			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->

			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->

			<div class="clear"></div>

		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>
@stop