<?php
$style = '';
if(isset($_POST['identifier'])){
    $identifier = $_POST['identifier'];
    $fields = [
        'identifier' => ''.$identifier.''
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'http://yourapi.com/api/getTicketHistoryPost');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    if(strlen($result) < 20){
        $style = 'style="display:none"';
    }
    $obj = json_decode($result, true);
} else {
    $url = "http://yourapi.com/api/getTicketHistory";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
    "Accept: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    if(strlen($resp) < 10){
        $style = 'style="display:none"';
    }

    $obj = json_decode($resp, true);
}
?>

<div class="row g-5 g-xl-10 mb-xl-10" <?php echo $style?>>
    <!--begin::Col-->

    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Table Widget 4-->
        <div class="card card-flush h-xl-100">
            <!--begin::Card header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Tickets Recientes</span>
                    <span class="text-gray-400 mt-1 fw-bold fs-6">Aquí aparecen los tickets creados recientemente ordenados.</span>
                </h3>
                <!--end::Title-->
                <!--begin::Actions-->
                
                <!--end::Actions-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Table-->
                <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 101.523px;">TICKET ID</th>
                                    <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 101.66px;">Creado</th>
                                    <th class="text-end min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 127.012px;">Staff</th>
                                    <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 101.66px;">Usuario</th>
                                    <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" style="width: 101.66px;">Tipo</th>
                                    <th class="text-end min-w-50px sorting_disabled" rowspan="1" colspan="1" style="width: 94.6875px;">Razón</th>
                                    <th class="text-end sorting_disabled" rowspan="1" colspan="1" style="width: 25.5273px;"></th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bolder text-gray-600">
                                <?php
                                foreach ($obj["Result"] as $testing) {
                                    $razon = $testing["razon"];
                                    $fecha = str_replace("T", " ", $testing['fecha']);
                                    $fecha = str_replace(".000Z", "", $fecha);
                                    substr("Hello How are you", 0, 5);
                                    if ($testing['tipo'] == 1) {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-warning\">KICK</span></td>";
                                    } elseif ($testing['tipo'] == 3) {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-danger\">BAN PERMA</span></td>";
                                    } elseif ($testing['tipo'] == 4) {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-danger\">WIPE</span></td>";
                                    } elseif ($testing['tipo'] == 2) {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-info\">BANTEMP</span></td>";
                                    } elseif ($testing['tipo'] == 'bantemp') {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-info\">BANTEMP</span></td>";
                                    } elseif ($testing['tipo'] == '5') {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-success\">DESBANEO</span></td>";
                                    } elseif ($testing['tipo'] == '6') {
                                        $tipo = "<td class='text-end'><span class=\"badge badge-warning\">AVISO</span></td>";
                                    }
                                    echo '<tr class="odd">
                                    <td>
                                        <a class="text-dark text-hover-primary">#TK-' . $testing["id"] . '</a>
                                    </td>
                                    <td class="text-end" style="font-size: 15px;">' . $fecha . '</td>
                                    <td class="text-end">
                                        <a class="text-dark text-hover-primary">' . $testing["staff"] . '</a>
                                    </td>
                                    <td class="text-end">
                                        <a href="account/overview.php?identifier='.$testing["steamid"].'" class="text-dark text-hover-primary">' . $testing["usuario"] . '</a>
                                    </td>
                                        '.$tipo.'
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">'.$razon.'</span>
                                    </td>
                                    <td class="text-end">
                                    <button type="button" class="btn btn-primary" style="height: 35px;font-size: 15px;width: 200px;width: 135px" data-bs-toggle="modal" data-bs-target="#kt_modal_'.$testing["id"].'">
                                        Comentario
                                    </button>
                                    </td>
                                    
                                </tr>
                                <div class="modal fade" tabindex="-1" id="kt_modal_'.$testing["id"].'">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">#TK-'.$testing["id"].'</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <span class="svg-icon svg-icon-2x"></span>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
                                                <p>'.$testing["comentarios"].'</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Table Widget 4-->
    </div>
    <!--end::Col-->
</div>