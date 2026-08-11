<!DOCTYPE html>
<html>
<head>
    <title>Add Specialty</title>
</head>
<body>

<h1>Add New Specialty</h1>

<form action="{{ route('specialties.store') }}" method="POST">

    @csrf

    <label>Name</label><br>
    <input type="text" name="name">

    <br><br>

    <button type="submit">Save</button>

</form>

<br>

<a href="{{ route('specialties.index') }}">Back</a>

</body>
</html>