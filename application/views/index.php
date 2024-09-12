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



<!-- check challan page -->
<div class="container vehicle">
  <div class="row">
    <div class="col-xl-4 col-lg-4"></div>
    <div class="col-xl-4 col-lg-4 mb-5">
      <div class="box mt-5">
        <h4 class="heading4">Enter Vehicle number</h4>
        <form action="<?php echo base_url('Welcome/check'); ?>" method="post">
          <div class="form-group mb-3 mt-2">
            <input type="text" name="vehicle_number" class="form-control" id="" aria-describedby="" placeholder="UP 01 AB12XX" autocomplete="off">
          </div>
            <div class="text-center">
            <button type="submit" class="btn btn-warning">Check challan</button>
            </div>
            </form>
     </div>
    </div>
    <div class="col-xl-4 col-lg-4"></div>
  </div>
</div>




 <!-- traffic rules -->
  <div class="container traffic">
    <div class="row">
      <div class="col-xl-6 col-lg-6">
        <div class="traffic-image">
          <img src="<?php echo base_url('assets/./images/back.jpg') ;?>" alt="traffic-image" class="img-fluid">
        </div>
      </div>
        <div class="col-xl-6 col-lg-16">
            <input type="checkbox" id="check">
            <div class="main-heading">
            <h3 class="heading3">Traffic Rules and Regulations</h3>
            </div>
            <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Keep left</h5>
            <p class="paragraph">Drive on the left side of the road and allow the traffic on your right to pass safely, especially in the absence of dividers or lanes</p>
            </div>
            <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Overtake from the right</h5>
            <p class="paragraph">When overtaking, use your indicator and overtake from the right side. Avoid overtaking on narrow lanes to ensure the safety of others</p>
            </div>
            <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Follow traffic signals</h5>
            <p class="paragraph">It's crucial to respect traffic signals and not jump red lights. Wait for pedestrians to cross before proceeding....</p>
            </div>
            <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> No parking in prohibited zones</h5>
            <p class="paragraph">Avoid parking in designated No Parking zones, busy corners, or in the middle of the road. Illegally parked vehicles can cause accidents and disrupt traffic flow.</p>
            </div>
            <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Give way to emergency vehicles</h5>
            <p class="paragraph">When emergency vehicles such as ambulances, police cars, or fire engines need to pass, give them the right of way. Blocking their path is a punishable offence</p>
          </div>
          <div class="content">
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Carry necessary documentation/identification</h5>
            <p class="paragraph">Always carry the necessary documents, either in physical or electronic mode via the DigiLocker application</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Observe speed limits</h5>
            <p class="paragraph">Adhere to the specified speed limits, both in city areas and on highways.</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Proper use of lights</h5>
            <p class="paragraph">Use indicators when changing lanes or making turns. In adverse weather conditions like rain or fog, use fog lights and emergency lights to signal other drivers and maintain a safe distance</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Avoid phone usage while driving</h5>
            <p class="paragraph">Refrain from using mobile phones while driving. If you receive an urgent call, park your vehicle on the side of the road before attending to it</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Don't drink and drive</h5>
            <p class="paragraph">Drunk driving is a serious offence that can result in hefty fines, imprisonment, or a revoked licence.</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Accompany learners</h5>
            <p class="paragraph">Learner drivers should always be accompanied by someone with a valid driving licence sitting in the passenger seat.</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Only one pillion rider</h5>
            <p class="paragraph">Two-wheelers are permitted to have only one pillion passenger along with the driver. Triple riding is not allowed.</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Wear helmets</h5>
            <p class="paragraph">Both the driver and the pillion rider must wear approved safety helmets.</p>
          </div>
          <div class="main1">
            <h5 class="heading2"><i class="fa-solid fa-star-of-life"></i> Always wear seat belts</h5>
            <p class="paragraph">Wear seat belts while travelling in a car. Children in the back seat should be properly secured with a harness or belt.</p>
          </div>
          </div>
          <label for="check">View More</label>
        </div>
       
    </div>
  </div>

 <?php $this->load->view('footer')?>