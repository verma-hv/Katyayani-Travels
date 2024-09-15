<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include("header.php");
?>


<!-- Carousel Section -->
<div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="air4.jpg" class="d-block w-100" alt="Airlines Image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Explore Airlines</h5>
        <p>Discover the world with our airline services.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="air1.jpg" class="d-block w-100" alt="Airplane Image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Travel by Airplane</h5>
        <p>Experience the joy of flying with us.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="air3.jpg" class="d-block w-100" alt="Air Travel Image 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Memorable Journeys</h5>
        <p>Create lasting memories with Katyayani Travels.</p>
      </div>
    </div>
    <!-- Add more carousel items with captions as needed -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Improved Alternate Content Section -->
<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="display-4 mb-3">Welcome to Katyayani Travels</h2>
        <p class="lead">Experience seamless travel services with Katyayani Travels. We offer a wide range of travel
          solutions, including ticket booking, passport services, visa assistance, and more.</p>
        <a href="explore_services.php" class="btn btn-primary btn-lg">Explore Our Services</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="KATYAYANI TRAVELS.png" alt="Katyayani Travels Logo" class="img-fluid rounded-circle"
          style="max-width: 250px;">
      </div>
    </div>
  </div>
</section>

<!-- Contact Information and Map Section -->
<section class="bg-white py-5">
  <div class="container">
    <div class="row">
      <!-- Contact Information -->
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
            <h4 class="card-title">Contact Us</h4>
            <ul class="list-unstyled">
              <li><i class="fas fa-phone mr-2"></i> 919212651951</li>
              <li><i class="fas fa-envelope mr-2"></i> katyayanitravels2@gmail.com</li>
              <li><i class="fas fa-map-marker-alt mr-2"></i> C-119, STREET NO.7, SHASTRI PARK, DELHI-110053</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Google Maps -->
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">

          <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.3700601416804!2d77.2643176!3d28.678574800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfda9f41e895f%3A0xc2dc2969e3395981!2sSandeep%20Engineering%20Works!5e0!3m2!1sen!2sin!4v1695192052862!5m2!1sen!2sin"
             frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"
            class="embed-responsive-item"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>