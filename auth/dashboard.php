<?php include "header.php";

// SQL query to count rows
$sql = "SELECT COUNT(*) AS count FROM reports WHERE mobile = '$mobile'";

// Execute the query
$result = $conn->query($sql);

if ($result === false) {
    $rowCount = 0;
} else {
    // Fetch the result
    $row = $result->fetch_assoc();

    // Get the count from the result
    $rowCount = $row['count'];

}



?>


<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
    <style>
        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            padding-inline: 20px;
        }

        .page-content {
            padding-inline: 20px;
        }

        .card {
            border-radius: 10px !important;
            background-color: white !important;
            color: black !important;
            /* box-shadow: 0 0 5px rgba(73, 54, 164, 0.8); */
            overflow: hidden;
        }

        .background-green {
            background-color: #2ECC71;
        }

        .background-blue {
            background-color: #0882FF;
        }

        .color-blue {
            color: #0882FF !important;
        }

        .background-orange {
            background-color: #F39C12;
        }

        .background-red {
            background-color: #fff;
        }

        .ibox-body {
            padding: 20px !important;
        }

        .widget-stat-icon {
            display: inline-block;
            width: 50px;
            height: 50px;
            top: 10%;
            right: 5%;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 50px;
            text-align: center;
            /* background-color: #03fd52; */
            border-radius: 50%;
            font-size: 20px;
        }

        * {
            font-family: 'Aptos', 'poppins', sans-serif;
        }

        /* .page-heading {
            padding-inline: 20px;
        } */

        .row {
            padding-inline: 20px;
        }
    </style>
    <h1>Dashboard</h1>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success widget-stat card">
                <div class="ibox-body">
                    <div class="m-b-5">Today Payment Received</div>
                    <h2 class="p-t-5 font-strong color-green">
                        ₹ <?php echo number_format($todaysuccesspayment["amt"], 2); ?>
                    </h2>
                    <i class=" widget-stat-icon background-green color-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor"
                            class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-info widget-stat card">
                <div class="ibox-body">
                    <div class="m-b-5">Today Success Transaction</div>
                    <h2 class="p-t-5 font-strong color-blue"><?php echo number_format($todayallpayment["amt"]) ?></h2>
                    <i class=" widget-stat-icon background-blue color-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor"
                            class="bi bi-send-check" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z" />
                            <path
                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686" />
                        </svg>
                    </i>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">₹<?php echo number_format($todaypendingpayment["amt"], 2); ?></h2>
                                <div class="m-b-5">Today Pending Payment</div><i class=" widget-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
</svg></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>12% higher</small></div>
                            </div>
                        </div>
                    </div> -->
        <!-- <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">₹<?php echo number_format($todaysuccesspayment["amt"], 2); ?></h2>
                                <div class="m-b-5">Today Settlement</div><i class="widget-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-send-dash" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-5.5 0a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5"/>
</svg></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>99.9% higher</small></div>
                            </div>
                        </div>
                    </div> -->


        <?php

        $expiryDate = $userdata['expiry'];
        $today = date('Y-m-d'); // Get today's date in 'YYYY-MM-DD' format
        
        if (strtotime($expiryDate) >= strtotime($today)) {
            $status = "Active";
        } else {
            $status = "Expired";
        }



        ?>

        <!-- <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $rowCount ?></h2>
                                <div class="m-b-5">Used Transaction</div><i class="widget-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
  <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
