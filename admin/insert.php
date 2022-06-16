<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <form action="enviar.php" method="post" enctype="multipart/form-data">
                <h1>Inserir</h1>
                <div class="mb-3">
                    <p>Titulo</p>
                    <input type="text" name="title" placeholder="Digite o titulo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <p>Data</p>
                    <input type="date" name="data" class="form-control" required>
                </div>
                <div class="mb-3">
                    <textarea name="description" id="formGroupExampleInput3" cols="30" rows="10" class="form-control" required>Descrição</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Envie imagem</label>
                    <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image">
                </div>
                <div class="col-auto">
                     <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>