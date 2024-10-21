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
                    <p>Welcome to XulTech! These Terms of Service ("Terms") govern your access to and use of XulTech’s services, including our web development, mobile app development, custom software solutions, IT consulting, and other related services (collectively referred to as the "Services"). By accessing or using our Services, you agree to be bound by these Terms. If you do not agree with any part of these Terms, you must not use our Services.</p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title"> 1. Definitions</h3>
                    <p>We collect various types of information depending on how you interact with XulTech, including:</p>
                    <ul class="list-style-bullet">
                        <li><strong>"We," "Us," or "XulTech":</strong> Refers to XulTech, its affiliates, officers, employees, and contractors.</li>
                        <li><strong>"You" or "Client":</strong> Refers to the individual, company, or organization utilizing our Services.</li>
                        <li><strong>"Services":</strong> Includes web development, mobile app development, software solutions, IT consulting, technical support, eCommerce development, and all other digital services provided by XulTech.</li>
                        <li><strong>"Agreement":</strong> Refers to the contractual relationship between XulTech and the Client under these Terms of Service.</li>
                    </ul>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title"> 2. Scope of Services</h3>
                    <p>XulTech provides a variety of digital services to assist businesses with their technical and development needs. The scope of our Services includes but is not limited to:</p>
                    <ul class="list-style-bullet">
                        <li><strong>Web Development:</strong> Designing, developing, and maintaining websites for businesses of all sizes.</li>
                        <li><strong>Mobile App Development:</strong> Building cross-platform mobile applications using technologies like Flutter, React Native, and native development for Android and iOS.</li>
                        <li><strong>Software Development:</strong> Custom software solutions tailored to meet specific business needs, including inventory systems, CRMs, and business management tools.</li>
                        <li><strong>IT Consulting:</strong> Providing technical advice, strategy development, and consultation services to optimize and grow your business with the right technology.</li>
                        <li><strong>Business Management Solutions:</strong> Implementation of comprehensive business management systems, including POS systems, booking platforms, and more.</li>
                        <li><strong>E-Commerce Development:</strong> Building fully functional eCommerce platforms with payment integration, order management, and analytics.</li>
                        <li><strong>Support and Maintenance:</strong> Ongoing technical support and maintenance to ensure smooth operations of the developed solutions.</li>
                    </ul>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">3. Acceptance of Terms</h3>
                    <p>By accessing and using our Services, you accept and agree to comply with these Terms. If you are entering into this agreement on behalf of a company or other legal entity, you represent that you have the authority to bind that entity to these Terms. If you do not have such authority or do not agree with these Terms, you may not use the Services.</p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">4. Service Delivery and Modality</h3>
                    <p>XulTech provides all Services digitally, delivered through online platforms, in-person meetings (where applicable), or remote collaboration tools. We commit to delivering the agreed-upon Services within the specified time frame and according to the project requirements established in the service agreement.</p>
                    <ul class="list-style-bullet">
                        <li><strong>Project Phases:</strong> The delivery process typically includes phases such as discovery, planning, design, development, testing, and deployment.</li>
                        <li><strong>Client Collaboration:</strong> Client involvement and feedback are crucial during the design and development phases to ensure the final product meets expectations. Clients are responsible for providing necessary assets, feedback, and approvals in a timely manner.</li>
                        <li><strong>Testing:</strong> We thoroughly test all products before deployment, but it is the Client’s responsibility to review and approve the final product during the acceptance phase.</li>
                        <li><strong>Revisions:</strong> XulTech allows a reasonable number of revisions during the development and testing phases. Major changes or new features requested after the project scope is defined may incur additional costs.</li>
                    </ul>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">5. Payments, Fees, and Billing</h3>
                    <p>All Services provided by XulTech are subject to agreed-upon fees, which are outlined in the project proposal or contract. Payment terms and conditions include:</p>
                    <ul class="list-style-bullet">
                        <li><strong>Payment Schedule:</strong> Payments are typically structured in milestones or phases, such as an initial deposit, progress payments, and final payment upon project completion.</li>
                        <li><strong>Currency:</strong> Payments must be made in the currency specified in the service agreement (e.g., NGN for local clients, USD for international clients).</li>
                        <li><strong>Late Payments:</strong> Late payments are subject to interest charges as specified in the agreement. XulTech reserves the right to suspend Services until outstanding payments are resolved.</li>
                        <li><strong>Refunds:</strong> We generally do not offer refunds for Services already rendered. Refunds will only be considered in cases where Services have not yet been delivered or in cases of service termination before significant work has been completed.</li>
                    </ul>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">6. Client Responsibilities</h3>
                    <p>Clients are responsible for providing all necessary information, assets, and feedback in a timely manner to facilitate the delivery of Services. The Client must:</p>
                    <ul class="list-style-bullet">
                        <li>Provide all content, assets, and materials needed for the development of the project.</li>
                        <li>Review and approve deliverables in a timely fashion to ensure the project progresses smoothly.</li>
                        <li>Ensure that they hold the necessary rights and permissions for any content provided to XulTech for inclusion in the project.</li>
                        <li>Comply with applicable laws and regulations when using the Services.</li>
                    </ul>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">7. Intellectual Property</h3>
                    <p>Upon full payment, ownership of the completed deliverables (such as websites, applications, or software) will be transferred to the Client. However, XulTech reserves the right to retain intellectual property rights over any proprietary code, methodologies, or frameworks used during the development process.</p>
                    <ul class="list-style-bullet">
                        <li><strong>Client Assets:</strong> The Client retains full ownership of any assets they provide to XulTech for use in the project, such as logos, images, and text content.</li>
                        <li><strong>Non-Exclusive License:</strong> XulTech grants the Client a non-exclusive license to use any third-party software, plugins, or integrations implemented during the project.</li>
                        <li><strong>Portfolio Use:</strong> XulTech reserves the right to display completed projects in our portfolio or case studies, unless otherwise agreed upon by the Client.</li>
                    </ul>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">8. Termination of Services</h3>
                    <p>Either party may terminate this Agreement under the following circumstances:</p>
                    <ul class="list-style-bullet">
                        <li>If the other party breaches any material provision of these Terms and fails to resolve the issue within 30 days after written notice.</li>
                        <li>By mutual agreement in writing between XulTech and the Client.</li>
                        <li>If the Client fails to make required payments as per the payment schedule.</li>
                    </ul>
                    <p>
                        Upon termination, the Client will be responsible for paying XulTech for all Services performed up to the date of termination. XulTech will deliver any completed work or partially completed work based on the stage of termination.
                    </p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">9. Limitation of Liability</h3>
                    <p>
                        To the maximum extent permitted by law, XulTech shall not be liable for any indirect, incidental, or consequential damages arising from the use of our Services. Our liability is limited to the amount paid by the Client for the Services that gave rise to the claim.
                    </p>
                    <p>
                        XulTech is not responsible for any delays, disruptions, or errors caused by third-party services, such as hosting providers, payment gateways, or third-party plugins.
                    </p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">10. Changes to Terms</h3>
                    <p>
                        XulTech reserves the right to modify or update these Terms at any time. We will notify you of any material changes by posting the revised Terms on our website or through other communication channels. Your continued use of our Services following the update indicates your acceptance of the new Terms.
                    </p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">11. Governing Law</h3>
                    <p>
                        These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which XulTech operates. Any disputes arising from these Terms or your use of our Services shall be resolved in the courts located in Nigeria, unless otherwise specified in a separate agreement.
                    </p>
                </div>
                <div class="service-details_main-single ">
                    <h3 class="service-details_main-title">12. Contact Information</h3>
                    <p>
                        If you have any questions or concerns about these Terms or our Services, please contact us at:
                    </p>
                    <p><strong>Email:</strong> <a href="mailto:{{$web->contact_email}}">{{$web->contact_email}}</a></p>
                </div>


            </div>
        </div>
    </div>


@endsection
