<?php

$caminhoNovo = "arquivoDeEntrada.fasta";
file_put_contents($caminhoNovo, $_POST["sequencias"]);

$comando = '/usr/bin/mafft --quiet --auto --clustalout --reorder '.$caminhoNovo.' > temporario.aln 2>erros.log';
exec($comando);

echo "<pre>";
echo file_get_contents("temporario.aln");