<ul class="messages list-unstyled" id="messages">
    <li class="message me media">
        <div class="avatar float-left">
            <img src="" class="avatar rounded-circle img-thumbnail"/>
        </div>
        <div class="media-body">
            <small class="infos"></small>
            <div class="speech bg-primary text-right text-light">
            </div>
        </div>
    </li>

    <li class="message not-me media">
        <div class="media-body text-right">
            <small class="infos"></small>
            <div class="speech bg-secondary text-left">
            </div>
        </div>
        <div class="avatar float-right">
            <img src="" class="avatar rounded-circle img-thumbnail"/>
        </div>
    </li>
</ul>
<nav class="navbar navbar-dark bg-primary fixed-bottom">
    <div class="container-fluid">
        <form class="message-form" name="post-message">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Message" aria-label="Message" name="message">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-paper-plane"></i></button>
                </div>
            </div>
            <input type="hidden" name="_token" value="<?= $token ?>" />
        </form>
    </div>
</nav>