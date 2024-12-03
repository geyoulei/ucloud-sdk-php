<?php
require __DIR__.'/vendor/autoload.php';
// 引入 test sdk
use UCloud\UAccount\Apis\GetProjectListRequest;
use UCloud\UAccount\Apis\GetRegionRequest;
use UCloud\UHost\UHostClient;
use UCloud\Core\Request\Request;

use UCloud\Core\Exception\UCloudException;
use UCloud\UHost\Apis\CreateUHostInstanceRequest;
use UCloud\UHost\Params\CreateUHostInstanceParamDisks;
$clientaccount = new \UCloud\UAccount\UAccountClient([
    "publicKey" => '4eZCGaHpmIaHfX55tKMMSdJ7mKBCzqWwi',
    "privateKey" => 'Hzj4EhoxvJz3fFZmwF0TpP7HtsCuMrlusKbBwaU9S16T',
]);
//$Projectdata =new GetProjectListRequest();
//$clientaccount->getProjectList($Projectdata);
$regiondata = new GetRegionRequest();
$result=$clientaccount->getRegion($regiondata);
var_dump($result);

exit();
$client = new UHostClient([
    "publicKey" => '4eZCGaHpmIaHfX55tKMMSdJ7mKBCzqWwi',
    "privateKey" => 'Hzj4EhoxvJz3fFZmwF0TpP7HtsCuMrlusKbBwaU9S16T',
]);
$result=$client->GetRegionRequest();
var_dump($result);

