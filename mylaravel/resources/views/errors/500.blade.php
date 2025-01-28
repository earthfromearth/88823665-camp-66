@extends('errors::minimal')

@section('title', __('Server Error'))
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>500 - Server Error</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background: #f3f4f6;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .error-container {
                text-align: center;
                color: #333;
            }
            .error-code {
                font-size: 120px;
                font-weight: bold;
                color: #ff4d4f;
            }
            .error-message {
                font-size: 24px;
                margin: 20px 0;
            }
            .error-description {
                font-size: 16px;
                color: #777;
                margin-bottom: 30px;
            }
            .home-button {
                display: inline-block;
                padding: 12px 24px;
                font-size: 16px;
                color: #fff;
                background-color: #007bff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s;
            }
            .home-button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">500</div>
            <div class="error-message">Oops! Server Error</div>
            <div class="error-description">Something went wrong on our end. Please try again later.</div>
            <a href="/" class="home-button">Go to Homepage</a>
        </div>
    </body>
    </html>
