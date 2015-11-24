<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/services/index.php");
$APPLICATION->SetTitle(GetMessage("SERVICES_TITLE"));
?>
<p><?$APPLICATION->IncludeComponent("bitrix:intranet.reserve_meeting", ".default", array(
	"IBLOCK_TYPE" => "events",
		"IBLOCK_ID" => "14",
		"USERGROUPS_MODIFY" => "",
		"USERGROUPS_RESERVE" => "",
		"USERGROUPS_CLEAR" => "",
		"SEF_MODE" => "N",
		"SET_NAVCHAIN" => "Y",
		"SET_TITLE" => "Y",
		"WEEK_HOLIDAYS" => array(
			0 => "5",
			1 => "6",
		)
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);
?></p>

<p><a href="/services/res_c.php"><?=GetMessage("SERVICES_LINK")?></a><br /></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>