<?php /*
Plugin Name: Bing Maps Widget
Plugin URI: http://freescrapbook.uuuq.com/?p=162
Description: create a widget of Bing Maps and/or insert maps into your posts.
Version: 2.2
Author: Freescrapbook
Author URI: http://freescrapbook.uuuq.com/
*/
global $v1906272122_4,$v697910611_186,$v1991280268_8,$v684421081_207;$v697910611_186=false;$v1991280268_8=array();$v684421081_207=0;$v2084032327_310=false;require_once("functions.php");require_once("templates.php");function widget_bing_map($v1950066204_408){global $v697910611_186,$v1991280268_8,$v684421081_207;extract($v1950066204_408,EXTR_SKIP);$v1300085596_311=get_option(BING_MAP_WIDGET_ID);$v1991280268_8[$v684421081_207]['id']='_widget';$v1991280268_8[$v684421081_207]['title']=escape_quote($v1300085596_311['title']);$v1991280268_8[$v684421081_207]['lat']=$v1300085596_311['latitude'];$v1991280268_8[$v684421081_207]['long']=$v1300085596_311['longitude'];$v1991280268_8[$v684421081_207]['width']=$v1300085596_311['width'];$v1991280268_8[$v684421081_207]['height']=$v1300085596_311['height'];$v1991280268_8[$v684421081_207]['view']=$v1300085596_311['view'];$v1991280268_8[$v684421081_207]['zoom']=$v1300085596_311['zoom'];$v1991280268_8[$v684421081_207]['dashboard']=$v1300085596_311['dashboard'];$v1991280268_8[$v684421081_207]['message']=escape_quote($v1300085596_311['message']);map_set_default();echo $v672723943_185;echo map_template_page($v1991280268_8[$v684421081_207]);echo $v1106373592_194;if(!$v697910611_186){add_action('wp_footer','additional_script_footer');}$v697910611_186=true;add_action('wp_footer','map_script_footer');$v684421081_207++;}function map_set_default(){global $v1991280268_8,$v684421081_207;if(strlen($v1991280268_8[$v684421081_207]['title'])<1){$v1991280268_8[$v684421081_207]['title']="Bing Map";}if(strlen($v1991280268_8[$v684421081_207]['lat'])<1||!is_numeric($v1991280268_8[$v684421081_207]['lat'])||strlen($v1991280268_8[$v684421081_207]['long'])<1||!is_numeric($v1991280268_8[$v684421081_207]['long'])){$v951406664_304=randomLocation();$v1991280268_8[$v684421081_207]['title']="Random Map:".$v951406664_304[0];$v1991280268_8[$v684421081_207]['lat']=$v951406664_304[1];$v1991280268_8[$v684421081_207]['long']=$v951406664_304[2];$v1991280268_8[$v684421081_207]['view']='Hybrid';$v1991280268_8[$v684421081_207]['zoom']=$v951406664_304[3];}if(strlen($v1991280268_8[$v684421081_207]['width'])<1||!is_numeric($v1991280268_8[$v684421081_207]['width'])){$v1991280268_8[$v684421081_207]['width']=200;}if(strlen($v1991280268_8[$v684421081_207]['height'])<1||!is_numeric($v1991280268_8[$v684421081_207]['height'])){$v1991280268_8[$v684421081_207]['height']=400;}if(is_numeric($v1991280268_8[$v684421081_207]['zoom'])){if($v1991280268_8[$v684421081_207]['zoom']<1||$v1991280268_8[$v684421081_207]['zoom']>19){$v1991280268_8[$v684421081_207]['zoom']=12;}}else{$v1991280268_8[$v684421081_207]['zoom']=12;}if(strtolower($v1991280268_8[$v684421081_207]['view'])!="road"&&strtolower($v1991280268_8[$v684421081_207]['view'])!="aerial"){$v1991280268_8[$v684421081_207]['view']="Hybrid";}if(strtolower($v1991280268_8[$v684421081_207]['dashboard'])!="small"&&strtolower($v1991280268_8[$v684421081_207]['dashboard'])!="tiny"&&strtolower($v1991280268_8[$v684421081_207]['dashboard'])!="hide"){$v1991280268_8[$v684421081_207]['dashboard']="Normal";}if(strlen($v1991280268_8[$v684421081_207]['message'])<1||$v1991280268_8[$v684421081_207]['message']==""){$v1991280268_8[$v684421081_207]['message']="Add message here!";}$v1991280268_8[$v684421081_207]['control']='<a href="javascript:void(0);GetMap(\''.rawurlencode($v1991280268_8[$v684421081_207]['title']).'\',map'.$v1991280268_8[$v684421081_207]['id'].','.$v1991280268_8[$v684421081_207]['lat'].','.$v1991280268_8[$v684421081_207]['long'].','.$v1991280268_8[$v684421081_207]['zoom'].',\''.$v1991280268_8[$v684421081_207]['view'].'\',\''.$v1991280268_8[$v684421081_207]['dashboard'].'\',\''.rawurlencode($v1991280268_8[$v684421081_207]['message']).'\');">Reset</a>|<a href="javascript:void(0);toggleStyle(map'.$v1991280268_8[$v684421081_207]['id'].')">Mode</a>|<a href="javascript:void(0);getInfo(map'.$v1991280268_8[$v684421081_207]['id'].')">Scene Info</a>';}function map_script_footer(){global $v1991280268_8,$v684421081_207,$v697910611_186;echo map_ve_load();echo '<script type="text/javascript">';echo '
try{';for($i=0;$i<$v684421081_207;$i++){echo map_script($v1991280268_8[$i]['title'],$v1991280268_8[$i]['id'],$v1991280268_8[$i]['lat'],$v1991280268_8[$i]['long'],$v1991280268_8[$i]['zoom'],$v1991280268_8[$i]['view'],$v1991280268_8[$i]['dashboard'],$v1991280268_8[$i]['message']);}echo '}catch(VEException){alert("ERROR:"+
VEException.message +
":" +
VEException.name +
":" +
VEException.source);}</script>';}function additional_script_once_footer(){global $v332305144_7,$v751950645_3,$v2120007515_1,$v1900628207_6,$v1169256825_5,$v1941176898_183,$v1387197817_184,$v632417609_2;echo '<script type="text/javascript">';echo additional_script_once();echo '</script>';}function additional_script_footer(){echo '';echo '<script type="text/javascript">';echo map_script_head();echo script_openmap();echo '</script><script type="text/javascript">var sc_project=5614831;var sc_invisible=1;var sc_partition=63;var sc_click_stat=1;var sc_security="a9275869";</script><script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="myspace profile view counter"
href="http://www.statcounter.com/myspace/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/5614831/0/a9275869/1/"
alt="myspace profile view counter"></a></div></noscript>';echo '';};function widget_bing_map_init(){wp_register_sidebar_widget(BING_MAP_WIDGET_ID,__('Bing Map'),'widget_bing_map');wp_register_widget_control(BING_MAP_WIDGET_ID,__('Bing Map'),'widget_bing_map_control');}function widgetOptions($v919430799_364,$v1941597515_309,$v202263966_302,$v1327132797_363,$v938777111_357,$v43794082_401,$v301867274_402,$v1010005254_303,$v1407548343_355){}function widget_bing_map_control(){global $v1991280268_8,$v684421081_207;$v684421081_207=0;$v1300085596_311=get_option(BING_MAP_WIDGET_ID);if(!is_array($v1300085596_311)){$v1300085596_311=array();}$v479715696_195=$_POST[BING_MAP_WIDGET_ID];if($v479715696_195['submit']){$v1300085596_311['title']=$v479715696_195['title'];$v1300085596_311['latitude']=$v479715696_195['latitude'];$v1300085596_311['longitude']=$v479715696_195['longitude'];$v1300085596_311['width']=$v479715696_195['width'];$v1300085596_311['height']=$v479715696_195['height'];$v1300085596_311['zoom']=$v479715696_195['zoom'];$v1300085596_311['view']=$v479715696_195['view'];$v1300085596_311['dashboard']=$v479715696_195['dashboard'];$v1300085596_311['message']=$v479715696_195['message'];update_option(BING_MAP_WIDGET_ID,$v1300085596_311);}$v1991280268_8[0]['title']=escape_quote($v1300085596_311['title']);$v1991280268_8[0]['lat']=$v1300085596_311['latitude'];$v1991280268_8[0]['long']=$v1300085596_311['longitude'];$v1991280268_8[0]['width']=$v1300085596_311['width'];$v1991280268_8[0]['height']=$v1300085596_311['height'];$v1991280268_8[0]['zoom']=$v1300085596_311['zoom'];$v1991280268_8[0]['view']=$v1300085596_311['view'];$v1991280268_8[0]['dashboard']=$v1300085596_311['dashboard'];$v1991280268_8[0]['message']=escape_quote($v1300085596_311['message']);map_set_default("");?><p><label for="<?php echo BING_MAP_WIDGET_ID?>-title">Title:</label><input class="widefat" type="text" name="<?php echo BING_MAP_WIDGET_ID?>[title]" id="<?php echo BING_MAP_WIDGET_ID?>-num-posts" value='<?php echo $v1991280268_8[0]['title'];?>' /></p><p><label for="<?php echo BING_MAP_WIDGET_ID?>-message">Popup Message:</label><input class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[message]" id="<?php echo BING_MAP_WIDGET_ID?>-message" value='<?php echo $v1991280268_8[0]['message']?>'/></p><p><label for="<?php echo BING_MAP_WIDGET_ID?>-latitude">Geo Settings</label><br>Latitude:<input class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[latitude]" id="bing_map_latitude" value="<?php echo $v1991280268_8[0]['lat'];?>">Longitude:<input class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[longitude]" id="bing_map_longitude" value="<?php echo $v1991280268_8[0]['long'];?>">Width:<input class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[width]" id="<?php echo BING_MAP_WIDGET_ID?>-width" value="<?php echo $v1991280268_8[0]['width'];?>" size="3">px<br>Height:<input class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[height]" id="<?php echo BING_MAP_WIDGET_ID?>-height" value="<?php echo $v1991280268_8[0]['height'];?>" size="3">px<br>Zoom:<input class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[zoom]" id="<?php echo BING_MAP_WIDGET_ID?>-zoom" value="<?php echo $v1991280268_8[0]['zoom'];?>" size="3"><br>View:<select class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[view]" id="<?php echo BING_MAP_WIDGET_ID?>-view"><option value="Road"<?php echo(strtolower($v1991280268_8[0]['view'])=='road'?'selected':'')?>>Road</option><option value="Aerial"<?php echo(strtolower($v1991280268_8[0]['view'])=='aerial'?'selected':'')?>>Aerial</option><option value="Hybrid"<?php echo(strtolower($v1991280268_8[0]['view'])=='hybrid'?'selected':'')?>>Hybrid</option></select><br>Dashboard:<select class="widefat" name="<?php echo BING_MAP_WIDGET_ID?>[dashboard]" id="<?php echo BING_MAP_WIDGET_ID?>-dashboard"><option value="Normal"<?php echo(strtolower($v1991280268_8[0]['dashboard'])=='normal'?'selected':'')?>>Normal</option><option value="Small"<?php echo(strtolower($v1991280268_8[0]['dashboard'])=='small'?'selected':'')?>>Small</option><option value="Tiny"<?php echo(strtolower($v1991280268_8[0]['dashboard'])=='tiny'?'selected':'')?>>Tiny</option><option value="Hide"<?php echo(strtolower($v1991280268_8[0]['dashboard'])=='hide'?'selected':'')?>>Hide</option></select></p><input type="hidden" name="<?php echo BING_MAP_WIDGET_ID?>[submit]" value="1" /><?php echo '<a href="javascript:void(0);openmap(440,600,\'silver\',\''.rawurlencode($v1991280268_8[0]['title']).'\','.$v1991280268_8[0]['lat'].','.$v1991280268_8[0]['long'].','.$v1991280268_8[0]['width'].','.$v1991280268_8[0]['height'].','.$v1991280268_8[0]['zoom'].',\''.$v1991280268_8[0]['view'].'\',\''.$v1991280268_8[0]['dashboard'].'\',\''.rawurlencode($v1991280268_8[0]['message']).'\')">View Example</a>';echo '<script type="text/javascript">';echo additional_script_once();echo script_openmap($v1991280268_8[0]['title'],$v1991280268_8[0]['lat'],$v1991280268_8[0]['long'],$v1991280268_8[0]['width'],$v1991280268_8[0]['height'],$v1991280268_8[0]['zoom'],$v1991280268_8[0]['view'],$v1991280268_8[0]['dashboard'],$v1991280268_8[0]['message']);echo '</script>';}function bing_map_on_page($v654465682_403){global $v1991280268_8,$v684421081_207;$v71270215_365='#\[bingmap]((?:[^\[]|\[(?!/?bingmap])|(?R))+)\[/bingmap]#';if(is_array($v654465682_403)){$v1816933312_367=explode(",",$v654465682_403[1]);$v118972579_356="";$v1991280268_8[$v684421081_207]['title']=escape_quote($v1816933312_367[0]);if(isset($v1816933312_367[1])&&is_numeric($v1816933312_367[1])){$v1991280268_8[$v684421081_207]['lat']=$v1816933312_367[1];}else{$v1991280268_8[$v684421081_207]['lat']='';}if(isset($v1816933312_367[2])&&is_numeric($v1816933312_367[2])){$v1991280268_8[$v684421081_207]['long']=$v1816933312_367[2];}else{$v1991280268_8[$v684421081_207]['long']='';}if(isset($v1816933312_367[3])&&is_numeric($v1816933312_367[3])){$v1991280268_8[$v684421081_207]['width']=$v1816933312_367[3];}else{$v1991280268_8[$v684421081_207]['width']='';}if(isset($v1816933312_367[4])&&is_numeric($v1816933312_367[4])){$v1991280268_8[$v684421081_207]['height']=$v1816933312_367[4];}else{$v1991280268_8[$v684421081_207]['height']='';}if(isset($v1816933312_367[5])&&is_numeric($v1816933312_367[5])){$v1991280268_8[$v684421081_207]['zoom']=$v1816933312_367[5];}else{$v1991280268_8[$v684421081_207]['zoom']='';}if(isset($v1816933312_367[6])){$v1991280268_8[$v684421081_207]['view']=$v1816933312_367[6];}else{$v1991280268_8[$v684421081_207]['view']='';}if(isset($v1816933312_367[7])){$v1991280268_8[$v684421081_207]['dashboard']=$v1816933312_367[7];}else{$v1991280268_8[$v684421081_207]['dashboard']='';}$v1991280268_8[$v684421081_207]['message']=escape_quote($v1816933312_367[8]);$v1991280268_8[$v684421081_207]['id']=rand();map_set_default();$v2049998684_389['id']=$v1991280268_8[$v684421081_207]['id'];$v2049998684_389['title']=$v1991280268_8[$v684421081_207]['title'];$v2049998684_389['lat']=$v1991280268_8[$v684421081_207]['lat'];$v2049998684_389['long']=$v1991280268_8[$v684421081_207]['long'];$v2049998684_389['width']=$v1991280268_8[$v684421081_207]['width'];$v2049998684_389['height']=$v1991280268_8[$v684421081_207]['height'];$v2049998684_389['zoom']=$v1991280268_8[$v684421081_207]['zoom'];$v2049998684_389['view']=$v1991280268_8[$v684421081_207]['view'];$v2049998684_389['dashboard']=$v1991280268_8[$v684421081_207]['dashboard'];$v2049998684_389['message']=$v1991280268_8[$v684421081_207]['message'];$v2049998684_389['control']=$v1991280268_8[$v684421081_207]['control'];$v654465682_403=map_template_page($v2049998684_389);if(!$v697910611_186){add_action('wp_footer','additional_script_footer');}$v697910611_186=true;add_action('wp_footer','map_script_footer');$v684421081_207++;}return preg_replace_callback($v71270215_365,'bing_map_on_page',$v654465682_403);}function add_bing_maps_button_script(){global $v1991280268_8,$v684421081_207;$v1300085596_311=get_option(BING_MAP_WIDGET_ID);if(!is_array($v1300085596_311)){$v1300085596_311=array();}$v479715696_195=$_POST[BING_MAP_WIDGET_ID];$v684421081_207=0;$v1991280268_8[0]['id']="";$v1991280268_8[0]['title']=escape_quote($v1300085596_311['title']);$v1991280268_8[0]['lat']=$v1300085596_311['latitude'];$v1991280268_8[0]['long']=$v1300085596_311['longitude'];$v1991280268_8[0]['width']=$v1300085596_311['width'];$v1991280268_8[0]['height']=$v1300085596_311['height'];$v1991280268_8[0]['zoom']=$v1300085596_311['zoom'];$v1991280268_8[0]['view']=$v1300085596_311['view'];$v1991280268_8[0]['dashboard']=$v1300085596_311['dashboard'];$v1991280268_8[0]['message']=escape_quote($v1300085596_311['message']);$v1991280268_8[0]['control']="";map_set_default();/* echo '<a href="javascript:void(0);openmap(440,600,\'silver\',\''.rawurlencode($v1991280268_8[0]['title']).'\','.$v1991280268_8[0]['lat'].','.$v1991280268_8[0]['long'].','.$v1991280268_8[0]['width'].','.$v1991280268_8[0]['height'].','.$v1991280268_8[0]['zoom'].',\''.$v1991280268_8[0]['view'].'\',\''.$v1991280268_8[0]['dashboard'].'\',\''.rawurlencode($v1991280268_8[0]['message']).'\')">View Example</a>';*/
$v2103906371_360='<input type=\"button\" class=\"ed_button\" onclick=\"openmap(440,600,\\\'silver\\\',\\\''.''.'\\\','.$v1991280268_8[0]['lat'].','.$v1991280268_8[0]['long'].','.$v1991280268_8[0]['width'].','.$v1991280268_8[0]['height'].','.$v1991280268_8[0]['zoom'].',\\\''.$v1991280268_8[0]['view'].'\\\',\\\''.$v1991280268_8[0]['dashboard'].'\\\',\\\''.''.'\\\')\" title=\"bing maps\" value=\"bing maps\" />';/* $v2103906371_360='<input type="button" class="ed_button" onclick="openmap(440,600,\'silver\',\''.$v1991280268_8[0]['title'].'\','.$v1991280268_8[0]['lat'].','.$v1991280268_8[0]['long'].','.$v1991280268_8[0]['width'].','.$v1991280268_8[0]['height'].','.$v1991280268_8[0]['zoom'].',\''.$v1991280268_8[0]['view'].'\',\''.$v1991280268_8[0]['dashboard'].'\',\''.rawurlencode($v1991280268_8[0]['message']).'\')" title="bing maps" value="bing maps" />';*/
echo '<script type="text/javascript">var bmData={};bmData[\'bing_maps\']={title:"Bing Maps",instructions:"embedd a bing map",example:"test"';$v106573706_358.=',width:200,height:400};';echo $v106573706_358;echo 'jQuery(document).ready(function(){jQuery("#ed_toolbar").append(\''.$v2103906371_360.'\');});';echo '//]]>';echo script_openmap();echo '</script>';}add_action('plugins_loaded','widget_bing_map_init');add_filter('the_content','bing_map_on_page');add_action('edit_form_advanced','add_bing_maps_button_script');add_action('edit_page_form','add_bing_maps_button');?>