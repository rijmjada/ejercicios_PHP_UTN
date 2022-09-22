namespace Prueba 
{

    export class Persona 
    {

        //#region Atributos
        protected _apellido: string;
        protected _nombre: string;
        //#endregion


        //#region Constructor
        public constructor(apellido: string, nombre: string) {
            this._apellido = apellido;
            this._nombre = nombre;
        }
        //#endregion


        //#region Propiedades

        // Getters
        public get Nombre() {
            return this._nombre;
        } 
        public get Apellido() {
            return this._apellido;
        } 

        // Setters
        public set Nombre(nombre:string) {
            this._nombre = nombre;
        }
        public set Apellido(apellido:string) {
            this._apellido = apellido;
        }
        //#endregion


        //#region Metodos
        public ToString():string {
            return `Apellido: ${this.Apellido} - Nombre: ${this.Nombre} `;
        }
        //#endregion

    }

}