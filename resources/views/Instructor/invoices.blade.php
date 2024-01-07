<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0"
        />
        <title>SOPS - Invoices</title>

        <link rel="shortcut icon" href="{{ asset('/img/favicon.png')}}" />

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

        <link rel="stylesheet" href="{{ asset('/css/feather.css')}}" />

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
            href="{{ asset('/plugins/select2/css/select2.min.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/plugins/datatables/datatables.min.css')}}"
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

            {{-- Sidebar Start --}} @include('layouts.instructorside') {{--
            Sidebar Ends --}}

            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Invoices</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a
                                            href="{{ route('instructor.dashboard')}}"
                                            >Dashboard</a
                                        >
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Invoices
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col"></div>
                            <div class="col-auto">
                                <a
                                    href="{{ route('instructor.invoices')}}"
                                    class="invoices-links active"
                                >
                                    <i class="feather feather-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card report-card">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="app-listing">
                                        <li>
                                            <div class="multipleSelection">
                                                <div class="selectBox">
                                                    <p class="mb-0">
                                                        <i
                                                            class="fas fa-user-plus me-1 select-icon"
                                                        ></i>
                                                        Select User
                                                    </p>
                                                    <span class="down-icon"
                                                        ><i
                                                            class="fas fa-chevron-down"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div id="checkBoxes">
                                                    <form action="#">
                                                        <p
                                                            class="checkbox-title"
                                                        >
                                                            Customer Search
                                                        </p>
                                                        <div
                                                            class="form-custom"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control bg-grey"
                                                                placeholder="Enter Customer Name"
                                                            />
                                                        </div>
                                                        <div
                                                            class="selectBox-cont"
                                                        >
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Brian Johnson
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Russell Copeland
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Greg Lynch
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                John Blair
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Barbara Moore
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Hendry Evan
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="username"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Richard Miles
                                                            </label>
                                                        </div>
                                                        <button
                                                            type="submit"
                                                            class="btn w-100 btn-primary"
                                                        >
                                                            Apply
                                                        </button>
                                                        <button
                                                            type="reset"
                                                            class="btn w-100 btn-grey"
                                                        >
                                                            Reset
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="multipleSelection">
                                                <div class="selectBox">
                                                    <p class="mb-0">
                                                        <i
                                                            class="fas fa-calendar me-1 select-icon"
                                                        ></i>
                                                        Select Date
                                                    </p>
                                                    <span class="down-icon"
                                                        ><i
                                                            class="fas fa-chevron-down"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div id="checkBoxes">
                                                    <form action="#">
                                                        <p
                                                            class="checkbox-title"
                                                        >
                                                            Date Filter
                                                        </p>
                                                        <div
                                                            class="selectBox-cont selectBox-cont-one h-auto"
                                                        >
                                                            <div
                                                                class="date-picker"
                                                            >
                                                                <div
                                                                    class="form-custom cal-icon"
                                                                >
                                                                    <input
                                                                        class="form-control datetimepicker"
                                                                        type="text"
                                                                        placeholder="Form"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="date-picker pe-0"
                                                            >
                                                                <div
                                                                    class="form-custom cal-icon"
                                                                >
                                                                    <input
                                                                        class="form-control datetimepicker"
                                                                        type="text"
                                                                        placeholder="To"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="date-list"
                                                            >
                                                                <ul>
                                                                    <li>
                                                                        <a
                                                                            href="#"
                                                                            class="btn date-btn"
                                                                            >Today</a
                                                                        >
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="#"
                                                                            class="btn date-btn"
                                                                            >Yesterday</a
                                                                        >
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="#"
                                                                            class="btn date-btn"
                                                                            >Last
                                                                            7
                                                                            days</a
                                                                        >
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="#"
                                                                            class="btn date-btn"
                                                                            >This
                                                                            month</a
                                                                        >
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="#"
                                                                            class="btn date-btn"
                                                                            >Last
                                                                            month</a
                                                                        >
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="multipleSelection">
                                                <div class="selectBox">
                                                    <p class="mb-0">
                                                        <i
                                                            class="fas fa-book-open me-1 select-icon"
                                                        ></i>
                                                        Select Status
                                                    </p>
                                                    <span class="down-icon"
                                                        ><i
                                                            class="fas fa-chevron-down"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div id="checkBoxes">
                                                    <form action="#">
                                                        <p
                                                            class="checkbox-title"
                                                        >
                                                            By Status
                                                        </p>
                                                        <div
                                                            class="selectBox-cont"
                                                        >
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="name"
                                                                    checked
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                All Invoices
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="name"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Paid
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="name"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Overdue
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="name"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Draft
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="name"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Recurring
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="name"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Cancelled
                                                            </label>
                                                        </div>
                                                        <button
                                                            type="submit"
                                                            class="btn w-100 btn-primary"
                                                        >
                                                            Apply
                                                        </button>
                                                        <button
                                                            type="reset"
                                                            class="btn w-100 btn-grey"
                                                        >
                                                            Reset
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="multipleSelection">
                                                <div class="selectBox">
                                                    <p class="mb-0">
                                                        <i
                                                            class="fas fa-bookmark me-1 select-icon"
                                                        ></i>
                                                        By Category
                                                    </p>
                                                    <span class="down-icon"
                                                        ><i
                                                            class="fas fa-chevron-down"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div id="checkBoxes">
                                                    <form action="#">
                                                        <p
                                                            class="checkbox-title"
                                                        >
                                                            Category
                                                        </p>
                                                        <div
                                                            class="form-custom"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control bg-grey"
                                                                placeholder="Enter Category Name"
                                                            />
                                                        </div>
                                                        <div
                                                            class="selectBox-cont"
                                                        >
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Advertising
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Food
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Marketing
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Repairs
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Software
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Stationary
                                                            </label>
                                                            <label
                                                                class="custom_check w-100"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    name="category"
                                                                />
                                                                <span
                                                                    class="checkmark"
                                                                ></span>
                                                                Travel
                                                            </label>
                                                        </div>
                                                        <button
                                                            type="submit"
                                                            class="btn w-100 btn-primary"
                                                        >
                                                            Apply
                                                        </button>
                                                        <button
                                                            type="reset"
                                                            class="btn w-100 btn-grey"
                                                        >
                                                            Reset
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="report-btn">
                                                <a href="#" class="btn">
                                                    <img
                                                        src="{{ asset('/img/icons/invoices-icon5.png')}}"
                                                        alt=""
                                                        class="me-2"
                                                    />
                                                    Generate report
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card invoices-tabs-card border-0">
                        <div class="card-body card-body pt-0 pb-0">
                            <div class="invoices-main-tabs">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="invoices-tabs">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="{{ route('instructor.invoices')}}"
                                                        class="active"
                                                        >All Invoice</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('instructor.invoices-paid')}}"
                                                        >Paid</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="invoices-settings-btn">
                                            <a
                                                href="{{ route('instructor.invoices-settings')}}"
                                                class="invoices-settings-icon"
                                            >
                                                <i
                                                    class="feather feather-settings"
                                                ></i>
                                            </a>
                                            <a
                                                href="{{ route('instructor.add-invoice')}}"
                                                class="btn"
                                            >
                                                <i
                                                    class="feather feather-plus-circle"
                                                ></i>
                                                New Invoice
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card inovices-card">
                                <div class="card-body">
                                    <div class="inovices-widget-header">
                                        <span class="inovices-widget-icon">
                                            <img
                                                src="{{ asset('/img/icons/invoices-icon1.svg')}}"
                                                alt=""
                                            />
                                        </span>
                                        <div class="inovices-dash-count">
                                            <div class="inovices-amount">
                                                $8,78,797
                                            </div>
                                        </div>
                                    </div>
                                    <p class="inovices-all">
                                        All Invoices <span>50</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card inovices-card">
                                <div class="card-body">
                                    <div class="inovices-widget-header">
                                        <span class="inovices-widget-icon">
                                            <img
                                                src="{{ asset('/img/icons/invoices-icon2.svg')}}"
                                                alt=""
                                            />
                                        </span>
                                        <div class="inovices-dash-count">
                                            <div class="inovices-amount">
                                                $4,5884
                                            </div>
                                        </div>
                                    </div>
                                    <p class="inovices-all">
                                        Paid Invoices <span>60</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card inovices-card">
                                <div class="card-body">
                                    <div class="inovices-widget-header">
                                        <span class="inovices-widget-icon">
                                            <img
                                                src="{{ asset('/img/icons/invoices-icon3.svg')}}"
                                                alt=""
                                            />
                                        </span>
                                        <div class="inovices-dash-count">
                                            <div class="inovices-amount">
                                                $2,05,545
                                            </div>
                                        </div>
                                    </div>
                                    <p class="inovices-all">
                                        Unpaid Invoices <span>70</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card inovices-card">
                                <div class="card-body">
                                    <div class="inovices-widget-header">
                                        <span class="inovices-widget-icon">
                                            <img
                                                src="{{ asset('/img/icons/invoices-icon4.svg')}}"
                                                alt=""
                                            />
                                        </span>
                                        <div class="inovices-dash-count">
                                            <div class="inovices-amount">
                                                $8,8,797
                                            </div>
                                        </div>
                                    </div>
                                    <p class="inovices-all">
                                        Cancelled Invoices <span>80</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-stripped table-hover datatable"
                                        >
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Invoice ID</th>
                                                    <th>Category</th>
                                                    <th>Created on</th>
                                                    <th>Invoice to</th>
                                                    <th>Amount</th>
                                                    <th>Due date</th>
                                                    <th>Status</th>
                                                    <th class="text-end">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label
                                                            class="custom_check"
                                                        >
                                                            <input
                                                                type="checkbox"
                                                                name="invoice"
                                                            />
                                                            <span
                                                                class="checkmark"
                                                            ></span>
                                                        </label>
                                                        <a
                                                            href="{{ route('instructor.view-invoice')}}"
                                                            class="invoice-link"
                                                            >IN093439#@09</a
                                                        >
                                                    </td>
                                                    <td>Advertising</td>
                                                    <td>16 Mar 2022</td>
                                                    <td>
                                                        <h2
                                                            class="table-avatar"
                                                        >
                                                            <a
                                                                href="{{ route('instructor.profile')}}"
                                                                ><img
                                                                    class="avatar avatar-sm me-2 avatar-img rounded-circle"
                                                                    src="{{ asset('/img/profiles/avatar-04.jpg')}}"
                                                                    alt="User Image"
                                                                />
                                                                Barbara Moore</a
                                                            >
                                                        </h2>
                                                    </td>
                                                    <td class="text-primary">
                                                        $1,54,220
                                                    </td>
                                                    <td>23 Mar 2022</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-success-light"
                                                            >Paid</span
                                                        >
                                                    </td>
                                                    <td class="text-end">
                                                        <div
                                                            class="dropdown dropdown-action"
                                                        >
                                                            <a
                                                                href="#"
                                                                class="action-icon dropdown-toggle"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false"
                                                                ><i
                                                                    class="fas fa-ellipsis-v"
                                                                ></i
                                                            ></a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end"
                                                            >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="{{ route('instructor.edit-invoice')}}"
                                                                    ><i
                                                                        class="far fa-edit me-2"
                                                                    ></i
                                                                    >Edit</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="{{ route('instructor.view-invoice')}}"
                                                                    ><i
                                                                        class="far fa-eye me-2"
                                                                    ></i
                                                                    >View</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);"
                                                                    ><i
                                                                        class="far fa-trash-alt me-2"
                                                                    ></i
                                                                    >Delete</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);"
                                                                    ><i
                                                                        class="far fa-check-circle me-2"
                                                                    ></i
                                                                    >Mark as
                                                                    sent</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);"
                                                                    ><i
                                                                        class="far fa-paper-plane me-2"
                                                                    ></i
                                                                    >Send
                                                                    Invoice</a
                                                                >
                                                                <a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);"
                                                                    ><i
                                                                        class="far fa-copy me-2"
                                                                    ></i
                                                                    >Clone
                                                                    Invoice</a
                                                                >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label
                                                            class="custom_check"
                                                        >
                                                            <input
                                                                type="checkbox"
                                                                name="invoice"
                                                            />
                                                            <span
                                                                class="checkmark"
                                                            ></span>
                                                        </label>
                                                        <a
                                                            href="{{ route('instructor.view-invoice')}}"
                                                            class="invoice-link"
                                                            >IN093439#@10</a
                                                        >
                                                    </td>
                                                    <td>Food</td>
                                                    <td>14 Mar 2022</td>
                                                    <td>
                                                        <h2
                                                            class="table-avatar"
                                                        >
                                                            <a
                                                                href="{{ route('instructor.profile')}}"
                                                                ><img
                                                                    class="avatar avatar-sm me-2 avatar-img rounded-circle"
                                                                    src="{{ asset('/img/profiles/avatar-06.jpg')}}"
                                                                    alt="User Image"
                                                                />
                                                                Karlene
                                                                Chaidez</a
                                                            >
                                                        </h2>
                                                    </td>
                                                    <td class="text-primary">
                                                        $1,222
                                                    </td>
                                                    <td>18 Mar 2022</td>
                                                    <td>
                                                        <span class="badge bg-danger-light">Overdue</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="{{ route('instructor.edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="{{ route('instructor.view-invoice')}}"><i class="far fa-eye me-2"></i>View</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"
                                                                    ></i>Mark as sent</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

        <script src="{{ asset('/plugins/select2/js/select2.min.js')}}"></script>

        <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatables/datatables.min.js')}}"></script>

        <script src="{{ asset('/plugins/moment/moment.min.js')}}"></script>
        <script src="{{ asset('/js/bootstrap-datetimepicker.min.js')}}"></script>

        <script src="{{ asset('/js/script.js')}}"></script>
    </body>
</html>
