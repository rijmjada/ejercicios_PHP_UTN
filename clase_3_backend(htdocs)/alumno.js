"use strict";
/// <reference path="./persona.ts" />
var Prueba;
(function (Prueba) {
    class Aulmno extends Prueba.Persona {
        //#endregion
        //#region Constructor
        constructor(apellido, nombre, legajo) {
            super(apellido, nombre);
            this._legajo = legajo;
        }
        //#endregion
        //#region Propiedades
        // Getters
        get Legajo() {
            return this._legajo;
        }
        // Setters
        set Legajo(legajo) {
            this._legajo = legajo;
        }
        //#endregion
        //#region Metodos
        ToString() {
            return super.ToString() + `- Legajo: ${this.Legajo}.`;
        }
    }
    Prueba.Aulmno = Aulmno;
})(Prueba || (Prueba = {}));
