<div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Commentaires</h4>
            </div>
            <ul class="list-comments col-md-12">
              <?php
              foreach ($comments as $data)
              {
              ?>
              <li>
                <div class="comment-details col-md-12">
                  <h4 class="comment-author"><?= htmlspecialchars($data->getName()) ?> <?= htmlspecialchars($data->getFirstname()) ?></h4>
                  <span><?= $data->getDate() ?></span>
                  <p>
                    <?= ($data->getContent()) ?>
                  </p>
                </div>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
