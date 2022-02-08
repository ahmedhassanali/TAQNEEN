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

             </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="wrapper">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                      <!-- Main content -->
                      <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-3">
                              <a href="{{ route('EmailCompose') }}" class="btn btn-primary btn-block mb-3">@lang('site.compose')</a>

                              <div class="card">
                                <div class="card-header pb-0 ">
                                  <h3 class="card-title ">@lang('site.Folders')</h3>
                                  <div class="card-tools ">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="bi bi-minus"></i>
                                    </button>
                                  </div>
                                </div>
                                <hr class="my-0">
                                <div class="card-body p-0">
                                  <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                      <a href="#" class="nav-link d-flex justify-content-between">
                                          <div>
                                            <i class="bi bi-inbox"></i> @lang('site.inbox')
                                          </div>
                                        <span class="badge bg-primary float-start">12</span>
                                      </a>
                                    </li>
                                    <hr class="my-0">

                                    <li class="nav-item ">
                                      <a href="#" class="nav-link ">
                                          <i class="bi bi-envelope "></i>
                                          <span>@lang('site.sent')</span>
                                      </a>
                                    </li>
                                    <hr class="my-0">

                                    <li class="nav-item">
                                      <a href="#" class="nav-link">
                                        <i class="bi bi-briefcase"></i> @lang('site.drafts')
                                      </a>
                                    </li>
                                    <hr class="my-0">

                                    <li class="nav-item">
                                      <a href="#" class="nav-link d-flex justify-content-between">
                                          <div>
                                            <i class="bi bi-filter"></i> @lang('site.junk')
                                          </div>
                                        <span class="badge bg-warning float-start">65</span>
                                      </a>
                                    </li>
                                    <hr class="my-0">

                                    <li class="nav-item">
                                      <a href="#" class="nav-link">
                                        <i class="bi bi-trash"></i> @lang('site.trash')
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                              <div class="card">
                                <div class="card-header pb-0">
                                  <h3 class="card-title">@lang('site.Labels')</h3>

                                  <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="bi bi-minus"></i>
                                    </button>

                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <hr class="my-0">
                                  <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                      <a class="nav-link" href="#"><i class="bi bi-circle text-danger"></i> @lang('site.important')</a>
                                    </li>
                                    <hr class="my-0">

                                    <li class="nav-item">
                                      <a class="nav-link" href="#"><i class="bi bi-circle text-warning"></i> @lang('site.promotions')</a>
                                    </li>
                                    <hr class="my-0">

                                    <li class="nav-item">
                                      <a class="nav-link" href="#"><i class="bi bi-circle text-primary"></i> @lang('site.social')</a>
                                    </li>
                                  </ul>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>
                            <div class="col-md-9">
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h3 class="card-title">@lang('site.inbox')</h3>

                                    <div class="card-tools">
                                      <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search Mail">
                                        <div class="input-group-append">
                                          <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /.card-tools -->
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="mailbox-controls">
                                            <!-- Check all button -->
                                            <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                                <i class="far fa-square"></i>
                                            </button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-reply"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-share"></i>
                                                </button>
                                            </div>
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                        </div>
                                        <div class="float-right">
                                            1-50/200
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fas fa-chevron-right"></i>
                                                </button>
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fas fa-chevron-left"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive mailbox-messages">
                                      <table class="table table-hover table-striped">
                                        <tbody>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check1">
                                              <label for="check1"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"></td>
                                          <td class="mailbox-date">5 mins ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check2">
                                              <label for="check2"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">28 mins ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check3">
                                              <label for="check3"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">11 hours ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check4">
                                              <label for="check4"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"></td>
                                          <td class="mailbox-date">15 hours ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check5">
                                              <label for="check5"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">Yesterday</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check6">
                                              <label for="check6"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check7">
                                              <label for="check7"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check8">
                                              <label for="check8"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"></td>
                                          <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check9">
                                              <label for="check9"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"></td>
                                          <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check10">
                                              <label for="check10"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"></td>
                                          <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check11">
                                              <label for="check11"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">4 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check12">
                                              <label for="check12"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"></td>
                                          <td class="mailbox-date">12 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check13">
                                              <label for="check13"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">12 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check14">
                                              <label for="check14"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">14 days ago</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="icheck-primary">
                                              <input type="checkbox" value="" id="check15">
                                              <label for="check15"></label>
                                            </div>
                                          </td>
                                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                          </td>
                                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                          <td class="mailbox-date">15 days ago</td>
                                        </tr>
                                        </tbody>
                                      </table>
                                      <!-- /.table -->
                                    </div>
                                    <!-- /.mail-box-messages -->
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="card-footer p-0">
                                    <div class="mailbox-controls">
                                      <!-- Check all button -->
                                      <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                        <i class="far fa-square"></i>
                                      </button>
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                          <i class="far fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm">
                                          <i class="fas fa-reply"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm">
                                          <i class="fas fa-share"></i>
                                        </button>
                                      </div>
                                      <!-- /.btn-group -->
                                      <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-sync-alt"></i>
                                      </button>
                                      <div class="float-right">
                                        1-50/200
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-left"></i>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-right"></i>
                                          </button>
                                        </div>
                                        <!-- /.btn-group -->
                                      </div>
                                      <!-- /.float-right -->
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card -->
                              </div>
                          </div>
                          <!-- /.row -->
                        </div><!-- /.container-fluid -->
                      </section>
                      <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->

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
    $('#sidebar_Emailinbox').addClass('active');
</script>
@endsection
