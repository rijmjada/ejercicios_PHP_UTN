/// <reference path="./persona.ts" />

namespace Prueba
{

    export class Aulmno extends Persona
    {

        //#region 
        protected _legajo:number;
        //#endregion

        //#region Constructor
        public constructor(apellido:string, nombre:string, legajo:number) {
            super(apellido,nombre);
            this._legajo = legajo;
        }
        //#endregion

        //#region Propiedades

        // Getters
        public get Legajo() {
            return this._legajo;
        }

        // Setters
        public set Legajo(legajo:number) {
            this._legajo = legajo;
        }
        //#endregion

        //#region Metodos
        public ToString():string {
            return super.ToString() + `- Legajo: ${this.Legajo}.`;
        }
        //#endregion
    }

}