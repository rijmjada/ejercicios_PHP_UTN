/// <reference path="./persona.ts" />

namespace Prueba
{

    export class Aulmno extends Persona
    {

        //#region 
        protected _legajo:number;
        protected _foto:string;
        //#endregion

        //#region Constructor
        public constructor(apellido:string, nombre:string, legajo:number, foto:string) {
            super(apellido,nombre);
            this._legajo = legajo;
            this._foto = foto;
        }
        //#endregion

        //#region Propiedades

        // Getters
        public get Legajo() {
            return this._legajo;
        }

        
        public get Foto(){
            return this._foto;
        }
        // Setters
        public set Legajo(legajo:number) {
            this._legajo = legajo;
        }
        //#endregion
        public set Foto(foto:string){
            this._foto = foto;
        }

        //#region Metodos
        public ToString():string {
            return super.ToString() + `- Legajo: ${this.Legajo}. Foto: ${this.Foto}`;
        }
        //#endregion
    }

}