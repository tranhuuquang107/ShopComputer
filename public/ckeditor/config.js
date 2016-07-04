/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    //thêm file 18-6
    config.removeDialogTabs = 'image:advanced;link:advanced';
    config.filebrowserBrowseUrl = 'http://localhost:81/doan_222/public/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = 'http://localhost:81/doan_222/public/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = 'http://localhost:81/doan_222/public/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = 'http://localhost:81/doan_222/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = 'http://localhost:81/doan_222/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = 'http://localhost:81/doan_222/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
    //end thêm file 18-6
};
