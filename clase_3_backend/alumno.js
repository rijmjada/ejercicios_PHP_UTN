"use strict";
/// <reference path="./persona.ts" />
var Prueba;
(function (Prueba) {
    class Aulmno extends Prueba.Persona {
        //#endregion
        //#region Constructor
        constructor(apellido, nombre, legajo, foto) {
            super(apellido, nombre);
            this._legajo = legajo;
            this._foto = foto;
        }
        //#endregion
        //#region Propiedades
        // Getters
        get Legajo() {
            return this._legajo;
        }
        get Foto() {
            return this._foto;
        }
        // Setters
        set Legajo(legajo) {
            this._legajo = legajo;
        }
        //#endregion
        set Foto(foto) {
            this._foto = foto;
        }
        //#region Metodos
        ToString() {
            return super.ToString() + `- Legajo: ${this.Legajo}. Foto: ${this.Foto}`;
        }
    }
    Prueba.Aulmno = Aulmno;
})(Prueba || (Prueba = {}));
