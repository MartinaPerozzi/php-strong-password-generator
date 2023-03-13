<?php 
// Prendi il valore numerico dell'utente (se c'è)
$password_length= $_GET['pass-gen']?? "";
$number = (int)$password_length;
// var_dump($number);


// function generatePassword ($number){
//     // Caratteri disponibili per generare la password randomica
//     $characters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?.&%-_@#*";
//     // Creo una variabile vuota dove mettere il risultato
//     $password= null;

//     for ($i=0; $i <$number; $i++){
//         // Crea una password randomica da 0 alla lunghezza di $characters (tipo un indice- mi da un numero x compreso)
//         $random_pass= rand(0, strlen($characters));
//         var_dump("questo è l'indice" . $random_pass);
//         // Metti nella variabile creata in precedenza, ad ogni ciclo, un carattere randomico selezionato nella stringa (il numero x)
//         $password .= $characters[$random_pass];
//     }
//     // Returnami la password
//     return $password;
// };
// var_dump (generatePassword($number));

// MILESTONE 2
include (__DIR__ . '/includes/function.php');
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
	<div class="w-3/5 mx-auto pt-5 flex flex-col items-center">
        <h1 class="text-2xl pb-5">Password Generator</h1>
        <form action="" method="GET">
            <label for="pass-gen">Inserisci la lunghezza della password da generare:</label>
            <input type="number" name="pass-gen" id="pass-gen" placeholder="Inserisci un numero" class="border-2 p-2 rounded-lg" min="0">
            <button type="submit" class="border-2 p-2 rounded-lg mb-5">Send</button>
            <p class="pt-5"><?= "La tua password randomica di $number caratteri è:" . " " ?> <strong class="border-2 p-2 rounded-lg"> <?= generatePassword($number) ?></strong></p>
        </form>
    </div>


</body>

</html>