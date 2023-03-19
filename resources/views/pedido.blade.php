<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <title>Dan Açaí</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Tela de Pedido -->
    <div id="tela-pedido" class="container" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="text-center titulo">Faça seu pedido</h1>
                <form>
                    <div class="form-group">
                        <label for="tamanho" style="font-weight:bold;">Tamanho:</label>
                        <select class="form-control" id="tamanho" name="tamanho">
                            <option value="300">300 ml - R$ 5,00</option>
                            <option value="500">500 ml - R$ 10,00</option>
                            <option value="700">700 ml - R$ 17,00</option>
                            <option value="1000">1 litro - R$ 35,00</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="subtitulo">
                                <label for="ingredientes">Ingredientes:</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="granola" id="granola"
                                    value="granola">
                                <label class="form-check-label" for="granola">Granola</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pacoca" id="pacoca"
                                    value="pacoca">
                                <label class="form-check-label" for="pacoca">Paçoca</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amendoim" id="amendoim"
                                    value="amendoim">
                                <label class="form-check-label" for="amendoim">Amendoim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uva_passa" id="uva_passa"
                                    value="uva_passa">
                                <label class="form-check-label" for="uva_passa">Uva passa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="leite_em_po" id="leite_em_po"
                                    value="leite_em_po">
                                <label class="form-check-label" for="leite_em_po">Leite em pó</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="confetti_mm" id="confetti_mm"
                                    value="confetti_mm">
                                <label class="form-check-label" for="confetti_mm">Confetti MM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="coco_ralado" id="coco_ralado"
                                    value="coco_ralado">
                                <label class="form-check-label" for="coco_ralado">Coco ralado</label>
                            </div>
                            <div class="subtitulo">
                                <label for="cobertura">Cobertura:</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cobertura" id="leite-condensado"
                                    value="leite-condensado">
                                <label class="form-check-label" for="leite-condensado">
                                    Leite condensado
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cobertura" id="cobertura-chocolate"
                                    value="cobertura-chocolate">
                                <label class="form-check-label" for="cobertura-chocolate">
                                    Cobertura de chocolate
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cobertura" id="cobertura-morango"
                                    value="cobertura-morango">
                                <label class="form-check-label" for="cobertura-morango">
                                    Cobertura de morango
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/acai.png" alt="acai" class="img-fluid">
                        </div>
                    </div>
                    <a type="submit" class="btn btn-primary btn-lg btn-acao" href="/" style="background-color:#ffbdac; color: #FFF; border: none;">Enviar Pedido</a>
                    <a href="/" class="btn btn-secondary btn-lg btn-voltar" style="background-color:#6c757d; color: #FFF; border: none; margin-left: 10px;">Voltar</a>
                </form>
            </div>
        </div>
    </div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>