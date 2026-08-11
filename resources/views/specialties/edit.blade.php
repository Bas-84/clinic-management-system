<!DOCTYPE html>
<html>
<head>
    <title>Edit Specialty</title>
</head>
<body>

<h1>Edit Specialty</h1>

<form action="{{ route('specialties.update',$specialty->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Name</label><br>
    <input type="text" name="name" value="{{ $specialty->name }}">

    <br><br>

    <button type="submit">Update</button>

</form>

<br>

<a href="{{ route('specialties.index') }}">Back</a>

</body>
</html>