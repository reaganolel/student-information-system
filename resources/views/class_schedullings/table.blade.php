<div class="table-responsive">
    <table class="table" id="classSchedullings-table">
        <thead>
        <tr>
            <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classSchedullings as $classSchedullings)
            <tr>
                <td>{{ $classSchedullings->course_id }}</td>
            <td>{{ $classSchedullings->level_id }}</td>
            <td>{{ $classSchedullings->shift_id }}</td>
            <td>{{ $classSchedullings->classroom_id }}</td>
            <td>{{ $classSchedullings->batch_id }}</td>
            <td>{{ $classSchedullings->day_id }}</td>
            <td>{{ $classSchedullings->time_id }}</td>
            <td>{{ $classSchedullings->teacher_id }}</td>
            <td>{{ $classSchedullings->start_time }}</td>
            <td>{{ $classSchedullings->end_time }}</td>
            <td>{{ $classSchedullings->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['classSchedullings.destroy', $classSchedullings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedullings.show', [$classSchedullings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classSchedullings.edit', [$classSchedullings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
