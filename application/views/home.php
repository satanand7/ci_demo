<section class="content">

  <div class="row">
    <div class="col-md-3">
        <?php
           $this->load->view("includes/profile");
        ?>
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-12">
          <?= showAlert($this->session->flashdata("error"), 'error') ?>
          <?= showAlert($this->session->flashdata("success"), 'success') ?>
        </div>
      </div>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#points" data-toggle="tab">Points</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="points">
            <!-- add post  -->
            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="<?=$this->session->userdata("profile_image")? base_url("uploads/profile_images/").$this->session->userdata("profile_image") :base_url("assets/dist/img/user1-128x128.jpg") ?>" alt="user image">
                <span class="username">
                  <form action="<?= site_url("post/addPost") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea name="newpost" id="newpost" rows="3" class="form-control" placeholder="Add you point here..."></textarea>
                    </div>
                    <!-- show slected image Preview -->
                    <div class="row">
                      <div class="col-md-12 gallery">
                        <input type="file" multiple name="files[]" id="file_upload" style="display: none;">
                      </div>
                    </div>
                    <!-- show slected image Preview -->
                    <div class="form-group">
                      <!-- label for select images -->
                      <label for="file_upload">
                        <i class="fa fa-camera"></i>
                      </label>
                      <!-- label for select images -->
                      <!-- post point button  -->
                      <button type="submit" class="btn pull-right btn-primary">Post point</button>
                      <!-- post point button  -->
                      <!-- privacy policy dropdown requried dist/js/script.js and dist/css/style.css  -->

                      <div class="btn-group pull-right">
                        &nbsp; &nbsp;
                        <button type="button" class="btn btn-primary" id="post-privacy-button"> <i class="fa fa-globe"></i> Public</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu post-privacy-Dropdown-menu" role="menu">
                          <li>
                            <input type="radio" name="post_privacy" id="public" value="1" checked>
                            <label for="public"><i class="fa fa-fw fa-check"></i> <i class="fa fa-globe"></i>
                              Public
                              <p>Every one can see your points</p>
                            </label>
                          </li>
                          <li> <input type="radio" name="post_privacy" id="friends" value="2">
                            <label for="friends"> <i class="fa fa-fw fa-check"></i>
                              <i class="fa fa-users"></i>Friends
                              <p>Every one can see your points</p>
                            </label>
                          </li>
                          <li><input type="radio" name="post_privacy" id="only_me" value="3"><label for="only_me">
                              <i class="fa fa-fw fa-check"></i>
                              <i class="fa fa-lock"></i> Only me
                              <p>Only you can see your point</p>
                            </label>

                          </li>
                        </ul>
                      </div>
                      <!-- privacy policy dropdown requried dist/js/script.js and dist/css/style.css  -->
                    </div>
                  </form>
                </span>
              </div>
              <!-- /.user-block -->
            </div>
            <!-- add post  -->
            <!-- Post -->
            <?php
              foreach ($post_list as $key => $post) {
                ?>
                
                <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="<?=$post["profile_image"]?base_url("uploads/profile_images/").$post["profile_image"]:base_url("assets/dist/img/user1-128x128.jpg") ?>" alt="user image">
                <span class="username">
                  <a href="#"><?=$post["first_name"]?> <?=$post["last_name"]?></a>
                  <a href="<?=site_url("post/deletePost/")?><?=$post["id"]?>" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                </span>
                <?php
                switch ($post["post_privacy"]) {
                  case '1':
                    $privacy = "Shared publicly"; 
                    break;
                  case '2':
                    $privacy = "Shared with Friends";
                    break;
                  case '3':
                    $privacy = "Only me";
                    break;  
                  default:
                    $privacy = "Shared publicly"; 
                    break;
                }
                
                ?>
                  
                <span class="description"><?=$privacy?> - <?=Date("d-M-Y h:i a",strtotime($post["created_at"]))?></span>
              </div>
              <!-- /.user-block -->
              <p>
                <?=$post["post"]?>
              </p>
              <?=$controller->showPostImages($post["id"])?>
              
              <?= $controller->showPostCount($post["id"])?>

              <?=$controller->showPostComments($post["id"])?>
              



              <form action="<?=site_url("post/addCommentOnPost")?>" method="post">
                  <input type="hidden" name="post_id" value="<?=$post["id"]?>">
                  <input name="comment" class="form-control input-sm" type="text" placeholder="Type a comment">
              </form>    
            </div>
                
                
                <?php
              }
            
            
            ?>  

          </div>
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>