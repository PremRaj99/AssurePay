<?php include "header.php"; ?>
<link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
<link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
<link href="assets/css/main.min.css" rel="stylesheet" />

<div class="page-heading">
    <h1 class="page-title">All Transactions</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>

<style>
    * {
        font-family: 'Aptos', 'Poppins', sans-serif;
    }

    tr {
        text-align: center;
    }

    th {
        text-align: center;
    }

    .badge-success {
        background-color: transparent;
        color: #28a745;
        border: none;
        font-weight: 500;
    }

    .badge-warning {
        background-color: transparent;
        color: #ffc107;
        border: none;
        font-weight: 500;
    }

    tbody tr {
        background-color: white !important;
        border: none !important;
        border-radius: 10px !important;
        overflow: hidden;

        &:hover {
            background-color: rgb(233, 246, 254) !important;
        }
    }

    thead {
        border: none !important;
        padding: 10px 10px !important;
    }

    tbody td {
        border: none !important;
    }

    table {
        /* border-collapse: collapse; */
        width: 100%;
        border-spacing: 0 2px;
        border-radius: 10px;
        overflow: hidden;
    }

    thead tr th {
        background-color: white;
        color: #007BFF;
        font-size: 16px !important;
        font-weight: 400;
        padding-block: 10px !important;
    }

    thead {
        padding-block: 10px !important;
    }
</style>

<div class="page-content fade-in-up">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="example-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Mobile</th>
                    <th>Date Time</th>
                    <th>Merchant</th>
                    <th>Gateway Txn</th>
                    <th>Bank RRN</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Define the query based on the user's role
                if ($userdata['role'] == 'User') {
                    $token = $userdata['user_token'];
                    $query = "SELECT `id`, `create_date`, `gateway_txn`, `customer_mobile`, `method`, `utr`, `order_id`, `amount`, `status` 
                                  FROM `orders` WHERE user_token = '$token' ORDER BY `create_date` DESC";
                } else {
                    $query = "SELECT * FROM `orders` ORDER BY id DESC";
                }

                // Execute query and fetch results
                $query_run = mysqli_query($conn, $query);

                if ($query_run) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        // Determine badge class
                        $badge_class = $row['status'] == 'SUCCESS' ? 'badge badge-success' : 'badge badge-warning';
                        $status_text = $row['status'] == 'SUCCESS' ? 'Success' : 'Pending';

                        // Output table row
                        echo "<tr>
                                    <td>" . htmlspecialchars($row['id']) . "</td>
                                    <td>" . htmlspecialchars($row['order_id']) . "</td>
                                    <td>" . htmlspecialchars($row['customer_mobile']) . "</td>
                                    <td>" . htmlspecialchars(date("d-m-Y H:i:s", strtotime($row['create_date']))) . "</td>
                                    <td>" . htmlspecialchars($row['method']) . "</td>
                                    <td>" . htmlspecialchars($row['gateway_txn']) . "</td>
                                    <td>" . htmlspecialchars($row['utr']) . "</td>
                                    <td>₹" . htmlspecialchars($row['amount']) . "</td>
                                    <td><span class='$badge_class'>$status_text</span></td>
                                  </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>Error in query: " . mysqli_error($conn) . "</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts -->
<script src="./assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/vendors/DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example-table').DataTable({
            pageLength: 10
        });
    });
</script>