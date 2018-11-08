<?php if ($user['id'] == $message['sender']) : ?>
    <li class="message me media">
        <div class="avatar float-left">
            <img src="uploads/<?= $message['avatar'] ?>" class="rounded-circle img-thumbnail"/>
        </div>
        <div class="media-body">
            <small class="infos"><?= $message['username'] ?> - <?= date('d/m/Y à H\Hi', $message['date']) ?></small>
            <div class="speech bg-primary text-right text-light">
                <?=$message['content'] ?>
            </div>
        </div>
    </li>
    <?php else: ?>
    <li class="message media">
        <div class="media-body text-right">
            <small><?= $message['username'] ?> - <?= date('d/m/Y à H\Hi', $message['date']) ?></small>
            <div class="speech bg-secondary text-left">
                <?=$message['content'] ?>
            </div>
        </div>
        <div class="avatar float-right">
            <img src="uploads/<?= $message['avatar'] ?>" class="avatar rounded-circle img-thumbnail"/>
        </div>

    </li>
<?php endif; ?>