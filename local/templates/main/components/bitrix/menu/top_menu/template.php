<div id="menu-wrapper">
	<!-- navigation start -->
	<div id="smoothmenu1">
		<?if (!empty($arResult)):?>
			<ul class="ddsmoothmenu">
				<?foreach($arResult as $key => $arItem):?>
					<?if($arItem['DEPTH_LEVEL'] != 1){
						continue;
					}
					?>
					<?if($arItem['DEPTH_LEVEL'] == 1):?>
						<li <?if($arItem["SELECTED"]):?><?endif;?>>
						<a href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"];?></a>
						</li>
					<?endif;?>
				<?endforeach;?>
			</ul>
		<?endif?>
	</div>
	<!-- navigation end -->
</div>