<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content','Content:') !!}
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('publish_at','Publish On:') !!}
    {!! Form::input('date','publish_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitbuttonText,['class'=>'btn btn-primary form-control']) !!}
</div>