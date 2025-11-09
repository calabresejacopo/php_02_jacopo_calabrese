<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Fabrizio', 'surname' => 'Dorazio', 'gender' => 'M'],
  ['name' => 'Sante', 'surname' => 'Dorazio', 'gender' => 'NB'],
  ['name' => 'Marcella', 'surname' => 'Scarnecchia', 'gender' => 'F'],
];

foreach($users as $user){
    if($user['gender'] === 'M'){
        echo 'Buongiorno Sig.' . " " . $user['name'] . " " . $user['surname'] . "\n";
    }elseif($user['gender'] === 'F'){
        echo 'Buongiorno Sig.ra' . " " . $user['name'] . " " . $user['surname'] . "\n";
    }elseif($user['gender'] === 'NB'){
        echo 'Buongiorno' . " " . $user['name'] . " " . $user['surname'] . "\n";
    }
};

echo $user;