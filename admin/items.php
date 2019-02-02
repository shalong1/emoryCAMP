<?PHP
require_once("./include/membersite_config.php");
$currentdir = str_replace('admin','',getcwd()) .'files/';
$message = "";

function file_newname($path, $filename){
    if ($pos = strrpos($filename, '.')) {
           $name = substr($filename, 0, $pos);
           $ext = substr($filename, $pos);
    } else {
           $name = $filename;
    }

    $newpath = $path.'/'.$filename;
    $newname = $filename;
    $counter = 0;
    while (file_exists($newpath)) {
           $newname = $name .'_'. $counter . $ext;
           $newpath = $path.'/'.$newname;
           $counter++;
     }

    return $newname;
}

function save_file($strPostFileName)
{
	global $message, $currentdir;
	
	$valid_file = true;
	$new_file_name = "";
	if(!$_FILES[$strPostFileName]['error'])
	{
		if($valid_file)
		{			
			$new_file_name = file_newname($currentdir, basename($_FILES[$strPostFileName]['name']));	
			$target = $currentdir . $new_file_name;
			move_uploaded_file($_FILES[$strPostFileName]['tmp_name'], $target);	
			$message += 'Your file was accepted.'.$target;
		}
	}
	else
	{
		$message += 'Ooops!  Your upload triggered the following error:  '.$_FILES[$strPostFileName]['error'];
	}
	return $new_file_name;
}


if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(!$fgmembersite->DBLogin()) 
{
	echo "Error Connecting to Database";
	exit;
}	

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Items</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">      
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script language="javascript" src="calendar.js"></script>
	  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
      
