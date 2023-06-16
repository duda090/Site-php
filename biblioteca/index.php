<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Inserindo Dados no Banco PHP</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link rel="stylesheet" href="./style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  Bundle Necessário para o BootStrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <!--Popper para Animações com BootStrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--JQUERY para usar o AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    
    <div class="container-fluid bg-dark d-flex flex-column m-auto vh-100">
        <div class="d-flex m-auto flex-column text-center col-sm-12 col-xl-6">
            <label type="text" class="text text-primary fw-bold fs-1 col-4 m-auto mb-3">Biblioteca Pública Municipal</label>
            <div class="container d-flex justify-content-center flex-md-row">
                <img class=" mb-5 img-fluid col-6" src="undraw_Shopping_Bags_yt78.png" alt="">
                <div class="container d-flex justify-content-evenly flex-column">
                    <input type="text" class="form-control form-control-lg" id="floatingInput" placeholder="E-mail:" />
                    <input type="text" class="form-control form-control-lg" id="floatingInput"
                        placeholder="Password:" />
                </div>
            </div>
            <div class="d-flex">
                <label type="text" class="text text-primary fw-bold fs-5 col-4 m-auto mb-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><u>Cadastre-se</u></label>
            </div>
            <div class="d-flex">
                <button type="button" class="btn btn-primary fw-bold fs-5 col-4 m-auto mb-3">LOGIN</button>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-success" id="exampleModalLabel ">Cadastro de Usuário</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
                    </div>

                    <!-- div-->
                    <div class="modal-body "  id="FormCadastro" name="FormCadastro" method="post"  >
                        <form method="POST" >

                            <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-html="true"
                                data-bs-placement="top" title="Digite seu nome.">
                                <input type="text" class="form-control form-control-lg" id="nome" name="nome"
                                placeholder="Digite seu nome" />
                                <label for="floatingInput">Nome:</label>
                            </div>

                            <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Digite seu número de celular">
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="celular" />
                                <label for="floatingPassword">Celular: </label>
                            </div>

                            <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Digite seu e-mail">
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" />
                                <label for="floatingPassword">E-mail: </label>
                            </div>

                            <div class="input-group d-flex justify-content-around">
                                <div class="form-floating mb-3 col-4" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Digite sua senha.">
                                    <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha" />
                                    <label for="floatingPassword">Senha:</label>
                                </div>

                                <div class="form-floating mb-3 col-4" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Confirme sua senha.">
                                    <input type="text" class="form-control" id="confsenha" name="confsenha" placeholder="Senha" />
                                    <label for="floatingPassword">Confirmar Senha:</label>
                                </div>

                            </div>

                            <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Digite sua rua">
                                <input type="text" class="form-control" id="rua" name="rua" placeholder="rua" />
                                <label for="floatingPassword">Rua:</label>
                            </div>

                            <div class="input-group d-flex justify-content-around">
                                <div class="form-floating mb-3 col-4" data-bs-toggle="tooltip" data-bs-placement="top"                                                                
                                    title="Digite seu bairro">
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro" />                                        
                                    <label for="floatingPassword">Bairro:</label>
                                </div>

                                <div class="form-floating mb-3 col-4" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Digite o número da sua casa">
                                    <input type="text" id="numerocasa" class="form-control" id="numero" name="numero" placeholder="Digite o número da sua casa" />
                                    <label for="floatingPassword">N°:</label>
                                </div>
                                                      

                            </div>
                        </form>
                        <div class="modal-footer">                                                                                 
                            <button type="button" id="botaocancelar" class="btn btn-danger fw-bold"
                                data-bs-dismiss="model">Cancelar</button>
                            <button type="button" id="btn_salvar" class="btn btn-primary fw-bold"
                                data-bs-dismiss="model">Salvar</button>
                        </div>
                         <!-- div-->
                        <div id="result"></div>
                  
                </div>
            </div>
        </div>
      
       
    </form>

    <!-- O resultado da busca será renderizado dentro desta div -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


        

    <script>
    // JAVASCRIPT Quando o HTML for lido
    $("document").ready(function() {
        //Quando o Botão btn-salvar  for clicado 
        $("#btn_salvar").click(function(event) {
            // Evita que o formulário faça seu envio normal
            event.preventDefault();
            //Função do Ajax para enviar uma solicitação get
      
            var dados = $('form').serialize();
            var msg = "Salvo com Sucesso " + $('#nome').val();
           // alert(dados);
            $.ajax({

                url: "salvar.php",
                method: "POST",
                async: true,
                data: dados,
                dataType: "json",
                success: $('#result').text(msg),

            });
        });

    });
    </script>

</body>

</html>