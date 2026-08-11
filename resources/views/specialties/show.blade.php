<!DOCTYPE html>
<html>
<head>
    <title>Specialty Details</title>
</head>
<body>

<h1>Specialty Details</h1>

<p>ID: {{ $specialty->id }}</p>
<p>Name: {{ $specialty->name }}</p>

<a href="{{ route('specialties.index') }}">Back</a>

</body>
</html>