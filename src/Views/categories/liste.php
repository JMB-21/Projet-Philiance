<h1>Liste des categories</h1>
<table>
    <thead>
        <th>Id</th>
        <th>Libellé</th>
    </thead>
    <tbody>
        <?php foreach( $categories as $categorie ): ?>
            <tr>
                <td><?= $categorie['id']; ?></td>
                <td><?= $categorie['libelle']; ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>