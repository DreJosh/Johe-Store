<div class="container-fluid mx-xs-0 mt-5 pt-5">
    <!-- ABA ONDE MOSTRA AS VENDAS -->
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
                <table class="table" id="tableVendas" data-toggle="table" data-pagination="true" data-page-list="[10, 25, 50, 100, all]" data-url="<?php echo base_url('/index.php/Vendas/movVendas'); ?>">
                    <thead class="bg-dark rounded text-uppercase text-white">
                        <tr>
                            <th data-halign="center" data-align="center" data-field="" class="text-uppercase">VENDA</th>
                            <th data-halign="center" data-align="center" data-field="cliente" class="text-uppercase">CLIENTE</th>
                            <th data-halign="center" data-align="center" data-field="qtdeMov" class="text-uppercase">QTDE.</th>
                            <th data-halign="center" data-align="center" data-field="" class="text-uppercase">MATERIAL</th>
                            <th data-halign="center" data-align="center" data-field="dtmov" class="text-uppercase">DT. VENDA</th>
                            <th data-halign="center" data-align="center" data-field="" class="text-uppercase">MÉTODO</th>
                            <th data-halign="center" data-align="center" data-field="func" class="text-uppercase">VENDEDOR</th>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>