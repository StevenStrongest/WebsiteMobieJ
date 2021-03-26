/**
 * @license Copyright (c) 2014-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
import InlineEditor from '@ckeditor/ckeditor5-editor-inline/src/inlineeditor.js';
import Autoformat from '@ckeditor/ckeditor5-autoformat/src/autoformat.js';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold.js';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic.js';
import BlockQuote from '@ckeditor/ckeditor5-block-quote/src/blockquote.js';
import CKFinder from '@ckeditor/ckeditor5-ckfinder/src/ckfinder.js';
import Heading from '@ckeditor/ckeditor5-heading/src/heading.js';
import Image from '@ckeditor/ckeditor5-image/src/image.js';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption.js';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle.js';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload.js';
import Indent from '@ckeditor/ckeditor5-indent/src/indent.js';
import Link from '@ckeditor/ckeditor5-link/src/link.js';
import List from '@ckeditor/ckeditor5-list/src/list.js';
import MediaEmbed from '@ckeditor/ckeditor5-media-embed/src/mediaembed.js';
import PasteFromOffice from '@ckeditor/ckeditor5-paste-from-office/src/pastefromoffice';
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment.js';
import Autosave from '@ckeditor/ckeditor5-autosave/src/autosave.js';
import FontFamily from '@ckeditor/ckeditor5-font/src/fontfamily.js';
import Code from '@ckeditor/ckeditor5-basic-styles/src/code.js';
import FontColor from '@ckeditor/ckeditor5-font/src/fontcolor.js';
import Comments from '@ckeditor/ckeditor5-comments/src/comments.js';
import FontSize from '@ckeditor/ckeditor5-font/src/fontsize.js';
import CodeBlock from '@ckeditor/ckeditor5-code-block/src/codeblock.js';
import FontBackgroundColor from '@ckeditor/ckeditor5-font/src/fontbackgroundcolor.js';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight.js';
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials.js';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph.js';

export default class Editor extends InlineEditor {}

// Plugins to include in the build.
Editor.builtinPlugins = [
	Autoformat,
	Bold,
	Italic,
	BlockQuote,
	CKFinder,
	Heading,
	Image,
	ImageCaption,
	ImageStyle,
	ImageUpload,
	Indent,
	Link,
	List,
	MediaEmbed,
	PasteFromOffice,
	Alignment,
	Autosave,
	FontFamily,
	Code,
	FontColor,
	Comments,
	FontSize,
	CodeBlock,
	FontBackgroundColor,
	Highlight,
	Essentials,
	Paragraph
];

