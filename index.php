<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Adicionar Cliente</h1>
    <div>
        <form action="Controller/Pacient.php" method="post"></form>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="contact">contact</label>
        <input type="text" name="contact" id="contact">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <button type="submit">Salvar</button>
    </div>
</body>

</html>