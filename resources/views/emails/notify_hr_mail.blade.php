<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application Submission</title>
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
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h2>New Job Application Submitted</h2>
    <p>Hello {{$web->name}} Team,</p>
    <p>We have received a new job application for the position of <strong>{{ $job->title }}</strong>.</p>

    <h3>Applicant Details:</h3>
    <ul>
        <li><strong>Name:</strong> {{ $submission->name }}</li>
        <li><strong>Email:</strong> {{ $submission->email }}</li>
        <li><strong>Phone:</strong> {{ $submission->phone ?? 'N/A' }}</li>
    </ul>

    <h3>Application Attachments:</h3>
    <ul>
        <li><strong>Resume:</strong> <a href="{{ $submission->resume }}">Download Resume</a></li>
        <li><strong>Cover Letter:</strong></li>
    </ul>
    <p>{{ $submission->cover_letter ?? 'No cover letter provided.' }}</p>

    <p>Thank you,<br>The {{$web->name}} Hiring Team</p>
</div>
</body>
</html>
