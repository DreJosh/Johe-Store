<div class="container-fluid mx-xs-0 mt-5 pt-5">
    <!-- BOTÕES DE NAVEGAÇÃO  -->
    <!-- ABA PARA REALIZAR CADASTRO DE VENDAS  -->
    <div id="formOcorrencia" class="">
        <div class="card border border-dark rounded-bottom">
            <div class="card-header bg-dark text-white">
                CADASTRO DE VENDAS
            </div>
            <div class="card-body ">
                <div class="row mt-2">
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanClien">CLIENTE</span>
                        <input type="text" name="txtCliente" id="txtCliente" class="form-control" aria-describedby="spanClien">
                    </div>
                    <div class="input-group col">
                        <label class="input-group-text bg-dark text-white" for="slMeioVend">MEIO: </label>
                        <select class="form-select" aria-label="MEIOS DE COMPRA" id="slMeioVend">
                            <option selected value="">SELECIONE</option>
                            <option value="P">PESSOALMENTE</option>
                            <option value="I">INTERNET</option>
                        </select>
                    </div>
                    <div class="input-group col">
                        <label class="input-group-text bg-dark text-white" for="slVendedor">VENDEDOR: </label>
                        <select class="form-select" aria-label="Vendedor" id="slVendedor">
                            <option selected value="">SELECIONE</option>
                            <?php
                            foreach ($vendedor as $value) {
                            ?>
                                <option value="<?= $value->codigo ?>"><?= $value->nome ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanQtde">QTDE:</span>
                        <input type="number" name="txtQtde" id="txtQtde" class="form-control" aria-describedby="spanQtde">
                    </div>
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanMaterial">PRODUTO:</span>
                        <input type="number" name="txtMaterial" id="txtMaterials" class="form-control" aria-describedby="spanMaterial" onblur="material()">
                    </div>
                    <div class="input-group col">
                        <input type="text" class="form-control text-uppercase " id="inpDescMaterial" name="inpDescMaterial" placeholder="DESCRIÇÃO MATERIAL" aria-label="DESCRIÇÃO MATERIAL" readonly>
                    </div>
                    <div class="input-group col">
                        <span class="input-group-text bg-dark text-white" id="spanDtVenda">DT. VENDA:</span>
                        <input type="date" name="txtDtVenda" id="txtDtVenda" class="form-control" aria-describedby="spanDtVenda">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-12">
                        <button type="button" class="col-12 btn btn-lg btn-dark" id="btnSolicManut" onclick="cadasVendas()"><i class="fas fa-toolbox"></i> CADASTRAR VENDAS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
</div>

<script>
    /////////////////////////////////////////////////////////
    //// VERIFICA SE EXISTE O MATERIAL E RETORNA O MESMO ////
    /////////////////////////////////////////////////////////
    function material() {
        var dadosajax = {
            material: $('#txtMaterials').val()
        };
        $.ajax({
            url: base_url + "/Vendas/material",
            data: dadosajax,
            type: 'POST',
            dataType: "json",
            cache: false,
            success: function(result) {
                console.log(result)
                $('#inpDescMaterial').val(result[0].descricao)
            }
        });
    }
    /////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////
    ////            CADASTRA A VENDA EXECUTADA           ////
    /////////////////////////////////////////////////////////
    function cadasVendas() {
        var dadosajax = {
            cliente: $('#txtCliente').val(),
            meio: $('#slMeioVend').val(),
            qtde: $('#txtQtde').val(),
            produto: $('#txtMaterials').val(),
            vendedor: $('#slVendedor').val(),
            dtMov: $('#txtDtVenda').val()
        };
        $.ajax({
            url: base_url + "/index.php//Vendas/cadasVendas",
            data: dadosajax,
            type: 'POST',
            dataType: "json",
            cache: false,
            success: function(result) {
                if (result == true) {
                    swal({
                        timer: 3000,
                        title: "Sucesso!",
                        text: "Venda Cadastrada.",
                        imageUrl: base_url + "/assets/img/icones/check.gif",
                        showConfirmButton: false
                    });
                } else {
                    swal({
                        timer: 3000,
                        title: "Erro!",
                        text: "Não foi possível realizar sua venda, verifique.",
                        imageUrl: base_url + "/assets/img/icones/erro.gif",
                        showConfirmButton: false
                    });
                }
            }
        });
    }
    /////////////////////////////////////////////////////////
</script>