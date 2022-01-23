<div class="row">
    <div class="col-md-3">
        <?php
        $this->load->view("includes/profile");
        ?>

    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Search result</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <form action="<?= site_url("home/searchUser") ?>" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="query" value="<?= $query ?>" class="form-control" placeholder="Seach any thing...">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->

        <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <div class="row">
                    <?php foreach ($users as $key => $user) {
                    ?>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="<?= $user["profile_image"] ? base_url("uploads/profile_images/") . $user["profile_image"] : base_url("assets/dist/img/user7-128x128.jpg") ?>" alt="User Image">
                                    <span class="username">
                                        <a href="#"><?= $user["first_name"] ?> <?= $user["last_name"] ?></a>
                                    </span>
                                    <span class="description"><?= $user["education"] ? $user["education"] : "N/A" ?></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <?php
                                    if ($user["status"] == "0") {
                                    ?>
                                        <?php
                                        if($user["from_user_id"]== $this->session->userdata("id")){
                                            ?>
                                             <a href="<?= site_url("home/addNewFriend/") ?><?= $user["id"] ?>" class="btn btn-primary">Cancel Request</a>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                            
                                            <?php
                                        }else{
                                            
                                        }
                                        
                                        ?>

                                       
                                       
                                    <?php
                                    }else{
                                        ?>
                                        <a href="<?= site_url("home/addNewFriend/") ?><?= $user["id"] ?>" class="btn btn-primary">Add as a friend</a>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Cancel Friend Request</a>
                                    </div>
                                        
                                        
                                        <?php
                                    }

                                    ?>
                                    
                                </div>
                            </div>
                        </div>

                    <?php
                    } ?>




                </div>
            </div>
        </div>

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->