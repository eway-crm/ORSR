<?php
/**
 * User: Roman Stefko
 * Date: 27.7.16
 * Time: 13:06
 */

/**
 * Class used to communicate with api.register-firiem.sk.
 */
class ORSR {

    const API_URL = "http://api.register-firiem.sk/Service.svc/";

    /**
     * @param $name Name of the company
     * @return SimpleXMLElement
     */
    function getCompaniesByName($name) {
        $xmlData = file_get_contents(ORSR::API_URL."ObchodneMeno/".rawurlencode($name));
        $xmlObject = simplexml_load_string($xmlData) or die("Error: Cannot create object");

        return $xmlObject;
    }

    /**
     * @param $id ID (ICO) of the company
     * @return SimpleXMLElement
     */
    function getCompaniesByID($id) {
        $xmlData = file_get_contents(ORSR::API_URL."ICO/".rawurlencode($id));
        $xmlObject = simplexml_load_string($xmlData) or die("Error: Cannot create object");

        return $xmlObject;
    }

}