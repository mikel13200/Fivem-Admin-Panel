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
    <title>Miembros Mafias - Fivem StaffPanel</title>
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
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Lista de Mafias
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
                            <!--begin::Navbar-->
                            <!--begin::Tables widget 6-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-gray-800">Miembros de la Mafia</span>
                                    </h3>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Nav-->

                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr
                                                            class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                                            <th>Nombre</th>
                                                            <th>Identificador</th>
                                                            <th>licencia</th>
                                                            <th>Rango</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody id="tableContent">


                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Tables widget 6-->
                            <!--end::Chart widget 4-->
                        </div>
                        <!--end::Col-->
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
    var mafiaID = <?php echo $id; ?>;
  

    var url = "http://yourapi.com/api/getMafiaMembers2";

    var xhr = new XMLHttpRequest();
    xhr.open("POST", url);

    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        console.log(xhr.responseText);
        var obj = JSON.parse(xhr.responseText);
        if (obj.Status == "Success") {
            for (let x in obj.Result) {
                var steamName = null;
                var firstName = null;
                var lastname = null;
                var license = null;
                steamName = obj.Result[x].name;
                firstName = obj.Result[x].name;
                lastname = obj.Result[x].name;
                license = obj.Result[x].name;
                var star1 = '';
                var star2 = '';
                var star3 = '';
                var star4 = '';
                var star5 = '';
                if(obj.Result[x].job_grade == 1){
                    star1 = 'checked';
                } else if(obj.Result[x].job_grade == 2){
                    star2 = 'checked';
                    star1 = 'checked';
                } else if(obj.Result[x].job_grade == 3){
                    star3 = 'checked';
                    star2 = 'checked';
                    star1 = 'checked';
                } else if(obj.Result[x].job_grade == 4){
                    star4 = 'checked';
                    star3 = 'checked';
                    star2 = 'checked';
                    star1 = 'checked';
                } else if(obj.Result[x].job_grade == 5){
                    star5 = 'checked';
                    star4 = 'checked';
                    star3 = 'checked';
                    star2 = 'checked';
                    star1 = 'checked';
                }
                var rowHTML = `
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div
                                class="d-flex justify-content-start flex-column">
                                <a href="account/overview.php?identifier=${obj.Result[x].identifier}"
                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">${steamName}</a>
                                <span
                                    class="text-muted fw-bold text-muted d-block fs-7">${firstName} ${lastname}</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span
                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">${obj.Result[x].identifier}</span>
                    </td>
                    <td>
                        <a
                            class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">${obj.Result[x].license}</a>
                    </td>
                    <td>
                        <div class="rating">
                            <div class="rating-label me-1 ${star1}" id="rating1">
                                <i class="bi bi-star-fill fs-6s"></i>
                            </div>
                            <div class="rating-label me-1 ${star2}" id="rating2">
                                <i class="bi bi-star-fill fs-6s"></i>
                            </div>
                            <div class="rating-label me-1 ${star3}" id="rating3">
                                <i class="bi bi-star-fill fs-6s"></i>
                            </div>
                            <div class="rating-label me-1 ${star4}" id="rating4">
                                <i class="bi bi-star-fill fs-6s"></i>
                            </div>
                            <div class="rating-label me-1 ${star5}" id="rating5">
                                <i class="bi bi-star-fill fs-6s"></i>
                            </div>
                        </div>
                    </td>
                </tr>
                `
                var tableContent = document.getElementById('tableContent').innerHTML += rowHTML; 
            }
        }
    }};

    var data = `{"mafiaID": "0${mafiaID}"}`;  

    xhr.send(data);

    function getUserPanelData(){ 
		var url = "http://yourapi.com/api/getUserPanelData";
		var xhr = new XMLHttpRequest();
		xhr.open("POST", url);
		xhr.setRequestHeader("Accept", "application/json");
		xhr.setRequestHeader("Content-Type", "application/json");
		xhr.onreadystatechange = function () {
		if (xhr.readyState === 4) {
			var obj = JSON.parse(xhr.responseText);
			if(obj.Status != 'Bad') {
				document.getElementById("nameAdmin").textContent = obj.Result.Username;
				const firstCharacter = obj.Result.Username.charAt(0);
				username = obj.Result.Username;
				document.getElementById("rangoAdmin").textContent = obj.Result.Rango;
				document.getElementById("joinDateAdmin").textContent = "Se unió el: " + obj.Result.JoinDate.toString().slice(0, -14);;
			} else if(obj.Status == 'Bad'){
				window.location.href = 'logout.php';
			}
		}};
		var data = `{"cookie": "<?php echo $_SESSION['SESSID'];?>"}`;
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