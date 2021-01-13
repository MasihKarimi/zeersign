
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
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
                            <div class="page-title">Add Article</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;
                                <a class="parent-item" href="{{url('dashboard')}}">Home</a>&nbsp;
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Article</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active" >Article Form</li>
                        </ol>
                    </div>
                </div>
                <div class="row" style="margin-left: 120px; margin-right: 120px;">

                    <div class="col-md-12 col-sm-6" >
                        <div class="card card-box">
                            <div class="card-head">
                                <header style="color:#133984  ;">Article Form</header>
                                <button id="panel-button"
                                        class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                        data-upgraded=",MaterialButton">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                    data-mdl-for="panel-button">
                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                    </li>
                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                    </li>
                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                        here</li>
                                </ul>
                            </div>
                            <div class="card-body " id="bar-parent">
                                <form action="{{route('admin.art.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    @if(\LaravelLocalization::getCurrentLocale() == 'ps')
                                    <input name="language" type="hidden" class="form-control" id="simpleFormEmail"
                                               value="Pashto">
                                     @elseif(\LaravelLocalization::getCurrentLocale() == 'en')
                                     <input name="language" type="hidden" class="form-control" id="simpleFormEmail"
                                               value="English">
                                       @else(\LaravelLocalization::getCurrentLocale() == 'fa')        
                                       <input name="language" type="hidden" class="form-control" id="simpleFormEmail"
                                                value="Dari">   
                                       @endif              
                                    <div class="form-group">
                                        <label for="simpleFormEmail"> Name</label>
                                        <input name="name" type="text" class="form-control" id="simpleFormEmail"
                                               placeholder="Article Name ">
                                    </div>
                                    <div class="form-group">
                                            <label class=" control-label">Choose Categories</label>
                                           
                                                <select id="multiple" class="form-control select2-multiple" name="category_id[]" multiple>
                                                 <optgroup label="Category/for Artile">
                                                 @foreach($category as $cate) 
                                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label class=" control-label">Choose Tag</label>
                                           
                                                <select id="multiple" class="form-control select2-multiple" name="tag_id[]" multiple>
                                                 <optgroup label="Tag/for Article">
                                                 @foreach($tags as $tag) 
                                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                        
                                        </div>
                                    
                                        <div class="form-group">
                                            <label class=" control-label"> Author</label>
                                           
                                                <select class="form-control select2-multiple" name="author_id" >
                                                       <option value="0"> Choose Author</option>
                                                       @foreach($author as $aut) 
                                                        <option value="{{$aut->id}}">{{$aut->name}}</option>
                                                        @endforeach
                                                </select>
                                        
                                        </div>
                                    <div class="form-group">
                                        <label for="simpleFormEmail"> Image</label>
                                        <input type="file" class="form-control" name="image" id="simpleFormEmail"
                                               placeholder=" Article Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="simpleFormPassword">Detail</label>
                                        <textarea name="detail" id="summernote" cols="30" rows="10"></textarea>
                                    </div>
                                    <button style="width: 90px; height: 40px; margin-left: 330px; " type="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
   @include('admin.layout.footer')
    <!-- end footer -->
</div>
<!-- start js include path -->

@include('admin.layout.scripts')
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/layouts_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 15:09:49 GMT -->
</html>
