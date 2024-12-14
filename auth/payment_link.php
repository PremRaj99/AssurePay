<?php include "header.php"; ?>

 <style>
        
        .clipboard {
  position: relative;
}
/* You just need to get this field */
.copy-input {
  max-width: 370px;
  width: 100%;
  cursor: pointer;
  background-color: #eaeaeb;
  border:none;
  color:#6c6c6c;
  font-size: 14px;
  border-radius: 5px;
  padding: 15px 45px 15px 15px;
  font-family: 'Montserrat', sans-serif;
}
.copy-input:focus {
  outline:none;
}

.copy-btn {
  width:40px;
  background-color: #eaeaeb;
  font-size: 18px;
  padding: 6px 9px;
  border-radius: 5px;
  border:none;
  color:#6c6c6c;
  margin-left:-50px;
  transition: all .4s;
}
.copy-btn:hover {
  transform: scale(1.3);
  color:#1a1a1a;
  cursor:pointer;
}

.copy-btn:focus {
  outline:none;
}

.copied {
  font-family: 'Montserrat', sans-serif;
  width: 100px;
  opacity:0;
  position:fixed;
	bottom: 20px;
	left: 0;
	right: 0;
	margin: auto;
  color:#000;
  padding: 15px 15px;
  background-color: #fff;
  border-radius: 5px;
  transition: .4s opacity;
}
/* You just need to get this field */

    </style>

    
<?php

//   ini_set("display_errors",true);
//   error_reporting(E_ALL);
 
  
  if (isset($_POST['create'])) {
      
   $name =  $_POST['name'];
   $mobile =  $_POST['mobile'];
  $remark = $_POST['remark'];
   $amount =  $_POST['amount'];
  
if($remark == ''){
    $remark = 'Your Payment Link is Created';
}
      
      
    
       $orderid = mt_rand(10000000000,9999999999999);
       
       $data = array(
    'customer_mobile' => $mobile,
    'user_token' => $userdata["user_token"],
    'amount' => $amount,
    'order_id' => $orderid,
    'redirect_url' => 'https://'.$_SERVER["SERVER_NAME"].'/success',
    'remark1' => $remark,
);
  
        $curl = curl_init();

curl_setopt_array($curl, array(
   CURLOPT_URL => 'https://'.$_SERVER["SERVER_NAME"].'/api/create-order',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'POST',
   CURLOPT_POSTFIELDS => http_build_query($data),
   CURLOPT_HTTPHEADER => array(
      'User-Agent: Apidog/1.0.0 (https://apidog.com)'
   ),
));

$response = curl_exec($curl);


curl_close($curl);

$jsondatares = json_decode($response,true);
 
      $paymentlink = '';
       if($jsondatares["status"] == true){
      $paymentlink = $jsondatares["result"]["payment_url"];
       }else{
            echo '
    <script>
        Swal.fire({
            title: "Opps! Failed To Create Payment Link!",
            text: "'.$jsondatares["message"].'",
            confirmButtonText: "Ok",
            icon: "error"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "payment_link"; // Replace with your desired redirect URL
            }
        });
    </script>
';
exit;
       }
  }

  ?>
  
  
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Create Payment Link</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <!-- <li class="breadcrumb-item">Icons</li> -->
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-md-4"> -->
                                <div class="card m-t-20 m-b-20">
                                    <div class="card-body">
                                    <div class="main-panel">

                               <main class="app-content">
      
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
						<!-- <h4 class="page-title">UPI Settings</h4> -->
						<div class="row row-card-no-pd">
							<div class="col-md-12">

