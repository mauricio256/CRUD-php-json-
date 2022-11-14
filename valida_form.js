
const descricao = document.getElementById('descricao');
const classificacao = document.getElementById('classificacao');
const unidade = document.getElementById('unidade');
const quantidade = document.getElementById('quantidade');
const valor = document.getElementById('valor');


    const msgErroDescricao = document.getElementById('msgErroDescricao');
    const msgErroClassificacao = document.getElementById('msgErroClassificacao');
    const msgErroUnidade= document.getElementById('msgErroUnidade');
    const msgErroQuantidade = document.getElementById('msgErroQuantidade');
    const msgErroValor = document.getElementById('msgErroValor');
    const barraProgresso = document.getElementById('barraProgresso');

function  valida_form(){
    if( descricao.value === ''){
        msgErroDescricao.innerText= "Campo descrição está vazio";
        descricao.className = "form-control is-invalid";
        descricao.style.borderBottom = "thick solid #ff0000";
        descricao.focus();
        return false;
    }else{
        msgErroDescricao.innerText= "";
        descricao.className = "form-control is-valid";
        descricao.style.borderBottom = "";
        descricao.focus();
    }
///////////
        if( classificacao.value === ''){
            msgErroClassificacao.innerText= "Campo classificação está vazio";
            classificacao.focus();
            classificacao.className = "form-control is-invalid";
            classificacao.style.borderBottom = "thick solid #ff0000";
            return false;
        }else{
            msgErroClassificacao.innerText= "";
            classificacao.className = "form-control is-valid";
            classificacao.style.borderBottom = "";
            descricao.focus();
        }
   //////////     
            if( unidade.value === ''){
                msgErroUnidade.innerText= "Campo unidade está vazio";
                unidade.focus();
                unidade.className = "form-control is-invalid";
                unidade.style.borderBottom = "thick solid #ff0000";
                return false;
            }else{
                msgErroUnidade.innerText= "";
                unidade.className = "form-control is-valid";
                unidade.style.borderBottom = "";
                descricao.focus();
            }
        ////////////    
                if( quantidade.value === ''){
                    msgErroQuantidade.innerText= "Campo quantidade está vazio";
                    quantidade .focus();
                    quantidade .className = "form-control is-invalid";
                    quantidade.style.borderBottom = "thick solid #ff0000";
                    return false;
                }else if(isNaN( quantidade.value )){
                    msgErroQuantidade.innerText= "Campo quantidade só aceita valor Númerico";
                    quantidade .focus();
                    quantidade .className = "form-control is-invalid";
                    quantidade.style.borderBottom = "thick solid #ff0000";
                    return false;
                }else{
                    msgErroQuantidade.innerText= "";
                    quantidade.className = "form-control is-valid";
                    quantidade.style.borderBottom = "";
                    descricao.focus();
                }
           ///////////////     
                    if( valor.value === ''){
                        msgErroValor.innerHTML = "Campo valor está vazio";
                        valor.focus();
                        valor.className = "form-control is-invalid";
                        valor.style.borderBottom = "thick solid #ff0000";
                        return false;
                    }else if(isNaN( valor.value )){
                        msgErroValor.innerHTML = "Campo valor só aceita valor Númerico";
                        valor.focus();
                        valor.className = "form-control is-invalid";
                        valor.style.borderBottom = "thick solid #ff0000";
                        return false;
                    }else if(valor.value < 0){
                        msgErroValor.innerHTML = "Campo valor não pode ser negativo";
                        valor.focus();
                        valor.className = "form-control is-invalid";
                        valor.style.borderBottom = "thick solid #ff0000";
                        return false;
                    }else{
                        msgErroValor.innerText= "";
                        valor.className = "form-control is-valid";
                        valor.style.borderBottom = "";
                        valor.focus();
                    }      
    barraProgresso.style = "width: 99%";                         
}



