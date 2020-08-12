<?php


$label = $_FILES["arquivo"]["name"];
$nomeDoArquivo = $_FILES["arquivo"]["tmp_name"];

if (file_exists($nomeDoArquivo)){
    $comando = 'blastn -subject '.$nomeDoArquivo.' -query genebase.fasta -outfmt "6 sstart send"';
    $resultado = exec($comando);
    list ($inicio, $fim) = explode("\t", $resultado);
    $ehReverso = false;

    if ($inicio > $fim){
        $aux = $fim;
        $fim = $inicio;
        $inicio = $aux;
        $ehReverso = true;
    }
    
    $arquivo = fopen($nomeDoArquivo, "r");
    $tudo = "";
    while($linha = fgets($arquivo)){
        if (substr($linha, 0, 1) != ">"){
            $tudo = $tudo . $linha;
        }
    }

    $tudo = str_replace("\n", "", $tudo);
    $tudo = str_replace("\r", "", $tudo);

    $qtdPb = $fim - $inicio;

    echo "<pre>";
    echo ">".$label."\n";
    $sequenciaExtraida = substr($tudo, $inicio-1, $qtdPb);
    $sequenciaExtraida = strtoupper($sequenciaExtraida);

    if ($ehReverso){
        $revCom = "";
        $complemento = [];
        $complemento["A"] = "T";
        $complemento["T"] = "A";
        $complemento["G"] = "C";
        $complemento["C"] = "G";
        for ($i = strlen($sequenciaExtraida)-1; $i>=0; $i--){
            $revCom = $revCom . $complemento[substr($sequenciaExtraida, $i, 1)];
        }

        $sequenciaExtraida = $revCom;
    }


    echo wordwrap($sequenciaExtraida, 60, "\n", true);

    $paraArquivo = ">".$label."\n".wordwrap($sequenciaExtraida, 60, "\n", true);
    file_put_contents("extraidos/".$label, $paraArquivo);
} else {
    echo "Arquivo não encontrado...";
}
