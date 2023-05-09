<!-- Contact-->
<section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contate-nos</h2>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nome Completo *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">O nome é um campo obrigatório</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="E-mail *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">E-mail é um campo obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email invalido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Telefone para contato *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Telefone é um campo obrigatório.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Sua mensagem *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Para contata-nos é preciso colocar uma mensagem.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Formulário enviado!</div>
                        Para ativar este formulário, inscreva-se em
                        <br />
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">ENVIAR</button></div>
            </form>
        </div>
    </section>