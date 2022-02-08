@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ URL::to('assets/css/boot.min.css') }}">
@endsection
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main"  >
    <div class="container-fluid"  style="postion: fixed; margin-right: 300px;">
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
                    <h1>Posts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div>
                 </div>
             </div><!-- /.container-fluid -->
             </section>
             <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create New Post</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                <label for="inputName">Post Name</label>
                                <input type="text" id="inputName" class="form-control">
                                </div>

                                <div class="form-group">
                                <label for="inputClientCompany">Post Titel</label>
                                <input type="text" id="inputClientCompany" class="form-control">
                                </div>

                                <div class="form-group">
                                <label for="inputProjectLeader">Post image</label>
                                <input type="file" id="inputProjectLeader" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">post content</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="row float-end my-2">
                                    <div class="col-12">
                                        <input type="submit" value="Create New Post" class="btn btn-primary float-right">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
              </section>
            </div>

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
        $('#sidebar_Posts').addClass('active');
    </script>
    @endsection
