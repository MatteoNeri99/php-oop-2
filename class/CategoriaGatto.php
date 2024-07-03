<?php 
require_once __DIR__ . "./Prodotti.php";


class ProdottiGatto extends Prodotti{

    protected $titolo;
    protected $prezzo;
    protected $imgUrl;
    protected $descrizione;



    public function __construct($titolo,$prezzo,$imgUrl,$descrizione,$prodotto){
        $this->titolo=$titolo;
        $this->prezzo=$prezzo;
        $this->imgUrl=$imgUrl;
        $this->descrizione=$descrizione;

        parent::__construct($prodotto);
        
    }
}








?>