<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::number('shift_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_id', 'Classroom Id:') !!}
    {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('batch_id', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('batch_id', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('batch_id', 'Batch Id', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Day Id Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('day_id', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('day_id', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('day_id', 'Day Id', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Time Id Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('time_id', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('time_id', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('time_id', 'Time Id', ['class' => 'form-check-label']) !!}
    </div>
</div>
