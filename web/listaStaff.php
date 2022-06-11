<?php
session_start();
if(!isset($_SESSION['SESSID'])){
	Header("Location: ../authentication/layouts/basic/sign-in.html");
}
if(isset($_GET['id'])){
	$id = $_GET['id'];
} else {
	$id = 'null';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title>Lista Staff - Fivem StaffPanel</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside--> <?php
			include('menu.php');
			?>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header--> <?php include('header.php')?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Lista de Staff
                                </h1>
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-300 border-start mx-4"></span>
                                <!--end::Separator-->
                                <!--begin::Breadcrumb-->
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">

                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <!--begin::Menu 1-->
                                            <!--end::Content-->

                                            <!--end::Menu 1-->
                                            <!--end::Filter-->
                                            <!--begin::Export-->

                                            <!--end::Export-->
                                            <!--begin::Add user-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_user">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor"></rect>
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                            fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Añadir Usuario
                                            </button>
                                            <!--end::Add user-->
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Group actions-->
                                        <div class="d-flex justify-content-end align-items-center d-none"
                                            data-kt-user-table-toolbar="selected">
                                            <div class="fw-bolder me-5">
                                                <span class="me-2"
                                                    data-kt-user-table-select="selected_count"></span>Selected
                                            </div>
                                            <button type="button" class="btn btn-danger"
                                                data-kt-user-table-select="delete_selected">Delete Selected</button>
                                        </div>
                                        <!--end::Group actions-->
                                        <!--begin::Modal - Adjust Balance-->

                                        <!--end::Modal - New Card-->
                                        <!--begin::Modal - Add task-->
                                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">Añadir Usuario</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            data-kt-users-modal-action="close">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor"></rect>
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)"
                                                                        fill="currentColor"></rect>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_add_user_form"
                                                            class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                            >
                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                                data-kt-scroll-offset="300px"
                                                                style="max-height: 669px;">
                                                                <!--begin::Input group-->
                                                                
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">Nombre de Usuario</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" id="username" name="user_name"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="Nombre">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fw-bold fs-6 mb-2">Contraseña</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="password" id="password" name="user_email"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="Contraseña"
                                                                        >
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>

                                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fw-bold fs-6 mb-2">Nombre del Rango</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" id="rangoName" name="user_email"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="Soporte Pruebas"
                                                                        >
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fw-bold fs-6 mb-5">Permiso</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Roles-->
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" id="soporteCheck" type="radio" value="0"
                                                                                id="kt_modal_update_role_option_0"
                                                                                checked="checked">
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_0">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Soporte</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    business owners and company
                                                                                    administrators</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class="separator separator-dashed my-5"></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" id="moderadorCheck" type="radio" value="1"
                                                                                id="kt_modal_update_role_option_1">
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_1">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Moderador</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    developers or people primarily using
                                                                                    the API</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class="separator separator-dashed my-5"></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" id="administradorCheck" type="radio" value="2"
                                                                                id="kt_modal_update_role_option_2">
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_2">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Administrador</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    people who need full access to
                                                                                    analytics data, but don't need to
                                                                                    update business settings</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class="separator separator-dashed my-5"></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" id="direccionCheck" type="radio" value="3"
                                                                                id="kt_modal_update_role_option_3">
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_3">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Dirección</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    employees who regularly refund
                                                                                    payments and respond to disputes
                                                                                </div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class="separator separator-dashed my-5"></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" id="devCheck" type="radio" value="4"
                                                                                id="kt_modal_update_role_option_4">
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_4">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Dev</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    people who need to preview content
                                                                                    data, but don't need to make any
                                                                                    updates</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>

                                                                    <div class="separator separator-dashed my-5"></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" id="ceoCheck" type="radio" value="4"
                                                                                id="kt_modal_update_role_option_4">
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_4">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    CEO</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    people who need to preview content
                                                                                    data, but don't need to make any
                                                                                    updates</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <!--end::Roles-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Scroll-->
                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-15">
                                                                <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3"
                                                                    data-kt-users-modal-action="cancel">Cerrar</button>
                                                                <button type="button" data-bs-dismiss="modal" onclick="registerUser()" class="btn btn-primary"
                                                                    >
                                                                    <span class="indicator-label">Crear Usuario</span>
                                                                    <span class="indicator-progress">Por favor Espera...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                            <div></div>
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - Add task-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body py-4">
                                    <!--begin::Table-->
                                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="table-responsive">
                                            <table
                                                class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                                id="kt_table_users">
                                                <thead>
                                                    <tr
                                                        class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                            aria-label="
                                                                                
                                                                                    
                                                                                
                                                                            " style="width: 29.25px;">
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    data-kt-check="true"
                                                                    data-kt-check-target="#kt_table_users .form-check-input"
                                                                    value="1">
                                                            </div>
                                                        </th>
                                                        <th class="min-w-125px sorting" tabindex="0"
                                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                                            aria-label="User: activate to sort column ascending"
                                                            style="width: 288.578px;">Usuario</th>
                                                        <th class="min-w-125px sorting" tabindex="0"
                                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                                            aria-label="Role: activate to sort column ascending"
                                                            style="width: 160.484px;">Rol</th>
                                                        <th class="min-w-125px sorting" tabindex="0"
                                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                                            aria-label="Last login: activate to sort column ascending"
                                                            style="width: 160.484px;">Permission Index</th>
                                                        <th class="min-w-125px sorting" tabindex="0"
                                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                                            aria-label="Two-step: activate to sort column ascending"
                                                            style="width: 160.484px;">CookieToken</th>
                                                        <th class="min-w-125px sorting" tabindex="0"
                                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                                            aria-label="Joined Date: activate to sort column ascending"
                                                            style="width: 208.266px;">Joined Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-gray-600 fw-bold" id="tableContainer">
                                                    

                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>

                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
    var hostUrl = "assets/";
    </script>
    <script>
    var url = "http://yourapi.com/api/getStaffList";

    var xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            var obj = JSON.parse(xhr.responseText);
            if (obj.Status == "Success") {
                for (let x in obj.Result) {
                    var username = obj.Result[x].Username;
                    var rol = obj.Result[x].Rango;
                    var permission = obj.Result[x].Permisos;
                    var cookie = obj.Result[x].CookieToken;
                    var joinedDate = obj.Result[x].JoinDate.slice(0, -5).replace("T", " ");

                    var HtmlTable = `
                    <tr>
                        <td>
                            <div
                                class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox"
                                    value="1">
                            </div>
                        </td>
                        <td class="d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <a
                                    class="text-gray-800 text-hover-primary mb-1">${username}</a>
                                <span>${username}@yourserver.es</span>
                            </div>
                        </td>
                        <td>${rol}</td>
                        <td data-order="2022-05-20T21:28:07+02:00">
                            <div class="badge badge-light fw-bolder">Permiso(${permission})
                            </div>
                        </td>
                        <td>${cookie}</td>
                        <td data-order="2022-08-19T10:30:00+02:00">${joinedDate}
                        </td>
                    </tr>
                    `
                    var tableContent = document.getElementById('tableContainer').innerHTML += HtmlTable;
                }
            }
        }
    };

    xhr.send();

    function getUserPanelData() {
        var url = "http://yourapi.com/api/getUserPanelData";
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url);
        xhr.setRequestHeader("Accept", "application/json");
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                var obj = JSON.parse(xhr.responseText);
                if (obj.Status != 'Bad') {
                    document.getElementById("nameAdmin").textContent = obj.Result.Username;
                    const firstCharacter = obj.Result.Username.charAt(0);
                    username = obj.Result.Username;
                    document.getElementById("rangoAdmin").textContent = obj.Result.Rango;
                    document.getElementById("joinDateAdmin").textContent = "Se unió el: " + obj.Result.JoinDate
                        .toString().slice(0, -14);;
                } else if (obj.Status == 'Bad') {
                    window.location.href = 'logout.php';
                }
            }
        };
        var data = `{"cookie": "<?php echo $_SESSION['SESSID'];?>"}`;
        xhr.send(data);
    }


    function registerUser(){
        var usuario =  document.getElementById("username").value;
        var password =  document.getElementById("password").value;
        var rangoName =  document.getElementById("rangoName").value;
        var soporte =  document.getElementById("soporteCheck").checked;
        var moderador =  document.getElementById("moderadorCheck").checked;
        var administrador =  document.getElementById("administradorCheck").checked;
        var direccion =  document.getElementById("direccionCheck").checked;
        var dev =  document.getElementById("devCheck").checked;
        var ceo =  document.getElementById("ceoCheck").checked;
        var permisos = null;
        if(soporte){
            permisos = 1;
        } else if(moderador){
            permisos = 2;
        } else if(administrador){
            permisos = 3;
        } else if(direccion){
            permisos = 4;
        } else if(dev){
            permisos = 5;
        } else {
            permisos = 6;
        }
        var url = "http://yourapi.com/api/registerNewStaff";

        var xhr = new XMLHttpRequest();
        xhr.open("POST", url);

        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            obj = JSON.parse(xhr.responseText);
            if(obj.Status != 'Bad'){
                Swal.fire({
					text: "Se ha creado el usuario correctamente",
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Aceptar",
					customClass: {
						confirmButton: "btn btn-primary"
					}
				});
            }
        }};

        var data = `{"usuario": "${usuario}", "password": "${password}", "nombreRango": "${rangoName}", "permiso": "${permisos}"}`;

        xhr.send(data);
    }

    getUserPanelData();
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>;