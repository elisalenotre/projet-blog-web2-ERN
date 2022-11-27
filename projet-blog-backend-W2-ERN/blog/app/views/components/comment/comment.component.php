<?
// this is a comment component it will take in argument a $username and a $comment and $sub_comments
// a sub comment is a comment that is a reply to another comment
?>

<div class="comment">
    <p class="comment-author">@<?= $username; ?></p>
    <p class="comment-content">
        <?= $comment; ?>
    </p>
    <div class="sub-comments">
        <h4>Replies :</h4>
        <div class="sub-comments-wrapper">
            <!-- Liste des sous commentaires en utilisant ./comment.php -->
        </div>
        <form method="post" action="#">
            <label for="comment">Reply :</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            <button>Envoyer</button>
        </form>
    </div>