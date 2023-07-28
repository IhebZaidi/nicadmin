<?php
$tdatafsi_extensions = array();
$tdatafsi_extensions[".searchableFields"] = array();
$tdatafsi_extensions[".ShortName"] = "fsi_extensions";
$tdatafsi_extensions[".OwnerID"] = "id_fsi";
$tdatafsi_extensions[".OriginalTable"] = "fsi_extensions";


$tdatafsi_extensions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafsi_extensions[".originalPagesByType"] = $tdatafsi_extensions[".pagesByType"];
$tdatafsi_extensions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafsi_extensions[".originalPages"] = $tdatafsi_extensions[".pages"];
$tdatafsi_extensions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafsi_extensions[".originalDefaultPages"] = $tdatafsi_extensions[".defaultPages"];

//	field labels
$fieldLabelsfsi_extensions = array();
$fieldToolTipsfsi_extensions = array();
$pageTitlesfsi_extensions = array();
$placeHoldersfsi_extensions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfsi_extensions["English"] = array();
	$fieldToolTipsfsi_extensions["English"] = array();
	$placeHoldersfsi_extensions["English"] = array();
	$pageTitlesfsi_extensions["English"] = array();
	$fieldLabelsfsi_extensions["English"]["id_fsi"] = "Id Fsi";
	$fieldToolTipsfsi_extensions["English"]["id_fsi"] = "";
	$placeHoldersfsi_extensions["English"]["id_fsi"] = "";
	$fieldLabelsfsi_extensions["English"]["ext"] = "Ext";
	$fieldToolTipsfsi_extensions["English"]["ext"] = "";
	$placeHoldersfsi_extensions["English"]["ext"] = "";
	if (count($fieldToolTipsfsi_extensions["English"]))
		$tdatafsi_extensions[".isUseToolTips"] = true;
}


	$tdatafsi_extensions[".NCSearch"] = true;



$tdatafsi_extensions[".shortTableName"] = "fsi_extensions";
$tdatafsi_extensions[".nSecOptions"] = 1;

$tdatafsi_extensions[".mainTableOwnerID"] = "id_fsi";
$tdatafsi_extensions[".entityType"] = 0;
$tdatafsi_extensions[".connId"] = "nicadmin_at_localhost";


$tdatafsi_extensions[".strOriginalTableName"] = "fsi_extensions";

	



$tdatafsi_extensions[".showAddInPopup"] = false;

$tdatafsi_extensions[".showEditInPopup"] = false;

$tdatafsi_extensions[".showViewInPopup"] = false;

$tdatafsi_extensions[".listAjax"] = false;
//	temporary
//$tdatafsi_extensions[".listAjax"] = false;

	$tdatafsi_extensions[".audit"] = false;

	$tdatafsi_extensions[".locking"] = false;


$pages = $tdatafsi_extensions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafsi_extensions[".edit"] = true;
	$tdatafsi_extensions[".afterEditAction"] = 1;
	$tdatafsi_extensions[".closePopupAfterEdit"] = 1;
	$tdatafsi_extensions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafsi_extensions[".add"] = true;
$tdatafsi_extensions[".afterAddAction"] = 1;
$tdatafsi_extensions[".closePopupAfterAdd"] = 1;
$tdatafsi_extensions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafsi_extensions[".list"] = true;
}



$tdatafsi_extensions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafsi_extensions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafsi_extensions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafsi_extensions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafsi_extensions[".printFriendly"] = true;
}



$tdatafsi_extensions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafsi_extensions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafsi_extensions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafsi_extensions[".isUseAjaxSuggest"] = true;





$tdatafsi_extensions[".ajaxCodeSnippetAdded"] = false;

$tdatafsi_extensions[".buttonsAdded"] = false;

$tdatafsi_extensions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafsi_extensions[".isUseTimeForSearch"] = false;


$tdatafsi_extensions[".badgeColor"] = "b22222";


$tdatafsi_extensions[".allSearchFields"] = array();
$tdatafsi_extensions[".filterFields"] = array();
$tdatafsi_extensions[".requiredSearchFields"] = array();

