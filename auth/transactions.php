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

    h1 {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        padding-inline: 20px;
    }

    /* .page-heading {
        } */

    .row {
        padding-inline: 10px;
    }

    input {
        font-size: 16px !important;
        width: 400px !important;
        font-weight: 500;
        color: #333;
        /* position: relative; */
        right: 20px;
    }

    table {
        border-collapse: collapse;
        background-color: white !important;
        border-radius: 10px;
        overflow: hidden;
        border-spacing: 0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        & thead {
            height: 60px;

            & tr {
                & th {
                    font-size: 14px !important;
                    font-weight: 600 !important;
                    vertical-align: middle !important;
                    text-align: center !important;
                }
            }
        }

        & tbody {
            & tr {
                height: 50px;
                cursor: pointer;
                border: none;
                border-bottom: 1px solid #f0f0f0;

                & td {
                    vertical-align: middle !important;
                    border: none;
                    text-align: center !important;
                }

                &:hover {
                    background-color: rgba(236, 249, 255, 0.44) !important;
                }
            }
        }
    }

    .badge-success {
        background-color: rgba(194, 255, 189, 0.79);
        color: rgb(2, 80, 20);
        border: none;
        font-weight: 500;
        border-radius: 4px;
    }

    .badge-warning {
        background-color: rgb(255, 246, 219);
        color: rgb(194, 104, 7);
        border: none;
        font-weight: 500;
        border-radius: 4px;
    }
</style>

<div class="page-content fade-in-up">
    <div class="table-responsive">
        <table class="table" id="example-table">
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
                                    <td>" . htmlspecialchars(date("d/m/y  H:i:s", strtotime($row['create_date']))) . "</td>
                                    <td>" . htmlspecialchars($row['method']) . "</td>
                                    <td>" . htmlspecialchars($row['gateway_txn']) . "</td>
                                    <td>" . htmlspecialchars($row['utr']) . "</td>
                                    <td>₹" . htmlspecialchars($row['amount']) . "</td>
                                    <td><span class='$badge_class font-semibold'>$status_text</span></td>
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