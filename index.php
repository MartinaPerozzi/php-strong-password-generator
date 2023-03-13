<?php 
// Prendi il valore numerico dell'utente (se c'è)
$password_length= $_GET['pass-gen']?? "";
$number = (int)$password_length;
var_dump($number);


function generatePassword ($number){
    // Caratteri disponibili per generare la password randomica
    $characters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?.&%-_";
    // Creo una variabile vuota dove mettere il risultato
    $password= "";

    for ($i=0; $i <$number; $i++){
        // Crea una password randomica da 0 alla lunghezza di $characters.
        $random_pass= rand(0, strlen($characters));
        $password .= $characters[$random_pass];

        return $password;
    }
};
var_dump (generatePassword($number));

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TITLE -->
	<title>Password Generator</title>
	<!-- LINK -->
	<!-- Font -->
	<!-- serif -->

	<!-- sans-serif -->

	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
	<div>
        <h1>Password Generator</h1>
        <form action="" method="GET">
            <label for="pass-gen">Inserisci la lunghezza della password da generare:</label>
            <input type="number" name="pass-gen" id="pass-gen" placeholder="Inserisci un numero" class="border-2" min="0">
            <button type="submit">Send</button>
        </form>
    </div>


</body>

</html>