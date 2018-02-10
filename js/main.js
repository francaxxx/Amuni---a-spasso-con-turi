$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });

  /*Hide menu by default*/
$("#menu").hide();

/*When menu button is clicked, toggle the menu*/
$("#menu-btn").click(function(){
  $("#menu").slideToggle();
});

$(document).ready(function(){
  $('.list').click(function(){
    $(this).find('ul').toggleClass('open');
  });
});
