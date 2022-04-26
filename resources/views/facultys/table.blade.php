<div class="table-responsive">
    <table class="table" id="facultys-table">
        <thead>
        <tr>
            <th>Faculty Name</th>
        <th>Faculty Code</th>
        <th>Course Code</th>
        <th>Faculty Description</th>
        <th>Faculty Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($facultys as $facultys)
            <tr>
                <td>{{ $facultys->faculty_name }}</td>
            <td>{{ $facultys->faculty_code }}</td>
            <td>{{ $facultys->course_code }}</td>
            <td>{{ $facultys->faculty_description }}</td>
            <td>{{ $facultys->faculty_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['facultys.destroy', $facultys->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facultys.show', [$facultys->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('facultys.edit', [$facultys->id]) }}"
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
