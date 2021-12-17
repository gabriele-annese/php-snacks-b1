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
        echo "<h1>Snack 2</h1>";

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
echo "<h1>Snack 3</h1>";

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
?>

<?php
    // Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    echo "<h1>Snack 4</h1>";

    $randomNumber = array();
    for ($i=0; $i < 15; $i++) { 
        $number =rand(0, 100);
        if(! in_array($number, $randomNumber) ){
            $randomNumber[] = $number."<br />";
        }
    }
    print_r($randomNumber).'<br />'
?>

<?php 
    // Snack 5
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $paragrafo = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ';
    echo "<h1>Snack 5</h1><p>$paragrafo</p>";

    echo str_replace(".", "<p></p>", $paragrafo);

?>


<?php 
    // Snack 6
    // Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    echo "<h1>Snack 6</h1>";

    $insegnatiArray =[
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $teachers = $insegnatiArray ['teachers'];
        $pm = $insegnatiArray ['pm'];
        for($i = 0; $i < count($teachers); $i++){
    ?>
        <div class="gray">
            <?php
                echo  $teachers[$i]['name']. " ".$teachers[$i]['lastname'];
            ?>
        </div>
    <?php 
        }
        for ($i=0; $i <count($pm) ; $i++) { 
        ?>
        <div class="box-green">
            <?php
                echo  $pm[$i]['name']. " ".$pm[$i]['lastname'];
            ?>
        </div>
    <?php
        }
    ?>
</body>
<style>
    .gray{
        background-color: gray;
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .box-green{
        background-color: green;
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>
</html>