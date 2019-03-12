<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php" class="<?php if ($checkActive == 'index') {
                               echo 'active';
                            } ?>"><i class="fa fa-dashboard fa-fw"></i> Tổng Quan</a>
                        </li>
                       
                        
                        
                        <li>
                            <a href="#">    &nbsp;<i class="fa fa-user"></i> &nbsp;Nhân Viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="nhanvien-list.php" class="<?php if ($checkActive == 'nhanvien-list') {
                               echo 'active';
                            } ?>">Danh sách nhân viên</a>
                                </li>
                                <li>
                                    <a href="add-nhanvien.php" class="<?php if ($checkActive == 'add-nhanvien') {
                               echo 'active';
                            } ?>">Thêm nhân viên</a>
                                </li>
                                <li>
                                    <a href="#">Khóa Nhân viên <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">    &nbsp;<i class="fa fa-book"></i> &nbsp;Thiết Bị <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Loại Thiết Bị <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="danhmuc-thietbi.php" class="<?php if ($checkActive == 'danhmuc-thietbi') {
                               echo 'active';
                            } ?>">Danh Mục</a>
                                        </li>
                                        <li>
                                            <a href="danhmuc-add.php" class="<?php if ($checkActive == 'danhmuc-add') {
                               echo 'active';
                            } ?>" >Thêm Danh Mục</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Thiết bị <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Danh sách thiết bị</a>
                                        </li>
                                        <li>
                                            <a href="#">Thêm Mới Thiết bị</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->