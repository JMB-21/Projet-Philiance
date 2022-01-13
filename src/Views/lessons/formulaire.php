<?php foreach($messages as $message): ?>
    <p><?= $message; ?>
<?php endforeach; ?>

<form action="" method="POST">
    <label for="libelle">Libellé</label>
    <input type="text" id="libelle" name="libelle" value="">

    <button type="submit">Valider</button>
</form>