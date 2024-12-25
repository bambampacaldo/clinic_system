<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic System Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light ocean blue background */
        }
        .navbar {
            background-color: #0077b6; /* Ocean blue */
            color: white;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .card {
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #0077b6;
            color: white;
            text-align: center;
        }
        .card-body {
            text-align: center;
            background-color: #ffffff;
        }
        .btn-custom {
            background-color: #0077b6;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #005f87;
            color: #f0f8ff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Clinic Dashboard</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row g-4">
            <!-- Registration of Staff -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Registration of Staff
                    </div>
                    <div class="card-body">
                        <p>Register new staff members in the clinic system.</p>
                        <a href="{{ route('staff.create') }}" class="btn btn-custom">Go</a>

                    </div>
                </div>
            </div>
            <!-- Registration of Student and Faculty -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Registration of Student and Faculty
                    </div>
                    <div class="card-body">
                        <p>Register students and faculty for clinic services.</p>
                        <a href="{{ route('studentFaculty.create') }}" class="btn btn-custom">Go</a>
                    </div>
                </div>
            </div>
            <!-- Appointment -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Appointment
                    </div>
                    <div class="card-body">
                        <p>Schedule a new appointment with a doctor.</p>
                        <a href="{{ route('appointment.create') }}" class="btn btn-custom">Go</a>

                    </div>
                </div>
            </div>
            <!-- Appointment List -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Appointment List
                    </div>
                    <div class="card-body">
                        <p>View all scheduled appointments.</p>
                        <a href="{{ route('appointments.index') }}" class="btn btn-custom">Go</a>
                    </div>
                </div>
            </div>
            <!-- View History -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        View History
                    </div>
                    <div class="card-body">
                        <p>Check patient medical history.</p>
                        <a href="{{ route('history.index') }}" class="btn btn-custom">Go</a>
                    </div>
                </div>
            </div>
            <!-- Create Diagnoses -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Create Diagnoses
                    </div>
                    <div class="card-body">
                        <p>Record and manage patient diagnoses.</p>
                        <a href="{{ route('diagnosis.create') }}" class="btn btn-custom">Go</a>
                    </div>
                </div>
            </div>
            <!-- Prescription -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Prescription
                    </div>
                    <div class="card-body">
                        <p>Create and issue prescriptions for patients.</p>
                        <a href="{{ route('prescription.create') }}" class="btn btn-custom">Go</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
