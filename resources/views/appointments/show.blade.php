<!DOCTYPE html>
<html>
<head>
<title>Appointment Details</title>
</head>

<body>

<h1>Appointment Details</h1>

<p>ID: {{ $appointment->id }}</p>
<p>Date: {{ $appointment->appointment_date }}</p>
<p>Time: {{ $appointment->appointment_time }}</p>
<p>Patient: {{ $appointment->patient->name }}</p>
<p>Doctor: {{ $appointment->doctor->name }}</p>
<p>Status: {{ $appointment->status }}</p>

<a href="{{ route('appointments.index') }}">Back</a>

</body>
</html>