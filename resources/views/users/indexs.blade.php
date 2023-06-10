<div class="card-body table-responsive p-0">
    <table class="table table-hover table-bordered text-nowrap">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Settings</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td><span @if ($user->active) class="badge bg-success" @else class="badge bg-danger" @endif>{{ $user->status }}</span></td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
