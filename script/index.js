$(document).ready(function() {

    username = $('#inscription > table > tbody > tr > td > input[name*="username"]');
    $("#inscription_link").click(function() {
        $("#window").css("display","block");
        username.focus();
        username.blur(function(){
            validate_username(username);
        });
        password =$('#inscription > table > tbody > tr > td > input[name*="password"]');
        rpassword=$('input[name*="repeatPassword"]');
        password.blur(function(){
            validate_password(password);
        });
        rpassword.blur(function(){
            validate_rpassword(password,rpassword);
        });
        email=$('input[name*="email"]');
        remail=$('input[name*="repeatEmail"]');
        email.blur(function(){
            validate_email(email);
        });
        remail.blur(function(){
            validate_remail(email,remail);
        });
    });
    

    $("#cancelButton").click(function(){
        $("#window").css("display","none");
    });

    $("#submitButton").click(function(){
        $.ajax({
            url:"template/inscription.php",
            type:"POST",
            data:{
                operation:"login",
                username:$('#connection_form > form > table > tbody > tr > td > input[name*="username"]').val(),
                password:$('#connection_form > form > table > tbody > tr > td > input[name*="password"]').val()
            },
            success:function(e){
                if(e==true){
                    window.location.href="";
                }else{
                    alert("Authentification failed");
                }
            }
        });
    });

    $("#inscrireButton").click(function(){
        if(username.val()==""){
            $('#warningU').html("Please enter your username");
            return;
        }else{
            $.ajax({
                url:"template/inscription.php",
                type:"POST",
                data:{
                    operation:"verify",
                    username:username.val()
                }
            }).done(function(e){
                if(e==true){
                    $('#warningU').html("This username is not available");
                    return;
                }else{
                    $('#warningU').html("");
                }
            })
        }
        if(email.val()==""){
            $('#warningE').html("Please enter your email");
            return;
        }else{
            $.ajax({
                url:"template/inscription.php",
                type:"POST",
                data:{
                    operation:"verify",
                    email:email.val()
                }
            }).done(function(e){
                if(e==true){
                    $('#warningE').html("This email is not available");
                    return;
                }else{
                    $('#warningE').html("");
                    return;
                }
            })
        }
        if(!validate_password(password))return;
        if(!validate_remail(email, remail))return;
        if(!validate_rpassword(password, rpassword))return;
        $.ajax({
            url:"template/inscription.php",
            type:"POST",
            data:{
                operation:"inscrire",
                username:username.val(),
                email:email.val(),
                password:password.val(),
                role:$('[name=role]:checked').val()
            },
            success:function(e){
                window.location.href="";
            }
        });
    });

    $("#logout").click(function(){
        $.ajax({
            url:"template/inscription.php",
            type:"POST",
            data:{
                operation:"logout"
            },
            success:function(){
                window.location.href="";
            }
        });
    })
});

function validate_username(username){
    if(username.val()==""){
        $('#warningU').html("Please enter your username");
    }else{
        $.ajax({
            url:"template/inscription.php",
            type:"POST",
            data:{
                operation:"verify",
                username:username.val()
            }
        }).done(function(e){
            if(e==true){
                $('#warningU').html("This username is not available");
            }else{
                $('#warningU').html("");
            }
        })
    }
}


function validate_email(email){
    if(email.val()==""){
        $('#warningE').html("Please enter your email");
    }else{
        $.ajax({
            url:"template/inscription.php",
            type:"POST",
            data:{
                operation:"verify",
                email:email.val()
            }
        }).done(function(e){
            if(e==true){
                $('#warningE').html("This email is not available");
            }else{
                $('#warningE').html("");
            }
        })
    }

        
}

function validate_remail(email, remail){
    if(remail.val()!=email.val()){
        $('#warningRE').html("Emails entered are not the same");
        return false;
    }else{
        $('#warningRE').html("");
        return true;
    }
}

function validate_password(password){
    if(password.val()==""){
        $('#warningP').html("Please enter your password");
        return false;
    }else{
        $('#warningP').html("");
        return true;
    }
        
}

function validate_rpassword(password, rpassword){
    if(rpassword.val()!=password.val()){
        $('#warningRP').html("Passwords entered are not the same");
        return false;
    }else{
        $('#warningRP').html("");
        return true;
    }
}