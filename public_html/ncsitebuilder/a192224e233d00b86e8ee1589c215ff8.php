<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Services"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Services"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Services"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Services"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Services"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<script src="js/a192224e233d00b86e8ee1589c215ff8-bundle.js?ts=20250416205711" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a192224e233d00b86e8ee1589c215ff8-bundle.css?ts=20250416205711" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a192224e233d00b86e8ee1589c215ff8" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-horizontal"><div id="a1922250b22300d31f8b7e85dc38ddee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922250b223016084caebf194c3107e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1922250b224006139074ba820575ae5" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922250b2250002757c1db189419522" class="wb_element wb_element_picture" data-plugin="Picture" title="Make A Stride"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="https://makeastride.com"><img loading="lazy" alt="Make A Stride" src="gallery_gen/66e61d32ac2357142d9026c9ae8756c5_552x346_fit.png?ts=1744826232"></a></div></div></div></div></div><div id="a1922250b22501fa4a9afbf890e101ba" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922250b22600628ae0941050b4fdf0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a194ada8adb400b79099992fcd81a4c3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a194ada860c900c5a39c6ab26c3c8b99" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom29" style="text-align: right;">Striding Ahead in Agile, Digital, Project and Program Management Solutions!</h5>
</div><div id="a1929249bb3500562d0143ccc225d3e2" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
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
			'class' => 'wb_this_page_menu_item active',
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
)); ?><div class="clearfix"></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a192224e233d00b86e8ee1589c215ff8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192224e25420a4b484f3a8462504e9c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922efb352b00e51eba6b9cc0170b13" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="a1963fbd872500eae25379deea45efe8" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-custom29">Ready to scale smart and lead with agility? Let’s talk about how I can support your transformation journey.</h5>

<h5 class="wb-stl-custom29">👉 <a data-_="Link" href="mailto:contact@makeastride.com">Contact Me</a></h5>

<p class="wb-stl-custom30">This text should be replaced with information about you and your business</p>
</div><div id="a1922587f45b003955135ccb99170fa4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="Digital-Transformation" class="wb_anchor"></a><div class="wb_content wb-layout-horizontal"><div id="a1922587f45b01c586190d6444abf6e2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192258815fd0027d9bc7555cda9fcab" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="2" data-wb-anim-entry-delay="0" title="Digital Transformation"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Digital Transformation" src="gallery/DIGITAL-TRANSFORMATION-DIAL-iStock--Iurii-Motov--1391408732.png?ts=1744826232"></div></div></div><div id="a19225e6c68f00c8a6ee06da0eb7d2b2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom23" style="text-align: justify;"><span style="color:#c8e1d9;"><u><strong>Enterprise Architecture &amp; Digital Transformation:</strong></u> </span><strong>Leaping into the future.</strong> Provide a roadmap for a successful digital transformation journey. <span style="color:#c8e1d9;">Help Integrate and implement digital technologies into all aspects of a business to enhance operations, improve customer experience, and drive innovation. Streamline processes, increase efficiency, and enable better decision-making</span> by aligning business needs with technology solutions.</p>
</div></div></div><div id="a1922587f45b021152c24f64be1fa911" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922587f45b04d687e59a8997db79b7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922588b7c800a120ac80fccb80346f" class="wb_element wb-accordion" data-plugin="Accordion"><div class="wb-accordion-type-accordion"><div class="panel-group" id="a1922588b7c800a120ac80fccb80346f-list"><div class="panel panel-default " data-item-id="0"><div class="panel-heading" id="a1922588b7c800a120ac80fccb80346f-item-heading0"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922588b7c800a120ac80fccb80346f-list" href="#a1922588b7c800a120ac80fccb80346f-item-0" expanded="true" aria-controls="a1922588b7c800a120ac80fccb80346f-item-0" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Fractional CTO &amp; Strategic Advisor</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922588b7c800a120ac80fccb80346f-item-0" role="tabpanel" aria-labelledby="a1922588b7c800a120ac80fccb80346f-item-heading0"><div class="panel-body"><div id="a1963fb5b72f004cb1d96f587329819f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1963fb5b73200f83ca89339dbda6d79" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>
<p>Act as a trusted executive partner for CTO/CPO roles</p>
</li>
<li>
<p>Define and align technology roadmaps with business outcomes</p>
</li>
<li>
<p>Guide product, IT and engineering teams toward long-term scalability</p>
</li>
</ul>

