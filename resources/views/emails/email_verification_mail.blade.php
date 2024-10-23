<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        /* General styling */
        body, table, td, a {
            text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            width: 100% !important;
        }

        /* Set background color */
        body {
            background-color: #f6f6f6;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        img {
            border: none;
            max-width: 100%;
            display: block;
        }

        h1, h2, h3, p {
            margin: 0;
            padding: 0;
        }

        /* Mobile responsiveness */
        @media screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .responsive {
                padding: 0 20px;
            }
        }
    </style>
</head>
<body>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" class="container" style="background-color: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <!-- Header -->
    <tr>
        <td align="center" style="padding: 20px 0;">
            <img src="{{asset($web->logo_path)}}" alt="XulTech Logo" style="height: 50px;">
        </td>
    </tr>

    <!-- Greeting -->
    <tr>
        <td align="left" style="padding: 0 40px; font-size: 24px; color: #333333;">
            <h4>Welcome to {{$web->name}}, {{ $user->name }}!</h4>
        </td>
    </tr>

    <!-- Message -->
    <tr>
        <td align="left" style="padding: 20px 40px; font-size: 16px; color: #555555;">
            <p>Thank you for registering with us. Before you get started, we need to verify your email address. This ensures the security and validity of your account.</p>
        </td>
    </tr>

    <!-- Verification Code Section -->
    <tr>
        <td align="center" style="padding: 30px 40px; font-size: 22px; background-color: #f1f1f1; color: #222222; border-radius: 8px;">
            <strong>Your Verification Code: {{ $verification_code }}</strong>
        </td>
    </tr>

    <!-- Instructions -->
    <tr>
        <td align="left" style="padding: 20px 40px; font-size: 16px; color: #555555;">
            <p>If you did not register an account with XulTech, please disregard this email or contact our support team.</p>
            <p>If you have any issues verifying your account, feel free to reach out to us at <a href="mailto:{{$web->contect_email}}" style="color: #007bff;">{{$web->contect_email}}</a>.</p>
        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td align="center" style="padding: 30px 0; font-size: 12px; color: #888888;">
            <p>&copy; {{date('Y')}} {{config('app.name')}}. All rights reserved.</p>
            <p><a href="{{route('resources.privacyPolicy')}}" style="color: #888888; text-decoration: underline;">Privacy Policy</a> | <a href="{{route('resources.termsOfService')}}" style="color: #888888; text-decoration: underline;">Terms of Service</a></p>
        </td>
    </tr>
</table>

</body>
</html>
