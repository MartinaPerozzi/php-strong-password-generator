<?php 
// Funzione che genera la password randomica
function generatePassword ($number){
    // Caratteri disponibili per generare la password randomica
    $characters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?.&%-_@#*";
    // Creo una variabile vuota dove mettere il risultato
    $password= null;

    for ($i=0; $i <$number; $i++){
        // Crea una password randomica da 0 alla lunghezza di $characters (tipo un indice- mi da un numero x compreso)
        $random_pass= rand(0, strlen($characters));
        // var_dump("questo è l'indice" . $random_pass);
        
        // Metti nella variabile creata in precedenza, ad ogni ciclo, un carattere randomico selezionato nella stringa (il numero x)
        $password .= $characters[$random_pass];
    }
    // Returnami la password
    return $password;
};
// var_dump (generatePassword($number));

?>