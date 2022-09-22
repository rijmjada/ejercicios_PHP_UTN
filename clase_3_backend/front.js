"use strict";
// Se ejecuta cuando se abre la pagina
window.onload = () => {
    // Casteo a htmlinputelement
    let btn_Enviar = document.getElementById("btnEnviar");
    // Se ejecuta cuando se haga click en el boton
    btn_Enviar.onclick = () => {
        let cboAccion = document.getElementById("cboAccion");
        let frm = document.getElementById("frm");
        let destino = "./php/nexo_poo.php";
        let metodoHttps = "post";
        //#region Foto
        let frm_foto = document.getElementById("frm_foto");
        let destino_foto = "./php/nexo_poo_foto.php";
        //#endregion
        if (cboAccion.value == "listar" || cboAccion.value == "verificar") {
            let metodoHttps = "get";
        }
        frm.method = metodoHttps;
        frm.action = destino;
        frm.submit();
    };
};
