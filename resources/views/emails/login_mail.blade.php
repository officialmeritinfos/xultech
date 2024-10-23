<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Access Notification</title>
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
        .ip-info {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
            margin: 10px 0;
        }
        a {
            color: #5d8cf1;
            text-decoration: none;
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
    <h1>Important: Account Access Alert</h1>

    <p>Hi {{ $user->name }},</p>

    <p>We noticed a new sign-in to your account from a device or location we haven’t seen before. Here are the details of the access:</p>

    <div class="ip-info">
        <strong>IP Address:</strong> {{ $ipAddress }}<br>
        <strong>Date & Time:</strong> {{ $accessTime }}
    </div>

    <p>If this was you, there’s nothing to worry about. You can continue using your account as normal. However, if this access seems suspicious or unfamiliar, we highly recommend you secure your account immediately.</p>

    <h3>What Should You Do?</h3>
    <ul>
        <li><strong>Change Your Password:</strong> We recommend updating your password to something unique and strong. Use a combination of letters, numbers, and symbols to make it harder for anyone to guess.</li>
        <li><strong>Enable Two-Factor Authentication (2FA):</strong> Adding another layer of security with 2FA ensures only you can access your account. Go to your account settings to set it up.</li>
        <li><strong>Review Your Account Activity:</strong> Check for any other suspicious activity and ensure no unauthorized changes have been made.</li>
    </ul>

    <p>If you need help securing your account or have questions, please don't hesitate to contact our support team. We're here to help you.</p>

    <a href="{{ $secureUrl }}" class="cta-button">Secure My Account</a>

    <p>For your security, we've also logged this information in your account's activity history. If this was not you, please take immediate action to protect your account.</p>

    <p>Best regards,<br>
        The {{ config('app.name') }} Security Team</p>

    <p class="footer">Thank you for choosing {{ config('app.name') }}. We're committed to keeping your account secure!</p>
</div>
</body>
</html>
