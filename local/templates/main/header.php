<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
        ?>
        <?IncludeTemplateLangFile(__FILE__);?>
        <!DOCTYPE HTML>
        <html lang="<?=LANGUAGE_ID?>>
<head>
    <title><?$APPLICATION->ShowTitle();?>
</title>
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" /><![endif]-->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-1.5.min.js", true);?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/scripts.js", true);?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/swfobject.js", true);?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.kwicks-1.5.1.pack.js", true);?>
        <script type="text/javascript">
            var flashvars = {};
            flashvars.cssSource = "piecemaker.css";
            flashvars.xmlSource = "piecemaker.xml";
            var params = {};
            params.play = "true";
            params.menu = "false";
            params.scale = "showall";
            params.wmode = "transparent";
            params.allowfullscreen = "true";
            swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '450', '10', null, flashvars, params, null);
        </script>
        <script type="text/javascript">
        $().ready(function() {
        $('.slider').kwicks({
            max : 740,
            spacing : 1
             });
        });
</script>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/ie7.css",true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/piecemaker.css",true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/prettyPhoto.css",true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/style.css",true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/tooplate_style.css",true);?>
        </head>
        <body>
        <?$APPLICATION->ShowPanel();?>
        <div id="container">
            <!-- Begin Header Wrapper -->
            <div id="page-top">
                <div id="header-wrapper">
                    <!-- Begin Header -->
                    <div id="header">
                        <div id="logo">
                            <a href="index.html">
                                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                                        )
                                    );?>
                                    <?if(!CSite::InDir('/')):?></a><?endif;?>
                            </a>
                        </div>
                        <!-- Logo -->
                        <!-- Begin Menu -->
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
                    <!-- End Header -->
                </div>
            </div>
            <!-- End Header Wrapper -->
            <!-- Begin Slider -->
            <div id="piecemaker-container">
                <div id="piecemaker">
                    <div id="slider_wrapper">
                        <ul class="slider horizontal" >
                            <li id="slide_1"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/01.jpg" alt="Slider 1" /></li>
                            <li id="slide_2"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/02.jpg" alt="Slider 2" /></li>
                            <li id="slide_3"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/03.jpg" alt="Slider 3" /></li>
                            <li id="slide_4"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/04.jpg" alt="Slider 4" /></li>
                            <li id="slide_5"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/05.jpg" alt="Slider 5" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Slider -->
            <!-- Begin Wrapper -->
