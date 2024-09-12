<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Challan</title>
</head>
<body>

<form action="<?php echo base_url('Welcome/submit'); ?>" method="post">
    <div>
        <label for="challan_number">Challan Number:</label>
        <input type="text" id="challan_number" name="challan_number" maxlength="10" required>
    </div>
    <div>
        <label for="vehicle_number">Vehicle Number:</label>
        <input type="text" id="vehicle_number" name="vehicle_number" maxlength="15" required>
    </div>
    <div>
        <label for="owner_name">Owner Name:</label>
        <input type="text" id="owner_name" name="owner_name" maxlength="100" required>
    </div>
    <div>
        <label for="violation_type">Violation Type:</label>
        <input type="text" id="violation_type" name="violation_type" maxlength="50" required>
    </div>
    <div>
        <label for="violation_date">Violation Date:</label>
        <input type="datetime-local" id="violation_date" name="violation_date" required>
    </div>
    <div>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" maxlength="100" required>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" id="amount" name="amount" required>
    </div>
    <div>
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" required>
    </div>
    <div>
        <label for="payment_status">Payment Status:</label>
        <input type="text" id="payment_status" name="payment_status" maxlength="20" required>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>