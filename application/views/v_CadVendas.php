<!-- FUNDO CINZA -->
<div class="circle-bcgd" style="    
     background: #6360601a;
     border-top-left-radius: 80%;
     height: 100%;
     padding-top: 50%;
     padding-bottom: 50%;
     padding-left: 50%;
     padding-right: 50%;
     position: fixed;
     z-index: -1; margin-left:25%;">
</div>


<div class="container-fluid mx-xs-0">
    <!-- BOTÕES DE NAVEGAÇÃO  -->
    <nav>
        <div class="nav nav-tabs border-bottom border-dark mt-5 mb-1" id="navOcorrencia" role="tablist">
            <a class="nav-link active border border-dark bg-dark text-white" id="ocorrenciaTab" data-toggle="tab" href="#formOcorrencia" onclick="btnCadasVendas()">CADASTRO DE VENDAS</a>
            <a class="nav-link" id="SoliTab" data-toggle="tab" href="#vendas" onclick="Vendas()">TABELA DE VENDAS</a>
        </div>
    </nav>
    <!-- -------------------- -->
    <!-- ABA PARA REALIZAR CADASTRO DE VENDAS  -->
    <div id="formOcorrencia" class="">
        <div class="card border border-dark rounded-bottom">
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

    <!-- ABA ONDE MOSTRA AS VENDAS -->
    <div id="vendas" class="d-none">
        <div class="card border border-dark rounded-bottom">
            <div class="card-body">
                <div id="infLocal" class=" col-12 px-0"></div>
                <!-- PAINEL DE PESQUISA -->

                <div class="card border border-dark rounded-bottom">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="form-group col" id='nrOM'>
                                <div class="input-group ">
                                    <span class="input-group-text bg-dark text-light" id="spanNroOM">MATERIAL:</span>
                                    <input type="number" class="form-control" id="inpNroOM" name="inpNroOM" aria-describedby="spanNroOM">
                                </div>
                            </div>
                            <div class="form-group col" id="maquina">
                                <div class="input-group ">
                                    <span class="input-group-text bg-dark text-light" id="spanNroMaquina">VENDEDOR:</span>
                                    <input type="number" class="form-control" id="inpNroMaqui" name="inpNroMaqui" aria-describedby="spanNroMaquina">
                                </div>
                            </div>
                            <div class="form-group col" id="solicitante">
                                <div class="input-group">
                                    <span class="input-group-text bg-dark text-light" id="spanSolicitante">CÓD. VENDA</span>
                                    <input type="number" class="form-control" id="inpBusSolicitante" name="inpBusSolicitante" aria-describedby="spanSolicitante">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col" id="solicitante">
                                <div class="input-group">
                                    <span class="input-group-text text-uppercase bg-dark text-light" id="spanDtIni">DATA INICIO</span>
                                    <input type="date" class="form-control" name="dataIni" id="dataIni">
                                </div>
                            </div>

                            <div class="form-group col" id="solicitante">
                                <div class="input-group">
                                    <span class="input-group-text text-uppercase bg-dark text-light" id="spanDtFinal">DATA FINAL</span>
                                    <input type="date" class="form-control" name="dataFim" id="dataFim">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col">
                                <button class="btn btn-primary col-12" id="btnBuscaOcorremcia">BUSCAR <i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group col">
                                <button class="btn btn-warning col-12" id="btnLimparOcorrencia">LIMPAR <i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-round-corner table-hover text-center" id="tableVendas" data-toggle="table" data-pagination="true" data-mobile-responsive="true" data-page-list="[10, 25, 50, 100, all]" data-pagination="true" data-detail-view="true" data-detail-formatter="detailFormatter" data-url="<?php echo base_url('/Vendas/movVendas'); ?>">
                        <thead class="bg-dark rounded text-uppercase text-white">
                            <tr>
                                <th data-halign="center" data-align="center" data-field="" class="text-uppercase">VENDA</th>
                                <th data-halign="center" data-align="center" data-field="" class="text-uppercase">QTDE.</th>
                                <th data-halign="center" data-align="center" data-field="" class="text-uppercase">MATERIAL</th>
                                <th data-halign="center" data-align="center" data-field="" class="text-uppercase">DESCRIÇÃO</th>
                                <th data-halign="center" data-align="center" data-field="" class="text-uppercase">MÉTODO</th>
                                <th data-halign="center" data-align="center" data-field="" class="text-uppercase">VENDEDOR</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------- -->

</div>

<script>
    function btnCadasVendas() {
        $('#formOcorrencia').removeClass('d-none');
        $('#ocorrenciaTab').addClass("border border-dark");
        $('#ocorrenciaTab').addClass("bg-dark text-white");
        $('#SoliTab').removeClass("border border-dark");
        $('#SoliTab').removeClass("bg-dark text-white");
        $('#vendas').addClass('d-none');
    }
    //////////////////////////////////////////////////

    ///////////////////////////////////////////////////////
    // EXIBI AS TABELAS COM TODAS AS OCORRÊNCIAS ATIVAS. //
    ///////////////////////////////////////////////////////
    function Vendas() {
        $('#vendas').removeClass('d-none');
        $('#SoliTab').addClass("border border-dark bg-dark text-white");
        $('#ocorrenciaTab').removeClass("border border-dark bg-dark text-white");
        $('#formOcorrencia').addClass('d-none');
    }
    /////////////////////////////////////////////////////////

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
            url: base_url + "/Vendas/cadasVendas",
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
                        imageUrl: base_url + "/img/check.gif",
                        showConfirmButton: false
                    });
                } else {
                    swal({
                        timer: 3000,
                        title: "Erro!",
                        text: "Não foi possível realizar sua venda, verifique.",
                        imageUrl: base_url + "/img/erro.gif",
                        showConfirmButton: false
                    });
                }
            }
        });
    }
    /////////////////////////////////////////////////////////
</script>