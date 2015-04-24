@extends('backend')
@section('content')
<div id="page-heading"><h1>Add Role</h1></div>
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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
         @include('backend.error')
         {!! Form::open(['url'=>'admin/role/add']) !!}
	     @include('backend.form.role')
         {!! Form::close() !!}
</div>
<!--  end content-table-inner  -->
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