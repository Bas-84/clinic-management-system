<!DOCTYPE html>
<html>
<head>
    <title>Appointments List</title>
</head>

<body>

<h1>Appointments List</h1>

{{-- Add Appointment --}}
@if(in_array(auth()->user()->role, ['admin', 'receptionist']))
    <a href="{{ route('appointments.create') }}">Add New Appointment</a>
@endif

<br><br>

<table border="1" cellpadding="8">

<tr>

<th>ID</th>
<th>Date</th>
<th>Time</th>
<th>Patient</th>
<th>Doctor</th>
<th>Status</th>
<th>Actions</th>

</tr>

@foreach($appointments as $appointment)

<tr>

<td>{{ $appointment->id }}</td>
<td>{{ $appointment->appointment_date }}</td>
<td>{{ $appointment->appointment_time }}</td>
<td>{{ $appointment->patient->name }}</td>
<td>{{ $appointment->doctor->name }}</td>
<td>{{ $appointment->status }}</td>

<td>

    {{-- Edit: Admin + Receptionist --}}
    @if(in_array(auth()->user()->role, ['admin', 'receptionist']))
        <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
    @endif

    {{-- Delete: Admin only --}}
    @if(auth()->user()->role === 'admin')

        <form action="{{ route('appointments.destroy', $appointment->id) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>

        </form>

    @endif

    {{-- Doctor: View Only --}}
    @if(auth()->user()->role === 'doctor')
        View Only
    @endif

</td>

</tr>

@endforeach

</table>

</body>
</html>