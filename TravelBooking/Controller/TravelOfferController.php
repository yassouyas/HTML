<?php
require_once 'C:/xampp/htdocs/TravelBooking/Model/TravelOffer.php';

class TravelOfferController{


    //methodes
    public function showTravelOffer($offer){
        if($offer instanceof TravelOffer){
            $offer->show();
}
}
}

?>