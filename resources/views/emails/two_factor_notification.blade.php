<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Factor Authentication Enabled</title>
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
            color: #27ae60;
            text-align: center;
            font-size: 28px;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
        }
        .cta-button {
            background-color: #27ae60;
            color: #fff;
            padding: 12px 25px;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
            border-radius: 4px;
            text-decoration: none;
        }
        .cta-button:hover {
            background-color: #2ecc71;
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
    <h1>Two-Factor Authentication Enabled</h1>

    <p>Hi {{ $user->name }},</p>

    <p>We’re happy to let you know that two-factor authentication (2FA) has been successfully enabled for your account. With 2FA, your account is now secured with an extra layer of protection, making it harder for unauthorized individuals to access your account.</p>

    <p>Here's how two-factor authentication works:</p>
    <ul>
        <li>Whenever you log in, after entering your password, you’ll be prompted to enter a verification code generated by your authentication app.</li>
        <li>This code is valid for a short period of time and is unique each time you log in, making it far more secure than just using a password.</li>
        <li>Even if someone has your password, they won’t be able to access your account without the 2FA code.</li>
    </ul>

    <h3>What You Should Know</h3>
    <p>Here are a few important points to keep in mind now that you have enabled 2FA:</p>
    <ul>
        <li><strong>Backup your recovery codes:</strong> During the 2FA setup, you were given recovery codes. These codes allow you to access your account if you lose access to your authentication app. Please make sure you store them in a secure place.</li>
        <li><strong>Keep your device secure:</strong> Your authentication app is now essential to accessing your account. Make sure your device is protected with a PIN, fingerprint, or face recognition.</li>
        <li><strong>Need help?</strong> If you ever encounter issues logging in, feel free to contact our support team.</li>
    </ul>

    <p>If you did <strong>not</strong> enable two-factor authentication, please reach out to us immediately by clicking the button below to secure your account.</p>

    <a href="{{ route('company.contact') }}" class="cta-button">Contact Support</a>

    <p>Thank you for taking steps to improve the security of your account. With two-factor authentication enabled, you can rest assured that your account is much more secure.</p>

    <p>Best regards,<br>
        The {{ config('app.name') }} Security Team</p>

    <p class="footer">If you did not request this change or have any concerns, please contact our support team immediately at {{ config('app.support_email') }}.</p>
</div>
</body>
</html>
