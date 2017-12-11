/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others', groups: [ 'others' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Underline,Subscript,Superscript,Cut,Copy,Paste,PasteText,Scayt';
	//==============================================
	var baseUrl ="http://localhost:8080/Da_An_Web/admin/";
	config.filebrowserBrowseUrl = baseUrl+'/ckfinder/ckfinder.html';
 
config.filebrowserImageBrowseUrl =  baseUrl+'ckfinder/ckfinder.html?type=Images';
 
config.filebrowserFlashBrowseUrl = baseUrl+'ckfinder/ckfinder.html?type=Flash';
 
config.filebrowserUploadUrl = baseUrl+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
 
config.filebrowserImageUploadUrl = baseUrl+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
 
config.filebrowserFlashUploadUrl = baseUrl+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
