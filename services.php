<?php include("header.php"); ?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #008080;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
    }

    .service {
        background-color: #f8f8f8;
        padding: 20px;
        margin: 20px 0;
        border-radius: 5px;
    }

    .service h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .service p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .service:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    /* Customer Testimonials Section */
.customer-testimonials {
    margin-top: 40px;
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 5px;
    text-align: center;
}

.customer-testimonials h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333; /* Dark text color */
}

.testimonial {
    padding: 20px;
    margin: 20px auto;
    max-width: 600px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left;
    position: relative;
}

.testimonial p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
    color: #555; /* Medium text color */
}

.customer-name {
    font-weight: bold;
    color: #007bff; /* Primary color */
}

/* Testimonial Hover Effect */
.testimonial:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
    transition: all 0.3s ease;
}

</style>

<header>
    <h1>Our Services</h1>
</header>
<div class="container">
    <!-- Service 1 -->
    <div class="service">
        <h2>Flight Ticket Booking</h2>
        <p>Book your flight tickets with ease through Katyayani Travels. We offer a wide range of flight options for
            your convenience. Our dedicated team ensures you get the best deals and hassle-free booking experience.</p>
    </div>

    <!-- Service 2 -->
    <div class="service">
        <h2>Passport Services</h2>
        <p>Need a passport for your international travel? Let us assist you in the passport application process. Our experts
            will guide you through the documentation, application, and appointment scheduling to make the process efficient and
            stress-free.</p>
    </div>

    <!-- Service 3 -->
    <div class="service">
        <h2>Visa Assistance</h2>
        <p>Planning a trip abroad? Our visa assistance services will help you navigate the visa application process
            smoothly. We provide comprehensive support, from document preparation to embassy submissions, ensuring you meet all
            requirements for a successful visa approval.</p>
    </div>

    <!-- Add more services -->
    <!-- Service 4 -->
    <div class="service">
        <h2>Hotel Reservations</h2>
        <p>Make your stay comfortable with our hotel reservation services. We offer a vast selection of hotels worldwide and
            help you find the perfect accommodation tailored to your preferences and budget.</p>
    </div>

    <!-- Service 5 -->
    <div class="service">
        <h2>Travel Insurance</h2>
        <p>Stay protected during your travels with our travel insurance solutions. We offer various insurance packages that
            cover medical emergencies, trip cancellations, lost baggage, and more, giving you peace of mind throughout your journey.</p>
    </div>

    <!-- Customer Testimonials -->
    <section class="customer-testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial">
            <p>"Katyayani Travels made my vacation planning a breeze. Their visa assistance was outstanding, and I got my visa
                without any issues. Highly recommended!"</p>
            <p class="customer-name">Navneet Baid</p>
        </div>
        <div class="testimonial">
            <p>"I've been using Katyayani Travels for years for flight bookings. They always find the best deals, and their
                customer service is top-notch."</p>
            <p class="customer-name">Nitin Saini</p>
        </div>
        <!-- Add more testimonials as needed -->
    </section>

</div>
<?php
include("footer.php");
?>