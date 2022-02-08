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

             </div><!-- /.container-fluid -->
             </section>
             <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@lang('site.AddNewUser')</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">@lang('site.Name')</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail">@lang('site.email')</label>
                                    <input type="Email" id="inputEmail" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">@lang('site.phone')</label>
                                    <input type="text" id="inputClientCompany" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputProjectLeader">@lang('site.photo')</label>
                                    <input type="file" id="inputProjectLeader" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputad">@lang('site.address')</label>
                                    <input type="text" id="inputad" class="form-control">
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="inputad">@lang('site.role')</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name" >
                                            <option value="Admin">مشرف</option>
                                            <option value="Super Admin">مشرف عام</option>
                                            <option value="Normal User">مشاهد</option>
                                        </select>

                                    </fieldset>
                                    @error('role_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inputpa">@lang('site.password')</label>
                                    <input type="password" id="inputpa" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputD">@lang('site.confirm_password')</label>
                                    <input type="password" id="inputD" class="form-control">
                                </div>

                                <div class="row float-end my-2">
                                    <div class="col-12">
                                        <input type="submit" value="@lang('site.AddNewuser')" class="btn btn-primary float-right">
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
        $('#sidebar_Users').addClass('active');
    </script>
    @endsection
