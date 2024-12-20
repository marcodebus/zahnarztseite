<?php

include 'templates/header.php';

$comments = app('comment')->getComments();
?>
        
<div class="row">
    <?php
        // Include sidebar template
        // and set active page to "home".
        $sidebarActive = 'home';
        require 'templates/sidebar.php';
    ?>

    <div class="col-md-9 col-lg-10">

        <h3 class="mb-4 page-header">
            <?= trans('comments_wall') ?>
            <small class="text-muted text-small"><?= trans('last_7_posts') ?></small>
        </h3>

        <!-- start: Comments List -->
        <div id="comment-list">
            <?php foreach ($comments as $comment) : ?>
                 <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                    <p class="mb-2">
                        <?= e($comment['comment']) ?>
                    </p>
                    <footer class="blockquote-footer">
                        <strong><?= e($comment['posted_by_name'])  ?></strong>
                        <em><?= trans('at') . " " . $comment['post_time'] ?></em>
                    </footer>
                </blockquote>
            <?php endforeach; ?>
        </div>
        <!-- end: Comments List -->

        <!-- start: Leave Comment Section -->
        <?php if (app('current_user')->role != 'user') : ?>
            <form id="new-comment-form" class="mt-5">
                <div class="form-group">
                    <h5><?= trans('leave_comment'); ?></h5>
                    <textarea class="form-control" name="comment" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="btn-comment" type="submit">
                        <i class="fa fa-comment"></i>
                        <?= trans('comment'); ?>
                    </button>
                </div>
            </form>
        <?php else : ?>
            <p><?= trans('you_cant_post'); ?></p>
        <?php endif; ?>
        <!-- end: Leave Comment Section -->

    </div>
</div>

    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/app/index.js"></script>
  </body>
</html>
