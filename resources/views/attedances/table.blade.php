<div class="table-responsive">
    <table class="table" id="attedances-table">
        <thead>
        <tr>
            <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Attedance Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attedances as $attedances)
            <tr>
                <td>{{ $attedances->student_id }}</td>
            <td>{{ $attedances->class_id }}</td>
            <td>{{ $attedances->subject_id }}</td>
            <td>{{ $attedances->teacher_id }}</td>
            <td>{{ $attedances->attedance_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['attedances.destroy', $attedances->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attedances.show', [$attedances->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('attedances.edit', [$attedances->id]) }}"
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
