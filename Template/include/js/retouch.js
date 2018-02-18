$(function(){
	/*this block is on showing the date tab in the index page*/
	$('#thedate , #thedate_1').datepicker({
      dateFormat: 'dd-mm-yy',
      showWeek:true,
               yearSuffix:"-CE",
               showAnim: "slide"
    });
    
    //var x = navigator.userAgent;
    //alert('your user agent is '+x);
    /*this block is on scrooling when the user click on the div#nxt*/
    $('div.nxt_1').click(function(){
	    var id = $(this).attr("href");
        var _top = $("section").offset().top;
        $("html, body").animate({"scrollTop":_top+"px"}, 1500);
        return true;
    });
    $('div.nxt_2').click(function(){
        var id = $(this).attr("href");
        var top = $("section#Num3").offset().top;
        $("html , body").animate({"scrollTop":top+"px"}, 1500);
        return true;
    });
    $('div.nxt_3').click(function(){
        var id = $(this).attr("href");
        var __top = $("section#Num2").offset().top;
        $("html , body").animate({"scrollTop":__top+"px"}, 1500);
        return true;
    });
    $('div.nxt_5').click(function(){
        var id = $(this).attr("href");
        var __top = $("footer#last").offset().top;
        $("html , body").animate({"scrollTop":__top+"px"}, 1500);
        return true;
    })
    /*this block is on showing the Login/Register div whene the user try to login or create a new account*/
    /*$('a#lnkLoginRegister').click( function (e){
    	e.stopPropagation();
    	$('div.loginReg').toggle('slow');
    });*/
    /*this block is responsible on the slider block*/
    $('div#prevNav').click(function(){
        animateLeft();
        $(this).unbind("click");
    });
    $('div#nextNav').click(function(){
        animateRight();
        $(this).unbind("click");
    });
    /*this block check if the user clicked outside the div*/
    /*$(document).mouseup(function (e){
    	var el = $('div.loginReg');
    	if(!el.is(e.target) && el.has(e.target).length === 0 ){
    		el.fadeOut();
    	}
    });*/
    /*adapt header for window height*/
    var screenHeight = $(window).height();
    setPositionToHome(screenHeight);
    $(window).resize(function(){
        setPositionToHome(screenHeight);
    }); 
    /*slider of what people share in lamudi*/
    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;
    
    //$('#slider').css({ width: sliderUlWidth, height: slideHeight });
    
    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
    
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 800, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 800, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('div.prevSlid').click(function () {
        moveLeft();
    });

    $('div.nextSlid').click(function () {
        moveRight();
    });
    /*check if the user hover in the #slider-div or not*/
    var interval = setInterval( moveRight, 3000 );
    $('#slider').hover(function() {
        clearInterval(interval);
    }, function() {
        interval = setInterval( moveRight, 3000 );
    });
    /*end of slider*/
    /*find the link of the listing item*/
    $('div#slider ul li').click(function(){
        /*var _herf = $(this).find('').attr('href');*/
        _href = $(this).find("a").first().attr("href");
        //alert('link is'+_href);
        window.location.href=_href;
    });
});

/*function setPositionToHome*/
function setPositionToHome (screenHeight) {
    var navHeight = $('nav.topNav').height();
    $("header").css('height' , (screenHeight-navHeight)+'px' );
    $("section").css('height' , screenHeight+'px');
}
