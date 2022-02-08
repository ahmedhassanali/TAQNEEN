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

            </section>
            <section>
                <section class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          {{-- <div class="callout callout-info">
                            <h5><i class="fas fa-info"></i> Note:</h5>
                            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                          </div>


                          <!-- Main content -->
                          <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                              <div class="col-12">
                                <h4>
                                  <i class="fas fa-globe"></i> AdminLTE, Inc.
                                  <small class="float-right">Date: 2/10/2014</small>
                                </h4>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                              <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                  <strong>Admin, Inc.</strong><br>
                                  795 Folsom Ave, Suite 600<br>
                                  San Francisco, CA 94107<br>
                                  Phone: (804) 123-5432<br>
                                  Email: info@almasaeedstudio.com
                                </address>
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                  <strong>John Doe</strong><br>
                                  795 Folsom Ave, Suite 600<br>
                                  San Francisco, CA 94107<br>
                                  Phone: (555) 539-1037<br>
                                  Email: john.doe@example.com
                                </address>
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Payment Due:</b> 2/22/2014<br>
                                <b>Account:</b> 968-34567
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row --> --}}

                            <!-- Table row -->
                            <div class="row">
                              <div class="col-12 table-responsive">
                                  <div>
                                    <form action="#" method="get">
                                        <div class="row">
                                            <div>
                                                <input type="checkbox"  class="form-check-input" id="">
                                                <label class="form-check-label"  for="">@lang('site.Paymentdate')</label>

                                                <input type="checkbox"  class="form-check-input me-2" id="">
                                                <label class="form-check-label"  for="">@lang('site.dateofRegistration')</label>
                                            </div>

                                            <div class="col-md-4">
                                                <div>
                                                    <input type="date" name="date" class="form-control" placeholder="@lang('site.date')" value="31-jan-2022">
                                                </div>
                                            </div>

                                            <div class="col-md-4 my-0 by-0 py-0 ">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                            </div>
                                        </div>
                                    </form><!-- end of form -->
                                  </div>

                                <table class="table table-striped">
                                  <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>@lang('site.Products')</th>
                                    <th>@lang('site.total')</th>
                                    <th>@lang('site.fees')</th>
                                    <th>@lang('site.SubscriptionStatus')</th>
                                    <th>@lang('site.Responsibledelegate')</th>
                                    <th>@lang('site.computernumber')</th>
                                    <th>@lang('site.FacilityName')</th>
                                    <th>@lang('site.userName')</th>
                                    <th>@lang('site.phone')</th>
                                    <th>@lang('site.Paymentdate')</th>
                                    <th>@lang('site.dateofRegistration')</th>
                                    <th>@lang('site.Subscriptionstartdate')</th>
                                    <th>@lang('site.Nextbatchdate')</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>خدمة مقيم الباقة الاولى</td>
                                    <td>1265 SAR</td>
                                    <td>50 SAR</td>
                                    <td>نشط</td>
                                    <td>ahmed ali</td>
                                    <td>1025545</td>
                                    <td>شركة واسط السعودية</td>
                                    <td>حسان احمد حمدان</td>
                                    <td>05052253215</td>
                                    <td>02-11-2021</td>
                                    <td>05-11-2021</td>
                                    <td>02-11-2021</td>
                                    <td>02-11-2021</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>خدمة مقيم الباقة الاولى</td>
                                    <td>1265 SAR</td>
                                    <td>50 SAR</td>
                                    <td>نشط</td>
                                    <td>ahmed ali</td>
                                    <td>1025545</td>
                                    <td>شركة واسط السعودية</td>
                                    <td>حسان احمد حمدان</td>
                                    <td>05052253215</td>
                                    <td>02-11-2021</td>
                                    <td>05-11-2021</td>
                                    <td>02-11-2021</td>
                                    <td>02-11-2021</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>خدمة مقيم الباقة الاولى</td>
                                    <td>1265 SAR</td>
                                    <td>50 SAR</td>
                                    <td>نشط</td>
                                    <td>ahmed ali</td>
                                    <td>1025545</td>
                                    <td>شركة واسط السعودية</td>
                                    <td>حسان احمد حمدان</td>
                                    <td>05052253215</td>
                                    <td>02-11-2021</td>
                                    <td>05-11-2021</td>
                                    <td>02-11-2021</td>
                                    <td>02-11-2021</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>خدمة مقيم الباقة الاولى</td>
                                    <td>1265 SAR</td>
                                    <td>50 SAR</td>
                                    <td>نشط</td>
                                    <td>ahmed ali</td>
                                    <td>1025545</td>
                                    <td>شركة واسط السعودية</td>
                                    <td>حسان احمد حمدان</td>
                                    <td>05052253215</td>
                                    <td>02-11-2021</td>
                                    <td>05-11-2021</td>
                                    <td>02-11-2021</td>
                                    <td>02-11-2021</td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->


                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                              <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> @lang('site.Print')</a>
                                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                  <i class="fas fa-download"></i> @lang('site.GeneratePDF')
                                </button>
                              </div>
                            </div>
                          </div>
                          <!-- /.invoice -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.container-fluid -->

                  </section>

            </section>

        </div>

    </div>
</div>
<script>
    $('#sidebar_reporting').addClass('active');
</script>
@endsection
