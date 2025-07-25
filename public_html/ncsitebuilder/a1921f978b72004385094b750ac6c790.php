<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Make A Stride - Home"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Home"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Make A Stride - Home"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<script src="js/a1921f978b72004385094b750ac6c790-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1921f978b72004385094b750ac6c790-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1921f978b72004385094b750ac6c790" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-horizontal"><div id="a191e95d27210003c28155325854d2a9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192206d77a900861249a6550e35923f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192206d77a901e1e8883a89a3670b9c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191d52bf95c002b1fd977e8d2d98b3d" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="4" data-wb-anim-entry-delay="0" title="Make A Stride"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://makeastride.com" title="Make A Stride - Home"><img loading="lazy" alt="Make A Stride" src="gallery_gen/66e61d32ac2357142d9026c9ae8756c5_552x346_fit.png?ts=1744826232"></a></div></div></div></div></div><div id="a192206d77a902949b3192281903e9a6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192206d77a903562cd3d184416cafa1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192206dfec6004ff02aed2a5899f9a6" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 1,
			'href' => '{{base_url}}',
			'name' => 'Home',
			'class' => 'wb_this_page_menu_item active',
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
			'class' => '',
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
)); ?><div class="clearfix"></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a1921f978b72004385094b750ac6c790" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19245e886820093ef15f547ae0a6751" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19245e88685006c848c4b228109c264" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-left wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="wb-layout-link" href="Services/#Digital-Transformation"></a><div class="wb_content wb-layout-vertical"><div id="a19245e88687002877948b4a09653ad3" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-zoom-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="0.8" data-wb-anim-entry-delay="0.2" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/DIGITAL-TRANSFORMATION-DIAL-iStock--Iurii-Motov--1391408732.png?ts=1744826232"><script type="text/javascript">
					$("#a19245e88687002877948b4a09653ad3").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('.wb_pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0, closeOnScroll: false })).init();
								$("#a19245e88687002877948b4a09653ad3").data("clicked", false);
							};
							img.src = "gallery\/DIGITAL-TRANSFORMATION-DIAL-iStock--Iurii-Motov--1391408732.png";
						}
					});
				</script></div></div></div><div id="a19245e8868c00ad27ab33be02e13dd4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19245e8868f00cabcb0ec23d2e4e2d3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Enterprise Architecture &amp;</span></h3>

<h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Digital Transformation</span></h3>
</div></div></div></div></div><div id="a19245e886970064b145ea27f0ada9a3" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-left wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0.4"><a class="wb-layout-link" href="Services/#Agile-Transformation"></a><div class="wb_content wb-layout-vertical"><div id="a19245e886990011d8903f27f5c449ae" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-pulse-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="1.2" data-wb-anim-entry-delay="0.6" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Agile_Transformation_1.png?ts=1744826232"><script type="text/javascript">
					$("#a19245e886990011d8903f27f5c449ae").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('.wb_pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0, closeOnScroll: false })).init();
								$("#a19245e886990011d8903f27f5c449ae").data("clicked", false);
							};
							img.src = "gallery\/Agile_Transformation_1.png";
						}
					});
				</script></div></div></div><div id="a19245e8869b00d114b9565cf9dd6cd8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19245e8869d0094c4bd3386fb156fb0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Agile Transformation</span></h3>
</div></div></div></div></div><div id="a19245e886a600588cc373d3687ab5be" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-right wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0.4"><a class="wb-layout-link" href="Services/#Project-Management"></a><div class="wb_content wb-layout-vertical"><div id="a19245e886a800d73931e0040bb4cb69" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-zoom-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="1.2" data-wb-anim-entry-delay="0.6" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Project_Mgmt_1.png?ts=1744826232"><script type="text/javascript">
					$("#a19245e886a800d73931e0040bb4cb69").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('.wb_pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0, closeOnScroll: false })).init();
								$("#a19245e886a800d73931e0040bb4cb69").data("clicked", false);
							};
							img.src = "gallery\/Project_Mgmt_1.png";
						}
					});
				</script></div></div></div><div id="a19245e886ab00dc86773e8000973a8a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19245e886ae00c8bf42ec213f41dd23" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Project Management</span></h3>
</div></div></div></div></div><div id="a19245e886b5003ed4a200dab5de4c0c" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-right wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="wb-layout-link" href="Services/#Technical-Program-Managment"></a><div class="wb_content wb-layout-vertical"><div id="a19245e886b70079b7d68da05726cf47" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-zoom-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="1.4" data-wb-anim-entry-delay="0.8" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Program_mgmt_1.png?ts=1744826232"><script type="text/javascript">
					$("#a19245e886b70079b7d68da05726cf47").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('.wb_pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0, closeOnScroll: false })).init();
								$("#a19245e886b70079b7d68da05726cf47").data("clicked", false);
							};
							img.src = "gallery\/Program_mgmt_1.png";
						}
					});
				</script></div></div></div><div id="a19245e886ba0061d6cbe965e1cf348d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19245e886bc005b9e25bae1746e2f00" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Program  Management</span></h3>
</div></div></div></div></div></div></div><div id="a192462e00e700a0f764e0d2ab1cd523" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a1921f9b77b4005f39815e1093903851" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1924e41015800f850672d189dfe83b3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1924e41015100b097ab422f439bc1d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1924e41b0e9008ad83a3274ce6bb924" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom24" style="text-align: justify;"><span style="color:#c8e1d9;">In today's rapidly evolving business landscape, the ability to adapt, innovate, and optimize processes is crucial.  Driving technology transformation, agile adoption, and effective program management within an organization present complex challenges, especially given the numerous steps required for successful execution. Each company's goals, culture, and market environment add layers of complexity, making one-size-fits-all solutions ineffective. </span></p>

