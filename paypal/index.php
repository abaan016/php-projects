<?php
require ("config.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integrate Paypal demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <h1 class="my-5 text-center fw-bold display-4">Paypal Checkout Integration</h1>
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="card border-0 shadow p-3">
                    <h2><?php echo $itemName ; ?></h2>
                    <p><b>Price:</b> <?php echo "$".$itemPrice ?></p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paymentModal">
                    Buy Now
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="paymentModalLabel">Payment Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="panel mt-5">
                        <div class="panel-heading">
                            <h3 class="panel-title">Charge <?php echo "$".$itemPrice ; ?> with Paypal</h3>
                            <p><b>Item Name:</b> <?php echo $itemName ?></p>
                            <p><b>Price:</b> <?php echo "$".$itemPrice.' '.$currency ?></p>
                        </div>
                        <div class="panel-body">
                            <!-- Notification -->
                            <div id="paymentResponse" class="hidden"></div>
                            <!-- Paypal Button -->
                            <div id="paypal-button-container"></div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Paypal JS SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID; ?>&currency=<?php echo $currency; ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

<script>
paypal.Buttons({
    
}).render('#paypal-button-container');



  
</script>

</body>
</html>