$tdatafsi_extensions[".googleLikeFields"] = array();
$tdatafsi_extensions[".googleLikeFields"][] = "id_fsi";
$tdatafsi_extensions[".googleLikeFields"][] = "ext";



$tdatafsi_extensions[".tableType"] = "list";

$tdatafsi_extensions[".printerPageOrientation"] = 0;
$tdatafsi_extensions[".nPrinterPageScale"] = 100;

$tdatafsi_extensions[".nPrinterSplitRecords"] = 40;

$tdatafsi_extensions[".geocodingEnabled"] = false;










$tdatafsi_extensions[".pageSize"] = 20;

$tdatafsi_extensions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafsi_extensions[".strOrderBy"] = $tstrOrderBy;

$tdatafsi_extensions[".orderindexes"] = array();


$tdatafsi_extensions[".sqlHead"] = "SELECT id_fsi,  	ext";
$tdatafsi_extensions[".sqlFrom"] = "FROM fsi_extensions";
$tdatafsi_extensions[".sqlWhereExpr"] = "";
$tdatafsi_extensions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafsi_extensions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafsi_extensions[".arrGroupsPerPage"] = $arrGPP;

$tdatafsi_extensions[".highlightSearchResults"] = true;

$tableKeysfsi_extensions = array();
$tableKeysfsi_extensions[] = "id_fsi";
$tableKeysfsi_extensions[] = "ext";
$tdatafsi_extensions[".Keys"] = $tableKeysfsi_extensions;


$tdatafsi_extensions[".hideMobileList"] = array();




//	id_fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_fsi";
	$fdata["GoodName"] = "id_fsi";
	$fdata["ownerTable"] = "fsi_extensions";
	$fdata["Label"] = GetFieldLabel("fsi_extensions","id_fsi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fsi";

		$fdata["sourceSingle"] = "id_fsi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fsi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi_extensions["id_fsi"] = $fdata;
		$tdatafsi_extensions[".searchableFields"][] = "id_fsi";
//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "fsi_extensions";
	$fdata["Label"] = GetFieldLabel("fsi_extensions","ext");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ext";

		$fdata["sourceSingle"] = "ext";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi_extensions["ext"] = $fdata;
		$tdatafsi_extensions[".searchableFields"][] = "ext";


$tables_data["fsi_extensions"]=&$tdatafsi_extensions;
$field_labels["fsi_extensions"] = &$fieldLabelsfsi_extensions;
$fieldToolTips["fsi_extensions"] = &$fieldToolTipsfsi_extensions;
$placeHolders["fsi_extensions"] = &$placeHoldersfsi_extensions;
$page_titles["fsi_extensions"] = &$pageTitlesfsi_extensions;


changeTextControlsToDate( "fsi_extensions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fsi_extensions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fsi_extensions"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="fsi";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="fsi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fsi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["fsi_extensions"][0] = $masterParams;
				$masterTablesData["fsi_extensions"][0]["masterKeys"] = array();
	$masterTablesData["fsi_extensions"][0]["masterKeys"][]="id_fsi";
				$masterTablesData["fsi_extensions"][0]["detailKeys"] = array();
	$masterTablesData["fsi_extensions"][0]["detailKeys"][]="id_fsi";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fsi_extensions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_fsi,  	ext";
$proto0["m_strFrom"] = "FROM fsi_extensions";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fsi",
	"m_strTable" => "fsi_extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto6["m_sql"] = "id_fsi";
$proto6["m_srcTableName"] = "fsi_extensions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ext",
	"m_strTable" => "fsi_extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto8["m_sql"] = "ext";
$proto8["m_srcTableName"] = "fsi_extensions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "fsi_extensions";
$proto11["m_srcTableName"] = "fsi_extensions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_fsi";
$proto11["m_columns"][] = "ext";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "fsi_extensions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "fsi_extensions";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fsi_extensions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fsi_extensions = createSqlQuery_fsi_extensions();


	
		;

		

$tdatafsi_extensions[".sqlquery"] = $queryData_fsi_extensions;



$tdatafsi_extensions[".hasEvents"] = false;

?>