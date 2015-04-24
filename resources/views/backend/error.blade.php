@if($errors)
<!--  start message-red -->
<div id="message-red">
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
    @foreach($errors->all() as $error)
        <tr>
            <td class="red-left">{{ $error }}</td>
            <td class="red-right"><a class="close-red">{!! HTML::image('images/backend/table/icon_close_red.gif') !!}</a></td>
        </tr>
    @endforeach
    </table>
</div>
<!--  end message-red -->
@endif