$(function(){
    "use strict";

    $('#info').click( function(){
      $('#info_box').toggleClass('open');
    });

    $('.pr_bar').each(function(){
    	let width = $(this).data('skill');//в переменную записываем необходимую цифру

    	$(this).css('width', width + '%');
    });

        $('#menu_btn').click( function(){
      $('#main_nav').toggleClass('open');
    });

    $(document).ready(function(){
      $(".but").click(function(){
        $(".flex__align-items_center").toggleClass("flex__align-items_end"); return false;
      });
    });

  $("#filter ul li a").click(function(e) {
    e.preventDefault();
      $("#filter ul li a").removeClass('active');
        $(this).addClass('active');
      });


});
