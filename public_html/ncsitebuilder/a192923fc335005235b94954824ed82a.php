<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Testimonials_new"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Testimonials_new"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Testimonials,new"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Testimonials_new"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Testimonials_new"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<script src="js/a192923fc335005235b94954824ed82a-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a192923fc335005235b94954824ed82a-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a192923fc335005235b94954824ed82a" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-horizontal"><div id="a1929240643c009c6b9209874a3a4563" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240643d00014277bbf0531b3f9a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240643d01092295944e3e533dee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1929240643e008f501973feab0b87de" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="4" data-wb-anim-entry-delay="0" title="Make A Stride"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://makeastride.com" title="Make A Stride - Home"><img loading="lazy" alt="Make A Stride" src="gallery_gen/66e61d32ac2357142d9026c9ae8756c5_552x346_fit.png?ts=1744826235"></a></div></div></div></div></div><div id="a1929240643e010712c4b4b548981444" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1929240643f001036870a10a1e64b19" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240643f012bf79574f954281eed" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
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
			'href' => 'Blogs/',
			'name' => 'Blogs',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 5,
			'href' => 'Contact/',
			'name' => 'Contact',
			'class' => '',
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a192923fc335005235b94954824ed82a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4ae06b93e52d1109d737263" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ae0787c56bf9af3fa1a175" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-left wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="wb-layout-link" href="Services/#Digital-Transformation"></a><div class="wb_content wb-layout-vertical"><div id="a192923fc4ae08d8fc6219c463549d66" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-zoom-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="0.8" data-wb-anim-entry-delay="0.2" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/DIGITAL-TRANSFORMATION-DIAL-iStock--Iurii-Motov--1391408732.png?ts=1744826235"><script type="text/javascript">
					$("#a192923fc4ae08d8fc6219c463549d66").on("click touchstart touchend touchmove", function(e) {
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
								$("#a192923fc4ae08d8fc6219c463549d66").data("clicked", false);
							};
							img.src = "gallery\/DIGITAL-TRANSFORMATION-DIAL-iStock--Iurii-Motov--1391408732.png";
						}
					});
				</script></div></div></div><div id="a192923fc4b0078da6bab7e163b5ffe0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4ae0948f8fb93acb7381cab" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Digital Transformation</span></h3>
</div></div></div></div></div><div id="a192923fc4b008ba969927a82e24506c" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-left wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0.4"><a class="wb-layout-link" href="Services/#Agile-Transformation"></a><div class="wb_content wb-layout-vertical"><div id="a192923fc4af00b434568c5621b94db2" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-pulse-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="1.2" data-wb-anim-entry-delay="0.6" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Agile_Transformation_1.png?ts=1744826235"><script type="text/javascript">
					$("#a192923fc4af00b434568c5621b94db2").on("click touchstart touchend touchmove", function(e) {
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
								$("#a192923fc4af00b434568c5621b94db2").data("clicked", false);
							};
							img.src = "gallery\/Agile_Transformation_1.png";
						}
					});
				</script></div></div></div><div id="a192923fc4b00937fe01c124000d7d1d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4af01c0576d5cb153031ac1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Agile Transformation</span></h3>
</div></div></div></div></div><div id="a192923fc4b104aa6fdaa38026150759" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-right wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="1" data-wb-anim-entry-delay="0.4"><a class="wb-layout-link" href="Services/#Project-Management"></a><div class="wb_content wb-layout-vertical"><div id="a192923fc4af02a128bac83713432a74" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-zoom-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="1.2" data-wb-anim-entry-delay="0.6" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Project_Mgmt_1.png?ts=1744826235"><script type="text/javascript">
					$("#a192923fc4af02a128bac83713432a74").on("click touchstart touchend touchmove", function(e) {
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
								$("#a192923fc4af02a128bac83713432a74").data("clicked", false);
							};
							img.src = "gallery\/Project_Mgmt_1.png";
						}
					});
				</script></div></div></div><div id="a192923fc4b00ae7d1ae2ae4bf84758c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4af036730655d859854e4e1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Project Management</span></h3>
</div></div></div></div></div><div id="a192923fc4b107aef6133e4ff8649a45" class="wb_element wb-anim-entry wb-anim wb-anim-slide-in-right wb-anim wb-anim-pulse-in wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="wb-layout-link" href="Services/#Technical-Program-Managment"></a><div class="wb_content wb-layout-vertical"><div id="a192923fc4af04ed3c4769c60d584526" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none wb-anim wb-anim-zoom-in wb-prevent-layout-click" data-plugin="Picture" data-wb-anim-entry-time="1.4" data-wb-anim-entry-delay="0.8" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Program_mgmt_1.png?ts=1744826235"><script type="text/javascript">
					$("#a192923fc4af04ed3c4769c60d584526").on("click touchstart touchend touchmove", function(e) {
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
								$("#a192923fc4af04ed3c4769c60d584526").data("clicked", false);
							};
							img.src = "gallery\/Program_mgmt_1.png";
						}
					});
				</script></div></div></div><div id="a192923fc4b00bfbacc6ad73e2a332fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4af05cb67a1e73c0162ccc3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16"><span style="color:#c8e1d9;">Program  Management</span></h3>
</div></div></div></div></div></div></div><div id="a192923fc4b10015e276b798372c458c" class="wb_element wb-elm-orient-horizontal" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a192923fc4b1029f9f35262cbbbec9b4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4af0611bf129c1c55a756c2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4af07c234a4b2fcf7781411" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4af0816df4a7ff92f07a3de" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom24" style="text-align: justify;"><span style="color:#c8e1d9;">In today's rapidly evolving business landscape, the ability to adapt, innovate, and optimize processes is crucial.  Driving technology transformation, agile adoption, and effective program management within an organization present complex challenges, especially given the numerous steps required for successful execution. Each company's goals, culture, and market environment add layers of complexity, making one-size-fits-all solutions ineffective. </span></p>

