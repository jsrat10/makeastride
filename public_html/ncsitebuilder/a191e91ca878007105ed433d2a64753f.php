<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Make A Stride - Blogs"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Blogs"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Blogs"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Make A Stride - Blogs"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Blogs"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : "{{base_url}}gallery_gen/66e61d32ac2357142d9026c9ae8756c5_fit.png"); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<script src="js/a191e91ca878007105ed433d2a64753f-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a191e91ca878007105ed433d2a64753f-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="apple-touch-icon" type="image/png" sizes="120x120" href="gallery/favicons/favicon-120x120.png"><link rel="icon" type="image/png" sizes="120x120" href="gallery/favicons/favicon-120x120.png"><link rel="apple-touch-icon" type="image/png" sizes="152x152" href="gallery/favicons/favicon-152x152.png"><link rel="icon" type="image/png" sizes="152x152" href="gallery/favicons/favicon-152x152.png"><link rel="apple-touch-icon" type="image/png" sizes="180x180" href="gallery/favicons/favicon-180x180.png"><link rel="icon" type="image/png" sizes="180x180" href="gallery/favicons/favicon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="gallery/favicons/favicon-192x192.png"><link rel="apple-touch-icon" type="image/png" sizes="60x60" href="gallery/favicons/favicon-60x60.png"><link rel="icon" type="image/png" sizes="60x60" href="gallery/favicons/favicon-60x60.png"><link rel="apple-touch-icon" type="image/png" sizes="76x76" href="gallery/favicons/favicon-76x76.png"><link rel="icon" type="image/png" sizes="76x76" href="gallery/favicons/favicon-76x76.png"><link rel="icon" type="image/png" href="gallery/favicons/favicon.png">
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a191e91ca878007105ed433d2a64753f" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-horizontal"><div id="a191e95d27210003c28155325854d2a9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192206d77a900861249a6550e35923f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192206d77a901e1e8883a89a3670b9c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191d52bf95c002b1fd977e8d2d98b3d" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="4" data-wb-anim-entry-delay="0" title="Make A Stride"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://makeastride.com" title="Make A Stride - Home"><img loading="lazy" alt="Make A Stride" src="gallery_gen/66e61d32ac2357142d9026c9ae8756c5_552x346_fit.png?ts=1744826234"></a></div></div></div></div></div><div id="a192206d77a902949b3192281903e9a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192206d77a903562cd3d184416cafa1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192206dfec6004ff02aed2a5899f9a6" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 1,
			'href' => '{{base_url}}',
			'name' => 'Home',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 2,
			'href' => 'About/',
			'name' => 'About',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 3,
			'href' => 'Services/',
			'name' => 'Services',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 4,
			'href' => 'javascript:void(0);',
			'popup' => 'wb_popup:Testimonials/?wbPopupMode=1;w=1000;h=800;',
			'name' => 'Testimonials',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 5,
			'href' => 'Blogs/',
			'name' => 'Blogs',
			'class' => 'wb_this_page_menu_item active',
			'children' => array()
		),
		(object) array(
			'id' => 6,
			'href' => 'Contact/',
			'name' => 'Contact',
			'class' => '',
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a191e91ca878007105ed433d2a64753f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191e91ca9d500e3c313ec7b2d3dea76" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-horizontal"><div id="a191e91ca9d60344b759f4998c59eb94" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a1922fbc80650037cde4c023917b8827" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922fbc805e003938997a10ef76fc5c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922fbc805e01bd0b8d4208662a506c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191e93c241e0024531666184031ef95" class="wb_element" data-plugin="Blog"><div class="wb-blog"><a name="wbb1" class="wb_anchor"></a><?php BlogElement::render(BlogModule::$blogNav, (object) array(
	'id' => 'a191e93c241e0024531666184031ef95',
	'anchor' => 'wbb1',
	'animationThumbnail' => false,
	'showTextFilter' => false,
	'disableAnchorNav' => false,
	'category' => null,
	'layout' => 'list',
	'itemsPerPage' => 4,
	'displayTitle' => true,
	'displayDate' => true,
	'displayShortText' => true,
	'shortTextLength' => 200,
	'useThumbnails' => true,
	'thumbWidth' => 300,
	'thumbHeight' => 300,
	'thumbPadding' => 20,
	'dateFormat' => '{YYYY}-{MM}-{DD} {H}:{m}'
)); ?></div></div></div></div><div id="a1922fbc805e025709a1eae3cf7bcf77" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922fc0b9ea00db73a7589ef073c113" class="wb_element wb-accordion" data-plugin="Accordion"><div class="wb-accordion-type-accordion"><div class="panel-group" id="a1922fc0b9ea00db73a7589ef073c113-list"><div class="panel panel-default in" data-item-id="0"><div class="panel-heading" id="a1922fc0b9ea00db73a7589ef073c113-item-heading0"><div class="panel-title left"><a class="wb-accordion-title " role="button" data-toggle="collapse" data-parent="#a1922fc0b9ea00db73a7589ef073c113-list" href="#a1922fc0b9ea00db73a7589ef073c113-item-0" expanded="true" aria-controls="a1922fc0b9ea00db73a7589ef073c113-item-0" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Digital Transformation</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse in" id="a1922fc0b9ea00db73a7589ef073c113-item-0" role="tabpanel" aria-labelledby="a1922fc0b9ea00db73a7589ef073c113-item-heading0"><div class="panel-body"><div id="a1922fc0b9ea01c42ec24c87ce040812" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922fd005c2008a3ed19f7586f4f2a9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li class="wb-stl-custom20">
<p class="wb-stl-custom20"><a data-_="Link" href="https://www.makeastride.com/Blogs/Developer-to-Tester-Ratio/#wbb1" title="Developer and Tester Ratio"><font color="#525252">Developer and Tester Ratio</font></a></p>
</li>
<li class="wb-stl-custom20">
<p class="wb-stl-custom20"><a data-_="Link" href="https://www.makeastride.com/Blogs/Data-Center-vs-Cloud-vs-Hybrid-Choosing-the-Best-Strategy-for-Your-Business/#wbb1"><font color="#525252">Data Center vs. Cloud vs. Hybrid</font></a></p>
</li>
<li class="wb-stl-custom20">
<p class="wb-stl-custom20"><a data-_="Link" href="https://makeastride.com/Blogs/Digital-Transformation-A-Strategic-Imperative-for-Business-Growth/#wbb1"><font color="#525252">Digital Transformation: A Strategic imperative for Business Growth</font></a></p>
</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="1"><div class="panel-heading" id="a1922fc0b9ea00db73a7589ef073c113-item-heading1"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922fc0b9ea00db73a7589ef073c113-list" href="#a1922fc0b9ea00db73a7589ef073c113-item-1" expanded="true" aria-controls="a1922fc0b9ea00db73a7589ef073c113-item-1" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Agile Transformation</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922fc0b9ea00db73a7589ef073c113-item-1" role="tabpanel" aria-labelledby="a1922fc0b9ea00db73a7589ef073c113-item-heading1"><div class="panel-body"><div id="a1922fc0b9ea03adda27ce708050a762" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922fd5d9fb0010f0f5b982e96e6361" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li class="wb-stl-custom20">
<p class="wb-stl-custom20"><a data-_="Link" href="https://www.makeastride.com/Blogs/Culture-and-Strategy/#wbb1" title="Culture and Strategy"><font color="#525252">Culture and Strategy</font></a></p>
</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="2"><div class="panel-heading" id="a1922fc0b9ea00db73a7589ef073c113-item-heading2"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922fc0b9ea00db73a7589ef073c113-list" href="#a1922fc0b9ea00db73a7589ef073c113-item-2" expanded="true" aria-controls="a1922fc0b9ea00db73a7589ef073c113-item-2" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Project Management</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922fc0b9ea00db73a7589ef073c113-item-2" role="tabpanel" aria-labelledby="a1922fc0b9ea00db73a7589ef073c113-item-heading2"><div class="panel-body"><div id="a1922fc0b9ea055556d56f9481ca7705" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922fc0b9ea06f72947d08f69d5c1f0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li> </li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="3"><div class="panel-heading" id="a1922fc0b9ea00db73a7589ef073c113-item-heading3"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922fc0b9ea00db73a7589ef073c113-list" href="#a1922fc0b9ea00db73a7589ef073c113-item-3" expanded="true" aria-controls="a1922fc0b9ea00db73a7589ef073c113-item-3" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Program Management</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922fc0b9ea00db73a7589ef073c113-item-3" role="tabpanel" aria-labelledby="a1922fc0b9ea00db73a7589ef073c113-item-heading3"><div class="panel-body"><div id="a1922fc13e47007c919fd48ded23e3d6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922fda288b0080f4f53d7e0d00aa6d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li class="wb-stl-custom20">
<p class="wb-stl-custom20"><a data-_="Link" href="https://www.makeastride.com/Blogs/Culture-and-Strategy/#wbb1" title="Culture and Strategy"><font color="#525252">Culture and Strategy</font></a></p>
</li>
</ul>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a191e91ca9d7009563b4194852d70e52" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="wb_footer_a191e91ca878007105ed433d2a64753f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191f42b0ed500d9b266dca720cb409b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191f42b0ed50195b9a058e9c3af3b36" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed50221289b3fb2635bc896" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191f42b0ed505734464c5bbb88e3c9e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed5064e7ad7b605a83b3cf4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed507cc1e0404d70895ff7c" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/jkmakeastride/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.instagram.com/jkmakeastride/" title="MakeAStride - Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191f42b0ed50af969144a9707f2162d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed50b8e72860f3d1b08c758" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.linkedin.com/in/jkrishnan/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.linkedin.com/in/jkrishnan/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191f42b0ed5087f416ac89bbf11e9f2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed50935d1d65330cbbb7f7d" class="wb_element wb_element_picture" data-plugin="Picture" title="contact@makeastride.com"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="mailto:​​​​​​​contact@makeastride.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a19225635e09008992f1126082e559e6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19225635e1000b6af8d1ce63db6b4e6" class="wb_element wb_element_picture" data-plugin="Picture" title="+1 408 442 1832"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="tel:+1 408 442 1832" title="Make A Stride - Phone Number"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="193.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a192bfd03c2f00ec63a7772d80fb7f92" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192bfd03c3300f092b2e7a4d46824c1" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/jkmakeastride/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://x.com/makeastride" title="MakeAStride - Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1024 1024" style="direction: ltr; color:#0c7463"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div></div></div></div></div><div id="a192208e5a0200af1cce47bbe0045413" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192208e5a0a00cb97af3d9e9417d0f5" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">© Make A Stride</span></p>
</div><div id="a192208e5a1600caaa68919305d71c44" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">2025</span></p>
</div></div></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div>
<div class="wb_pswp pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg" style="opacity: 0.7;"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous"></button>
			<button class="pswp__button pswp__button--arrow--right" title="Next"></button>
			<div class="pswp__caption"><div class="pswp__caption__center"></div></div>
		</div>
	</div>
</div>
</div>{{hr_out}}</body>
</html>
