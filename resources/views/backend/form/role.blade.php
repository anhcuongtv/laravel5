<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
            <tr>
                <th valign="top">Name:</th>
                <td>{!! Form::text('name',null,['class'=>'inp-form']) !!}</td>
                <td></td>
            </tr>
            <tr>
                <th valign="top">Display name:</th>
                <td>{!! Form::text('display_name',null,['class'=>'inp-form']) !!}</td>
            </tr>
            <tr>
                <th valign="top">Description:</th>
                <td>{!! Form::textarea('description',null,['class'=>'form-textarea']) !!}</td>
                <td></td>
            </tr>
            <tr>
                <th valign="top">Permission:</th>
                <td >
                    <table width="100%" >
                        @foreach($permission_list as $permission)
                        <tr>
                            <td width="25px">
                            @if(in_array($permission['name'],$user_permission))
                            {!! Form::checkbox('permission[]',$permission['id'],true) !!}
                            @else
                            {!! Form::checkbox('permission[]',$permission['id'],false) !!}
                            @endif
                            </td>
                            <td>{{$permission['name']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </td>
                <td></td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td valign="top">
                     {!! Form::submit('Submit',['class'=>'form-submit']) !!}
                     {!! Form::reset('Reset',['class'=>'form-reset']) !!}
                </td>
                <td></td>
            </tr>
        </table>
    </td>
    <td></td>
    </tr>
           <tr>
                <td>{!! HTML::image('images/backend/shared/blank.gif','',array('width'=>695,'height'=>1)) !!}</td>
                <td></td>
            </tr>
            </table>
<div class="clear"></div>