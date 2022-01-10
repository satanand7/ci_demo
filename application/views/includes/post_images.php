<!-- <pre> -->
<?php
// var_dump($post_images);

?>

<div class="row margin-bottom">
    <div class="col-sm-6">
        <?php
        if (isset($post_images[0])) {
        ?>
            <img class="img-responsive" src="<?= base_url("uploads/post_images/" . $post_images[0]['image']) ?>" alt="Photo">
            
            <?php
        }

            ?>
        
    </div>
   
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-6">
            <?php
            if (isset($post_images[1])) {
            ?>
           <img class="img-responsive" src="<?= base_url("uploads/post_images/" . $post_images[1]['image']) ?>" alt="Photo">
            
            <?php
            }

            ?>

                
                <br>
                <?php
            if (isset($post_images[2])) {
            ?>
           <img class="img-responsive" src="<?= base_url("uploads/post_images/" . $post_images[2]['image']) ?>" alt="Photo">
            
            <?php
            }

            ?>


               
            </div>

            <div class="col-sm-6">
            <?php
            if (isset($post_images[3])) {
            ?>
           <img class="img-responsive" src="<?= base_url("uploads/post_images/" . $post_images[3]['image']) ?>" alt="Photo">
            
            <?php
            }

            ?>

                
                <br>
                <?php
            if (isset($post_images[4])) {
            ?>
           <img class="img-responsive" src="<?= base_url("uploads/post_images/" . $post_images[4]['image']) ?>" alt="Photo">
            
            <?php
            }

            ?>


               
            </div>
           
        
            
        </div>
        
    </div>
    
</div>