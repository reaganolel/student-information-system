<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
        <tr>
            <th>Class Name</th>
        <th>Class Code</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($batches as $batches)
            <tr>
                <td>{{ $batches->class_name }}</td>
            <td>{{ $batches->class_code }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['batches.destroy', $batches->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batches->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('batches.edit', [$batches->id]) }}"
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
