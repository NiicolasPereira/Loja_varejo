<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Cadastrar Fornecedor</title>
</head>

<body>
    <form action="..//Controller/Provider.php" method="POST">
        <fieldset class="p-4 m-5 border border-purple-700">
            <legend>Cadastre Usuário</legend>
            <section class="columns-2">
                <article class="p-3 justify-evenly">
                    <label for="providerName">Nome do Fornecedor:</label>
                    <input type="text" id="providerName" name="providerName" class="border border-purple-700" required>
                </article>
                <article class="p-3 justify-evenly">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" class="border border-purple-700" required>
                </article>
            </section>
            <fieldset class="p-4 m-5 border border-purple-700">
                <legend>Preencha o endereço</legend>
                <section class="columns-2">
                    <article class="p-3 justify-evenly">
                        <label for="publicPlace">Logradouro:</label>
                        <input type="text" id="publicPlace" name="publicPlace" class="border border-purple-700">
                    </article>
                    <article class="p-3 justify-evenly">
                        <label for="streetNumber">Número:</label>
                        <input type="text" id="streetNumber" name="streetNumber" class="border border-purple-700">
                    </article>
                    <article class="p-3 justify-evenly">
                        <label for="neighborhood">Bairro:</label>
                        <input type="text" id="neighborhood" name="neighborhood" class="border border-purple-700">
                    </article>
                    <article class="p-3 justify-evenly">
                        <label for="city">Cidade:</label>
                        <input type="text" id="city" name="city" class="border border-purple-700">
                    </article>
                    <article class="p-3 justify-evenly">
                        <label for="postalCode">Caixa Postal:</label>
                        <input type="text" id="postalCode" name="postalCode" class="border border-purple-700">
                    </article>
            </fieldset>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-purple-700 rounded">Cadastrar</button>
            </article>
        </fieldset>
    </form>
</body>

</html>