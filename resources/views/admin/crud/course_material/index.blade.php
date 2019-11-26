<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Blogs</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/assets/css/style.css')}}">
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    @include('admin.navbar.topbar')
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @include('admin.navbar.leftbar')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Course Material</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Create, Read & Delete</a>
                                </li>
                                <li class="breadcrumb-item active">Course Material
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!--Grid options-->
                <section id="grid-options" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Course Material</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{route('course_material.save')}}" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-6">

                                            {{--  @include("admin.crud.error")  --}}
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            @if(Session::has('error'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('error') }}
                                                @php
                                                    Session::forget('error');
                                                @endphp
                                            </div>
                                            @endif
                                            @if(Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                                @php
                                                    Session::forget('success');
                                                @endphp
                                            </div>
                                            @endif

                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <h5>Enter Course Theme Name
                                                    <span class="required">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" name="course_material_theme" class="form-control" required=""  placeholder="Enter Course Theme Name" data-validation-required-message="This field is required" aria-invalid="false">
                                                    <div class="help-block"></div>
                                                </div>
                                                <p>
                                                    kindly add the <code>course</code> name you want to create
                                                </p>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <h5>Enter Course Category
                                                    </h5>
                                                    <div class="controls">
                                                        <select class="form-control" id="course_id" name="course_id" >
                                                            <option value="">Select Option</option>
                                                            @foreach ($data as $eachCategory)
                                                            <option value="{{$eachCategory->course_id}}">{{$eachCategory->course_name}}</option>
                                                            @endforeach
                                                            </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <p>
                                                        kindly add the <code>Parent Course Category</code> you want to add
                                                    </p>
                                                </div>

                                            <div class="form-group">
                                                <h5>Enter Course Icon
                                                </h5>
                                                <div class="controls">
                                                    <input type="file" name="course_material_image" class="form-control" placeholder="Font Awesome Icon, For eg(fab fa-laravel)">
                                                    <div class="help-block"></div>
                                                </div>
                                                <p>
                                                    kindly add the <code>course icon</code> if  you want to add
                                                </p>
                                            </div>


                                        </div>

                                        <div class="form-group">
                                            <h5>Enter Course Description
                                                <span class="required">*</span>
                                            </h5>
                                            <div class="controls">
                                                <div class="form-group">
                                                    <textarea name="course_material_content" id="editor" cols="30" rows="10">
                                                    </textarea>
                                                    </div>
                                                </div>
                                            <p>
                                                kindly add the <code>course description</code> you want to create
                                            </p>
                                        </div>
                                        <button type="submit" class="btn btn-primary round btn-min-width mr-1 mb-1">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Auto-layout columns-->


            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include("admin.footer.index")
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>

    <script src="{{asset('app-assets/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/editors/editor-ckeditor.js')}}" type="text/javascript"></script>

    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-sales.js')}}" type="text/javascript"></script>
    <script>
            CKEDITOR.replace('editor', {
                skin: 'moono',
                enterMode: CKEDITOR.ENTER_BR,
                shiftEnterMode:CKEDITOR.ENTER_P,
                toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
                           { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                           { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
                           { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                           { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                           { name: 'links', items: [ 'Link', 'Unlink' ] },
                           { name: 'insert', items: [ 'Image'] },
                           { name: 'spell', items: [ 'jQuerySpellChecker' ] },
                           { name: 'table', items: [ 'Table' ] }
                           ],
              });
              
    </script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>

