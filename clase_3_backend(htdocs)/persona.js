"use strict";
var Prueba;
(function (Prueba) {
    class Persona {
        //#endregion
        //#region Constructor
        constructor(apellido, nombre) {
            this._apellido = apellido;
            this._nombre = nombre;
        }
        //#endregion
        //#region Propiedades
        // Getters
        get Nombre() {
            return this._nombre;
        }
        get Apellido() {
            return this._apellido;
        }
        // Setters
        set Nombre(nombre) {
            this._nombre = nombre;
        }
        set Apellido(apellido) {
            this._apellido = apellido;
        }
        //#endregion
        //#region Metodos
        ToString() {
            return `Apellido: ${this.Apellido} - Nombre: ${this.Nombre} `;
        }
    }
    Prueba.Persona = Persona;
})(Prueba || (Prueba = {}));
