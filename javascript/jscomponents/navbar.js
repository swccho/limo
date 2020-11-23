  
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
