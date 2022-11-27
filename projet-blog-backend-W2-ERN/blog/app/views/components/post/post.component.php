<div class="post">
    <div class="post_content-wrapper">
        <h2 class="post-title"><?= $blogTitle; ?></h2>
        <p class="post-content">
            <?= $blogContent; ?>
        </p>
    </div>
    <p class="post-author">@<?= $username; ?></p>
    <div class="post-comments">
        <h3>Comments :</h3>
        <div class="post_comments-wrapper">
            <!-- Liste des commentaires en utilisant ./comment.php -->
        </div>
        <form method="post" action="#" class="post_create-comment-form">
            <label for="comment">Comment :
                <textarea class="post_create-comment-input" name="comment" id="comment" cols="30" rows="10"></textarea>
            </label>
            <button>Envoyer</button>
        </form>
    </div>
</div>