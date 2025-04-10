<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transmedic - Backend APP</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
            color: #1a202c;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .version {
            font-size: 1.2rem;
            color: #6b7280;
            margin-bottom: 1.5rem;
        }
        .button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            background-color: #4a5568;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #2d3748;
        }
        p{
            font-size: 12px !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">Transmedic Framework</div>
    <div class="version">Version 1.0.0</div>
    <a href="{{ url('/') }}" class="button">Coding Doc</a>
    <a href="{{ url('/telescope') }}" class="button">Logging</a>
    <a href="{{ url('/docs/api#/') }}" class="button">API Doc</a>

    <p>Build With Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
</div>
</body>
</html>
