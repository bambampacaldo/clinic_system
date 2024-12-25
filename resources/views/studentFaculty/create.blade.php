<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student/Faculty</title>
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
        <h2 class="text-center mb-4">Register Student/Faculty</h2>
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form action="{{ route('studentFaculty.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="" disabled selected>Select type</option>
                            <option value="Student">Student</option>
                            <option value="Faculty">Faculty</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_number" class="form-label">ID Number</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" placeholder="Enter ID number" required>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" placeholder="Enter department" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
