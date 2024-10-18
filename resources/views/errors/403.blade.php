<!-- resources/views/errors/403.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Forbidden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #dc3545;
        }
        .error-message {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        .back-home-btn {
            text-decoration: none;
            color: white;
        }
        .illustration {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="error-container">
                    <div class="error-code">403</div>
                    <p class="error-message">You do not have permission to access this page.</p>
                    <a href="{{ url('/') }}" class="btn btn-danger back-home-btn">Back to home</a>
                    <div class="illustration">
                        <img src="https://via.placeholder.com/150" alt="Illustration" width="150">
                        <!-- Ganti dengan gambar ilustrasi sesuai keinginan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
