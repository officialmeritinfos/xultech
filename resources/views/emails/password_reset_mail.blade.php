<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        /* Basic styling for email */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #e74c3c;
            text-align: center;
            font-size: 28px;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
        }
        .code {
            background-color: #f0f0f0;
            padding: 15px;
            font-size: 22px;
            letter-spacing: 5px;
            text-align: center;
            border-radius: 5px;
            margin: 20px 0;
        }
        .cta-button {
            background-color: #e74c3c;
            color: #fff;
            padding: 12px 25px;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
            border-radius: 4px;
            text-decoration: none;
        }
        .cta-button:hover {
            background-color: #c0392b;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            color: #999;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            .container {
                padding: 15px;
            }
            h1 {
                font-size: 24px;
            }
            p {
                font-size: 14px;
            }
            .cta-button {
                padding: 10px 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Password Reset Request</h1>

    <p>Hi {{ $user->name }},</p>

    <p>We received a request to reset your password. To proceed with resetting your password, please use the 6-digit verification code provided below. If you did not request this change, please ignore this email, and your password will remain the same.</p>

    <div class="code">
        {{ $resetCode }} <!-- This should be the 6-digit reset code -->
    </div>

    <p>Simply copy the code and enter it in the password reset form to continue. This code is only valid for the next 30 minutes. For security purposes, do not share this code with anyone.</p>


    <p>If you encounter any issues or need further assistance, feel free to contact our support team.</p>

    <p>Thank you for trusting {{ config('app.name') }}. We're committed to ensuring the security of your account!</p>

    <p class="footer">Best regards,<br>
        The {{ config('app.name') }} Team</p>
</div>
</body>
</html>
