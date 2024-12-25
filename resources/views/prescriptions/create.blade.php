<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Prescription</title>
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
        <h2 class="text-center mb-4">Create Prescription</h2>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <form action="{{ route('prescription.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="patient_name" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter patient name" required>
                    </div>
                    <div class="mb-3">
                        <label for="medicines" class="form-label">Medicines</label>
                        <textarea class="form-control" id="medicines" name="medicines" placeholder="List medicines and instructions" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="doctor" class="form-label">Doctor</label>
                        <select class="form-select" id="doctor" name="doctor" required>
                            <option value="" disabled selected>Select a doctor</option>
                            <option value="Dr. Smith">Dr. Smith</option>
                            <option value="Dr. Brown">Dr. Brown</option>
                            <option value="Dr. Taylor">Dr. Taylor</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Create Prescription</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
