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
                    <h1>Compose</h1>
                </div>

                 </div>
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
                              <a href="{{ route('Emailinbox') }}" class="btn btn-primary btn-block mb-3">@lang('site.BacktoInbox')</a>

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
                            <!-- /.col -->
                            <div class="col-md-9">
                              <div class="card card-primary card-outline">
                                <div class="card-header">
                                  <h3 class="card-title">@lang('site.ComposeNewMessage')</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <div class="form-group">
                                    <input class="form-control" placeholder="@lang('site.to'):">
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control" placeholder="@lang('site.Subject'):">
                                  </div>
                                  <div class="form-group">
                                      <textarea id="your_summernote" class="form-control" style="height: 300px">
                                        <h1><u>Heading Of Message</u></h1>
                                        <h4>Subheading</h4>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                          was born and I will give you a complete account of the system, and expound the actual teachings
                                          of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                                          dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                                          how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                                          is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                                          but because occasionally circumstances occur in which toil and pain can procure him some great
                                          pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                                          except to obtain some advantage from it? But who has any right to find fault with a man who
                                          chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                                          produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                                          dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                                          blinded by desire, that they cannot foresee</p>
                                        <ul>
                                          <li>List item one</li>
                                          <li>List item two</li>
                                          <li>List item three</li>
                                          <li>List item four</li>
                                        </ul>
                                        <p>Thank you,</p>
                                        <p>John Doe</p>
                                      </textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="attachment">@lang('site.Attachment'):</label>
                                    <input type="file" name="attachment" class="btn btn-default btn-file ">
                                    <p class="help-block">Max. 32MB</p>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                  <div class="float-end">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i>@lang('site.draft')</button>
                                    <button type="submit" class="btn btn-success"><i class="bi bi-envelope"></i>@lang('site.send')</button>
                                  </div>
                                  <button type="reset" class="btn btn-info mx-1"><i class="bi bi-times"></i> @lang('site.discard')</button>
                                </div>
                                <!-- /.card-footer -->
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /.col -->
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
    $('#sidebar_EmailCompose').addClass('active');
</script>
@endsection
