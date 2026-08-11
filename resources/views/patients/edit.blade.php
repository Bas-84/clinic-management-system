<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>

<h1>Edit Patient</h1>

<form action="{{ route('patients.update', $patient->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $patient->name }}"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="{{ $patient->phone }}"><br><br>

    <button type="submit">Update</button>

</form>

<br>

<a href="{{ route('patients.index') }}">Back</a>

</body>
</html>