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
              <?=showAlert($this->session->flashdata("error"),'error')?>
              <?=showAlert($this->session->flashdata("success"),'success')?>
            </div>
          </div>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <form action="<?=site_url("home/updateProfile")?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">First Name</label>
                
                                    <div class="col-sm-10">
                                      <input type="text" name="first_name" value="<?=set_value('first_name',$userDetails["first_name"])?>" class="form-control" id="inputName" placeholder="First name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
                
                                    <div class="col-sm-10">
                                      <input type="text" value="<?=set_value("last_name",$userDetails["last_name"])?>" name="last_name" class="form-control" id="inputLastName" placeholder="Last name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                
                                    <div class="col-sm-10">
                                      <input readonly type="email" value="<?=set_value('email',$userDetails['email'])?>" name="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputCity" class="col-sm-2 control-label">Current city</label>
                                    <div class="col-sm-10">
                                      <input type="text" value="<?=set_value("address",$userDetails["address"])?>" name="address" class="form-control" id="inputCity" placeholder="Current city">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEducation" class="col-sm-2 control-label">Education</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?=set_value('education',$userDetails['education'])?>" name="education" class="form-control" id="inputEducation" placeholder="Education">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                
                                    <div class="col-sm-10">
                                      <input type="text" value="<?=set_value('skills',$userDetails['skills'])?>" name="skills" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputNotes" class="col-sm-2 control-label">Notes</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" name="notes" id="inputNotes" placeholder="Notes"><?=set_value('notes',$userDetails['notes'])?></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <img id="profileImage" class="profile-user-img img-responsive img-circle" src="<?=$userDetails["profile_image"]? base_url("uploads/profile_images/").$userDetails["profile_image"] :base_url("assets/dist/img/user4-128x128.jpg")?>" alt="User profile picture">
                                <p class="text-center"><label for="profile_image"><i class="fa fa-camera"></i></label>  <input style="display: none;" type="file" name="profile_image" id="profile_image" onchange="document.getElementById('profileImage').src = window.URL.createObjectURL(this.files[0])"></p>
                            </div>
                        </div>
                    </form>
                  </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
