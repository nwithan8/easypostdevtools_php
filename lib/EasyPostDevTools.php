<?php
// Required PHP extensions

// EasyPost API Library
require_once(dirname(__FILE__) . "../easypost-php/lib/EasyPost.php");

if (!function_exists('json_decode')) {
    throw new Exception('EasyPostDevTools needs the JSON PHP extension.');
}

// Models
require(dirname(__FILE__) . '/EasyPostDevTools/Addresses.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Batch.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Carriers.php');
require(dirname(__FILE__) . '/EasyPostDevTools/CustomsInfos.php');
require(dirname(__FILE__) . '/EasyPostDevTools/CustomsItems.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Events.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Fees.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Insurance.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Labels.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Mapper.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Options.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Orders.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Parcels.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Pickups.php');
require(dirname(__FILE__) . '/EasyPostDevTools/PostageLabels.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Rates.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Reports.php');
require(dirname(__FILE__) . '/EasyPostDevTools/ScanForms.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Shipments.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Smartrates.php');
require(dirname(__FILE__) . '/EasyPostDevTools/TaxIdentifiers.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Trackers.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Users.php');
require(dirname(__FILE__) . '/EasyPostDevTools/Webhooks.php');

// Utils
require(dirname(__FILE__) . '/Constants.php');
require(dirname(__FILE__) . '/Dates.php');
require(dirname(__FILE__) . '/JSONReader.php');
require(dirname(__FILE__) . '/Random.php');

use EasyPost\EasyPost;

class EasyPostDevTools
{
    public static function setupKey($apiKey)
    {
        EasyPost::setApiKey($apiKey);
    }
}