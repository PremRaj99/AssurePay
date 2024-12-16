<?php include "header.php"; ?>

<?php
$query = $conn->query("SELECT * FROM `subscription_plan`");
?>

<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Subscription & Plans</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <!-- <li class="breadcrumb-item">Icons</li> -->
    </ol>
</div>
<style>
    h1 {
        font-size: 24px;
        font-weight: 600;
        color: #333;
    }
    .card {
        border: 1px solid rgb(228, 228, 228);
        overflow: hidden;
        border-radius: 15px !important;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        &:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            scale: 1.02;
        }
    }

    .card .card-header {
        background-color: #f9f9f9;
        border-bottom: 1px solid #e7e7e7;
        padding: 10px 15px;
    }

    .card .card-header h4 {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: #333;
    }

    .card .card-header h2 {
        margin: 6px;
        font-size: 38px;
        font-weight: 600;
        color: #0f3f73;
    }

    .card .card-header p {
        margin: 0;
        font-size: 14px;
        font-weight: 400;
        color: #666;
    }

    .card .card-body {
        padding: 20px;
    }

    .card .card-body table {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .card .card-body table tr {
        border-bottom: 1px solid #f9f9f9;
    }

    .card .card-body table tr:last-child {
        border-bottom: none;
    }

    .card .card-body table tr td {
        padding: 10px 0;
        font-size: 14px;
        font-weight: 400;
        color: #666;
    }

    .card .card-body table tr td i {
        font-size: 18px;
        color: #666;
    }

    .card .card-body table tr td p {
        margin: 0;
        font-size: 14px;
        font-weight: 400;
        color: #666;
    }

    .card .card-footer {
        border-top: 1px solid #e7e7e7;
        padding: 10px 15px;
    }

    .card .card-footer button {
        padding: 10px 15px;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        background-color: #fff;
        border: 2px solid #0f3f73;
        color: #0f3f73;
        border-radius: 50px;
        cursor: pointer;
    }

    .card .card-footer button:hover {
        background-color: #0f3f73;
        color: #fff;
    }

    .card .card-footer button:focus {
        outline: none;
    }

    .card .card-footer button:active {
        background-color: #007bff;
        color: #fff;
    }

    .card .card-footer button:disabled {
        background-color: #007bff;
        cursor: not-allowed;
    }

    .card .card-footer button:disabled:hover {
        background-color: #007bff;
    }

    .card .card-footer button:disabled:focus {
        outline: none;
    }

    .card .card-footer button:disabled:active {
        background-color: #007bff;
    }

    .card .card-footer button.btn-outline-primary {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
        border-radius: 50px !important;
    }

    .card .card-footer button.btn-outline-primary:hover {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:focus {
        outline: none;
    }

    .card .card-footer button.btn-outline-primary:active {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:disabled {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
        cursor: not-allowed;
    }

    .card .card-footer button.btn-outline-primary:disabled:hover {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:disabled:focus {
        outline: none;
    }

    .card .card-footer button.btn-outline-primary:disabled:active {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:active:focus {
        outline: none;
    }

    .card .card-footer button.btn-outline-primary:active:active {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:active:hover {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:active:disabled {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
        cursor: not-allowed;
    }

    .card .card-footer button.btn-outline-primary:active:disabled:hover {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:active:disabled:focus {
        outline: none;
    }

    .card .card-footer button.btn-outline-primary:active:disabled:active {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:active:active:focus {
        outline: none;
    }

    .card .card-footer button.btn-outline-primary:active:active:active {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }

    .card .card-footer button.btn-outline-primary:active:active:hover {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }
</style>
<div class="page-content fade-in-up">
    <!-- <div class="ibox"> -->
    <!-- <div class="ibox-body"> -->
    <!-- <div class="row"> -->
    <!-- <div class="col-md-4"> -->
    <!-- <div class="card m-t-20 m-b-20"> -->
    <!-- <div class="card-body"> -->
    <div class="main-panel">

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <!-- <h4 class="page-title">Subscription & Plans</h4> -->
                    <!-- <div class="alert alert-danger"> -->
                    <!-- <span data-notify="icon" class="la la-bell"></span> -->
                    <!-- <button type="button" class="close" data-dismiss="alert">x</button> -->
                    <!-- <b>Note:</b> Your old plan will be automatically deactivated after purchasing the new plan and is non-refundable. -->
                </div>
                <div class="row">
                    <?php while ($row = $query->fetch_assoc()) { ?>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h4 class="card-title"><?= $row["plan_name"] ?></h4>
                                    <h2 class="text-center">₹<?= number_format($row["amount"]) ?></h2>
                                    <p class="card-category"><?= $row["expiry"] ?> Month</p>
                                </div>
                                <div class="card-body">

                                    <table class="mx-auto">
                                        <tbody>
                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt=""></td>
                                                <td>
                                                    <p>0 Transaction Fee</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt=""></td>
                                                <td>
                                                    <p>Realtime Transaction</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt=""></td>
                                                <td>
                                                    <p>No Amount Limit</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt="">
                                                </td>
                                                <td>
                                                    <p>Dynamic QR Code</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt="">
                                                </td>
                                                <td>
                                                    <p>Direct UPI Intent</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt="">
                                                </td>
                                                <td>
                                                    <p>Accept All UPI Apps</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="https://cdn-icons-png.flaticon.com/512/665/665939.png"
                                                        width="16px" alt=""></td>
                                                <td>
                                                    <p>24*7 WhatsApp Support</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <form method="POST" action="lib/pay">
                                        <input type="hidden" name="csrf_token"
                                            value="<?php echo $_SESSION['csrf_token']; ?>">
                                        <input type="hidden" name="amount" value="<?= $row["amount"] ?>">
                                        <input type="hidden" name="planid" value="<?= $row["id"] ?>">
                                        <!--<button name="paytm" class="btn btn-outline-success btn-block">Buy Now</button>-->
                                        <!--button name="upiapi" class="btn btn-outline-primary btn-block">Buy Now</button-->
                                        <button name="upigate" class="btn btn-block">Buy
                                            Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>




            </div>
        </div>
        </body>
        <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
        <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/js/ready.min.js"></script>
        <script src="assets/js/rechpay.js?1697835127"></script>
        <script src="assets/js/app.min.js" type="text/javascript"></script>
        <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
        <script type="text/javascript">
            function utr_search(utr_number) {
                if (getCurentFileName() == "transactions") {
                    if (utr_number.length == 12) {
                        search_txn('2023-10-01', '2023-10-21', '', utr_number);
                    } else {
                        Swal.fire('Enter Valid UTR Number!');
                    }
                } else {
                    location.href = 'transactions';
                }
            }
        </script>

        </html>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#dataTable").DataTable();
            });
        </script>
        <script src="assets/js/bharatpe.js?1697835127"></script>