<p class="wb-stl-custom24" style="text-align: justify;"><span style="color:#c8e1d9;">With over 25 years of industry experience, I offer a tailored approach, assessing your unique needs, collaborating on incremental improvements, identifying potential risks, and guiding you toward efficiently achieving your objectives. I help organizations "Make a Stride" toward lasting success through Digital Transformation, Agile Transformation, and Project &amp; Program Management consulting. If your company is looking to scale, transform, or optimize project execution, let's connect!</span></p>
</div></div></div></div></div><div id="a1921f9b77b401e48698b8223e59f320" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921f9b77b40258788abb04941f8e24" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Screenshot%202024-09-23%20at%209.09.29%E2%80%AFAM.png?ts=1744826232"></div></div></div><div id="a1921f9b77b403c65299dfb2fc64a543" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921f9b77b404e0d8ed3b071e262dd1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1921f9b77b406aa4c4b125200a49ec5" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#c8e1d9;"><span class="text-nocut">Aspire</span></span></h1>
</div><div id="a1921f9b77b407cc40125574bd849b45" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Aspiration and the why behind it is the first step in Achieving a goal.</strong> I can help you define a bold vision for your organization. Where do you want to be? What new markets or opportunities can you unlock? Together, we set ambitious goals, fueled by your desire for innovation and excellence.</span></p>
</div></div></div></div></div></div></div><div id="a1921f9b77b40992297f8f1211be91af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921f9b77b40b2ae3a3039f6733c17f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921f9b77b40c3654c5603abee5eb09" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1921f9b77b40e9fbc7955432b40762e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#c8e1d9;"><span class="text-nocut">Assess</span></span></h1>
</div><div id="a1921f9b77b40f26e55e783eac9853cb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Understand Strengths, Weaknesses, Opportunities, and Threats with Maturity Models.</strong> Dive deep into your current processes, technology, and team capabilities, identifying areas for improvement and pinpointing opportunities for efficiency.  Through a detailed analysis, we create a roadmap, that aligns with your business objectives.</span></p>
</div></div></div></div></div><div id="a1921f9b77b40a0fef488ae580832e1d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/bf2f1ec8f92a457eab51ecf390a8a58f_fit.png?ts=1744826232"></div></div></div></div></div><div id="a1921fa7353c00c9a7ed8f4439a826e1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921fa735400067462c6b7c566d70e5" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/a4d128d694f6f692b839cb82d57bbe68_fit.png?ts=1744826232"></div></div></div><div id="a1921fa735450069b6c08a447858f713" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921fa73546006a284906915a301fdb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1921fa73548002027532e0b16e909ac" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#c8e1d9;"><span class="text-nocut">Act</span></span></h1>
</div><div id="a1921fa7354b00adce6f297fd2f64915" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Set SMART goals, act, measure, rinse, and repeat.</strong> With a clear plan in place, I can lead the charge in implementing cutting-edge digital solutions, Agile methodologies, and robust project management frameworks.  The approach focuses on quick wins and scalable solutions to help your teams collaborate more effectively and deliver faster results. </span></p>
</div></div></div></div></div></div></div><div id="a1921fb30d1400c40e2f925b06d41565" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921fb30d1700dd0cbf283765228b71" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1921fb30d1900d225d49a4bb061a4ff" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1921fb30d1a00c897b57d34b23d8c66" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#ffffff;"><span class="text-nocut">Achieve!</span></span></h1>
</div><div id="a1921fb30d1e00840d9ac2a0e294a8f9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Learn, Celebrate, feel confident, and forge ahead.</strong> The end-to-end support ensures you not only meet but exceed your goals. Whether it's improving operational efficiency, driving digital innovation, or delivering projects on time and within budget, guarantee measurable outcomes and sustainable growth.</span></p>
</div></div></div></div></div><div id="a1921fb30d23003e4dd2b9f67badd278" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/d25a608e13546bd9aa92ba3549110ace_fit.png?ts=1744826232"></div></div></div></div></div></div></div></div></div><div id="wb_footer_a1921f978b72004385094b750ac6c790" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191f42b0ed500d9b266dca720cb409b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191f42b0ed50195b9a058e9c3af3b36" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed50221289b3fb2635bc896" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191f42b0ed505734464c5bbb88e3c9e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed5064e7ad7b605a83b3cf4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed507cc1e0404d70895ff7c" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/jkmakeastride/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.instagram.com/jkmakeastride/" title="MakeAStride - Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191f42b0ed50af969144a9707f2162d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed50b8e72860f3d1b08c758" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.linkedin.com/in/jkrishnan/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.linkedin.com/in/jkrishnan/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191f42b0ed5087f416ac89bbf11e9f2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191f42b0ed50935d1d65330cbbb7f7d" class="wb_element wb_element_picture" data-plugin="Picture" title="contact@makeastride.com"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="mailto:​​​​​​​contact@makeastride.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a19225635e09008992f1126082e559e6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a19225635e1000b6af8d1ce63db6b4e6" class="wb_element wb_element_picture" data-plugin="Picture" title="+1 408 442 1832"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="tel:+1 408 442 1832" title="Make A Stride - Phone Number"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="193.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a192bfd03c2f00ec63a7772d80fb7f92" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192bfd03c3300f092b2e7a4d46824c1" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/jkmakeastride/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://x.com/makeastride" title="MakeAStride - Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1024 1024" style="direction: ltr; color:#0c7463"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div></div></div></div></div><div id="a192208e5a0200af1cce47bbe0045413" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192208e5a0a00cb97af3d9e9417d0f5" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">© Make A Stride</span></p>
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
