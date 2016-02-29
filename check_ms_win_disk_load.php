<?php

/*
    * PNP4Nagios template for check_ms_win_disk_load Nagios plugin
    *
    * Version 2016022601(YYYYMMDDxx)
    *
    * Author: Ivan Vinogradov vinogradovia@gmail.com
    *
    * The latest version can be found at:
    * https://github.com/vinogradovia/check_ms_win_disk_load/
    * 
    * Original plugin : https://github.com/willemdh/check_ms_win_disk_load 
*/

$colors = array(
    '#ffffff',
    '#058dc7',
    '#50b432',
    '#ed561b',
    '#dddf00',
    '#24cbe5',
    '#64e572',
    '#ff9655',
    '#fff263',
);

$opt[1] = "--vertical-label \"Various stats \" -l 0 -r --title \" " . $this->MACRO['DISP_HOSTNAME'] . " / " . $this->MACRO['DISP_SERVICEDESC'] . " \" ";
$def[1] = '';

foreach ($DS as $i) {
    $def[1] .= rrd::def("var$i", $RRDFILE[1], $DS[$i], 'AVERAGE');
    $def[1] .= rrd::line2("var$i", $colors[$i], "$NAME[$i]");
    $def[1] .= rrd::gprint("var$i" ,'LAST' ,"Last\:%5.0lf%s$UNIT[1]");
    $def[1] .= rrd::gprint("var$i" ,'MIN' ,"min\:%5.0lf%s$UNIT[1]");
    $def[1] .= rrd::gprint("var$i" ,'MAX' ,"max\:%5.0lf%s$UNIT[1]");
    $def[1] .= rrd::gprint("var$i" ,'AVERAGE' ,"avg\:%5.0lf%s$UNIT[1] \\r");

};

    $def[1] .= rrd::comment("\\r");
    $def[1] .= rrd::comment("Disk Load Monitoring on Windows\\r");
    $def[1] .= rrd::comment("Command " . $TEMPLATE[1] . "\\r");

?>
