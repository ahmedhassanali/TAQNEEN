@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main"  >
    <div class="container-fluid"  style=" margin-right: 300px;">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('site.Support')</h1>
                </div>

                </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <div class="logo d-flex justify-content-center align-items-center">
                            <a class=""  href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                        </div>
                    <h6 class="lead mb-5">جدة:طريق الملك عبد الله - برج الاقتصاد الدولى الدور الاول<br>
                        جوال:055332993
                    </ا>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                    <label for="inputName">@lang('site.Name')</label>
                    <input type="text" id="inputName" class="form-control" />
                    </div>
                    <div class="form-group">
                    <label for="inputEmail">@lang('site.email')</label>
                    <input type="email" id="inputEmail" class="form-control" />
                    </div>
                    <div class="form-group">
                    <label for="inputSubject">@lang('site.Subject')</label>
                    <input type="text" id="inputSubject" class="form-control" />
                    </div>
                    <div class="form-group">
                    <label for="inputMessage">@lang('site.Message')</label>
                    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="@lang('site.send')">
                    </div>
                </div>
                </div>
            </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Vuxel</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://Vuxel.com">Vuxel</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script>
    $('#sidebar_support').addClass('active');
</script>
@endsection

