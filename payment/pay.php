<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f3f4f7;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 95%;
            max-width: 400px;
            margin: 15px auto;
            background-color: #ffffff;
            border-radius: 14px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            padding-bottom: 20px;
        }

        .header {
            background-color: #2C3E88;
            padding: 15px;
            color: #fff;
            display: flex;
            align-items: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .header img {
            width: 50px;
            border-radius: 20%;
            margin-right: 10px;
        }

        .header .company-info {
            display: flex;
            flex-direction: column;
        }

        .company-info h1 {
            font-size: 16px;
            font-weight: 700;
        }

        .trusted-business {
            display: flex;
            
            align-items: center;
            margin-top: 5px;
        }

        .trusted-business img {
            width: 20px;
            margin-left: 5px;
        }

        .price-summary {
            background-color: #f2f3f7;
            padding: 15px;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
        }

        /* QR Code Section */
        .qr-section {
            background-color: #f7f9fc;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
           flex-direction:column;
            margin-bottom: 15px;
        }

        .qr-section img {
            width: 125px;
            height: 125px;
            border-radius: 10px;
        }

        .qr-section .center {
            text-align: center;
        }

        .qr-section .center span {
            display: block;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .qr-section .center .upi-icons {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .qr-section .center .upi-icons img {
            width: 14px;
            height: 14px;
            border-radius: 50%; /* Make icons round */
        }

        .payment-options {
            padding: 15px;
        }

        .payment-options h2 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Updated Recommended Section */
        .recommended {
            background-color: #f9f9f9;
            padding: 0;
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .payment-method {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            cursor: pointer;
        }

        .payment-method img {
            width: 24px;
            margin-right: 10px;
        }

        .payment-method:last-child {
            border-bottom: none;
        }

        .payment-method span {
            margin-left: 10px;
        }

        /* UPI Grid for 2 options per row */
        .upi-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .upi-options {
            display: flex;
            align-items: center;
            width: 48%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            cursor: pointer;
            background-color: #fff;
        }

        .upi-options img {
            width: 24px;
            margin-right: 10px;
        }

        /* Timer Style */
        .timer {
            text-align: center;
            font-size: 16px;
            padding: 10px;
            color: red;
        }

        /* Footer layout: price and button side by side */
        .footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #f3f4f7;
            border-top: 1px solid #e0e0e0;
        }

        .footer .price {
            font-size: 18px;
            font-weight: bold;
        }

        .footer button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        
        .pay-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .method-box {
    width: 100%;
    text-align: center;
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

    .method-header {
    background-color: #2C3E88;
    color: white;
    padding: 10px 15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin-bottom: 20px;
}

input.form-control {
    width: 90%;
    border: 1px solid #080832;
    outline: none;
    padding: 10px 15px;
    border-radius: 5px;
    box-shadow: 1px 13px 20px -14px rgba(000, 000, 000, 0.6);
}

    </style>
</head>
<?php

// Security headers
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'https://cdn.jsdelivr.net' 'https://code.jquery.com'; img-src 'self' https://api.qrserver.com; style-src 'self'; object-src 'none'");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: geolocation='self'; microphone=()");



function RandomNumber($length)
{
    $str = "";
    for ($i = 0; $i < $length; $i++) {
        $str .= mt_rand(0, 9);
    }
    return $str;
}



// Define the base directory constant
define('ROOT_DIR', realpath(dirname(__FILE__)) . '/../');

// Securely include files using the ROOT_DIR constant
include ROOT_DIR . 'pages/dbFunctions.php';
include ROOT_DIR . 'auth/config.php';
include ROOT_DIR . 'pages/dbInfo.php';

$link_token = sanitizeInput($_GET["token"]);

// Fetch order_id based on the token from the payment_links table
$sql_fetch_order_id = "SELECT order_id, created_at FROM payment_links WHERE link_token = '$link_token'";
$result = getXbyY($sql_fetch_order_id);



if (count($result) === 0) {
    // Token not found or expired
   
    echo "Token not found or expired";
    exit;
}

$order_id = $result[0]['order_id'];
$created_at = strtotime($result[0]['created_at']);
$current_time = time();

// Check if the token has expired (more than 5 minutes)
if (($current_time - $created_at) > (5 * 60)) {
  
    echo "Token has expired";
    exit;
}

$sql_p = "SELECT * FROM orders WHERE order_id='$order_id'";
$res_p = getXbyY($sql_p);



$amount = $res_p[0]['amount'];
$user_token = $res_p[0]['user_token'];
$redirect_url = $res_p[0]['redirect_url'];
$cnumber = $res_p[0]['customer_mobile'];
$cxrkalwaremark = $res_p[0]['HDFC_TXNID'];



$apptxnidd = "2560".RandomNumber(7).time();
$description = RandomNumber(18);


// Update the HDFC_TXNID and description in the orders table
$update_sql = "UPDATE orders SET HDFC_TXNID='$apptxnidd', description='$description' WHERE order_id='$order_id'";
if ($conn->query($update_sql) === TRUE) {
    //echo "Record updated successfully";
}



$sql_p = "SELECT * FROM users WHERE user_token='$user_token'";
$res_p = getXbyY($sql_p);



$USERNAME = $res_p[0]['company'];

$sql_p = "SELECT * FROM hdfc WHERE user_token='$user_token'";
$res_p = getXbyY($sql_p);



$hdfc_seassion = $res_p[0]['seassion'];  // Column name is 'seassion' despite the spelling mistake
$tidList = $res_p[0]['tidlist'];


// Define the API endpoint
$url = 'https://imbx.in/secret/hdfc_qr';

// Create the payload array
$payloadArray = array(
    "session_id" => $hdfc_seassion,
    "tid_list" => $tidList,
    "amount" => $amount,
    "description" => $description,
    "customer_number" => $cnumber,
    "apptxn_id" => $apptxnidd
);

// Initialize cURL
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payloadArray));

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Print the response from the API
}

// Close cURL session
curl_close($ch);

// echo json_encode($payloadArray);
// exit;

// Decode the JSON response
$jsonResponse = json_decode($response, true);

if (isset($jsonResponse['qr_code'])){

    $base64Image=$jsonResponse['qr_code'];
}



?>

    
    <body>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <img src="data:image/png;base64,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" alt="Company Logo">
            <div class="company-info">
                <h1><?php echo $USERNAME?></h1>
                <div class="trusted-business">
                   
                    <img src="https://d6xcmfyh68wv8.cloudfront.net/assets/trusted-badge/1st-fold/top-illustration-mob.svg" alt="Trusted Badge">
                     <p>Verified</p>
                </div>
            </div>
        </div>

        <!-- Price Summary Section -->
       

        <!-- Payment Card Section -->
<div class="payment-card">
    <div class="qr-section">
        <?php if ($base64Image): ?>
            <img src="<?php echo $base64Image; ?>" alt="QR Code" class="qr-code">
        <?php else: ?>
            <p>Error generating QR code.</p>
        <?php endif; ?>
    </div>

    <div class="method-box">
        <div class="method-header">UPI Request</div>
        <form action="https://<?= $_SERVER["SERVER_NAME"] ?>/payment/instant-pay/hdfcupipay/<?php echo $link_token; ?>" method="post">
            <input type="hidden" name="cxr_XsRFtoken" class="form-control" value="<?php echo $nonce; ?>">
            <!-- Other input fields -->
            <input type="text" name="upiId" placeholder="Enter Your UPI Id " class="form-control">
            <input type="hidden" name="TransactionId" value="<?php echo $cxrkalwaremark; ?>">
            <button class="pay-button" type="submit" name="subupireq" class="btn-special">Pay ₹ <?php echo number_format($amount, 2); ?></button>
        </form>
    </div>

<!-- CSS to style the card and QR code properly -->
<style>
    .payment-card {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        margin: auto;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .qr-section img.qr-code {
        width: 100%; /* Ensure full width */
        max-width: 250px; /* Set maximum width */
        height: auto; /* Keep aspect ratio */
        display: block;
        margin: 0 auto 20px; /* Center the QR code */
        border: 1px solid #ccc; /* Optional: Add border */
        padding: 10px;
        background-color: #fff; /* Add background for better visibility */
    }
    .method-box {
        margin-bottom: 20px;
    }
    .center {
        text-align: center;
    }
    .upi-icons img {
        width: 50px;
        margin: 0 10px;
    }
</style>




        <!-- Timer Section -->
        <!-- Timeout Section -->
    <div class="timeout-section" style="text-align: center; margin-top: 30px;">
        <p>Valid until:<span id="timeout"></p>
    </div>
</div>
      
    </div>

    <!-- Countdown Timer Script -->

    <script>
        var paymentProcessed = false;
        var interval;

        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            interval = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(interval);
                }
            }, 1000);
        }

        function check() {
            if (paymentProcessed || !interval) {
                clearInterval(interval); 
                return;
            }

            $.ajax({
                type: 'post',
                url: 'https://<?php echo $_SERVER["SERVER_NAME"] ?>/order/payment-status',
                data: { order_id: '<?php echo $order_id ?>' },
                dataType: 'text',
                success: function (data) {
                    if (data === 'success') {
                        paymentProcessed = true;
                        Swal.fire({
                            title: 'Payment Received Successfully ✅',
                            text: 'Please wait...',
                            icon: 'success'
                        });
                            window.location.href = "<?php echo $redirect_url ?>";
                       
                    } else if (data === 'FAILURE' || data === 'FAILED') {
                        paymentProcessed = true;
                        Swal.fire({
                            title: 'Payment Failed',
                            icon: 'error'
                        }).then(() => {
                            window.location.href = "<?php echo $redirect_url ?>";
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.log('AJAX Error:', status, error);
                }
            });
        }

        window.onload = function () {
            var fiveMinutes = 60 * 5,
                display = document.querySelector('#timeout');
            startTimer(fiveMinutes, display);
            check();
            interval = setInterval(check, 5000);
        };
    </script>
    <script disable-devtool-auto="" src="https://pay.imb.org.in/Qrcode/disable-devtool.js" data-url="https://www.google.com/"></script> 
</body>
</html>