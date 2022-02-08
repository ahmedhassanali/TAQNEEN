@extends('layouts.master')
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

             </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Service </h3>

                            <div class="card-tools">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                            <label for="inputName">Services Name</label>
                            <input type="text" id="inputName" class="form-control">
                            </div>


                            <div class="form-group">
                            <label for="inputClientCompany">Services Titel</label>
                            <input type="text" id="inputClientCompany" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="inputProjectLeader">Services image</label>
                            <input type="file" id="inputProjectLeader" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Services content</label>
                                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                  <input type="submit" value="Create New Services" class="btn btn-primary float-right">
                                </div>
                              </div>
                        </div>

                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                <div class="col-md-6">

                    <!-- /.card -->
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
    $('#sidebar_Services').addClass('active');
</script>
@endsection
