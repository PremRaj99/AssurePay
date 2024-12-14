<?php include "header.php"; ?>
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
 
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Transactions</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <!-- <li class="breadcrumb-item">DataTables</li> -->
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <!-- <div class="ibox-title">Data Table</div> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th>#</th>
												<th>Mobile</th>
												<th>Date Time</th>
												<th>Merchant</th>
												<th>Gateway Txn</th>
												<th>Bank RRN</th>
												<th>Order ID</th>
												<th>Amount</th>
												<th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
if($userdata['role'] == 'User'){
$token = $userdata['user_token'];


$query = "SELECT `id`, `create_date`, `gateway_txn`, `customer_mobile`, `method`, `utr`, `byteTransactionId`, `order_id`, `amount`, `status` FROM `orders` WHERE user_token = '$token' ORDER BY `create_date` DESC";
$query_run = mysqli_query($conn, $query);


if ($query_run) {
    while ($row = mysqli_fetch_assoc($query_run)) {
        
      
        
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['customer_mobile'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['create_date'], ENT_QUOTES, 'UTF-8') . "</td>";

        ?>
        <td><?php echo htmlspecialchars($row['method']); ?></td>
        <?php
        echo "<td>" . htmlspecialchars($row['gateway_txn'], ENT_QUOTES, 'UTF-8') . "</td>";
        ?>
        <?php
        echo "<td>" . htmlspecialchars($row['utr'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['order_id'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>₹" . htmlspecialchars($row['amount'], ENT_QUOTES, 'UTF-8') . "</td>";


        //$sts = $row['status'];
        if($row['status']=="SUCCESS"){
            $sts = 'Success';
            $cls = "badge badge-success";
        }else{
            $sts = 'Pending';
            $cls = "badge badge-warning";
        }
        echo "<td><button class='$cls'>" . $sts . "</button></td>";
        echo "</tr>";
    }
} else {
    echo "Error in query: ";
    //echo "Error in query: " . mysqli_error($conn); 
}
}

//admin ke lie echo 

else{
    $token = $userdata['user_token'];


$query = "SELECT * FROM `orders` ORDER BY id DESC";
$query_run = mysqli_query($conn, $query);

if ($query_run) {
    while ($row = mysqli_fetch_assoc($query_run)) {
        
      
        
        echo "<tr>";
       echo "<td>" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "</td>";
       echo "<td>" . htmlspecialchars($row['customer_mobile'], ENT_QUOTES, 'UTF-8') . "</td>";
       echo "<td>" . htmlspecialchars($row['create_date'], ENT_QUOTES, 'UTF-8') . "</td>";

        ?>
        <td><?php echo htmlspecialchars($row['method']); ?></td>
        <?php
        echo "<td>" . htmlspecialchars($row['gateway_txn'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['utr'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['order_id'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>₹" . htmlspecialchars($row['amount'], ENT_QUOTES, 'UTF-8') . "</td>";

        //$sts = $row['status'];
        if($row['status']=='SUCCESS'){
            $sts = 'Success';
            $cls = "badge badge-success";
        }else{
            $sts = 'Pending';
            $cls = "badge badge-warning";
        }
        echo "<td><button class='$cls'>" . $sts . "</button></td>";
        echo "</tr>";
    }
} else {
    echo "Error in query: ";
    //echo "Error in query: " . mysqli_error($conn); 
}
}
?>
											
										</tbody>
                        </table>
                    </div>
                </div>
                <div>
                    
            </div>
        </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>