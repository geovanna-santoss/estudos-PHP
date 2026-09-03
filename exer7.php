<form action="" method="GET"> 
    <br>
    <label for="id">Digite o ID do produto:</label> 
    <input type="text" name="id" id="id" required> 
    <br>
    <label for="categoria">Digite a categoria do produto:</label> 
    <input type="text" name="categoria" id="categoria" required> 
    <br>
<button type="submit">Enviar</button> 
</form> 

<?php
$produto = [
    [
        "id" => 15,
        "categoria" => "eletrônicos"
    ],
    [
        "id" => 16,
        "categoria" => "moveis"
    ],
    [
        "id" => 17,
        "categoria" => "roupas"
    ]
];

if (isset($_GET["id"]) && isset($_GET["categoria"])) {
    $id = $_GET["id"];
    $categoria = $_GET["categoria"];
    echo "Produto $id da categoria $categoria";
}
?>
<!-- ENUNCIADO: Explique em um comentário qual é o tipo de estrutura de dados armazenada pela superglobal utilizada. -->
<!-- A estrutura de dados armazenada pela superglobal $_GET é um array associativo, onde o valor da chave corresponde ao nome do parâmetro enviado na URL e o seu valor corresponde ao valor indicado depois do = na URL.  -->
