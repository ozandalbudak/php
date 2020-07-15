<?php
include ("../database.php");
include ("giris.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/sample.js"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Hoşgeldin, <strong>Admin</strong> [ <a href="cikis.php">Çıkış</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					
				</div>
			</div>
		</div>
		<div id="nav">

		</div>
	</div>
<?
include ("../database.php");
$id=(int)$_GET['id'];
$calistir = mysqli_query($db,"select * from firma order by id DESC LIMIT 1") or die("Hata Olustu! ".mysql_error());
$sor = mysql_fetch_assoc($calistir);
?>
	<div id="content">
		<div id="sidebar">
			<?php include("menu.php");?>
		<div id="main">		
			<div class="clear"></div>
			<div class="full_w">
			
			<div class="h_title">Firma Profili</div>
	<form action="firma-ayarlari-kaydediliyor.php" method="post">
		<p>

			<textarea cols="80" id="editor1" name="editor1" rows="10"><?echo .$sor["aciklama"]; ?></textarea>
			<script>

				CKEDITOR.replace( 'editor1', {
					/*
					 * Style sheet for the contents
					 */
					contentsCss: 'assets/outputxhtml/outputxhtml.css',

					/*
					 * Special allowed content rules for spans used by
					 * font face, size, and color buttons.
					 *
					 * Note: all rules have been written separately so
					 * it was possible to specify required classes.
					 */
					extraAllowedContent: 'span(!FontColor1);span(!FontColor2);span(!FontColor3);' +
						'span(!FontColor1BG);span(!FontColor2BG);span(!FontColor3BG);' +
						'span(!FontComic);span(!FontCourier);span(!FontTimes);' +
						'span(!FontSmaller);span(!FontLarger);span(!FontSmall);span(!FontBig);span(!FontDouble)',

					/*
					 * Core styles.
					 */
					coreStyles_bold: {
						element: 'span',
						attributes: { 'class': 'Bold' }
					},
					coreStyles_italic: {
						element: 'span',
						attributes: { 'class': 'Italic' }
					},
					coreStyles_underline: {
						element: 'span',
						attributes: { 'class': 'Underline' }
					},
					coreStyles_strike: {
						element: 'span',
						attributes: { 'class': 'StrikeThrough' },
						overrides: 'strike'
					},
					coreStyles_subscript: {
						element: 'span',
						attributes: { 'class': 'Subscript' },
						overrides: 'sub'
					},
					coreStyles_superscript: {
						element: 'span',
						attributes: { 'class': 'Superscript' },
						overrides: 'sup'
					},

					/*
					 * Font face.
					 */

					// List of fonts available in the toolbar combo. Each font definition is
					// separated by a semi-colon (;). We are using class names here, so each font
					// is defined by {Combo Label}/{Class Name}.
					font_names: 'Comic Sans MS/FontComic;Courier New/FontCourier;Times New Roman/FontTimes',

					// Define the way font elements will be applied to the document. The "span"
					// element will be used. When a font is selected, the font name defined in the
					// above list is passed to this definition with the name "Font", being it
					// injected in the "class" attribute.
					// We must also instruct the editor to replace span elements that are used to
					// set the font (Overrides).
					font_style: {
						element: 'span',
						attributes: { 'class': '#(family)' },
						overrides: [
							{
								element: 'span',
								attributes: {
									'class': /^Font(?:Comic|Courier|Times)$/
								}
							}
						]
					},

					/*
					 * Font sizes.
					 */
					fontSize_sizes: 'Smaller/FontSmaller;Larger/FontLarger;8pt/FontSmall;14pt/FontBig;Double Size/FontDouble',
					fontSize_style: {
						element: 'span',
						attributes: { 'class': '#(size)' },
						overrides: [
							{
								element: 'span',
								attributes: {
									'class': /^Font(?:Smaller|Larger|Small|Big|Double)$/
								}
							}
						]
					} ,

					/*
					 * Font colors.
					 */
					colorButton_enableMore: false,

					colorButton_colors: 'FontColor1/FF9900,FontColor2/0066CC,FontColor3/F00',
					colorButton_foreStyle: {
						element: 'span',
						attributes: { 'class': '#(color)' },
						overrides: [
							{
								element: 'span',
								attributes: {
									'class': /^FontColor(?:1|2|3)$/
								}
							}
						]
					},

					colorButton_backStyle: {
						element: 'span',
						attributes: { 'class': '#(color)BG' },
						overrides: [
							{
								element: 'span',
								attributes: {
									'class': /^FontColor(?:1|2|3)BG$/
								}
							}
						]
					},

					/*
					 * Indentation.
					 */
					indentClasses: [ 'Indent1', 'Indent2', 'Indent3' ],

					/*
					 * Paragraph justification.
					 */
					justifyClasses: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyFull' ],

					/*
					 * Styles combo.
					 */
					stylesSet: [
						{ name: 'Strong Emphasis', element: 'strong' },
						{ name: 'Emphasis', element: 'em' },

						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },

						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },

						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					]
				});

			</script>
		</p>
		<p>
			<input type="submit" value="Kaydet">
		</p>
	</form>


		</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="footer">

	</div>
</div>

</body>
</html>
