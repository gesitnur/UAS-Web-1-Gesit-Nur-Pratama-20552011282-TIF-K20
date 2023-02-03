document.getElementById("btn-login").onclick = function() {  
  email_value = document.getElementsByClassName('email-field')[0].value;
  password_value = document.getElementsByClassName('password-field')[0].value;
  
  if(email_value == 'admin@gmail.com' && password_value == 'admin123') {
    return true
  }else{
    alert('Email Dan Password Tidak Sesuai');
    return false
  }
}; 
