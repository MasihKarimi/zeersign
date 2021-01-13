<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 15:00:22 GMT -->
@include('admin.layout.head')
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start header -->
   @include('admin.layout.header')
    <!-- end header -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
      @include('admin.layout.sidebar')
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Dashboard</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- start widget -->
                <div class="state-overview">
                    <div class="row">
                        <div class="col-xl-5 col-md-6 col-12" >
                            <div class="info-box bg-blue" style="width: 500px;">
                                <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Courses</span>
                                    <span class="info-box-number">10</span>
                                    <div class="progress">
                                        <div class="progress-bar width-60"></div>
                                    </div>
                                    <span class="progress-description">
											Hour between(45 - 90)
										</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-5 col-md-6 col-12" style="padding-left: 100px;">
                            <div class="info-box bg-orange" style="width: 500px;">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">group</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Teachers</span>
                                    <span class="info-box-number">5</span>
                                    <div class="progress">
                                        <div class="progress-bar width-40"></div>
                                    </div>
                                    <span class="progress-description">
											40% Increase in 28 Days
										</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-5 col-md-6 col-12">
                            <div class="info-box bg-purple" style="width: 500px;">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">group</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Students</span>
                                    <span class="info-box-number">520</span>
                                    <div class="progress">
                                        <div class="progress-bar width-80"></div>
                                    </div>
                                    <span class="progress-description">
											80% Increase in 30 Days
										</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-5 col-md-6 col-12" style="padding-left: 100px;">
                            <div class="info-box bg-success" style="width: 500px;">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">monetization_on</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text"> Blogs</span>
                                    <span class="info-box-number">13,921</span><span>$</span>
                                    <div class="progress">
                                        <div class="progress-bar width-60"></div>
                                    </div>
                                    <span class="progress-description">
											60% Increase in 28 Days
										</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- end widget -->



                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <!-- end page content -->

    </div>
    <!-- end page container -->
    <!-- start footer -->
   @include('admin.layout.footer')
    <!-- end footer -->
</div>
<!-- start js include path -->
@include('admin.layout.scripts')
</body>
</html>