<p class="wb-stl-custom24" style="text-align: justify;"><span style="color:#c8e1d9;">With over 25 years of industry experience, I offer a tailored approach, assessing your unique needs, collaborating on incremental improvements, identifying potential risks, and guiding you toward efficiently achieving your objectives. I help organizations "Make a Stride" toward lasting success through Digital Transformation, Agile Transformation, and Project &amp; Program Management consulting.</span></p>
</div></div></div></div></div><div id="a192923fc4af0af965f02544bc441807" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ad00998d806911bbddb223" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Screenshot%202024-09-23%20at%209.09.29%E2%80%AFAM.png?ts=1744826235"></div></div></div><div id="a192923fc4af0b06e59227398b58c634" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ad012cd35909d8d890d22c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4ad02f9bf4e29bdc103aa01" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#c8e1d9;"><span class="text-nocut">Aspire</span></span></h1>
</div><div id="a192923fc4b000513d9d9ce26515ffcd" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Aspiration and the why behind it is the first step in Achieving a goal.</strong> I can help you define a bold vision for your organization. Where do you want to be? What new markets or opportunities can you unlock? Together, we set ambitious goals, fueled by your desire for innovation and excellence.</span></p>
</div></div></div></div></div></div></div><div id="a192923fc4b10396a57632308d03b80a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ad03cdac697748d93b22fa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ad0428c1aa19860cb35f8e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4ad057e420600cf9937071e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#c8e1d9;"><span class="text-nocut">Assess</span></span></h1>
</div><div id="a192923fc4b001ff4b4a8dfb6f0834c9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Understand Strengths, Weaknesses, Opportunities, and Threats with Maturity Models.</strong> Dive deep into your current processes, technology, and team capabilities, identifying areas for improvement and pinpointing opportunities for efficiency.  Through a detailed analysis, we create a roadmap, that aligns with your business objectives.</span></p>
</div></div></div></div></div><div id="a192923fc4b002ee832609eb0395f51c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/bf2f1ec8f92a457eab51ecf390a8a58f_fit.png?ts=1744826235"></div></div></div></div></div><div id="a192923fc4b106e024267bdcf223cc38" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ae00d4aa278d5bbbef00ec" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/a4d128d694f6f692b839cb82d57bbe68_fit.png?ts=1744826235"></div></div></div><div id="a192923fc4b003d50ce36fe76faf2c9a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ae015e73e7a20e81d7946e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4ae02871a7cff7c851a7b50" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#c8e1d9;"><span class="text-nocut">Act</span></span></h1>
</div><div id="a192923fc4b0049c2dd9fb71ac005f5b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Set SMART goals, act, measure, rinse, and repeat.</strong> With a clear plan in place, I can lead the charge in implementing cutting-edge digital solutions, Agile methodologies, and robust project management frameworks.  The approach focuses on quick wins and scalable solutions to help your teams collaborate more effectively and deliver faster results. </span></p>
</div></div></div></div></div></div></div><div id="a192923fc4b1085c3168b171ff998d12" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ae037d80b0a74c8001cf61" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192923fc4ae0470097b3675c178c3da" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192923fc4ae0584e072e9f8ee3cb9b9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span style="color:#ffffff;"><span class="text-nocut">Achieve!</span></span></h1>
</div><div id="a192923fc4b005e1076ff63499ee851c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12" style="text-align: justify;"><span style="color:#c8e1d9;"><strong>Learn, Celebrate, feel confident, and forge ahead.</strong> The end-to-end support ensures you not only meet but exceed your goals. Whether it's improving operational efficiency, driving digital innovation, or delivering projects on time and within budget, guarantee measurable outcomes and sustainable growth.</span></p>
</div></div></div></div></div><div id="a192923fc4b006113818577d3cb99a81" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/d25a608e13546bd9aa92ba3549110ace_fit.png?ts=1744826235"></div></div></div></div></div></div></div></div></div><div id="wb_footer_a192923fc335005235b94954824ed82a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1929240645700ff741e91e1b371ee44" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192924064570181818ceb4b6d785af1" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a192924064580089a7057dbac9b33914" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1929240645801b20a51205fe6b403da" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240645900d084eaf3762a2933d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240645a00ab0c057d1c548f069e" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/jkmakeastride/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.instagram.com/jkmakeastride/" title="MakeAStride - Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a1929240645a01f088586e1cdca4a7d0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240645b009948f9b1423406fb15" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.linkedin.com/in/jkrishnan/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.linkedin.com/in/jkrishnan/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a1929240645b0140319bb02c3121d6ac" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240645c00ddc4410dbb4d511e33" class="wb_element wb_element_picture" data-plugin="Picture" title="contact@makeastride.com"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="mailto:​​​​​​​contact@makeastride.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a1929240645c01a85f205474f25d4fc4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240645c028f07a383b785c3f2b8" class="wb_element wb_element_picture" data-plugin="Picture" title="+1 408 442 1832"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="tel:+1 408 442 1832" title="Make A Stride - Phone Number"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="193.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div></div></div><div id="a1929240645d00d9f3c6b4d6ac56d114" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1929240645d018eb0d4b65ae7d2d70f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">© Make A Stride</span></p>
</div><div id="a1929240645d022fdf63e7470f777e8a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">2025</span></p>
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
