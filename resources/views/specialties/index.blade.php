<!DOCTYPE html>
<html>
<head>
    <title>Specialties List</title>
</head>
<body>

<h1>Specialties List</h1>

<a href="{{ route('specialties.create') }}">Add New Specialty</a>

<br><br>

<table border="1" cellpadding="8">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Actions</th>
</tr>

@foreach($specialties as $specialty)

<tr>

<td>{{ $specialty->id }}</td>

<td>{{ $specialty->name }}</td>

<td>

<a href="{{ route('specialties.edit',$specialty->id) }}">Edit</a>

<form action="{{ route('specialties.destroy',$specialty->id) }}" method="POST" style="display:inline;">

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