<?php


//ESTO ES UN CLIENTE HTTP
require "vendor/autoload.php";





$client = new \GuzzleHttp\Client([
    
    'verify'=> false
    ]);
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

echo $response->getStatusCode(); # 200
echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
$users =json_decode ($response->getBody());
$collection = new App\UsersCollection($users);
var_dump($collection);
die;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->email; ?><li>;
    <?php endforeach; ?>

    <?php foreach ($users as $user) : ?>
        <li><?=$user->address->street .", " . $user->address->suite . ", ". $user->address->city . " (". $user->address->zipcode .") " . $user->address->geo->lat ." ". $user->address->geo->lng?><li>;
    
    <?php endforeach; ?>

    </ul>

</body>
</html>
<?php
// que cada usuario me muestre solo el email en html
//https://jsonplaceholder.typicode.com/users

// cuando es un foreach tengo que tomar la variable que quiero $xxx, le tengo que poner un alias $xxx
// ejemplo foreach ($users as $user);
// en este caso como tenia un array lo llame con [] ejemplo
//foreach($users as user) : cierre de etiqueta
// $user['el nombre del lo que quiero del array'];
//los objetos se llaman con la flecha ->
//los array se llaman con []
//street,suit,city,zipcode,geo

?>