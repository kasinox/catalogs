<?php
function UPCP_Create_XML_Sitemap() {
global $wpdb;
global $items_table_name;

$Pretty_Permalinks = get_option("UPCP_Pretty_Links");
$XML_Sitemap_URL = get_option("UPCP_XML_Sitemap_URL");

$Products = $wpdb->get_results("SELECT Item_Slug, Item_ID FROM $items_table_name");
$Current_Date = date("Y-m-d H:i:s");

$XMLString .= "<?xml version='1.0' encoding='UTF-8'?>\n";
$XMLString .= "<urlset xmlns='" . $XML_Sitemap_URL ."'>\n";

foreach ($Products as $Product) {
		$XMLString .= "<url>\n";

		if ($Pretty_Permalinks == "Yes") {$XMLString .= "<loc>" . $XML_Sitemap_URL . "/product/" . $Product->Item_Slug . "/</loc>\n";}
		else {$XMLString .= "<loc>" . $XML_Sitemap_URL . "/?%26SingleProduct=" . $Product->Item_ID . "</loc>\n";}

		$XMLString .= "<lastmod>" . $Current_Date . "</lastmod>\n";
		$XMLString .= "</url>\n";
	 
}

$XMLString .= "</urlset>";

$Url = UPCP_CD_PLUGIN_PATH . "/upcp-site-map.xml";
file_put_contents($Url, $XMLString);
}

?>
