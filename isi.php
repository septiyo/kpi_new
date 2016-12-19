<?php

$idne = $_GET['IDNE'];
//echo $idne;

switch ($idne) {
    case "indicator":
        include "indicator.php";
        break;
    case "tahunan":
        include "tahunan.php";
        break;
	case "capaian":
        include "capaian.php";
        break;
	case "implementasi":
        include "implementasi.php";
        break;
		
	case "all":
        include "chart_all.php";
        break;
    case "rnd":
        include "rnd.php";
        break;
    case "maint":
        include "maint.php";
        break;
	case "sales_log":
        include "sales_log.php";
        break;
	case "hr_sales":
        include "hr_sales.php";
        break;
	case "finan":
        include "finan.php";
        break;
	case "qa":
        include "qa.php";
        break;
	case "produksi":
        include "produksi.php";
        break;
	case "personalia-legal":
        include "personalia-legal.php";
        break;
	case "tac":
        include "tac.php";
        break;
	case "pur":
        include "pur.php";
        break;
	case "exp":
        include "exp.php";
        break;
	case "tes3":
        include "tes3.php";
        break;
	case "5r":
        include "5r.php";
        break;
    case "training":
        include "training.php";
        break;
	case "org":
        include "org.php";
        break;

    default:
        include "home.php";
}

?>