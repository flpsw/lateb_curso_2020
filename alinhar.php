<h1>Rodando Mafft</h1>

<form action="resultado_mafft.php" method="post"
    enctype="multipart/form-data" >

<textarea name="sequencias" cols="60" rows="20">
<?php

$diretorio = opendir("extraidos");
while($arquivo = readdir($diretorio)){
    if ($arquivo != "." && $arquivo != ".."){
        echo file_get_contents("extraidos/".$arquivo)."\n";
    }
}

?>
</textarea>


 <br>
<input type="submit" />

</form>