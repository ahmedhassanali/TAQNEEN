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
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('site.Chat')</h1>
                </div>

                 </div>
             </div><!-- /.container-fluid -->
            </section>

                <section style="background-color: #eee;">
                <div class="container py-5">

                    <div class="row">

                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                        <h5 class="font-weight-bold mb-3 text-center text-lg-start">@lang('site.Member')</h5>

                        <div class="card">
                        <div class="card-body">

                            <ul class="list-unstyled mb-0">
                            <li class="p-2 border-bottom" style="background-color: #eee;">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                    <p class="fw-bold mb-0">John Doe</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">@lang('site.Justnow')</p>
                                    <span class="badge bg-primary float-end">1</span>
                                </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1 mx-2">
                                    <p class="fw-bold  mb-0">Danny Smith</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted  mb-1"> 5 @lang('site.mins') </p>
                                </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row ">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1 mx-2">
                                    <p class="fw-bold mb-0">Alex Steward</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">@lang('site.Yesterday')</p>
                                </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1 mx-2">
                                    <p class="fw-bold mb-0">Ashley Olsen</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">@lang('site.Yesterday')</p>
                                </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1 mx-2">
                                    <p class="fw-bold mb-0">Kate Moss</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">@lang('site.Yesterday')</p>
                                </div>
                                </a>
                            </li>
                            <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1 mx-2">
                                    <p class="fw-bold mb-0">Lara Croft</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">@lang('site.Yesterday')</p>
                                </div>
                                </a>
                            </li>
                            <li class="p-2">
                                <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1 mx-2">
                                    <p class="fw-bold mb-0">Brad Pitt</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">7 @lang('site.mins')</p>
                                    <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                                </div>
                                </a>
                            </li>
                            </ul>

                        </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-7 col-xl-8">

                        <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card mx-2">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 9 @lang('site.mins')</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <div class="card mx-2 w-100">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Lara Croft</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 @lang('site.mins')</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.
                                </p>
                            </div>
                            </div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                            class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card mx-2">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 15 @lang('site.mins')</p>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="bg-white mb-3">
                            <div class="form-outline">
                            <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample2">@lang('site.Message')</label>
                            </div>
                        </li>
                        <button type="button" class="btn btn-primary btn-rounded float-end">@lang('site.send')</button>
                        </ul>

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
    $('#sidebar_chat').addClass('active');
</script>
@endsection
