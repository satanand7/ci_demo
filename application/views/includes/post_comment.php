<div class="box-footer box-comments">
    <?php
    foreach ($post_comments as $key => $comment) {
    ?>

        <div class="box-comment">
            <!-- User image -->
            <img class="img-circle img-sm" src="<?=$comment["profile_image"]? base_url("uploads/profile_images/").$comment["profile_image"] :base_url('assets/dist/img/user3-128x128.jpg') ?>" alt="User Image">

            <div class="comment-text">
                <span class="username">
                    <?=$comment["first_name"]?> <?=$comment["last_name"]?>
                    <span class="text-muted pull-right"><?=date("d-M-Y h:m A",strtotime($comment["created_at"]))?></span>
                </span><!-- /.username -->
                <?=$comment["comment"]?>
            </div>
            <!-- /.comment-text -->
        </div>


    <?php
    }

    ?>



</div>