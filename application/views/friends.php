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
                                <input type="text" class="form-control" placeholder="Search in your frined list...">
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
                    <div class="col-md-6">
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
                            <div class="btn-group pull-right">
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-primary" id="post-privacy-button">
                                    <i class="fa fa-users"></i> Friend</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu post-privacy-Dropdown-menu" role="menu">
                                    <li>
                                        <input type="radio" name="post_privacy" id="public" value="1">
                                        <label for="public"><i class="fa fa-fw fa-check"></i>
                                            Remove
                                            <p>You don't able to see points shared with their friends.
                                            </p>
                                        </label>
                                    </li>
                                    <li> <input type="radio" name="post_privacy" id="friends" value="2">
                                        <label for="friends"> <i class="fa fa-fw fa-check"></i>
                                            <i class="fa fa-lock"></i> Block
                                            <p>You can't see their any points.</p>
                                        </label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
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
                            <div class="btn-group pull-right">
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-primary" id="post-privacy-button">
                                    <i class="fa fa-users"></i> Friend</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu post-privacy-Dropdown-menu" role="menu">
                                    <li>
                                        <input type="radio" name="post_privacy" id="public" value="1">
                                        <label for="public"><i class="fa fa-fw fa-check"></i>
                                            Remove
                                            <p>You don't able to see points shared with their friends.
                                            </p>
                                        </label>
                                    </li>
                                    <li> <input type="radio" name="post_privacy" id="friends" value="2">
                                        <label for="friends"> <i class="fa fa-fw fa-check"></i>
                                            <i class="fa fa-lock"></i> Block
                                            <p>You can't see their any points.</p>
                                        </label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->