<?php if(!defined('DEFINE_INDEX_FILE')){if(headers_sent()){echo '<header><meta http-equiv="refresh" content="0;url=../"></header>';}else{header('HTTP/1.0 301 Moved Permanently'); header('Location: ../');} die("<font size=+2>Access Denied!!</font>");}
// Tekkit - item definitions


$pathPrefix  = $config['paths']['local']['item packs'];
$pathPostfix = '/item.defines.php';
include($pathPrefix.'AdditionalPipes'        .$pathPostfix);
include($pathPrefix.'AdvancedMachines'       .$pathPostfix);
include($pathPrefix.'Balkon'                 .$pathPostfix);
include($pathPrefix.'Buildcraft'             .$pathPostfix);
include($pathPrefix.'ChargingBench'          .$pathPostfix);
include($pathPrefix.'CompactSolars'          .$pathPostfix);
include($pathPrefix.'ComputerCraft'          .$pathPostfix);
include($pathPrefix.'ComputerCraftSensors'   .$pathPostfix);
include($pathPrefix.'DimensionalAnchors'     .$pathPostfix);
include($pathPrefix.'EnderChest'             .$pathPostfix);
include($pathPrefix.'EquivalentExchange2'    .$pathPostfix);
include($pathPrefix.'IndustrialCraft2'       .$pathPostfix);
include($pathPrefix.'IronChests'             .$pathPostfix);
include($pathPrefix.'NetherOres'             .$pathPostfix);
include($pathPrefix.'NuclearControl'         .$pathPostfix);
include($pathPrefix.'PowerConverters'        .$pathPostfix);
include($pathPrefix.'RailCraft'              .$pathPostfix);
include($pathPrefix.'RedPower'               .$pathPostfix);
include($pathPrefix.'TubeStuff'              .$pathPostfix);
include($pathPrefix.'WirelessRedstoneChicken'.$pathPostfix);


?>