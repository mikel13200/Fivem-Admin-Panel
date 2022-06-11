<?php
session_start();
if(!isset($_SESSION['SESSID'])){
	Header("Location: ../authentication/layouts/basic/sign-in.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="../">
	<title>Fivem Staff Panel - Search User</title>
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
			include('../menu.php');
			?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include('../header.php')?>
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
								<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Información Usuario
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
							<div class="card mb-5 mb-xl-10" id="addBanClass2">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<div
												class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												<div class="symbol-label fs-2 fw-bold text-success" id="logoText2">D</div>
												<div
													class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
												</div>
											</div>
										</div>
										<!--end::Pic-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div
												class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<!--begin::Name-->
													<div class="d-flex align-items-center mb-2">
														<a
															class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1" id="steamName">Loading...</a>
														<a href="#">
															<!--end::Svg Icon-->
														</a>
														<a href="#"
															class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3"
															data-bs-toggle="modal"
															data-bs-target="#kt_modal_upgrade_plan" id="group">Loading...</a>
													</div>
													<!--end::Name-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
														<a href="#"
															class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
																		fill="black" />
																	<path
																		d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->Loading...</a>
														<a href="#"
															class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
																		fill="black" />
																	<path
																		d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon--><a id="coords">Loading...</a></a>
														<a href="#"
															class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path
																		d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z"
																		fill="black" />
																	<path opacity="0.3"
																		d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z"
																		fill="black" />
																	<path
																		d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon--><a id="phoneNumber">Loading...</a></a>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
												<!--begin::Actions-->
												
												<!--end::Actions-->
											</div>
											<!--end::Title-->
											<!--begin::Stats-->
											<div class="d-flex flex-wrap flex-stack">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column flex-grow-1 pe-8">
													<!--begin::Stats-->
													<div class="d-flex flex-wrap">
														<!--begin::Stat-->
														<div
															class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13"
																			height="2" rx="1"
																			transform="rotate(90 13 6)" fill="black" />
																		<path
																			d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
																			fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="fs-2 fw-bolder" id="dineroBanco">Loading...</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-bold fs-6 text-gray-400">Banco</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div
															class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13"
																			height="2" rx="1"
																			transform="rotate(-90 11 18)"
																			fill="black" />
																		<path
																			d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
																			fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="fs-2 fw-bolder" id="dineroNegro">Loading...</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-bold fs-6 text-gray-400">Dinero Negro</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div
															class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13"
																			height="2" rx="1"
																			transform="rotate(90 13 6)" fill="black" />
																		<path
																			d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
																			fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="fs-2 fw-bolder" id="dineroEfectivo">Loading...</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-bold fs-6 text-gray-400">Efectivo</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Progress-->
												<div
													class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
													<div class="d-flex justify-content-between w-100 mt-auto mb-2">
														<span class="fw-bold fs-6 text-gray-400">Progreso del
															Tutorial</span>
														<span class="fw-bolder fs-6" id="tutorialPorcentaje">Loading...</span>
													</div>
													<div class="h-5px mx-3 w-100 bg-light mb-3">
														<div class="bg-success rounded h-5px" role="progressbar"
															style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Details-->
									<!--begin::Navs-->
									<ul
										class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5 active"
												href="../../demo1/dist/account/overview.html">Overview</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
									</ul>
									<!--begin::Navs-->
								</div>
								<div class="blockui-overlay" style="display:none;z-index: 1;" id="banTarget2"><div class="blockui-message"> Baneado</div></div>
							</div>
							<!--end::Navbar-->
							<!--begin::details View-->
							
							<!--end::details View-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<div class="col-xl-6 mb-xl-10" id="addBanClass3">
									<!--begin::Tables widget 2-->
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
										<h3 class="fw-bolder m-0">Detalles del Usuario
										</h3>
										</div>
										<!--end::Card title-->
										<!--begin::Action-->
										<!--end::Action-->
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<!--begin::Row-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Nombre
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800" id="name">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Apellidos
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold text-gray-800 fs-6" id="firstSecondName">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Número de teléfono
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
											data-bs-original-title="Este número es IC"
											aria-label="Este número es IC">
											</i>
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bolder fs-6 text-gray-800 me-2" id="phoneNumber2">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Trabajo
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<a class="fw-bold fs-6 text-gray-800 text-hover-primary" id="job">Loading...
											</a>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Identificador
											
											
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800" id="identifier">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Licencia
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800" id="license">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-10">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Fecha de nacimiento
										</label>
										<!--begin::Label-->
										<!--begin::Label-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800" id="dateOfBirth">Loading...
											</span>
										</div>
										<!--begin::Label-->
										</div>
										<div class="row mb-10">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Sexo
										</label>
										<!--begin::Label-->
										<!--begin::Label-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800" id="sex">Loading...
											</span>
										</div>
										<!--begin::Label-->
										</div>
										<!--end::Input group-->
										<!--begin::Notice-->
										<!--end::Notice-->
									</div>
									<!--end::Card body-->
									<div class="blockui-overlay" style="display:none;z-index: 1;" id="banTarget3">
										<div class="blockui-message"> Baneado
										</div>
									</div>
									</div>
									
									<!--end::Tables widget 2-->
								</div>
								<div class="col-xl-6 mb-5 mb-xl-10" id="addBanClass4">
									<!--begin::Chart widget 4-->
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
										<h3 class="fw-bolder m-0">Otros detalles
										</h3>
										</div>
										<!--end::Card title-->
										<!--begin::Action-->
										<!--end::Action-->
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<!--begin::Row-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Hambre / Sed
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800" id="hungerThirst">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Habilidades
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<button type="button" class="btn btn-primary" style="width: 250px;height: 40px;" data-bs-toggle="modal" data-bs-target="#kt_modal_skills">
											Abrir
											</button>
										</div>
										<div class="modal fade" tabindex="-1" id="kt_modal_skills">
											<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">Habilidades
												</h5>
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<span class="svg-icon svg-icon-2x">
													</span>
												</div>
												<!--end::Close-->
												</div>
												<div class="modal-body">
												<div class="card-body pt-0" id="skillContainer">
													<!--begin::Item-->
													<!--end::Item-->
												</div>
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar
												</button>
												</div>
											</div>
											</div>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">BanID
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Este número es IC" aria-label="Este número es IC">
											</i>
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bolder fs-6 text-gray-800 me-2" id="pet">Loading...
											</span>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Baneado
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<a class="fw-bold fs-6 text-gray-800 text-hover-primary" id="isBanned">Loading...
											</a>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Transacciones
											
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<button type="button" class="btn btn-primary" style="width: 250px;height: 40px;" data-bs-toggle="modal" data-bs-target="#kt_modal_transactions">
											Abrir
											</button>
										</div>
										<div class="modal fade" tabindex="-1" id="kt_modal_transactions">
											<div class="modal-dialog" style="width: 1000px;max-width: 1000px;">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title">Transacciones
												</h5>
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<span class="svg-icon svg-icon-2x">
													</span>
												</div>
												<!--end::Close-->
												</div>
												<div class="modal-body">
												<div class="">
													<!--begin::Table Widget 3-->
													<div class="card card-flush h-xl-100">
													<!--begin::Card header-->
													<div class="card-header py-7">
														<!--begin::Tabs-->
														<div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
														<!--begin::Tab item-->
														<div class="fs-4 fw-bolder pb-3 cursor-pointer border-bottom border-3 border-primary" onclick="clickOnOtherTab();" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">Todas(Cantidad)
														</div>
														<!--end::Tab item-->
														<!--begin::Tab item-->
														</div>
														<!--end::Tabs-->
														<!--begin::Create campaign button-->
														<!--end::Create campaign button-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-1">
														<!--end::Sort & Filter-->
														<!--begin::Seprator-->
														<div class="separator separator-dashed my-5">
														</div>
														<!--end::Seprator-->
														<!--begin::Table-->
														<div id="kt_widget_table_3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
														<div class="table-responsive">
															<div id="kt_widget_table_3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
															<div class="table-responsive">
																<table id="kt_widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3 dataTable no-footer" data-kt-table-widget-3="all">
																<thead class="d-none">
																	<tr>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Campaign: activate to sort column ascending" style="width: 0px;">Campaign
																	</th>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Platforms: activate to sort column ascending" style="width: 0px;">Platforms
																	</th>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status
																	</th>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Team: activate to sort column ascending" style="width: 0px;">Team
																	</th>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date
																	</th>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 0px;">Progress
																	</th>
																	<th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">Action
																	</th>
																	</tr>
																</thead>
																<tbody id="transactionAllReceived">
																</tbody>
																</table>
															</div>
															<div class="row">
																<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
																</div>
																<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
																</div>
															</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
															</div>
															<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
															</div>
														</div>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Card body-->
													</div>
													<!--end::Table Widget 3-->
												</div>
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar
												</button>
												</div>
											</div>
											</div>
										</div>
										<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Licencias
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<button type="button" class="btn btn-primary" style="width: 250px;height: 40px;" data-bs-toggle="modal" data-bs-target="#kt_modal_licenses">
											Abrir
											</button>
											<div class="modal fade" tabindex="-1" id="kt_modal_licenses">
											<div class="modal-dialog">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Licencias
													</h5>
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<span class="svg-icon svg-icon-2x">
													</span>
													</div>
													<!--end::Close-->
												</div>
												<div class="modal-body">
													<div class="card-body">
													<div class="hover-scroll-overlay-y pe-6 me-n6" id="licensesContainer" style="height: 415px">
													</div>
													</div>
													<div class="modal-footer">
													<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar
													</button>
													</div>
												</div>
												</div>
											</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<!--end::Input group-->
										<!--begin::Notice-->
										<!--end::Notice-->
										</div>
										<!--end::Card body-->
									</div>
									
									<!--end::Chart widget 4-->
									<div class="blockui-overlay" style="display:none;z-index: 1;" id="banTarget4">
										<div class="blockui-message"> Baneado
										</div>
									</div>
									</div>
									
									<!--end::Col-->
								</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-4" id="addBanClass1">
									<!--begin::List widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">Armas</span>
												<span class="text-gray-400 mt-1 fw-bold fs-6">Lista de armas del
													jugador.</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-sm btn-light"
													data-bs-toggle="modal"
													data-bs-target="#kt_modal_AddWeapon">Añadir</button>
											</div>

											<div class="modal fade" tabindex="-1" id="kt_modal_AddWeapon">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Añadir Arma</h5>

															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
																data-bs-dismiss="modal" aria-label="Close">
																<span class="svg-icon svg-icon-2x"></span>
															</div>
															<!--end::Close-->
														</div>

														<div class="modal-body" style="text-align: center;">
															<div class="form-floating">
																<select class="form-select" id="floatingSelectAddWeapon"
																	onchange="detectChange(this)"
																	aria-label="Floating label select example">
																	<option selected></option>
																</select>
																<label for="floatingSelect">Selecciona una
																	Arma</label><i
																	class="fas fa-exclamation-circle ms-1 fs-7"
																	data-bs-toggle="tooltip" title=""
																	data-bs-original-title="Las armas del jugador se actualizaran cuando salga del servidor y vuelva a entrar."
																	aria-label="Las armas del jugador se actualizaran cuando salga del servidor y vuelva a entrar."></i>
															</div>
															<div
																class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
																<!--begin::Info-->
																<div class="">
																	<!--begin::Wrapper-->
																	<div class="me-3">
																		<!--begin::Icon-->
																		<img src="" id="weaponImageAdd" class="w-200px"
																			alt="">
																		<!--end::Icon-->

																		<!--end::Title-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Action-->

																	<!--end::Action-->
																</div>
																<!--end::Info-->
																<!--begin::Customer-->

																<!--end::Customer-->
															</div>
															<div id="MunicionSelect" style="display: none;">
																<label for="" style="margin-left: -300px;"
																	class="form-label fw-bold mb-5">Munición:</label>
																<div class="input-group w-md-300px"
																	data-kt-dialer="true" data-kt-dialer-min="50"
																	data-kt-dialer-max="5000" data-kt-dialer-step="50"
																	data-kt-dialer-prefix="">

																	<!--begin::Decrease control-->
																	<button
																		class="btn btn-icon btn-outline btn-outline-secondary"
																		type="button" data-kt-dialer-control="decrease">
																		<i class="bi bi-dash fs-1"></i>
																	</button>
																	<!--end::Decrease control-->

																	<!--begin::Input control-->
																	<input type="text" class="form-control" id="municionInput" readonly
																		placeholder="Amount" value="1"
																		data-kt-dialer-control="input" />
																	<!--end::Input control-->

																	<!--begin::Increase control-->
																	<button
																		class="btn btn-icon btn-outline btn-outline-secondary"
																		type="button" data-kt-dialer-control="increase">
																		<i class="bi bi-plus fs-1"></i>
																	</button>
																	<!--end::Increase control-->
																</div>
															</div>
															<div id="QuantiySelect" style="display: none;">
																<label for="" style="margin-left: -300px;"
																	class="form-label fw-bold mb-5">Cantidad:</label>
																<div class="input-group w-md-300px"
																	data-kt-dialer="true" data-kt-dialer-min="1"
																	data-kt-dialer-max="50" data-kt-dialer-step="1"
																	data-kt-dialer-prefix="">

																	<!--begin::Decrease control-->
																	<button
																		class="btn btn-icon btn-outline btn-outline-secondary"
																		type="button" data-kt-dialer-control="decrease">
																		<i class="bi bi-dash fs-1"></i>
																	</button>
																	<!--end::Decrease control-->

																	<!--begin::Input control-->
																	<input type="text" class="form-control" readonly
																		placeholder="Amount" id="quantityInput" value="1"
																		data-kt-dialer-control="input" />
																	<!--end::Input control-->

																	<!--begin::Increase control-->
																	<button
																		class="btn btn-icon btn-outline btn-outline-secondary"
																		type="button" data-kt-dialer-control="increase">
																		<i class="bi bi-plus fs-1"></i>
																	</button>
																	<!--end::Increase control-->
																</div>
															</div>
														</div>

														<div class="modal-footer">
															<button type="button" class="btn btn-light"
																data-bs-dismiss="modal">Cerrar</button>
															<button type="button" id="addWeaponButton" onclick=""
																class="btn btn-primary">Añadir</button>
														</div>
													</div>
												</div>
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Scroll-->
											<div class="hover-scroll-overlay-y pe-6 me-n6" id="weaponsContainer"
												style="height: 415px">
												<!--begin::Item-->
												<div class="blockui-overlay" id="loadingDiv" style="z-index: 1;height: 415px;
																										margin: auto;
																										width: 15%;
																										top: 130px;
																										margin-top: 10px;
																										padding: 10px;">
													<div class="blockui-message"><span class="spinner-border text-primary"></span></div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Scroll-->
										</div>
										<!--end::Body-->
										<div class="blockui-overlay" style="display:none;z-index: 1;" id="banTarget1"><div class="blockui-message"> Baneado</div></div>
									</div>
									
									<!--end::List widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4" id="addBanClass5">
									<!--begin::List widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">Vehiculos</span>
												<span class="text-gray-400 mt-1 fw-bold fs-6">Lista de vehiculos del
													jugador.</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->

											
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Scroll-->
											<div class="hover-scroll-overlay-y pe-6 me-n6" id="vehiclesContainer"
												style="height: 415px">
												<!--begin::Item-->
												<div class="blockui-overlay" id="loadingDiv2" style="z-index: 1;height: 415px;
																										margin: auto;
																										width: 15%;
																										top: 130px;
																										margin-top: 10px;
																										padding: 10px;">
													<div class="blockui-message"><span class="spinner-border text-primary"></span></div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Scroll-->
										</div>
										<!--end::Body-->
										<div class="blockui-overlay" style="display:none;z-index: 1;" id="banTarget5"><div class="blockui-message"> Baneado</div></div>
									</div>
									
									<!--end::List widget 5-->
								</div>

								<div class="col-xl-4">
									<!--begin::List widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">Acciones</span>
												<span class="text-gray-400 mt-1 fw-bold fs-6">Lista de botones con diferentes acciones para el jugador.</span>
											</h3>
											<!--end::Title-->

											
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Scroll-->
											<div class="pe-6 me-n6" style="height: 415px">
												<!--begin::Item-->
												<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
													<!--begin::Info-->
													
													<!--end::Info-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<button data-bs-toggle="modal" data-bs-target="#kt_modal_ck" class="btn btn-danger btn-hover-scale me-5" style="width: 500px;/* text-align: center; */">CK</button>
														<div class="modal fade" tabindex="-1" id="kt_modal_ck">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title">Aviso de CK</h5>
														
																		<!--begin::Close-->
																		<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																			<span class="svg-icon svg-icon-2x"></span>
																		</div>
																		<!--end::Close-->
																	</div>
														
																	<div class="modal-body">
																		<span class="text-gray-400 mt-1 fw-bold fs-6">Cuando el CK se haya realizado no habrá opción de revertir los cambios.</span>
																		<br>
																		<span class="text-gray-400 mt-1 fw-bold fs-6">¿Esta seguro de que desea realizar esta acción?</span>
																	</div>
																	
																	<div class="rounded border p-10">
																		<!--begin::Input group-->
																		<!--begin::Input group-->
																		<div class="input-group">
																			<span class="input-group-text">Razón</span>
																			<textarea class="form-control" id="ckRazon" style="height: 109px;" aria-label="With textarea"></textarea>
																		</div>
																		<!--end::Input group-->
																	</div>

																	<div class="modal-footer">
																		<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
																		<button type="button" class="btn btn-primary" onclick="makeCK()" id="kt_button_ck">
																			<span class="indicator-label">
																				Si
																			</span>
																			<span class="indicator-progress">
																				Espera... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																			</span>
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<!--end::Customer-->
												</div>
												<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
													<!--begin::Info-->
													
													<!--end::Info-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<button class="btn btn-warning btn-hover-scale me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_aviso" style="width: 500px;/* text-align: center; */">AVISO</button>
														
													</div>
													<div class="modal fade" tabindex="-1" id="kt_modal_aviso">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Aviso</h5>

																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																		<span class="svg-icon svg-icon-2x"></span>
																	</div>
																	<!--end::Close-->
																</div>

																<div class="modal-body">
																	<div class="mb-10">
																		<label class="form-label">Razón(Breve)</label>
																		<input type="text" class="form-control" id="razonAviso" placeholder="Omisión entorno, PG, farmear...">
																	</div>
																	<div class="mb-10">
																		<div class="input-group">
																			<span class="input-group-text">Comentario(Opcional)</span>
																			<textarea class="form-control" aria-label="With textarea" id="comentarioAviso" style="height: 152px;"></textarea>
																		</div>
																	</div>
																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
																	<button type="button" class="btn btn-primary me-10" data-bs-dismiss="modal" id="kt_button_send_aviso" onclick="sendAviso()">
																		<span class="indicator-label">
																			Enviar
																		</span>
																		<span class="indicator-progress">
																			Espera... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																		</span>
																	</button>
																</div>
															</div>
														</div>
													</div>
													
													<!--end::Customer-->
												</div>

												<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
													<!--begin::Info-->
													
													<!--end::Info-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<button class="btn btn-success btn-hover-scale me-5" id="bantemp" data-bs-toggle="modal" data-bs-target="#kt_modal_bantemp" style="width: 500px;display:none;">BAN TEMP</button>
														<button class="btn btn-success btn-hover-scale me-5" id="desban" data-bs-toggle="modal" data-bs-target="#kt_modal_desban" style="width: 500px;display:none;">DESBAN</button>
														<button class="btn btn-success btn-hover-scale me-5" id="loadingBanButton" style="width: 500px;">LOADING...</button>
													<!--BanTEMP MODAL-->
													<div class="modal fade" tabindex="-1" id="kt_modal_bantemp">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Banear Temporalmente</h5>

																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																		<span class="svg-icon svg-icon-2x"></span>
																	</div>
																	<!--end::Close-->
																</div>

																<div class="modal-body">
																	<div class="mb-10">
																		<label class="form-label">Razón(Breve)</label>
																		<input type="text" class="form-control" id="razonAvisoTEMP" placeholder="Omisión entorno, PG, farmear...">
																	</div>	
																	<div class="mb-10">
																		<label class="form-label">Comentario(Opcional)</label>
																		<input type="text" class="form-control" id="comentarioAvisoTEMP" placeholder="comentario puede ser extenso">
																	</div>
																	<div class="mb-10">
																		<label class="form-label">Tiempo(*)</label>
																		<input type="text" class="form-control" id="tiempoTEMP" placeholder="2 Dias, 1 Semana, etc">
																	</div>	
																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
																	<button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="banTemp()">Banear</button>
																</div>
															</div>
														</div>
													</div>
													<!--end::BANTEMP MODAL-->

													<div class="modal fade" tabindex="-1" id="kt_modal_desban">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Desbanear Jugador</h5>

																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																		<span class="svg-icon svg-icon-2x"></span>
																	</div>
																	<!--end::Close-->
																</div>

																<div class="modal-body">
																	<div class="mb-10">
																			<label class="form-label">Razón(Breve)</label>
																			<input type="text" class="form-control" id="razonAviso" placeholder="Razón del desbaneo">
																		</div>
																		
																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
																	<button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="unban()">Desbanear</button>
																</div>
															</div>
														</div>
													</div>
													</div>
													
													<!--end::Customer-->
												</div>

												<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
													<!--begin::Info-->
													
													<!--end::Info-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<button class="btn btn-info btn-hover-scale me-5"  data-bs-toggle="modal" data-bs-target="#kt_modal_permaban" style="width: 500px;/* text-align: center; */">BAN PERMANENTE</button>

													</div>
													
													<!--end::Customer-->
												</div>

												<div class="modal fade" tabindex="-1" id="kt_modal_permaban">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Banear Permanentemente</h5>

																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																		<span class="svg-icon svg-icon-2x"></span>
																	</div>
																	<!--end::Close-->
																</div>

																<div class="modal-body">
																	<div class="mb-10">
																			<label class="form-label">Razón(Breve)</label>
																			<input type="text" class="form-control" id="razonBanPerma" placeholder="Razón del baneo permanente">
																		</div>
																		<div class="mb-10">
																			<label class="form-label">Comentario(Opcional)</label>
																			<input type="text" class="form-control" id="comentarioBanPerma" placeholder="Comentario puede ser extenso">
																		</div>
																		
																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
																	<button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="banPerma()">Banear</button>
																</div>
															</div>
														</div>
													</div>

												<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
													<!--begin::Info-->
													
													<!--end::Info-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<button class="btn btn-primary  btn-hover-scale me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_other_buttons" style="width: 500px;/* text-align: center; */">OTROS</button>
														<div class="modal fade" tabindex="-1" id="kt_modal_other_buttons">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title">Otras Acciones</h5>
														
																		<!--begin::Close-->
																		<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																			<span class="svg-icon svg-icon-2x"></span>
																		</div>
																		<!--end::Close-->
																	</div>
														
																	<div class="modal-body">
																		<button class="btn btn-primary btn-hover-scale me-5" style="width: 450px;opacity: 50%;" disabled="">Kick</button>
																		<br><br>
																		<button class="btn btn-info btn-hover-scale me-5" style="width: 450px;opacity: 50%;" disabled="">Captura de Pantalla</button> <br><br><span class="text-gray-400 mt-1 fw-bold fs-6">El usuario debe estar online para que las opciones esten disponibles.</span>
																	</div>
														
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<!--end::Customer-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Scroll-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List widget 5-->
								</div>
								<div id="testing">

								</div>
								<!--end::Col-->
							</div>
							
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
	<!--end::Root-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	
	<!--end::Modal - Invite Friend-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<script>
		function makeCK(){
			var razon = document.getElementById('ckRazon').value;
			
			var button = document.querySelector("#kt_button_ck");

    		button.setAttribute("data-kt-indicator", "on");

			var url = "http://yourapi.com/api/ckUser";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				Swal.fire({
					text: "El CK se ha realizado correctamente",
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Aceptar",
					customClass: {
						confirmButton: "btn btn-primary"
					}
				});
				var myModalEl = document.getElementById('kt_modal_ck');
				var modal = bootstrap.Modal.getInstance(myModalEl);
				modal.hide();
				document.querySelector('button[class="swal2-confirm btn btn-primary"]').onclick = function(){window.location.href = "dashboards/index.php";}
			}};

			var data = `{
				"identifier": "${identifier}",
				"admin" : "Dani",
				"motivo": "${razon}"
			}`;

			xhr.send(data);
		}

		function getWeaponDetails(name) {
			var haveBalas = null;
			var weaponLowerCase = name.toLowerCase();
			var weaponNameTraducido = "";
			if (weaponLowerCase == 'weapon_dagger') {
				weaponNameTraducido = "Cuchillo con mango";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_bat') {
				weaponNameTraducido = "Bate";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_bottle') {
				weaponNameTraducido = "Botella de cristal";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_crowbar') {
				weaponNameTraducido = "Palanca";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_unarmed') {
				weaponNameTraducido = "Desarmado";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_flashlight') {
				weaponNameTraducido = "Linterna";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_golfclub') {
				weaponNameTraducido = "Palo de golf";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_hammer') {
				weaponNameTraducido = "Martillo";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_hatchet') {
				weaponNameTraducido = "Hacha";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_knuckle') {
				weaponNameTraducido = "Puño americano";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_knife') {
				weaponNameTraducido = "Cuchillo";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_machete') {
				weaponNameTraducido = "Machete";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_switchblade') {
				weaponNameTraducido = "Navaja";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_nightstick') {
				weaponNameTraducido = "Porra";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_wrench') {
				weaponNameTraducido = "Llave de fontanero";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_battleaxe') {
				weaponNameTraducido = "Hacha";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_poolcue') {
				weaponNameTraducido = "Palo de billar";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_stone_hatchet') {
				weaponNameTraducido = "Hacha prehistorica";
				return {
					weaponNameTraducido,
					haveBalas
				};
			}
			//Armas
			else if (weaponLowerCase == 'weapon_pistol') {
				weaponNameTraducido = "Pistola";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_pistol_mk2') {
				weaponNameTraducido = "Pistola MK2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_combatpistol') {
				weaponNameTraducido = "Pistola de combate";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_appistol') {
				weaponNameTraducido = "Appistola";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_stungun') {
				weaponNameTraducido = "Taser";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_pistol50') {
				weaponNameTraducido = "Pistola .50";
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_snspistol') {
				weaponNameTraducido = "SNS Pistola";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_snspistol_mk2') {
				weaponNameTraducido = "SNS Pistola Mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_heavypistol') {
				weaponNameTraducido = "Pistola Grande ";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_vintagepistol') {
				weaponNameTraducido = "Pistola Vintage";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_flaregun') {
				weaponNameTraducido = "Pistola de bengalas";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_marksmanpistol') {
				weaponNameTraducido = "Pistola de mano";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_revolver') {
				weaponNameTraducido = "Pistola pesada";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_revolver_mk2') {
				weaponNameTraducido = "Pistola pesada mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_doubleaction') {
				weaponNameTraducido = "Revolver dorado";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_raypistol') {
				weaponNameTraducido = "Pistola del futuro (BAN)";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_ceramicpistol') {
				weaponNameTraducido = "Pistola ceramica";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_navyrevolver') {
				weaponNameTraducido = "Revolver pesado";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_gadgetpistol') {
				weaponNameTraducido = "Pistola 60'";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_microsmg') {
				weaponNameTraducido = "Micro SMG";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_smg') {
				weaponNameTraducido = "SMG";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_smg_mk2') {
				weaponNameTraducido = "SMG mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_assaultsmg') {
				weaponNameTraducido = "Smg de asalto";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_combatpdw') {
				weaponNameTraducido = "Smg de combate";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_machinepistol') {
				weaponNameTraducido = "SMG automatica";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_minismg') {
				weaponNameTraducido = "Mini SMG";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_raycarbine') {
				weaponNameTraducido = "Carabina del futuro (BAN)";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_pumpshotgun') {
				weaponNameTraducido = "Escopeta";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_pumpshotgun_mk2') {
				weaponNameTraducido = "Escopeta mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_sawnoffshotgun') {
				weaponNameTraducido = "Escopeta recortada";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_assaultshotgun') {
				weaponNameTraducido = "Escopeta automatica";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_bullpupshotgun') {
				weaponNameTraducido = "Escopeta bullpup";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_musket') {
				weaponNameTraducido = "Mosquete";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_heavyshotgun') {
				weaponNameTraducido = "Rifle pesado";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_dbshotgun') {
				weaponNameTraducido = "Escopeta de mano";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_autoshotgun') {
				weaponNameTraducido = "Escopeta de tambor";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_combatshotgun') {
				weaponNameTraducido = "Escopeta de combate";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_assaultrifle') {
				weaponNameTraducido = "AK-47";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_assaultrifle_mk2') {
				weaponNameTraducido = "AK-47 Mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_carbinerifle') {
				weaponNameTraducido = "Carabina";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_carbinerifle_mk2') {
				weaponNameTraducido = "ifle de carabina mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_advancedrifle') {
				weaponNameTraducido = "Rifle avanzado";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_specialcarbine') {
				weaponNameTraducido = "Carabina especial";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_specialcarbine_mk2') {
				weaponNameTraducido = "Rifle de carabina especial mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_bullpuprifle') {
				weaponNameTraducido = "Rifle bullpup";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_compactrifle') {
				weaponNameTraducido = "Mini AK-47";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_militaryrifle') {
				weaponNameTraducido = "rifle militar";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_heavyrifle') {
				weaponNameTraducido = "Rifle pesado";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_mg') {
				weaponNameTraducido = "Ametralladora pesada";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_combatmg') {
				weaponNameTraducido = "Ametralladora de combate";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_combatmg_mk2') {
				weaponNameTraducido = "Ametralladora de combate mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_gusenberg') {
				weaponNameTraducido = "Fusil de tambor";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_sniperrifle') {
				weaponNameTraducido = "Francotirador";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_heavysniper_mk2') {
				weaponNameTraducido = "Francotirador pesado mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_heavysniper') {
				weaponNameTraducido = "Francotirador pesado";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_marksmanrifle') {
				weaponNameTraducido = "Fracotirador pequeño";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_marksmanrifle_mk2') {
				weaponNameTraducido = "Francotirador pequeño mk2";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_molotov') {
				weaponNameTraducido = "Coctel molotov";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else if (weaponLowerCase == 'weapon_hazardcan') {
				weaponNameTraducido = "Bidon de gasolina";
				haveBalas = true;
				return {
					weaponNameTraducido,
					haveBalas
				};
			} else {
				haveBalas = false;
				return {
					weaponLowerCase,
					haveBalas
				};
			}
		}

		var allWeapons = ["weapon_dagger", "weapon_bat", "weapon_bottle", "weapon_crowbar",
			"weapon_flashlight", "weapon_golfclub",
			"weapon_hammer", "weapon_hatchet", "weapon_knuckle", "weapon_knife", "weapon_machete", "weapon_switchblade",
			"weapon_nightstick", "weapon_wrench", "weapon_battleaxe",
			"weapon_poolcue", "weapon_stone_hatchet", "weapon_pistol", "weapon_pistol_mk2", "weapon_combatpistol",
			"weapon_appistol", "weapon_stungun", "weapon_pistol50", "weapon_snspistol",
			"weapon_snspistol_mk2", "weapon_heavypistol", "weapon_vintagepistol", "weapon_flaregun",
			"weapon_marksmanpistol", "weapon_revolver", "weapon_revolver_mk2", "weapon_doubleaction", "weapon_raypistol",
			"weapon_ceramicpistol", "weapon_navyrevolver", "weapon_gadgetpistol", "weapon_stungun_mp", "weapon_microsmg",
			"weapon_smg", "weapon_smg_mk2", "weapon_assaultsmg", "weapon_combatpdw", "weapon_machinepistol",
			"weapon_minismg", "weapon_raycarbine", "weapon_pumpshotgun", "weapon_pumpshotgun_mk2",
			"weapon_sawnoffshotgun", "weapon_assaultshotgun", "weapon_bullpupshotgun", "weapon_musket",
			"weapon_heavyshotgun", "weapon_dbshotgun", "weapon_autoshotgun", "weapon_combatshotgun",
			"weapon_assaultrifle", "weapon_assaultrifle_mk2", "weapon_carbinerifle", "weapon_carbinerifle_mk2",
			"weapon_advancedrifle", "weapon_specialcarbine", "weapon_specialcarbine_mk2", "weapon_bullpuprifle",
			"weapon_bullpuprifle_mk2", "weapon_compactrifle", "weapon_militaryrifle", "weapon_heavyrifle", "weapon_mg",
			"weapon_combatmg", "weapon_combatmg_mk2", "weapon_gusenberg", "weapon_sniperrifle", "weapon_heavysniper",
			"weapon_heavysniper_mk2", "weapon_marksmanrifle", "weapon_marksmanrifle_mk2", "weapon_rpg",
			"weapon_grenadelauncher", "weapon_grenadelauncher_smoke", "weapon_minigun", "weapon_firework",
			"weapon_railgun", "weapon_hominglauncher", "weapon_compactlauncher", "weapon_rayminigun",
			"weapon_emplauncher", "weapon_grenade", "weapon_bzgas", "weapon_molotov", "weapon_stickybomb",
			"weapon_proxmine", "weapon_snowball", "weapon_pipebomb", "weapon_ball", "weapon_smokegrenade", "weapon_flare",
			"weapon_petrolcan", "gadget_parachute", "weapon_fireextinguisher", "weapon_hazardcan", "weapon_fertilizercan"
		]
		for (let i = 0; i < allWeapons.length; i++) {
			let {
				weaponNameTraducido,
				haveBalas
			} = getWeaponDetails(allWeapons[i]);
			var htmlWeaponList = `<option value="${allWeapons[i]}">${weaponNameTraducido}</option>`;
			var weaponContainer = document.getElementById("floatingSelectAddWeapon").innerHTML += htmlWeaponList;
		}

		function detectChange(selectOS) {
			var weaponNameChanged = selectOS.value.replace("weapon_", "");
			imgSource = document.getElementById("weaponImageAdd").src = `assets/media/weapons/${weaponNameChanged}.png`
			let {
				weaponNameTraducido,
				haveBalas
			} = getWeaponDetails(selectOS.value);
			if (haveBalas) {
				var municionSelect = document.getElementById("MunicionSelect").style.display = "block";
				var quantiySelect = document.getElementById("QuantiySelect").style.display = "none";
			} else {
				var municionSelect = document.getElementById("MunicionSelect").style.display = "none";
				var quantiySelect = document.getElementById("QuantiySelect").style.display = "block";
			}
			document.getElementById('addWeaponButton').onclick = function(){addWeapon(selectOS.value);}
			console.log(selectOS.value)
		}

		function updateVehicleList(listaJson, actualizar) {
			console.log(listaJson);
			
			for (var vehicle in listaJson) {
				objParsed1 = JSON.parse(listaJson[vehicle].vehicle);
				var carHash = objParsed1.model;
				if (carHash != null) {
					textAmmo = 'Matricula: ';
					var cantidad = listaJson[vehicle].plate
					componentHtml = `<span class="badge badge-light-success">Vida: ${objParsed1.engineHealth}</span>`;
			
					var htmlCar = `<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
						<!--begin::Info-->
						<div class="d-flex flex-stack mb-3">
							<!--begin::Wrapper-->
							<div class="me-3">
								<!--begin::Icon-->
								<img src="" class="w-50px ms-n1 me-1" alt="">
								<!--end::Icon-->
								<!--begin::Title-->
								<a class="text-gray-800 text-hover-primary fw-bolder"><strong>Hash:</strong> ${carHash}</a>
								<!--end::Title-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Action-->
							
							<!--end::Action-->
						</div>
						<!--end::Info-->
						<div class="d-flex flex-stack">
							<!--begin::Name-->
							<span class="text-gray-400 fw-bolder">${textAmmo}
								<a class="text-gray-800 text-hover-primary fw-bolder">${cantidad}</a></span>
							<!--end::Name-->
							<!--begin::Label-->
							${componentHtml}
							<!--end::Label-->
						</div>
						<!--end::Customer-->
					</div>`;
					if (actualizar) {
						var vehiclesContainer = document.getElementById("vehiclesContainer").innerHTML = htmlCar;
					} else {
						var vehiclesContainer = document.getElementById("vehiclesContainer").innerHTML += htmlCar;
					}
				}
			}
			var divLoading;
			divLoading = document.getElementById('loadingDiv2');
			if(divLoading != null){
				divLoading.style.display = "none";
			}
		}

		function updateWeaponList(listaJson, actualizar) {
			obj = JSON.parse(listaJson);
			for (var weapon in obj) {
				var hasComponent = false;
				if (obj[weapon].hasOwnProperty('components')) {
					hasComponent = true;
				}
				var weaponName = weapon.replace("weapon_", "").replace("WEAPON_", "").toLowerCase();
				if (weapon != null) {
					let {
						weaponNameTraducido,
						haveBalas
					} = getWeaponDetails(weapon);
					//Check If Have Balas
					if (haveBalas) {
						textAmmo = 'Munición: ';
						var cantidad = obj[weapon].ammo
					} else {
						textAmmo = '';
						var cantidad = '';
					}

					if (hasComponent) {
						componentHtml = `<span class="badge badge-light-success">Component: ${obj[weapon].components}</span>`;
					} else {
						componentHtml = '';
					}

					var htmlNoAmount = `<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
						<!--begin::Info-->
						<div class="d-flex flex-stack mb-3" style="margin-top: 10px;">
							<!--begin::Wrapper-->
							<div class="me-3">
								<!--begin::Icon-->
								<img src="assets/media/weapons/${weaponName}.png" class="w-50px ms-n1 me-1" alt="">
								<!--end::Icon-->
								<!--begin::Title-->
								<a class="text-gray-800 text-hover-primary fw-bolder">${weaponNameTraducido}</a>
								<!--end::Title-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Action-->
							<div class="m-0">
								<!--begin::Menu-->
								<button onclick="deleteWeapon('${weapon}')" class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
									<br><span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
											<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
											<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
											</svg>
										</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 2-->
								
								<!--end::Menu 2-->
								<!--end::Menu-->
							</div>
							<!--end::Action-->
						</div>
						<!--end::Info-->
						<div class="d-flex flex-stack">
							<!--begin::Name-->
							<span class="text-gray-400 fw-bolder">
							<!--end::Name-->
							<!--end::Label-->
						</div>
						<!--end::Customer-->
					</div>`;

					var htmlWithAmount = `<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
						<!--begin::Info-->
						<div class="d-flex flex-stack mb-3">
							<!--begin::Wrapper-->
							<div class="me-3">
								<!--begin::Icon-->
								<img src="assets/media/weapons/${weaponName}.png" class="w-50px ms-n1 me-1" alt="">
								<!--end::Icon-->
								<!--begin::Title-->
								<a class="text-gray-800 text-hover-primary fw-bolder">${weaponNameTraducido}</a>
								<!--end::Title-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Action-->
							<div class="m-0">
								<!--begin::Menu-->
								<button onclick="deleteWeapon('${weapon}')" class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
									<br><span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
											<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
											<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
											</svg>
										</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 2-->
								
								<!--end::Menu 2-->
								<!--end::Menu-->
							</div>
							<!--end::Action-->
						</div>
						<!--end::Info-->
						<div class="d-flex flex-stack">
							<!--begin::Name-->
							<span class="text-gray-400 fw-bolder">${textAmmo}
								<a class="text-gray-800 text-hover-primary fw-bolder">${cantidad}</a></span>
							<!--end::Name-->
							<!--begin::Label-->
							${componentHtml}
							<!--end::Label-->
						</div>
						<!--end::Customer-->
					</div>`;
					var divLoading;
					divLoading = document.getElementById('loadingDiv');
					if(divLoading != null){
						divLoading.style.display = "none";
					}
					if (haveBalas) {
						if (actualizar) {
							var weaponContainer = document.getElementById("weaponsContainer").innerHTML = htmlWithAmount;
						} else {
							var weaponContainer = document.getElementById("weaponsContainer").innerHTML += htmlWithAmount;
						}

					} else {
						if (actualizar) {
							var weaponContainer = document.getElementById("weaponsContainer").innerHTML = htmlNoAmount;
						} else {
							var weaponContainer = document.getElementById("weaponsContainer").innerHTML += htmlNoAmount;
						}
					}
				}
			}
		}

		function applyWeaponChange(jsonModificadoEnviado, modal) {
			var url = "http://yourapi.com/api/changeWeapons";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					getUserData();
					//document.getElementById('loadingDiv').style.display = "none";
				}
			};

			const myJSON = JSON.stringify(jsonModificadoEnviado);
			if(modal) {
				var myModalEl = document.getElementById('kt_modal_AddWeapon');
				var modal = bootstrap.Modal.getInstance(myModalEl);
				modal.hide();
			}
			var data = `{
					"identifier": "${identifier}",
					"json": ${myJSON}
				}`;
			console.log(myJSON)

			xhr.send(data);

		}

		function deleteWeapon(name) {
			//document.querySelector('div[class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3 show"]').style.display = 'none'
			var divLoading;
			divLoading = document.getElementById('loadingDiv');
			if(divLoading != null){
				divLoading.style.display = "none";
			}
			loadoutParsed = JSON.parse(loadoutJson);
			var obj = new Object();
			for (var weapon in loadoutParsed) {
				if (weapon != name) {
					obj[weapon] = {
						"ammo": loadoutParsed[weapon].ammo
					};
				}
			}

			var jsonString = JSON.stringify(obj);
			applyWeaponChange(jsonString, false);
		}

		function roundUp(num, precision) {
			precision = Math.pow(10, precision)
			return Math.ceil(num * precision) / precision
		}

		function updateSkills(skillsJson){
			var objectSkills = JSON.parse(skillsJson);
			var printed = 0;
			var color = 0;
			var skillTranslated = "";
			for (var skill in objectSkills) {
				if(skill == 'Shooting'){
					skillTranslated = 'Disparo';
				} else if(skill == 'Driving'){
					skillTranslated = 'Conducción';
				} else if(skill == 'Lung Capacity'){
					skillTranslated = 'Capacidad Pulmonar';
				} else if(skill == 'Stamina'){
					skillTranslated = 'Aguante';
				} else if(skill == 'Strength'){
					skillTranslated = 'Fuerza';
				} else {
					skillTranslated = skill;
				}
				printed++;
				if(printed == 1){
					color = 'success';
				} else if(printed == 2) {
					color = 'danger';
				}
				else if(printed == 3) {
					color = 'warning';
				}
				else if(printed == 4) {
					color = 'info';
				} else {
					color = 'success';
					printed = 1;
				}
				var htmlSkill = `<div class="d-flex align-items-center bg-light-${color} rounded p-5 mb-7">
					<!--begin::Icon-->
					<span class="svg-icon svg-icon-${color} me-5">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3"
									d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
									fill="black"></path>
								<path
									d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
									fill="black"></path>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</span>
					<!--end::Icon-->
					<!--begin::Title-->
					<div class="flex-grow-1 me-2">
						<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">${skillTranslated}</a>
						<span class="text-muted fw-bold d-block">Eliminado: ${objectSkills[skill].RemoveAmount}</span>
					</div>
					<!--end::Title-->
					<!--begin::Lable-->
					<span class="fw-bolder text-${color} py-1">${roundUp(objectSkills[skill].Current, 1)}%</span>
					<!--end::Lable-->
				</div>`;
				document.getElementById('skillContainer').innerHTML += htmlSkill;
			}
		}

		function clickOnOtherTab() {
			console.log("Actualizando a: " +transactions);
			updateTransactions(transactions);
		}

		function updateTransactions(transactionsJson){
			if(transactionsJson != null ||transactionsJson != undefined){
				var saved = transactionsJson;
			}
			console.log("Actualizando transacciones");
			var received = null;
			for (var transaction in saved) {
				if(saved[transaction].identifier == identifier) {
					received = 'Recivido';
				} else {
					received = 'Enviado';
				}
				htmlTransaction = `<tr class="odd">
					<td class="min-w-175px">
						<div class="position-relative ps-6 pe-3 py-2">
							<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-warning"></div>
							<a href="#" class="mb-1 text-dark text-hover-primary fw-bolder">Transaction-${saved[transaction].id}</a>
							<div class="fs-7 text-muted fw-bolder">${received}</div>
						</div>
					</td>
					<td>
						<a href="#" class="mb-1 text-dark text-hover-primary fw-bolder">${saved[transaction].sender}</a>
					</td>
					<td>
						<span class="badge badge-light-primary">${saved[transaction].amount}$</span>
					</td>
					<td class="min-w-125px">
						<!--begin::Team members-->
						<a href="#" class="mb-1 text-dark text-hover-primary fw-bolder">${saved[transaction].identifier}</a>
					</td>
					<td class="min-w-150px">
						<div class="mb-2 fw-bolder">Nombre: ${saved[transaction].label}</div>
						<div class="fs-7 fw-bolder text-muted">Tipo: ${saved[transaction].target_type}</div>
					</td>
					<td class="d-none">Completed</td>
				</tr>`;
				document.getElementById('transactionAllReceived').innerHTML += htmlTransaction;
				document.querySelector('td[class="dataTables_empty"]').style.display = 'none'
			}
		}

		function updateLicenses(){
			var licenseTranslated = "";
			for (var licencia in licensesJSON) {
				if(licensesJSON[licencia].type == 'dmv'){
					licenseTranslated = 'DMV';
				} else if(licensesJSON[licencia].type == 'drive'){
					licenseTranslated = 'Conducir';
				} else if(licensesJSON[licencia].type == 'weapon'){
					licenseTranslated = 'Armas';
				} else if(licensesJSON[licencia].type == 'drive_bike'){
					licenseTranslated = 'Bicicleta';
				} else if(licensesJSON[licencia].type == 'aircraft'){
					licenseTranslated = 'Avión';
				} else {
					licenseTranslated = licensesJSON[licencia].type;
				}
				htmlLicenses = `<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
					<!--begin::Info-->
					<div class="d-flex flex-stack mb-3">
						<!--begin::Wrapper-->
						<div class="me-3">
							<!--begin::Icon-->
							<img src="" class="w-50px ms-n1 me-1" alt="">
							<!--end::Icon-->
							<!--begin::Title-->
							<a class="text-gray-800 text-hover-primary fw-bolder"><strong>License-ID:</strong> ${licensesJSON[licencia].id}</a>
							<!--end::Title-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Action-->

						<!--end::Action-->
					</div>
					<!--end::Info-->
					<div class="d-flex flex-stack">
						<!--begin::Name-->
						<span class="text-gray-400 fw-bolder">Tipo:
							<a class="text-gray-800 text-hover-primary fw-bolder">${licenseTranslated}</a></span>
						<!--end::Name-->
						<!--begin::Label-->
						<span class="badge badge-light-success">${licensesJSON[licencia].owner}</span>
						<!--end::Label-->
					</div>
					<!--end::Customer-->
				</div>`;
				document.getElementById('licensesContainer').innerHTML += htmlLicenses;
			}
		}

		function addWeapon(name) {
			name = name.toUpperCase();
			loadoutParsed = JSON.parse(loadoutJson);
			var obj = new Object();
			for (var weapon in loadoutParsed) {
				obj[weapon] = {
					"ammo": loadoutParsed[weapon].ammo
				};
			}
			let {
				weaponNameTraducido,
				haveBalas
			} = getWeaponDetails(name);
			var amount = "";
			if(haveBalas){
				amount = document.getElementById('municionInput').value;
			} else {
				amount = document.getElementById('quantityInput').value;
			}
			obj[name] = {
				"ammo": amount
			};

			var jsonString = JSON.stringify(obj);
			applyWeaponChange(jsonString, true);
		}

		var loadoutJson = "";
		var vehicleJSON = "";
		var urlParams = new URLSearchParams(window.location.search);
		var identifier = urlParams.get('identifier');
		var transactions = "";
		var licensesJSON = "";
		var userInfo = {};

		function getUserData() {
			if (identifier == null) {
				console.log("Error no se ha añadido el identificador en la url");
				return;
			} else {
				console.log("Identificador: " + identifier);
			}
			var url = "http://yourapi.com/api/getUserData";
			
			
			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					var obj = JSON.parse(xhr.responseText);
					console.log(xhr.responseText)
					if (obj.Status == "Success") {
						document.getElementById('steamName').innerHTML = obj.Result.name;
						document.getElementById('group').innerHTML = obj.Result.group;
						var coords = JSON.parse(obj.Result.position);
						document.getElementById('coords').innerHTML = `X: ${coords.x} Y: ${coords.y} Z: ${coords.z}  Dirección: ${coords.heading}`;
						document.getElementById('phoneNumber').innerHTML = obj.Result.phone_number;
						var accounts = JSON.parse(obj.Result.accounts);
						document.getElementById('dineroBanco').innerHTML = accounts.bank;
						document.getElementById('dineroNegro').innerHTML = accounts.black_money;
						document.getElementById('dineroEfectivo').innerHTML = accounts.money;
						if(obj.Result.tutorial == '1'){
							document.getElementById('tutorialPorcentaje').innerHTML = '100%';
						} else {
							document.getElementById('tutorialPorcentaje').innerHTML = '0%';
						}
						document.getElementById('name').innerHTML = obj.Result.firstname;
						document.getElementById('firstSecondName').innerHTML = obj.Result.lastname;
						document.getElementById('phoneNumber2').innerHTML = obj.Result.phone_number;
						document.getElementById('job').innerHTML = obj.Result.job;
						document.getElementById('identifier').innerHTML = obj.Result.identifier;
						getTickets(identifier);
						document.getElementById('license').innerHTML = obj.Result.license.slice(0, obj.Result.license.length -10);
						document.getElementById('dateOfBirth').innerHTML = obj.Result.dateofbirth;
						username = {
							"identifier": obj.Result.identifier,
							"license": obj.Result.license,
							"name": obj.Result.name
						}
						var status = JSON.parse(obj.Result.status);
						document.getElementById('hungerThirst').innerHTML = `Hambre: ${roundUp(status[0].percent, 1)}%, Sed: ${roundUp(status[1].percent, 1)}%`;
						if(obj.Result.sex == 'm'){
							document.getElementById('sex').innerHTML = 'Hombre'
						} else {
							document.getElementById('sex').innerHTML = 'Mujer'
						}
						if(obj.Result.BanID == '(NULL)') {
							document.getElementById('pet').innerHTML = 'Ninguno';
						} else {
							document.getElementById('pet').innerHTML = `BAN#${obj.Result.BanID}`;
						}
						if(obj.Result.Banned){
							document.getElementById('isBanned').innerHTML = 'Si';
							document.getElementById('desban').style.display = 'block';
							document.getElementById('loadingBanButton').style.display = 'none';
							document.getElementById('bantemp').style.display = 'none';
							//Activar
							document.getElementById('banTarget1').style.display = 'flex';
							document.getElementById('banTarget2').style.display = 'flex';
							document.getElementById('banTarget3').style.display = 'flex';
							document.getElementById('banTarget4').style.display = 'flex';
							document.getElementById('banTarget5').style.display = 'flex';

							//AddClass / Style
							document.getElementById('addBanClass1').classList.add("blockui");
							document.getElementById('addBanClass1').style.position = "relative";
							document.getElementById('addBanClass1').style.overflow = "hidden";

							document.getElementById('addBanClass2').classList.add("blockui");
							document.getElementById('addBanClass2').style.position = "relative";
							document.getElementById('addBanClass2').style.overflow = "hidden";

							document.getElementById('addBanClass3').classList.add("blockui");
							document.getElementById('addBanClass3').style.position = "relative";
							document.getElementById('addBanClass3').style.overflow = "hidden";

							document.getElementById('addBanClass4').classList.add("blockui");
							document.getElementById('addBanClass4').style.position = "relative";
							document.getElementById('addBanClass4').style.overflow = "hidden";

							document.getElementById('addBanClass5').classList.add("blockui");
							document.getElementById('addBanClass5').style.position = "relative";
							document.getElementById('addBanClass5').style.overflow = "hidden";
						} else {
							document.getElementById('isBanned').innerHTML = 'No';
							document.getElementById('desban').style.display = 'none';
							document.getElementById('loadingBanButton').style.display = 'none';
							document.getElementById('bantemp').style.display = 'block';
						}
						vehicleJSON = obj.Result.Vehicles;
						loadoutJson = obj.Result.loadout;
						transactions = obj.Result.BillingTransactions;
						licensesJSON = obj.Result.UserLicenses;
						console.log("LOADOUT: " + loadoutJson);
						var weaponContainer = document.getElementById("weaponsContainer").innerHTML = "";
						updateWeaponList(loadoutJson, false);
						updateVehicleList(vehicleJSON, false);
						updateSkills(obj.Result.skills);
						updateTransactions(obj.Result.BillingTransactions);
						console.log(licensesJSON)
						updateLicenses(licensesJSON);
					} else {
						console.log("Ha habido un error con la petición a la API");
					}
				}
			};

			var data = `{
					"identifier": "${identifier}"
				}`;

			xhr.send(data);
		}

		var adminUser = "";

		function getUserPanelData(){ 
			var url = "http://yourapi.com/api/getUserPanelData";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.responseText);
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					document.getElementById("nameAdmin").textContent = obj.Result.Username;
					const firstCharacter = obj.Result.Username.charAt(0);
					adminUser = obj.Result.Username;
					document.getElementById("rangoAdmin").textContent = obj.Result.Rango;
					document.getElementById("joinDateAdmin").textContent = "Se unió el: " + obj.Result.JoinDate.toString().slice(0, -14);;
				} else if(obj.Status == 'Bad'){
					window.location.href = 'logout.php';
				}
			}};

			var data = `{"cookie": "<?php echo $_SESSION['SESSID'];?>"}`;

			xhr.send(data);
		}

		function sendAviso(){
			var button = document.querySelector("#kt_button_send_aviso");
			button.setAttribute("data-kt-indicator", "on");

			var url = "http://yourapi.com/api/addAviso";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				console.log(xhr.responseText);
				var JsonResponse = JSON.parse(xhr.responseText);
				if(JsonResponse.status != 'Bad'){
					button.removeAttribute("data-kt-indicator");
					Swal.fire({
						text: "El aviso se ha añadido correctamente",
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Aceptar",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
				}
			}};
			
			var razonAviso = document.getElementById('razonAviso').value;
			var comentarioAviso = document.getElementById('comentarioAviso').value;

			var data = `{
				"staff": "${adminUser}",
				"usuario": "${username.name}",
				"steam": "${username.identifier}",
				"licencia": "${username.license}",
				"razon": "${razonAviso}",
				"comentario": "${comentarioAviso}"
			}`;

			xhr.send(data);

		}

		function banTemp(){

			var url = "http://yourapi.com/api/addBanTemp";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				console.log(xhr.responseText);
				var JsonResponse = JSON.parse(xhr.responseText);
				if(JsonResponse.status != 'Bad'){
					Swal.fire({
						text: "El baneo temporal se ha añadido correctamente",
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Aceptar",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
				}
			}};
			
			var razonAviso = document.getElementById('razonAvisoTEMP').value;
			var comentarioAviso = document.getElementById('comentarioAvisoTEMP').value;
			var tiempoTemp = document.getElementById('tiempoTEMP').value;

			var data = `{
				"staff": "${adminUser}",
				"usuario": "${username.name}",
				"steam": "${username.identifier}",
				"licencia": "${username.license}",
				"razon": "${razonAviso}",
				"comentario": "${comentarioAviso}",
				"tiempo": "${tiempoTemp}"
			}`;

			console.log(data)

			xhr.send(data);

		}

		function banPerma(){
			var url = "http://yourapi.com/api/addBanPerm";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				console.log(xhr.responseText);
				var JsonResponse = JSON.parse(xhr.responseText);
				if(JsonResponse.status != 'Bad'){
					Swal.fire({
						text: "El baneo permanente se ha añadido correctamente",
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Aceptar",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
				}
			}};

			var razonAviso = document.getElementById('razonBanPerma').value;
			var comentarioAviso = document.getElementById('comentarioBanPerma').value;

			var data = `{
				"staff": "${adminUser}",
				"usuario": "${username.name}",
				"steam": "${username.identifier}",
				"licencia": "${username.license}",
				"razon": "${razonAviso}",
				"comentario": "${comentarioAviso}"
			}`;

			console.log(data)

			xhr.send(data);

		}

		function getTickets(identificadorTicket){
			var url = "functions/tickets.php";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				console.log(xhr.responseText);
				test = document.getElementById("testing").innerHTML = xhr.responseText
			}};

			var data = `identifier=${identificadorTicket}`;

			xhr.send(data);
		}

		function unban(){
			var url = "http://yourapi.com/api/deleteBan";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if (obj.Status == "Success") {
					Swal.fire({
						text: `El usuario con Identificador: ${identifier} ha sido desbaneado.`,
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Aceptar",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
				}
			}};

			var data = `{"identifier": "${username.identifier}"}`;

			xhr.send(data);
		}

		getUserPanelData();

		getUserData();
		//deleteWeapon();
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