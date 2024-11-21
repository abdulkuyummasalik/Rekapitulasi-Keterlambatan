<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
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
            color: #007bff;
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
                    <div class="error-code">404</div>
                    <p class="error-message">The page you are looking for doesn't exist.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary back-home-btn">Back to home</a>
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
