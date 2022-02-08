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
                            <h1> @lang('site.Users')</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            @php
                $users=[[1,'Ahmed Mohamed','Developer','am@gmail.com','01124221526'],[2,'khalid Mohamed','Developer','am@yahoo.com','01124221526'],
                [3,'saied Mohamed','designer','sa@gmail.com','01120001526'],[4,'Ali Mohamed','ui ux designer','am@gmail.com','0112444526']];
            @endphp

            <section class="content">

                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                      <div class=''>
                        <form action="#" method="get">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control" placeholder="@lang('site.search')">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                    <a href="{{ route('adduser') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                                </div>
                            </div>
                        </form><!-- end of form -->
                      </div>


                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>

                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 20%">
                                    @lang('site.Name')
                                </th>
                                <th style="width: 20%">
                                    @lang('site.position')
                                </th>
                                <th style="width: 20%">
                                    @lang('site.email')
                                </th>
                                <th style="width: 15%" >
                                    @lang('site.phone')
                                </th>
                                <th style="width: 20%" >
                                    @lang('site.action')
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td style="width: 1%">  {{$user[0]}}  </td>
                                <td style="width: 20%"> <a> {{$user[1]}}</a></td>
                                <td style="width: 10%">{{$user[2]}}</td>
                                <td style="width: 20%">{{$user[3]}}</td>
                                <td style="width: 10%">{{$user[4]}}</td>
                                <td class="project-actions text-right" style="width: 40%">

                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        @lang('site.edit')
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        @lang('site.delete')
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

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
    $('#sidebar_Users').addClass('active');
</script>
@endsection
