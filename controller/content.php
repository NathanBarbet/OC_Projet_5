<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['Title']) ?>
            <em>le <?= $data['Date_publish_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['Content'])) ?>
            <br />
            <em><a href="post.php?id=<?= $data['ID'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
