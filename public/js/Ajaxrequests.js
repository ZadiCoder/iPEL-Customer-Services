$(document).ready(function (){
    //Ajax Call form already exists Email Validation
    $("#Email").on("keypress blur", function(){
        var fillter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A+Z]{2,4}$/i;
        var Email = $("#Email").val();
        $.ajax({
            url: "Requester/customerReg.php",
            method: "POST",
            dataType:"json",
            data:{
                Email:Email},
                success: function(data){
                    if(data != 0){
                        $("#Emailmsg").html(
                            '<small style="color:red;">*Email ID Already Used!</small>'
                        );
                        $("#SignUp").attr("disabled",true);   
                    }
                    else if(data == 0 && fillter.test(Email)){
                        $("#Emailmsg").html(
                            '<small style="color:green;">*There You Go!</small>'
                        );
                        $("#SignUp").attr("disabled",false); 
                    }
                    else if(!fillter.test(Email)){
                        $("#Emailmsg").html(
                            '<small style="color:red;">*Please Enter Valid Email e.g. example@mail.com!</small>'
                        );
                        $("#SignUp").attr("disabled",true);  
                    }
                  // $("#Emailmsg").fadeIn().html(data);
                }
            
        });
    });
});

function Register(){
 //   var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A+Z]{2,4}$/i;
    var fillter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var Name = $("#Name").val();
    var Email = $("#Email").val();
    var Address = $("#Address").val();
    var Phone = $("#Phone").val();
    var Password = $("#Password").val();
    var confpassword = $("#confpassword").val();

    //cheacking Form Fields on Form Submition
    $("#Namemsg").html("");
    $("#Addressmsg").html("");
    $("#Emailmsg").html("");
    $("#Phonemsg").html("");
    //User Name Validation
    if(Name.trim() == ""){
        $("#Namemsg").html(
            '<small style="color:red;">*Pleace Enter Name!</small>'
        );
        $("#Name").focus();
        return false;

    }
    else if($("#Name").val().length<3){
        $("#Namemsg").html( '<small style="color:red;">*Name Must Be More Than 3 Character. !</small>');
        return false;
    }
    else if(!isNaN($("#Name").val())){
        $("#Namemsg").html('<small style="color:red;">*Numbers Are Not Allow. !</small>');
        return false;
    }

    //Email Validation
    else if(Email.trim() == ""){
        $("#Emailmsg").html(
            '<small style="color:red;">Pleace Enter Email!</small>'
        );
        $("#Email").focus();
        return false;

    }else if(Email.trim() != "" && !fillter.test(Email)){
        $("#Emailmsg").html(
         '<small style="color:red;">*Please Enter Valid Email e.g. example@mail.com</small>'
        );
        $("#Email").focus();
        return false;

    }
    //Address Validation
    else if(Address.trim() == ""){
        $("#Addressmsg").html(
            '<small style="color:red;">*Pleace Enter Email!</small>'
        );
        $("#Address").focus();
        return false;

    }
    else if($("#Address").val().length <  10){
        $("#Addressmsg").html( '<small style="color:red;">*Address Must Be More Then 10 Character.</small>');
        return false;
    }
    //Phone Validation
    else if(Phone.trim() == ""){
        $("#Phonemsg").html(
            '<small style="color:red;">Pleace Enter Phone No!</small>'
        );
        $("#Phone").focus();
        return false;

    }
    else if(isNaN($("#Phone").val() )){
        $("#Phonemsg").html('<small style="color:red;">*Only Numbers Are Allow. !</small>');
        return false;
    }
    else if($("#Phone").val().length!=11 ) {
        $("#Phonemsg").html('<small style="color:red;">*Phone number must be of 11 digit. !</small>');
        return false;
    }
    //Password And Confirm Password Validation
    else if(Password.trim() == ""){
        $("#Passwordmsg").html(
            '<small style="color:red;">*Pleace Enter Password!</small>'
        );
        $("#Password").focus();
        return false;

    }
    else if($("#Password").val().length<6){
        $("#Passwordmsg").html('<small style="color:red;">*Password must be more than 6 character!</small>');
        return false;
    }
    else if(confpassword.trim() == ""){
        $("#confpasswordmsg").html(
            '<small style="color:red;">*Pleace Enter Confirm Password</small>'
        );
        $("#confpassword").focus();
        return false;
    }
    else if($("#Password").val() != $("#confpassword").val()){
        $("#confpasswordmsg").html('<small style="color:red;">*confirm password didnot match</small>');
        return false;
    }
    else{
        $.ajax({
            url:'Requester/customerReg.php',
            type:'post',
            data:{Name:Name,
                Email:Email,
                Address:Address,
                Phone:Phone,
                Password:Password,
                confpassword:confpassword},
            success:function(data){
                
                alert("Registration Successfully");
                window.location.href = "index.php";
            }
    });
    }

}
function Login(){
    //console.log("Button Clicked");rPasswordmsg
    var rEmail = $("#rEmail").val();
    var rPassword = $("#rPassword").val();
    var fillter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

         if(rEmail.trim() == "" && rPassword.trim() == ""){
            alert("Email And Password Required!");
        return false;
    }
       else if(rEmail.trim() != "" && !fillter.test(rEmail)){
        $("#rEmailmsg").html(
         '<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>'
        );
        $("#rEmail").focus();
        return false;

    }
    
    $.ajax({
        url:'Requester/customerReg.php',
        method:'post',
        data:{rEmail:rEmail,
            rPassword:rPassword},
        success:function(data,status){

           //  $("#form").trigger("reset");
            $("#statusLogin").fadeIn().html(data);

      
        }
});

}