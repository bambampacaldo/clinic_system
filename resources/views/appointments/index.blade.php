<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment List</title>
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
        table {
            background: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Appointment List</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Doctor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment['id'] }}</td>
                        <td>{{ $appointment['name'] }}</td>
                        <td>{{ $appointment['date'] }}</td>
                        <td>{{ $appointment['time'] }}</td>
                        <td>{{ $appointment['doctor'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
