/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function getHTTPObject()       
{                       
  var http;
  try
 {
   http = new XMLHttpRequest();
 }
 catch(trymicrosoft)
 {
      try
   {
          http = new ActiveXObject("MSXML2.XMLHTTP"); 
        }
      catch(othermicrosoft)
   {
        try{
             http = new ActiveXObject("Microsoft.XMLHTTP");
           } 
catch(failed) 
  {
             http = null;
          }
       }
 }
 return http;
}


//function show_messagerie(){
    //document.getElementById("talents").innerHTML="<div id='msg_container'>\n\
       // <div id='msg_read'></div>\n\
        //<div id='msg_written'>\n\
            //<label id='label_msg'>Enter your message :</label>\n\
           // <input type='text' id='input_msg' size='80' />\n\
            //<input type='button' id='valid_msg' value='submit' />\n\
       // </div>\n\
    //</div>";
//}

function show_message(){
       var contexte= document.getElementById("talents");
	var xmlhttp = getHTTPObject();
	xmlhttp.onreadystatechange = function(){ 
		if(xmlhttp.readyState == 4){
			contexte.innerHTML = xmlhttp.responseText;
			
			
		} 
	} 
	xmlhttp.open("GET","template/Messagerie.php",true);
	xmlhttp.send(null);	
}

function return_accueil(){
    document.getElementById("talents").innerHTML="<div id=''></div>";
    
}

function msg_envoyer(){
    
    var contexte=document.getElementById("input_msg").value;
    //alert(contexte);
    document.getElementById("msg_read").innerHTML+=contexte;
    document.getElementById("input_msg").value="";
}


