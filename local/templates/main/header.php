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
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
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
                <?$APPLICATION->IncludeComponent("bitrix:photo.section", "slider", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "photos",	// Тип инфоблока
		"IBLOCK_ID" => "33",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "ID",
			2 => "Название",
			3 => "Сортировка",
			4 => "Картинка для анонса",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "[URL] Ссылка",
		),
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "5",	// Количество фотографий, выводимых в одной строке таблицы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Фотографии",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?><br>
                
            <!-- End Slider -->
            <!-- Begin Wrapper -->
