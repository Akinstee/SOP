<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0"
        />
        <title>SOPS - Bank-settings</title>

        <link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}" />

        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/feather/feather.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/icons/flags/flags.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/plugins/fontawesome/css/all.min.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/icons/feather/feather.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/select2/css/select2.min.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/css/bootstrap-datetimepicker.min.css')}}"
        />

        <link rel="stylesheet" href="{{ asset('/css/style32.css')}}" />
    </head>
    <body>
        <div class="main-wrapper">
            <!--Header Navbar Start-->
            @include('layouts.instructornav')
            <!--Header Navbar End-->

            {{-- Sidebar Start --}} @include('layouts.instructorside') {{-- Sidebar
            Ends --}}

            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="page-title">Invoice settings</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('instructor.dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Bank Settings
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <div class="widget settings-menu">
                                <ul>
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('instructor.invoices-settings')}}"
                                            class="nav-link"
                                        >
                                            <i class="fe fe-git-commit"></i>
                                            <span>General Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('instructor.tax-settings')}}"
                                            class="nav-link"
                                        >
                                            <i class="fe fe-bookmark"></i>
                                            <span>Tax Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('instructor.bank-settings')}}"
                                            class="nav-link active"
                                        >
                                            <i class="fas fa-university"></i>
                                            <span>Bank Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-8">
                            <div class="card invoices-settings-card">
                                <div class="card-header">
                                    <h5 class="card-title">Bank Settings</h5>
                                </div>
                                <div class="card-body">
                                    <form
                                        action="#"
                                        class="invoices-settings-form"
                                    >
                                        <div
                                            class="row align-items-center form-group"
                                        >
                                            <label
                                                for="name"
                                                class="col-sm-3 col-form-label input-label"
                                                >Default Bank Account</label
                                            >
                                            <div class="col-sm-9">
                                                <label class="custom_check">
                                                    <input
                                                        type="checkbox"
                                                        name="invoice"
                                                    />
                                                    <span
                                                        class="checkmark"
                                                    ></span>
                                                    Check to enable Bank Account
                                                    default
                                                </label>
                                            </div>
                                        </div>
                                        <div
                                            class="row align-items-center form-group"
                                        >
                                            <label
                                                for="email"
                                                class="col-sm-3 col-form-label input-label"
                                                >Account Holder Name</label
                                            >
                                            <div class="col-sm-9">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="row align-items-center form-group"
                                        >
                                            <label
                                                for="phone"
                                                class="col-sm-3 col-form-label input-label"
                                                >Bank name</label
                                            >
                                            <div class="col-sm-9">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="row align-items-center form-group"
                                        >
                                            <label
                                                for="phone"
                                                class="col-sm-3 col-form-label input-label"
                                                >IFSC Code</label
                                            >
                                            <div class="col-sm-9">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="row align-items-center form-group"
                                        >
                                            <label
                                                for="phone"
                                                class="col-sm-3 col-form-label input-label"
                                                >Account Number</label
                                            >
                                            <div class="col-sm-9">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="invoice-setting-btn text-end"
                                        >
                                            <button
                                                type="submit"
                                                class="btn cancel-btn me-2"
                                            >
                                                Cancel
                                            </button>
                                            <button
                                                type="submit"
                                                class="btn btn-primary-save-bg"
                                            >
                                                Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{('/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('/js/feather.min.js')}}"></script>

        <script src="{{ asset('/js/feather.min.js')}}"></script>

        <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('/plugins/select2/js/select2.min.js')}}"></script>

        <script src="{{ asset('/plugins/moment/moment.min.js')}}"></script>
        <script src="{{ asset('/js/bootstrap-datetimepicker.min.js')}}"></script>

        <script src="{{ asset('/js/script.js')}}"></script>
    </body>
</html>
