<?php

include 'konekcija.php';

$idg = $_GET['id'];

if($idg==='1')
    $najduze_numere = $conn->query('CALL get_numera()');
else
    $najduze_numere = $conn->query('CALL get_album()');

if($najduze_numere->num_rows > 0){ 
    while($row = $najduze_numere->fetch_array() ){ //
        foreach ($row as $key => $value) 
            print($key.': '.$value.' -- '); 
        print('<br>'); 
    } 
}else{
    print('Rezultat upita je prazna tabela'); 
} 
?>