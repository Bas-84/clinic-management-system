<!DOCTYPE html>
<html>
<head>
    <title>Edit Appointment</title>
</head>
<body>

<h1>Edit Appointment</h1>

<form action="{{ route('appointments.update', $appointment->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Date</label><br>
    <input type="date" name="appointment_date" value="{{ $appointment->appointment_date }}">
    <br><br>

    <label>Time</label><br>
    <input type="time" name="appointment_time" value="{{ $appointment->appointment_time }}">
    <br><br>

    <label>Patient</label><br>
    <select name="patient_id">
        @foreach($patients as $patient)
            <option value="{{ $patient->id }}"
                {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>
                {{ $patient->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Doctor</label><br>
    <select name="doctor_id">
        @foreach($doctors as $doctor)
            <option value="{{ $doctor->id }}"
                {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                {{ $doctor->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Status</label><br>
    <select name="status">
        <option value="Scheduled" {{ $appointment->status == 'Scheduled' ? 'selected' : '' }}>
            Scheduled
        </option>

        <option value="Completed" {{ $appointment->status == 'Completed' ? 'selected' : '' }}>
            Completed
        </option>

        <option value="Cancelled" {{ $appointment->status == 'Cancelled' ? 'selected' : '' }}>
            Cancelled
        </option>
    </select>

    <br><br>

    <button type="submit">Update</button>

</form>

<br>

<a href="{{ route('appointments.index') }}">Back</a>

</body>
</html>