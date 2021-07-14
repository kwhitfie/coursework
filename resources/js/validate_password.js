function validate_pass(pass) {
  errors = []
  if(pass.length<6)
  {
    errors.push("Too short");
  }
  var letterNumber = /^[0-9a-zA-Z]+$/i;
  if(!pass.match(letterNumber))
    {
     errors.push("Only alphanumeric chars allowed");
    }
    var regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
    if(!pass.match(regex))
    {
      errors.push("Requires at least 1 upper case letter, 1 lower case letter and 1 number.");
    }

  console.log("Password: "+pass+" Errors: "+errors);
  return errors;
}

function get_pass(){
  return document.getElementById("password").value;
}

function get_confirm_pass(){
  return document.getElementById("passwordConfirm").value;
}

function get_account_type(){
  return document.getElementById("account-type").value;
}


var button = document.getElementById('submitButton');
button.onclick = function(){
  pass = get_pass();
  passConfirm = get_confirm_pass();
  if(pass!=passConfirm)
  {
    alert("Error: Passwords are not the same.")
  }

    var errors = validate_pass(pass);
    if(errors.length>0){
      var alertString = ""
      for(i=0; i<errors.length; i++)
      {
        alertString += "Error: " + errors[i] + "\n";
      }
      alert(alertString);
    }
    else{
      alert("Account successfully created")
    }
};
