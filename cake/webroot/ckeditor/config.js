/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/


CKEDITOR.stylesSet.add( 'mystyles',[
	// Block-level styles
	{ name : 'Título azul', element : 'h2', styles : { 'color' : 'Blue' } },
	{ name : 'Título vermelho' , element : 'h3', styles : { 'color' : 'Red' } }, 
	// Inline styles
	{ name : 'Marca texto', element : 'span', styles : { 'background-color' : 'Yellow' } }
]);

CKEDITOR.editorConfig = function( config ){
	
	
	//Entities -> UTF-8
	config.entities=false;
	config.entities_greek=false;
	
	//Extra plugins
	config.extraPlugins = "youtube";
	
	//File Browser KCFinder
	var path='http://lollysex.com.br';

    config.filebrowserBrowseUrl = path+'/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = path+'/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = path+'/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = path+'/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = path+'/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = path+'/kcfinder/upload.php?opener=ckeditor&type=flash';

	
	//Size & Resize
	config.height=400;
	config.resize_dir = 'vertical';
	
	//Toolbar
	config.toolbar = 'MyToolbar'; 
	config.toolbar_MyToolbar =[
		{ name: 'styles', items : [ 'Styles','Format' ] },
		{ name: 'basicstyles', items : ['Bold','Italic','Strike','-','RemoveFormat','TextColor','BGColor' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'clipboard', items : ['Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
		{ name: 'insert', items : [ 'Image','Flash','HorizontalRule','SpecialChar','YouTube'] },
		{ name: 'tools', items : [ 'Maximize','Preview'] },
	];
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	//MISC
	config.uiColor="#EEE";
	config.stylesSet='mystyles';
};
