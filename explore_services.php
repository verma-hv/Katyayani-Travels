<?php
include("header.php");
?>

<style>
  .card-overview {
    max-width: 100%;
    /* Ensure cards are responsive to their container */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    /* Add a subtle shadow to the cards */
    padding: 20px;
    /* Add some padding to the cards */
    border-radius: 10px;
    /* Add rounded corners to the cards */
  }

  .card-overview img {
    max-width: 100%;
    /* Make sure images are responsive within the cards */
  }

  .card-overview small {
    color: var(--sl-color-neutral-500);
  }

  .card-overview [slot='footer'] {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
</style>

<div class="container-fluid">
  <div class="row text-center">
    <div class="col-md-4 col-sm-6 my-2">
      <sl-card class="card-overview btn-group">
        <img src="TICKETS.png" class="img-fluid p-5" alt="BUY TICKETS" />
        <div>
          <sl-button variant="primary" pill href="tickets.php">BUY TICKETS</sl-button>
        </div>
      </sl-card>
    </div>


    <div class="col-md-4 col-sm-6 my-2">
      <sl-card class="card-overview btn-group">
        <img src="PASSPORT.png" class="img-fluid p-5" alt="APPLY FOR PASSPORT" />
        <div>
          <sl-button variant="success" pill href="">Comming Soon</sl-button>
        </div>
      </sl-card>
    </div>

    <div class="col-md-4 col-sm-6 my-2">
      <sl-card class="card-overview btn-group">
        <img src="VISA.png" class="img-fluid p-5" alt="APPLY FOR VISA" />
        <div>
          <sl-button variant="warning" pill href="visa.php" >APPLY FOR VISA</sl-button>
        </div>
      </sl-card>
    </div>

    <div class="col-md-4 col-sm-6 my-2">
      <sl-card class="card-overview btn-group">
        <img src="HOTEL1.png" class="img-fluid p-5" alt="BUY TICKETS" />
        <div>
          <sl-button variant="primary" pill>Comming Soon</sl-button>
        </div>
      </sl-card>
    </div>

    <div class="col-md-4 col-sm-6 my-2">
      <sl-card class="card-overview btn-group">
        <img src="CURRENCY1.png" class="img-fluid p-5" alt="BUY TICKETS" />
        <div>
          <sl-button variant="primary" pill>Comming Soon</sl-button>
        </div>
      </sl-card>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>