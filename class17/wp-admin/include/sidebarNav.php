<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="assets/images/admin.png" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Zinnah Ali</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Bagha, Rajshahi
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <?php echo $wpUrl; ?>
                    <li class=""><a href="<?php echo $wpUrl == true ? '' : '../';?>/index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li class=""><a href="<?php echo $wpUrl == true ? '' : '../';?>banners/bannersList.php"><i class="icon-images3"></i> <span>Banners</span></a></li>
                    <li class=""><a href="<?php echo $wpUrl == true ? '' : '../';?>services/servicesList.php"><i class="icon-shutter"></i> <span>Services</span></a></li>
                    <li><a href="<?php echo $wpUrl == true ? '' : '../';?>sections/sectionList.php""><i class="icon-printer"></i> <span>Sections</span></a></li>
                    <li><a href="<?php echo $wpUrl == true ? '' : '../';?>our_project/projectList.php"><i class="icon-portfolio"></i> <span>Our Project</span></a></li>
                    <li><a href="<?php echo $wpUrl == true ? '' : '../';?>our_staff/staffList.php"><i class="icon-users4"></i> <span>Our Staff</span></a></li>
                    <li><a href="<?php echo $wpUrl == true ? '' : '../';?>our_clients/clientsList.php"><i class="icon-collaboration"></i> <span>Our Clients</span></a></li>
                    <li><a href="index.html"><i class="icon-bubbles7"></i> <span>Content Message</span></a></li>

                    <li>
                        <a href=""><i class="icon-pushpin"></i> <span>Category</span></a>
                        <ul>
                            <li><a href="<?php echo $wpUrl == true ? '' : '../';?>categories/categoriesListAdd.php">Add Category</a></li>
                            <li><a href="<?php echo $wpUrl == true ? '' : '../';?>categories/categoriesList.php">Category List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-cogs"></i> <span>Back Office Setup</span></a>
                        <ul>
                            <li><a href="starters/horizontal_nav.html">Horizontal navigation</a></li>
                            <li>
                                <a href="#">3 columns</a>
                                <ul>
                                    <li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
                                    <li><a href="starters/3_col_double.html">Double sidebars</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>