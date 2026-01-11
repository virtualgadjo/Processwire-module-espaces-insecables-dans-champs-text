<?php

class TextformatterInsecable extends Textformatter implements Module {

	public static function getModuleInfo() {
		return [
			'title' => 'Textformatter Insécable',
			'version' => 1,
			'summary' => 'Évite les passages à la ligne malvenus autour des : ; ? ! " ‘ ’ “ ” /',
			'author' => 'virtualgadjo',
			'autoload' => false,
			'singular' => true,
			'icon' => 'code'
		];
	}

	public function formatValue(Page $page, Field $field, &$value) {
		$orph     = array(' ?', ' !', ' :', ' ;', '« ', ' »', ' &quot;', '&quot; ', '‘ ',' ’', '“ ', ' ”', ' /');
		$pas_orph = array('&nbsp;?', '&nbsp;!', '&nbsp;:', '&nbsp;;', '«&nbsp;', '&nbsp;»', '&nbsp;&quot;', '&quot;&nbsp;', '‘&nbsp;','&nbsp;’', '“&nbsp;', '&nbsp;”', '$nbsp;/');
		$value = str_replace($orph, $pas_orph, $value);
	}
}