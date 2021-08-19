<!DOCTYPE html>
<html lang="en">
{{--head--}}
@include('admin.templates.partials.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.templates.partials.preloader')

@include('admin.templates.partials.navbar')

@include('admin.templates.partials.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ Breadcrumbs::current()->title }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        {{ Breadcrumbs::render()}}
                        {{--                        <ol class="breadcrumb float-sm-right">--}}
                        {{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                        {{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
                        {{--                        </ol>--}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.templates.partials.footer')
    @include('admin.templates.partials.control')
</div>
<!-- ./wrapper -->
@include('admin.templates.partials.scripts')
</body>
</html>
