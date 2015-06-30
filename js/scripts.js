(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$(document).ready(function() {



   //   $(".staff-member.slide").tsort({attr: "data-sort"}); 


      $('#show-menu').sidr({ side: 'right' });
      $("body > .wrapper").click( function() {
        $.sidr('close');
      });

      $("#home-slider").liquidSlider({
        slideEaseFunction: "easeInOutQuad", 
        autoSlide: true,
        autoSlideInterval: 6000,
        mobileNavigation: false,
        hoverArrows: false,
        autoHeight: false,
        dynamicTabsPosition: "bottom",
        dynamicTabsAlign: "center"
      });

      $("#our-team-slider").liquidSlider({
        slideEaseFunction: "easeInOutQuad", 
        mobileNavigation: false,
        hoverArrows: false,
        autoSlide: false,
        autoHeight: false, 
        dynamicTabsPosition: "top",
        dynamicTabsAlign: "center"
      });

      $("#sponsor-slider").liquidSlider({
        slideEaseFunction: "animate.css", 
        slideEaseDuration: 400,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        mobileNavigation: false,
        hoverArrows: false,
        dynamicArrows: false,
        autoSlide: false,
        dynamicTabsPosition: "top",
        dynamicTabsAlign: "center"
      });

      $("#piece-4").addClass("active"); 

      $("area").click(function(event) {
        event.preventDefault(); 
        console.log("hovered over area"); 
        var piece = "#piece-" + $(this).attr("id").replace("area-","");
        var content = "#content-" + $(this).attr("id").replace("area-",""); 
        $(".piece").removeClass("active");
        $(piece).addClass("active"); 
        $(".piece-content").hide(); 
        $(content).fadeIn(); 

      });


      $(".logo-link").each(function() {
        $(this).click(function(event) {
          event.preventDefault(); 
          var ov = $("#fullscreen-overlay");
          var imgsrc = $(this).find(".logo-image").attr("src"); 
          var text = $(this).find(".logo-text").html(); 
          ov.find("img").attr("src",imgsrc);
          ov.find(".text").html(text); 
          var count = $(this).data("card"); 
      //    console.log("count: " + count); 
          ov.find(".container").data("card", count);
          ov.fadeIn();
          ov.find(".container").removeClass("hidden");
          ov.find(".container").addClass("shown");

          var view_count = $(this).data("card");
          ov.find(".container").data("card",view_count);
          hide_buttons(); 

        });
      });

      function hide_buttons() {
        var ov = $("#fullscreen-overlay");
        var next_count = ov.find(".container").data("card") + 1;
        console.log("next_count: " + next_count); 
        var next_card = $(".logo-container").find("[data-card='" + next_count + "']");
        var prev_count = ov.find(".container").data("card") - 1;
        console.log("prev_count: " + prev_count); 
        var prev_card = $(".logo-container").find("[data-card='" + prev_count + "']");
        if (next_card.length < 1) {
          ov.find("#next").hide(); 
        }
        else {
          ov.find("#next").show();
        }
        if (prev_card.length < 1) {
          ov.find("#prev").hide(); 
        }
        else {
          ov.find("#prev").show();
        }
      }

      $("#close-overlay").click(function(event) {
        event.preventDefault(); 
        var ov = $("#fullscreen-overlay");
        ov.find(".container").addClass("hidden"); 
        ov.find(".container").removeClass("shown");
      //  ov.delay(700).find("img").attr("src",""); 
      //  ov.find(".text").html(""); 
        ov.delay(300).fadeOut(); 
        
      });

      $("#fullscreen-overlay").find("#next").click(function(event) {
        event.preventDefault(); 
        var ov = $("#fullscreen-overlay");
        var new_count = ov.find(".container").data("card") + 1;
        var new_card = $(".logo-container").find("[data-card='" + new_count + "']");
        if (new_card.length) {
          var imgsrc = new_card.find(".logo-image").attr("src"); 
          var text = new_card.find(".logo-text").html();
          ov.find(".container").data("card",new_count);
          ov.find("img").attr("src",imgsrc);
          ov.find(".text").html(text); 
          hide_buttons(); 
        }
      });

      $("#fullscreen-overlay").find("#prev").click(function(event) {
        event.preventDefault(); 
        var ov = $("#fullscreen-overlay");
        var new_count = ov.find(".container").data("card") - 1;
        var new_card = $(".logo-container").find("[data-card='" + new_count + "']");
        if (new_card.length) {
          var imgsrc = new_card.find(".logo-image").attr("src"); 
          var text = new_card.find(".logo-text").html();
          ov.find(".container").data("card",new_count);
          ov.find("img").attr("src",imgsrc);
          ov.find(".text").html(text); 
          hide_buttons(); 
        }
      });










    });
		
	});
	
})(jQuery, this);
