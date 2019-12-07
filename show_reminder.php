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
      <h1 class="display-3">TODAY</h1>
      <div class="container-fluid reminders_container" style="">
        <div class="reminder_box" style="">
          <div class="custom-control custom-checkbox reminder_box_content" style="">
            <input type="checkbox" class="custom-control-input" id="defaultInline2">
            <label class="custom-control-label" for="defaultInline2" style="">Buruana 400mg</label>
            <p style="">06:30</p>
            <div class="icon_backround" style="">
              <span class="badge badge-light">4</span><i class="fas fa-capsules fa-lg blue-text" style=""></i>
            </div>
          </div>
        </div>
        <div class="reminder_box" style="">
          <div class="custom-control custom-checkbox reminder_box_content" style="">
            <input type="checkbox" class="custom-control-input" id="defaultInline1">
            <label class="custom-control-label" for="defaultInline1" style="">Buruana 400mg</label>
            <p style="">06:30</p>
            <div class="icon_backround" style="">
              <span class="badge badge-light">4</span><i class="fas fa-capsules fa-lg blue-text" style=""></i>
            </div>
          </div>
        </div>
        <div class="reminder_box" style="">
          <div class="custom-control custom-checkbox reminder_box_content" style="">
            <input type="checkbox" class="custom-control-input" id="defaultInline3">
            <label class="custom-control-label" for="defaultInline3" style="">Buruana 400mg</label>
            <p style="">06:30</p>
            <div class="icon_backround" style="">
              <span class="badge badge-light">4</span><i class="fas fa-capsules fa-lg blue-text" style=""></i>
            </div>
          </div>
        </div>
      </div>
    
    
    
    
      <i class="fas fa-plus-circle fa-2x blue-text add_reminder_icon" style=""></i>
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
  <script>
    $(document).ready(function() {
    // SideNav Button Initialization
    $(".button-collapse").sideNav();
      // SideNav Scrollbar Initialization
      var sideNavScrollbar = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(sideNavScrollbar);
    });
  </script>
</body>

</html>
