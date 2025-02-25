<?php
class TravelOffer{
    private int $id;
    private string $titre;
    private string $destination;
    private float $prix;
    private bool $disponible;
    private string $categorie;
    private string $date_depart;
    private string $date_retour;
    //methode
    public function __construct(string $titre,string $destination,string $date_depart,string $date_retour,float $prix,bool $disponible,string $categorie){
        $this->titre = $titre;
        $this->destination = $destination;
          $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
      

    }
    public function show(): void{
        echo"<table border=1px>
        <tr>
        <th>Title</th>
        <th>Destination</th>
        <th>Departure Date</th>
        <th>Return Date</th>
        <th>Price</th>
        <th>Disponibility</th>
        <th>Categorie</th>
        </tr>
        <tr>
        <td>$this->titre</td>
        <td>$this->destination</td>
        <td>$this->date_depart</td>
        <td>$this->date_retour</td>
        <td>$this->prix</td>
        <td>$this->disponible</td>
        <td>$this->categorie</td>
       </tr>
        </table>";
 
    }  public function getId(): int{
        return $this->id;
    }
    public function getTitre(): string{
        return $this->titre;
    }
    public function getDestination(): string{
        return $this->destination;
    }
    public function getPrix(): float{
        return $this->prix;
    }
    public function getdisponible(): bool{
        return $this->disponible;
    }
    public function getCategorie(): string{
        return $this->categorie;
    }
    public function getDateDebut(): string{
        return $this->date_depart;
    }
    public function getDateFin(): string{
        return $this->date_retour;
    }

}






?>