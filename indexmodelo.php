<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Inserindo Dados no Banco PHP</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h5>Inserindo Dados no Banco SQLITE com PHP</h5>
    <form id="FormCadastro" name="FormCadastro" method="post">
        <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" required><br>
        <input type="text" name="telefone" id="telefone" placeholder="Digite seu Telefone" required><br>
        <button id="btn-salvar" name="btn-salvar" class="btn_personalizado">Salvar</button>
    </form><br>
    <!-- O resultado da busca será renderizado dentro desta div -->
    <div id="result"></div>

    <script>
    // JAVASCRIPT Quando o HTML for lido
    $("document").ready(function() {
        //Quando o Botão btn-salvar  for clicado 
        $("#btn-salvar").click(function(event) {
            // Evita que o formulário faça seu envio normal
            event.preventDefault();

            //Função do Ajax para enviar uma solicitação get
            var dados = $('#FormCadastro').serialize();
            var msg = "Salvo com Sucesso " + $('#nome').val()
            $.ajax({

                url: "inserirCliente.php",
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