<?php include("header.php"); ?>
<!-- Improved Alternate Content Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Welcome to Katyayani Travels</h2>
                <p class="lead">Experience seamless travel services with Katyayani Travels. We are your gateway to unforgettable journeys and hassle-free travel experiences.</p>
                <p>Our services include:</p>
                <ul>
                    <li><i class="fas fa-plane"></i> Flight Ticket Booking</li>
                    <li><i class="fas fa-passport"></i> Passport Services</li>
                    <li><i class="fas fa-globe"></i> Visa Assistance</li>
                    <li><i class="fas fa-hotel"></i> Hotel Reservations</li>
                    <!-- Add more services as needed -->
                </ul>
                <a href="explore_services.php" class="btn btn-primary">Explore Our Services</a>
            </div>
            <div class="col-md-6 text-center">
                <div class="circle-image">
                    <img src="KATYAYANI TRAVELS.png" alt="Katyayani Travels Logo" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .circle-image {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .circle-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 10px;
    }

    ul li i {
        margin-right: 10px;
        color: #007bff;
    }
</style>

<?php
include("footer.php");
?>