<p class="wb-stl-custom19"> </p>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="1"><div class="panel-heading" id="a1922588b7c800a120ac80fccb80346f-item-heading1"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922588b7c800a120ac80fccb80346f-list" href="#a1922588b7c800a120ac80fccb80346f-item-1" expanded="true" aria-controls="a1922588b7c800a120ac80fccb80346f-item-1" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Technology Optimization</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922588b7c800a120ac80fccb80346f-item-1" role="tabpanel" aria-labelledby="a1922588b7c800a120ac80fccb80346f-item-heading1"><div class="panel-body"><div id="a1922588b7f100c05b975d8193d9dfd6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922588b7f900acc0171608c405d23f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>
<p>Assess Transformation Maturity</p>
</li>
<li>Step-by-step Transformation journey</li>
<li>
<p>Maximize technology investment</p>
</li>
<li>Increase Efficiency</li>
<li>
<p>Transition legacy products to cloud-native and SaaS</p>
</li>
<li>
<p>Integrate AI-driven workflows to enhance product innovation</p>
</li>
<li>
<p>Design scalable, secure multi-tenant architectures</p>
</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="2"><div class="panel-heading" id="a1922588b7c800a120ac80fccb80346f-item-heading2"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922588b7c800a120ac80fccb80346f-list" href="#a1922588b7c800a120ac80fccb80346f-item-2" expanded="true" aria-controls="a1922588b7c800a120ac80fccb80346f-item-2" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Strategy Development</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922588b7c800a120ac80fccb80346f-item-2" role="tabpanel" aria-labelledby="a1922588b7c800a120ac80fccb80346f-item-heading2"><div class="panel-body"><div id="a1922588b7d300b4dd60e7755ca62473" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922588b7de003229d15f0a623d2090" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Digital Roadmap Creation</li>
<li>Business Model Innovation </li>
<li>Organizational Change Management</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="3"><div class="panel-heading" id="a1922588b7c800a120ac80fccb80346f-item-heading3"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922588b7c800a120ac80fccb80346f-list" href="#a1922588b7c800a120ac80fccb80346f-item-3" expanded="true" aria-controls="a1922588b7c800a120ac80fccb80346f-item-3" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Process Optimization</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922588b7c800a120ac80fccb80346f-item-3" role="tabpanel" aria-labelledby="a1922588b7c800a120ac80fccb80346f-item-heading3"><div class="panel-body"><div id="a1922588b80b00de11d8016bdb833be0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922588b81300b212426118c31fab3f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Standardizing Workflows</li>
<li>
<p>Reduce costs while improving resilience and performance</p>
</li>
<li>Risk Management</li>
<li>
<p>Define KPIs and implement data-driven reporting frameworks</p>
</li>
<li>
<p>Transform team structures to align with agile delivery</p>
</li>
<li>
<p>Leadership mentoring and cross-functional collaboration facilitation</p>
</li>
</ul>

<p class="wb-stl-custom19"> </p>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="4"><div class="panel-heading" id="a1922588b7c800a120ac80fccb80346f-item-heading4"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922588b7c800a120ac80fccb80346f-list" href="#a1922588b7c800a120ac80fccb80346f-item-4" expanded="true" aria-controls="a1922588b7c800a120ac80fccb80346f-item-4" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Customer Experience Alignment</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922588b7c800a120ac80fccb80346f-item-4" role="tabpanel" aria-labelledby="a1922588b7c800a120ac80fccb80346f-item-heading4"><div class="panel-body"><div id="a1922588b82100c4c6457d2c817ca01f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922588b82800817d1f944354ded30d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Outside-In approach</li>
<li>Customer Journey mapping</li>
<li>Omnichannel experience</li>
</ul>

