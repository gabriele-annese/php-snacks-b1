<?php

    // Snack 1
    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
    ];

    

?>




<?php
    // Snack 2
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if(strlen($name) > 3  &&
        strpos($mail, '.') !== false && strpos($mail, '@') !== false &&
        !is_int($age)
    ) {
        echo "accesso riuscito";
    }
    else{
        echo "accesso negato";
    }
    echo "<br>"

?>

<?php
// Snack 3
// Creare un array di array. 
// Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [
    '17-12-2021' => [
        [
            'title' => 'post 1',
            'autor' => 'Michele pagani',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'post 2',
            'autor' => 'Michele pagani',
            'text' => 'Testo post 2'
        ],
    ],
    '18-12-2021'  => [
        [
            'title' => 'post 3',
            'autor' => 'Michele pagani',
            'text' => 'Testo post 3'
        ],
    ],
    '19-12-2021'  => [
        [
            'title' => 'post 4',
            'autor' => 'Michele pagani',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'post 5',
            'autor' => 'Michele pagani',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'post 6',
            'autor' => 'Michele pagani',
            'text' => 'Testo post 6'
        ],
    ]
];
    echo var_dump($posts);
   for ($i=0; $i <count($posts) ; $i++) { 
        $data = key($posts);
        echo $data."<br>"."<br>";
   }

?>

<?php
    // Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    $randomNumber = array();
    for ($i=0; $i <= 15; $i++) { 
        $number =rand(0, 100);
        if(! in_array($number, $randomNumber) ){
            $randomNumber[] = $number."<br />";
        }
    }
    print_r($randomNumber)
?>