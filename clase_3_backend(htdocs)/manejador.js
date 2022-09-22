"use strict";
/// <reference path="./alumno.ts" />
/// <reference path="./persona.ts" />
var Manejador;
(function (Manejador) {
    function CrearAlumno() {
        let nombre = document.getElementById("txtNombre").value;
        let apellido = document.getElementById("txtApellido").value;
        let legajo = parseInt(document.getElementById("txtLegajo").value);
        let alumno = new Prueba.Aulmno(apellido, nombre, legajo);
        console.log(alumno.ToString());
        alert(alumno.ToString());
    }
    Manejador.CrearAlumno = CrearAlumno;
})(Manejador || (Manejador = {}));
