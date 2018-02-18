$(function(){
    var temps=setInterval("animate_slider()",3000);
    $('div.animation_container').mouseover(function(){
        clearInterval(temps);
    });
    $('div.animation_container').mouseout(function(){
        temps=setInterval("animate_slider()",3000);
    });
    /*user events on click*/
    $("div.next_div").click(function() {
        animate_slider();   
    });
    $("div.prev_div").click(function() {                        
        animate_slider_right();
    });
});
/********************************************Animate Function*****************************************************/
function animate_slider() {   
    var first_div = $("div.next");
    var next_div = $(first_div).next();
    /*test existence of next slide to move it*/
    if (next_div.length === 0) 
        next_div = $("div#animation").find("div:first");   
    var position = $(next_div).index();
    /*start the animation process*/     
    $(next_div).css("left","796px");        
    $(first_div).removeClass("next").animate({"left":"-796px"},1000);
    $(next_div).addClass("next").animate({"left":"0px"},1000);          
}

/**************************************Function Animate Slider Right**************************************************/
function animate_slider_right() {   
    var first_div = $("div.next");
    var next_div = $(first_div).prev();
    /*test existence of next slide to move it*/
    if (next_div.length === 0)
        next_div = $("div#animation").find("div:last");
    var position = $(next_div).index();
    /*start tha animation process*/
    $(next_div).css("left", "-796px");
    $(first_div).removeClass("next").stop().animate({"left": "796px"},1000);
    $(next_div).addClass("next").stop().animate({"left": "0px"},1000);
}
