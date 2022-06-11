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
    <title>Armarios Mafias - Fivem StaffPanel</title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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
</head>>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <?php
			include('menu.php');
			?>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <?php include('header.php')?>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="toolbar" id="kt_toolbar">
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Inventario Mafias
                                </h1>
                                <span class="h-20px border-gray-300 border-start mx-4"></span>
                            </div>
                        </div>
                    </div>
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card card-flush h-xl-100" style="height: 700px;">
                                <div class="card-header pt-7">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Armario de la Mafia</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">Lista de armas del
                                            armario.</span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="hover-scroll-overlay-y pe-6 me-n6" id="weaponsContainer"
                                        style="height: 640px;">
                                        <div class="blockui-overlay" id="loadingDiv" style="z-index: 1;height: 415px;margin: auto;width: 15%;top: 130px;margin-top: 10px;padding: 10px;">
                                            <div class="blockui-message">
                                                <span class="spinner-border text-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blockui-overlay" style="display:none;z-index: 1;" id="banTarget1">
                                    <div class="blockui-message"> Baneado</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
    var hostUrl = "assets/";
    </script>
    <script>
    const delay = ms => new Promise(res => setTimeout(res, ms));
    const yourFunction = async () => {
        var mafiaID = <?php echo $id; ?>;
        console.log(mafiaID)
        var url = "http://yourapi.com/api/getMafiaArmarios2";
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = async () => {
            if (xhr.readyState === 4) {
                var obj = JSON.parse(xhr.responseText);
                if (obj.Status == "Success") {
                    var test = JSON.parse(obj.Result[0].data);
                    console.log(test['weapons'])
                    updateWeaponList(test['weapons'], false);
                }
            }
        };
        var data = `{"mafiaID": "${mafiaID}"}`;

        xhr.send(data);
    };

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
        } else if (weaponLowerCase == 'gadget_parachute') {
            weaponNameTraducido = "Paracaidas";
            haveBalas = true;
            return {
                weaponNameTraducido,
                haveBalas
            };
        } else if (weaponLowerCase == 'weapon_petrolcan') {
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
        "weapon_marksmanpistol", "weapon_revolver", "weapon_revolver_mk2", "weapon_doubleaction",
        "weapon_raypistol",
        "weapon_ceramicpistol", "weapon_navyrevolver", "weapon_gadgetpistol", "weapon_stungun_mp",
        "weapon_microsmg",
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
        "weapon_proxmine", "weapon_snowball", "weapon_pipebomb", "weapon_ball", "weapon_smokegrenade",
        "weapon_flare",
        "weapon_petrolcan", "gadget_parachute", "weapon_fireextinguisher", "weapon_hazardcan",
        "weapon_fertilizercan"
    ]

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
        document.getElementById('addWeaponButton').onclick = function() {
            addWeapon(selectOS.value);
        }
        console.log(selectOS.value)
    }

    function updateWeaponList(listaJson, actualizar) {
        var obj = listaJson
        console.log(obj)
        console.log("0")
        for (var weapon in obj) {
            var hasComponent = false;
            if (obj[weapon].hasOwnProperty('components')) {
                hasComponent = true;
            }
            console.log("1")
            console.log(`Arma: ${obj[weapon].name}`)
            var weaponName = obj[weapon].name.replace("weapon_", "").replace("WEAPON_", "").toLowerCase();
            if (obj[weapon] != null) {
                let {
                    weaponNameTraducido,
                    haveBalas
                } = getWeaponDetails(obj[weapon].name);
                console.log(weaponNameTraducido)
                //Check If Have Balas
                if (haveBalas || true) {
                    textAmmo = 'Cantidad: ';
                    console.log(`Amount: ${obj[weapon].count}`)
                } else {
                    textAmmo = '';
                    var cantidad = '';
                }
                if (hasComponent) {
                    componentHtml =
                        `<span class="badge badge-light-success">Component: ${obj[weapon].components}</span>`;
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
						
                        
						<!--end::Action-->
					</div>
					<!--end::Info-->
					<div class="d-flex flex-stack">
						<!--begin::Name-->
						<span class="text-gray-400 fw-bolder">${textAmmo}
							<a class="text-gray-800 text-hover-primary fw-bolder">${obj[weapon].count}</a></span>
						<!--end::Name-->
						<!--begin::Label-->
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
                if (divLoading != null) {
                    divLoading.style.display = "none";
                }
                if (actualizar) {
                    var weaponContainer = document.getElementById("weaponsContainer").innerHTML = htmlNoAmount;
                } else {
                    var weaponContainer = document.getElementById("weaponsContainer").innerHTML += htmlNoAmount;
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
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                getUserData();
                //document.getElementById('loadingDiv').style.display = "none";
            }
        };
        const myJSON = JSON.stringify(jsonModificadoEnviado);
        if (modal) {
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
        if (divLoading != null) {
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
        if (haveBalas) {
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

    getUserPanelData();

    var loadoutJson = "";

    yourFunction();
    </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
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
</body>

</html>;