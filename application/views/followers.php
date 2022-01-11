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
                <li class="active"><a href="#settings" data-toggle="tab">Friend list</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <form action="" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search in your followers list...">
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
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                <span class="username">
                                    <a href="#">Sarah Ross</a>
                                </span>
                                <span class="description">Lorem ipsum dolor</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add as friend</button>
                            <button type="button" class="btn btn-danger pull-right"> Remove</button>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user4-128x128.jpg" alt="User Image">
                                <span class="username">
                                    <a href="#">Sarah Ross</a>
                                </span>
                                <span class="description">Lorem ipsum dolor </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add as friend</button>
                            <button type="button" class="btn btn-danger pull-right"> Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->