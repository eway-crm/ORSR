<?php
/**
 * Sample to show usage of the ORSR class.
 *
 * User: Roman Stefko
 * Date: 27.7.16
 * Time: 13:19
 */

include "orsr.class.php";

$orsr = new ORSR();

// Získání informací o společnosti pomocí jména
$info = $orsr->getCompaniesByName("S4B s.r.o.")[0]->Zaznam;

// Získání informací o společnosti pomocí IČ
$info = $orsr->getCompaniesByID("46 507 345")[0]->Zaznam;

echo "<pre>";
print_r($info);
echo "</pre>";