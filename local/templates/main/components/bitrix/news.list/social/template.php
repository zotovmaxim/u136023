<div id="socials">
	<?if (!empty($arResult)):?>
		<ul>
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<li>
					<a href="#"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" /></a>
				</li>
			<?endforeach;?>
		</ul>
	<?endif?>
</div>



