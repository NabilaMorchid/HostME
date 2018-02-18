$(function(){
    $('a#modifyPass').click(function(){
	$(this).parent().parent().find('li.active').removeClass('active');
	$(this).parent().addClass('active');
	$('div.span13').load('settings_pass.html');
    });
    /*find the link of the listing item*/
    $('div.listing-thumbs').click(function(){
	var _href = $(this).find("a").first().attr("href");
	window.location.href=_href;
    });
    $('a#adview_phonenumber_sidebar_btn').click(function(){
        alert('get the phone number by an ajax request');
    });
    
    $('select#sort').change(function(){
        alert('send an ajax request to reload result content');
    });
    //accepting ads
    $('a#accept').click(function(){
        var id = $(this).parent().parent().find('input.idAds').val(),
        sendData = {'accept':'' , 'idAds':parseInt(id)}, 
        element = $(this);
        $.post('',sendData,function(result){
            if(result){
                alert('accepted');
                $(element).parent().parent().parent().parent().remove();
            }else{
                alert(result);
            }
        });
    });
    //declining ads
    $('a#decline').click(function(){
        
        var id = $(this).parent().parent().find('input.idAds').val(),
        sendData = {'decline':'' , 'idAds':parseInt(id)},
        element = $(this);
        $.post('',sendData,function(result){
            if(result){
                alert('declineds');
                $(element).parent().parent().parent().parent().remove();
            }else{
                alert(result);
            }
        });
    });
});