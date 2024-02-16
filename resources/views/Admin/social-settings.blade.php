<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
        <title>SOPS - Social-Settings</title>

        <link rel="shortcut icon" href="{{ asset('/img/favicon.png')}}"/>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet"/>

        <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}"/>

        <link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css')}}"/>

        <link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css')}}"/>

        <link rel="stylesheet" href="{{ asset('/css/bootstrap-datetimepicker.min.css')}}"/>

        <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}"/>
        <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css')}}"/>

        <link rel="stylesheet" href="{{ asset('/plugins/select2/css/select2.min.css')}}"/>

        <link rel="stylesheet" href="{{ asset('/css/style32.css')}}"/>
    </head>
    <body>
        <div class="main-wrapper">
                      
            @include('layouts.adminnav')

            @include('layouts.adminside')

            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Settings</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.settings')}}">Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Social Settings
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="settings-menu-links">
                                <ul class="nav nav-tabs menu-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.settings')}}">General Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.localization-details')}}">Localization</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admiin.payment-settings')}}">Payment Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route("admin.email-settings")}}">Email Settings</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a
                                            class="nav-link"
                                            href="{{ route('admin.social-settings')}}"
                                            >Social Media Login</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.social-links')}}">Social Links</a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ route('admin.seo-settings')}}"
                                            >SEO Settings</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.others-settings')}}">Others</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div
                                            class="card-header d-flex justify-content-between align-items-center"
                                        >
                                            <h5 class="card-title">
                                                Google Login Credential
                                            </h5>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="status_1"
                                                    class="check"
                                                    checked=""
                                                />
                                                <label
                                                    for="status_1"
                                                    class="checktoggle"
                                                    >checkbox</label
                                                >
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <form>
                                                <div class="settings-form">
                                                    <div
                                                        class="form-group form-placeholder"
                                                    >
                                                        <label
                                                            >Client ID
                                                            <span
                                                                class="star-red"
                                                                >*</span
                                                            ></label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                    <div
                                                        class="form-group form-placeholder"
                                                    >
                                                        <label
                                                            >Client Secret
                                                            <span
                                                                class="star-red"
                                                                >*</span
                                                            ></label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                    <div
                                                        class="form-group mb-0"
                                                    >
                                                        <div
                                                            class="settings-btns"
                                                        >
                                                            <button
                                                                type="submit"
                                                                class="btn btn-orange"
                                                            >
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div
                                            class="card-header d-flex justify-content-between align-items-center"
                                        >
                                            <h5 class="card-title">Facebook</h5>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="status_2"
                                                    class="check"
                                                    checked=""
                                                />
                                                <label
                                                    for="status_2"
                                                    class="checktoggle"
                                                    >checkbox</label
                                                >
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <form>
                                                <div class="settings-form">
                                                    <div
                                                        class="form-group form-placeholder"
                                                    >
                                                        <label
                                                            >App ID
                                                            <span
                                                                class="star-red"
                                                                >*</span
                                                            ></label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                    <div
                                                        class="form-group form-placeholder"
                                                    >
                                                        <label
                                                            >App Secret
                                                            <span
                                                                class="star-red"
                                                                >*</span
                                                            ></label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                    <div
                                                        class="form-group mb-0"
                                                    >
                                                        <div
                                                            class="settings-btns"
                                                        >
                                                            <button
                                                                type="submit"
                                                                class="btn btn-orange"
                                                            >
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div
                                            class="card-header d-flex justify-content-between align-items-center"
                                        >
                                            <h5 class="card-title">
                                                Twiter Login Credential
                                            </h5>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center"
                                            >
                                                <input
                                                    type="checkbox"
                                                    id="status_3"
                                                    class="check"
                                                />
                                                <label
                                                    for="status_3"
                                                    class="checktoggle"
                                                    >checkbox</label
                                                >
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <form>
                                                <div class="settings-form">
                                                    <div
                                                        class="form-group form-placeholder"
                                                    >
                                                        <label
                                                            >Client ID
                                                            <span
                                                                class="star-red"
                                                                >*</span
                                                            ></label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                    <div
                                     i                     class="form-group form-placeholder"
                                                    >
                                                        <label
                                                            >Client Secret
                                                            <span
                                                                class="star-red"
                                                                >*</span
                                                            ></label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                    <div
                                                        class="form-group mb-0"
                                                    >
                                                        <div
                                                            class="settings-btns"
                                                        >
                                                            <button
                                                                type="submit"
                                                                class="btn btn-orange"
                                                            >
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('/js/feather.min.js')}}"></script>

        <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('/js/moment.min.js')}}"></script>
        <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{ asset('/plugins/select2/js/select2.min.js')}}"></script>

        <script src="{{ asset('/js/script.js')}}"></script>
    </body>
</html>
