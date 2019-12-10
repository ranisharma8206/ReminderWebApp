 //Selecting Type of Medicine
$(".my_box1").click(function(){
  $(".my_box1 i").addClass("white-text");
  document.getElementById("type_of").value = "Capsules";
  $(".my_box1").addClass("my_box_selected");
  $(".my_box2").removeClass("my_box_selected");
  $(".my_box3").removeClass("my_box_selected");
  $(".my_box4").removeClass("my_box_selected");
  $(".my_box2 i").removeClass("white-text");
  $(".my_box3 i").removeClass("white-text");
  $(".my_box4 i").removeClass("white-text");
});
$(".my_box2").click(function(){
  $(".my_box2 i").addClass("white-text");
  document.getElementById("type_of").value = "Tablets";
  $(".my_box2").addClass("my_box_selected");
  $(".my_box1").removeClass("my_box_selected");
  $(".my_box3").removeClass("my_box_selected");
  $(".my_box4").removeClass("my_box_selected");
  $(".my_box1 i").removeClass("white-text");
  $(".my_box3 i").removeClass("white-text");
  $(".my_box4 i").removeClass("white-text");
});
$(".my_box3").click(function(){
  $(".my_box3 i").addClass("white-text");
  document.getElementById("type_of").value = "Drops";
  $(".my_box3").addClass("my_box_selected");
  $(".my_box2").removeClass("my_box_selected");
  $(".my_box1").removeClass("my_box_selected");
  $(".my_box4").removeClass("my_box_selected");
  $(".my_box2 i").removeClass("white-text");
  $(".my_box1 i").removeClass("white-text");
  $(".my_box4 i").removeClass("white-text");
});
$(".my_box4").click(function(){
  $(".my_box4 i").addClass("white-text");
  document.getElementById("type_of").value = "Injection";
  $(".my_box4").addClass("my_box_selected");
  $(".my_box2").removeClass("my_box_selected");
  $(".my_box3").removeClass("my_box_selected");
  $(".my_box1").removeClass("my_box_selected");
  $(".my_box2 i").removeClass("white-text");
  $(".my_box3 i").removeClass("white-text");
  $(".my_box1 i").removeClass("white-text");
});

//time picker

var input = $('.manual-operations-input1').pickatime({
autoclose: true,
'default': 'now'
});

// Manually toggle to the minutes view
$('.check-minutes1').click(function(e){
e.stopPropagation();
input.pickatime('show').pickatime('toggleView', 'minutes');
});