<p class="wb-stl-custom19"> </p>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1922589cb3d00fe5363148a94e11d91" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="Agile-Transformation" class="wb_anchor"></a><div class="wb_content wb-layout-horizontal"><div id="a1922589cb3d01497bce13e866208adb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922589cb3d03c90445866f500c40e8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192258a25ea008367c667e65aea7307" class="wb_element wb-accordion" data-plugin="Accordion"><div class="wb-accordion-type-accordion"><div class="panel-group" id="a192258a25ea008367c667e65aea7307-list"><div class="panel panel-default in" data-item-id="0"><div class="panel-heading" id="a192258a25ea008367c667e65aea7307-item-heading0"><div class="panel-title left"><a class="wb-accordion-title " role="button" data-toggle="collapse" data-parent="#a192258a25ea008367c667e65aea7307-list" href="#a192258a25ea008367c667e65aea7307-item-0" expanded="true" aria-controls="a192258a25ea008367c667e65aea7307-item-0" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Agile Optimization</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse in" id="a192258a25ea008367c667e65aea7307-item-0" role="tabpanel" aria-labelledby="a192258a25ea008367c667e65aea7307-item-heading0"><div class="panel-body"><div id="a192258a25f2004013c254c8e1309e66" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192258a25fa0039fa53159c7caf43c7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Agile assessments and maturity mapping</li>
<li>Scrum, Kanban, SAFe, and custom frameworks</li>
<li>Step-by-step Transformation journey</li>
<li>Agile Governance &amp; Metrics</li>
<li>Maximize investment</li>
<li>Increase Efficiency</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="1"><div class="panel-heading" id="a192258a25ea008367c667e65aea7307-item-heading1"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a192258a25ea008367c667e65aea7307-list" href="#a192258a25ea008367c667e65aea7307-item-1" expanded="true" aria-controls="a192258a25ea008367c667e65aea7307-item-1" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Agile Training &amp; Coaching</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a192258a25ea008367c667e65aea7307-item-1" role="tabpanel" aria-labelledby="a192258a25ea008367c667e65aea7307-item-heading1"><div class="panel-body"><div id="a192258a260a001e207feeada6fcbb71" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922eeff32b008f008c8022c4f9088c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Coaching leaders, product owners, and teams for sustainable agility</li>
<li>Scrum</li>
<li>Kanban</li>
<li>Scrumban</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="2"><div class="panel-heading" id="a192258a25ea008367c667e65aea7307-item-heading2"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a192258a25ea008367c667e65aea7307-list" href="#a192258a25ea008367c667e65aea7307-item-2" expanded="true" aria-controls="a192258a25ea008367c667e65aea7307-item-2" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Organizational Change Management</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a192258a25ea008367c667e65aea7307-item-2" role="tabpanel" aria-labelledby="a192258a25ea008367c667e65aea7307-item-heading2"><div class="panel-body"><div id="a192258a261e008b1d6b43e393311c45" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922ef0bd8200ba47c4542984e65cc4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Change Readiness</li>
<li>
<p>Step-by-step Transformation journey</p>
</li>
<li>Maximize investment</li>
<li>Increase Efficiency</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="3"><div class="panel-heading" id="a192258a25ea008367c667e65aea7307-item-heading3"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a192258a25ea008367c667e65aea7307-list" href="#a192258a25ea008367c667e65aea7307-item-3" expanded="true" aria-controls="a192258a25ea008367c667e65aea7307-item-3" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Agile Scaling</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a192258a25ea008367c667e65aea7307-item-3" role="tabpanel" aria-labelledby="a192258a25ea008367c667e65aea7307-item-heading3"><div class="panel-body"><div id="a192258a262f00dc527de0d432761b98" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922ef0ef7300d8f80defcc06a5e19d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Assess Transformation Maturity</li>
<li>Step-by-step Transformation journey</li>
<li>Maximize investment</li>
<li>Increase Efficiency</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="4"><div class="panel-heading" id="a192258a25ea008367c667e65aea7307-item-heading4"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a192258a25ea008367c667e65aea7307-list" href="#a192258a25ea008367c667e65aea7307-item-4" expanded="true" aria-controls="a192258a25ea008367c667e65aea7307-item-4" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>DevSecOps</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a192258a25ea008367c667e65aea7307-item-4" role="tabpanel" aria-labelledby="a192258a25ea008367c667e65aea7307-item-heading4"><div class="panel-body"><div id="a192258a2661002214c5e12b2975a0f1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922ef170c2004c351343128e57667f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Assess Transformation Maturity</li>
<li>Step-by-step Transformation journey</li>
<li>Maximize investment</li>
<li>Increase Efficiency</li>
</ul>
</div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a1922589cb3d04f4f955be6a88a5cc3d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922589fbd400b4089a5933add56bdd" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="2" data-wb-anim-entry-delay="0" title="Agile Transformation"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Agile Transformation" src="gallery/Agile_Transformation_1.png?ts=1744826232"></div></div></div><div id="a19225e72b71009505e8aab34d5e820d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom23" style="text-align: justify;"><span style="color:#c8e1d9;"><u><strong>Agile Transformation:</strong></u> </span><strong>Striding towards efficiency.</strong> <span style="color:#c8e1d9;">Help shift from traditional project management methodologies to Agile practices. Guide teams through adopting Agile frameworks like Scrum or Kanban, fostering a more flexible, iterative, and customer-centric approach to project delivery.</span></p>
</div></div></div></div></div><div id="a192259043c800c25dbb781caa694c9b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="Project-Management" class="wb_anchor"></a><div class="wb_content wb-layout-horizontal"><div id="a192259043d20060860ae92da1eecfa9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192259110f400daaec2fc5430f1421c" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="2" data-wb-anim-entry-delay="0" title="Project Management"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Project Management" src="gallery/Project_Mgmt_1.png?ts=1744826232"></div></div></div><div id="a19225e799e900d3fed237adddc658b7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom23" style="text-align: justify;"><span style="color:#c8e1d9;"><u><strong>Project Management:</strong></u> </span><strong>Navigating strides with precision.</strong> <span style="color:#c8e1d9;">Help with streamlining processes, and successful execution of projects including scope definition, timeline creation, resource allocation, risk assessment, stakeholder communication, and performance tracking to ensure the project delivers expected results efficiently and effectively with optimized project outcomes.</span></p>
</div></div></div><div id="a192259043ed0046d112a19c944b7d17" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192259043f600390cd7ef863a95e45c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922591553f007f12c19b7853942b9c" class="wb_element wb-accordion" data-plugin="Accordion"><div class="wb-accordion-type-accordion"><div class="panel-group" id="a1922591553f007f12c19b7853942b9c-list"><div class="panel panel-default " data-item-id="0"><div class="panel-heading" id="a1922591553f007f12c19b7853942b9c-item-heading0"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922591553f007f12c19b7853942b9c-list" href="#a1922591553f007f12c19b7853942b9c-item-0" expanded="true" aria-controls="a1922591553f007f12c19b7853942b9c-item-0" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Project Planning &amp; Strategy Development</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922591553f007f12c19b7853942b9c-item-0" role="tabpanel" aria-labelledby="a1922591553f007f12c19b7853942b9c-item-heading0"><div class="panel-body"><div id="a1922591554800c2355e5d444477f9a3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f0d70650040cd0f44ad2990a964" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li><span style="background-color: rgba(0, 0, 0, 0);">Define Goals, Activities and Deliverables</span></li>
<li><span style="background-color: rgba(0, 0, 0, 0);">Short and Long term solutions</span></li>
<li><span style="background-color: rgba(0, 0, 0, 0);">Maximize investment</span></li>
<li>Increase Efficiency</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="1"><div class="panel-heading" id="a1922591553f007f12c19b7853942b9c-item-heading1"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922591553f007f12c19b7853942b9c-list" href="#a1922591553f007f12c19b7853942b9c-item-1" expanded="true" aria-controls="a1922591553f007f12c19b7853942b9c-item-1" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Project Execution &amp; Monitoring</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922591553f007f12c19b7853942b9c-item-1" role="tabpanel" aria-labelledby="a1922591553f007f12c19b7853942b9c-item-heading1"><div class="panel-body"><div id="a1922591556100550f72c09d0efc3124" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f0d8f7c00658f19afa9837dfeff" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Breakdown incremental value add deliverables with Milestones</li>
<li>Resource and Budgeting</li>
<li>Communication and Collaboration</li>
<li>Monitoring and Reporting</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="2"><div class="panel-heading" id="a1922591553f007f12c19b7853942b9c-item-heading2"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922591553f007f12c19b7853942b9c-list" href="#a1922591553f007f12c19b7853942b9c-item-2" expanded="true" aria-controls="a1922591553f007f12c19b7853942b9c-item-2" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Risk Management &amp; Mitigation</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922591553f007f12c19b7853942b9c-item-2" role="tabpanel" aria-labelledby="a1922591553f007f12c19b7853942b9c-item-heading2"><div class="panel-body"><div id="a192259155770063ac4b434564bb9f12" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f0dbbf700b2ce491203e7142228" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Risk Analysis</li>
<li>Risk Monitoring</li>
<li>Risk Avoidance/Reduction</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="3"><div class="panel-heading" id="a1922591553f007f12c19b7853942b9c-item-heading3"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922591553f007f12c19b7853942b9c-list" href="#a1922591553f007f12c19b7853942b9c-item-3" expanded="true" aria-controls="a1922591553f007f12c19b7853942b9c-item-3" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Resource Management</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922591553f007f12c19b7853942b9c-item-3" role="tabpanel" aria-labelledby="a1922591553f007f12c19b7853942b9c-item-heading3"><div class="panel-body"><div id="a19225915593004f4d6e2d6159697e5a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f0c1752006ee8afdba76b098c08" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Resource Allocation</li>
<li>Resource Planning/Forecasting</li>
<li>Efficient Resource Utilization</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="4"><div class="panel-heading" id="a1922591553f007f12c19b7853942b9c-item-heading4"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a1922591553f007f12c19b7853942b9c-list" href="#a1922591553f007f12c19b7853942b9c-item-4" expanded="true" aria-controls="a1922591553f007f12c19b7853942b9c-item-4" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Project Closing &amp; Evaluation</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a1922591553f007f12c19b7853942b9c-item-4" role="tabpanel" aria-labelledby="a1922591553f007f12c19b7853942b9c-item-heading4"><div class="panel-body"><div id="a192259155ab00bedc181215b90ec7a7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f0dd6b2001aadfa592d89209276" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Post-mortem Analysis</li>
<li>Ideas to Celebrate</li>
<li>Reports &amp; Documentation</li>
</ul>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19225cc2bfa00c3e127439bf9ae80fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="Technical-Program-Managment" class="wb_anchor"></a><div class="wb_content wb-layout-horizontal"><div id="a19225cc2bfe0040f803dbef3794a091" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19225cc2c1000a8f6661fa71c7f39e4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19225cdcf6b00125b4ba452718d9b9d" class="wb_element wb-accordion" data-plugin="Accordion"><div class="wb-accordion-type-accordion"><div class="panel-group" id="a19225cdcf6b00125b4ba452718d9b9d-list"><div class="panel panel-default " data-item-id="0"><div class="panel-heading" id="a19225cdcf6b00125b4ba452718d9b9d-item-heading0"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a19225cdcf6b00125b4ba452718d9b9d-list" href="#a19225cdcf6b00125b4ba452718d9b9d-item-0" expanded="true" aria-controls="a19225cdcf6b00125b4ba452718d9b9d-item-0" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Program Strategy &amp; Governance</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a19225cdcf6b00125b4ba452718d9b9d-item-0" role="tabpanel" aria-labelledby="a19225cdcf6b00125b4ba452718d9b9d-item-heading0"><div class="panel-body"><div id="a19225cdcf6f00346c41e4ef904da6c6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f18fe950071b81d67a6c49adc2a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Stakeholders engagement</li>
<li>Strategic Alignment - vision, goals, objectives, deliverables, and benefits</li>
<li><span style="background-color: rgba(0, 0, 0, 0);">Maximize investment</span></li>
<li>Increase Efficiency</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default in" data-item-id="1"><div class="panel-heading" id="a19225cdcf6b00125b4ba452718d9b9d-item-heading1"><div class="panel-title left"><a class="wb-accordion-title " role="button" data-toggle="collapse" data-parent="#a19225cdcf6b00125b4ba452718d9b9d-list" href="#a19225cdcf6b00125b4ba452718d9b9d-item-1" expanded="true" aria-controls="a19225cdcf6b00125b4ba452718d9b9d-item-1" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Program Planning &amp; Roadmap Development</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse in" id="a19225cdcf6b00125b4ba452718d9b9d-item-1" role="tabpanel" aria-labelledby="a19225cdcf6b00125b4ba452718d9b9d-item-heading1"><div class="panel-body"><div id="a19225cdcf79000910b98ff6e9933657" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f1e51ff00c7925837318747332a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li><span style="background-color: rgba(0, 0, 0, 0);">Program Integration &amp; Alignment</span></li>
<li>Breakdown incremental value add deliverables</li>
<li>Milestones</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="2"><div class="panel-heading" id="a19225cdcf6b00125b4ba452718d9b9d-item-heading2"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a19225cdcf6b00125b4ba452718d9b9d-list" href="#a19225cdcf6b00125b4ba452718d9b9d-item-2" expanded="true" aria-controls="a19225cdcf6b00125b4ba452718d9b9d-item-2" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Risk Management &amp; Issue Resolution</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a19225cdcf6b00125b4ba452718d9b9d-item-2" role="tabpanel" aria-labelledby="a19225cdcf6b00125b4ba452718d9b9d-item-heading2"><div class="panel-body"><div id="a19225cdcf8300930c2cd8f990b50a0a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f18c466005ef2d6f5e6e2c90f46" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Risk Analysis</li>
<li>Risk Monitoring</li>
<li>Risk Avoidance/Reduction</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="3"><div class="panel-heading" id="a19225cdcf6b00125b4ba452718d9b9d-item-heading3"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a19225cdcf6b00125b4ba452718d9b9d-list" href="#a19225cdcf6b00125b4ba452718d9b9d-item-3" expanded="true" aria-controls="a19225cdcf6b00125b4ba452718d9b9d-item-3" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Resource &amp; Budget Management</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a19225cdcf6b00125b4ba452718d9b9d-item-3" role="tabpanel" aria-labelledby="a19225cdcf6b00125b4ba452718d9b9d-item-heading3"><div class="panel-body"><div id="a19225cdcf950012c34c4af2fc48222e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f205d6c00d481411fba94b03604" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Collect, Analyze resource usage</li>
<li>Align Strategic Objectives and allocate resources</li>
<li>Forecast Resource Utilization</li>
<li>
<p>Budget Management</p>
</li>
</ul>
</div></div></div></div></div></div><div class="panel panel-default " data-item-id="4"><div class="panel-heading" id="a19225cdcf6b00125b4ba452718d9b9d-item-heading4"><div class="panel-title left"><a class="wb-accordion-title collapsed" role="button" data-toggle="collapse" data-parent="#a19225cdcf6b00125b4ba452718d9b9d-list" href="#a19225cdcf6b00125b4ba452718d9b9d-item-4" expanded="true" aria-controls="a19225cdcf6b00125b4ba452718d9b9d-item-4" onclick="var $this=$(this);$this.parents('.panel-group').find('.panel').removeClass('in');$this.hasClass('collapsed') &amp;&amp; $this.parents('.panel').addClass('in');"><div>Performance Monitoring &amp; Reporting</div><span class="glyphicon pull-right"></span></a></div></div><div class="panel-collapse collapse " id="a19225cdcf6b00125b4ba452718d9b9d-item-4" role="tabpanel" aria-labelledby="a19225cdcf6b00125b4ba452718d9b9d-item-heading4"><div class="panel-body"><div id="a19225cdcf8b004466dfae56676a797d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1922f23065c0059dabdcee19f20cc91" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>Select Performance Indicators</li>
<li>Collect, Analize, Report KPIs</li>
<li>Track lagging and leading indicators</li>
</ul>
</div></div></div></div></div></div></div></div></div></div></div></div></div><div id="a19225cc2c6500e7d0a70979f06e98a9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19225cd0cce005f923d33a69a857057" class="wb_element wb_element_picture wb-anim-entry wb-anim wb-anim-fade-in-none" data-plugin="Picture" data-wb-anim-entry-time="2" data-wb-anim-entry-delay="0" title="Program Management"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="Program Management" src="gallery/Program_mgmt_1.png?ts=1744826232"></div></div></div><div id="a19225e7dc7800979dc24b33287ddd66" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom23" style="text-align: justify;"><span style="color:#c8e1d9;"><u><strong>Technical Program Management:</strong></u> </span><strong>Driving Progress, One Step at a Time. </strong><span style="color:#c8e1d9;">Help define and align program objectives with the organization's strategic goals to ensure all projects contribute to the overall business vision.</span></p>
</div></div></div></div></div></div></div></div></div><div id="wb_footer_a192224e233d00b86e8ee1589c215ff8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192259eccbd00d7c71ba0a2fb179169" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192259ecccc0091206264ff6d5032dd" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a192259eccd80082625361a717467642" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192259ecce500a13cef18f661e1e376" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192259eccf000e1e5e8318157435a7b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192259ecd0a0080fc5ab0e6d538ad35" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.instagram.com/jkmakeastride/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.instagram.com/jkmakeastride/" title="MakeAStride - Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a192259ecd20003bc7122287f22f6894" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192259ecd3900e2465555379bec63fa" class="wb_element wb_element_picture" data-plugin="Picture" title="https://www.linkedin.com/in/jkrishnan/"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.linkedin.com/in/jkrishnan/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a192259ecd5000f06493cdc0a9503538" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192259ecd5a004282c8c67dba78e96d" class="wb_element wb_element_picture" data-plugin="Picture" title="contact@makeastride.com"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="mailto:​​​​​​​contact@makeastride.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a192259ecd6e00ca64e9b72d647b503d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192259ecd83009c51a75533087fb4ef" class="wb_element wb_element_picture" data-plugin="Picture" title="+1 408 442 1832"><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="tel:+1 408 442 1832" title="Make A Stride - Phone Number"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0c7463"><text x="193.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div></div></div><div id="a192259ecd97002861736148b09f10b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192259ecd9f007ce13796bff93025e9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">© Make A Stride</span></p>
</div><div id="a192259ecdaf000137cf4b14368aaf0c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom10"><span style="color:#0c7463;">2025</span></p>
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
			</script></div></div></div></div>{{hr_out}}</body>
</html>
