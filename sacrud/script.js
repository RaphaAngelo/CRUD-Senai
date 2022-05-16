// Trabalho feito por: Raphael Angelo e Vinícius Alves

function ordemservicos(){
    var numeroOs = document.getElementById("numeroOs").value;
    var data = document.getElementById("data").value;
    var equipamento = document.getElementById("equipamento").value;
    var defeito = document.getElementById("defeito").value;
    var idCliente = document.getElementById("idCliente").value;
 
    try{
     if(numeroOs =="" || data =="" || equipamento =="" || defeito =="" || idCliente =="" )
        throw new Error("Por favor, digite nos campos obrigatórios.");

    else{
        alert("Enviado com sucesso")
    }

    }catch(e){
        alert(''+ e.message)    
    }
}

