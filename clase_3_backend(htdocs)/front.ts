
// Se ejecuta cuando se abre la pagina
window.onload = () => 
{ 
    // Casteo a htmlinputelement
    let btn_Enviar = <HTMLInputElement>document.getElementById("btnEnviar");

    // Se ejecuta cuando se haga click en el boton
    btn_Enviar.onclick = () =>
    {
        let cboAccion = <HTMLSelectElement>document.getElementById("cboAccion");
        let frm = <HTMLFormElement>document.getElementById("frm");
        let destino = "./php/nexo_poo.php";
        let metodoHttps = "post";

        if(cboAccion.value == "listar" || cboAccion.value == "verificar")
        {
            let metodoHttps = "get";
        }

        frm.method = metodoHttps;
        frm.action = destino;
        frm.submit();

    };
};