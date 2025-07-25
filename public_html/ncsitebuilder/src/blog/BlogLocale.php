<?php

class BlogLocale {
	
	/** @var string */
	public $code = null;
	/** @var string */
	public $locale = null;
	
	public function __construct($code, $locale) {
		$this->code = $code;
		$this->locale = $locale;
	}
	
	/**
	 * @param string $code
	 * @return self
	 */
	public static function findByCode($code) {
		foreach (self::buildList() as $li) {
			if ($li->code == $code) {
				return $li;
			}
		}
		return null;
	}
	
	/** @return self[] */
	public static function buildList() {
		return array(
			BlogLocale::create('af', 'af_ZA'),
			BlogLocale::create('ar', 'ar_AE'),
			BlogLocale::create('az', 'az_AZ'),
			BlogLocale::create('id', 'id_ID'),
			BlogLocale::create('ms', 'ms_MY'),
			BlogLocale::create('be', 'be_BY'),
			BlogLocale::create('bg', 'bg_BG'),
			BlogLocale::create('bs', 'bs_BA'),
			BlogLocale::create('cs', 'cs_CZ'),
			BlogLocale::create('da', 'da_DK'),
			BlogLocale::create('de', 'de_DE'),
			BlogLocale::create('el', 'el_GR'),
			BlogLocale::create('en', 'en_US'),
			BlogLocale::create('es', 'es_ES'),
			BlogLocale::create('et', 'et_EE'),
			BlogLocale::create('fr', 'fr_FR'),
			BlogLocale::create('he', 'he_IL'),
			BlogLocale::create('fa', 'fa_IR'),
			BlogLocale::create('zh', 'zh_HK'),
			BlogLocale::create('hi', 'hi_IN'),
			BlogLocale::create('hr', 'hr_HR'),
			BlogLocale::create('it', 'it_IT'),
			BlogLocale::create('ka', 'ka_GE'),
			BlogLocale::create('ko', 'ko_KR'),
			BlogLocale::create('zh3', 'zh_CN'),
			BlogLocale::create('hy', 'hy_AM'),
			BlogLocale::create('kk', 'kk_KZ'),
			BlogLocale::create('ja', 'ja_JP'),
			BlogLocale::create('lt', 'lt_LT'),
			BlogLocale::create('lv', 'lv_LV'),
			BlogLocale::create('hu', 'hu_HU'),
			BlogLocale::create('mk', 'mk_MK'),
			BlogLocale::create('nl', 'nl_NL'),
			BlogLocale::create('no', 'no_NO'),
			BlogLocale::create('pl', 'pl_PL'),
			BlogLocale::create('pt', 'pt_BR'),
			BlogLocale::create('pt2', 'pt_PT'),
			BlogLocale::create('ro', 'ro_RO'),
			BlogLocale::create('ru', 'ru_RU'),
			BlogLocale::create('sr2', 'sr_CS'),
			BlogLocale::create('sk', 'sk_SK'),
			BlogLocale::create('sl', 'sl_SI'),
			BlogLocale::create('fi', 'fi_FI'),
			BlogLocale::create('sv', 'sv_SE'),
			BlogLocale::create('th', 'th_TH'),
			BlogLocale::create('tr', 'tr_TR'),
			BlogLocale::create('uk', 'uk_UA'),
			BlogLocale::create('vi', 'vi_VN'),
			BlogLocale::create('tl', 'tl_PH'),
			BlogLocale::create('km', 'km_KH'),
			BlogLocale::create('sw', 'sw_TZ'),
			BlogLocale::create('de3', 'de_CH')
		);
	}
	
	public static function create($code, $locale) {
		return new static($code, $locale);
	}
	
}
