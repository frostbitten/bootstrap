var colors = {
		dark: 	[
					'dark-1',
					'dark-2',
					'grey-1',
					'blue-dark',
					'greyblue',
					'greygold',
					'browngrey',
					'purp',
					'yellow-grey'
				],
		light:	[
					'tufte',
					'greyblue-dark',
					'yellow-light'
				]
	};
	
var compiled = "";
	 
function btn_colors(){
	
	compiled = "";
	
	colors.dark.forEach(function(id){
		compiled += "\r\n\r\n\r\n $btn-"+id+"-color: #fff !default;";
		compiled += "\r\n $btn-"+id+"-bg: $brand-"+id+" !default;";
		compiled += "\r\n $btn-"+id+"-border: $btn-"+id+"-bg !default;";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n\r\n\r\n $btn-"+id+"-color: $gray-dark !default;";
		compiled += "\r\n $btn-"+id+"-bg: $brand-"+id+" !default;";
		compiled += "\r\n $btn-"+id+"-border:  $brand-"+id+" !default;";
	});
	
}
function btn_colors2(){
	
	compiled = "";
	
	colors.dark.forEach(function(id){
		compiled += "\r\n\r\n.btn-"+id+" {\r\n"+
					"  @include button-variant($btn-"+id+"-color, $btn-"+id+"-bg, $btn-"+id+"-border);\r\n"+
					"}\r\n";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n\r\n.btn-"+id+" {\r\n"+
					"  @include button-variant($btn-"+id+"-color, $btn-"+id+"-bg, $btn-"+id+"-border);\r\n"+
					"}\r\n";
	});
	
}

function btn_colors3(){
	
	compiled = "";
	
	colors.dark.forEach(function(id){
		compiled += "\r\n\r\n.btn-outline-"+id+" {\r\n"+
					"  @include button-outline-variant($btn-"+id+"-bg);\r\n"+
					"}";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n\r\n.btn-outline-"+id+" {\r\n"+
					"  @include button-outline-variant($btn-"+id+"-bg);\r\n"+
					"}";
	});
	
}

function card_colors(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += "\r\n\r\n\r\n.card-"+id+" {";
		compiled += "\r\n @include card-variant($brand-"+id+", $brand-"+id+");";
		compiled += "\r\n}";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n\r\n\r\n.card-"+id+" {";
		compiled += "\r\n  @include card-variant($brand-"+id+", $brand-"+id+");";
		compiled += "\r\n}";
	});
	
	
} 


function tag_colors(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += "\r\n\r\n\r\n.tag-"+id+" {";
		compiled += "\r\n  @include tag-variant($tag-"+id+"-bg);";
		compiled += "\r\n}";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n\r\n\r\n.tag-"+id+" {";
		compiled += "\r\n  @include tag-variant($tag-"+id+"-bg);";
		compiled += "\r\n}";
	});
	
	
} 


function tag_colors_vars(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += "\r\n\r\n\r\n$tag-"+id+"-bg:             $brand-"+id+" !default;";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n\r\n\r\n$tag-"+id+"-bg:             $brand-"+id+" !default;";
	});
	
	
} 



function bg_colors(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += "\r\n@include bg-variant('.bg-"+id+"', $brand-"+id+");";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n@include bg-variant('.bg-"+id+"', $brand-"+id+");";
	});
	
	
} 


function text_colors(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += "\r\n@include text-emphasis-variant('.text-"+id+"', $brand-"+id+");";
	});
	colors.light.forEach(function(id){
		compiled += "\r\n@include text-emphasis-variant('.text-"+id+"', $brand-"+id+");";
	});
	
	
} 







function docs_buttons(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += '\r\n<button type="button" class="btn btn-'+id+'">'+id+'</button>';
	});
	colors.light.forEach(function(id){
		compiled += '\r\n<button type="button" class="btn btn-'+id+'">'+id+'</button>';
	});
	
	
} 




function docs_btn_groups(){
	
	compiled = "";
	
	
	colors.dark.forEach(function(id){
		compiled += 
		'\r\n\r\n  <div class="btn-group">\r\n'+
		'    <button type="button" class="btn btn-'+id+' dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+id+'</button>\r\n'+
		'    <div class="dropdown-menu">\r\n'+
		'      <a class="dropdown-item" href="#">Action</a>\r\n'+
		'      <a class="dropdown-item" href="#">Another action</a>\r\n'+
		'      <a class="dropdown-item" href="#">Something else here</a>\r\n'+
		'      <div class="dropdown-divider"></div>\r\n'+
		'      <a class="dropdown-item" href="#">Separated link</a>\r\n'+
		'    </div>\r\n'+
		'  </div><!-- /btn-group -->';
	});
	colors.light.forEach(function(id){
		compiled += 
		'\r\n\r\n  <div class="btn-group">\r\n'+
		'    <button type="button" class="btn btn-'+id+' dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+id+'</button>\r\n'+
		'    <div class="dropdown-menu">\r\n'+
		'      <a class="dropdown-item" href="#">Action</a>\r\n'+
		'      <a class="dropdown-item" href="#">Another action</a>\r\n'+
		'      <a class="dropdown-item" href="#">Something else here</a>\r\n'+
		'      <div class="dropdown-divider"></div>\r\n'+
		'      <a class="dropdown-item" href="#">Separated link</a>\r\n'+
		'    </div>\r\n'+
		'  </div><!-- /btn-group -->';
	});
	
	
} 


function docs_cards(){
	
	compiled = ""; 
	colors.dark.forEach(function(id){
		compiled += 
	'\r\n\r\n  <div class="card card-block card-inverse card-'+id+' text-xs-center">\r\n'+
	'    <blockquote class="card-blockquote">\r\n'+
	'      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>\r\n'+
	'      <footer>\r\n'+
	'        <small>\r\n'+
	'          Someone famous in <cite title="Source Title">Source Title</cite>\r\n'+
	'        </small>\r\n'+
	'      </footer>\r\n'+
	'    </blockquote>\r\n'+
	'  </div>';
	
	});
	colors.light.forEach(function(id){
		compiled += 
	'\r\n\r\n  <div class="card card-block card-'+id+' text-xs-center">\r\n'+
	'    <blockquote class="card-blockquote">\r\n'+
	'      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>\r\n'+
	'      <footer>\r\n'+
	'        <small>\r\n'+
	'          Someone famous in <cite title="Source Title">Source Title</cite>\r\n'+
	'        </small>\r\n'+
	'      </footer>\r\n'+
	'    </blockquote>\r\n'+
	'  </div>';
	});
	
	
} 