</svg></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>18% higher</small></div>
                            </div>
                        </div>
                    </div> -->
        <!-- <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?></h2>
                                <div class="m-b-5">Account Status</div><i class="widget-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>99% higher</small></div>
                            </div>
                        </div>
                    </div> -->
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success widget-stat card">
                <div class="ibox-body">
                    <div class="m-b-5">Today Faild Payment</div>
                    <h2 class="p-t-5 font-strong text-danger">₹ <?php echo number_format($todayfail["amt"], 2); ?></h2>
                    <i class="widget-stat-icon background-red color-white" style="">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor"
                            class="bi bi-send-exclamation" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z" />
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0m0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
                        </svg> -->
                        <img src="https://cdn-icons-png.flaticon.com/128/4476/4476841.png" style="" alt="">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger widget-stat card">
                <div class="ibox-body">
                    <div class="m-b-5">Plan Expire Date</div>
                    <h2 class="p-t-5 font-strong color-orange">
                        <?php echo date('d-m-Y', strtotime($userdata['expiry'])); ?>
                    </h2>
                    <i class="widget-stat-icon background-orange color-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor"
                            class="bi bi-calendar2-check" viewBox="0 0 16 16">
                            <path
                                d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                            <path
                                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </i>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-4">
                        <div>
                            <h3 class="m-0">Statistics</h3>
                            <div>Your shop sales analytics</div>
                        </div>
                        <div class="d-inline-flex">
                            <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                <div class="text-muted">WEEKLY INCOME</div>
                                <div>
                                    <span class="h2 m-0">$850</span>
                                    <span class="text-success ml-2"><i class="fa fa-level-up"></i> +25%</span>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="text-muted">WEEKLY SALES</div>
                                <div>
                                    <span class="h2 m-0">240</span>
                                    <span class="text-warning ml-2"><i class="fa fa-level-down"></i> -12%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <canvas id="bar_chart" style="height:260px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Statistics</div>
                </div>
                <div class="ibox-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <canvas id="doughnut_chart" style="height:160px;"></canvas>
                        </div>
                        <div class="col-md-6">
                            <div class="m-b-20 text-success"><i class="fa fa-circle-o m-r-10"></i>Desktop 52%</div>
                            <div class="m-b-20 text-info"><i class="fa fa-circle-o m-r-10"></i>Tablet 27%</div>
                            <div class="m-b-20 text-warning"><i class="fa fa-circle-o m-r-10"></i>Mobile 21%</div>
                        </div>
                    </div>
                    <ul class="list-group list-group-divider list-group-full">
                        <li class="list-group-item">Chrome
                            <span class="float-right text-success"><i class="fa fa-caret-up"></i> 24%</span>
                        </li>
                        <li class="list-group-item">Firefox
                            <span class="float-right text-success"><i class="fa fa-caret-up"></i> 12%</span>
                        </li>
                        <li class="list-group-item">Opera
                            <span class="float-right text-danger"><i class="fa fa-caret-down"></i> 4%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Visitors Statistics</div>
                </div>
                <div class="ibox-body">
                    <div id="world-map" style="height: 300px;"></div>
                    <table class="table table-striped m-t-20 visitors-table">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Visits</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/us.png" />USA
                                </td>
                                <td>755</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                            style="width:52%; height:5px;" aria-valuenow="52" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">52%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/Canada.png" />Canada
                                </td>
                                <td>700</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            style="width:48%; height:5px;" aria-valuenow="48" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">48%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/India.png" />India
                                </td>
                                <td>410</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                            style="width:37%; height:5px;" aria-valuenow="37" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">37%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/Australia.png" />Australia
                                </td>
                                <td>304</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            style="width:36%; height:5px;" aria-valuenow="36" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">36%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/Singapore.png" />Singapore
                                </td>
                                <td>203</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar" role="progressbar"
                                            style="width:35%; height:5px;" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">35%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/uk.png" />UK
                                </td>
                                <td>202</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            style="width:35%; height:5px;" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">35%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="m-r-10" src="./assets/img/flags/UAE.png" />UAE
                                </td>
                                <td>180</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            style="width:30%; height:5px;" aria-valuenow="30" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-parcent">30%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Tasks</div>
                    <div>
                        <a class="btn btn-info btn-sm" href="javascript:;">New Task</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="list-group list-group-divider list-group-full tasks-list">
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Meeting with Eliza</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">10 July 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox" checked="">
                                    <span class="input-span"></span>
                                    <span class="task-title">Check your inbox</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">22 May 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Create Financial Report</span>
                                </label>
                                <span class="badge badge-danger m-l-5"><i class="ti-alarm-clock"></i> 1 hrs</span>
                            </div>
                            <div class="task-data"><small class="text-muted">No due date</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox" checked="">
                                    <span class="input-span"></span>
                                    <span class="task-title">Send message to Mick</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">04 Apr 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="ui-checkbox ui-checkbox-gray ui-checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Create new page</span>
                                </label>
                                <span class="badge badge-success m-l-5">2 Days</span>
                            </div>
                            <div class="task-data"><small class="text-muted">07 Dec 2018</small></div>
                            <div class="task-actions">
                                <a href="javascript:;"><i class="fa fa-edit text-muted m-r-10"></i></a>
                                <a href="javascript:;"><i class="fa fa-trash text-muted"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Messages</div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider m-0">
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="./assets/img/users/u1.jpg" width="40" />
                            </a>
                            <div class="media-body">
                                <div class="media-heading">Jeanne Gonzalez <small
                                        class="float-right text-muted">12:05</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="./assets/img/users/u2.jpg" width="40" />
                            </a>
                            <div class="media-body">
                                <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs
                                        ago</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="./assets/img/users/u3.jpg" width="40" />
                            </a>
                            <div class="media-body">
                                <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs
                                        ago</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="./assets/img/users/u6.jpg" width="40" />
                            </a>
                            <div class="media-body">
                                <div class="media-heading">Connor Perez <small
                                        class="float-right text-muted">Today</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <style>
        .visitors-table tbody tr td:last-child {
            display: flex;
            align-items: center;
        }

        .visitors-table .progress {
            flex: 1;
        }

        .visitors-table .progress-parcent {
            text-align: right;
            margin-left: 10px;
        }
    </style> -->

</div>

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

<!-- END PAGE CONTENT-->
<footer class="page-footer">
    <div class="font-13">2018 © <b>SunPay</b> - All rights reserved.</div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
</div>
</div>

<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>

<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->
<script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
</body>

</html>