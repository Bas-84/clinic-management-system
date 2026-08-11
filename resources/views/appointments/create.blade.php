<!DOCTYPE html>
<html>
<head>
    <title>Add Appointment</title>
</head>
<body>

<h1>Add Appointment</h1>

<form action="{{ route('appointments.store') }}" method="POST">

@csrf

<label>Date</label><br>
<input type="date" name="appointment_date"><br><br>

<label>Time</label><br>
<input type="time" name="appointment_time"><br><br>

<label>Patient</label><br>

<select name="patient_id">
@foreach($patients as $patient)
<option value="{{ $patient->id }}">{{ $patient->name }}</option>
@endforeach
</select>

<br><br>

<label>Doctor</label><br>

<select name="doctor_id">
@foreach($doctors as $doctor)
<option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
@endforeach
</select>

<br><br>

<label>Status</label><br>

<select name="status">
<option>Scheduled</option>
<option>Completed</option>
<option>Cancelled</option>
</select>

<br><br>

<button type="submit">Save</button>

</form>

<br>

<a href="{{ route('appointments.index') }}">Back</a>

</body>
</html>