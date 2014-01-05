<?php
class RF_Form_Element_CountrySelector extends Zend_Form_Element_Select
{
	public function init()
	{
		$this->addMultiOption('CH', 'Switzerland');
		$this->addMultiOption('DE', 'Germany');
		$this->addMultiOption('FR', 'France');
		$this->addMultiOption('AT', 'Austria');
		$this->addMultiOption('IT', 'Italy');
		$this->addMultiOption('LI', 'Liechtenstein');
		$this->addMultiOption('GB', 'United Kingdom');
		$this->addMultiOption('US', 'United States');
		$this->addMultiOption('CA', 'Canada');
		$this->addMultiOption('AF', 'Afghanistan');
		$this->addMultiOption('AL', 'Albania');
		$this->addMultiOption('DZ', 'Algeria');
		$this->addMultiOption('AS', 'American Samoa');
		$this->addMultiOption('AD', 'Andorra');
		$this->addMultiOption('AO', 'Angola');
		$this->addMultiOption('AI', 'Anguilla');
		$this->addMultiOption('AQ', 'Antarctica');
		$this->addMultiOption('AG', 'Antigua And Barbuda');
		$this->addMultiOption('AR', 'Argentina');
		$this->addMultiOption('AM', 'Armenia');
		$this->addMultiOption('AW', 'Aruba');
		$this->addMultiOption('AU', 'Australia');
		$this->addMultiOption('AZ', 'Azerbaijan');
		$this->addMultiOption('BS', 'Bahamas');
		$this->addMultiOption('BH', 'Bahrain');
		$this->addMultiOption('BD', 'Bangladesh');
		$this->addMultiOption('BB', 'Barbados');
		$this->addMultiOption('BY', 'Belarus');
		$this->addMultiOption('BE', 'Belgium');
		$this->addMultiOption('BZ', 'Belize');
		$this->addMultiOption('BJ', 'Benin');
		$this->addMultiOption('BM', 'Bermuda');
		$this->addMultiOption('BT', 'Bhutan');
		$this->addMultiOption('BO', 'Bolivia');
		$this->addMultiOption('BA', 'Bosnia And Herzegovina');
		$this->addMultiOption('BW', 'Botswana');
		$this->addMultiOption('BV', 'Bouvet Island');
		$this->addMultiOption('BR', 'Brazil');
		$this->addMultiOption('IO', 'British Indian Ocean Territory');
		$this->addMultiOption('BN', 'Brunei Darussalam');
		$this->addMultiOption('BG', 'Bulgaria');
		$this->addMultiOption('BF', 'Burkina Faso');
		$this->addMultiOption('BI', 'Burundi');
		$this->addMultiOption('KH', 'Cambodia');
		$this->addMultiOption('CM', 'Cameroon');
		$this->addMultiOption('CV', 'Cape Verde');
		$this->addMultiOption('KY', 'Cayman Islands');
		$this->addMultiOption('CF', 'Central African Republic');
		$this->addMultiOption('TD', 'Chad');
		$this->addMultiOption('CL', 'Chile');
		$this->addMultiOption('CN', 'China');
		$this->addMultiOption('CX', 'Christmas Island');
		$this->addMultiOption('CC', 'Cocos Keeling Islands');
		$this->addMultiOption('CO', 'Colombia');
		$this->addMultiOption('KM', 'Comoros');
		$this->addMultiOption('CG', 'Congo');
		$this->addMultiOption('CD', 'Congo, D.P.R');
		$this->addMultiOption('CK', 'Cook Islands');
		$this->addMultiOption('CR', 'Costa Rica');
		$this->addMultiOption('CI', 'Cote D ivoire');
		$this->addMultiOption('HR', 'Croatia');
		$this->addMultiOption('CU', 'Cuba');
		$this->addMultiOption('CY', 'Cyprus');
		$this->addMultiOption('CZ', 'Czech Republic');
		$this->addMultiOption('DK', 'Denmark');
		$this->addMultiOption('DJ', 'Djibouti');
		$this->addMultiOption('DM', 'Dominica');
		$this->addMultiOption('DO', 'Dominican Republic');
		$this->addMultiOption('TP', 'East Timor');
		$this->addMultiOption('EC', 'Ecuador');
		$this->addMultiOption('EG', 'Egypt');
		$this->addMultiOption('SV', 'El Salvador');
		$this->addMultiOption('GQ', 'Equatorial Guinea');
		$this->addMultiOption('ER', 'Eritrea');
		$this->addMultiOption('EE', 'Estonia');
		$this->addMultiOption('ET', 'Ethiopia');
		$this->addMultiOption('FK', 'Falkland Islands Malvinas');
		$this->addMultiOption('FO', 'Faroe Islands');
		$this->addMultiOption('FJ', 'Fiji');
		$this->addMultiOption('FI', 'Finland');
		$this->addMultiOption('GF', 'French Guiana');
		$this->addMultiOption('PF', 'French Polynesia');
		$this->addMultiOption('TF', 'French Southern Territories');
		$this->addMultiOption('GA', 'Gabon');
		$this->addMultiOption('GM', 'Gambia');
		$this->addMultiOption('GE', 'Georgia');
		$this->addMultiOption('GH', 'Ghana');
		$this->addMultiOption('GI', 'Gibraltar');
		$this->addMultiOption('GR', 'Greece');
		$this->addMultiOption('GL', 'Greenland');
		$this->addMultiOption('GD', 'Grenada');
		$this->addMultiOption('GP', 'Guadeloupe');
		$this->addMultiOption('GU', 'Guam');
		$this->addMultiOption('GT', 'Guatemala');
		$this->addMultiOption('GN', 'Guinea');
		$this->addMultiOption('GW', 'Guinea-bissau');
		$this->addMultiOption('GY', 'Guyana');
		$this->addMultiOption('HT', 'Haiti');
		$this->addMultiOption('HM', 'Heard And McDonald Islands');
		$this->addMultiOption('HN', 'Honduras');
		$this->addMultiOption('HK', 'Hong Kong');
		$this->addMultiOption('HU', 'Hungary');
		$this->addMultiOption('IS', 'Iceland');
		$this->addMultiOption('IN', 'India');
		$this->addMultiOption('ID', 'Indonesia');
		$this->addMultiOption('IR', 'Iran, Islamic Republic Of');
		$this->addMultiOption('IQ', 'Iraq');
		$this->addMultiOption('IE', 'Ireland');
		$this->addMultiOption('IL', 'Israel');
		$this->addMultiOption('JM', 'Jamaica');
		$this->addMultiOption('JP', 'Japan');
		$this->addMultiOption('JO', 'Jordan');
		$this->addMultiOption('KZ', 'Kazakstan');
		$this->addMultiOption('KE', 'Kenya');
		$this->addMultiOption('KI', 'Kiribati');
		$this->addMultiOption('KP', 'Korea, D.P.R.');
		$this->addMultiOption('KR', 'Korea, Republic Of');
		$this->addMultiOption('KW', 'Kuwait');
		$this->addMultiOption('KG', 'Kyrgyzstan');
		$this->addMultiOption('LA', 'Lao');
		$this->addMultiOption('LV', 'Latvia');
		$this->addMultiOption('LB', 'Lebanon');
		$this->addMultiOption('LS', 'Lesotho');
		$this->addMultiOption('LR', 'Liberia');
		$this->addMultiOption('LY', 'Libyan Arab Jamahiriya');
		$this->addMultiOption('LT', 'Lithuania');
		$this->addMultiOption('LU', 'Luxembourg');
		$this->addMultiOption('MO', 'Macau');
		$this->addMultiOption('MK', 'Macedonia');
		$this->addMultiOption('MG', 'Madagascar');
		$this->addMultiOption('MW', 'Malawi');
		$this->addMultiOption('MY', 'Malaysia');
		$this->addMultiOption('MV', 'Maldives');
		$this->addMultiOption('ML', 'Mali');
		$this->addMultiOption('MT', 'Malta');
		$this->addMultiOption('MH', 'Marshall Islands');
		$this->addMultiOption('MQ', 'Martinique');
		$this->addMultiOption('MR', 'Mauritania');
		$this->addMultiOption('MU', 'Mauritius');
		$this->addMultiOption('YT', 'Mayotte');
		$this->addMultiOption('MX', 'Mexico');
		$this->addMultiOption('FM', 'Micronesia');
		$this->addMultiOption('MD', 'Moldova, Republic Of');
		$this->addMultiOption('MC', 'Monaco');
		$this->addMultiOption('MN', 'Mongolia');
		$this->addMultiOption('MS', 'Montserrat');
		$this->addMultiOption('MA', 'Morocco');
		$this->addMultiOption('MZ', 'Mozambique');
		$this->addMultiOption('MM', 'Myanmar');
		$this->addMultiOption('NA', 'Namibia');
		$this->addMultiOption('NR', 'Nauru');
		$this->addMultiOption('NP', 'Nepal');
		$this->addMultiOption('NL', 'Netherlands');
		$this->addMultiOption('AN', 'Netherlands Antilles');
		$this->addMultiOption('NC', 'New Caledonia');
		$this->addMultiOption('NZ', 'New Zealand');
		$this->addMultiOption('NI', 'Nicaragua');
		$this->addMultiOption('NE', 'Niger');
		$this->addMultiOption('NG', 'Nigeria');
		$this->addMultiOption('NU', 'Niue');
		$this->addMultiOption('NF', 'Norfolk Island');
		$this->addMultiOption('MP', 'Northern Mariana Islands');
		$this->addMultiOption('NO', 'Norway');
		$this->addMultiOption('OM', 'Oman');
		$this->addMultiOption('PK', 'Pakistan');
		$this->addMultiOption('PW', 'Palau');
		$this->addMultiOption('PS', 'Palestine');
		$this->addMultiOption('PA', 'Panama');
		$this->addMultiOption('PG', 'Papua New Guinea');
		$this->addMultiOption('PY', 'Paraguay');
		$this->addMultiOption('PE', 'Peru');
		$this->addMultiOption('PH', 'Philippines');
		$this->addMultiOption('PN', 'Pitcairn');
		$this->addMultiOption('PL', 'Poland');
		$this->addMultiOption('PT', 'Portugal');
		$this->addMultiOption('PR', 'Puerto Rico');
		$this->addMultiOption('QA', 'Qatar');
		$this->addMultiOption('RE', 'Reunion');
		$this->addMultiOption('RO', 'Romania');
		$this->addMultiOption('RU', 'Russian Federation');
		$this->addMultiOption('RW', 'Rwanda');
		$this->addMultiOption('SH', 'Saint Helena');
		$this->addMultiOption('KN', 'Saint Kitts And Nevis');
		$this->addMultiOption('LC', 'Saint Lucia');
		$this->addMultiOption('PM', 'Saint Pierre And Miquelon');
		$this->addMultiOption('WS', 'Samoa');
		$this->addMultiOption('SM', 'San Marino');
		$this->addMultiOption('ST', 'Sao Tome And Principe');
		$this->addMultiOption('SA', 'Saudi Arabia');
		$this->addMultiOption('SN', 'Senegal');
		$this->addMultiOption('SC', 'Seychelles');
		$this->addMultiOption('SL', 'Sierra Leone');
		$this->addMultiOption('SG', 'Singapore');
		$this->addMultiOption('SK', 'Slovakia');
		$this->addMultiOption('SI', 'Slovenia');
		$this->addMultiOption('SB', 'Solomon Islands');
		$this->addMultiOption('SO', 'Somalia');
		$this->addMultiOption('ZA', 'South Africa');
		$this->addMultiOption('GS', 'South Georgia/Sandwich Islands');
		$this->addMultiOption('ES', 'Spain');
		$this->addMultiOption('LK', 'Sri Lanka');
		$this->addMultiOption('VC', 'St Vincent/Grenadines');
		$this->addMultiOption('SD', 'Sudan');
		$this->addMultiOption('SR', 'Suriname');
		$this->addMultiOption('SJ', 'Svalbard And Jan Mayen');
		$this->addMultiOption('SZ', 'Swaziland');
		$this->addMultiOption('SE', 'Sweden');
		$this->addMultiOption('SY', 'Syrian Arab Republic');
		$this->addMultiOption('TW', 'Taiwan');
		$this->addMultiOption('TJ', 'Tajikistan');
		$this->addMultiOption('TZ', 'Tanzania, United Republic Of');
		$this->addMultiOption('TH', 'Thailand');
		$this->addMultiOption('TG', 'Togo');
		$this->addMultiOption('TK', 'Tokelau');
		$this->addMultiOption('TO', 'Tonga');
		$this->addMultiOption('TT', 'Trinidad And Tobago');
		$this->addMultiOption('TN', 'Tunisia');
		$this->addMultiOption('TR', 'Turkey');
		$this->addMultiOption('TM', 'Turkmenistan');
		$this->addMultiOption('TC', 'Turks And Caicos Islands');
		$this->addMultiOption('TV', 'Tuvalu');
		$this->addMultiOption('UG', 'Uganda');
		$this->addMultiOption('UA', 'Ukraine');
		$this->addMultiOption('AE', 'United Arab Emirates');
		$this->addMultiOption('UY', 'Uruguay');
		$this->addMultiOption('UM', 'US Minor Outlying Islands');
		$this->addMultiOption('UZ', 'Uzbekistan');
		$this->addMultiOption('VU', 'Vanuatu');
		$this->addMultiOption('VA', 'Vatican City');
		$this->addMultiOption('VE', 'Venezuela');
		$this->addMultiOption('VN', 'Vietnam');
		$this->addMultiOption('VG', 'Virgin Islands, British');
		$this->addMultiOption('VI', 'Virgin Islands, U.S.');
		$this->addMultiOption('WF', 'Wallis And Futuna');
		$this->addMultiOption('EH', 'Western Sahara');
		$this->addMultiOption('YE', 'Yemen');
		$this->addMultiOption('YU', 'Yugoslavia');
		$this->addMultiOption('ZM', 'Zambia');
		$this->addMultiOption('ZW', 'Zimbabwe');
	}
 
}