<div class="form-group">
    {!! Form::label('name', 'Payment Processor Name:', ['class' => 'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('url', 'Payment Processor URL:', ['class' => 'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit($submit_button_text, ['class' => 'btn btn-lg btn-primary pull-left'] ) !!}
    </div>
</div>