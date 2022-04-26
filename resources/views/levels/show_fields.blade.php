<!-- Level Field -->
<div class="col-sm-12">
    {!! Form::label('level', 'Level:') !!}
    <p>{{ $levels->level }}</p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $levels->course_id }}</p>
</div>

<!-- Level Description Field -->
<div class="col-sm-12">
    {!! Form::label('level_description', 'Level Description:') !!}
    <p>{{ $levels->level_description }}</p>
</div>

<!-- Classroom Status Field -->
<div class="col-sm-12">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <p>{{ $levels->classroom_status }}</p>
</div>

