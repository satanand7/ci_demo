<section class="content">

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="<?= $this->session->userdata('profile_image') ? base_url('uploads/profile_images/') . $this->session->userdata("profile_image")   : base_url("assets/dist/img/user4-128x128.jpg") ?>" alt="User profile picture">

          <h3 class="profile-username text-center">Nina Mcintire
          </h3>
          <p class="text-center text-muted"><a class="text-center" href="#"><i class="fa fa-circle text-success"></i> Online</a></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul>

          <a href="#" class="btn btn-primary btn-block"><b> <i class="fa fa-fw fa-star"></i> Follow</b></a>
          <a href="#" class="btn btn-primary btn-block"><b><i class="fa fa-fw fa-user-plus"></i> Add as
              friend</b></a>
          <a href="#" class="btn btn-danger btn-block"><b><i class="fa fa-fw fa-ban"></i> Block</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

          <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

          <p class="text-muted">Malibu, California</p>

          <hr>

          <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

          <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
          </p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
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
                <img class="img-circle img-bordered-sm" src="<?= base_url("assets") ?>/dist/img/user1-128x128.jpg" alt="user image">
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
              <ul class="list-inline">
                <li><a href="#" data-toggle="tooltip" title="Like this point" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
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
                    (15)</a>
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                    (5)</a>
                </li>
              </ul>

              <input class="form-control input-sm" type="text" placeholder="Type a comment">
            </div>
                
                
                <?php
              }
            
            
            ?>  



            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="<?= base_url("assets") ?>/dist/img/user1-128x128.jpg" alt="user image">
                <span class="username">
                  <a href="#">Jonathan Burke Jr.</a>
                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                </span>
                <span class="description">Shared publicly - 7:30 PM today</span>
              </div>
              <!-- /.user-block -->
              <p>
                Lorem ipsum represents a long-held tradition for designers,
                typographers and the like. Some people hate it and argue for
                its demise, but others ignore the hate as they create awesome
                tools to help create filler text for everyone from bacon lovers
                to Charlie Sheen fans.
              </p>
              <ul class="list-inline">
                <li><a href="#" data-toggle="tooltip" title="Like this point" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
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
                    (15)</a>
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                    (5)</a>
                </li>
              </ul>

              <input class="form-control input-sm" type="text" placeholder="Type a comment">
            </div>
            <!-- /.post -->
            <!-- Post -->
            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="<?= base_url("assets") ?>/dist/img/user6-128x128.jpg" alt="User Image">
                <span class="username">
                  <a href="#">Adam Jones</a>
                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                </span>
                <span class="description">Posted 5 photos - 5 days ago</span>
              </div>
              <!-- /.user-block -->
              <div class="row margin-bottom">
                <div class="col-sm-6">
                  <img class="img-responsive" src="<?= base_url("assets") ?>/dist/img/photo1.png" alt="Photo">
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?= base_url("assets") ?>/dist/img/photo2.png" alt="Photo">
                      <br>
                      <img class="img-responsive" src="<?= base_url("assets") ?>/dist/img/photo3.jpg" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?= base_url("assets") ?>/dist/img/photo4.jpg" alt="Photo">
                      <br>
                      <img class="img-responsive" src="<?= base_url("assets") ?>/dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <ul class="list-inline">
                <li><a href="#" data-toggle="tooltip" title="Like this point" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
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
                    (15)</a>
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                    (5)</a>
                </li>
              </ul>

              <input class="form-control input-sm" type="text" placeholder="Type a comment">
            </div>
            <!-- /.post -->
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