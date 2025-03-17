<?php
// Recollir les dades del formulari
$nom = $_POST['nom'];
$visa = $_POST['visa'];
$habitacio = $_POST['habitacio'];
$persones = $_POST['persones'];
$nits = $_POST['nits'];

// Preus per nit per persona
$preu_per_nit_b = 40; // Habitació bàsica
$preu_per_nit_s = 50; // Habitació superior

// Calcular el preu sense IVA
if ($habitacio == 'bàsica') {
    $preu_sense_iva = $preu_per_nit_b * $persones * $nits;
} else {
    $preu_sense_iva = $preu_per_nit_s * $persones * $nits;
}

// Calcular IVA (21%)
$iva = $preu_sense_iva * 0.21;

// Calcular preu amb IVA
$preu_amb_iva = $preu_sense_iva + $iva;

?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalls de la Reserva</title>
</head>
<body>
  <h1>Detalls de la Reserva GRUP8 Projecte</h1>
  <p><strong>Nom i Cognoms:</strong> <?php echo $nom; ?></p>
  <p><strong>Número de VISA:</strong> <?php echo $visa; ?></p>
  <p><strong>Preu sense IVA:</strong> €<?php echo number_format($preu_sense_iva, 2); ?></p>
  <p><strong>IVA (21%):</strong> €<?php echo number_format($iva, 2); ?></p>
  <p><strong>Preu amb IVA:</strong> €<?php echo number_format($preu_amb_iva, 2); ?></p>
  <br>
  <a href="index.html">Tornar al formulari</a>
</body>
</html>
