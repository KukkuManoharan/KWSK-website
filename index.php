<?php
if (isset($_POST['sendmail'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $your_email = $_POST['your_email'];
    $purpose = $_POST['purpose'];
    $your_message = $_POST['your_message'];

    // Replace 'your@email.com' with the actual email address where you want to receive the form submissions
    $to = 'kwickstackssolutions@gmail.com';
    $subject = 'New message from website';
    
    // Build the email message
    $message = "First Name: $first_name\n";
    $message .= "Last Name: $last_name\n";
    $message .= "Mobile Number: $mobile_number\n";
    $message .= "Email: $your_email\n";
    $message .= "Purpose: $purpose\n";
    $message .= "Message: $your_message\n";

    // Additional headers
    $headers = "From: $your_email";

    // Send the email
    if(mail($to, $subject, $message, $headers)){
        $result = "Message sent successfully";
    }
    else
    {
        $error = "wrong mail id";
    }

    // You can redirect the user to a thank you page or display a success message here
  //  echo "Thank you for your submission!";
} else {
    // Handle invalid request method
  //  echo "Invalid request method";
  $error = "Invalid request method";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwickstacks Solutions</title>
    <link rel="icon" type="image/x-icon" href="Image/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Menu navigation -->
    <header>
        <nav id="navbar-menu" class="navbar navbar-expand-lg border-bottom border-4 border-textdark navstyle">
            <div class="container-fluid">
                <div class="col-9 col-sm-9 col-md-9 col-lg-4 my-auto">
                    <a class="navbar-brand text-dark text-left me-auto float-none" href="#">
                        <img id="Companylogo" src="Image/LOGO-1.png" alt="Logo" width="180" height="50">
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-1 my-auto">
                    <div class="navbar-toggler-position">
                        <button class="navbar-toggler collapsed pull-right" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 my-auto">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item px-3">
                                <a class="nav-link nav-link-a" href="#about" onclick="closeNavbar()">About</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link nav-link-a" href="#product" onclick="closeNavbar()">Products</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link nav-link-a" href="#services" onclick="closeNavbar()">Services</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link nav-link-a" href="#clients" onclick="closeNavbar()">Clients</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link nav-link-a" href="#contact" onclick="closeNavbar()">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="col-4 col-md-3 my-auto text-center">
                <h3> <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </h3>
            </div> -->
            </div>
        </nav>
    </header>
    <section>
        <div id="carousel-slide-image" class="carousel carousel-dark slide carousel-slide-image-div"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-slide-image" data-bs-slide-to="0" class="active my-5"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-slide-image" data-bs-slide-to="1" class="my-5"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-slide-image" data-bs-slide-to="2" class="my-5"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img id="bg1" src="Image/bg1.jpg" class="imageslide d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img id="bg2" src="Image/bg2.jpg" class="imageslide d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="bg3" src="Image/bg3.jpg" class="imageslide d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-slide-image"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-slide-image"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- It is used for highlight the current position of menu link -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-menu" data-bs-offset="0" tabindex="0">
        <!-- finish -->

        <!-- about -->
        <section id="about">

            <div class="about-section-mainhead text-center">
                <span style="--i:1">A</span>
                <span style="--i:2">B</span>
                <span style="--i:3">O</span>
                <span style="--i:4">U</span>
                <span style="--i:5">T</span>
            </div>
            <h6 class="about-section-subhead text-center pb-3">Our Company</h6>
            <div class="row g-0">
                <div class="col-12 col-md-6 about-section-card">
                    <div class="py-5 overflow-auto">
                        <h1 class="text-center about-section-card-title" id="TotalYears"></h1>
                        <p class="text-center about-section-card-text1">
                            Years' experience in IT
                        </p>
                        <p class="text-center pt-5 about-section-card-text2">
                            "We offer a comprehensive range of IT services dedicated to ensuring your success."
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 about-section-contenttext py-1 overflow-auto">
                    <h3 class="text-center text-white py-3 about-section-headertext-div2">Our Company</h3>
                    <p class="text-white text-left px-4 about-section-Paratext-div2">Kwickstacks Solutions is a leading
                        company specializing in professional web
                        development
                        and mobile application solutions. We excel in crafting custom web development,
                        mobile apps, enterprise portals, e-commerce applications, web design, HTML,
                        iPhone/iOS/Android apps, and top-tier customer-related services for clients worldwide.
                    </p>
                    <h3 class="text-center text-white py-1 about-section-headertext-div2">Our Vision</h3>
                    <p class="text-white text-left px-4 about-section-Paratext-div2">Our vision is to become the world's
                        premier mobile and web development
                        company,
                        driven by relentless innovation as the cornerstone of our journey toward
                        unparalleled success. We aspire to attain global recognition by consistently
                        delivering top-tier services and solutions of superior quality.
                    </p>
                    <h3 class="text-center text-white py-1 about-section-headertext-div2">Our Mission</h3>
                    <p class="text-white text-left px-4 about-section-Paratext-div2">As a professional web development,
                        mobile application, and digital marketing
                        company,
                        our mission is to deliver customer-centric, result-oriented, cost-competitive,
                        innovative, and functional IT solutions to our valued global clients.
                    </p>
                </div>
            </div>
        </section>
        <!-- product -->
        <section id="product">
            <div class="product-section-mainhead text-center">
                <span style="--i:1">P</span>
                <span style="--i:2">R</span>
                <span style="--i:3">O</span>
                <span style="--i:4">D</span>
                <span style="--i:5">U</span>
                <span style="--i:6">C</span>
                <span style="--i:7">T</span>
                <span style="--i:8">S</span>
            </div>
            <h6 class="product-section-subhead text-center pb-3">Our Products</h6>

            <div class="testimonial-slider">
                <div id="carouselProductId" class="carousel carousel-dark" data-bs-ride="carousel">
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="carousel-inner carousel-inner-product">
                                    <div
                                        class="carousel-item carousel-item-product active d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Score.png"
                                                    alt="Score">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Smart Core Banking</h4>
                                                <p class="card-text pt-3">Introducing Kerala's premier web-based core
                                                    banking software, offering effortless and efficient banking with
                                                    real-time transaction management and valuable data for future
                                                    strategies. The Score software accelerates transactions for
                                                    professionals, revolutionizing banking, especially in rural Kerala.
                                                    It modernizes age-old investments and assets, aligning with the
                                                    latest banking trends, all while providing a highly user-friendly,
                                                    fast, secure, and enjoyable banking experience.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Empower.png"
                                                    alt="Empower">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Empower</h4>
                                                <p class="card-text pt-3">EMPOWER is a comprehensive web-based HRM and
                                                    payroll solution that streamlines HR processes from recruitment to
                                                    retirement. It saves businesses time and lets them concentrate on
                                                    core tasks. Empower handles salary management, recruitment, employee
                                                    data, biometric integration, shift scheduling, and all HR-related
                                                    data management. It also generates reports for HR departments and
                                                    business owners to analyze critical workforce metrics, including
                                                    staffing, compensation costs, and turnover.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Bizcore.png"
                                                    alt="Bizcore">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Bizcore</h4>
                                                <p class="card-text pt-3">BIZcore Next Generation BC concept for
                                                    Co-Operative Banks, with appointed business correspondents bringing
                                                    banking services closer to customers. The Bizcore app is a
                                                    comprehensive solution, offering services like account opening,
                                                    online deposits, agent and client reports, and balance inquiries,
                                                    ensuring real-time and secure banking for a user-friendly
                                                    experience.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Mscore.png"
                                                    alt="M-Score">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">M-Score</h4>
                                                <p class="card-text pt-3">M-Score is the mobile version of our Smart
                                                    core banking system 'Score,' compatible with Android and iOS
                                                    devices. It empowers customers to efficiently track their bank
                                                    transactions via a mobile app, facilitating speed and reliability.
                                                    Leading banks use M-Score to offer personalized banking apps, stay
                                                    digitally updated, and ensure the latest security measures. It
                                                    provides account info, fund transfers (IMPS/NEFT/RTGS), passbook,
                                                    statements, virtual cards, online payments, and user dashboards.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Score connect.png"
                                                    alt="Score Connect">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Score Connect</h4>
                                                <p class="card-text pt-3">Score Connect is a mobile application designed
                                                    to streamline loan tracking and overdue monitoring for banks and
                                                    societies. This automated solution simplifies the loan recovery
                                                    process by sending notifications for due dates, facilitating easy
                                                    communication, and allowing updates on the reasons for delays and
                                                    repayment dates. It also enables the assignment of specific loan
                                                    accounts to monitoring personnel, based on various criteria such as
                                                    geographical area, account number combinations, and account types.
                                                    This results in a hassle-free and efficient loan recovery process.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Score Nidhi.png"
                                                    alt="Score Nidhi">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Score Nidhi</h4>
                                                <p class="card-text pt-3">SCORE NIDHI is a specialized web-based
                                                    software for NIDHI Companies. It automates banking and financial
                                                    operations, enhancing profitability through advanced technology.
                                                    This real-time core banking solution can be customized to meet
                                                    specific client needs, boosting financial credibility and profits.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/Easyshop.png"
                                                    alt="Easyshop">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Easyshop</h4>
                                                <p class="card-text pt-3">Easy Shop is a comprehensive web-based ERP
                                                    platform designed for businesses like hypermarkets, offering
                                                    360-degree inventory management and retail store management. It
                                                    prioritizes inventory forecasting over billing, featuring
                                                    state-of-the-art security measures. Highly customizable and
                                                    compatible with both regular computers and point of sale machines,
                                                    Easy Shop provides robust store management tools for precise
                                                    managerial decision-making. This popular stock management software
                                                    in Kerala enhances stock management, purchase tracking, and billing,
                                                    reducing human errors in inventory management to transform
                                                    businesses into efficient, process-oriented systems.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/medlife.png"
                                                    alt="Medlife">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">Medlife</h4>
                                                <p class="card-text pt-3">MEDLIFE is a pharmacy management software that
                                                    simplifies your pharmacy operations, transforming your
                                                    pharmaceutical business. This ERP solution exclusively addresses
                                                    daily pharmacy challenges, managing inventory, sales, reports, drug
                                                    expiry alerts, scheduled medicine tracking, and stock reorder
                                                    levels. It supports touchscreen input and offers customized bill
                                                    printing, aiding supply management. Additionally, it generates
                                                    reports for GST filings.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="carousel-item carousel-item-product d-md-flex align-items-stretch">
                                        <div class="card card-product">
                                            <div class="img-wrapper text-center mx-auto pt-3"><img
                                                    class="d-block img-wrapper-product" src="Image/icoms.jpg"
                                                    alt="I-coms">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center pt-4">i-coms</h4>
                                                <p class="card-text pt-3">i-coms is a information of co-operative
                                                    overdue monitors system.
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 text-center">
                            <button class="carousel-control-prev carousel-control-prev-product" type="button"
                                data-bs-target="#carouselProductId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next carousel-control-next-product" type="button"
                                data-bs-target="#carouselProductId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="services">
            <div class="services-section-mainhead text-center">
                <span style="--i:1">S</span>
                <span style="--i:2">E</span>
                <span style="--i:3">R</span>
                <span style="--i:3">V</span>
                <span style="--i:4">I</span>
                <span style="--i:5">C</span>
                <span style="--i:6">E</span>
                <span style="--i:7">S</span>
            </div>
            <h6 class="services-section-subhead text-center pb-3">Our Services</h6>


            <div id="cards_services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="Image/24x7.png" alt="" />
                                    </div>
                                    <div class="text-container">
                                        <h6>24/7 Customer Service</h6>
                                        <ul>
                                            <li>Our service engineers are highly skilled and experienced professionals
                                                who specialize in our products. They are equipped to handle front-end
                                                and back-end issues, ensuring a comprehensive solution to your needs.
                                            </li>
                                            <li>With 24/7 service, you can access our expert engineers at any time, day
                                                or night. Whether it's a technical challenge, software configuration, or
                                                integration support, our team is just a call or click away.</li>
                                            <li>We understand that successful product integration is crucial for your
                                                business. Our engineers work closely with you to ensure seamless
                                                integration, minimizing disruptions and maximizing efficiency.</li>
                                            <li>Our engineers are trained to diagnose and resolve issues swiftly. We
                                                understand that time is of the essence, and our goal is to minimize
                                                downtime and keep your operations running smoothly.</li>
                                            <li>Our back-end support includes proactive monitoring of your systems to
                                                identify potential issues before they become critical. This proactive
                                                approach helps prevent problems and ensures stability.</li>
                                            <li>Your business is unique, and so are your product requirements. Our
                                                engineers provide tailored solutions to meet your specific needs,
                                                helping you get the most out of our products.</li>
                                            <li>Your feedback is invaluable to us. We actively seek your input to
                                                enhance both our products and the services provided by our engineers,
                                                ensuring a continually improved experience.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="Image/static_dynamic.png" alt="" />
                                    </div>
                                    <div class="text-container">
                                        <h6>Static Website design & services</h6>
                                        <ul>
                                            <li>Our static website design services focus on creating clean and simple
                                                web pages that load quickly and efficiently.</li>
                                            <li>We specialize in static website development, providing cost-effective
                                                solutions for businesses looking to establish an online presence.</li>
                                            <li>With our static websites, you can showcase your products or services
                                                effectively, providing essential information to your audience.</li>
                                            <li>Our team ensures that your static website has a professional and
                                                polished appearance that aligns with your brand's identity.</li>
                                            <li>We offer static website maintenance packages to keep your site
                                                up-to-date and secure, ensuring a seamless online experience for your
                                                visitors.</li>
                                        </ul>
                                        <h6>Dynamic Website design & services</h6>
                                        <ul>
                                            <li>Our dynamic website design services involve building websites with
                                                interactive features, such as user registration, comment sections, and
                                                real-time updates.</li>
                                            <li>We excel in dynamic website development, creating engaging platforms for
                                                e-commerce, social networking, and more.</li>
                                            <li>With our dynamic websites, you can provide personalized experiences to
                                                your users through features like user accounts and dynamic content
                                                generation.</li>
                                            <li>Our team utilizes advanced scripting languages and databases to power
                                                your dynamic website, ensuring robust functionality.</li>
                                            <li>We offer ongoing dynamic website maintenance and support, ensuring your
                                                site remains responsive and bug-free as your business evolves.</li>
                                            <li>Trust us to deliver dynamic website solutions that enhance user
                                                engagement and drive conversions, tailored to your specific requirements
                                                and objectives. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="Image/database-migration.jpg" alt="" />
                                    </div>

                                    <div class="text-container">
                                        <h6>Data Migration</h6>
                                        <ul>
                                            <li>Our database migration experts engineer custom tools to facilitate the
                                                seamless transfer of data from one database platform to another,
                                                ensuring a
                                                precise and efficient transition.</li>
                                            <li>Leveraging our proprietary database migration software, we automate
                                                complex
                                                data transformations, meticulously mapping and preserving data integrity
                                                throughout the migration process.</li>
                                            <li>With our custom database migration tools, we adeptly manage schema
                                                conversions and handle large datasets, guaranteeing data consistency and
                                                accuracy.</li>
                                            <li>Our team's proficiency in crafting custom solutions enables us to
                                                address
                                                specific challenges, optimize performance, and minimize downtime during
                                                the
                                                database migration.</li>
                                            <li>Trust us to deliver secure and efficient database migrations using our
                                                custom
                                                tools, ensuring your data remains accessible and reliable in its new
                                                environment.</li>
                                        </ul>
                                        <h6>Manual</h6>
                                        <ul>
                                            <li>Our manual database migration services involve a hands-on approach, with
                                                our
                                                skilled database professionals overseeing the entire migration process
                                                to
                                                ensure data integrity and precision.</li>
                                            <li>Each data element is meticulously reviewed, transformed, and validated
                                                to
                                                meet your unique requirements, including schema adjustments, data
                                                cleansing,
                                                and data quality checks.</li>
                                            <li>Manual database migrations allow us to thoroughly clean and refine your
                                                data,
                                                ensuring that only high-quality information is seamlessly transferred to
                                                the
                                                target database system.</li>
                                            <li>We provide comprehensive data validation and reconciliation during
                                                manual
                                                database migrations, meticulously verifying the correctness and
                                                completeness
                                                of the migrated data.</li>
                                            <li>Choose our manual database migration expertise when you need a
                                                personalized
                                                and thorough approach, especially for complex schema conversions or
                                                critical
                                                data integrity preservation during the migration process.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="Image/computer-sales-and-services.jpg" alt="" />
                                    </div>

                                    <div class="text-container">
                                        <h6>Hardware Sales</h6>
                                        <ul>
                                            <li>We offer customized computers built to your exact specifications</li>
                                            <li>We employ an efficient evaluation process to build computers that meet
                                                your performance expectations</li>
                                            <li>We are dealing with all kinds of assembling computers</li>
                                            <li>We offer branded desktops and all-in-one computers from Dell, HP,
                                                Lenovo, Acer, and more with the latest configurations.</li>
                                            <li>We offer branded printers and all-in-one printers from Epson, HP, canon
                                                and more with the latest configurations.</li>
                                            <li>We offer Quick Heal antivirus for both server and client versions.</li>
                                            <li>We offer Softland android & button type machine for daily collection,
                                                pay & park etc.</li>
                                        </ul>
                                        <h6>Hardware Services</h6>
                                        <ul>
                                            <li>Our experienced technicians specialize in computer hardware
                                                installation, ensuring that your new components are seamlessly
                                                integrated into your system for optimal performance.</li>
                                            <li>We provide on-site hardware installation services, saving you the time
                                                and effort of setting up your new equipment and ensuring it's done
                                                correctly.</li>
                                            <li>Whether it's upgrading your RAM, installing a new graphics card, or
                                                adding storage, our hardware installation team is equipped to handle all
                                                your needs.</li>
                                            <li>We offer hardware diagnostics and troubleshooting services to identify
                                                and resolve any issues that may be affecting your computer's
                                                performance.</li>
                                            <li>Trust our experts to perform server hardware installations, ensuring
                                                that your network infrastructure is robust and reliable to support your
                                                business operations.Our hardware installation services extend to
                                                businesses and individuals, making it easy for everyone to benefit from
                                                efficient and hassle-free upgrades.</li>
                                            <li>Our hardware installation services extend to businesses and individuals,
                                                making it easy for everyone to benefit from efficient and hassle-free
                                                upgrades.</li>
                                            <li>We provide post-installation testing and quality checks to guarantee
                                                that your new hardware is functioning flawlessly and meeting your
                                                expectations.</li>
                                            <li>If you're uncertain about which hardware upgrades are right for your
                                                computer, our technicians are available for consultation to help you
                                                make informed decisions.</li>
                                            <li>From setting up peripherals like printers and scanners to configuring
                                                complex networking equipment, we offer a wide range of hardware-related
                                                services to meet your specific needs.</li>
                                            <li>Whether you're looking for a single hardware installation or
                                                comprehensive IT support, our team is dedicated to delivering reliable
                                                and professional services to keep your systems running smoothly.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section id="clients">

            <div class="clients-section-mainhead text-center">
                <span style="--i:1">C</span>
                <span style="--i:2">L</span>
                <span style="--i:3">I</span>
                <span style="--i:4">E</span>
                <span style="--i:5">N</span>
                <span style="--i:6">T</span>
                <span style="--i:7">S</span>
            </div>
            <h6 class="clients-section-subhead text-center pb-3">Our Clients</h6>

            <div id="cards_clients" class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselIndicatorsclients" class="carousel slide" data-wrap="false"
                                data-pause="false" data-ride="carousel">
                                <div class="carousel-indicators carousel-indicators-clients">
                                    <button type="button" data-bs-target="#carouselIndicatorsclients"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselIndicatorsclients"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <!-- <button type="button" data-bs-target="#carouselIndicatorsclients"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/1-TFSWCS_TVM.PNG"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/2-KAZHAKUTTOM_SCB_TVM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/3-VAZHAKULAM_SCB_EKM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/4-AYIROOR_SCB_TVM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/5-THE_AYAVANA_AGRICULTURAL_IMPROVEMENT_CO-OPERATIVE_SOCIETY_EKM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/6-ELLACKAL_SCB_IDK.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/7-THIRUVILWAMALA_PANCHAYATH_MULTIPURPOSE_CO-OPERATIVE_SOCIETY_THR.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/8-KALLOORKAD_AGRICULTURAL_IMPROVEMENT_CO-OPERATIVE_SOCIETY_EKM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/9-ANTHIYOOR_SCB_TVM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/10-MUTTATHARA_SCB_TVM.png.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/11-PULAKODE_SCB_THR.png.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/12-CHELAKKARA_GRAMAPANCHAYATH_MULTIPURPOSE_CO-OPERATIVE_SOCIETY_THR.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/13-KADATHY_RURAL_CO-OPERATIVE_SOCIETY_EKM.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/14-THODUPUZHA_HOUSE_CONSTRUCTION_CO-OPERATIVE_SOCIETY_IDK.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/15-PAZHAYANNUR_BLOCK_VANITHA_CO-OPERATIVE_SOCIETY_THR.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-5">
                                                <div class="card-flyer">
                                                    <div class="text-box">
                                                        <div class="image-box">
                                                            <img src="Image/Client/Banking/16-VYAPARI_VYAVASAYI_CO-OPERATIVE_SOCIETY_IDK.png"
                                                                class="img-fluid" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">

            <div class="contact-section-mainhead text-center">
                <span style="--i:1">C</span>
                <span style="--i:2">O</span>
                <span style="--i:3">N</span>
                <span style="--i:4">T</span>
                <span style="--i:5">A</span>
                <span style="--i:6">C</span>
                <span style="--i:7">T</span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="--i:8">U</span>
                <span style="--i:9">S</span>
            </div>
            <h6 class="contact-section-subhead text-center pb-3">Our Details</h6>
            <div class="contact-page-content">
                <div class="container-fluid d-flex align-items-center justify-content-center py-5">
                    <div class="contact-page-content-sub">
                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-lg-6 contact-div-section1">
                                <div class="row my-4">
                                    <div class="col-2">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="2em" height="2em"
                                            fill="currentColor" class="bi bi-geo-alt mx-0 mx-sm-3" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </div>
                                    <div class="col-10">
                                        <h4>Head Office - Trivandrum</h4>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <p>TC 49/1270, First floor, Estate road,<br> Industrial Estate P.O. - 695019,
                                            <br>
                                            Pappanamcode, Trivandrum.
                                        </p>
                                    </div>
                                    <div class="col-2 pt-5">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="2em" height="2em"
                                            fill="currentColor" class="bi bi-telephone mx-0 mx-sm-3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div>
                                    <div class="col-10 pt-5">
                                        <h4>Mobile</h4>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <p>9288000760</p>
                                    </div>

                                    <div class="col-2 pt-5">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="2em" height="2em"
                                            fill="currentColor" class="bi bi-geo-alt mx-0 mx-sm-3" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </div>
                                    <div class="col-10 pt-5">
                                        <h4>Regional Office - Thrissur</h4>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <p>TC 51/389, First floor, S.N. Park,<br> Ayyanthole P.O. - 680004,
                                            <br> Thrissur.
                                        </p>
                                    </div>
                                    <div class="col-2 pt-5">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="2em" height="2em"
                                            fill="currentColor" class="bi bi-telephone mx-0 mx-sm-3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div>
                                    <div class="col-10 pt-5">
                                        <h4>Mobile</h4>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <p>9288000763</p>
                                    </div>
                                    <div class="col-2 pt-5">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="2em" height="2em"
                                            fill="currentColor" class="bi bi-envelope mx-0 mx-sm-3" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="col-10 pt-5">
                                        <h4>E-mail</h4>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <p>kwickstackssolutions@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 contact-div-section2">
                                <div class="row my-5 mx-5">
                                    <form method="post">
                                        <div class="col-12">
                                            <h4 class="text-center mb-5">GET IN TOUCH</h4>
                                        </div>
                                        <div class="col-12">
                                            <label for="first_name" class="my-2">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="last_name" class="my-2">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="mobile_number" class="my-3">Mobile Number</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="mobile_number" id="mobile_number"
                                                class="form-control w-100" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="your_email" class="my-3">E-mail</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="email" name="your_email" id="your_email"
                                                class="form-control w-100">
                                        </div>
                                        <div class="col-12">
                                            <label for="purpose" class="my-3">Purpose</label>
                                        </div>
                                        <div class="col12">
                                            <select id="purpose" class="form-select">
                                                <option selected>Select</option>
                                                <option value="1">Score</option>
                                                <option value="2">Empower</option>
                                                <option value="3">Bizcore</option>
                                                <option value="4">Mscore</option>
                                                <option value="5">Score Connect</option>
                                                <option value="6">Score Nidhi</option>
                                                <option value="7">Easy Shop</option>
                                                <option value="8">Medlife</option>
                                                <option value="9">I-coms</option>
                                                <option value="10">Static/Dynamic Website</option>
                                                <option value="11">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="your_message" class="my-3">Message</label>
                                        </div>
                                        <div class="col-12">
                                            <textarea id="your_message" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <input type="submit" name="sendmail" class="btsend mt-3" value="Send">
                                        </div>
                                        <strong>
                                            <?php if(!empty($result)){
                                                echo $result;
                                            }?>
                                            <?php if(!empty($error)){
                                                echo $error;
                                            }?>
                                        </strong>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section>
        <div class="container-fluid">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Kwickstacks Solutions, Inc. All rights
                        reserved</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="https://www.w3.org/2000/svg"
                                width="1.5em" height="1.5em" fill="currentColor" class="bi bi-facebook text-primary"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="https://www.w3.org/2000/svg"
                                width="1.5em" height="1.5em" fill="currentColor" class="bi bi-instagram"
                                style="color: crimson;" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="https://www.w3.org/2000/svg"
                                width="1.5em" height="1.5em" fill="currentColor" class="bi bi-linkedin"
                                style="color: #0077B5;" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg></a></li>
                </ul>
            </footer>
        </div>

    </section>
    <!-- Javascript file section -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.3.7.1.js"></script>
    <!-- Get total years for company -->
    <script type="text/javascript">
        var startyear = '2020'
        var endyear = new Date().getFullYear();
        var totalyear = endyear - startyear;
        document.getElementById('TotalYears').innerHTML = totalyear;
        console.log(TotalYears);
    </script>

    <!-- It is used for after medium size pixel toggler menu link will show in top position  -->

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {

            window.addEventListener('scroll', function () {

                if (window.scrollY > 50) {
                    document.getElementById('navbar-menu').classList.add('fixed-top');
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar-menu').classList.remove('fixed-top');
                    document.body.style.paddingTop = '0';
                }
            });
        }); 
    </script>

    <!-- menu size reduce & hide logo after mouse scroll  -->
    <script type="text/javascript">
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("navbar-menu").style.padding = "10px 0px";
                document.getElementById("Companylogo").style.display = 'block';
            } else {
                document.getElementById("navbar-menu").style.padding = "0px 0px";
                document.getElementById("Companylogo").style.display = 'block';
            }
        }
    </script>
    <!-- click menu link and after set position of section page  -->
    <script>
        $(document).ready(function () {
            $('a[href^="#"]').on('click', function (event) {
                var screenWidth = window.innerWidth || document.documentElement.clientWidth;
                var target = $($(this).attr('href'));
                if (target.length) {
                    event.preventDefault();
                    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

                        $('html, body').stop().animate({
                            scrollTop: target.offset().top - 55
                        }, 500);
                    } else {
                        if (screenWidth <= 991) {
                            $('html, body').stop().animate({
                                scrollTop: target.offset().top - 310
                            }, 500);
                        }
                        else {
                            $('html, body').stop().animate({
                                scrollTop: target.offset().top - 50
                            }, 500);
                        }

                    }
                }
            });
        });
    </script>
    <!-- Dropdown menu button close!-->
    <script>
        $(document).ready(function () {
            var screenHeight = window.innerHeight || document.documentElement.clientHeight;
            screenHeight=screenHeight-50;
            $("#bg1").height(screenHeight);
            $("#bg2").height(screenHeight);
            $("#bg3").height(screenHeight);
        });
    </script>
    <!-- Automatic adjust image size-->
    <script>
        function closeNavbar() {
            var navbarCollapse = document.getElementById('navbarSupportedContent');
            if (navbarCollapse.classList.contains('show')) {
                $('.navbar-toggler').click();
            }
        }
    </script>
    <!-- Product section carousel slide-->
    <script>
        $(document).ready(function () {
            var multipleCardCarousel = document.querySelector(
                "#carouselProductId"
            );
            const mediapixelQueries = [
                '(max-width:576px)',
                '(max-width:767px) and (min-width:577px)',
                // '(min-width:768px) and (max-width:991px)',
                // '(min-width:993px) and (max-width:1013px)',
                // '(min-width:1014px) and (max-width:1222px)',
                '(min-width:768px)'
            ];
            const matchingpixelQuery = mediapixelQueries.find(mediapixelQueries =>
                window.matchMedia(mediapixelQueries).matches
            );
            if (matchingpixelQuery == "(max-width:576px)") {
                // console.log(1);
                $(multipleCardCarousel).addClass("slide");
            } else if (matchingpixelQuery == "(max-width:767px) and (min-width:577px)") {
                // console.log(2);
                $(multipleCardCarousel).addClass("slide");
            }
            // else if (matchingpixelQuery == "(min-width:769px) and (max-width:991px)") {
            //     // console.log(4);
            //     $(multipleCardCarousel).addClass("slide");
            // } 
            // else if (matchingpixelQuery == "(min-width:993px) and (max-width:1013px)") {
            //     // console.log(5);
            //     $(multipleCardCarousel).addClass("slide");
            // }
            // else if (matchingpixelQuery == "(min-width:1014px) and (max-width:1222px)") {
            //     // console.log(6);
            //     $(multipleCardCarousel).addClass("slide");
            // } 
            else if (matchingpixelQuery == "(min-width:768px)") {
                // console.log(7);
                var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                    interval: false,
                    wrap: false
                });
                var carouselWidth = $(".carousel-inner-product")[0].scrollWidth;
                var cardWidth = $(".carousel-item-product").width();
                var scrollPosition = 0;
                $("#carouselProductId .carousel-control-next-product").on("click", function () {
                    if (scrollPosition < carouselWidth - cardWidth * 3) {
                        var test = carouselWidth - cardWidth * 3;
                        scrollPosition += cardWidth;
                        $("#carouselProductId .carousel-inner-product").animate(
                            { scrollLeft: scrollPosition },
                            600
                        );
                    }
                    else {
                        scrollPosition = 0;
                        scrollPosition += 0;
                        $("#carouselProductId .carousel-inner-product").animate(
                            { scrollLeft: scrollPosition },
                            600
                        );
                    }
                });
                $("#carouselProductId .carousel-control-prev-product").on("click", function () {
                    if (scrollPosition > 1) {
                        scrollPosition -= cardWidth;
                        $("#carouselProductId .carousel-inner-product").animate(
                            { scrollLeft: scrollPosition },
                            600
                        );
                    }
                });
            } else {
                $(multipleCardCarousel).addClass("slide");
            }
        });
    </script>
</body>

</html>