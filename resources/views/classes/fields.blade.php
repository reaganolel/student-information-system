<!-- Class Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_name', 'Class Name:') !!}
    {!! Form::text('class_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Class Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_code', 'Class Code:') !!}
    {!! Form::number('class_code', null, ['class' => 'form-control']) !!}
</div>