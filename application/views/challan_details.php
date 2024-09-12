<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challan Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
       .tbl{
        overflow-x: scroll;
       /* overflow-y: scroll;*/
       }
        .table th, .table td {
            text-align: center;
        }
        .btn-info {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row tbl">
      
        <div class="col-xl-8 col-lg-18">

    <h2 class="text-center">Challan Details</h2>
    
    <!-- Check if challans array is not empty -->
    <?php if(!empty($challans)) { ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Challan Number</th>
                <th>Vehicle Number</th>
                <th>Owner Name</th>
                <th>Violation Type</th>
                <th>Date & Time of Violation</th>
                <th>Location</th>
                <th>Challan Amount</th>
                <th>Due Date</th>
                <th>Payment Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through each challan -->
            <?php foreach ($challans as $challan) { ?>
            <tr>
                <td><?php echo $challan['challan_number']; ?></td>
                <td><?php echo $challan['vehicle_number']; ?></td>
                <td><?php echo $challan['owner_name']; ?></td>
                <td><?php echo $challan['violation_type']; ?></td>
                <td><?php echo $challan['violation_date']; ?></td>
                <td><?php echo $challan['location']; ?></td>
                <td><?php echo $challan['amount']; ?></td>
                <td><?php echo $challan['due_date']; ?></td>
                <td style="color: orange;"><?php echo $challan['payment_status']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
    <p>No Challan found for this vehicle number.</p>
    <?php } ?>
</div>
<div class="col-xl-2 col-lg-2"></div>
<div class="col-xl-2 col-lg-2"></div>
    </div>

    </div>
   <div class="ml-5 mt-5">
    <a href="<?php echo base_url() ;?>" class="btn btn-info" stlyle="text-decoration: none;">Back To Home page</a>
    </div>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
