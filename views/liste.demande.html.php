<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listes Des Demanes</title>
  <link rel="stylesheet" href="../public/style.css">
</head>

<body>

  <?php
  require_once('../repositories/demande.repository.php');

  // Filtrage côté serveur
  $etatFilter = isset($_GET['etat']) ? $_GET['etat'] : 'all'; //$etatFilter contient la valeur du paramètre 'etat' de l'URL s'il est présent,
  // sinon elle est définie par défaut à 'all'.
  $typeFilter = isset($_GET['type']) ? $_GET['type'] : 'all';

  $filteredDemandes = returnDemands($demandes, $etatFilter, $typeFilter);
  ?>
  <div class="container_2">
    <a href="../public/index.php" class="btn_back"> <img src="../public/img/back.png">Retour</a>
    <div class="filter">
      <div class="etat">
        <label for="etat">Filtrer Par Etat</label>
        <form action="" method="get">
          <select name="etat" id="etat" onchange="this.form.submit()">
            <option value="all" <?php echo ($etatFilter === 'all') ? 'selected' : ''; ?>>Tous</option>
            <option value="encours" <?php echo ($etatFilter === 'encours') ? 'selected' : ''; ?>>Encours</option>
            <option value="refuse" <?php echo ($etatFilter === 'refuse') ? 'selected' : ''; ?>>Refuse</option>
            <option value="accepte" <?php echo ($etatFilter === 'accepte') ? 'selected' : ''; ?>>Accepte</option>
          </select>
        </form>
      </div>
      <div class="type">
        <label for="type">Filtrer Par Type</label>
        <form action="" method="get">
          <select name="type" id="type" onchange="this.form.submit()">
            <option value="all" <?php echo ($typeFilter === 'all') ? 'selected' : ''; ?>>Tous</option>
            <option value="suspension" <?php echo ($typeFilter === 'suspension') ? 'selected' : ''; ?>>Suspension</option>
            <option value="annulation" <?php echo ($typeFilter === 'annulation') ? 'selected' : ''; ?>>Annulation</option>
          </select>
        </form>
      </div>
    </div>
    <table>
      <thead>
        <th>Date</th>
        <th>Type</th>
        <th>Motif</th>
        <th>Etat</th>
      </thead>
      <tbody>
        <?php

        foreach ($filteredDemandes as $demande) {
        ?>
          <tr>
            <td> <?= $demande["date"]["j"] ?>/<?= $demande["date"]["m"] ?>/<?= $demande["date"]["an"] ?></td>
            <td><?= $demande["type"] ?></td>
            <td><?= $demande["motif"] ?></td>
            <td><?= $demande["etat"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>