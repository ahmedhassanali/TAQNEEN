@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ URL::to('assets/css/boot.min.css') }}">
@endsection
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main"  >
    <div class="container-fluid"  style="postion: fixed; margin-right: 300px; ">
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
                    <h1>@lang('site.permissions')</h1>
                </div>

                 </div>
             </div><!-- /.container-fluid -->
            </section>
            @php
                $permissions=[[1,'Admin'],[2,'Editor'],
                [3,'Super Admin'],[4,'viewer']];
            @endphp

        <section class="content">
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-around">
                    <form action="#" method="get" class="mb-3">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                            </div>
                        </div>
                    </form><!-- end of form -->
                    <form action="#" method="get" class="mb-0">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.add')">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary px-2"><i class="fa fa-plus"></i> @lang('site.add')</button>
                            </div>
                        </div>
                    </form><!-- end of form -->
                  </div>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>@lang('site.role')</th>
                          <th>@lang('site.permissions')</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php
                            $models = ['مشرف عام','مشرف','مشاهد','مصمم'];
                            $map=['read','create','delete','update'];
                          @endphp
                        @foreach ($models as  $index=>$item)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>  {{$item}} </td>
                            <td>
                                <ul class="nav nav-pills mb-3 mx-0 px-0 " id="pills-tabb" role="tablist">
                                    <li class="nav-item mx-1" role="presentation">
                                        <button class="nav-link mx-0 py-0 active" id="pills-aa-tab" data-bs-toggle="pill" data-bs-target="#pills-aa" type="button" role="tab" aria-controls="pills-home" aria-selected="true">@lang('site.Services')</button>
                                    </li>
                                    <li class="nav-item mx-1 " role="presentation">
                                        <button class="nav-link py-0 " id="pills-bb-tab" data-bs-toggle="pill" data-bs-target="#pills-bb" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">@lang('site.users')</button>
                                    </li>
                                    <li class="nav-item mx-1" role="presentation">
                                        <button class="nav-link py-0" id="pills-cc-tab" data-bs-toggle="pill" data-bs-target="#pills-cc" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">@lang('site.Opportunities')</button>
                                    </li>
                                    <li class="nav-item mx-1" role="presentation">
                                        <button class="nav-link py-0" id="pills-dd-tab" data-bs-toggle="pill" data-bs-target="#pills-dd" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">@lang('site.reporting')</button>
                                    </li>
                                </ul>
                                <hr>
                                <div class='d-flex justify-content-between' >
                                <div class="tab-content " id="pills-tabbContent">
                                    <div class="tab-pane fade show active " id="pills-aa" role="tabpanel" aria-labelledby="pills-aa-tab">
                                        @foreach ($map as $index=>$m)
                                            <input type="checkbox"  class="form-check-input" id="{{$m}}">
                                            <label class="form-check-label"  for="{{$m}}">@lang('site.'.$m)</label>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade " id="pills-bb" role="tabpanel" aria-labelledby="pills-bb-tab">
                                        @foreach ($map as $index=>$m)
                                            <input type="checkbox"   class="form-check-input " id="{{$m}}">
                                            <label class="form-check-label"  for="{{$m}}">@lang('site.'.$m)</label>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade" id="pills-cc" role="tabpanel" aria-labelledby="pills-cc-tab">
                                        @foreach ($map as $index=>$m)
                                            <input type="checkbox"   class="form-check-input" id="{{$m}}">
                                            <label class="form-check-label"  for="{{$m}}">@lang('site.'.$m)</label>
                                            @endforeach
                                    </div>
                                    <div class="tab-pane fade" id="pills-dd" role="tabpanel" aria-labelledby="pills-dd-tab">
                                        @foreach ($map as $index=>$m)
                                            <input type="checkbox"   class="form-check-input" id="{{$m}}">
                                            <label class="form-check-label"  for="{{$m}}">@lang('site.'.$m)</label>
                                            @endforeach
                                    </div>
                                  </div>
                                  <div class="mx-0 mt-0">
                                    <a class="btn btn-info btn-sm"   href="#"><i class="fas fa-pencil-alt"></i>@lang('site.edit')</a>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i>@lang('site.delete')</a>
                                   </div>
                            </div>
                          </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card -->


                <!-- /.card -->
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
    $('#sidebar_Permission').addClass('active');
</script>
@endsection
