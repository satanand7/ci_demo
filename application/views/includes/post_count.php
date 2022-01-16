<ul class="list-inline">
    <li>
        
    
    <?php
        if($is_liked){
            ?>
            <a href="<?= site_url("post/likePost/") . $post_id ?>" data-toggle="tooltip" title="Dislike this post" class="link-black text-sm">
            <b style="color:#3c8dbc;"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</b>
        </a>
            <?php
        }else{
            ?>
            <a href="<?= site_url("post/likePost/") . $post_id ?>" data-toggle="tooltip" title="Like this point" class="link-black text-sm">
           <i class="fa fa-thumbs-o-up margin-r-5"></i> Like
        </a>
            <?php
        }
    
    ?>
</a>
    <li>
        <a href="#" data-toggle="tooltip" title="Share this point to your friends" class="btn btn-social-icon btn-instagram btn-xs" type="button"><i class="fa fa-share margin-r-5"></i></a>
        <a data-toggle="tooltip" title="Share this point to facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sp" class="btn btn-social-icon btn-facebook btn-xs">
            <i class="fa fa-facebook"></i>
        </a>
        <a data-toggle="tooltip" title="Share this point to whatsapp" target="_blank" href="wa://send?text=The text to share!" class="btn btn-social-icon btn-success btn-xs"> <i class="fa fa-fw fa-whatsapp"></i></a>
    </li>
    <li>

        <!-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> -->
    </li>
    </li>
    <li class="pull-right">
        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Likes
            (<?=$like_count?>)</a>
        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
            (<?=$comment_count?>)</a>
    </li>
</ul>