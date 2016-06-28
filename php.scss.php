<?php

$color_sets = [
	'dark' =>
		[
			'dark-1' => ['bg'=>'#25252f','fg'=>'__'],
			'dark-2' => ['bg'=>'#3e4550','fg'=>'__'],
			'grey-1' => ['bg'=>'#8b8f93','fg'=>'__'],
			'blue-dark' => ['bg'=>'#0c2448','fg'=>'__'],
			'greyblue' => ['bg'=>'#565d67','fg'=>'__'],
			'greygold' => ['bg'=>'#a8b185','fg'=>'__'],
			'browngrey' => ['bg'=>'#a5a093','fg'=>'__'],
			'purp' => ['bg'=>'#9f4670','fg'=>'__'],
			'greyblue-dark' => ['bg'=>'#1f2938','fg'=>'__'],
			'yellow-grey' => ['bg'=>'rgb(171, 177, 111)','fg'=>'__']
		],
	
	'light' =>
		[
			'yellow-light' => ['bg'=>'rgb(234, 229, 171)','fg'=>'__'],
			'tufte' => ['bg'=>'#fffff8','fg'=>'__']
		]
];

$docs_to_process = [ 
	'components/button-group.md',
	'components/buttons.md',
	'components/card.md',
	'components/dropdowns.md',
	'components/tag.md',
	'components/utilities.md',
	'components/alerts.md'
];

$scss_to_process = [ 
	'_buttons.scss',
	'_card.scss',
	'_tags.scss',
	'_custom.scss',
	'_alert.scss',
	'bootstrap.scss',
	'_variables.scss' 
];

$spacers = [
	"0-1" => ".1",
	"0-2" => ".2",
	"0-25" => ".25",
	"0-5" => ".5",
	"0-75" => ".75",
	"4" => "4",
	"5" => "5",
	"6" => "6",
];


$processed = [
	'files' => 0
];


$more_scss = [
	'loading-spinner',
	'loading-bar'
];

foreach($scss_to_process as $scss_file){
	$processed['files']++;
	ob_start();
	include 'php.scss/scss/'.$scss_file.'.php';
	file_put_contents('scss/'.$scss_file,ob_get_clean()); // gets content, discards buffer
}

foreach($docs_to_process as $docs_file){
	$processed['files']++;
	ob_start();
	include 'php.scss/docs/'.$docs_file.'.php';
	file_put_contents('docs/'.$docs_file,ob_get_clean()); // gets content, discards buffer
}
echo 'Processed '.$processed['files'].' files';