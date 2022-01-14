firebase.initializeApp({
  apiKey: 'AIzaSyAeDCv2k2OkqYPbm3K8wTIQR8laWvxMagU',
  authDomain: "logistikapp-interested-clients.firebaseapp.com",
  projectId: "logistikapp-interested-clients",
});

var db = firebase.firestore();

function dosprocesos(){
  jsguardar();
  //phpguardar();
  
}
function loadLog() {
  var name = document.getElementById('fnamefield').value;
  var phone = document.getElementById('telefonofield').value;
  var email = document.getElementById('emailfield').value;
  var message = document.getElementById('messagefield').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
  document.getElementById("login").innerHTML = xhttp.responseText;
  }
  };
  xhttp.open("POST","ejemplo.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("nam="+name+"&phon="+phone+"&emai="+email+"&mess="+message);
  }

function phpguardar()
{
  var name = document.getElementById('fnamefield').value;
  var phone = document.getElementById('telefonofield').value;
  var email = document.getElementById('emailfield').value;
  var message = document.getElementById('messagefield').value;
  window.location ="./ejemplo.php?nam="+name+"&phon="+phone+"&emai="+email;
}
function jsguardar(){
  var name = document.getElementById('fnamefield').value;
  var phone = document.getElementById('telefonofield').value;
  var email = document.getElementById('emailfield').value;
  var message = document.getElementById('messagefield').value;
  
  if (name === "" || phone === "" || email === "" || message === "") {
    document.getElementById("error_temp").innerHTML = "Por favor, llene todos los campos."; 
  }
  else if(!email.includes("@")){
    document.getElementById("error_temp").innerHTML = "Por favor, ingrese un email válido."; 
  }else{
    document.getElementById("success_temp").innerHTML = "En breve nos comunicaremos contigo, " + name; 
    document.getElementById("error_temp").innerHTML = ""; 
    loadLog();
    db.collection("clients").add({
      Nombre: name,
      Telefono: phone,
      Email: email,
      Mensaje: message,
      Fecha: new Date()
    })
    
    .catch(function(error) {
      document.getElementById("error_temp").innerHTML = "Error agregando la información a la base de datos."; 
      document.getElementById("success_temp").innerHTML = ""; 
    })

    document.getElementById('fnamefield').value = "";
    document.getElementById('telefonofield').value = "";
    document.getElementById('emailfield').value= "";
    document.getElementById('messagefield').value= "";
  }

}

