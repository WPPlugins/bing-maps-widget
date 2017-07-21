<?php
function map_ve_load() {$v1431801120_65 = '
<script charset="UTF-8" type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6.2&mkt=en-US"></script>';return $v1431801120_65;}function map_script_head() {$v1431801120_65 = '
/*MAP HEAD SCRIPT*/
function ResetVE(id){var map = new VEMap(id);return map;}function GetMap(title, map, latitude, longitude,
zoom, view, dashboard, message){dashboard=dashboard.toLowerCase();view=view.toLowerCase();try{map.SetCredentials("AmyZ-zuFZgcGk2No6efXCmMc8uWrnO7uVhoyE0VKSl_2b14HOKVkUCaP9kOWSbbe");/*var x = new VEMapOptions();*/
/*x.EnableDashboardLabels=true;*/
if(dashboard=="hide"){map.HideDashboard();}else{map.ShowDashboard();}if(dashboard=="tiny") {map.SetDashboardSize(VEDashboardSize.Tiny);}else if(dashboard=="small") {map.SetDashboardSize(VEDashboardSize.Small);}else {map.SetDashboardSize(VEDashboardSize.Normal);}map.LoadMap(new VELatLong(latitude, longitude, 0, VEAltitudeMode.RelativeToGround),
zoom, VEMapStyle.Hybrid, false, VEMapMode.Mode2D, true, 1);if(view=="aerial"){map.SetMapStyle(VEMapStyle.Aerial);}else if(view=="road"){map.SetMapStyle(VEMapStyle.Road);}map.SetScaleBarDistanceUnit(VEDistanceUnit.Kilometers);/*var desc= message;*/
var pin = new VEShape(VEShapeType.Pushpin, map.GetCenter());/*pin.SetCustomIcon("<img src=" +pushpinUrls[place.MatchConfidence]><span class=\"pinText\">" +(p+1) +"</span>");*/
pin.SetTitle(title);pin.SetDescription(message);map.AddShape(pin);/*var pin = Pushpin();*/
/*var pin = new VEPushpin(1, map.GetCenter(), null,
title, "Test2");map.AddPushpin(pin);*/
}catch(VEException){alert("ERROR: "+ title +VEException.message +" : " +VEException.name +" : " +VEException.source);}}function toggleStyle(map){var style = map.GetMapStyle();if (style == VEMapStyle.Road){map.SetMapStyle(VEMapStyle.Aerial);}else{if(style==VEMapStyle.Aerial){map.SetMapStyle(VEMapStyle.Hybrid);}else{map.SetMapStyle(VEMapStyle.Road);}}}function getInfo(map){var info;/*if (map.IsBirdseyeAvailable()){var be = map.GetBirdseyeScene();info  = "ID: "+be.GetID()+"\t";info += "orientation: "+be.GetOrientation()+ "\t";info += "height: "+be.GetHeight()+"\t";info += "width: "+be.GetWidth()+"\t";var pixel = be.LatLongToPixel(map.GetCenter(), map.GetZoomLevel());info += "LatLongToPixel: "+pixel.x+", "+pixel.y+"\t";info += "contains pixel "+pinPixel.x+", "+pinPixel.y+": " +be.ContainsPixel(pinPixel.x, pinPixel.y, map.GetZoomLevel())+"\t";info += "contains latlong "+pinPoint+": "+be.ContainsLatLong(pinPoint)+"\t";info += "latlong: "+map.PixelToLatLong(pixel);alert(info);}else
{*/
var center = map.GetCenter();info  = "Zoom level:\t"+map.GetZoomLevel()+"\t";info += "Latitude:\t"+center.Latitude+"\t";info += "Longitude:\t"+center.Longitude;alert(info);/*}*/
}/*MAP HEAD SCRIPT END*/';return $v1431801120_65;}function map_template_page($v19574644_39) {$v2122860557_9 = '
<h2>'.$v19574644_39['title'].'</h2><div id="myMap'.$v19574644_39['id'].'" style="position:relative; width:'.$v19574644_39['width'].'px; height:'.$v19574644_39['height'].'px; border:#555555 2px solid;"></div><div id=\'control\' style="width:'.$v19574644_39['width'].'px">'.$v19574644_39['control'];$v2122860557_9 .= ' |
<a href="javascript:void(0);openmap(440,600,\'silver\',\''.rawurlencode($v19574644_39['title']).'\','.$v19574644_39['lat'].','.$v19574644_39['long'].','
.$v19574644_39['width'].','.$v19574644_39['height'].','.$v19574644_39['zoom'].',\''.$v19574644_39['view'].'\',\''.$v19574644_39['dashboard'].'\',\''.rawurlencode($v19574644_39['message']).'\');">Open New Window</a>';$v2122860557_9 .= '</div>
';return $v2122860557_9;}function map_script($v987116332_35, $v1486591142_77, $v743767051_13, $v1002819423_1,
$v1648953211_55, $v1009985635_59, $v1829815673_5, $v65102490_75) {$v1431801120_65 .= '
var map'.$v1486591142_77.' = ResetVE("myMap'.$v1486591142_77.'");GetMap(\''.$v987116332_35.'\', map'.$v1486591142_77.', '.$v743767051_13.',
'.$v1002819423_1.', '.$v1648953211_55.',
\''.$v1009985635_59.'\', \''.$v1829815673_5.'\', \''.$v65102490_75.'\');';return $v1431801120_65;}function additional_script_once() {$v1431801120_65= '/* ADDITIONAL SCRIPT ONCE */
function toggleStyle(map){var style = map.GetMapStyle();if (style == VEMapStyle.Road){map.SetMapStyle(VEMapStyle.Aerial);}else{if(style==VEMapStyle.Aerial){map.SetMapStyle(VEMapStyle.Hybrid);}else{map.SetMapStyle(VEMapStyle.Road);}}}function getInfo(map){var info;/*if (map.IsBirdseyeAvailable()){var be = map.GetBirdseyeScene();info  = "ID: "+be.GetID()+"\t";info += "orientation: "+be.GetOrientation()+ "\t";info += "height: "+be.GetHeight()+"\t";info += "width: "+be.GetWidth()+"\t";var pixel = be.LatLongToPixel(map.GetCenter(), map.GetZoomLevel());info += "LatLongToPixel: "+pixel.x+", "+pixel.y+"\t";info += "contains pixel "+pinPixel.x+", "+pinPixel.y+": " +be.ContainsPixel(pinPixel.x, pinPixel.y, map.GetZoomLevel())+"\t";info += "contains latlong "+pinPoint+": "+be.ContainsLatLong(pinPoint)+"\t";info += "latlong: "+map.PixelToLatLong(pixel);alert(info);}else
{*/
var center = map.GetCenter();info  = "Zoom level:\t"+map.GetZoomLevel()+"\t";info += "Latitude:\t"+center.Latitude+"\t";info += "Longitude:\t"+center.Longitude;alert(info);/*}*/
}/* ADDITIONAL SCRIPT ONCE END */';return $v1431801120_65;}function window_control() {$v1431801120_65 = 'function changeView(view){view=view.toLowerCase();try{if(view=="road"){map.SetMapStyle(VEMapStyle.Road);}else if(view=="aerial"){map.SetMapStyle(VEMapStyle.Aerial);}else{map.SetMapStyle(VEMapStyle.Hybrid);}}catch(VEException){alert("ERROR: "+VEException.message +" : " +VEException.name +" : " +VEException.source);}}function updateMap(){var lat = document.bing_map_setting.latitude.value;var long = document.bing_map_setting.longitude.value;GetMap(document.bing_map_setting.title.value, map, lat, long,
document.bing_map_setting.zoom.options[document.bing_map_setting.zoom.selectedIndex].value,
document.bing_map_setting.view.options[document.bing_map_setting.view.selectedIndex].value,
document.bing_map_setting.dashboard.options[document.bing_map_setting.dashboard.selectedIndex].value,
document.bing_map_setting.message.value);}map.AttachEvent("onendpan", getLatLong);map.AttachEvent("onendzoom", getZoom);map.AttachEvent("onchangemapstyle", getView);/*map.AttachEvent("onviewchange", getView);*/
function getLatLong(){try{var center = map.GetCenter();document.bing_map_setting.latitude.value = center.Latitude;document.bing_map_setting.longitude.value = center.Longitude;/*map.DeleteAllPushpins();*/
map.DeleteAllShapes();map.AddPushpin(center);}catch(VEException){alert(VEException.message +" : " +VEException.name +" : " +VEException.source);}}function getZoom(){try{document.bing_map_setting.zoom.selectedIndex = map.GetZoomLevel()-1;}catch(VEException){alert(VEException.message +" : " +VEException.name +" : " +VEException.source);}}function getView(){var view = map.GetMapStyle();var index = 0;if(view==VEMapStyle.Road){index = 0;}else if(view==VEMapStyle.Aerial){index = 1;}else if(view==VEMapStyle.Hybrid){index = 2;}document.bing_map_setting.view.selectedIndex = index;}function changeDashboard(dashboard){try{dashboard=dashboard.toLowerCase();if(dashboard=="normal"){map.SetDashboardSize(VEDashboardSize.Normal);}else if(dashboard=="small"){map.SetDashboardSize(VEDashboardSize.Small);}else if(dashboard=="tiny"){map.SetDashboardSize(VEDashboardSize.tiny);}if(dashboard=="hide"){map.HideDashboard();}else{map.ShowDashboard();}map.LoadMap();}catch(VEException){alert("ERROR: "+VEException.message +" : " +VEException.name +" : " +VEException.source);}}function getDashboard(){dashboard = map.GetDashboardSize().toLowerCase();if(dashboard=="normal"){index=0;}else if(dashboard=="small"){index=1;}else if(dashboard=="tiny"){index=2;}else if(dashboard=="hide"){index=3;}document.bing_map_setting.dashboard.selectedIndex = index;}function setForm(latitude, longitude, zoom, view, dashboard){getLatLong();getZoom();getView();getDashboard();}function ResizeMap(){var d=document.getElementById("myMap");var w = document.bing_map_setting.width.value;var h = document.bing_map_setting.height.value;if(w.length>0 && !isNaN(w)&&
h.length>0 && !isNaN(h)){d.setAttribute("style",
"position: relative; width: "+w+"px; height: "+h+"px;border:#555555 2px solid;");updateMap();}}';return $v1431801120_65;}/*
function map_setting_form($v987116332_35, $v743767051_13,
$v1002819423_1, $v422685691_33,
$v2141942652_31, $v1648953211_55,
$v1009985635_59, $v1829815673_5, $v2125353063_17) {*/
function map_setting_form() {$v525407731_63 = '<form name="bing_map_setting"><br><table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2"><tbody><tr><td style="vertical-align: top;">Title:<br></td><td style="vertical-align: top;"><input name="title" value=\\\'\'+title+\'\\\' onchange="updateMap();"></td></tr><tr><td style="vertical-align: top;">Message:<br></td><td style="vertical-align: top;"><input name="message" value=\\\'\'+message+\'\\\' onchange="updateMap();"></td></tr><tr><td style="vertical-align: top;">Latitude (read only):<br></td><td style="vertical-align: top;"><input name="latitude" readonly="readonly" value="\'+latitude+\'"></td></tr><tr><td style="vertical-align: top;">Longitude (read only):<br></td><td style="vertical-align: top;"><input name="longitude" readonly="readonly" value="\'+longitude+\'"></td></tr><tr><td style="vertical-align: top;">Width:<br></td><td style="vertical-align: top;"><input name="width" value="\'+width+\'" onchange="ResizeMap();"></td></tr><tr><td style="vertical-align: top;">Height:<br></td><td style="vertical-align: top;"><input name="height" value="\'+height+\'" onchange="ResizeMap();"></td></tr><tr><td style="vertical-align: top;">Zoom:<br></td><td style="vertical-align: top;"><select name="zoom" onchange="map.SetZoomLevel(document.bing_map_setting.zoom.options[document.bing_map_setting.zoom.selectedIndex].value);"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option></select></td></tr><tr><td style="vertical-align: top;">View:<br></td><td style="vertical-align: top;"><select name="view" onchange="changeView(document.bing_map_setting.view.options[document.bing_map_setting.view.selectedIndex].value)"><option value="Road">Road</option><option value="Aerial">Aerial</option><option value="Hybrid">Hybrid</option></select></td></tr><tr><td style="vertical-align: top;">Dashboard:<br></td><td style="vertical-align: top;"><select name="dashboard" onchange="updateMap();"><option value="Normal">Normal</option><option value="Small">Small</option><option value="Tiny">Tiny</option><option value="Hide">Hide</option></select></td></tr><tr><td style="vertical-align: top;"><input value="Get Code" onclick="make_code();updateMap();" type="button"></td><td style="vertical-align: top;"><input name="bing_map_plugin_code" size="40" onclick="select();"><br></td></tr></tbody></table></form><script type="text/javascript">
document.bing_map_setting.zoom.selectedIndex = \'+(zoom-1)+\';var view = "\'+view+\'";view = view.toLowerCase();var index = 0;if(view=="road"){index = 0;}else if(view=="aerial"){index = 1;}else if(view=="hybrid"){index = 2;}document.bing_map_setting.view.selectedIndex = index;var dashboard = "\'+dashboard+\'";dashboard = dashboard.toLowerCase();if(dashboard=="normal"){index=0;}else if(dashboard=="small"){index=1;}else if(dashboard=="tiny"){index=2;}else if(dashboard=="hide"){index=3;}document.bing_map_setting.dashboard.selectedIndex = index;function make_code() {var code ="[bingmap]"+document.bing_map_setting.title.value+","+document.bing_map_setting.latitude.value+","+document.bing_map_setting.longitude.value+","+document.bing_map_setting.width.value+","+document.bing_map_setting.height.value+","+document.bing_map_setting.zoom.options[document.bing_map_setting.zoom.selectedIndex].value+","+document.bing_map_setting.view.options[document.bing_map_setting.view.selectedIndex].value+","+document.bing_map_setting.dashboard.options[document.bing_map_setting.dashboard.selectedIndex].value+","+document.bing_map_setting.message.value+"[/bingmap]";document.bing_map_setting.bing_map_plugin_code.value=code;var content=opener.document.getElementById(\\\'content\\\').value;var canvas = opener.document.getElementById(\\\'content\\\');/*paste the code to the post*/
opener.document.getElementById(\\\'content\\\').value=content+"\\\n"+code+"\\\n";}</script>';return $v525407731_63;}function script_openmap() {$v2076675022_19 = '
function openmap(h,w,bg,title,
latitude,longitude,width,height,zoom,view,dashboard,message){var left = parseInt((screen.availWidth/2) - (w/2));var top = parseInt((screen.availHeight/2) - (h/2));OpenWindow=window.open("", "newwin", "height="+h+", width="+w+",left="+left+" ,top="+top+",toolbar=no,scrollbars=yes,menubar=no,location=0");OpenWindow.document.write("<HEAD><TITLE>"+title+"</TITLE></HEAD>");OpenWindow.document.write("<BODY BGCOLOR="+bg+">");';$v2076675022_19 .= 'OpenWindow.document.write(\'<div style="position:relative;">\');'
.'OpenWindow.document.write(\'<div id="myMap" style="position: relative; width:\'+width+\'px; height:\'+height+\'px; border:#555555 2px solid;"><\/div>\');OpenWindow.document.write(\'';/*
$v2076675022_19 .= convert_for_html(map_setting_form($v987116332_35, $v743767051_13,
$v1002819423_1, $v422685691_33,
$v2141942652_31, $v1648953211_55,
$v1009985635_59, $v1829815673_5, $v2125353063_17));*/
$v2076675022_19 .= convert_for_html(map_setting_form());$v2076675022_19 .= '<\/div>\');OpenWindow.document.write("<\/BODY>");OpenWindow.document.write(\'<script type="text\/javascript" src="http:\/\/ecn.dev.virtualearth.net\/mapcontrol\/mapcontrol.ashx?v=6.2&mkt=en-US"><\/script>\');OpenWindow.document.write(\'<script type="text/javascript">';$v2076675022_19 .= convert_for_html(map_script_head());/*
$v2076675022_19 .=convert_for_html(map_script('\\\'+title+\\\'','','+latitude+','+longitude+',
'+zoom+','+view+','+dashboard+','+message+'));*/
$v2076675022_19 .= convert_for_html('
var map = ResetVE("myMap");GetMap(\\\'\'+title+\'\\\', map, \\\'\'+latitude+\'\\\',
\\\'\'+longitude+\'\\\', \\\'\'+zoom+\'\\\',
\\\'\'+view+\'\\\', \\\'\'+dashboard+\'\\\', \\\'\'+message+\'\\\');');$v2076675022_19 .= convert_for_html(additional_script_once());$v2076675022_19 .= convert_for_html(window_control());$v2076675022_19 .='<\/script>\');OpenWindow.document.write("<\/HTML>");OpenWindow.document.close();self.name="main";}';return $v2076675022_19;}?>