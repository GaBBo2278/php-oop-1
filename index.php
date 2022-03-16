<?php
    class movie {
        //dichiarazione delle variabili di istanza
        public $title;
        public $year;
        public $genre;
        public $lang;
        //funzione di construct
        public function __construct($title, $year, $genre, $lang){
            $this->title = $title;
            $this->controlYear($year);
            $this->genre = $genre;
            $this->lang = $lang;
        }
        //funzione controllo anno
        public function controlYear($year){
            if(is_numeric($year)){
                return $this->year = $year;
            } else{
                return $this->year = "Non Definito";
            }
        }
    }

    //definisco un catologo di film
    $movieCatalog = [
        $batmanBegins = new Movie("Batman Begins",2005,"Inglese","Action"),
        $batmanTheDarkKnight = new Movie("Batman The Dark Knight","","Inglese","Dramatic"),
        $batmanTheDarkKnightRises = new Movie("Batman The Dark Knight Rises",2012,"Inglese","Crime"),
    ];

    //tramite ciclo FOR visualizzo nella pagina le informazioni
    foreach($movieCatalog as $movie){
        echo '<h1> Titolo: '. $movie->title . '</h1>';
        echo '<p> Uscito nel: ' . $movie->year . '</p>';
        echo '<p> Genere: ' . $movie->genre . '</p>';
        echo '<p> Lingua originale: ' . $movie->lang . '</p>';
        

    }
?>