<script type="text/javascript" src="../dist/wysiwyg.min.js"></script>
<script type="text/javascript" src="../dist/wysiwyg-editor.min.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../src/wysiwyg-editor.css" />

      
     
        
<script type="text/javascript">
$(document).ready(function() {
	if ($('#ddlItemType option:selected').text() == "Manuscript"){
		$('.div2').show();
	}
	else {
		$('.div2').hide();
	}
	
	if ($('#ddlItemType option:selected').text() == "R-Shiney"){
		$('.divRShiney').show();
	}
	else {
		$('.divRShiney').hide();
	}
	
	if ($('#ddlItemType option:selected').text() == "Website (URL)"){
		$('.divWebsite').show();
	}
	else {
		$('.divWebsite').hide();
	}

	if ($('#ddlItemType option:selected').text() == "Video"){
		$('.divWebsite').show();
	}
	else {
		$('.divWebsite').hide();
	}
	
	$('#ddlItemType').change(function () {
		if ($('#ddlItemType option:selected').text() == "Manuscript"){
			$('.div2').show();					
		}		
		else {
			$('.div2').hide();				   
		}
		
		if ($('#ddlItemType option:selected').text() == "R-Shiney"){
			$('.divRShiney').show();					
		}		
		else {
			$('.divRShiney').hide();				   
		}
		
		if ($('#ddlItemType option:selected').text() == "Website (URL)"){
			$('.divWebsite').show();					
		}		
		else {
			$('.divWebsite').hide();				   
		}

		if ($('#ddlItemType option:selected').text() == "Video"){
		$('.divWebsite').show();
	}
	else {
		$('.divWebsite').hide();
	}
		
	}); 
	
			
	// Featured editor
	
    $('#txtDescription').each( function(index, element)
    {
        $(element).wysiwyg({
            'class': index == 0 ? 'fake-bootstrap' : (index == 1 ? 'fake-uikit' : 'some-more-classes'),
            // 'selection'|'top'|'top-selection'|'bottom'|'bottom-selection'
            toolbar: index == 0 ? 'top-selection' : (index == 1 ? 'bottom-focus' : 'selection'),
            buttons: {
                // Dummy-HTML-Plugin
                dummybutton1: index != 1 ? false : {
                    html: $('<input id="submit" type="button" value="Submit" />').click(function() {
                                alert( 'Submit form' );
                            }),
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                // Dummy-Button-Plugin
                dummybutton2: index != 1 ? false : {
                    title: 'Dummy',
                    image: '\uf1e7',
                    click: function( $button ) {
                                // We simply make 'bold'
                                if( $(element).wysiwyg('shell').getSelectedHTML() )
                                    $(element).wysiwyg('shell').bold();
                                else
                                    alert( 'No text selected' );
                           },
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                insertlink: {
                    title: 'Insert link',
                    image: '\uf08e' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                // Fontname plugin
                fontname: index == 1 ? false : {
                    title: 'Font',
                    image: '\uf031', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_fontnames = {
                                    // Name : Font
                                    'Arial, Helvetica' : 'Arial,Helvetica',
                                    'Verdana'          : 'Verdana,Geneva',
                                    'Georgia'          : 'Georgia',
                                    'Courier New'      : 'Courier New,Courier',
                                    'Times New Roman'  : 'Times New Roman,Times'
                                };
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontnames, function( name, font ) {
                                var $link = $('<a/>').attr('href','#')
                                                    .css( 'font-family', font )
                                                    .html( name )
                                                    .click(function(event) {
                                                        $(element).wysiwyg('shell').fontName(font).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           },
                    //showstatic: true,    // wanted on the toolbar
                    showselection: index == 0 ? true : false    // wanted on selection
                },
                // Fontsize plugin
                fontsize: index != 1 ? false : {
                    title: 'Size',
                    style: 'color:white;background:red',      // you can pass any property - example: "style"
                    image: '\uf034', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            // Hack: http://stackoverflow.com/questions/5868295/document-execcommand-fontsize-in-pixels/5870603#5870603
                            var list_fontsizes = [];
                            for( var i=8; i <= 11; ++i )
                                list_fontsizes.push(i+'px');
                            for( var i=12; i <= 28; i+=2 )
                                list_fontsizes.push(i+'px');
                            list_fontsizes.push('36px');
                            list_fontsizes.push('48px');
                            list_fontsizes.push('72px');
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontsizes, function( index, size ) {
                                var $link = $('<a/>').attr('href','#')
                                                    .html( size )
                                                    .click(function(event) {
                                                        $(element).wysiwyg('shell').fontSize(7).closePopup();
                                                        $(element).wysiwyg('container')
                                                                .find('font[size=7]')
                                                                .removeAttr("size")
                                                                .css("font-size", size);
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           }
                    //showstatic: true,    // wanted on the toolbar
                    //showselection: true    // wanted on selection
                },
                // Header plugin
                header: index != 1 ? false : {
                    title: 'Header',
                    style: 'color:white;background:blue',      // you can pass any property - example: "style"
                    image: '\uf1dc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_headers = {
                                    // Name : Font
                                    'Header 1' : '<h1>',
                                    'Header 2' : '<h2>',
                                    'Header 3' : '<h3>',
                                    'Header 4' : '<h4>',
                                    'Header 5' : '<h5>',
                                    'Header 6' : '<h6>',
                                    'Code'     : '<pre>'
                                };
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                   .attr('unselectable','on');
                            $.each( list_headers, function( name, format ) {
                                var $link = $('<a/>').attr('href','#')
                                                     .css( 'font-family', format )
                                                     .html( name )
                                                     .click(function(event) {
                                                        $(element).wysiwyg('shell').format(format).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           }
                    //showstatic: true,    // wanted on the toolbar
                    //showselection: false    // wanted on selection
                },
                bold: {
                    title: 'Bold (Ctrl+B)',
                    image: '\uf032', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'b'
                },
                italic: {
                    title: 'Italic (Ctrl+I)',
                    image: '\uf033', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'i'
                },
                underline: {
                    title: 'Underline (Ctrl+U)',
                    image: '\uf0cd', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'u'
                },
                strikethrough: {
                    title: 'Strikethrough (Ctrl+S)',
                    image: '\uf0cc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 's'
                },
                forecolor: {
                    title: 'Text color',
                    image: '\uf1fc' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                highlight: {
                    title: 'Background color',
                    image: '\uf043' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                alignleft: index != 0 ? false : {
                    title: 'Left',
                    image: '\uf036', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                aligncenter: index != 0 ? false : {
                    title: 'Center',
                    image: '\uf037', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                alignright: index != 0 ? false : {
                    title: 'Right',
                    image: '\uf038', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                alignjustify: index != 0 ? false : {
                    title: 'Justify',
                    image: '\uf039', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                subscript: index == 1 ? false : {
                    title: 'Subscript',
                    image: '\uf12c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                superscript: index == 1 ? false : {
                    title: 'Superscript',
                    image: '\uf12b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                indent: index != 0 ? false : {
                    title: 'Indent',
                    image: '\uf03c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                outdent: index != 0 ? false : {
                    title: 'Outdent',
                    image: '\uf03b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                orderedList: index != 0 ? false : {
                    title: 'Ordered list',
                    image: '\uf0cb', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                unorderedList: index != 0 ? false : {
                    title: 'Unordered list',
                    image: '\uf0ca', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                removeformat: {
                    title: 'Remove format',
                    image: '\uf12d' // <img src="path/to/image.png" width="16" height="16" alt="" />
                }
            },
            // Submit-Button
            submit: {
                title: 'Submit',
                image: '\uf00c' // <img src="path/to/image.png" width="16" height="16" alt="" />
            },
            // Other properties
            selectImage: 'Click or drop image',
            placeholderUrl: 'www.example.com',
            placeholderEmbed: '<embed/>',
            maxImageSize: [600,200],
            //filterImageType: callback( file ) {},
            onKeyDown: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                            // E.g.: submit form on enter-key:
                            //if( (key == 10 || key == 13) && !shiftKey && !altKey && !ctrlKey && !metaKey ) {
                            //    submit_form();
                            //    return false; // swallow enter
                            //}
                        },
            onKeyPress: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        },
            onKeyUp: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        },
            onAutocomplete: function( typed, key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                            if( typed.indexOf('@') == 0 ) // startswith '@'
                            {
                                var usernames = [
                                        'Evelyn',
                                        'Harry',
                                        'Amelia',
                                        'Oliver',
                                        'Isabelle',
                                        'Eddie',
                                        'Editha',
                                        'Jacob',
                                        'Emily',
                                        'George',
                                        'Edison'
                                    ];
                                var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                                       .attr('unselectable','on');
                                $.each( usernames, function( index, username ) {
                                    if( username.toLowerCase().indexOf(typed.substring(1).toLowerCase()) !== 0 ) // don't count first character '@'
                                        return;
                                    var $link = $('<a/>').attr('href','#')
                                                        .text( username )
                                                        .click(function(event) {
                                                            var url = 'http://example.com/user/' + username,
                                                                html = '<a href="' + url + '">@' + username + '</a> ';
                                                            var editor = $(element).wysiwyg('shell');
                                                            // Expand selection and set inject HTML
                                                            editor.expandSelection( typed.length, 0 ).insertHTML( html );
                                                            editor.closePopup().getElement().focus();
                                                            // prevent link-href-#
                                                            event.stopPropagation();
                                                            event.preventDefault();
                                                            return false;
                                                        });
                                    $list.append( $link );
                                });
                                if( $list.children().length )
                                {
                                    if( key == 13 )
                                    {
                                        $list.children(':first').click();
                                        return false; // swallow enter
                                    }
                                    // Show popup
                                    else if( character || key == 8 )
                                        return $list;
                                }
                            }
                        },
            onImageUpload: function( insert_image ) {
                            // A bit tricky, because we can't easily upload a file via
                            // '$.ajax()' on a legacy browser without XMLHttpRequest2.
                            // You have to submit the form into an '<iframe/>' element.
                            // Call 'insert_image(url)' as soon as the file is online
                            // and the URL is available.
                            // Example server script (written in PHP):
                            
                            // Example client script (without upload-progressbar):
                            var iframe_name = 'legacy-uploader-' + Math.random().toString(36).substring(2);
                            $('<iframe>').attr('name',iframe_name)
                                         .load(function() {
                                            // <iframe> is ready - we will find the URL in the iframe-body
                                            var iframe = this;
                                            var iframedoc = iframe.contentDocument ? iframe.contentDocument :
                                                           (iframe.contentWindow ? iframe.contentWindow.document : iframe.document);
                                            var iframebody = iframedoc.getElementsByTagName('body')[0];
                                            var image_url = iframebody.innerHTML;
                                            insert_image( image_url );
                                            $(iframe).remove();
                                         })
                                         .appendTo(document.body);
                            var $input = $(this);
                            $input.attr('name','upload-filename')
                                  .parents('form')
                                  .attr('action','/script.php') // accessing cross domain <iframes> could be difficult
                                  .attr('method','POST')
                                  .attr('enctype','multipart/form-data')
                                  .attr('target',iframe_name)
                                  .submit();
                        },
            forceImageUpload: false,    // upload images even if File-API is present
            videoFromUrl: function( url ) {
                // Contributions are welcome :-)

                // youtube - http://stackoverflow.com/questions/3392993/php-regex-to-get-youtube-video-id
                var youtube_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?(?:youtu\.be|youtube\.com)\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/)([^\?&\"'>]+)/ );
                if( youtube_match && youtube_match[1].length == 11 )
                    return '<iframe src="//www.youtube.com/embed/' + youtube_match[1] + '" width="640" height="360" frameborder="0" allowfullscreen></iframe>';

                // vimeo - http://embedresponsively.com/
                var vimeo_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?vimeo\.com\/([0-9]+)$/ );
                if( vimeo_match )
                    return '<iframe src="//player.vimeo.com/video/' + vimeo_match[1] + '" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                // dailymotion - http://embedresponsively.com/
                var dailymotion_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?dailymotion\.com\/video\/([0-9a-z]+)$/ );
                if( dailymotion_match )
                    return '<iframe src="//www.dailymotion.com/embed/video/' + dailymotion_match[1] + '" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                // undefined -> create '<video/>' tag
            }
        })
        .change(function() {
            if( typeof console != 'undefined' )
                ;//console.log( 'change' );
        })
        .focus(function() {
            if( typeof console != 'undefined' )
                ;//console.log( 'focus' );
        })
        .blur(function() {
            if( typeof console != 'undefined' )
                ;//console.log( 'blur' );
        });
    });

    // Demo-Buttons
    $('#editor3-readonly').click(function(e) {
        e.preventDefault()
        var isReadOnly = $('#editor3').wysiwyg('shell').readOnly();
        $('#editor3').wysiwyg('shell').readOnly( ! isReadOnly );
    });
    $('#editor3-bold').click(function(e) {
        e.preventDefault()
        $('#editor3').wysiwyg('shell').bold();
    });
    $('#editor3-red').click(function(e) {
        e.preventDefault()
        $('#editor3').wysiwyg('shell').highlight('#ff0000');
    });
    $('#editor3-sethtml').click(function(e) {
        e.preventDefault()
        $('#editor3').wysiwyg('shell').setHTML('This is the new text.');
    });
    $('#editor3-inserthtml').click(function(e) {
        e.preventDefault()
        $('#editor3').wysiwyg('shell').insertHTML('Insert some text.');
    });
    $('#editor3-reset').click(function(e) {
        e.preventDefault()
        $('#editor3').closest('form').trigger('reset');
    });

    // Raw editor
    var option = {
        element: 'editor0', // or: document.getElementById('editor0')
        onKeyPress: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        if( typeof console != 'undefined' )
                            console.log( 'RAW: '+character+' key pressed' );
                    },
        onSelection: function( collapsed, rect, nodes, rightclick ) {
                        if( typeof console != 'undefined' && rect )
                            console.log( 'RAW: selection rect('+rect.left+','+rect.top+','+rect.width+','+rect.height+'), '+nodes.length+' nodes' );
                    },
        onPlaceholder: function( visible ) {
                        if( typeof console != 'undefined' )
                            console.log( 'RAW: placeholder ' + (visible ? 'visible' : 'hidden') );
                    }
    };
    var wysiwygeditor = wysiwyg( option );
    //wysiwygeditor.setHTML( '<html>' );
});
</script>
<style>
body {
    font-family: Arial,Verdana;
}
p {
    margin: 0;
    padding: 0;
}
.button {
    -moz-user-select: none;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
/* CSS for the font-name + font-size plugin */
.wysiwyg-plugin-list {
    max-height: 16em;
    overflow: auto;
    overflow-x: hidden;
    overflow-y: scroll;
}
.wysiwyg-plugin-list a,
.wysiwyg-plugin-list a:link,
.wysiwyg-plugin-list a:visited {
    display: block;
    color: black;
    padding: 5px 10px;
    text-decoration: none;
    cursor: pointer;
}
.wysiwyg-plugin-list a:hover {
    color: HighlightText;
    background-color: Highlight;
}
/* CSS for the smiley plugin */
.wysiwyg-plugin-smilies {
    padding: 10px;
    text-align: center;
    white-space: normal;
}
.wysiwyg-plugin-smilies img {
    display: -moz-inline-stack; /* inline-block: http://blog.mozilla.org/webdev/2009/02/20/cross-browser-inline-block/ */
    display: inline-block;
    *display: inline;
}
/* Fake bootstrap + uikit */
.fake-bootstrap.wysiwyg-container.wysiwyg-active {
    /* colors shamelessly stolen from bootstrap.form-control:focus */
    border-color: #66afe9;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6)
}
.fake-uikit.wysiwyg-container.wysiwyg-active {
    border-color: #99baca !important;
    background: #f5fbfe !important;
}
</style>
        
        
        
        
        
        
        
        
        
        
      
      
      
</head>
<body>
<?php include("menu.html"); ?> 
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' enctype='multipart/form-data'>
<fieldset >

<div id='fg_membersite_content'>
<h2>Items</h2>
Use this page to add, edit and Items.
<p>
<?PHP

	if(isset($_POST[saveAction]))
	{
		if(isset($_POST['chkIsActive']) &&  $_POST['chkIsActive'] == 'yes')
			$isActive = "1";
		else
			$isActive = "0";
			
	    if(isset($_POST['chkIsFutureWork']) &&  $_POST['chkIsFutureWork'] == 'yes')
			$isFutureWork = "1";
		else
			$isFutureWork = "0";
		
		if(isset($_POST['chkIsHIV']) &&  $_POST['chkIsHIV'] == 'yes')
			$isHIV = "1";
		else
			$isHIV = "0";
			
		if(isset($_POST['chkIsSTD']) &&  $_POST['chkIsSTD'] == 'yes')
			$isSTD = "1";
		else
			$isSTD = "0";
			
		if(isset($_POST['chkIsAH']) &&  $_POST['chkIsAH'] == 'yes')
			$isAH = "1";
		else
			$isAH = "0";
			
		if(isset($_POST['chkIsVH']) &&  $_POST['chkIsVH'] == 'yes')
			$isVH = "1";
		else
			$isVH = "0";
			
		if(isset($_POST['chkIsTB']) &&  $_POST['chkIsTB'] == 'yes')
			$isTB = "1";
		else
			$isTB = "0";
			
		
		
		if($_FILES['coverimage']['name'])
			$newCIFileName = save_file('coverimage');
		else
			$newCIFileName = "";
			
		if($_FILES['coverimagedetail']['name'])
			$newCIDFileName = save_file('coverimagedetail');
		else
			$newCIDFileName = "";
				
		if(strlen($_POST[txtID]) > 0)
		{
						
			//-----------------------------------------------		
			if(isset($_POST['isRemoveCIFile']) &&  $_POST['isRemoveCIFile'] == 'yes')
			{
				echo"11<br>";
				$currCIFilename = "";
				if (!unlink($currentdir . $_POST['txtCIFileName'])) 
					echo ("Error deleting ". $_POST['txtCIFileName']."<br/>");
			}
			else
				if($_FILES['coverimage']['name'])
				{
					if (!$_POST['txtCIFileName']=="")
						unlink($currentdir . $_POST['txtCIFileName']);
					$currCIFilename = $_FILES['coverimage']['name'];
				}
				else
					$currCIFilename = $_POST['txtCIFileName'];
			//-----------------------------------------------	
			
			//-----------------------------------------------		
			if(isset($_POST['isRemoveCIDFile']) &&  $_POST['isRemoveCIDFile'] == 'yes')
			{
				$currCIDFilename = "";
				if (!unlink($currentdir . $_POST['txtCIDFileName'])) 
					echo ("Error deleting ". $_POST['txtCIDFileName']."<br/>");
			}
			else
				if($_FILES['coverimagedetail']['name'])
				{
					if (!$_POST['txtCIDFileName']=="")
						unlink($currentdir . $_POST['txtCIDFileName']);
					$currCIDFilename = $_FILES['coverimagedetail']['name'];
				}
				else
					$currCIDFilename = $_POST['txtCIDFileName'];
			//-----------------------------------------------	
					
			$sql = "UPDATE items SET title='".$_POST['txtTitle']."'".
				",itemType=".$_POST['ddlItemType'].
				",projectid=".$_POST['ddlProject'].
				",sortorder=".$_POST['txtSortOrder'].
				",description='".$fgmembersite->SanitizeForSQL($_POST['txtDescription'])."'".
				",authors='".$fgmembersite->SanitizeForSQL($_POST['txtAuthors'])."'".
				",cifilename='".$fgmembersite->SanitizeForSQL($currCIFilename)."'".
				",cidfilename='".$fgmembersite->SanitizeForSQL($currCIDFilename)."'".
				",fiscalYear=".$_POST['ddlFiscalYear'].
				",isHIV=".$isHIV.
				",isSTD=".$isSTD.
				",isAH=".$isAH.
				",isVH=".$isVH.
				",isTB=".$isTB.
				",toolurl='".$fgmembersite->SanitizeForSQL($_POST['txtToolURL'])."'".
				",journalname='".$fgmembersite->SanitizeForSQL($_POST['txtJournalName'])."'".
				",journalurl='".$fgmembersite->SanitizeForSQL($_POST['txtJournalURL'])."'".
				",journaldate='".$fgmembersite->SanitizeForSQL($_POST['txtJournalDate'])."'".
				",statehtmlfile='".$fgmembersite->SanitizeForSQL($_POST['txtStateHTMLFile'])."'".
				",isFutureWork=".$fgmembersite->SanitizeForSQL($isFutureWork).
				",isActive=".$isActive.
				" WHERE id=".$_POST[txtID];
			
			//echo $sql."<br>";	
			mysql_query($sql) or die(mysql_error());

			echo "Item Saved.<br>";
		}
		else
		{
			$sql = "INSERT INTO `items`(`title`, `itemtype`, projectid, sortorder, authors, cifilename, cidfilename, description, fiscalYear, isHIV, isSTD, isAH, isVH, isTB, toolurl, journalname, journalurl, journaldate, statehtmlfile, isFutureWork, isActive)
			VALUES ('".$_POST['txtTitle']."',
			".$_POST['ddlItemType'].",
			".$_POST['ddlProject'].",
			".$_POST['txtSortOrder'].",
			'".$fgmembersite->SanitizeForSQL($_POST['txtAuthors'])."',
			'".$fgmembersite->SanitizeForSQL($newCIFileName)."',
			'".$fgmembersite->SanitizeForSQL($newCIDFileName)."',
			'".$fgmembersite->SanitizeForSQL($_POST['txtDescription'])."',
			".$_POST['ddlFiscalYear'].",
			".$isHIV.",
			".$isSTD.",
			".$isAH.",
			".$isVH.",
			".$isTB.",
			'".$fgmembersite->SanitizeForSQL($_POST['txtToolURL'])."',
			'".$fgmembersite->SanitizeForSQL($_POST['txtJournalName'])."',
			'".$fgmembersite->SanitizeForSQL($_POST['txtJournalURL'])."',
			'".$fgmembersite->SanitizeForSQL($_POST['txtJournalDate'])."',
			'".$fgmembersite->SanitizeForSQL($_POST['txtStateHTMLFile'])."',
			".$isFutureWork.",
			".$isActive.")";

			//echo $sql."<br>";
			mysql_query($sql) or die(mysql_error());
			echo "New Item Saved.  ".$message."<br>";
		}
		
		
	}//End Save Action
	
	 echo "<div id='fg_membersite'>";
	 if ($_GET['action'] == "edit") {
		
		$sql = "SELECT * FROM items where id=" . $_GET['id'];
		
		$results = mysql_query($sql)or die(mysql_error());
		$row_categories = mysql_fetch_array($results);
		
		if($row_categories['isActive'] == 1)
			$isChecked = "checked";
		else
			$isChecked = "";
		if($row_categories['isFutureWork'] == 1)
			$isFutureWorkChecked = "checked";
		else
			$isFutureWorkChecked = "";
			
			
		if($row_categories['isHIV'] == 1)
			$isHIV = "checked";
		else
			$isHIV = "";
		if($row_categories['isSTD'] == 1)
			$isSTD = "checked";
		else
			$isSTD = "";
		if($row_categories['isAH'] == 1)
			$isAH = "checked";
		else
			$isAH = "";
		if($row_categories['isVH'] == 1)
			$isVH = "checked";
		else
			$isVH = "";	
		if($row_categories['isTB'] == 1)
			$isTB = "checked";
		else
			$isTB = "";
		
		$currentitemType = ($row_categories['itemtype']);
		$currentFiscalYear = ($row_categories['fiscalYear']);
		$editTitle = ($row_categories['title']);
		$editProjectid = ($row_categories['projectid']);
		$editSortOrder = ($row_categories['sortorder']);
		$editID = ($row_categories['id']);
		$editCIFilename = ($row_categories['cifilename']);
		$editCIDFilename = ($row_categories['cidfilename']);
		$editDescription = ($row_categories['description']);
		$editAuthors = ($row_categories['authors']);
		$editJournalName = ($row_categories['journalname']);
		$editJournalURL = ($row_categories['journalurl']);
		$editJournalDate = ($row_categories['journaldate']);
		$editStateHTMLFile = ($row_categories['statehtmlfile']);
		$editToolURL = ($row_categories['toolurl']);
		$isFutureWork = ($row_categories['isFutureWork']);
		$isActive = ($row_categories['isActive']);
		$surveyLabel = "Edit Existing Item";
		$buttonLabel = "Submit Changes";
	 }
	 else
	 {	
	 	
	 	if ($_GET['action'] == "delete") {
			
			$sql = "SELECT * FROM items where id=" . $_GET['id'];
		
			$results = mysql_query($sql)or die(mysql_error());
			$row_items = mysql_fetch_array($results);
			
			
			$deleteTitle = ($row_items['title']);
			
			//Delete the associated files in the filesystem
		    if (strlen($row_items['cidfilename']) > 0)
				unlink($currentdir . $row_items['cidfilename']);
			if (strlen($row_items['cifilename']) > 0)
 				unlink($currentdir . $row_items['cifilename']);
			 
			 $sql = "DELETE FROM items where id=" . $_GET['id'];
			 $results = mysql_query($sql)or die(mysql_error());
			 
			 echo "<font color='red'>Sucessfully deleted item: ".$deleteTitle."</font><BR>";
		 }
		 $editID = "";
		 $surveyLabel = "Add New Item";
		 $buttonLabel = "Add New";
	 }
	    


		echo "<strong>".$surveyLabel."</strong><br>";
		echo "<table border=0>
				<tr>
					<td><strong>Title:</strong></td>
					<td><input maxlength='400' style='width:350px' type='text' value='".$editTitle."' id='txtTitle' name='txtTitle' /></td>
					<td align='right'><strong>Project:</strong></td>
					<td colspan='2'>
						<select name='ddlProject' id='ddlProject'>";
							$results = mysql_query("SELECT * FROM projects order by position")or die(mysql_error());
							$row_count=mysql_num_rows($results);
							while ($row_categorieslist = mysql_fetch_assoc($results)) {
								echo "<option value='".$row_categorieslist['id']."'";
								if($editProjectid == $row_categorieslist['id']) 
									echo "selected";
								echo ">".$row_categorieslist['name']."</option>";
							}
											
						echo "</select>
						
						
					</td>
				</tr>
				<tr>
					<td>
						<strong>Focus Area:</strong>
						
			 		</td>
					<td colspan=4>
						<input type='checkbox' ".$isHIV." value='yes' id='chkIsHIV' name='chkIsHIV' />  
						<strong>HIV</strong>&nbsp;&nbsp;&nbsp;
						<input type='checkbox' ".$isSTD." value='yes' id='chkIsSTD' name='chkIsSTD' />  
						<strong>Sexually Transmitted Disease</strong>&nbsp;&nbsp;&nbsp;
						<input type='checkbox' ".$isAH." value='yes' id='chkIsAH' name='chkIsAH' />  
						<strong>Adolescent Health</strong>&nbsp;&nbsp;&nbsp;
						<input type='checkbox' ".$isVH." value='yes' id='chkIsVH' name='chkIsVH' />  
						<strong>Viral Hepatitis</strong>
						<input type='checkbox' ".$isTB." value='yes' id='chkIsTB' name='chkIsTB' />  
						<strong>TB</strong>
			 		</td>
					
				</tr>

				<tr>
					<td>
						<strong>Sort Order:</strong>
						
			 		</td>
					<td><input maxlength='2' style='width:30px' type='text' value='".$editSortOrder."' id='txtSortOrder' name='txtSortOrder' /> Sort order is specific to project that the item is currently in.</td>
					
				</tr>
				
				<tr>
					<td><strong>Description/Abstract:</td>
					<td colspan=4><textarea maxlength='2000' cols='60' rows='2' type='text' id='txtDescription' name='txtDescription' />$editDescription</textarea></td>
				<tr>
				<tr>
					<td><strong>Authors:</td>
					<td colspan=4><textarea maxlength='2000' cols='60' rows='2' type='text' id='txtAuthors' name='txtAuthors' />$editAuthors</textarea></td>
				<tr>
				
				<tr>
					<td>
						<input type='checkbox' ".$isFutureWorkChecked." value='yes' id='chkIsFutureWork' name='chkIsFutureWork' />  
						<strong>Current Work</strong>
					</td>
					
					<td> 
						&nbsp;&nbsp;&nbsp;
						<strong>Fiscal Year:</strong> 
						<select name='ddlFiscalYear' id='ddlFiscalYear'>
							<option value='1'";
							if($currentFiscalYear == 1) 
								echo "selected";
							echo ">1</option>";
							
							echo "<option value='2'"; 
							if($currentFiscalYear == 2) 
								echo 'selected';
							echo ">2</option>";
							
							echo "<option value='3'";
							if($currentFiscalYear == 3) 
								echo "selected";
							echo ">3</option>";
							
							echo "<option value='4'";
							if($currentFiscalYear == 4) 
								echo "selected";
							echo ">4</option>";
							
							echo "<option value='5'";
							if($currentFiscalYear == 5) 
								echo "selected";
							echo ">5</option>
							
						</select>
			  		</td>
					
				</tr>
				
				<tr>
					<td>
						<input type='checkbox' ".$isChecked." value='yes' id='chkIsActive' name='chkIsActive' />  
						<strong>Active</strong>
			 		</td>
			 		<td> 
						&nbsp;&nbsp;&nbsp;
						<strong>Type:</strong> 
						<select name='ddlItemType' id='ddlItemType'>
							<option value='1'";
							if($currentitemType == 1) 
								echo "selected";
							echo ">Image</option>";
							
							echo "<option value='2'"; 
							if($currentitemType == 2) 
								echo 'selected';
							echo ">Video</option>";
							
							echo "<option value='3'";
							if($currentitemType == 3) 
								echo "selected";
							echo ">Website (URL)</option>";
							
							echo "<option value='4'";
							if($currentitemType == 4) 
								echo "selected";
							echo ">R-Shiney</option>";
							
							echo "<option value='5'";
							if($currentitemType == 5) 
								echo "selected";
							echo ">Manuscript</option>
							
						</select>
			  		</td>
				</tr>";

			 
			  echo "<tr>
			  			<td><strong>Cover Image:</strong></td>
						<td colspan=5>";
						  if ($_GET['action'] == "edit") {				  
							  echo "<a href='../files/".$editCIFilename."'>".$editCIFilename.
							  		"<input type='hidden' value='".$editCIFilename."' id='txtCIFileName' name='txtCIFileName' />
									</a>&nbsp;&nbsp;&nbsp;";
									if (strlen($editCIFilename)>0)
									echo "<input type='checkbox' value='yes' id='isRemoveCIFile' name='isRemoveCIFile' />Check to remove Cover Image file <b>or</b> Replace &nbsp;"; 
						  }
			  			echo "<input type='file' name='coverimage' size='25' /></td></tr>";
						
			echo "<tr>
			  	  	<td><strong>Image Detail:</strong></td>
					<td colspan=5>";
					if ($_GET['action'] == "edit") {				  
						echo "<a href='../files/".$editCIDFilename."'>".$editCIDFilename.
							 "<input type='hidden' value='".$editCIDFilename."' id='txtCIDFileName' name='txtCIDFileName' />
									</a>&nbsp;&nbsp;&nbsp;";
						if (strlen($editCIDFilename)>0)
							echo "<input type='checkbox' value='yes' id='isRemoveCIDFile' name='isRemoveCIDFile' />Check to remove Image Detail file <b>or</b> Replace &nbsp;"; 
					}
			  		echo "<input type='file' name='coverimagedetail' size='25' /></td>";
						
						
						
			  echo "<td><input type='hidden' value='".$editID."' id='txtID' name='txtID' />
				<input type='hidden' value='edit' id='saveAction' name='saveAction' /></td>
			  </tr>
			  
			  <tr><td colspan=7>
			  <div class='div2'>
			  	<table border=0>
					<tr>
			  			<td><strong>Journal:</strong></td>
			    		<td colspan='3'><input maxlength='100' style='width:300px' type='text' value='".$editJournalName."' id='txtJournalName' name='txtJournalName' /></td>
					<tr>
					
					<tr>
			  			<td><strong>External Journal URL:</strong></td>
			    		<td><input maxlength='100' style='width:300px' type='text' value='".$editJournalURL."' id='txtJournalURL' name='txtJournalURL' /></td>
				
						<td><strong>Date of Publication:</strong>
			    		<td><input maxlength='100' style='width:100px' type='text' value='".$editJournalDate."' id='txtJournalDate' name='txtJournalDate' /></td>
				   </tr>
				</table>		
			</div>
			  </td>
			<tr>
			
			<tr><td colspan=7>
			  <div class='divRShiney'>
			  	<table border=0>
					<tr>
			  			<td><strong>State HTML File:</strong></td>
			    		<td colspan='3'><input maxlength='100' style='width:300px' type='text' value='".$editStateHTMLFile."' id='txtStateHTMLFile' name='txtStateHTMLFile' /></td>
					<tr>
					
				</table>		
			</div>
			  </td>
			<tr>
			
			<tr><td colspan=7>
			  <div class='divWebsite'>
			  	<table border=0>
					<tr>
			  			<td><strong>Tool URL:</strong></td>
			    		<td colspan='3'><input maxlength='100' style='width:300px' type='text' value='".$editToolURL."' id='txtToolURL' name='txtToolURL' /></td>
					<tr>
					
				</table>		
			</div>
			  </td>
			<tr>
			  
			  <tr><td colspan='7'><hr></td></tr>
			  			  
				<tr><td colspan='7' align='right'><input type='submit' name='btnSubmitEdit' id='btnSubmitEdit' value='".$buttonLabel."'  /></td>
			  </tr>
			</table>
		<br>";
			
		echo "</div><br>";	
		
	
	$results = mysql_query("SELECT * FROM items order by isFutureWork, projectid, sortorder, createdate DESC")or die(mysql_error());
	$row_count=mysql_num_rows($results);
	//$row_users = mysql_fetch_array($results);
	
	echo "<table cellpadding='0' cellspacing='0'>
		<tr bgcolor='#33CC66'  align='center'>
			<td width='250px' ><strong>Title</strong></td>
			<td width='50px'><strong>Future Work</strong></td>
			<td width='200px'><strong>Project</strong></td>
			<td width='50px'><strong>Order</strong></td>
			<td width='70px'><strong>Type</strong></td>
			
			<td width='50px'><strong>Active</strong></td>
			<td width='250px'><strong>Action</strong></td>
		</tr>";
	while ($row_items = mysql_fetch_assoc($results)) {
		if ($row_items['isActive'] == 1)
			$isActiveToText = 'Yes';
		else
			$isActiveToText = 'No';
		
		if ($row_items['isFutureWork'] == 1)
			$isFutureWorkToText = 'Yes';
		else
			$isFutureWorkToText = 'No';
				
			
		//output a row here
		$sql = "SELECT name as projectName FROM projects where id=". $row_items['projectid'];
		
		$resultsProject = mysql_query($sql)or die(mysql_error());
		$row_project = mysql_fetch_array($resultsProject);
		
		$filetype = "";
		switch ($row_items['itemtype']) {
			case 1:
				$filetype = "Image";
				break;
			case 2:
				$filetype = "Video";
				break;
			case 3:
				$filetype = "Website";
				break;
			case 4:
				$filetype = "R-Shiney";
				break;
			case 5:
				$filetype = "Manuscript";
				break;
		};
		
		echo "<tr>";
		echo "<td>".($row_items['title'])."</td>";
		echo "<td align='center'>".$isFutureWorkToText."</td>";
		echo "<td align='center'>".($row_project['projectName'])."</td>";
		echo "<td align='center'>".($row_items['sortorder'])."</td>";
		echo "<td align='center'>".$filetype."</td>";
		echo "<td align='center'>".$isActiveToText."</td>";
		echo "<td align='center'><a href='items.php?action=edit&id=".($row_items['id'])."'>Edit</a>  <a href='item-files.php?i=".($row_items['id'])."'>Files</a>  <a href='item-collaborators.php?i=".($row_items['id'])."'>Collaborators</a>  <a href='item-authors.php?i=".($row_items['id'])."'>Authors</a> <a href='items.php?action=delete&id=".($row_items['id'])."'>Delete</a>  </td>";
		
		echo "</tr>";
	}
	
	echo "</table>";

?>
</p>
</div>

</fieldset>
</form>
</div>
</body>
</html>
