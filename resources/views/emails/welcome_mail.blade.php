<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ config('app.name') }}!</title>
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
            color: #5d8cf1;
            text-align: center;
            font-size: 28px;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
        }
        a {
            color: #5d8cf1;
            text-decoration: none;
        }
        .cta-button {
            background-color: #5d8cf1;
            color: #fff;
            padding: 12px 25px;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
            border-radius: 4px;
            text-decoration: none;
        }
        .cta-button:hover {
            background-color: #4a73d1;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 10px;
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
    <h1>Welcome to {{ config('app.name') }}!</h1>

    <p>Dear {{ $user->name }},</p>

    <p>We are excited to have you join us at {{ config('app.name') }}! We believe in empowering businesses, developers, and entrepreneurs with top-notch solutions to streamline their workflows and bring their visions to life. You’ve taken the first step toward making your digital experience more powerful, and we’re here to help you every step of the way.</p>

    <h3>What We Do</h3>
    <p>At {{ config('app.name') }}, we specialize in delivering cutting-edge technology services designed to make your life easier. From managing your projects efficiently to staying up-to-date with the latest tech trends, our platform has everything you need to succeed.</p>

    <h3>What You Can Do With {{ config('app.name') }}:</h3>
    <ul>
        <li><strong>Manage Your Projects:</strong> Keep all your projects in one place, collaborate with your team, and monitor progress in real-time. Our project management tools are designed to help you stay organized and on top of things.</li>
        <li><strong>Read and Follow Tech Blogs:</strong> Stay in the loop with our blog section, where we share the latest updates on technology, tutorials, and in-depth articles on emerging trends.</li>
        <li><strong>Buy Pre-Built Scripts:</strong> Need to speed up your development process? Check out our marketplace for pre-built scripts that allow you to launch your business faster. Simply customize them and get started!</li>
        <li><strong>Follow-Up on Our Products:</strong> From software solutions to tools that help grow your business, stay updated on our latest releases and product improvements.</li>
        <li><strong>Premium Support:</strong> We offer premium support for all our products and services. Whether you need assistance with a project, or you're looking to get more out of one of our solutions, our team is here for you.</li>
    </ul>

    <h3>Why You'll Love Being Part of {{ config('app.name') }}</h3>
    <p>We’re more than just a technology provider – we’re your partner in success. Our platform is built with you in mind, ensuring you have all the tools you need to manage your projects, launch your products faster, and stay informed about the latest in tech. With {{ config('app.name') }}, you’ll enjoy:</p>

    <ul>
        <li><strong>Easy-to-Use Dashboard:</strong> Manage everything from a single, intuitive interface.</li>
        <li><strong>Comprehensive Project Management:</strong> Track progress, set milestones, and collaborate with your team effortlessly.</li>
        <li><strong>Secure Digital Products:</strong> Buy secure, quality scripts and products that are ready for deployment.</li>
        <li><strong>Regular Tech Updates:</strong> Stay informed with regular updates on new technologies, trends, and solutions through our blog and resources.</li>
        <li><strong>Reliable Support:</strong> Our support team is ready to assist you with any questions or issues. Premium support ensures you’re always in good hands.</li>
    </ul>

    <p>Ready to explore? Click below to get started:</p>

    <a href="{{ config('app.url') }}" class="cta-button">Explore Now</a>

    <p>We’re thrilled to have you with us, and we look forward to seeing the incredible things you’ll achieve with {{ config('app.name') }}!</p>

    <p>Best Regards,<br>
        The {{ config('app.name') }} Team</p>

    <p class="footer">Thank you for joining {{ config('app.name') }}! We’re here to make your tech experience smoother and more enjoyable.</p>
</div>
</body>
</html>
