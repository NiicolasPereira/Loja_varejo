<?php

namespace APP\Controller;

use APP\Model\Provider;
use APP\Model\Address;
use APP\Utils\Redirect;
use APP\Model\Validation;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    // Redirecionar o usuário
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}
//Associação
$cnpj = $_POST["cnpj"];
$providerName = $_POST["providerName"];


$publicPlace = $_POST["publicPlace"];
$streetNumber = $_POST["streetNumber"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

$address = new Address(
    publicPlace: $publicPlace,
    streetNumber: $streetNumber,
    neighborhood: $neighborhood,
    city: $city,
    postalCode: $postalCode
);

//Validação
$error = array();

if (!Validation::validateName($providerName)) {
    array_push($error, "O nome do provedor deve conter mais de 5 caracteres!!!");
}

if (!Validation::validadeCnpj($cnpj)) {
    array_push($error, "O CNPJ do provedor deve conter 14 caracters!!!");
}

if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $provider = new Provider(cnpj: $cnpj, providerName: $providerName, address: $address);
    Redirect::redirect(message: "O provedor $providerName foi cadastrado com sucesso!!!");
}
