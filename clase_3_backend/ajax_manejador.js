"use strict";
function Listar() {
    let request = new XMLHttpRequest();
    request.open("GET", "./php/nexo_poo.php?accion=listar", true);
    request.send();
    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            document.getElementById("rta_ajax").innerHTML = request.responseText;
        }
    };
}
function Verificar() {
    let legajo = document.getElementById("legajo").value;
    let request = new XMLHttpRequest();
    request.open("POST", "./php/nexo_poo.php", true);
    let frmData = new FormData();
    frmData.append("accion", "verificar");
    frmData.append("legajo", legajo);
    request.send(frmData);
    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            document.getElementById("rta_ajax").innerHTML = request.responseText;
        }
    };
}
function Agregar() {
    let request = new XMLHttpRequest();
    let _nombre = document.getElementById("nombre").value;
    let _apellido = document.getElementById("apellido").value;
    let _legajo = document.getElementById("legajo").value;
    request.open("POST", "./php/nexo_poo.php", true);
    let frmData = new FormData();
    frmData.append("accion", "agregar");
    frmData.append("nombre", _nombre);
    frmData.append("apellido", _apellido);
    frmData.append("legajo", _legajo);
    request.send(frmData);
    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            document.getElementById("rta_ajax").innerHTML = request.responseText;
        }
    };
}
function Modificar() {
    let request = new XMLHttpRequest();
    let _nombre = document.getElementById("nombre").value;
    let _apellido = document.getElementById("apellido").value;
    let _legajo = document.getElementById("legajo").value;
    request.open("POST", "./php/nexo_poo.php", true);
    let frmData = new FormData();
    frmData.append("accion", "modificar");
    frmData.append("nombre", _nombre);
    frmData.append("apellido", _apellido);
    frmData.append("legajo", _legajo);
    request.send(frmData);
    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            document.getElementById("rta_ajax").innerHTML = request.responseText;
        }
    };
}
function Eliminar() {
    let request = new XMLHttpRequest();
    let _legajo = document.getElementById("legajo").value;
    request.open("POST", "./php/nexo_poo.php", true);
    let frmData = new FormData();
    frmData.append("accion", "eliminar");
    frmData.append("legajo", _legajo);
    request.send(frmData);
    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            document.getElementById("rta_ajax").innerHTML = request.responseText;
        }
    };
}
