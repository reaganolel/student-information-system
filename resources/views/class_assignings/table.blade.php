<div class="table-responsive">
    <table class="table" id="classAssignings-table">
        <thead>
        <tr>
            <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classAssignings as $classAssignings)
            <tr>
                <td>{{ $classAssignings->course_id }}</td>
            <td>{{ $classAssignings->level_id }}</td>
            <td>{{ $classAssignings->shift_id }}</td>
            <td>{{ $classAssignings->classroom_id }}</td>
            <td>{{ $classAssignings->batch_id }}</td>
            <td>{{ $classAssignings->day_id }}</td>
            <td>{{ $classAssignings->time_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['classAssignings.destroy', $classAssignings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classAssignings.show', [$classAssignings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classAssignings.edit', [$classAssignings->id]) }}"
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
