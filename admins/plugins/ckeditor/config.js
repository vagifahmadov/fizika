/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

// Toolbar groups configuration.
config.toolbarGroups = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
	{ name: 'forms' },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
	{ name: 'links' },
	{ name: 'insert' },
	'/',
	{ name: 'styles' },
	{ name: 'colors' },
	{ name: 'tools' },
	{ name: 'others' },
	{ name: 'about' }
];
	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';
	


	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.extraPlugins = 'uploadimage';
	config.filebrowserBrowseUrl = '../ckfinder/browse.php?opener=ckeditor&type=files';
	config.filebrowserImageBrowseUrl = '../ckfinder/browse.php?opener=ckeditor&type=images';
	config.filebrowserFlashBrowseUrl = './ckfinder/browse.php?opener=ckeditor&type=flash';
	config.filebrowserUploadUrl = '../ckfinder/upload.php?opener=ckeditor&type=files';
	config.filebrowserImageUploadUrl = '../ckfinder/upload.php?opener=ckeditor&type=images';
	config.filebrowserFlashUploadUrl = '../ckfinder/upload.php?opener=ckeditor&type=flash';
};
