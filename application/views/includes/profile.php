 <!-- Profile Image -->
 <div class="box box-primary">
     <div class="box-body box-profile">
         <img class="profile-user-img img-responsive img-circle" src="<?= $this->session->userdata('profile_image') ? base_url('uploads/profile_images/') . $this->session->userdata("profile_image")   : base_url("assets/dist/img/user4-128x128.jpg") ?>" alt="User profile picture">

         <h3 class="profile-username text-center"><?=$this->session->userdata("first_name")?> <?=$this->session->userdata("last_name")?>
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
             <?=$this->session->userdata("education")?>
         </p>

         <hr>

         <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

         <p class="text-muted"><?=$this->session->userdata("address")?></p>

         <hr>

         <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
         <p>
           <?php
            $skillsArray = explode(",",$this->session->userdata("skills"));
            foreach ($skillsArray as $key => $value) {
            ?>
                <span class="label label-primary"><?=$value?></span>
            
            <?php
            }
           ?> 
         
             
             <!-- <span class="label label-success">Coding</span>
             <span class="label label-info">Javascript</span>
             <span class="label label-warning">PHP</span>
             <span class="label label-primary">Node.js</span> -->
         </p>

         <hr>

         <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

         <p><?=$this->session->userdata("notes")?></p>
     </div>
     <!-- /.box-body -->
 </div>
 <!-- /.box -->