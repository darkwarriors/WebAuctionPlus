<?php if(!defined('DEFINE_INDEX_FILE')){if(headers_sent()){echo '<header><meta http-equiv="refresh" content="0;url=../"></header>';}else{header('HTTP/1.0 301 Moved Permanently'); header('Location: ../');} die("<font size=+2>Access Denied!!</font>");}
// Red Power - item definitions
$Items = &ItemFuncs::$Items;
$pack  = 'RedPower';

// wire
$Items[136]=array(
  512=>array(
    'name'=>'White Insulated Wire',
    'icon'=>'WhiteCabel.png',
    'pack'=>$pack),
  513=>array(
    'name'=>'Orange Insulated Wire',
    'icon'=>'OrangeCabel.png',
    'pack'=>$pack),
  514=>array(
    'name'=>'Magenta Insulated Wire',
    'icon'=>'PurpleCabel.png',
    'pack'=>$pack),
  515=>array(
    'name'=>'Light Blue Insulated Wire',
    'icon'=>'LightBlueCabel.png',
    'pack'=>$pack),
  516=>array(
    'name'=>'Yellow Insulated Wire',
    'icon'=>'YellowCabel.png',
    'pack'=>$pack),
  517=>array(
    'name'=>'Lime Insulated Wire',
    'icon'=>'LimeCabel.png',
    'pack'=>$pack),
  518=>array(
    'name'=>'Pink Insulated Wire',
    'icon'=>'PinkCabel.png',
    'pack'=>$pack),
  519=>array(
    'name'=>'Gray Insulated Wire',
    'icon'=>'GrayCabel.png',
    'pack'=>$pack),
  520=>array(
    'name'=>'Light Gray Insulated Wire',
    'icon'=>'LightGrayCabel.png',
    'pack'=>$pack),
  521=>array(
    'name'=>'Cyan Insulated Wire',
    'icon'=>'CyanCabel.png',
    'pack'=>$pack),
  522=>array(
    'name'=>'Purple Insulated Wire',
    'icon'=>'PurpleCabel.png',
    'pack'=>$pack),
  523=>array(
    'name'=>'Blue Insulated Wire',
    'icon'=>'BlueCabel.png',
    'pack'=>$pack),
  524=>array(
    'name'=>'Brown Insulated Wire',
    'icon'=>'BrownCabel.png',
    'pack'=>$pack),
  525=>array(
    'name'=>'Green Insulated Wire',
    'icon'=>'GreenCabel.png',
    'pack'=>$pack),
  526=>array(
    'name'=>'Red Insulated Wire',
    'icon'=>'RedCabel.png',
    'pack'=>$pack),
  527=>array(
    'name'=>'Black Insulated Wire',
    'icon'=>'BlackCabel.png',
    'pack'=>$pack),
  256=>array(
    'name'=>'Red Alloy Wire',
    'icon'=>'Cabel.png',
    'pack'=>$pack),
  768=>array(
    'name'=>'Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  769=>array(
    'name'=>'White Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  770=>array(
    'name'=>'Orange Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  771=>array(
    'name'=>'Magenta Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  772=>array(
    'name'=>'Light Blue Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  773=>array(
    'name'=>'Yellow Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  774=>array(
    'name'=>'Lime Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  775=>array(
    'name'=>'Pink Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  776=>array(
    'name'=>'Gray Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  777=>array(
    'name'=>'Light Gray Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  778=>array(
    'name'=>'Cyan Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  779=>array(
    'name'=>'Purple Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  780=>array(
    'name'=>'Blue Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  781=>array(
    'name'=>'Brown Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  782=>array(
    'name'=>'Green Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  783=>array(
    'name'=>'Red Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  784=>array(
    'name'=>'Black Bundled Cable',
    'icon'=>'MultiCabel.png',
    'pack'=>$pack),
  -1=>array(
    'name'=>'Unknown Wire',
    'icon'=>'Cabel.png',
    'pack'=>$pack),
);

