<html>
<head>
		<title>Santander</title>
		<style>
            .body{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background: #1C1D2D;
            }
            .button{
                margin-left: 95px;
            }
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;
            margin: 0;
            }
            label{
                color: #ffffff;
            }
            small{
                color: #DCDCDC;
            }
		</style>

</head>
<body>
<div class="body">
    <form method="post">
        <label for="inputValue">Informações Gerais</label>
        <div class="form-row align-items-center">
            <div class="form-group col-auto">
                <input type="number" class="form-control" name="inputValue" placeholder="Valor">
                <small>e.g 300</small>
            </div>
            <div class="form-group col-auto">
                <input type="text" class="form-control" name="inputDate" placeholder="Data">
                <small>e.g 10/01/2022</small>
                <br>
                <input type="time" class="form-control" name="inputHora" placeholder="Horario">
                <small>e.g 10:50</small>
            </div>
        </div>
        <br>
        <label for="inputBancoPagador">Informações do Pagador</label>
        <div class="form-row align-items-center">
            <div class="form-group col-auto">
                <input type="text" class="form-control" name="inputNomePagador" placeholder="Nome">
                <small>e.g JOÃO DA SILVA</small>
            </div>
            <div class="form-group col-auto">
                <input type="text" class="form-control" name="inputCPFPagador" placeholder="CPF ou CNPJ">
                <small>e.g ***.XXX.XXX-** ou XX.XXX.XXX/0001-XX</small>
                <br>
                <input type="text" class="form-control" name="inputpixRecebedor" placeholder="Pix">
                <small>e.g emailpix@gmail.com</small>
            </div>
        </div>
        <br>
        <label for="inputNomeRecebedor">Informações do Recebedor</label>
        <div class="form-row align-items-center">
            <div class="form-group col-auto">
                <input type="text" class="form-control" name="inputNomeRecebedor" placeholder="Nome">
                <small>e.g JOÃO DA SILVA</small>
                <br>
                <input type="text" class="form-control" name="inputCPFRecebedor" placeholder="CPF ou CNPJ">
                <small>e.g ***.XXX.XXX-**</small>
                <input type="text" class="form-control" name="inputBancoRecebedor" placeholder="Banco">
                <small>e.g Nu Pagamentos lp.</small>
            </div>
        </div>
        <div class="button">
            <br>
            <button type="submit" name = "gerar" class="btn btn-primary">Gerar</button>
        </div>
</form>
    <?php
        if(isset($_POST["gerar"])){
            if(isset($_POST["inputValue"])) {
                $_SESSION["valor"] = $_POST["inputValue"];
                $_SESSION["data"] = $_POST["inputDate"];
                $_SESSION["hora"] = $_POST["inputHora"];
                $_SESSION["nomePagador"] = $_POST["inputNomePagador"];
                $_SESSION["CPFPagador"] = $_POST["inputCPFPagador"];
                $_SESSION["pixRecebedor"] = $_POST["inputpixRecebedor"];
                $_SESSION["nomeRecebedor"] = $_POST["inputNomeRecebedor"];
                $_SESSION["bancoRecebedor"] = $_POST["inputBancoRecebedor"];
                $_SESSION["CPFRecebedor"] = $_POST["inputCPFRecebedor"];
                include('../models/santander.php');
            }
        }
    ?>
</div>
</body>
</html>