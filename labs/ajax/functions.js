$("#zipcode").change(zipcodeChange);
$("#states").change(stateChange);
$("#username").change(userNameChange);
    
function stateChange(){
    $.ajax({
            type: "get",
            url: "https://www.showdeolabs.com/cors?url=http://itcdland.csumb.edu/~milara/ajax/countyList.php?state=" + $("#states").val(),
            dataType: "json",
            data: {
                "format":"geojson",
            },
            
            success: function(data,status) {
                var realData = JSON.parse(data);
                var select = document.getElementById("counties");
                select.options.length = 1;
  
                for (index in realData) {
                   select.options[select.options.length] = new Option(realData[index]['county'], index);
                 }
            }
    });
      
}
    
function zipcodeChange() {      
    $.ajax({
            type: "get",
            url: "https://www.showdeolabs.com/cors?url=http://itcdland.csumb.edu/~milara/ajax/cityInfoByZip.php?zip=" + $("#zipcode").val(),
            dataType: "json",
            data: {
                "format":"geojson",
            },
            
            success: function(data,status) {
                var realData = JSON.parse(data);
                
                for (var i=0; i < (Object.keys(realData).length / 2); i++ ) {
                    $('#zipCodeResult').append(realData[i] + "<br>");
                }
                 
                if(Object.keys(realData).length == 0){
                    document.getElementById("msg").innerHTML = " Zipcode not found";
                }
                else{
                    document.getElementById("msg").innerHTML = "";
                    document.myForm.city.value = realData[1];
                    document.myForm.latitude.value = realData[5];
                    document.myForm.longitude.value = realData[6];
                }
            }
    });
}

function userNameChange(){
    var found = false;
    
    for(name in usernames){
        if($("#username").val() == usernames[name]){
          found = true;
        }
      }
      
      if(found != true){
        document.getElementById("confirmation").innerHTML = "Username Available";
        document.getElementById("confirmation").className = "confirmed";
      }else{
        document.getElementById("confirmation").innerHTML = "Username Taken";
        document.getElementById("confirmation").className = "error";
      }
}

function submitCheck(){
    if($("#password").val()==$("#password2").val()){
        document.getElementById("passConfirm").innerHTML = "Passwords Match";
        document.getElementById("passConfirm").className = "confirmed";
        return true;
    }else{
        document.getElementById("passConfirm").innerHTML = "Passwords Do Not Match!";
        document.getElementById("passConfirm").className = "error";
        return false;
    }
}