// gates
$Items[138]=array(
  0 =>array(
    'name'=>'Timer',
    'icon'=>'Timer.png',
    'pack'=>$pack),
  1 =>array(
    'name'=>'Sequencer',
    'icon'=>'Sequencer.png',
    'pack'=>$pack),
  2 =>array(
    'name'=>'State Cell',
    'icon'=>'State_Cell.png',
    'pack'=>$pack),
  256=>array(
    'name'=>'RS Latch',
    'icon'=>'RS_Latch.png',
    'pack'=>$pack),
  257=>array(
    'name'=>'NOR Gate',
    'icon'=>'NOR_Gate.png',
    'pack'=>$pack),
  258=>array(
    'name'=>'OR Gate',
    'icon'=>'OR_Gate.png',
    'pack'=>$pack),
  259=>array(
    'name'=>'NAND Gate',
    'icon'=>'NAND_Gate.png',
    'pack'=>$pack),
  260=>array(
    'name'=>'AND Gate',
    'icon'=>'AND_Gate.png',
    'pack'=>$pack),
  261=>array(
    'name'=>'XNOR Gate',
    'icon'=>'XNOR_Gate.png',
    'pack'=>$pack),
  262=>array(
    'name'=>'XOR Gate',
    'icon'=>'XOR_Gate.png',
    'pack'=>$pack),
  263=>array(
    'name'=>'Pulse Former',
    'icon'=>'Pulse_Former.png',
    'pack'=>$pack),
  264=>array(
    'name'=>'Toggle Latch',
    'icon'=>'Toggle_Latch.png',
    'pack'=>$pack),
  265=>array(
    'name'=>'NOT Gate',
    'icon'=>'NOT_Gate.png',
    'pack'=>$pack),
  266=>array(
    'name'=>'Buffer Gate',
    'icon'=>'Buffer_Gate.png',
    'pack'=>$pack),
  267=>array(
    'name'=>'Multiplexer',
    'icon'=>'Multiplexer.png',
    'pack'=>$pack),
  268=>array(
    'name'=>'Repeater',
    'icon'=>'Repeater.png',
    'pack'=>$pack),
  269=>array(
    'name'=>'Synchronizer',
    'icon'=>'Synchronizer.png',
    'pack'=>$pack),
  270=>array(
    'name'=>'Randomizer',
    'icon'=>'Randomizer.png',
    'pack'=>$pack),
  271=>array(
    'name'=>'Transparent Latch',
    'icon'=>'Transparent_Latch.png',
    'pack'=>$pack),
  272=>array(
    'name'=>'Light Sensor',
    'icon'=>'Light_Sensor.png',
    'pack'=>$pack),
  512=>array(
    'name'=>'Null Cell',
    'icon'=>'Null_Cell.png',
    'pack'=>$pack),
  513=>array(
    'name'=>'Invert Chell',
    'icon'=>'Invert_Cell.png',
    'pack'=>$pack),
  514=>array(
    'name'=>'Non-Invert Cell',
    'icon'=>'Non-Invert_Cell.png',
    'pack'=>$pack),
  768=>array(
    'name'=>'Counter',
    'icon'=>'Counter.png',
    'pack'=>$pack),
  1024=>array(
    'name'=>'Bus Transceiver',
    'icon'=>'Bus_Transceiver.png',
    'pack'=>$pack),
  -1=>array(
    'name'=>'Unknown Gate',
    'icon'=>'Timer.png',
    'pack'=>$pack),
);

// lamps
$Items[147]=array(
  0 =>array(
    'name'=>'White Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  1 =>array(
    'name'=>'Orange Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  2 =>array(
    'name'=>'Magenta Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  3 =>array(
    'name'=>'Light Blue Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  4 =>array(
    'name'=>'Yellow Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  5 =>array(
    'name'=>'Lime Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  6 =>array(
    'name'=>'Pink Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  7 =>array(
    'name'=>'Gray Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  8 =>array(
    'name'=>'Light Gray Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  9 =>array(
    'name'=>'Cyan Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  10=>array(
    'name'=>'Purple Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  11=>array(
    'name'=>'Blue Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  12=>array(
    'name'=>'Brown Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  13=>array(
    'name'=>'Green Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  14=>array(
    'name'=>'Red Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  15=>array(
    'name'=>'Black Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
  -1=>array(
    'name'=>'Unknown Lamp',
    'icon'=>'Light.gif',
    'pack'=>$pack),
);

// lumar
$Items[1256]=array(
  0 =>array(
    'name'=>'White Lumar',
    'icon'=>'WhiteGlow.png',
    'pack'=>$pack),
  1 =>array(
    'name'=>'Orange Lumar',
    'icon'=>'OrangeGlow.png',
    'pack'=>$pack),
  2 =>array(
    'name'=>'Magenta Lumar',
    'icon'=>'PurpleGlow.png',
    'pack'=>$pack),
  3 =>array(
    'name'=>'Light Blue Lumar',
    'icon'=>'LightBlueGlow.png',
    'pack'=>$pack),
  4 =>array(
    'name'=>'Yellow Lumar',
    'icon'=>'YellowGlow.png',
    'pack'=>$pack),
  5 =>array(
    'name'=>'Lime Lumar',
    'icon'=>'LimeGlow.png',
    'pack'=>$pack),
  6 =>array(
    'name'=>'Pink Lumar',
    'icon'=>'PinkGlow.png',
    'pack'=>$pack),
  7 =>array(
    'name'=>'Gray Lumar',
    'icon'=>'GrayGlow.png',
    'pack'=>$pack),
  8 =>array(
    'name'=>'Light Gray Lumar',
    'icon'=>'LightGrayGlow.png',
    'pack'=>$pack),
  9 =>array(
    'name'=>'Cyan Lumar',
    'icon'=>'CyanGlow.png',
    'pack'=>$pack),
  10=>array(
    'name'=>'Purple Lumar',
    'icon'=>'PurpleGlow.png',
    'pack'=>$pack),
  11=>array(
    'name'=>'Blue Lumar',
    'icon'=>'BlueGlow.png',
    'pack'=>$pack),
  12=>array(
    'name'=>'Brown Lumar',
    'icon'=>'BrownGlow.png',
    'pack'=>$pack),
  13=>array(
    'name'=>'Green Lumar',
    'icon'=>'GreenGlow.png',
    'pack'=>$pack),
  14=>array(
    'name'=>'Red Lumar',
    'icon'=>'RedGlow.png',
    'pack'=>$pack),
  15=>array(
    'name'=>'Black Lumar',
    'icon'=>'BlackGlow.png',
    'pack'=>$pack),
  -1=>array(
    'name'=>'Unknown Lumar',
    'icon'=>'WhiteGlow.png',
    'pack'=>$pack),
);


unset($Items);
?>