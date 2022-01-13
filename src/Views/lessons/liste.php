<h1>Liste des leçons</h1>
<table>
    <thead>
        <th>Id</th>
        <th>Libellé</th>
    </thead>
    <tbody>
        <?php foreach( $lessons as $lesson ): ?>
            <tr>
                <td><?= $lesson['id']; ?></td>
                <td><?= $lesson['libelle']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
