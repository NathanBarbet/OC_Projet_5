<div class="box-comments">
  <div class="title-box-2">
    <h4 class="title-comments title-left">Commentaires</h4>
  </div>
  <ul class="list-comments">
    <?php
    while ($comment = $comments->fetch())
    {
    ?>
    <li>
      <div class="comment-details">
        <h4 class="comment-author"><?= htmlspecialchars($comment['Name']) ?> <?= htmlspecialchars($comment['Firstname']) ?></h4>
        <span><?= $comment['Date_publish_fr'] ?></span>
        <p>
          <?= nl2br(htmlspecialchars($comment['Content'])) ?>
        </p>
      </div>
    </li>
    <?php
    }
    ?>
  </ul>
</div>
