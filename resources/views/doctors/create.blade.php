<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
</head>
<body>

<h1>Add Doctor</h1>

<form action="{{ route('doctors.store') }}" method="POST">

@csrf

<label>Name</label><br>
<input type="text" name="name"><br><br>

<label>Specialty</label><br>
<select name="specialty_id">
@foreach($specialties as $specialty)
<option value="{{ $specialty->id }}">
{{ $specialty->name }}
</option>
@endforeach
</select>

<br><br>

<label>Fee</label><br>
<input type="number" name="fee"><br><br>

<label>Room Number</label><br>
<input type="text" name="room_number"><br><br>

<button type="submit">Save</button>

</form>

<br>

<a href="{{ route('doctors.index') }}">Back</a>

</body>
</html>