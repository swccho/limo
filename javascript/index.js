$(window).on('load', function() { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('.preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({'overflow':'visible'});
  })

  
  function active(type){
    type == 0;
    if(type == 1){
      $('#home').addClass('active');
      
    } else if(type === 2){
      $('.card0').css('display','block')
      $('.card1').css('display','none')
      $('.card2').css('display','none')
    } else if(type === 3){
      $('.card0').css('display','none')
      $('.card1').css('display','block')
      $('.card2').css('display','none')
    } else if(type === 4){
      $('.card0').css('display','none')
      $('.card1').css('display','none')
      $('.card2').css('display','block')
    }
   
  }
  $(document).on("click", function(event){
    var $trigger = $(".nav-item");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".card").slideUp("fast");
    }            
});

var part1 = $('.part1');
var part2 = $('.part2');
var part3 = $('.part3');
