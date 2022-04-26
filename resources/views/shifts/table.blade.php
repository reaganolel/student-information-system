<div class="table-responsive">
    <table class="table" id="shifts-table">
        <thead>
        <tr>
            <th>Shift</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shifts as $shifts)
            <tr>
                <td>{{ $shifts->shift }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shifts.destroy', $shifts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shifts.show', [$shifts->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shifts.edit', [$shifts->id]) }}"
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
