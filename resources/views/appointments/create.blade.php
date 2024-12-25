<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Light ocean blue */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #0077b6;
            border: none;
        }
        .btn-primary:hover {
            background-color: #005f87;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Schedule an Appointment</h2>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form action="{{ route('appointment.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter patient name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Patient Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter patient email" required>
                    </div>
                    <div class="mb-3">
                        <label for="doctor" class="form-label">Select Doctor</label>
                        <select class="form-select" id="doctor" name="doctor" required>
                            <option value="" disabled selected>Select a doctor</option>
                            <option value="Dr. Smith">Dr. Smith</option>
                            <option value="Dr. Brown">Dr. Brown</option>
                            <option value="Dr. Taylor">Dr. Taylor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Appointment Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Appointment Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Schedule Appointment</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
