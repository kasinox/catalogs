<?php
/*
Plugin Name:WP Baidu Map
Plugin URI: http://suoling.net/wp-baidu-map
Description: A real Baidu map plugin.
Author:suifengtec
Version: 1.0
Author URI: http://suoling.net/
*/

/*
说明:您可以在全局CSS中定义
.map{

}
 */
defined('ABSPATH') or exit;
add_action('plugins_loaded','cwp_fix_user_status');
function cwp_fix_user_status(){
if(!function_exists('is_user_logged_in'))
require (ABSPATH . WPINC . '/pluggable.php');
}
if(!function_exists('wp_baidu_map_init')):
add_action('init','wp_baidu_map_init');
function wp_baidu_map_init(){
    add_shortcode('baidu_map','wp_baidu_map_content_init');
}

function wp_baidu_map_content_init($atts, $content = null){
    extract(shortcode_atts(array(
        'id'=>'',
        'w'=>'',
        'h'=>'',
        'lon'=>'',
        'lat'=>'',
        'biz_name'=>'',
        'address'=>'',
        'email'=>'',
        'phone'=>'',
        ) ,$atts));
    $id=$id?$id:'wp-baidu-map';
    $w=$w?$w:'100%';
    $h=$h?$h:'400px';
    $biz_name=$biz_name?$biz_name:false;
    $lon=$lon?$lon:false;
    $lat=$lat?$lat:false;
    $address=$address?$address:false;
    $email=$email?$email:false;
    $phone=$phone?$phone:false;


    $output=null;



    if($lon&&$lat){
        $output='<div class="map"><div id="'.$id.'"></div></div>';
        $output.='
        <style>
            #container > div#'.$id.' {display: block !important;}
            #'.$id.' {width:'.$w.'; height:'.$h.';overflow: hidden;margin:0;}
            #l-map{height:100%;width:78%;float:left;border-right:2px solid #bcbcbc;}
            #r-result{height:100%;width:20%;float:left;}
            .mywindow{ height:auto; width:auto; font-size:12px; line-height:22px;}
            .mylocationcontainer{width:100%; height:100%; margin:0 auto;}
            .mapimg{width:100%;height:100%;}
           .BMap_cpyCtrl span,.anchorBL{display:none!important;}
        </style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=B3f7707c25da5b29a6ff69618788a296"></script>
	
        <script type="text/javascript">

        var map = new BMap.Map("'.$id.'");
	var pointa ='.$lon.';
	var pointb = '.$lat.';
        var point = new BMap.Point(pointa,pointb);
	var point2 = new BMap.Point(116.340867,39.992711);
	var point3 = new BMap.Point(114.070409,22.538982);
	var point4 = new BMap.Point(104.055049,30.689757);
	var point5 = new BMap.Point(108.910669,34.237504);
	var point6 = new BMap.Point(114.438762,30.510913);
        //map.enableScrollWheelZoom(true);
        map.enableScrollWheelZoom();
        map.enableContinuousZoom();
        /*map.centerAndZoom(point, 15);*/
        map.addControl(new BMap.NavigationControl());
        var marker = new BMap.Marker(point);
	var marker2 = new BMap.Marker(point2);
	var marker3 = new BMap.Marker(point3);
	var marker4 = new BMap.Marker(point4);
	var marker5 = new BMap.Marker(point5);
	var marker6 = new BMap.Marker(point6);
	
	
        /*map.addOverlay(marker); */
        marker.setAnimation(BMAP_ANIMATION_BOUNCE);
	marker2.setAnimation(BMAP_ANIMATION_BOUNCE);;
	marker3.setAnimation(BMAP_ANIMATION_BOUNCE);;
	marker4.setAnimation(BMAP_ANIMATION_BOUNCE);;
	marker5.setAnimation(BMAP_ANIMATION_BOUNCE);;
	marker6.setAnimation(BMAP_ANIMATION_BOUNCE);';

        
       $output.=' 
	var level = 15;
	
	function relocate(pointa,pointb,level){
	pointX = new BMap.Point(pointa,pointb);
	
	map.centerAndZoom(pointX, level);
	
        }
	relocate(pointa,pointb,level);
        map.addOverlay(marker);
	map.addOverlay(marker2);
       	map.addOverlay(marker3);
	map.addOverlay(marker4);
	map.addOverlay(marker5);
	map.addOverlay(marker6);
        </script>';
        return $output;
    }
}
endif;