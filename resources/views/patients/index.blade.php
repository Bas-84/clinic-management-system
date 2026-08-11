<!DOCTYPE html>
<html>
<head>
    <title>Patients List</title>
</head>
<body>

<h1>Patients List</h1>

<a href="{{ route('patients.create') }}">Add New Patient</a>

<br><br>

<table border="1" cellpadding="8">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    @foreach($patients as $patient)

    <tr>

        <td>{{ $patient->id }}</td>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->phone }}</td>

        <td>

            <a href="{{ route('patients.edit',$patient->id) }}">Edit</a>

            <form action="{{ route('patients.destroy',$patient->id) }}" method="POST" style="display:inline;">

                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

</body>
</html>