<!DOCTYPE html>
<html>
<head>
<title>Doctors List</title>
</head>

<body>

<h1>Doctors List</h1>

<a href="{{ route('doctors.create') }}">Add New Doctor</a>

<br><br>

<table border="1" cellpadding="8">

<tr>

<th>ID</th>
<th>Name</th>
<th>Specialty</th>
<th>Fee</th>
<th>Room</th>
<th>Actions</th>

</tr>

@foreach($doctors as $doctor)

<tr>

<td>{{ $doctor->id }}</td>
<td>{{ $doctor->name }}</td>
<td>{{ $doctor->specialty->name }}</td>
<td>{{ $doctor->fee }}</td>
<td>{{ $doctor->room_number }}</td>

<td>

<a href="{{ route('doctors.edit',$doctor->id) }}">Edit</a>

<form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST" style="display:inline;">

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