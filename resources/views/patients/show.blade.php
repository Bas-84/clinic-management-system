<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
</head>
<body>

<h1>Patient Details</h1>

<p><strong>ID:</strong> {{ $patient->id }}</p>
<p><strong>Name:</strong> {{ $patient->name }}</p>
<p><strong>Phone:</strong> {{ $patient->phone }}</p>

<a href="{{ route('patients.index') }}">Back</a>

</body>
</html>