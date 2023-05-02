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
    <!-- ABA PARA REALIZAR UMA SOLICITAÇÃO DE OCORRÊNCIA DE MANUTENÇÃO  -->
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
                                <option value="<?= $value->codigo ?>"><?= $value->codigo ?> - <?= $value->nome ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group col-3 col-sm-12 ">
                        <span class="input-group-text bg-dark text-white" id="spanQtde">QTDE:</span>
                        <input type="text" name="txtQtde" id="txtQtde" class="form-control" aria-describedby="spanQtde">
                    </div>
                    <div class="input-group col-3 col-sm-6">
                        <span class="input-group-text bg-dark text-white" id="spanMaterial">MATERIAL:</span>
                        <input type="number" name="txtMaterial" id="txtMaterials" class="form-control" aria-describedby="spanMaterial">
                    </div>
                    <div class="input-group col-3 col-sm-6">
                        <input type="text" class="form-control text-uppercase " id="inpDescMaterial" name="inpDescMaterial" placeholder="DESCRIÇÃO MATERIAL" aria-label="DESCRIÇÃO MATERIAL" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-md-4 col-sm-6 col-xs-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark text-uppercase  text-light" id="basic-addon1">DATA :</span>
                            </div>
                            <input type="text" class="form-control text-center" id="inpdata" name="inpdata" placeholder="<?= date('d/m/Y') ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <button type="button" class="col-12 btn btn-lg btn-dark" id="btnSolicManut" onclick="cadasVendas()"><i class="fas fa-toolbox"></i> CADASTRAR VENDAS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->

    <!-- ABA ONDE MOSTRA AS SOLICITAÇÕES -->
    <div id="vendas" class="d-none">
        <div class="card border border-dark rounded-bottom">
            <div class="card-body">
                <div id="infLocal" class=" col-12 px-0"></div>
                <!-- PAINEL DE PESQUISA -->
                <div class="d-none" id="painel">
                    <div class="card border border-dark rounded-bottom">
                        <div class="card-body">
                            <div class="row">
                                <input type="text" class="d-none" id="inpVerifica">
                                <div class="form-group col-lg-4 col-sm-6 col-md-12" id='nrOM'>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="spanNroOM">NRO. OM:</span>
                                        </div>
                                        <input type="number" class="form-control" id="inpNroOM" name="inpNroOM" aria-describedby="spanNroOM">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-sm-6 col-md-12" id="maquina">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="spanNroMaquina">NRO. MÁQUINA :</span>
                                        </div>
                                        <input type="number" class="form-control" id="inpNroMaqui" name="inpNroMaqui" aria-describedby="spanNroMaquina">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-sm-6 col-md-12" id="solicitante">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="spanSolicitante">SOLICITANTE :</span>
                                        </div>
                                        <input type="number" class="form-control" id="inpBusSolicitante" name="inpBusSolicitante" aria-describedby="spanSolicitante">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-12" id="solicitante">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-uppercase bg-dark text-light" id="spanDtIni">DATA INICIO</span>
                                        </div>
                                        <input type="date" class="form-control" name="dataIni" id="dataIni">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-12" id="solicitante">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-uppercase bg-dark text-light" id="spanDtFinal">DATA FINAL</span>
                                        </div>
                                        <input type="date" class="form-control" name="dataFim" id="dataFim">
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 col-sm-6 col-md-12 text-right" id="botao">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <button class="btn btn-primary col-12" id="btnBuscaOcorremcia" onclick="busca();">BUSCAR <i class="fas fa-search"></i></button>
                                        </div>
                                        <div class="form-group col-6">
                                            <button class="btn btn-brown col-12" id="btnLimparOcorrencia" onclick="limpar()">LIMPAR <i class="far fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ------------------ -->

                <!-- TABELA ONDE EXIBI TODAS AS OCORRÊNCIAS ATIVAS  -->
                <div id="divOcorrencia" class="d-none">

                    <input type="text" id="local" class="d-none">
                    <button class="btn btn-indigo toolbar mr-2" id="btnMinhaOcorrencia" onclick="">MINHAS OCORRÊNCIAS</button>
                    <button class="btn btn-primary toolbar mr-2" id="btnBuscarOcorr" onclick="$('#painel,#btnFechBuscar').removeClass('d-none'); $('#btnBuscarOcorr').addClass('d-none');$('#botao').removeClass('col-lg-4');$('#botao').addClass('col-lg-12');">BUSCAR <i class="fas fa-search"></i></button>
                    <button type="button" class="btn btn-amber mr-2 toolbar" id="btnVoltar">Voltar <i class="fas fa-undo"></i></button>
                    <button class="btn btn-danger toolbar d-none " id="btnFechBuscar" onclick="$('#painel,#btnFechBuscar').addClass('d-none'); $('#btnBuscarOcorr').removeClass('d-none'); limpar()">FECHA BUSCAR <i class="fas fa-times"></i></button>

                    <table class="table table-bordered table-round-corner table-hover text-center col-12" id="tableOcorrencia" data-toggle="table" data-pagination="true" data-mobile-responsive="true" data-page-list="[10, 25, 50, 100, all]" data-toolbar=".toolbar" data-min-width="1131" data-pagination="true" data-detail-view="true" data-page-size="8" data-buttons-class="btn-dark" data-detail-formatter="detailFormatter" data-url="">
                        <thead class="bg-dark rounded text-uppercase text-white">
                            <tr>
                                <th data-halign="center" data-align="center" data-field="NRO. OM" class="text-uppercase">NÚMERO OM</th>
                                <th data-halign="center" data-align="center" data-field="SOLICITANTE" class="text-uppercase">SOLICITANTE</th>
                                <th data-halign="center" data-align="center" data-field="SETOR" class="text-uppercase">SETOR</th>
                                <th data-halign="center" data-align="center" data-field="MAQUINA" class="text-uppercase">MÁQUINA</th>
                                <th data-halign="center" data-align="center" data-field="DATA-HORA" class="text-uppercase">DATA/HORA</th>
                                <th data-halign="center" data-align="center" data-field="DESCRIÇÃO" class="text-uppercase">DESCRIÇÃO</th>

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
        $('#SoliTab').removeClass("border border-dark");
        $('#Solici,#infLocal').addClass('d-none');
    }
    //////////////////////////////////////////////////

    ///////////////////////////////////////////////////////
    // EXIBI AS TABELAS COM TODAS AS OCORRÊNCIAS ATIVAS. //
    ///////////////////////////////////////////////////////
    function vendas() {
        $("#botao").removeClass('col-4');
        $("#botao").addClass('col-12');
        $('#solicitante,#divOcorrencia,#btnBuscarOcorr').removeClass('d-none');
        $('#inpNroOM,#inpNroMaqui,#inpSolicitante').val('');
        $('#divMiOcorrencia,#painel,#btnFechBuscar').addClass('d-none');
        $("#inpVerifica").val('');
    }
    /////////////////////////////////////////////////////////

    function cadasVendas() {

    }
</script>