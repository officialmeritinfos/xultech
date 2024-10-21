@extends('home.layout.base')
@section('content')

    <div class="inner_banner-section">
        <img class="inner_banner-background-image" src="{{asset('home/image/common/inner-bg.png')}}" alt="image alt">
        <div class="container">
            <div class="inner_banner-content-block">
                <h3 class="inner_banner-title">
                    {{$pageName}}
                </h3>
                <ul class="banner__page-navigator">
                    <li>
                        <a href="{{route('landingPage')}}">Home</a>
                    </li>
                    <li class="active">
                        <a href="{{url()->current()}}">
                            {{$pageName}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~
  Service Details main Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="service-details_main-section section-padding-120" style="padding:2rem;">
        <div class="row justify-content-center ">
            <div class="col-lg-12">
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> Simplifying Care, One Step at a Time.</h3>
                    <p>
                        At {{$siteName}}, we take your privacy seriously. We are committed to protecting the personal data you share with us
                        through your interactions with our services, website, and communications. This policy outlines the types of
                        information we collect, how we use it, and how we keep it safe. By using our services or visiting our website,
                        you agree to the practices described in this Privacy Policy.
                    </p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title"> 1. Information We Collect</h3>
                    <p>We collect various types of information depending on how you interact with {{$siteName}}, including:</p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li><strong>Personal Information:</strong> When you contact us, sign up for a service, or interact with our support team, we collect personal information such as your name, email address, phone number, company name, and billing details.</li>
                            <li><strong>Account Data:</strong> When you create an account with {{$siteName}}, we store your account credentials, purchase history, subscription details, and preferences.</li>
                            <li><strong>Technical Data:</strong> To improve our website and services, we collect technical data such as your IP address, device information, browser type, operating system, referring website, and the pages you visit.</li>
                            <li><strong>Usage Data:</strong> We gather data about how you use our services, including features accessed, time spent on pages, and actions taken on our platform.</li>
                            <li><strong>Cookies:</strong> Our website uses cookies to track browsing behavior, improve site functionality, and provide a personalized experience. For more details, see our <a href="#cookies">Cookies Policy</a>.</li>
                            <li><strong>Third-Party Data:</strong> We may receive personal data from third parties (e.g., analytics providers or advertising networks) to enhance our understanding of user behavior and preferences.</li>
                        </ul>
                    </div>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title"> 2. How We Use Your Information</h3>
                    <p>We use the information collected for a variety of business purposes, including:</p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li><strong>Service Delivery:</strong> To provide, manage, and improve our products and services.</li>
                            <li><strong>Personalization:</strong> To tailor content and communications to your preferences, providing you with a personalized user experience.</li>
                            <li><strong>Billing and Transactions:</strong> To process payments, manage subscriptions, and maintain accurate financial records.</li>
                            <li><strong>Marketing and Promotions:</strong> With your consent, we may send promotional emails or newsletters to keep you updated on new products, offers, or industry trends.</li>
                            <li><strong>Research and Development:</strong> To analyze usage data and improve the features, performance, and security of our platform.</li>
                            <li><strong>Security and Fraud Prevention:</strong> To monitor, prevent, and detect security threats, fraud, and malicious activities.</li>
                            <li><strong>Compliance:</strong> To meet legal obligations such as tax reporting, fulfilling government requests, or enforcing contractual agreements.</li>
                        </ul>
                    </div>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title"> 3. Data Protection and Security</h3>
                    <p>
                        We implement a variety of security measures to protect the integrity and confidentiality of your personal data.
                        This includes:
                    </p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li><strong>Encryption:</strong> All sensitive data is encrypted during transmission and at rest, using industry-standard encryption protocols.</li>
                            <li><strong>Access Control:</strong> Access to personal data is restricted to authorized personnel only, and these individuals are bound by confidentiality agreements.</li>
                            <li><strong>Regular Security Audits:</strong> We regularly audit our systems for vulnerabilities, update security patches, and monitor for potential threats.</li>
                            <li><strong>Data Backup:</strong> We perform regular data backups to ensure that, in the event of a security breach, personal data can be recovered and systems can be restored quickly.</li>
                        </ul>
                    </div>
                    <p>
                        While we work hard to protect your data, please note that no system can guarantee absolute security. We encourage you to take personal precautions, such as safeguarding your account credentials and using strong passwords.
                    </p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title"> 4. Sharing Your Information</h3>
                    <p>We do not sell, rent, or trade your personal data to third parties. However, we may share your information in the following scenarios:</p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li><strong>Service Providers:</strong> We may share data with trusted third-party service providers who help us deliver and improve our services, such as payment processors, hosting providers, and analytics services. These providers are bound by confidentiality agreements and are not permitted to use your data for their own purposes.</li>
                            <li><strong>Legal Requirements:</strong> We may disclose your information to comply with legal obligations, such as court orders, subpoenas, or law enforcement requests.</li>
                            <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred to the new owner as part of the transaction.</li>
                            <li><strong>With Your Consent:</strong> In any other circumstances where we share your information, we will seek your explicit consent first.</li>
                        </ul>
                    </div>
                </div>
                <div class="service-details_main-single" id="cookies">
                    <h3 class="service-details_main-title"> 5. Cookies and Tracking Technologies</h3>
                    <p>
                        Our website uses cookies and similar tracking technologies to enhance your experience, improve site performance, and analyze site usage. Cookies are small data files placed on your device when you visit a website, allowing us to remember your preferences and track your activity.
                    </p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li><strong>Types of Cookies:</strong> We use essential cookies (for site functionality), performance cookies (for analytics), and marketing cookies (for personalized ads).</li>
                            <li><strong>Third-Party Cookies:</strong> Some cookies are placed by third-party services such as Google Analytics or social media platforms to help us measure site traffic or facilitate sharing features.</li>
                            <li><strong>Opt-Out Options:</strong> You can manage your cookie preferences through your browser settings, allowing you to block or delete cookies. However, disabling cookies may affect your ability to use certain features of our site.</li>
                        </ul>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> 6. Your Rights</h3>
                    <p>As a user of our platform, you have the following rights regarding your personal data:</p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li><strong>Right to Access:</strong> You can request a copy of the personal data we hold about you at any time.</li>
                            <li><strong>Right to Rectification:</strong> If any information we have about you is inaccurate, you have the right to request corrections.</li>
                            <li><strong>Right to Erasure:</strong> Under certain conditions, you may request that we delete your personal data from our systems.</li>
                            <li><strong>Right to Data Portability:</strong> You can request a copy of your data in a machine-readable format to transfer to another service provider.</li>
                            <li><strong>Right to Object:</strong> You may object to the processing of your data for direct marketing purposes, and we will respect your preference immediately.</li>
                        </ul>
                    </div>
                    <p>To exercise any of these rights, please contact us at <a href="mailto:{{$web->contact_email}}">{{$web->contact_email}}</a>.</p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> 7. Data Retention</h3>
                    <p>
                        We retain personal data only for as long as necessary to fulfill the purposes for which it was collected or to comply with legal obligations. When data is no longer needed, we securely dispose of it to prevent unauthorized access or use.
                    </p>
                    <div class="career-details_info list-style-bullet">
                        <ul  class="list-style-bullet">
                            <li>Account data is retained for as long as your account is active.</li>
                            <li>Transaction records are kept for auditing and tax reporting purposes, in compliance with local laws.</li>
                        </ul>
                    </div>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title"> 8. International Data Transfers</h3>
                    <p>
                        As {{$siteName}} operates globally, your personal data may be transferred to countries outside your home jurisdiction. If data is transferred to countries with less stringent data protection laws, we ensure that adequate safeguards are in place, such as binding corporate rules or contractual obligations.
                    </p>
                    <p>
                        We take appropriate steps to ensure that your data remains secure during any international transfers, and we comply with data protection laws governing such transfers. These steps may include using contracts that contain data protection provisions.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">9. Changes to This Privacy Policy</h3>
                    <p>
                        {{$siteName}} reserves the right to update this Privacy Policy periodically to reflect changes in our practices or in legal requirements. When we update the policy, we will notify users by posting the revised version on our website and, where appropriate, by other means (such as email notifications). The updated version will include the date it was last modified.
                    </p>
                    <p>
                        We encourage you to review this policy regularly to stay informed about how we are protecting your information.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">10. Children’s Privacy</h3>
                    <p>
                        Our services are not intended for children under the age of 13. We do not knowingly collect or solicit personal data from anyone under 13. If we learn that we have collected personal data from a child under age 13 without verification of parental consent, we will delete that information as quickly as possible. If you believe we may have any information from or about a child under 13, please contact us.
                    </p>
                </div>
                <div class="service-details_main-single">
                    <h3 class="service-details_main-title">11. Contact Us</h3>
                    <p>
                        If you have any questions, concerns, or requests regarding this Privacy Policy or your personal data, please feel free to contact us using the following details:
                    </p>
                    <p><strong>Email:</strong> <a href="mailto:{{$web->contact_email}}">{{$web->contact_email}}</a></p>
                </div>

            </div>
        </div>
    </div>


@endsection
