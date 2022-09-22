<?php 
    function escreveHeader($nomePagina){
        echo('
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="author" content="Kaique Souza Santos">
            <title>'.$nomePagina.'</title>
            <style>
                h1 {
                    text-align: center;
                    margin-top: 5px;
                    color: #fff;
                }

                .title-container {
                    padding: 10px;
                    width: 100%;
                    height: 100px;
                    background-color: #00DBDE;
                    background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
                    margin-top: 0;
                    margin-bottom: 35px;
                }

                .title-container p {
                    text-align: center;
                    color: #fff;
                    margin-bottom: 5px;
                }

                h5 {
                    text-align: center;
                }
            </style>
        ');
    }

    function escreveFormulario($metodo, $arquivoEnvio){
        echo('
        <form method="'.$metodo.'" action="'.$arquivoEnvio.'">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="txtNome" id="txtNome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="txtCPF" id="txtCPF" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="dtNascimento" id="dtNascimento" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data da Aplicação</label>
                <input type="date" class="form-control" name="dtAplicacao" id="dtAplicacao" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Dose da Aplicação</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdDose" id="rdDose" value="1">1° Dose<br>
                    <input class="form-check-input" type="radio" name="rdDose" id="rdDose" value="2">2° Dose<br>
                    <input class="form-check-input" type="radio" name="rdDose" id="rdDose" value="3">3° Dose<br>
                    <input class="form-check-input" type="radio" name="rdDose" id="rdDose" value="4">4° Dose<br>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Selecione a UBS de Aplicação</label><br>
                <select class="form-select" name="slUBS" required>
                    <option value="0">Selecione uma UBS</option>
                    <option value="1">UBS Cidade Tiradentes</option>
                    <option value="2">UBS jd. Soares</option>
                    <option value="3">UBS Santa Etelvina</option>
                    <option value="3">UBS Carlos Gentili</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="btnEnviar">Cadastrar</button>
        </form>
        ');
    }
?>