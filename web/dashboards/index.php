<?php
session_start();
if(!isset($_SESSION['SESSID'])){
	Header("Location: ../authentication/layouts/basic/sign-in.html");
}
?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>Fivem StaffPanel &amp; By danii_gp_#9612 & ! ErCarlitohᵀᴹ#5268</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" id="pluginTheme" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" id="cssTheme" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<?php include('../menu.php')?>
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
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Informacion sobre el servidor</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-xl-10">
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 4-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Currency-->
														<span class="fs-4 fw-bold text-success me-1 align-self-start">$</span>
														<!--end::Currency-->
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1" id="TotalMoney">Cargando...</span>
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Dinero Total</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body pt-2 pb-4 d-flex align-items-center">
												<!--begin::Chart-->
												<div class="d-flex flex-center me-5 pt-2">
													<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
												</div>
												<!--end::Chart-->
												<!--begin::Labels-->
												<div class="d-flex flex-column content-justify-center w-100">
													<!--begin::Label-->
													<div class="d-flex fs-6 fw-bold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Efectivo</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end" id="efectivo">$7,660</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fs-6 fw-bold align-items-center my-3">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Banco</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end" id="banco">$2,820</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fs-6 fw-bold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Negro</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end" id="negro">$45,257</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
												</div>
												<!--end::Labels-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 4-->
										<!--begin::Card widget 5-->
										<div class="card card-flush h-md-50 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1" id="vipCount">Loading...</span>
														<!--end::Amount-->

														<!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->

														<!--end::Badge-->
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Vips Totales</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end pt-0">
												<!--begin::Progress-->
												<div class="d-flex align-items-center flex-column mt-3 w-100">
													<div class="d-flex justify-content-between w-100 mt-auto mb-2">
														<span class="fw-boldest fs-6 text-dark">Objetivo 500</span>
														<span class="fw-bolder fs-6 text-gray-400">73%</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-success rounded">
														<div class="bg-success rounded h-8px" role="progressbar" style="width: 73%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 5-->
									</div>
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 6-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Currency-->
														<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
														<!--end::Currency-->
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1"id="playerMoreMoney">Loading</span>
														<!--end::Amount-->
														<!--begin::Badge-->
														<span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center" style="height: 22px">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
														<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
															</svg>
														</span>
														<span id="playerMoreMoneyName">loading</span>
													</span>
														<!--end::Badge-->
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Jugador con más dinero</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end px-0 pb-0">
												<!--begin::Chart-->
												<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 6-->
										<!--begin::Card widget 7-->
										<div class="card card-flush h-md-50 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1"><span id="UsersCount">Cargando... </span><img src="assets/media/icons/duotune/communication/com014.svg" style="width: 40px;height: 30px;"></span>
													
													<!--end::Amount-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Usuarios registrados</span>
													<!--end::Subtitle-->
													
												</div>
												
												<!--end::Title-->
											</div>
												<ul class="nav nav-pills nav-pills-custom mb-3" style="margin-top: 30px;/* margin-left: 50px; */text-align: center;justify-content: center;height: 100p;">
													<li class="nav-item mb-1">
														<!--begin::Link-->
														<button type="button" class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" id="kt_button_4">
															<div class="nav-icon indicator-label">
																	<img alt="" src="assets/media/icons/duotune/files/fil022.svg" class="">
																</div>
															<span class="indicator-label nav-text text-primary-600 fw-bolder fs-6 lh-1">Guardar Datos</span>
															<span class="indicator-progress">Guardando Datos...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
															<!--end::Link-->
													</li>
													<li class="nav-item mb-1">
														<!--begin::Link-->
														<button type="button" class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" id="kt_button_cache">
															<div class="nav-icon indicator-label">
																	<img src="assets/media/icons/duotune/files/fil007.svg"/>
																</div>
															<span class="indicator-label nav-text text-primary-600 fw-bolder fs-6 lh-1">Borrar Cache</span>
															<span class="indicator-progress">Borrando Cache...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
															<!--end::Link-->
													</li>
												</ul>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex flex-column justify-content-end pe-0">
												<!--begin::Users group-->
												<div class="symbol-group symbol-hover flex-nowrap">
												</div>
												<!--end::Users group-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 7-->
									</div>
									<!--begin::Col-->
									<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
										<!--begin::Chart widget 3-->
										<div class="card card-flush overflow-hidden h-md-100">
											<!--begin::Header-->
											<div class="card-header py-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Jugadores conectados</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">En esta tabla se muestran los jugadores que estan actualmente conectados en el servidor.</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
												<!--begin::Statistics-->
												<div class="px-9 mb-5">
													<!--begin::Statistics-->
													<div class="d-flex mb-2">
														<span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1" id="OnlineUsersCount">Cargando...</span>
													</div>
													<!--end::Statistics-->
													<!--begin::Description-->
													<span class="fs-6 fw-bold text-gray-400">Este número se actualiza cada 1 minuto, si quieres actualizarlo manualmente puedes simplemente recargar la pagina.</span>
													<!--end::Description-->
												</div>
												<!--end::Statistics-->
												<!--begin::Chart-->
												<div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Chart widget 3-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-6 mb-xl-10">
										<!--begin::Tables widget 2-->
										<div class="card h-md-100">
											<!--begin::Header-->
											
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2" style="display:none">
												<!--begin::Nav-->
												<ul class="nav nav-pills nav-pills-custom mb-3">
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
													<button type="button" class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" id="kt_button_1">
														<div class="nav-icon indicator-label">
																<img alt="" src="assets/media/icons/duotune/arrows/arr059.svg" class="">
															</div>
														<span class="indicator-label nav-text text-warning fw-bolder fs-6 lh-1">Reiniciar</span>
														<span class="indicator-progress">Enviando Comando...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<button type="button" class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" id="kt_button_2">
															<div class="nav-icon indicator-label">
																	<img alt="" src="assets/media/icons/duotune/arrows/arr085.svg" class="">
																</div>
															<span class="indicator-label nav-text text-success fw-bolder fs-6 lh-1">Start</span>
															<span class="indicator-progress">Enviando Comando...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<button type="button" class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" id="kt_button_3">
															<div class="nav-icon indicator-label">
																	<img alt="" src="assets/media/icons/duotune/arrows/arr088.svg" class="">
																</div>
															<span class="indicator-label nav-text text-danger fw-bolder fs-6 lh-1">Stop</span>
															<span class="indicator-progress">Enviando Comando...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
															<!--begin::Icon-->
															<div class="nav-icon">
																<img alt="" src="assets/media/icons/duotune/general/gen047.svg" class="nav-icon" />
															</div>
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Ban</span>
															<!--end::Subtitle-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<button type="button" class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" id="kt_button_4">
															<div class="nav-icon indicator-label">
																	<img alt="" src="assets/media/icons/duotune/files/fil022.svg" class="">
																</div>
															<span class="indicator-label nav-text text-primary-600 fw-bolder fs-6 lh-1">Guardar</span>
															<span class="indicator-progress">Enviando Comando...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Link-->
													</li>
													<!--end::Item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->

													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Tables widget 2-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div id="testing">

								</div>
								<div class="row g-5 g-xl-10 mb-xl-10">

								<div class="col-xl-12">
										<!--begin::Tables Widget 5-->
										<div class="card card-xxl-stretch mb-5 mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Información Trabajos</span>
													<span class="text-muted mt-1 fw-bold fs-7">En esta tabla sale la cantidad de jugadores con los trabajos nombrados.</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Policias</a>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-success" id="cnpCount">Loading...</span>
																		</td>
																		
																	</tr>
																	<tr>
																		<td>
																			
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">EMS</a>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-success" id="ambulanceCount">Loading...</span>
																		</td>
																		
																	</tr>
																	<tr>
																		<td>
																			
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Mecánicos</a>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-success" id="mechanicCount">Loading...</span>
																		</td>
																		
																	</tr>
																	<tr>
																		<td>
																			
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">MAFIAS</a>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-success" id="mafiasCount">Loading...</span>
																		</td>
																		
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_table_widget_5_tab_2">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																			<span class="text-muted fw-bold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">React, HTML</td>
																		<td class="text-end">
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="/metronic8/demo1/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																			<span class="text-muted fw-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Python, MySQL</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="/metronic8/demo1/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																			<span class="text-muted fw-bold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_table_widget_5_tab_3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="/metronic8/demo1/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																			<span class="text-muted fw-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="/metronic8/demo1/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																			<span class="text-muted fw-bold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="/metronic8/demo1/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																			<span class="text-muted fw-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																		<td class="text-end">
																			<span class="badge badge-light-primary">Success</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="/metronic8/demo1/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																			<span class="text-muted fw-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Python, MySQL</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tables Widget 5-->
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
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">Todos los derechos reservados de SpainCityNT©2022/2023</span>
								<a class="text-gray-800">Panel developed: By <strong>Danii_gp_</strong> & <strong>ErCarlitoh</strong></a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Modals-->
		<script type="text/javascript">
		var button4 = document.querySelector("#kt_button_4");
		button4.addEventListener("click", function() {
			button4.setAttribute("data-kt-indicator", "on");
			button4.setAttribute("disabled", "true");
			var url = "http://yourapi.com/api/saveData";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					button4.removeAttribute("data-kt-indicator");
					button4.removeAttribute("disabled");
				}
			}};

			xhr.send();
		});

		var buttonCache = document.querySelector("#kt_button_cache");
		buttonCache.addEventListener("click", function() {
			buttonCache.setAttribute("data-kt-indicator", "on");
			buttonCache.setAttribute("disabled", "true");
			var url = "http://yourapi.com/api/cleanCache";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					buttonCache.removeAttribute("data-kt-indicator");
					buttonCache.removeAttribute("disabled");
					Swal.fire({
						text: "Se ha cerrado tu sesión debido a que el archivo que la contenia ha sido borrado, posiblemente haya sido debido a que la cache del servidor se ha borrado.",
						icon: "info",
						buttonsStyling: false,
						confirmButtonText: "Aceptar",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
					document.querySelector('button[class="swal2-confirm btn btn-primary"]').onclick = function(){window.location.href = "logout.php";}
				}
			}};

			xhr.send();
		});
		
		var button3 = document.querySelector("#kt_button_3");
		button3.addEventListener("click", function() {
			// Activate indicator
			button3.setAttribute("data-kt-indicator", "on");
			//button.classList.add("opacity-20");
			button3.setAttribute("disabled", "true");

			var url = "http://yourapi.com/api/rconCommand";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					console.log(xhr.status);
					console.log(xhr.responseText);
					var obj = JSON.parse(xhr.responseText);
					if(obj.Status != 'Bad') {
						button3.removeAttribute("data-kt-indicator");
						getCommandHistory();
					}
				}
			};

			var data = `{"command": "Stop", "admin":"${username}"}`;

			xhr.send(data);
			//button.removeAttribute("data-kt-indicator"); Desactiva el cargando
		});



		
		var button2 = document.querySelector("#kt_button_2");
		button2.addEventListener("click", function() {
			// Activate indicator
			button2.setAttribute("data-kt-indicator", "on");
			//button.classList.add("opacity-20");
			button2.setAttribute("disabled", "true");

			var url = "http://yourapi.com/api/rconCommand";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					console.log(xhr.status);
					console.log(xhr.responseText);
					var obj = JSON.parse(xhr.responseText);
					if(obj.Status != 'Bad') {
						button2.removeAttribute("data-kt-indicator");
						getCommandHistory();
					}
				}
			};

			var data = `{"command": "Start", "admin":"${username}"}`;

			xhr.send(data);
			//button.removeAttribute("data-kt-indicator"); Desactiva el cargando
		});



		var button = document.querySelector("#kt_button_1");
		button.addEventListener("click", function() {
			// Activate indicator
			button.setAttribute("data-kt-indicator", "on");
			//button.classList.add("opacity-20");
			button.setAttribute("disabled", "true");

			var url = "http://yourapi.com/api/rconCommand";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				console.log(xhr.responseText);
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					button.removeAttribute("data-kt-indicator");
					getCommandHistory();
				}
			}};

			var data = `{"command": "Reinicio", "admin":"${username}"}`;

			xhr.send(data);
			//button.removeAttribute("data-kt-indicator"); Desactiva el cargando
		});

		function getCookie(cookieName) {
			let cookie = {};
			document.cookie.split(';').forEach(function(el) {
				let [key,value] = el.split('=');
				cookie[key.trim()] = value;
			})
			return cookie[cookieName];
		}

		var username = 'Loading...';

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

		function getVips(){
			var url = "http://yourapi.com/api/getVipCount";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad'){
					document.getElementById("vipCount").textContent = obj.Count;
				}
			}};

			xhr.send();
		}
		

		function getOnlineUsersCount() { 
			var url = "http://yourapi.com/api/getCurrentUsersCount";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					document.getElementById("OnlineUsersCount").textContent = obj.Result;
				} else {
					console.log("Petición denegada")
				}
			}}; //20.000

			xhr.send();
		}

		function getPlayerWithMoreMoney() { 
			var url = "http://yourapi.com/api/getUserWithMoreMoney";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					if(obj.Dinero.toString().length > 6) {
						var dinero = obj.Dinero.toString().slice(0, -6);
						document.getElementById("playerMoreMoney").textContent=formatNumber(dinero) + "M";
						document.getElementById("playerMoreMoneyName").textContent = obj.Usuario;
					} else {
						document.getElementById("playerMoreMoneyName").textContent = obj.Usuario;
						document.getElementById("playerMoreMoney").textContent = obj.Dinero;
					}
				} else {
					console.log("Petición denegada")
				}
			}}; //20.000

			xhr.send();
		}

		function getUsersCount(){ 
			var url = "http://yourapi.com/api/usersCount";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					console.log(obj.Result)
					document.getElementById("UsersCount").textContent = obj.Result;
					if(obj.Result.toString().length > 5) {
						var jugadoresTotales = obj.Total.toString().slice(0, -3);
						document.getElementById("UsersCount").textContent=formatNumber(jugadoresTotales) + "K";
					} else {
						document.getElementById("UsersCount").textContent=formatNumber(obj.Result);
					}
				} else {
					console.log("Petición denegada")
				}
			}}; //20.000

			xhr.send();
		}

		function formatNumber(num) {
			return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
		}

		function buscarJugador(){
			var username = document.getElementById('searchUser').value;
			var url = "http://yourapi.com/api/searchUser";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log("Usuarios encontrados" + xhr.responseText);
			}};

			var data = `{
				"name": "${username}"
			}`;

			xhr.send(data);
		}

		function getMoney(){ 
			var url = "http://yourapi.com/api/getMoney";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				console.log(xhr.status);
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad') {
					document.getElementById("TotalMoney").textContent=obj.Total;

					if(obj.Mano.toString().length > 6) {
						var dineroMano = obj.Mano.toString().slice(0, -6);
						document.getElementById("efectivo").textContent=formatNumber(dineroMano) + "M";
					} else {
						document.getElementById("efectivo").textContent=formatNumber(obj.Mano);
					}
					
					if(obj.Mano.toString().length > 6) {
						var dineroBanco = obj.Banco.toString().slice(0, -6);
						document.getElementById("banco").textContent=formatNumber(dineroBanco) + "M";
					} else {
						document.getElementById("banco").textContent=formatNumber(obj.Banco);
					}

					/*if(obj.Negro.toString().length > 6) {
						var dineroNegro = obj.Banco.toString().slice(0, -6);
						document.getElementById("negro").textContent=formatNumber(dineroNegro) + "M";
					} else {
						document.getElementById("negro").textContent=formatNumber(obj.Negro);
					}*/
				} else {
					console.log("Petición denegada")
				}
			}};

			xhr.send();
		}

		function getTickets(){
			var url = "functions/tickets.php";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				test = document.getElementById("testing").innerHTML = xhr.responseText
			}};

			xhr.send();
		}

		function setupMenu(){
			var url = "http://yourapi.com/api/getMenuPermissions";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
					console.log(xhr.responseText)
					const json = JSON.parse(xhr.responseText);
					console.log(json)
					if(!json.BanList){
						document.getElementById('banList').style.display = 'none';
					}
					if(!json.OnlineUsers){
						document.getElementById('onlineUsers').style.display = 'none';
					}
					if(!json.ModifiedUsers){
						document.getElementById('modifiedUsers').style.display = 'none';
					}
					if(!json.Mafias){
						document.getElementById('mafias').style.display = 'none';
					}
					if(!json.StaffList){
						document.getElementById('staffList').style.display = 'none';
					}
					if(!json.LastActivity){
						document.getElementById('lastActivity').style.display = 'none';
					}
			}};

			xhr.send();
		}

		function as3(){
			var url = "http://yourapi.com/api/getMafiaInfo";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad'){
					document.getElementById("mafiasCount").textContent=obj.Result;
				}
			}
			};

			xhr.send();
		}

		function as2(){
			var url = "http://yourapi.com/api/getCnpInfo";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad'){
					document.getElementById("cnpCount").textContent=obj.Result;
				}
			}
			};

			xhr.send();
		}


		function as1(){
			var url = "http://yourapi.com/api/getEmsInfo";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad'){
					document.getElementById("ambulanceCount").textContent=obj.Result;
				}
			}
			};

			xhr.send();
		}

		function as0(){
			var url = "http://yourapi.com/api/getMechanicInfo";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				var obj = JSON.parse(xhr.responseText);
				if(obj.Status != 'Bad'){
					document.getElementById("mechanicCount").textContent=obj.Result;
				}
			}
			};

			xhr.send();
		}
		as3();
		as2();
		as1();
		as0();
		getUserPanelData();
		getTickets();
		getMoney();
		setupMenu();
		getUsersCount();
		getPlayerWithMoreMoney();
		getOnlineUsersCount();
		getVips();
		
		function changeToDarkMode(){
			document.getElementById('pluginTheme').href = 'assets/plugins/global/plugins.dark.bundle.css';
			document.getElementById('cssTheme').href = 'assets/css/style.dark.bundle.css';
			document.getElementById('kt_body').className = 'dark-mode';
		}
		</script>
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/custom/documentation/documentation.js"></script>
		<script src="assets/js/custom/documentation/search.js"></script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/documentation/documentation.js"></script>
		<script src="assets/js/custom/documentation/search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		
	</body>
	<!--end::Body-->
</html>