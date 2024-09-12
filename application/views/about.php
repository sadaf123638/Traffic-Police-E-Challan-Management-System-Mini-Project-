<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ;?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/all.css') ;?>">
    <title>E-Challan</title>
</head>
<body>

<?php $this->load->view('header')?>

<!---About -page- e-challan-->
<div class="container about-page" id="about">
  <h1>About Us</h1>
  <div class="row">
      <div class="col-xl-6 col-lg-6">
          <div class="about-page-detail">
              <p>
              The E-Challan Traffic Police System is a digital platform designed to make traffic management more efficient and transparent. This system enables traffic police to issue challans (fines) for traffic violations electronically, reducing paperwork and saving time.
              With the E-Challan system, vehicle owners can easily check their challan status online and make payments securely, without having to visit a police station. It ensures faster processing, helps maintain accurate records of traffic violations, and promotes transparency in the entire process .Our goal is to support traffic authorities in enforcing road safety rules effectively and to provide a convenient way for citizens to manage their traffic fines. By embracing technology, we aim to make roads safer for everyone.
              </p>
          </div>
      </div>
      <div class="col-xl-6 col-lg-6">
          <div class="about-page-image">
              <img src="<?php echo base_url('assets/./images/traffic.jpg') ;?>" alt="about-image" class="img-fluid">
          </div>
      </div>
  </div>
</div>

<?php $this->load->view('footer')?>