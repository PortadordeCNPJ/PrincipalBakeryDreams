<?php
session_start();

$funcao = $_GET["funcao"];

switch ($funcao) {
    case 'salvarCarrinho':
        salvarCarrinho();


        break;

    default:
       
        break;
}

function salvarCarrinho()
{


    $id = $_POST["id"];
    $qnt = $_POST["qnt"];


    // $PChocolateLeite = $_POST["boloPChocolateAoLeite"];
    // $contPChocolateAoLeite = $_POST["contPChocolateAoLeite"];


    // $boloDeMorangos = $_POST["boloDeMorango"];
    // $contBoloMorango = $_POST["contBoloMorango"];

    // $bolodePNinhoNutellas = $_POST["bolodePNinhoNutella"];
    // $contPNinhoNutella = $_POST["contPNinhoNutella"];


    // $canudoDoceDeLeites = $_POST["canudoDoceDeLeite"];
    // $contCanudoDeLeite = $_POST["contCanudoDeLeite"];


    // $boloDeChocolates = $_POST["boloDeChocolate"];
    // $contBoloChocolate = $_POST["contBoloChocolate"];


    // $canudoNinhoNutellas = $_POST["canudoNinhoNutella"];
    // $contCanudoNinhoNut = $_POST["contCanudoNinhoNut"];

    $carrinho = array();

    if (!empty($_SESSION["carrinho"] )) {
        $carrinho = json_decode($_SESSION["carrinho"]);
    }

    if (!empty($id) && !empty($qnt)) {
        $elementoRetornado = findObjectById($carrinho, $id);
        if (!empty($elementoRetornado) && $elementoRetornado) {
            $elementoRetornado->cont += $qnt;
        } else {
            $bolo4LeitesObj = new stdClass();
            $bolo4LeitesObj->id = $id;
            $bolo4LeitesObj->cont = $qnt;

            array_push($carrinho, $bolo4LeitesObj);
        }
    }
    // print "ola4";
    // if (!empty($boloPChocolate) && !empty($contPChocolateAoLeite)) {

    //     $elementoRetornado = findObjectById($carrinho, $PChocolateLeite);
    //     if (!empty($elementoRetornado) && $elementoRetornado) {
    //         $elementoRetornado->cont += $contPChocolateAoLeite;
    //     } else {
    //         $boloPChocolateObj = new stdClass();
    //         $boloPChocolateObj->id = $PChocolateLeite;
    //         $boloPChocolateObj->cont = $contPChocolateAoLeite;

    //         array_push($carrinho, $boloPChocolateObj);
    //     }
    // }

    // if (!empty($boloDeMorango) && !empty($contBoloMorango)) {

    //     $elementoRetornado = findObjectById($carrinho, $boloDeMorangos);
    //     if (!empty($elementoRetornado) && $elementoRetornado) {
    //         $elementoRetornado->cont += $contBoloMorango;
    //     } else {
    //         $boloDeMorangoObj = new stdClass();
    //         $boloDeMorangoObj->id = $boloDeMorangos;
    //         $boloDeMorangoObj->cont = $contBoloMorango;

    //         array_push($carrinho, $boloDeMorangoObj);
    //     }
    // }

    // if (!empty($boloPNinhoNutellas) && !empty($contPNinhoNutella)) {

    //     $elementoRetornado = findObjectById($carrinho, $bolodePNinhoNutellas);
    //     if (!empty($elementoRetornado) && $elementoRetornado) {
    //         $elementoRetornado->cont += $contPNinhoNutella;
    //     } else {
    //         $boloPNinhoNutellasObj = new stdClass();
    //         $boloPNinhoNutellasObj->id = $bolodePNinhoNutellas;
    //         $boloPNinhoNutellasObj->cont = $contPNinhoNutella;

    //         array_push($carrinho, $boloPNinhoNutellasObj);
    //     }
    // }

    // if (!empty($canudoDoceDeLeites) && !empty($contCanudoDeLeite)) {


    //     $elementoRetornado = findObjectById($carrinho, $canudoDoceDeLeites);
    //     if (!empty($elementoRetornado) && $elementoRetornado) {
    //         $elementoRetornado->cont += $contCanudoDeLeite;
    //     } else {
    //         $canudoDoceDeLeitesObj = new stdClass();
    //         $canudoDoceDeLeitesObj->id = $canudoDoceDeLeites;
    //         $canudoDoceDeLeitesObj->cont = $contCanudoDeLeite;

    //         array_push($carrinho, $canudoDoceDeLeitesObj);
    //     }
    // }

    // if (!empty($boloChocolate) && !empty($contBoloChocolate)) {

        

    //     $elementoRetornado = findObjectById($carrinho, $boloDeChocolates);
    //     if (!empty($elementoRetornado) && $elementoRetornado) {
    //         $elementoRetornado->cont += $$contBoloChocolate;
    //     } else {
    //         $boloChocolateObj = new stdClass();
    //     $boloChocolateObj->id = $boloDeChocolates;
    //     $boloChocolateObj->cont = $contBoloChocolate;

    //     array_push($carrinho, $boloChocolateObj);
    //     }

    // }

    // if (!empty($canudoNinhoNut) && !empty($contCanudoNinhoNut)) {

    //     $elementoRetornado = findObjectById($carrinho, $canudoNinhoNutellas);
    //     if (!empty($elementoRetornado) && $elementoRetornado) {
    //         $elementoRetornado->cont += $contCanudoNinhoNut;
    //     } else {
    //         $canudoNinhoNutObj = new stdClass();
    //         $canudoNinhoNutObj->id = $canudoNinhoNutellas;
    //         $canudoNinhoNutObj->cont = $contCanudoNinhoNut;

    //         array_push($carrinho, $canudoNinhoNutObj);
    //     }

    // }

    $carrinhoJson = json_encode($carrinho);

    $_SESSION["carrinho"] = $carrinhoJson;


    print "" . $carrinhoJson . "";
}

function findObjectById($array, $id)
{
    foreach ($array as $element) {
        if ($id == $element->id) {
            return $element;
        }
    }

    return false;
}
