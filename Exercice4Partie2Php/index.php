<?php
  $magnitude = 9;
 ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 4 Partie 2 PHP</title>
</head>
<body>
  <h1>Exercice 4 Partie 2 PHP</h1>
  <div class="container">
    <p>
      <?php switch ($magnitude) {
        case 1:
          echo "Micro-séisme impossible à ressentir.";
          break;
        case 2:
          echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
          break;
        case 3:
          echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
          break;
        case 4:
          echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
          break;
        case 5:
          echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
          break;
        case 6:
          echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
          break;
        case 7:
          echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
          break;
        case 8:
          echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
          break;
        case 9:
          echo "Séisme capable de tout détruire sur une très vaste zone.";
          break;
        default:
          echo "Erreur, cette magnitude n'est pas sur l'échelle de Richter";
          break;
      } ?>
    </p>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
