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
                            <div class="col-md-9">
                                <div class="card card-primary card-outline">
                                  <div class="card-header px-5">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title ">@lang('site.ReadMail')</h3>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                                          <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                        </div>
                                    </div>

                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body px-5 my-0 ">
                                    <div class="mailbox-read-info my-0" >
                                      <h5>Message Subject Is Placed Here</h5>
                                      <h6>@lang('site.From'): support@adminlte.io
                                        <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
                                    </div>
                                    <hr class="my-0">

                                    <!-- /.mailbox-read-info -->
                                    <div class="mailbox-controls with-border text-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" data-container="body" title="@lang('site.delete')">
                                          <i class="fas fa-trash "></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-container="body" title="@lang('site.Reply')">
                                          <i class="fas fa-reply"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-container="body" title="@lang('site.Forward')">
                                          <i class="fas fa-share"></i>
                                        </button>
                                      </div>
                                      <!-- /.btn-group -->
                                      <button type="button" class="btn btn-default btn-sm" title="@lang('site.Print')">
                                        <i class="fas fa-print"></i>
                                      </button>
                                    </div>
                                    <hr class="my-0">

                                    <!-- /.mailbox-controls -->
                                    <div class="mailbox-read-message">
                                      <p>Hello John,</p>

                                      <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                                        on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                                        master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                                        gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                                        asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                                        blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                                        Apparel.</p>

                                      <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B
                                        literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar
                                        toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth
                                        umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B
                                        flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed
                                        slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix.
                                        Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore
                                        whatever viral Truffaut.</p>

                                      <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap fanny
                                        pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown four dollar
                                        toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde Intelligentsia. Lomo
                                        locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger bag swag
                                        slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually tofu ennui
                                        keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                                      <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                                        leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American
                                        Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral
                                        plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid
                                        vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha
                                        flannel chambray chia cronut.</p>

                                      <p>Thanks,<br>Jane</p>
                                    </div>
                                    <!-- /.mailbox-read-message -->
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="card-footer bg-white">
                                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                      <li>
                                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                                        <div class="mailbox-attachment-info">
                                          <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                                              <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1,245 KB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                              </span>
                                        </div>
                                      </li>
                                      <li>
                                        <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                                        <div class="mailbox-attachment-info">
                                          <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App Description.docx</a>
                                              <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1,245 KB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                              </span>
                                        </div>
                                      </li>
                                      <li>
                                        <span class="mailbox-attachment-icon has-img"><img src="#" alt="Attachment"></span>

                                        <div class="mailbox-attachment-info">
                                          <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                                              <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>2.67 MB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                              </span>
                                        </div>
                                      </li>
                                      <li>
                                        <span class="mailbox-attachment-icon has-img"><img src="#" alt="Attachment"></span>

                                        <div class="mailbox-attachment-info">
                                          <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo2.png</a>
                                              <span class="mailbox-attachment-size clearfix mt-1">
                                                <span>1.9 MB</span>
                                                <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                              </span>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  <!-- /.card-footer -->
                                  <div class="card-footer">
                                    <div class="float-right">
                                      <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> @lang('site.Reply')</button>
                                      <button type="button" class="btn btn-default"><i class="fas fa-share"></i> @lang('site.Forward')</button>
                                    </div>
                                    <button type="button" class="btn btn-default"><i class="fas fa-trash "></i> @lang('site.delete')</button>
                                    <button type="button" class="btn btn-default"><i class="fas fa-print"></i> @lang('site.Print')</button>
                                  </div>
                                  <!-- /.card-footer -->
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
    $('#sidebar_EmailRead').addClass('active');
</script>
@endsection
