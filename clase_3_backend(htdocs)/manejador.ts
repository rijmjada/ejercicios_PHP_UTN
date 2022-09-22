/// <reference path="./alumno.ts" />
/// <reference path="./persona.ts" />

namespace Manejador
{

    export function CrearAlumno() : void
    {
        let nombre : string = (<HTMLInputElement> document.getElementById("txtNombre")).value;
        let apellido : string = (<HTMLInputElement> document.getElementById("txtApellido")).value;
        let legajo : number = parseInt((<HTMLInputElement> document.getElementById("txtLegajo")).value);

        
        let alumno = new Prueba.Aulmno(apellido, nombre, legajo);
        console.log(alumno.ToString());
        alert(alumno.ToString());
    }
}