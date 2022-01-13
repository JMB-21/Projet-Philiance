<h1>Liste des documents de la bibliothèque</h1>
<table>
    <thead>
        <th>Id</th>
        <th>Titre</th>
    </thead>
    <tbody>
        <?php foreach( $biblio as $biblio ): ?>
            <tr>                
                <td><?= $biblio['idb']; ?></td>
                <td><?= $biblio['titre']; ?></td>


            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
