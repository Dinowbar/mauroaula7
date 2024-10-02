<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <form action="salvalivro.php">
	<label for="nome">Titulo:</label>
	<input type="text" name="nome"><br>
	<label for="idioma">Idioma:</label>
	<input type="text" name="idioma"><br>
    <label for="qtpg">Quantia de Paginas:</label>
	<input type="text" name="qtpg"><br>
    <label for="edit">Editora:</label>
	<input type="text" name="edit"><br>
    <label for="dtp">Data de Publicação:</label>
	<input type="date" name="dtp"><br>
    <label for="isbn">ISBN:</label>
	<input type="text" name="isbn"><br>
	<input type="submit">
    </form>
</body>
</html>