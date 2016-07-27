<?php
/**
 * Sample to show usage of the ORSR class.
 *
 * User: Roman Štefko
 * Date: 27.7.16
 * Time: 13:19
 */

include "orsr.class.php";

$orsr = new ORSR();
echo "IČO firmy ESET, spol. s r.o. je: ".$orsr->getCompaniesByName("ESET, spol. s r.o.")[0]->Zaznam->ICO;
echo "<br />";
echo "Jméno firmy s IČ 31 333 532 je: ".$orsr->getCompaniesByID("31 333 532")[0]->Zaznam->ObchodneMeno;
