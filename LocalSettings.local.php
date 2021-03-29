<?php
ini_set( 'max_execution_time', 1000 );
ini_set( 'memory_limit', '-1' );

$wgArticlePath = "/wiki/$1";
$wgEnableUploads = true;

# Extensions
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );

# Configure extensions
# WikiEditor
$wgDefaultUserOptions['usebetatoolbar'] = 1;

