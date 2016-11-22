  <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="background: #eef1f5">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#">General</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Search</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-shield"></i> Another action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> Something else here</a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bag"></i> Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Search Video
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="search-page search-content-3">
                            <div class="row">
                                <form action="" method="post">
                                <div class="col-lg-12">
                                    <div class="search-filter ">
                                        <div class="search-label uppercase">Search By</div>
                                        <div class="input-icon right">
                                            <i class="icon-magnifier"></i>
                                            <input type="text" name="search_name" class="form-control" placeholder="Filter by keywords"> </div>
                                        <div class="search-label uppercase">Sort By</div>
                                        <select class="form-control" name="type">
                                            <option>Video</option>
                                            <option>Channel</option>
                                            <option>Playlist</option>
                                        </select>

                                        <input type="submit" name="search" class="btn green bold uppercase btn-block" value="Update Search Results">
                                        <div class="search-filter-divider bg-grey-steel"></div>
                                    </div>
                                </div>
                                </form>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <?php foreach($videos as $key => $value) { ?>
                                        <div class="col-md-3">
                                            <div class="tile-container">
                                                <div class="tile-thumbnail">
                                                    <a href="https://www.youtube.com/watch?v=<?php echo $value['id'];?>">
                                                        <img src="<?php echo $value['thumbnails']['modelData']['high']['url'];?>" />
                                                    </a>
                                                </div>
                                                <div class="tile-title">
                                                    <h3>
                                                        <a href="https://www.youtube.com/watch?v=<?php echo $value['id'];?>"><?php echo $value['title']?></a>
                                                    </h3>
                                                    <a href="javascript:;">
                                                        <i class="icon-question font-blue"></i>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <i class="icon-plus font-green-meadow"></i>
                                                    </a>
                                                    <div class="tile-desc">
                                                        <p>Activity:
                                                            <a href="javascript:;">Bob Robson</a> -
                                                            <span class="font-grey-salt"><?php echo $value['publishedAt'];?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="search-pagination pagination-rounded">
                                        <ul class="pagination">
                                            <li class="page-active">
                                                <a href="javascript:;"> 1 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 2 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 3 </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> 4 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->