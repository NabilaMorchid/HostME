/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    $('input#image').change(function(){
        //collect uploaded file info
        var fsize = this.files[0].size;
        var ftype = this.files[0].type;
        var fname = this.files[0].name;
        var fileArray = ["image/png" , "image/jpeg" , "image/jpg" , "image/gif"];
        var fileTrue = fileArray.indexOf(ftype);
        if(fileTrue>=0){
            //start process of uploading
            $('div.upload_tmp').show();
            uploadMe();
            $("input#picName").val(fname);
        }else{
        //display an alert telling the user that kind of file doesn't match
        alert('this file type doesn\'t match, please try to upload an image ');
    }
    });
});
/*implementing function of uploadMe()*/
function uploadMe(){
    //create the myform object
    myForm = new FormData();
    myForm.append('image',document.querySelector('#image').files[0]);
    //generate the xmlHttpRequest 
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            //if(xhr.responseText === '1'){
                var img_name = document.querySelector('#image').files[0].name;
                var img = "<img src = '../upload/"+img_name+"' width='160px' height='160px'>";
                $('div.upload_tmp').html(img);
            //}
        }
    };
    xhr.open('POST' , 'createPub.php');
    xhr.send(myForm);
}
