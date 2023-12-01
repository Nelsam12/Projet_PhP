<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire Demande</title>
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <div class="container_3">
        <a href="../public/index.php" class="btn_back"> <img src="../public/img/back.png" >Retour</a>
        <form action="">
            <h3>Faire Une Demande</h3>
            <div class="content">
                <div class="type_2">
                    <label for="type">Type</label>
                    <select name="type" id="type">
                        <option value="defaut"> --choose an option-- </option>
                        <option value="cancel">Annulation inscription</option>
                        <option value="suspend">Suspension inscription</option>
                    </select>
                </div>
                <div class="motif">
                    <label for="motif">Motif</label>
                    <input type="text">
                </div>
                <div class="date">
                    <label for="date">Date</label>
                    <input type="date" name="date">
                </div>
            </div>
            <div class="controls">
                <input type="reset" value="Annuler">
                <input type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</body>

</html>