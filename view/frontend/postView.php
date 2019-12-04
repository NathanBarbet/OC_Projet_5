<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['Title']) ?>
                <em>le <?= $post['Date_publish_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post['Content'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['User_ID']) ?></strong> le <?= $comment['Date_publish_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['Content'])) ?></p>
        <?php
        }
        ?>


        <h2>Commentaires</h2>

        <form action="index.php?action=addComment&amp;ID=<?= $post['ID'] ?>" method="post">
          <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
          </div>
          <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
          </div>
          <div>
            <input type="submit" />
          </div>
        </form>

    </body>
</html>
