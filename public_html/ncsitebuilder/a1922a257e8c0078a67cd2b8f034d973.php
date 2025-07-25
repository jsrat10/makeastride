<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home_JQuery"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home_JQuery"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Home,JQuery"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Home_JQuery"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Home_JQuery"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<script src="js/a1922a257e8c0078a67cd2b8f034d973-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1922a257e8c0078a67cd2b8f034d973-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="apple-touch-icon" type="image/png" sizes="120x120" href="gallery/favicons/favicon-120x120.png"><link rel="icon" type="image/png" sizes="120x120" href="gallery/favicons/favicon-120x120.png"><link rel="apple-touch-icon" type="image/png" sizes="152x152" href="gallery/favicons/favicon-152x152.png"><link rel="icon" type="image/png" sizes="152x152" href="gallery/favicons/favicon-152x152.png"><link rel="apple-touch-icon" type="image/png" sizes="180x180" href="gallery/favicons/favicon-180x180.png"><link rel="icon" type="image/png" sizes="180x180" href="gallery/favicons/favicon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="gallery/favicons/favicon-192x192.png"><link rel="apple-touch-icon" type="image/png" sizes="60x60" href="gallery/favicons/favicon-60x60.png"><link rel="icon" type="image/png" sizes="60x60" href="gallery/favicons/favicon-60x60.png"><link rel="apple-touch-icon" type="image/png" sizes="76x76" href="gallery/favicons/favicon-76x76.png"><link rel="icon" type="image/png" sizes="76x76" href="gallery/favicons/favicon-76x76.png"><link rel="icon" type="image/png" href="gallery/favicons/favicon.png">
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
	<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>	
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><script>
$(window).scroll(function() {
  if ($(this).scrollTop() > 10 && $(this).scrollTop() < 1250) {
    $(.Short_Services).fadeIn();
  } else {
    $(.Short_Services).fadeOut();
  }
}); 
</script><div id="wb_header_a1922a257e8c0078a67cd2b8f034d973" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-horizontal"></div></div><div id="wb_main_a1922a257e8c0078a67cd2b8f034d973" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0745ceba0861da1b2b70" class="wb_element Short_Services wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801e0836efb95d86d434298c" class="wb_element wb-anim-entry wb-anim wb-anim-zoom-in-none wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><a class="wb-layout-link" href="Services/#Digital-Transformation"></a><div class="wb_content wb-layout-vertical"><div id="a1922a25801e09356a87481713a3ebfb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/aaf62c5912a5190db9c941d50e1fa01c_266x200_fit.jpg?ts=1744826235"></div></div></div><div id="a1922a25801f0cb97c57fa6cd3e02847" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0ad1b4eb021a37e9c1f4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16">Digital Transformation</h3>
</div></div></div></div></div><div id="a1922a25801f0dfd847782a7e4548390" class="wb_element wb-anim-entry wb-anim wb-anim-zoom-in-none wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="1.2" data-wb-anim-entry-delay="0.6"><a class="wb-layout-link" href="Services/#Agile-Transformation"></a><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0b9551358088fa0a7f48" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/8bce170790d16f1e672a2d97d1f4569b_252x200_fit.png?ts=1744826235"></div></div></div><div id="a1922a25801f0eaee28b48fd8f3a145a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0c84820d3e057acfa588" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16">Agile Transformation</h3>
</div></div></div></div></div><div id="a1922a25802000c9b2b5142bb1419f72" class="wb_element wb-anim-entry wb-anim wb-anim-zoom-in-none wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="1.8" data-wb-anim-entry-delay="1.2"><a class="wb-layout-link" href="Services/#Project-Management"></a><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0d370da4dda53ab9f548" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/470306ace7d649c0d743b025eada7408_200x200_fit.png?ts=1744826235"></div></div></div><div id="a1922a25801f0fb9c310e73914a96139" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0e406ffc21f14922c4e9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16">Project Management</h3>
</div></div></div></div></div><div id="a1922a258020037570c25c5840998c12" class="wb_element wb-anim-entry wb-anim wb-anim-zoom-in-none wb-layout-element wb-layout-has-link" data-plugin="LayoutElement" data-wb-anim-entry-time="2.4" data-wb-anim-entry-delay="1.8"><a class="wb-layout-link" href="Services/#Technical-Program-Managment"></a><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0f56dfed4ad97e3c401e" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/f7ada1f974e41c4c695dffb59327c555_200x200_fit.jpg?ts=1744826235"></div></div></div><div id="a1922a25801f100ec7137f7d9b020dae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801f000a5c398fc5c3e515bc" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-custom16">Technical Program Management</h3>
</div></div></div></div></div></div></div><div id="a1922a25801f024c515d37a631a973aa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801d007d8df94ea94f725525" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801d01d4d0f50947fedee95c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Screenshot%202024-09-23%20at%209.09.29%E2%80%AFAM.png?ts=1744826235"></div></div></div><div id="a1922a25801f035b71ff763609c5285d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801d023ea2bcd3b3bdf33c5e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801d03e153bc083136dd8032" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span class="text-nocut">Aspire</span></h1>
</div><div id="a1922a25801f046b28bb97201c91216a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12">Aspiration and the why behind it is the first step in Achieving a goal</p>
</div></div></div></div></div></div></div><div id="a1922a25801f054ae7ac6e21af707ead" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801d04c7b411727e3d603ed9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801d056b416e424049d95252" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0098318a9269e1ee6d08" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span class="text-nocut">Assess</span></h1>
</div><div id="a1922a25801f065e1c8ac518f9b86579" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12">Understand Strengths, Weaknesses, Opportunities and Threats and Measure them.</p>
</div></div></div></div></div><div id="a1922a25801f07834ebf1dafdc075bf7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Screenshot%202024-09-23%20at%209.59.36%E2%80%AFAM.png?ts=1744826235"></div></div></div></div></div><div id="a1922a25801f1252825ae1ecbc2b23bd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801e01e2172311e54976eb7d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Screenshot%202024-09-23%20at%209.39.20%E2%80%AFAM.png?ts=1744826235"></div></div></div><div id="a1922a25801f082402561ae4d8bc10e3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801e02e5d4449690a1e0201d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e0349d8f974b3ba8a5830" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span class="text-nocut">Act</span></h1>
</div><div id="a1922a25801f096f735c18c892d19078" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12">Set SMART goals, act, measure, rinse and repeat </p>
</div></div></div></div></div></div></div><div id="a1922a258020027c060e3c94701eb741" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801e0416d40ab829ccb37d88" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922a25801e05171abb59dc3e88fb74" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922a25801e069f2bff890f1ea05d8e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-custom13"><span class="text-nocut">Achieve!</span></h1>
</div><div id="a1922a25801f0aa2d2e09955dcd3dfe6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom12">Learnings, Celebrate, feel confident, forge ahead</p>
</div></div></div></div></div><div id="a1922a25801f0be399b8d15f91e701a7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/Screenshot%202024-09-23%20at%209.35.33%E2%80%AFAM.png?ts=1744826235"></div></div></div></div></div></div></div></div></div><div id="wb_footer_a1922a257e8c0078a67cd2b8f034d973" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
