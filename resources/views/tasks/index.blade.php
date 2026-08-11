<!DOCTYPE html>
<html>
<head>
    <title>Tasks List</title>
</head>
<body>

    <h1>Tasks List</h1>

    <table border="1" cellpadding="8">

        <tr>
            <th>ID</th>
            <th>Task Title</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>

        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>
                    {{ $task->is_done ? 'Completed' : 'Pending' }}
                </td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>