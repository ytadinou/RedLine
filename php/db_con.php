<?php     //connessione al nostro database
$connessione_al_server=mysql_connect("localhost","root","");  // ip locale, login e password
if(!$connessione_al_server){
die ('Non riesco a connettermi: errore '.mysql_error()); // questo apparirà solo se ci sarà un errore
}

$db_selected=mysql_select_db("ronl",$connessione_al_server); // dove io ho scritto "ronl" andrà inserito il nome del db
if(!$db_selected){
die ('Errore nella selezione del database: errore '.mysql_error()); // se la connessione non andrà a buon fine apparirà questo messaggio
}

?>