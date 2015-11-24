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
						<ul>
					<?endif?>
					<?foreach($arResult as $keyInner => $arItemInner):?>
						<?if($keyInner <= $key) {
							continue;
						}
						?>
						<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
							<li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>

						<?endif;?>
						<?if($arItemInner['DEPTH_LEVEL'] != 2){
							break;
						}
						?>
					<?endforeach;?>
					<?if($arItem['DEPTH_LEVEL'] == 1):?>
						</ul>
						</li>
					<?endif;?>
				<?endforeach;?>
			</ul>
		<?endif?>
	</div>
	<!-- navigation end -->
</div>