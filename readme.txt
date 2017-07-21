=== Bing Maps Widget ===
Contributors: freescrapbook
Tags: map, bing maps, mashup
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 2.2

== Description ==
This is a simple plugin to create a widget of Bing Maps and, hopefully, insert maps into your posts. A pushpin will be placed at the center of the map. A popup will be displayed when a mouse hovers the pushpin.
Please have a look the examples at
http://freescrapbook.uuuq.com/?p=162
http://freescrapbook.uuuq.com/?p=166


== Installation ==
*if you previously installed the older ver. plugin, please deactivate it
before installing newer versions.

Extract all folder and files from the ZIP file and
upload the extracted folder to '/wp-content/plugins/'.
Go to the 'Plugins' menu of your admin area and activate
the plugin.
Add the widget to your side bar and set it up if you have
the latitude and longitude of the location for the map.
To get the latitude and longitude, click the 'View Example'
link to open a new window.
The form item 'Latitude' and 'Longitude' in the new window
are corresponding to the central location of the current map.
Navigate the map to your target location. 'Latitude' and
'Longitude' should be updated accordingly.
I am terribly sorry to say that there is no direct way to
transfer the info to widget settings so please kindly copy them manually!
(when you activate for the first time and/or input invalid
latitude and longitude value, 'Random Map' will be displayed.)

== Frequently Asked Questions ==
= How to set up the widget? =
Upon adding the widget in the admin area, input the below settings;
'Title': the title for the map and the pushpin popup message.
'Popup Message': the text in the pushpin popup message. HTML tag could be used if you know how to edit.
'Latitude' & 'Longitude': the geographical info.
'Width': the pixel width for the widget, make it fit to your sidebar! Default is 200.
'Height': the pixel height for the widget. Default is 400.
'Zoom': the zoom level(1-19).
'View': the map mode(Road/Aerial/Hybrid).
'Dashboard': a navigation dashboard(Normal/Small/Tiny/Hide).


= How to can I know the cooridinates(latitude, longitude)? =
After activating the widget, you open your blog page with
the sidebar, click "Open New Window" under the map widget
(or  click 'View Example' at the widget settings page.)
The form item 'Latitude' and 'Longitude' in the new window
are corresponding to the central location of the current map.
Navigate the map to your target location. 'Latitude' and
'Longitude' should be updated accordingly.
I am terribly sorry to say that there is no direct way to
transfer the info to widget settings so please kindly copy it manually!


= How to insert a map to the post =
On the text area, insert a code in the format of
[bingmap]title,latitude,longitude,width,height,zoom,view,dashboard,popup[/bingmap]
where
'title' is the title of your map and the pushpin popup,
'latitude' and 'longitude' are the coordinate values,
'width' and 'height' are map's size in pixel/px
'zoom' is the zoom level(1-19),
'view' is the map mode(Road/Aerial/Hybrid),
'dashboard' is the navigation dashboard(Normal/Small/Tiny/Hide).
'popup' is the contents of the pushpin popup.

For example,
[bingmap]Seattle,47.606163043868726,-122.33139038085939,200,400,10,Hybrid,Tiny,WA USA[/bingmap]
*invalid coordinate values will default the maps to Random Map.

In the HTML editing mode, click a button named 'bing maps' to open a new window.
Navigate the map to your destination, fill up the settings and click 'Get Code'.
A code will be supposed to be inserted to the end of the post editing area.
(if not, please manually copy the generated code and paste onto your post.)
The contents of the pushpin popup could be edited in Visual editor to some extent but it's better to keep it simple!


= Web page got blank after upgrading to ver. 2.x =
This is because you didn't deactivate the previous ver. 1.0 before uploading ver. 2.x.
Please remove bing_maps_widget.php from the folder and go to the 'Plugins' menu of your admin
area, make sure ver. 1.0 is deactivated and upload ver. 2.x again.


== Screenshots ==
1. screenshot-1.png: a widget in some theme
2. screenshot-2.png: an example post with a map
3. screenshot-3.png: a opened window

== Changelog ==
* 2.2 added a popup feature to a pushpin
* 2.1 fixed the viewing problem for Internet Explorer.
* 2.0 added a button in the HTML editing mode to insert a code to the post.
* 1.0 is the beginning of the version.

== Upgrade Notice ==
* 2.2 please deactivate the previous ver. before installing the new version.
* 2.1 please deactivate the previous ver. before installing the new version.
* 2.0 please deactivate the previous ver. before installing the new version.
* 1.0 is the beginning of the version.
