<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>

<body>


<?php include 'inc/navbar.php' ?>

<div class="container">

  <div class="container-fluid med_name">
    <div class="name">
      <p style="">Medicine Name</p>
    </div>
    <div class="my_input_medicine" style="">
      <form class="text-center" action="#!">
      <input type="text" id="input_medicine" class="form-control mb-4" placeholder="ex: Burana 400mg">
      </form>
    </div>
  </div>
  
  <div class="container-fluid med_type">
    <div class="type">
      <p style="">Type</p>
    </div>
    <div class="row" id="sel_type" style="">
      <div class="col-3" style="">
        <div class="my_box my_box1" style="">
          <i class="fas fa-capsules fa-lg blue-text" style=""></i>
          <p class="text-center" style="">Capsules</p>
        </div>
      </div>
  
      <div class="col-3" style="">
        <div class="my_box my_box2" style="">
          <i class="fas fa-tablets fa-lg blue-text" style=""></i>
          <p class="text-center" style="">Tablets</p>
        </div>
      </div>
  
      <div class="col-3" style="">
        <div class="my_box my_box3" style="">
          <i class="fas fa-eye-dropper fa-lg blue-text" style=""></i>
          <p class="text-center" style="">Drops</p>
        </div>
      </div>
  
      <div class="col-3" style="">
        <div class="my_box my_box4" style="">
          <i class="fas fa-syringe fa-lg blue-text" style=""></i>
          <p class="text-center" style="">Injection</p>
        </div>
      </div>
  
    </div>
  </div>
  
  <div class="container-fluid" style="position:relative; top:40px">
    <div class="setTime">
      <p style="">Time</p>
    </div>
    <div class="rani">
    <div class="time_field" style="">
      <input type="text" class="manual-operations-input1 form-control" placeholder="Now" style="">
    </div>
    <div class="add_another_time" style="">
      <button type="button" class="check-minutes1 btn btn-outline-info btn-rounded waves-effect" >Set Time</button>
    </div>
  </div>
    <button type="button" class="btn btn-outline-info btn-rounded waves-effect" id="" onclick="" style="left:-15px;">Add another time</button>
  </div>
  
  <div class="container-fluid date" style="">
    <div class="setDate">
      <p style="">Date</p>
    </div>
    <div class="date_field" style="">
      <input type="text" class="datepicker form-control" placeholder="Today" style="">
      <!-- <p class="text-center" style="">21.03.2019</p> -->
      <!-- <i class="datepick far fa-calendar-alt fa-lg blue-text" style="" onclick="myFunction()"></i> -->
    </div>
  </div>
  
  <div class="container-fluid amount" style="">
    <div class="amountNo">
      <p style="">Amount</p>
    </div>
    <div class="my_input_amount" style="">
      <form class="text-center" action="#!">
      <input type="text" id="input_medicine" class="form-control mb-4" placeholder="ex:1">
      </form>
    </div>
  </div>
  
  
  <div class="container-fluid frequency">
    <div class="frequencyNo">
      <p style="">Repeat</p>
    </div>
    <div class="input-group mb-3 my_input_frequency" style="">
      <div class="input-group-prepend" >
        <!-- <label class="input-group-text" for="inputGroupSelect01">Options</label> -->
      </div>
      <select class="browser-default custom-select" id="inputGroupSelect01" >
        <option selected>Frequency...</option>
        <option value="1">Today</option>
        <option value="2">Daily</option>
        <option value="3">Weekly</option>
        <option value="3">Monthly</option>
      </select>
    </div>
  </div>
  
  
  <div class="container-fluid set_btn" style="">
    <button type="button" class="btn btn-primary">Set</button>
  </div>
</div>
















  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/myScript.js"></script>
  <script>
    $('.datepicker').pickadate();
  </script>
</body>

</html>
