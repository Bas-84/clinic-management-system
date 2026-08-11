<!DOCTYPE html>
<html>
<head>
<title>Doctor Details</title>
</head>

<body>

<h1>Doctor Details</h1>

<p>ID : {{ $doctor->id }}</p>
<p>Name : {{ $doctor->name }}</p>
<p>Specialty : {{ $doctor->specialty->name }}</p>
<p>Fee : {{ $doctor->fee }}</p>
<p>Room : {{ $doctor->room_number }}</p>

<a href="{{ route('doctors.index') }}">Back</a>

</body>
</html>