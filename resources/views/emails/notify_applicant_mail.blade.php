<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        h2 {
            color: #333333;
        }
        p {
            color: #555555;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h2>Application Received</h2>
    <p>Dear {{ $applicant }},</p>

    <p>Thank you for applying for the position of <strong>{{ $job->title }}</strong> at {{$web->name}}.</p>

    <p>We have successfully received your application, including your resume and cover letter. Our hiring team is currently
        reviewing your submission and will get back to you shortly if your profile matches the requirements of the role.</p>

    <p>If you have any questions or need to update any information, feel free to reply to this email.</p>

    <p>Best regards,<br>The {{$web->name}} Hiring Team</p>
</div>
</body>
</html>
