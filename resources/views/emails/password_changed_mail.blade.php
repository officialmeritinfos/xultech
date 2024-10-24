<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change Confirmation</title>
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
    <h1>Password Changed Successfully</h1>

    <p>Hi {{ $user->name }},</p>

    <p>We just wanted to let you know that your password has been successfully changed. If you made this change, no further action is needed. You can now log in with your new password and continue using your account securely.</p>

    <p>If you did <strong>not</strong> make this change, it’s possible someone else has access to your account. In this case, we highly recommend you take the following steps immediately:</p>

    <ul>
        <li><strong>Deactivate your account:</strong> You can deactivate your account temporarily to prevent further unauthorized access. To do this, find one of the recent login notification emails we sent you and use the "Deactivate Account" button in that email.</li>
        <li><strong>Contact our support team:</strong> Reach out to us immediately if you suspect any suspicious activity or if you have trouble deactivating your account. Our team will assist you in securing your account.</li>
        <li><strong>Review your security settings:</strong> Once your account is secure, please review your security settings and enable two-factor authentication for an added layer of protection.</li>
    </ul>

    <p>We take your security seriously, and our goal is to ensure your account remains safe. If you have any concerns, please don’t hesitate to get in touch with our support team for assistance.</p>


    <p>Best regards,<br>
        The {{ config('app.name') }} Security Team</p>

    <p class="footer">This message was sent to {{ $user->email }}. If you did not request this password change, please contact us immediately.</p>
</div>
</body>
</html>
