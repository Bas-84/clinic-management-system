<!DOCTYPE html>
<html>
<head>
    <title>Edit Doctor</title>
</head>
<body>

<h1>Edit Doctor</h1>

<form action="{{ route('doctors.update',$doctor->id) }}" method="POST">

@csrf
@method('PUT')

<label>Name</label><br>
<input type="text" name="name" value="{{ $doctor->name }}"><br><br>

<label>Specialty</label><br>

<select name="specialty_id">

@foreach($specialties as $specialty)

<option value="{{ $specialty->id }}"
{{ $doctor->specialty_id == $specialty->id ? 'selected' : '' }}>

{{ $specialty->name }}

</option>

@endforeach

</select>

<br><br>

<label>Fee</label><br>
<input type="number" name="fee" value="{{ $doctor->fee }}"><br><br>

<label>Room Number</label><br>
<input type="text" name="room_number" value="{{ $doctor->room_number }}"><br><br>

<button type="submit">Update</button>

</form>

</body>
</html>