<?php if($userdata["role"] == 'User'){  ?>

                            <div class="main-panel">
					<div class="content">
					<div class="container-fluid">

						<h4 class="page-title">Create Payment Link</h4>	
										
						<div class="row row-card-no-pd">							
							<div class="col-md-12">

 <form class="row mb-4" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    
      <div class="col-md-6 mb-2">
        <label>Customer Name</label>
    <input type="text" name="name" placeholder="Your Name" class="form-control" required="" />
    </div>
      <div class="col-md-6 mb-2">
        <label>Mobile Number</label>
    <input type="number" name="mobile" placeholder="Your Mobile" class="form-control" required="" />
    </div>
    <div class="col-md-6 mb-2"><label>Amount (INR)</label> <input type="number" name="amount" placeholder="₹0.00" class="form-control" required="" /></div>
    <div class="col-md-6 mb-2"><label>Remark</label> <input type="text" name="remark" placeholder="Remarks Eg.Gift,Deposit etc." class="form-control" /></div>
    
    <div class="col-md-12 mb-2 mt-2"><button type="submit" name="create" class="btn btn-primary btn-sm">Submit</button>
    </div>

</form>


              </div>
            </div>
            
         <h4 class="page-title">List Of Payment Link</h4>
						<div class="row row-card-no-pd">
							<div class="col-md-12">
								
							<div class="table-responsive">
							<table class="table table-sm table-hover table-bordered table-head-bg-primary" id="dataTable" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Customer Mobile</th>
												<th>Amount</th>
												<th>Order id</th>
												<th>Status</th>
												<th>Remarks</th>
												<th>Date</th>
											
											</tr>
										</thead>
										<tbody>
<?php
$getst = $_GET["getfundst"];
$query = "SELECT * FROM `orders` WHERE user_id='{$userdata["id"]}' ORDER BY `id` DESC LIMIT 25";
$query_run = mysqli_query($conn, $query);

if ($query_run) {
    while ($row = mysqli_fetch_assoc($query_run)) {
       
      if($row['status'] == 'SUCCESS'){
          $st = '<span class="badge badge-success">Success</span>';
      }else if($row['status'] == 'FAILURE'){
          $st = '<span class="badge badge-danger">Failed</span>';
          
      }else{
          $st = '<span class="badge badge-warning">Pending</span>';
      }
        
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row['customer_mobile'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['amount'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['order_id'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . $st . "</td>";
echo "<td>" . htmlspecialchars($row['remark1'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['create_date'], ENT_QUOTES, 'UTF-8') . "</td>";

     ?>
     
     
     
     
     <?php
        echo "</tr>";
    }
} else {
    echo "Error in query: " . mysqli_error($conn); 
}
?>
											
										</tbody>
									</table>
							</div>
							</div>
						</div>
            
          </div>
        </div>
        
       <?php
       }else{ ?>
       
       <div class="main-panel">
				<div class="content">
					<div class="container-fluid">

         <h4 class="page-title">List Of Payment Link</h4>
						<div class="row row-card-no-pd">
							<div class="col-md-12">
								
							<div class="table-responsive">
								<table class="table table-sm table-hover table-bordered table-head-bg-primary" id="dataTable" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>User</th>
												<th>Amount</th>
												<th>UTR Number</th>
												<th>Status</th>
												<th>Remarks</th>
												<th>Date</th>
												
												
											</tr>
										</thead>
										<tbody>
<?php
$query = "SELECT * FROM `settlement` WHERE status='$getst'";
$query_run = mysqli_query($conn, $query);

if ($query_run) {
    while ($row = mysqli_fetch_assoc($query_run)) {
        $fetchuser = $conn->query("SELECT * FROM `users` WHERE id = '{$row["userid"]}'")->fetch_assoc();
      if($row['status'] == 1){
          $st = '<span class="badge badge-success">Success</span>';
      }else if($row['status'] == 0){
          $st = '<span class="badge badge-danger">Rejected</span>';
          
      }else{
          
          $st = '<span class="badge badge-warning">Pending</span>';
      }
        
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($fetchuser['name'], ENT_QUOTES, 'UTF-8') . " Mobile -".htmlspecialchars($fetchuser['mobile'], ENT_QUOTES, 'UTF-8'). "</td>";
echo "<td>" . htmlspecialchars($row['amount'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['utr_no'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . $st . "</td>";
echo "<td>" . htmlspecialchars($row['remark'], ENT_QUOTES, 'UTF-8') . "</td>";
echo "<td>" . htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8') . "</td>";

     ?>
     
     
     <?php
        echo "</tr>";
    }
} else {
    echo "Error in query: " . mysqli_error($conn); 
}
?>
											
										</tbody>
									</table>
							</div>
							</div>
						</div>
            
          </div>
        </div>
      </div>
      
       <?php } ?>
        
        <?php if($paymentlink != ''){ ?>
        <!--confirm Modal -->
<div class="modal fade" id="copypaymentlinkmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
				<h4 class="modal-title text-primary w-100">Payment Link Created Successfully</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="clipboard">
<input onclick="copy()" class="copy-input" value="<?php echo $paymentlink ?>" id="copyClipboard" readonly>
<button class="copy-btn" id="copyButton" onclick="copy()"><i class="fa fa-copy"></i></button>
</div>
<div id="copied-success" class="copied">
  <span>Link Copied !</span>
</div>
       <p>This Payment Link is valid for only 10 min.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="copy()" id="changeusrupimodebtn">Copy</button>
      </div>
    </div>
  </div>
</div>

<style>
    .modal {
    display: block !important;
    top: 27%;
    left: 15%;
    padding: 35px;
}
.fade {
    opacity: 1;
}
</style>

        <?php } ?>
        
      </div>
    </div>
  </div>
</div></div></div></div></main>
   

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap/js/dist/modal.js"></script>
<script src="assets/js/app.min.js" type="text/javascript"></script>
<script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script> 
$(document).ready(function(){
  $("#frubtn").click(function(){
    $("#changefrform").slideToggle();
  });
});

function copy() {
  let copyText = document.getElementById("copyClipboard");
  let copySuccess = document.getElementById("copied-success");
  copyText.select();
  copyText.setSelectionRange(0, 99999); 
  navigator.clipboard.writeText(copyText.value);
  
 copySuccess.style.opacity = "1";
 setTimeout(function(){ copySuccess.style.opacity = "0" }, 500);
}

</script>

</body>