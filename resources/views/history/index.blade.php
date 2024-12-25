<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient History</title>
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
        <h2 class="text-center mb-4">Patient History</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Diagnosis</th>
                    <th>Treatment</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                    <tr>
                        <td>{{ $history['id'] }}</td>
                        <td>{{ $history['patient_name'] }}</td>
                        <td>{{ $history['diagnosis'] }}</td>
                        <td>{{ $history['treatment'] }}</td>
                        <td>{{ $history['date'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
