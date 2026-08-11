<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>

<h1>Add New Patient</h1>

<form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">Save</button>

</form>

<br>

<a href="{{ route('patients.index') }}">Back</a>

</body>
</html>