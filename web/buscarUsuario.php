<?php
session_start();
if(!isset($_SESSION['SESSID'])){
	Header("Location: ../authentication/layouts/basic/sign-in.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="">
	<title>Buscar Usuario - Fivem StaffPanel</title>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
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
			<!--begin::Aside-->
			<?php
			include('menu.php');
			?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include('header.php')?>
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
								<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Buscar Usuario
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
					<div class="post d-flex flex-column-fluid rounded border p-10" id="kt_block_ui_2_target">
						<!--begin::Container-->
                        
                        
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Navbar-->
                            <div class="d-flex align-items-center position-relative my-1">
                        <div class="input-group mb-5">
						<input type="text" class="form-control" id="usernameToSearch" placeholder="Nombre de Usuario" aria-label="Nombre de Usuario" aria-describedby="basic-addon2">
						<span class="input-group-tex btn btn-primary me-2 mb-2t" onclick="searchUser()">Buscar</span>
						</div>
                    </div>
							<div class="card mb-5 mb-xl-10">
                                
                            <div class="table-responsive">
                                <table class="table table-rounded table-striped border gy-7 gs-7">
                                <thead>
                                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                    <th>Identificado</th>
                                    <th>Nombre</th>
                                    <th>Nombre IC</th>
                                    <th>Apellido IC</th>
                                    <th>Group</th>
                                </tr>
                                </thead>
                                <tbody id="tableContent">
                                
                                </tbody>
                                </table>
                            </div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<script>
        function searchUser(){
			var target = document.querySelector("#kt_block_ui_2_target");

			var blockUI = new KTBlockUI(target, {
				message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Buscando Usuario...</div>',
			});
			blockUI.block();
            var username = document.getElementById('usernameToSearch').value;
            console.log(username)
			var url = "http://yourapi.com/api/searchUser";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
                var obj = JSON.parse(xhr.responseText);
                console.log(xhr.responseText)
                if (obj.Status == "Success") {
                    for (let x in obj.Result) {
                        var rowHTML = `
                        <tr>
                            
                            <td>${obj.Result[x].identifier}</td>
                            <td><a href="account/overview.php?identifier=${obj.Result[x].identifier}" class="text-dark text-hover-primary">${obj.Result[x].name}</a></td>
                            <td>${obj.Result[x].firstname}</td>
                            <td>$${obj.Result[x].lastname}</td>
                            <td>${obj.Result[x].group}</td>
                        </tr>
                        `
                        var tableContent = document.getElementById('tableContent').innerHTML += rowHTML;
                    }
					blockUI.release();
                }
			}};

			var data = `{
				"name": "${username}"
			}`;

			xhr.send(data);
        }
        /*
        var myModalEl = document.getElementById('kt_modal_searchUser');
		var modal = bootstrap.Modal.getInstance(myModalEl);
		modal.show();
		var url = "http://yourapi.com/api/getBanList";

        var xhr = new XMLHttpRequest();
        xhr.open("GET", url);

        xhr.setRequestHeader("Accept", "application/json");

        xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            var obj = JSON.parse(xhr.responseText);
			console.log(xhr.responseText)
			if (obj.Status == "Success") {
                for (let x in obj.Result) {
                    var permanente = '<span class="badge badge-warning">No</span>';
                    if(obj.Result[x].permanent == 1){
                        permanente = '<span class="badge badge-danger">Si</span>';
                    }
                    var rowHTML = `
                    <tr>
                        <td><a href="account/overview.php?identifier=${obj.Result[x].identifier}" class="text-dark text-hover-primary">${obj.Result[x].targetplayername}</a></td>
                        <td>${obj.Result[x].identifier}</td>
                        <td>${obj.Result[x].discord}</td>
                        <td>${obj.Result[x].sourceplayername}</td>
                        <td>${obj.Result[x].reason}</td>
                        <td>${permanente}</td>
                    </tr>
                    `
                    var tableContent = document.getElementById('tableContent').innerHTML += rowHTML;
                }
            }
        }};

        xhr.send();*/
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