<?php
  $settimaGiornataBasket = [ 
    [
      "casa" => "Fortitudo Alessandria",
      "puntiCasa" => 82,
      "ospite" => "Opus Libertas Livorno 1947",
      "puntiOspite" => 106,
    ],
    [
      "casa" => "Mamy Oleggio",
      "puntiCasa" => 59,
      "ospite" => "Umana San Giobbe Chiusi",
      "puntiOspite" => 74,
    ],
    [
      "casa" => "Paffoni Fulgor Omegna",
      "puntiCasa" => 75,
      "ospite" => "All Food Enic Firenze",
      "puntiOspite" => 70,
    ]
  ];

  var_dump($settimaGiornataBasket);

  for ($i=0; $i < count($settimaGiornataBasket); $i++) {
?>
    <p style="font-size: 20px;">
      <?= $settimaGiornataBasket[$i]['casa'] ?> -
      <?= $settimaGiornataBasket[$i]['ospite'] ?> |
      <?= $settimaGiornataBasket[$i]['puntiCasa'] ?> -
      <?= $settimaGiornataBasket[$i]['puntiOspite'] ?>
    </p>
<?php } ?>
