<div class="container-fluid mx-xs-0 mt-5 pt-5">
    <div id="formOcorrencia" class="">
        <div class="card border border-dark rounded-bottom">
            <div class="card-header bg-dark text-white">
                CADASTRO DE VENDEDOR
            </div>
            <div class="card-body ">
                <div class="row mt-2">
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanNome">Nome</span>
                        <input type="text" name="txtNome" id="txtNome" class="form-control" aria-describedby="spanNome">
                    </div>
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanEmail">Email</span>
                        <input type="text" name="txtEmail" id="txtEmail" class="form-control" aria-describedby="spanEmail">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanTel">Telefone:</span>
                        <input type="tel" name="txtTel" id="txtTel" class="form-control" data-mask="(00) 0000-0000" aria-describedby="spanTel" placeholder="(xx) xxxxx-xxxx">
                    </div>
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanCargo">Cargo:</span>
                        <input type="text" name="txtCargo" id="txtCargo" class="form-control" aria-describedby="spanCargo">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-12">
                        <button type="button" class="col-12 btn btn-lg btn-dark" id="btnSolicManut" onclick="cadasVendas()">CADASTRAR VENDEDOR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /* Máscaras ER */
    function mascara(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmascara()", 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function mtel(v) {
        v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function id(el) {
        return document.getElementById(el);
    }
    window.onload = function() {
        id('txtTel').onkeyup = function() {
            mascara(this, mtel);
        }
    }
</script>