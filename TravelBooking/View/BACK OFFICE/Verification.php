<?php
require_once __DIR__ . '/../../Model/TravelOffer.php';
require_once __DIR__ . '/../../Controller/TravelOfferController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['title']) && !empty($_POST['title']) &&
        isset($_POST['destination']) && !empty($_POST['destination']) &&
        isset($_POST['departure']) && !empty($_POST['departure']) &&
        isset($_POST['return']) && !empty($_POST['return']) &&
        isset($_POST['price']) && !empty($_POST['price']) &&
        isset($_POST['category']) && !empty($_POST['category'])
    ) {
        $title = $_POST['title'];
        $destination = $_POST['destination'];
        $departure = $_POST['departure'];
        $return = $_POST['return'];
        $price = (float)$_POST['price'];
        $availability = isset($_POST['availability']) ? true : false;
        $category = $_POST['category'];

        $offer1 = new TravelOffer($title, $destination, $departure, $return, $price, $availability, $category);
//question 4
        echo"avec la methode var_dump";
        var_dump($offer1);
//question 5
        echo "<h2>Informations de l'offre (showTravelOffer) :</h2>";
        $controller = new TravelOfferController();
        $controller->showTravelOffer($offer1);
    } else {
        echo "Verifier si tous les champs sont remplis.";
    }
} else {
    echo "Aucune donnée reçue.";
}

?>