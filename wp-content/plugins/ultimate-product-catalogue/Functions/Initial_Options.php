<?php
/* Adds a the default options for the product catalogue which can be changed on the options page */
function Initial_UPCP_Options() {
		update_option("UPCP_Color_Scheme", "Blue");
		update_option("UPCP_Product_Links", "Same");
		update_option("UPCP_Tag_Logic", "AND");
		update_option("UPCP_Filter_Type", "AJAX");
		update_option("UPCP_Read_More", "Yes");
		update_option("UPCP_Pretty_Links", "No");
		update_option("UPCP_Mobile_SS", "No");
		update_option("UPCP_Install_Flag", "Yes");
		update_option("UPCP_First_Install_Version", "2.3");
		update_option("UPCP_Desc_Chars", 240);
		update_option("UPCP_Case_Insensitive_Search", "Yes");
		
		update_option("UPCP_Product_Search", "name");
		update_option("UPCP_Custom_Product_Page", "No");
		update_option("UPCP_Products_Per_Page", 1000000);
		update_option("UPCP_PP_Grid_Width", 90);
		update_option("UPCP_PP_Grid_Height", 35);
		update_option("UPCP_Top_Bottom_Padding", 10);
		update_option("UPCP_Left_Right_Padding", 10);
}
