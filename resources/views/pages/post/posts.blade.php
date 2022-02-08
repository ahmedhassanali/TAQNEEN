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
                        <h1>@lang('site.Posts')</h1>
                    </div>
                </div>
             </div><!-- /.container-fluid -->
             </section>
             <form action="#" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search')">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                        <a href="{{ route('addpost') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                    </div>
                </div>
            </form><!-- end of form -->
              <section>
                <div class="row">
                    <div class="col-md-6">
                      <!-- Box Comment -->
                      <div class="card card-widget">
                        <div class="card-header">
                          <div class="user-block">

                            <span class="description">Shared publicly - 7:30 PM Today</span>
                          </div>
                          <!-- /.user-block -->

                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <img class="img-fluid pad" src="{{asset('assets/images/posts/3.jpg')}}" alt="Photo">

                          <p>I took this photo this morning. What do you guys think?</p>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptates voluptatem, ipsam reprehenderit ad molestias molestiae sapiente magni cumque consectetur nihil dolorum exercitationem rem porro optio quidem itaque veniam aliquam.</p>
                          <div class="float-end">
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
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">

                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->

                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="{{asset('assets/images/posts/1.jpg')}}" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptates voluptatem, ipsam reprehenderit ad molestias molestiae sapiente magni cumque consectetur nihil dolorum exercitationem rem porro optio quidem itaque veniam aliquam.</p>
                            <div class="float-end">
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
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">

                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->

                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="{{asset('assets/images/posts/2.jpg')}}" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptates voluptatem, ipsam reprehenderit ad molestias molestiae sapiente magni cumque consectetur nihil dolorum exercitationem rem porro optio quidem itaque veniam aliquam.</p>
                            <div class="float-end">
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
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">

                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->

                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="{{asset('assets/images/posts/3.jpg')}}" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptates voluptatem, ipsam reprehenderit ad molestias molestiae sapiente magni cumque consectetur nihil dolorum exercitationem rem porro optio quidem itaque veniam aliquam.</p>
                            <div class="float-end">
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
