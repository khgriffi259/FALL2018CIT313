// adding eventlistener here because i don't know how to add it to the onsubmit in the form element. form still submits..ugh
if(document.querySelector('#addpost')){
    document.querySelector('#addpost').addEventListener('submit', function(event){
        event.preventDefault;
    
        return validate_form();
    });
}


var fields_with_errors = [];

function validate_form(){    
    // get access to necessary form fields
    formFields = document.querySelectorAll('form input[type=text],form input[type=email],form input[type=password], form input[type=date], form textarea, form #category');
    

    // check if each field is empty
    for (var i = 0; i<formFields.length; i++){

        if (isEmpty(formFields[i])){    
            fields_with_errors.push(formFields[i].id + ' is a required field.');
        }
    }
    

    // check if passwords match
    if(document.getElementById('password') && document.getElementById('confirmpassword')){ 
        password = document.getElementById('password').value;
        confirmpassword = document.getElementById('confirmpassword').value;
        if (!passwordsMatch(password,confirmpassword)){
            fields_with_errors.push('Passwords do not match.');
        }
}


    //if there are errors display and do not submit the form 
    if (fields_with_errors.length > 0){
        displayErrorMessages();
        // clear errors array 
        fields_with_errors = [];
        return false;
    } else {
        return true;
    }    
}

function displayErrorMessages(){

    var li;
    var text;
    
    document.getElementById('fields_with_errors').innerHTML = '';

    if (fields_with_errors.length > 0){
        for (var x = 0; x<fields_with_errors.length; x++){
            li = document.createElement('li');
            text = document.createTextNode(fields_with_errors[x]);
            li.appendChild(text);
            document.getElementById('fields_with_errors').appendChild(li);
        }
    }
}

function isEmpty(field_element){
    if (field_element.value.length < 1) {
        return true;
    }else{
        return false;
    }
}

function passwordsMatch(password, confirmpassword){
    if (password == confirmpassword){
        return true;
    }else{
        return false;
    }
}