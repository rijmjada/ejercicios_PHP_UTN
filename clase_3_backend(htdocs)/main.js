"use strict";
/// <reference path="./alumno.ts" />
/// <reference path="./persona.ts" />
var TestPrueba;
(function (TestPrueba) {
    // Genero los alumnos
    let alumnos = [
        new Prueba.Aulmno("Perez", "Jorge", 123456),
        new Prueba.Aulmno("Lopez", "Julieta", 123455),
        new Prueba.Aulmno("Rodriguez", "Camila", 123454),
        new Prueba.Aulmno("Peralta", "Nahuel", 123453)
    ];
    // Los muestro por consola
    alumnos.forEach(i => console.log(i.ToString()));
})(TestPrueba || (TestPrueba = {}));
//# sourceMappingURL=main.js.map