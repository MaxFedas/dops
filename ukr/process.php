<?php require __DIR__ .'/../geo/locate.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>dops.bz</title>
		
		<?php require 'layout/head.php'; ?>
	</head>
	
	<body>		
		<?php require 'layout/header.php'; ?>
		
		<!-- Sections -->
		<section class="wrapper">			
			<!-- Section Progress -->
			<div class="section process centrize" id="s-process">
				<div class="vertical-center">
					<div class="wrap">
						<div class="lt">
							<div class="proc_tabs">
								<div class="proc_tab" id="proc-tab-1">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_1" xmlns="http://www.w3.org/2000/svg" width="291" height="192" viewBox="0 0 291 192">
											  <g id="fadein-left-3">
												<path fill="#00133E" d="M285.267,124.752c-7.537,12.617-23.877,16.734-36.493,9.196c-12.617-7.539-16.734-23.878-9.196-36.494 c7.539-12.617,23.877-16.734,36.494-9.196S292.805,112.136,285.267,124.752"/>
												<circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="262.422" cy="111.103" r="26.612"/>
											  </g>
											  <g id="fadein-left-2">
												<path fill="#00133E" d="M275.267,124.752c-7.537,12.617-23.877,16.734-36.493,9.196c-12.617-7.539-16.734-23.878-9.196-36.494 c7.539-12.617,23.877-16.734,36.494-9.196S282.805,112.136,275.267,124.752"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="252.422" cy="111.103" r="26.612"/>
											  </g>
											  <g id="fadein-left-1">
												<path fill="#00133E" d="M265.267,124.752c-7.537,12.617-23.877,16.734-36.493,9.196c-12.617-7.539-16.734-23.878-9.196-36.494 c7.538-12.617,23.877-16.734,36.494-9.196S272.805,112.136,265.267,124.752"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="242.422" cy="111.103" r="26.612"/>
												<g fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <line x1="253.566" y1="92.452" x2="251.13" y2="96.53"/>
												  <line x1="237.113" y1="90.035" x2="238.274" y2="94.641"/>
												  <line x1="223.771" y1="99.959" x2="227.849" y2="102.396"/>
												  <line x1="221.354" y1="116.412" x2="225.96" y2="115.251"/>
												  <line x1="231.278" y1="129.755" x2="233.714" y2="125.677"/>
												  <line x1="247.73" y1="132.172" x2="246.57" y2="127.565"/>
												  <line x1="261.073" y1="122.247" x2="256.996" y2="119.811"/>
												  <line x1="263.49" y1="105.794" x2="258.885" y2="106.955"/>
												  <path d="M245.463,115.25c-1.342,2.245-4.25,2.979-6.496,1.637s-2.979-4.25-1.637-6.496s9.061-5.929,9.061-5.929 S246.805,113.004,245.463,115.25z"/>
												</g>
											  </g>
											  <g id="fadein-3">
												<g id="rotate-2">
												  <circle fill="none" stroke="#143C81" stroke-width="1.25" stroke-miterlimit="10" stroke-dasharray="4,4" cx="141.902" cy="74.43" r="60.696"/>
												</g>
											  </g>
											  <g id="fadein-up-1">
												<g>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M233.676,179.204V61.417c0-3.3-2.7-6-6-6H46.822c-3.3,0-6,2.7-6,6v117.492"/>
												</g>
												<g>
												  <path fill="#00133E" d="M233.676,179.204V61.417c0-3.3-2.7-6-6-6H46.822c-3.3,0-6,2.7-6,6v117.492"/>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M233.676,179.204V61.417c0-3.3-2.7-6-6-6H46.822c-3.3,0-6,2.7-6,6v117.492"/>
												</g>
												<g>
												  <path fill="#00133E" d="M222.41,179.204V71.558c0-3.3-2.7-6-6-6H58.088c-3.3,0-6,2.7-6,6v107.375"/>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M222.41,179.204V71.558c0-3.3-2.7-6-6-6H58.088c-3.3,0-6,2.7-6,6v107.375"/>
												</g>
												<g>
												  <path fill="#061239" d="M251.179,187.764c-0.123,1.298-1.057,2.36-2.36,2.36H25.68c-1.304,0-2.238-1.063-2.361-2.36 c-0.148-1.57-1.033-4.628-1.182-6.198c-0.122-1.298,1.058-2.362,2.362-2.362h225.5c1.304,0,2.484,1.064,2.361,2.362 C252.212,183.136,251.327,186.193,251.179,187.764"/>
												</g>
												<g>
												  <path fill="#061239" d="M157.788,179.104L157.788,179.104c0,3.206-2.05,5.805-4.578,5.805h-31.922 c-2.529,0-4.578-2.599-4.578-5.805"/>
												</g>
												<g>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M251.179,187.764c-0.123,1.298-1.057,2.36-2.36,2.36H25.68c-1.304,0-2.238-1.063-2.361-2.36c-0.148-1.57-1.033-4.628-1.182-6.198 c-0.122-1.298,1.058-2.362,2.362-2.362h225.5c1.304,0,2.484,1.064,2.361,2.362C252.212,183.136,251.327,186.193,251.179,187.764z"/>
												</g>
												<g>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M157.788,179.104L157.788,179.104c0,3.206-2.05,4.624-4.578,4.624h-31.922c-2.529,0-4.578-1.418-4.578-4.624"/>
												</g>
											  </g>
											  <g id="draw-1" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<line x1="96.582" y1="87.478" x2="206.034" y2="87.478"/>
												<line x1="96.582" y1="97.479" x2="167.939" y2="97.479"/>
												<line x1="96.582" y1="117.479" x2="206.034" y2="117.479"/>
												<line x1="96.582" y1="127.479" x2="167.939" y2="127.479"/>
												<line x1="96.582" y1="147.479" x2="206.034" y2="147.479"/>
												<line x1="96.582" y1="157.479" x2="167.939" y2="157.479"/>
											  </g>
											  <g id="zoomin-3">
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M82.659,161.674h-15.75c-1.031,0-1.875-0.845-1.875-1.875v-15.048c0-1.031,0.844-1.875,1.875-1.875h15.75 c1.031,0,1.875,0.844,1.875,1.875v15.048C84.534,160.829,83.69,161.674,82.659,161.674z"/>
											  </g>
											  <g id="zoomin-2">
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M82.659,131.674h-15.75c-1.031,0-1.875-0.845-1.875-1.875v-15.048c0-1.031,0.844-1.875,1.875-1.875h15.75 c1.031,0,1.875,0.844,1.875,1.875v15.048C84.534,130.829,83.69,131.674,82.659,131.674z"/>
											  </g>
											  <g id="zoomin-1">
												<path fill="#005BFD" d="M82.659,101.674h-15.75c-1.031,0-1.875-0.844-1.875-1.875V84.751c0-1.032,0.844-1.875,1.875-1.875h15.75 c1.031,0,1.875,0.843,1.875,1.875v15.047C84.534,100.83,83.69,101.674,82.659,101.674"/>
												<path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M82.659,101.674h-15.75c-1.031,0-1.875-0.844-1.875-1.875V84.751c0-1.032,0.844-1.875,1.875-1.875h15.75 c1.031,0,1.875,0.843,1.875,1.875v15.047C84.534,100.83,83.69,101.674,82.659,101.674z"/>
											  </g>
											  <g id="fadein-1">
												<g id="rotate-1">
												  <rect x="36.165" y="130.377" transform="rotate(-139.664 38.89 134.344)" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5.453" height="7.948"/>
												  <rect x="36.165" y="130.377" transform="rotate(-139.664 38.89 134.344)" fill="#00133E" width="5.453" height="7.948"/>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.703,166.137c-1.114,1.313-0.953,3.278,0.358,4.393l5.938,5.042c1.312,1.113,3.278,0.952,4.392-0.358l25.067-31.929 c1.114-1.313,0.953-3.278-0.358-4.393l-3.561-3.023c-1.312-1.114-3.278-0.953-4.392,0.357L2.703,166.137z"/>
												  <path fill="#00133E" d="M2.703,166.137c-1.114,1.313-0.953,3.278,0.358,4.393l5.938,5.042c1.312,1.113,3.278,0.952,4.392-0.358 l25.067-31.929c1.114-1.313,0.953-3.278-0.358-4.393l-3.561-3.023c-1.312-1.114-3.278-0.953-4.392,0.357L2.703,166.137z"/>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M56.295,66.116c-20.502,6.508-31.846,28.405-25.338,48.907c6.509,20.502,28.406,31.846,48.908,25.338 c20.502-6.509,31.846-28.404,25.337-48.908C98.694,70.951,76.797,59.606,56.295,66.116z M60.066,77.995 c13.941-4.426,28.831,3.288,33.257,17.23c4.426,13.941-3.288,28.831-17.229,33.257c-13.942,4.426-28.832-3.288-33.258-17.229 C38.411,97.311,46.124,82.42,60.066,77.995z"/>
												  <path fill="#00133E" d="M56.295,66.116c-20.502,6.508-31.846,28.405-25.338,48.907c6.509,20.502,28.406,31.846,48.908,25.338 c20.502-6.509,31.846-28.404,25.337-48.908C98.694,70.951,76.797,59.606,56.295,66.116 M60.066,77.995 c13.941-4.426,28.831,3.288,33.257,17.23c4.426,13.941-3.288,28.831-17.229,33.257c-13.942,4.426-28.832-3.288-33.258-17.229 C38.411,97.311,46.124,82.42,60.066,77.995"/>
												</g>
											  </g>
											  <g id="zoomin-4">
												<path fill="#005BFD" d="M164.534,22.001c0,11.115-9.01,20.125-20.125,20.125s-20.125-9.01-20.125-20.125 c0-11.115,9.01-20.125,20.125-20.125S164.534,10.886,164.534,22.001"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="144.409" cy="22.001" r="20.125"/>
												<path fill="#005BFD" d="M149.147,16.314c0,2.393-1.94,4.333-4.333,4.333c-2.394,0-4.333-1.94-4.333-4.333s1.939-4.333,4.333-4.333 C147.207,11.981,149.147,13.921,149.147,16.314"/>
												<circle fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="144.814" cy="16.314" r="4.333"/>
												<path fill="#005BFD" d="M136.845,33.053v-1.29c0-4.383,3.586-7.969,7.97-7.969s7.97,3.586,7.97,7.969v1.29"/>
												<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M136.845,33.053v-1.29c0-4.383,3.586-7.969,7.97-7.969s7.97,3.586,7.97,7.969v1.29"/>
											  </g>
											  <g id="fadein-2">
												<path fill="#00133E" d="M113.034,31.776c0,7.525-6.1,13.625-13.625,13.625c-7.525,0-13.625-6.1-13.625-13.625 c0-7.525,6.1-13.625,13.625-13.625C106.934,18.151,113.034,24.25,113.034,31.776"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="99.409" cy="31.776" r="13.625"/>
												<path fill="#00133E" d="M102.617,27.925c0,1.62-1.313,2.933-2.933,2.933c-1.621,0-2.934-1.313-2.934-2.933 c0-1.62,1.313-2.933,2.934-2.933C101.304,24.992,102.617,26.306,102.617,27.925"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="99.684" cy="27.925" r="2.934"/>
												<path fill="#00133E" d="M94.288,39.258v-0.873c0-2.968,2.428-5.396,5.396-5.396c2.967,0,5.395,2.428,5.395,5.396v0.873"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M94.288,39.258v-0.873c0-2.968,2.428-5.396,5.396-5.396c2.967,0,5.395,2.428,5.395,5.396v0.873"/>
												<path fill="#00133E" d="M203.034,31.776c0,7.525-6.101,13.625-13.625,13.625c-7.525,0-13.625-6.1-13.625-13.625 c0-7.525,6.1-13.625,13.625-13.625C196.934,18.151,203.034,24.25,203.034,31.776"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="189.409" cy="31.776" r="13.625"/>
												<path fill="#00133E" d="M192.617,27.925c0,1.62-1.313,2.933-2.934,2.933c-1.621,0-2.934-1.313-2.934-2.933 c0-1.62,1.313-2.933,2.934-2.933C191.304,24.992,192.617,26.306,192.617,27.925"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="189.684" cy="27.925" r="2.934"/>
												<path fill="#00133E" d="M184.288,39.258v-0.873c0-2.968,2.428-5.396,5.396-5.396s5.396,2.428,5.396,5.396v0.873"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M184.288,39.258v-0.873c0-2.968,2.428-5.396,5.396-5.396s5.396,2.428,5.396,5.396v0.873"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Аналіз бізнес стратегії</div>
											<div class="desc">
												<p>Ми почнемо з короткого, проте детального обговорення вашого бізнесу чи ідеї для того, щоб зрозуміти бачення кінцевого продукту, а також зберемо всі вимоги, визначимо ціну і терміни розробки проекту.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-2">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_5" xmlns="http://www.w3.org/2000/svg" width="187" height="190" viewBox="0 0 187 190">
											  <g id="fadein-1" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
												<g id="rotate-1">
												  <path d="M5.839,98.99 c-0.133-1.982-0.201-3.983-0.201-6"/>
												  <path stroke-dasharray="11.511,11.511" d="M180.104,110.398c-8.08,40.314-43.68,70.686-86.373,70.686c-44.686,0-81.601-33.272-87.323-76.394"/>
												  <path d="M181.824,92.991 c0,2.016-0.068,4.016-0.201,6"/>
												  <path stroke-miterlimit="10" d="M181.824,92.991c0-48.652-39.44-88.093-88.093-88.093S5.638,44.339,5.638,92.991"/>
												  <path stroke-miterlimit="10" d="M5.639,92.991c0-48.652,39.44-88.093,88.093-88.093c48.652,0,88.093,39.441,88.093,88.093"/>
												</g>
												<circle stroke-miterlimit="10" cx="93.731" cy="92.991" r="77.827"/>
											  </g>
											  <g id="zoomin-2">
												<path fill="#005BFD" d="M185.382,95.186c0,1.965-1.593,3.559-3.558,3.559s-3.559-1.594-3.559-3.559s1.594-3.558,3.559-3.558 S185.382,93.221,185.382,95.186"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="181.824" cy="95.186" r="3.558"/>
											  </g>
											  <g id="zoomin-1">
												<path fill="#005BFD" d="M9.197,95.186c0,1.965-1.593,3.559-3.558,3.559s-3.558-1.594-3.558-3.559s1.593-3.558,3.558-3.558 S9.197,93.221,9.197,95.186"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="5.639" cy="95.186" r="3.558"/>
											  </g>
											  <g id="fadein-up-3">
												<path fill="#005BFD" d="M86.67,84.007H30.927c-1.258,0-2.288-1.03-2.288-2.289V4.352c0-1.259,1.03-2.289,2.288-2.289H86.67 c1.259,0,2.289,1.03,2.289,2.289v77.366C88.959,82.977,87.93,84.007,86.67,84.007"/>
												<path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M86.67,84.007H30.927c-1.258,0-2.288-1.03-2.288-2.289V4.352c0-1.259,1.03-2.289,2.288-2.289H86.67c1.259,0,2.289,1.03,2.289,2.289 v77.366C88.959,82.977,87.93,84.007,86.67,84.007z"/>
											  </g>
											  <g id="fadein-up-1-2">
												<path fill="#00133E" d="M75.915,188.98H39.418c-1.259,0-2.288-1.03-2.288-2.289V114.53c0-1.259,1.029-2.289,2.288-2.289h36.497 c1.259,0,2.289,1.03,2.289,2.289v72.161C78.204,187.95,77.174,188.98,75.915,188.98"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M75.915,188.98H39.418c-1.259,0-2.288-1.03-2.288-2.289V114.53c0-1.259,1.029-2.289,2.288-2.289h36.497 c1.259,0,2.289,1.03,2.289,2.289v72.161C78.204,187.95,77.174,188.98,75.915,188.98z"/>
											  </g>
											  <g id="fadein-up-1-1">
												<path fill="#00133E" d="M81.01,183.319H34.324c-1.259,0-2.289-1.03-2.289-2.289v-72.161c0-1.259,1.03-2.289,2.289-2.289H81.01 c1.259,0,2.289,1.03,2.289,2.289v72.161C83.299,182.289,82.269,183.319,81.01,183.319"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M81.01,183.319H34.324c-1.259,0-2.289-1.03-2.289-2.289v-72.161c0-1.259,1.03-2.289,2.289-2.289H81.01 c1.259,0,2.289,1.03,2.289,2.289v72.161C83.299,182.289,82.269,183.319,81.01,183.319z"/>
											  </g>
											  <g id="fadein-up-2-2">
												<path fill="#00133E" d="M144.978,188.98H108.48c-1.26,0-2.289-1.03-2.289-2.289V114.53c0-1.259,1.029-2.289,2.289-2.289h36.497 c1.259,0,2.289,1.03,2.289,2.289v72.161C147.267,187.95,146.236,188.98,144.978,188.98"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M144.978,188.98H108.48c-1.26,0-2.289-1.03-2.289-2.289V114.53c0-1.259,1.029-2.289,2.289-2.289h36.497 c1.259,0,2.289,1.03,2.289,2.289v72.161C147.267,187.95,146.236,188.98,144.978,188.98z"/>
											  </g>
											  <g id="fadein-up-2-1">
												<path fill="#00133E" d="M150.072,183.319h-46.687c-1.259,0-2.289-1.03-2.289-2.289v-72.161c0-1.259,1.03-2.289,2.289-2.289h46.687 c1.259,0,2.289,1.03,2.289,2.289v72.161C152.361,182.289,151.331,183.319,150.072,183.319"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M150.072,183.319h-46.687c-1.259,0-2.289-1.03-2.289-2.289v-72.161c0-1.259,1.03-2.289,2.289-2.289h46.687 c1.259,0,2.289,1.03,2.289,2.289v72.161C152.361,182.289,151.331,183.319,150.072,183.319z"/>
											  </g>
											  <g id="fadein-up-2">
												<path fill="#00133E" d="M154.601,177.203H98.856c-1.258,0-2.288-1.03-2.288-2.289V97.548c0-1.259,1.03-2.289,2.288-2.289h55.744 c1.259,0,2.289,1.03,2.289,2.289v77.366C156.89,176.173,155.859,177.203,154.601,177.203"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M154.601,177.203H98.856c-1.258,0-2.288-1.03-2.288-2.289V97.548c0-1.259,1.03-2.289,2.288-2.289h55.744 c1.259,0,2.289,1.03,2.289,2.289v77.366C156.89,176.173,155.859,177.203,154.601,177.203z"/>
											  </g>
											  <g id="fadein-up-4">
												<path fill="#00133E" d="M154.601,84.006H98.856c-1.258,0-2.288-1.03-2.288-2.289V4.352c0-1.259,1.03-2.289,2.288-2.289h55.744 c1.259,0,2.289,1.03,2.289,2.289v77.366C156.89,82.977,155.859,84.006,154.601,84.006"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M154.601,84.006H98.856c-1.258,0-2.288-1.03-2.288-2.289V4.352c0-1.259,1.03-2.289,2.288-2.289h55.744 c1.259,0,2.289,1.03,2.289,2.289v77.366C156.89,82.977,155.859,84.006,154.601,84.006z"/>
											  </g>
											  <g id="fadein-up-1">
												<path fill="#00133E" d="M86.67,177.203H30.927c-1.258,0-2.288-1.03-2.288-2.289V97.548c0-1.259,1.03-2.289,2.288-2.289H86.67 c1.259,0,2.289,1.03,2.289,2.289v77.366C88.959,176.173,87.93,177.203,86.67,177.203"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M86.67,177.203H30.927c-1.258,0-2.288-1.03-2.288-2.289V97.548c0-1.259,1.03-2.289,2.288-2.289H86.67 c1.259,0,2.289,1.03,2.289,2.289v77.366C88.959,176.173,87.93,177.203,86.67,177.203z"/>
											  </g>
											  <g id="draw-1" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<path stroke="#082765" d="M122.283,27.93h-14.797c-1.259,0-2.289-1.03-2.289-2.289V10.844c0-1.258,1.03-2.288,2.289-2.288h14.797 c1.259,0,2.289,1.03,2.289,2.288v14.797C124.572,26.899,123.542,27.93,122.283,27.93z"/>
												<path stroke="#082765" d="M147.19,27.93h-14.797c-1.259,0-2.289-1.03-2.289-2.289V10.844c0-1.258,1.03-2.288,2.289-2.288h14.797 c1.26,0,2.289,1.03,2.289,2.288v14.797C149.479,26.899,148.45,27.93,147.19,27.93z"/>
												<path stroke="#082765" d="M121.454,118.757h-14.798c-1.259,0-2.288-1.029-2.288-2.288v-10.548c0-1.258,1.029-2.287,2.288-2.287h14.798 c1.259,0,2.289,1.029,2.289,2.287v10.548C123.743,117.728,122.713,118.757,121.454,118.757z"/>
												<path stroke="#082765" d="M146.361,118.757h-14.797c-1.259,0-2.289-1.029-2.289-2.288v-10.548c0-1.258,1.03-2.287,2.289-2.287h14.797 c1.259,0,2.289,1.029,2.289,2.287v10.548C148.65,117.728,147.62,118.757,146.361,118.757z"/>
												<path stroke="#082765" d="M121.454,138.757h-14.798c-1.259,0-2.288-1.029-2.288-2.288v-10.548c0-1.258,1.029-2.287,2.288-2.287h14.798 c1.259,0,2.289,1.029,2.289,2.287v10.548C123.743,137.728,122.713,138.757,121.454,138.757z"/>
												<path stroke="#082765" d="M146.361,138.757h-14.797c-1.259,0-2.289-1.029-2.289-2.288v-10.548c0-1.258,1.03-2.287,2.289-2.287h14.797 c1.259,0,2.289,1.029,2.289,2.287v10.548C148.65,137.728,147.62,138.757,146.361,138.757z"/>
												<path stroke="#082765" d="M121.454,156.153h-14.798c-1.259,0-2.288-1.03-2.288-2.289v-7.942c0-1.26,1.029-2.288,2.288-2.288h14.798 c1.259,0,2.289,1.028,2.289,2.288v7.942C123.743,155.123,122.713,156.153,121.454,156.153z"/>
												<path stroke="#082765" d="M146.361,156.153h-14.797c-1.259,0-2.289-1.03-2.289-2.289v-7.942c0-1.26,1.03-2.288,2.289-2.288h14.797 c1.259,0,2.289,1.028,2.289,2.288v7.942C148.65,155.123,147.62,156.153,146.361,156.153z"/>
												<polyline stroke="#082765" points="120.471,36.609 123.396,36.609 127.339,36.609 133.963,36.609 137.266,36.609 140.851,36.609 144.529,36.609 149.479,36.609"/>
												<line stroke="#082765" x1="105.197" y1="36.609" x2="111.414" y2="36.609"/>
												<line stroke="#082765" x1="142.266" y1="44.535" x2="145.19" y2="44.535"/>
												<polyline stroke="#082765" points="120.471,44.535 123.68,44.535 127.339,44.535 130.659,44.535 133.868,44.535"/>
												<polyline stroke="#082765" points="109.487,44.535 111.886,44.535 114.885,44.535"/>
												<line stroke="#082765" x1="143.728" y1="52.46" x2="149.479" y2="52.46"/>
												<polyline stroke="#082765" points="116.225,52.46 120.471,52.46 123.584,52.46 129.245,52.46 132.171,52.46 136.793,52.46"/>
												<line stroke="#082765" x1="105.197" y1="52.46" x2="109.486" y2="52.46"/>
												<polyline stroke="#082765" points="114.885,60.385 118.537,60.385 121.155,60.385 146.134,60.385"/>
												<line stroke="#082765" x1="108.544" y1="60.385" x2="109.904" y2="60.385"/>
												<polyline stroke="#082765" points="130.85,68.31 137.595,68.31 143.255,68.31 146.604,68.31 149.479,68.31"/>
												<polyline stroke="#082765" points="105.197,68.31 107.876,68.31 112.186,68.31 124.433,68.31"/>
												<polyline stroke="#082765" points="114.055,163.57 117.708,163.57 120.326,163.57 145.304,163.57"/>
												<line stroke="#082765" x1="107.714" y1="163.57" x2="109.075" y2="163.57"/>
												<polyline stroke="#082765" points="130.02,171.495 136.765,171.495 142.426,171.495 145.773,171.495 148.649,171.495"/>
												<polyline stroke="#082765" points="104.368,171.495 107.046,171.495 111.356,171.495 123.604,171.495"/>
												<line stroke="#082765" x1="108.544" y1="76.235" x2="146.134" y2="76.235"/>
												<circle stroke="#082765" cx="41.54" cy="106.207" r="4.143"/>
												<line stroke="#082765" x1="51.016" y1="106.486" x2="75.516" y2="106.486"/>
												<line stroke="#082765" x1="51.016" y1="113.486" x2="66.266" y2="113.486"/>
												<circle stroke="#082765" cx="41.54" cy="121.207" r="4.143"/>
												<line stroke="#082765" x1="51.016" y1="121.486" x2="75.516" y2="121.486"/>
												<line stroke="#082765" x1="51.016" y1="128.486" x2="72.516" y2="128.486"/>
												<circle stroke="#082765" cx="41.54" cy="136.207" r="4.143"/>
												<line stroke="#082765" x1="51.016" y1="136.486" x2="75.516" y2="136.486"/>
												<line stroke="#082765" x1="51.016" y1="143.486" x2="59.391" y2="143.486"/>
												<circle stroke="#082765" cx="41.54" cy="151.207" r="4.143"/>
												<line stroke="#082765" x1="51.016" y1="151.486" x2="75.516" y2="151.486"/>
												<line stroke="#082765" x1="51.016" y1="158.486" x2="72.516" y2="158.486"/>
												<circle stroke="#082765" cx="41.54" cy="166.207" r="4.143"/>
												<line stroke="#082765" x1="51.016" y1="166.486" x2="75.516" y2="166.486"/>
												<line stroke="#FFF" x1="42.801" y1="56.269" x2="74.797" y2="56.269"/>
												<line stroke="#FFF" x1="42.801" y1="44.947" x2="74.797" y2="44.947"/>
												<line stroke="#FFF" x1="42.801" y1="33.625" x2="74.797" y2="33.625"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Проектування досвіду клієнта</div>
											<div class="desc">
												<p>Створення прототипів необхідне для отримання користувачами позитивного досвіду у всіх точках взаємодії з продуктом, що в свою чергу підвищить його конверсію і конкурентну ефективність на ринку.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-3">
									<div class="vcontent">	
										<div class="image">
											<svg id="proc_icon_2" xmlns="http://www.w3.org/2000/svg" width="226" height="199" viewBox="0 0 226 199">
											  <g id="fadein-up-3">
												<path fill="#00133E" d="M142.978,169.563H34.957c-3.85,0-7-3.149-7-7V25.619c0-3.85,3.15-7,7-7h108.021c3.85,0,7,3.15,7,7v136.944 C149.978,166.413,146.827,169.563,142.978,169.563"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M142.978,169.563H34.957c-3.85,0-7-3.149-7-7V25.619c0-3.85,3.15-7,7-7h108.021c3.85,0,7,3.15,7,7v136.944 C149.978,166.413,146.827,169.563,142.978,169.563z"/>
											  </g>
											  <g id="fadein-up-2">
												<path fill="#00133E" d="M149.467,161.563h-121c-3.85,0-7-3.149-7-7V17.619c0-3.85,3.15-7,7-7h121c3.851,0,7,3.15,7,7v136.944 C156.467,158.413,153.317,161.563,149.467,161.563"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M149.467,161.563h-121c-3.85,0-7-3.149-7-7V17.619c0-3.85,3.15-7,7-7h121c3.851,0,7,3.15,7,7v136.944 C156.467,158.413,153.317,161.563,149.467,161.563z"/>
											  </g>
											  <g id="fadein-up-1">
												<path fill="#00133E" d="M158.134,152.563H19.801c-3.85,0-7-3.149-7-7V8.619c0-3.85,3.15-7,7-7h138.333c3.85,0,7,3.15,7,7v136.944 C165.134,149.413,161.983,152.563,158.134,152.563"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M158.134,152.563H19.801c-3.85,0-7-3.149-7-7V8.619c0-3.85,3.15-7,7-7h138.333c3.85,0,7,3.15,7,7v136.944 C165.134,149.413,161.983,152.563,158.134,152.563z"/>
											  </g>
											  <g id="draw-1">
												<line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="12.967" y1="18.688" x2="165.134" y2="18.688"/>
											  </g>
											  <g id="fadein-1" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<circle cx="39.235" cy="10.522" r="2.333"/>
												<circle cx="31.768" cy="10.522" r="2.333"/>
												<circle cx="24.301" cy="10.522" r="2.333"/>
											  </g>
											  <g id="draw-2" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<line x1="64.8" y1="34.614" x2="153.218" y2="34.614"/>
												<polyline points="130.794,44.614 136.32,44.614 143.016,44.614 148.859,44.614 153.218,44.614"/>
												<polyline points="88.659,44.614 94.662,44.614 101.357,44.614 108.371,44.614 116.075,44.614"/>
												<polyline points="64.8,44.614 68.52,44.614 75.852,44.614"/>
												<polyline points="130.794,64.614 136.32,64.614 143.016,64.614 148.859,64.614 153.218,64.614"/>
												<polyline points="88.659,64.614 94.662,64.614 101.357,64.614 108.371,64.614 116.075,64.614"/>
												<polyline points="64.8,64.614 68.52,64.614 75.852,64.614"/>
												<line x1="116.076" y1="54.614" x2="153.217" y2="54.614"/>
												<line x1="64.8" y1="54.614" x2="87.861" y2="54.614"/>
												<line x1="64.8" y1="82.614" x2="153.218" y2="82.614"/>
												<polyline points="130.794,92.614 136.32,92.614 143.016,92.614 148.859,92.614 153.218,92.614"/>
												<polyline points="88.659,92.614 94.662,92.614 101.357,92.614 108.371,92.614 116.075,92.614"/>
												<polyline points="64.8,92.614 68.52,92.614 75.852,92.614"/>
												<polyline points="130.794,112.614 136.32,112.614 143.016,112.614 148.859,112.614 153.218,112.614"/>
												<polyline points="88.659,112.614 94.662,112.614 101.357,112.614 108.371,112.614 116.075,112.614"/>
												<polyline points="64.8,112.614 68.52,112.614 75.852,112.614"/>
												<line x1="116.076" y1="102.614" x2="153.217" y2="102.614"/>
												<line x1="64.8" y1="102.614" x2="87.861" y2="102.614"/>
												<polyline points="130.794,140.614 136.32,140.614 143.016,140.614 148.859,140.614 153.218,140.614"/>
												<polyline points="88.659,140.614 94.662,140.614 101.357,140.614 108.371,140.614 116.075,140.614"/>
												<polyline points="64.8,140.614 68.52,140.614 75.852,140.614"/>
												<polyline points="130.794,148.614 136.32,148.614 143.016,148.614 148.859,148.614 153.218,148.614"/>
												<polyline points="88.659,148.614 94.662,148.614 101.357,148.614 108.371,148.614 116.075,148.614"/>
												<polyline points="64.8,148.614 68.52,148.614 75.852,148.614"/>
												<polyline points="130.794,132.614 136.32,132.614 143.016,132.614 148.859,132.614 153.218,132.614"/>
												<polyline points="88.659,132.614 94.662,132.614 101.357,132.614 108.371,132.614 116.075,132.614"/>
												<polyline points="64.8,132.614 68.52,132.614 75.852,132.614"/>
											  </g>
											  <g id="fadein-2">
												<rect x="21.967" y="32.158" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="31.333" height="34.075"/>
												<rect x="21.967" y="80.158" fill="#005BFD" width="31.333" height="34.075"/>
												<rect x="21.967" y="80.158" fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="31.333" height="34.075"/>
												<polyline fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="21.967,151.172 21.967,128.158 53.3,128.158 53.3,151.172"/>
											  </g>
											  <g>
												<g id="fadein-up-6">
												  <path fill="#00133E" d="M186.923,190.329h-27.244c-3.663,0-6.659-2.997-6.659-6.659V98.721c0-3.662,2.996-6.659,6.659-6.659 h27.244c3.663,0,6.658,2.997,6.658,6.659v84.949C193.581,187.332,190.586,190.329,186.923,190.329"/>
												  <path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M186.923,190.329h-27.244c-3.663,0-6.659-2.997-6.659-6.659V98.721c0-3.662,2.996-6.659,6.659-6.659h27.244 c3.663,0,6.658,2.997,6.658,6.659v84.949C193.581,187.332,190.586,190.329,186.923,190.329z"/>
												</g>
												<g id="fadein-up-5">
												  <path fill="#00133E" d="M190.839,185.329h-35.077c-3.663,0-6.659-2.997-6.659-6.659V93.721c0-3.662,2.996-6.659,6.659-6.659 h35.077c3.663,0,6.659,2.997,6.659,6.659v84.949C197.498,182.332,194.502,185.329,190.839,185.329"/>
												  <path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M190.839,185.329h-35.077c-3.663,0-6.659-2.997-6.659-6.659V93.721c0-3.662,2.996-6.659,6.659-6.659h35.077 c3.663,0,6.659,2.997,6.659,6.659v84.949C197.498,182.332,194.502,185.329,190.839,185.329z"/>
												</g>
												<g id="fadein-up-4">
												  <path fill="#00133E" d="M194.587,178.329h-42.573c-3.662,0-6.659-2.997-6.659-6.659V86.721c0-3.662,2.997-6.659,6.659-6.659 h42.573c3.663,0,6.659,2.997,6.659,6.659v84.949C201.246,175.332,198.25,178.329,194.587,178.329"/>
												  <path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M194.587,178.329h-42.573c-3.662,0-6.659-2.997-6.659-6.659V86.721c0-3.662,2.997-6.659,6.659-6.659h42.573 c3.663,0,6.659,2.997,6.659,6.659v84.949C201.246,175.332,198.25,178.329,194.587,178.329z"/>
												</g>
												<g id="draw-5">
												  <line fill="#00133E" x1="145.354" y1="92.102" x2="201.246" y2="92.102"/>
												  <line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="145.354" y1="92.102" x2="201.246" y2="92.102"/>
												  <line fill="#00133E" x1="201.246" y1="162.269" x2="145.355" y2="162.269"/>
												  <line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="201.246" y1="162.269" x2="145.355" y2="162.269"/>
												</g>
												<g id="fadein-5">
												  <circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="173.3" cy="170.811" r="3.042"/>
												  <rect x="151.893" y="99.49" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="11.211" height="12.191"/>
												  <rect x="167.893" y="99.49" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="11.211" height="12.191"/>
												  <rect x="183.893" y="99.49" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="11.211" height="12.191"/>
												  <rect x="167.893" y="116.49" fill="#005BFD" width="11.211" height="12.191"/>
												  <rect x="167.893" y="116.49" fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="11.211" height="12.191"/>
												  <rect x="151.893" y="116.49" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="11.211" height="12.191"/>
												  <rect x="183.893" y="116.49" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="11.211" height="12.191"/>
												  <line fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="151.893" y1="134.686" x2="195.104" y2="134.686"/>
												  <line fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="151.893" y1="141.686" x2="195.104" y2="141.686"/>
												  <line fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="151.893" y1="148.686" x2="195.104" y2="148.686"/>
												  <line fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="151.893" y1="155.686" x2="195.104" y2="155.686"/>
												</g>
											  </g>
											  <g id="draw-3">
												<g>
												  <circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="193.467" cy="31.158" r="3.042"/>
												</g>
												<polyline fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="177.301,72.182 177.301,50.714 193.468,50.714 193.468,34.615"/>
											  </g>
											  <g id="fadein-3" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<rect x="181.939" y="3.797" width="42.521" height="16.584"/>
												<line x1="188.262" y1="9.089" x2="218.137" y2="9.089"/>
												<line x1="188.262" y1="14.089" x2="218.137" y2="14.089"/>
											  </g>
											  <g id="fadein-4" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<rect x="1.706" y="180.838" width="42.522" height="16.584"/>
												<line x1="8.03" y1="186.13" x2="37.905" y2="186.13"/>
												<line x1="8.03" y1="191.13" x2="37.905" y2="191.13"/>
											  </g>
											  <g id="draw-4">
												<g>
												  <circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="53.759" cy="189.131" r="3.042"/>
												</g>
												<polyline fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="90.8,176.131 90.8,189.131 56.8,189.131"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Унікальний дизайн продукту</div>
											<div class="desc">
												<p>Ми прагнемо об'єднати цілі вашого бізнесу з потребами користувачів за допомогою довершеного дизайну інтерфейсу, який виділить ваш продукт з поміж інших на ринку та не залишить шансу вашим конкурентам.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-4">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_6" xmlns="http://www.w3.org/2000/svg" width="198" height="174" viewBox="0 0 198 174">
											  <g id="fadein-up-3">
												<path fill="#00133E" d="M171,172.473H27c-3.85,0-7-3.15-7-7V28.528c0-3.85,3.15-7,7-7h144c3.851,0,7,3.15,7,7v136.944 C178,169.322,174.851,172.473,171,172.473"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M171,172.473H27c-3.85,0-7-3.15-7-7V28.528c0-3.85,3.15-7,7-7h144c3.851,0,7,3.15,7,7v136.944 C178,169.322,174.851,172.473,171,172.473z"/>
											  </g>
											  <g id="fadein-up-2">
												<path fill="#00133E" d="M181,162.473H17c-3.85,0-7-3.15-7-7V18.528c0-3.85,3.15-7,7-7h164c3.851,0,7,3.15,7,7v136.944 C188,159.322,184.851,162.473,181,162.473"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M181,162.473H17c-3.85,0-7-3.15-7-7V18.528c0-3.85,3.15-7,7-7h164c3.851,0,7,3.15,7,7v136.944 C188,159.322,184.851,162.473,181,162.473z"/>
											  </g>
											  <g id="fadein-up-1">
												<path fill="#00133E" d="M189,152.473H9c-3.85,0-7-3.15-7-7V8.528c0-3.85,3.15-7,7-7h180c3.851,0,7,3.15,7,7v136.944 C196,149.322,192.851,152.473,189,152.473"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M189,152.473H9c-3.85,0-7-3.15-7-7V8.528c0-3.85,3.15-7,7-7h180c3.851,0,7,3.15,7,7v136.944 C196,149.322,192.851,152.473,189,152.473z"/>
											  </g>
											  <g id="fadein-1" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<circle cx="13.333" cy="10.368" r="2.333"/>
												<circle cx="20.801" cy="10.368" r="2.333"/>
												<circle cx="28.268" cy="10.368" r="2.333"/>
											  </g>
											  <g id="draw-1" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<line stroke="#143C81" x1="92.583" y1="90.034" x2="96" y2="90.034"/>
												<polyline stroke="#143C81" points="35.708,90.034 41.75,90.034 51.709,90.034 60.667,90.034 70.333,90.034 77.25,90.034"/>
												<line stroke="#143C81" x1="26.667" y1="90.034" x2="28.583" y2="90.034"/>
												<polyline stroke="#143C81" points="85.167,100.034 89.917,100.034 92.917,100.034 96,100.034"/>
												<polyline stroke="#143C81" points="53.083,100.034 58.583,100.034 63.333,100.034 69.917,100.034 74.583,100.034"/>
												<polyline stroke="#143C81" points="26.667,100.034 30.583,100.034 33.833,100.034 38.667,100.034 42.834,100.034"/>
												<polyline stroke="#143C81" points="69.313,110.034 75.375,110.034 81.25,110.034 87.438,110.034 92.583,110.034 94.938,110.034 96,110.034"/>
												<polyline stroke="#143C81" points="40.125,110.034 45.438,110.034 51.188,110.034 55.5,110.034"/>
												<line stroke="#143C81" x1="26.667" y1="110.034" x2="31.189" y2="110.034"/>
												<line stroke="#143C81" x1="93.167" y1="120.034" x2="96" y2="120.034"/>
												<polyline stroke="#143C81" points="72.5,120.034 77.25,120.034 83.083,120.034"/>
												<polyline stroke="#143C81" points="51.333,120.034 55.5,120.034 59.583,120.034 63.167,120.034"/>
												<polyline stroke="#143C81" points="35.333,120.034 38.917,120.034 42.833,120.034"/>
												<line stroke="#143C81" x1="26.667" y1="120.034" x2="28.927" y2="120.034"/>
												<polyline stroke="#143C81" points="59.333,130.034 76.833,130.034 86.833,130.034 92.583,130.034 96,130.034"/>
												<polyline stroke="#143C81" points="26.667,130.034 28.927,130.034 33.251,130.034"/>
												<line stroke="#143C81" x1="26.667" y1="140.034" x2="96" y2="140.034"/>
												<rect x="160.668" y="33.867" stroke="#143C81" width="31.333" height="16.167"/>
												<rect x="112.001" y="33.867" stroke="#285FAF" width="43.833" height="16.167"/>
												<rect x="160.668" y="57.867" stroke="#143C81" width="31.333" height="16.167"/>
												<rect x="112.001" y="57.867" stroke="#285FAF" width="43.833" height="16.167"/>
												<rect x="160.668" y="81.867" stroke="#143C81" width="31.333" height="16.167"/>
												<rect x="112.001" y="81.867" stroke="#285FAF" width="43.833" height="16.167"/>
												<rect x="112.001" y="104.867" stroke="#285FAF" width="43.833" height="34.5"/>
												<line stroke="#285FAF" x1="8.667" y1="90.034" x2="18.467" y2="90.034"/>
												<line stroke="#285FAF" x1="8.667" y1="100.034" x2="18.467" y2="100.034"/>
												<line stroke="#285FAF" x1="8.667" y1="110.034" x2="18.467" y2="110.034"/>
												<line stroke="#285FAF" x1="8.667" y1="120.034" x2="18.467" y2="120.034"/>
												<line stroke="#285FAF" x1="8.667" y1="130.034" x2="18.467" y2="130.034"/>
												<line stroke="#285FAF" x1="8.667" y1="140.034" x2="18.467" y2="140.034"/>
												<polyline stroke="#143C81" points="160.667,104.367 165.224,104.367 172.736,104.367 179.493,104.367 186.783,104.367 192,104.367"/>
												<polyline stroke="#143C81" points="160.667,111.367 165.224,111.367 172.736,111.367 179.493,111.367 186.783,111.367 192,111.367"/>
												<polyline stroke="#143C81" points="160.667,118.367 165.224,118.367 172.736,118.367 179.493,118.367 186.783,118.367 192,118.367"/>
												<polyline stroke="#143C81" points="160.667,125.367 165.224,125.367 172.736,125.367 179.493,125.367 186.783,125.367 192,125.367"/>
												<polyline stroke="#143C81" points="160.667,132.367 165.224,132.367 172.736,132.367 179.493,132.367 186.783,132.367 192,132.367"/>
												<polyline stroke="#143C81" points="160.667,139.367 165.224,139.367 172.736,139.367 179.493,139.367 186.783,139.367 192,139.367"/>
												<line stroke="#143C81" x1="26.667" y1="30.034" x2="96" y2="30.034"/>
												<polyline stroke="#143C81" points="78.417,40.034 82.75,40.034 88,40.034 92.583,40.034 96,40.034"/>
												<polyline stroke="#143C81" points="45.375,40.034 50.083,40.034 55.333,40.034 60.833,40.034 66.875,40.034"/>
												<polyline stroke="#143C81" points="26.667,40.034 29.583,40.034 35.333,40.034"/>
												<line stroke="#143C81" x1="66.875" y1="50.034" x2="96" y2="50.034"/>
												<line stroke="#143C81" x1="26.667" y1="50.034" x2="44.751" y2="50.034"/>
												<line stroke="#143C81" x1="86" y1="60.034" x2="96" y2="60.034"/>
												<polyline stroke="#143C81" points="26.667,60.034 36.75,60.034 43.25,60.034 51.375,60.034 59.875,60.034"/>
												<polyline stroke="#143C81" points="45.375,70.034 57.625,70.034 70,70.034 79.375,70.034 88,70.034"/>
												<polyline stroke="#143C81" points="84.75,80.034 91,80.034 96,80.034"/>
												<polyline stroke="#143C81" points="37.75,80.034 46.418,80.034 57.583,80.034 65.668,80.034"/>
												<line stroke="#285FAF" x1="112" y1="18.534" x2="112" y2="152.472"/>
												<line stroke="#285FAF" x1="8.667" y1="30.034" x2="18.467" y2="30.034"/>
												<line stroke="#285FAF" x1="8.667" y1="40.034" x2="18.467" y2="40.034"/>
												<line stroke="#285FAF" x1="8.667" y1="50.034" x2="18.467" y2="50.034"/>
												<line stroke="#285FAF" x1="8.667" y1="60.034" x2="18.467" y2="60.034"/>
												<line stroke="#285FAF" x1="8.667" y1="70.034" x2="18.467" y2="70.034"/>
												<line stroke="#285FAF" x1="8.667" y1="80.034" x2="18.467" y2="80.034"/>
												<line stroke="#285FAF" x1="2" y1="18.534" x2="196" y2="18.534"/>
											  </g>
											  <g id="zoomin-1">
												<path fill="#005BFD" d="M122.5,81.119c0,5.799-4.701,10.5-10.5,10.5s-10.5-4.701-10.5-10.5c0-5.799,4.701-10.5,10.5-10.5 S122.5,75.32,122.5,81.119"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="112" cy="81.119" r="10.5"/>
												<polyline fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="110.625,78.432 113.375,81.057 110.625,83.807"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Адаптивна верстка продукту</div>
											<div class="desc">
												<p>Широкий досвід у створенні веб-ресурсів і мобільних програм надає нам можливіть якісно адаптувати виготовлені продукти під будь-який існуючий трендовий пристрій на сучасному ринку технологій.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-5">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_7" xmlns="http://www.w3.org/2000/svg" width="208" height="208" viewBox="0 0 208 208">
											  <g id="fadein-1">
												<path fill="#00133E" d="M205.928,104.397c0,56.39-45.713,102.103-102.104,102.103c-56.39,0-102.104-45.713-102.104-102.103 c0-56.39,45.714-102.103,102.104-102.103C160.215,2.294,205.928,48.007,205.928,104.397"/>
												<circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2.998,2.998" cx="103.824" cy="104.397" r="102.104"/>
											  </g>
											  <g id="fadein-2">
												<path fill="#00133E" d="M191.896,104.397c0,48.641-39.431,88.072-88.072,88.072c-48.641,0-88.073-39.432-88.073-88.072 c0-48.641,39.432-88.072,88.073-88.072C152.466,16.325,191.896,55.756,191.896,104.397"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="103.824" cy="104.397" r="88.073"/>
											  </g>
											  <g id="fadein-3">
												<circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="103.825" cy="104.397" r="77.809"/>
											  </g>
											  <g id="draw-1">
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M42.822,104.397c0-33.69,27.312-61.002,61.002-61.002c33.691,0,61.002,27.312,61.002,61.002"/>
											  </g>
											  <g id="fadein-6">
												<g id="rotate-1">
												  <path fill="#005BFD" d="M111.982,136.325c-8.044,4.822-18.473,2.209-23.295-5.834c-4.821-8.044-2.209-18.474,5.835-23.295 c8.044-4.822,48.239-9.118,48.239-9.118S120.026,131.503,111.982,136.325"/>
												  <path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M111.982,136.325c-8.044,4.822-18.473,2.209-23.295-5.834c-4.821-8.044-2.209-18.474,5.835-23.295 c8.044-4.822,48.239-9.118,48.239-9.118S120.026,131.503,111.982,136.325z"/>
											    </g>
											  </g>
											  <g id="fadein-4" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<line stroke="#285FAF" x1="45.091" y1="104.125" x2="39.217" y2="104.125"/>
												<line stroke="#285FAF" x1="162.195" y1="104.488" x2="168.069" y2="104.488"/>
												<line stroke="#143C81" x1="103.824" y1="45.754" x2="103.824" y2="39.88"/>
												<line stroke="#143C81" x1="74.524" y1="53.508" x2="71.587" y2="48.421"/>
												<line stroke="#143C81" x1="53.026" y1="74.874" x2="47.939" y2="71.937"/>
												<line stroke="#082765" x1="52.845" y1="133.426" x2="47.757" y2="136.363"/>
												<line stroke="#082765" x1="74.21" y1="154.924" x2="71.273" y2="160.011"/>
												<line stroke="#082765" x1="103.462" y1="162.859" x2="103.462" y2="168.733"/>
												<line stroke="#082765" x1="132.763" y1="155.105" x2="135.699" y2="160.192"/>
												<line stroke="#082765" x1="154.261" y1="133.74" x2="159.348" y2="136.677"/>
												<line stroke="#143C81" x1="154.441" y1="75.188" x2="159.528" y2="72.25"/>
												<line stroke="#143C81" x1="133.076" y1="53.689" x2="136.014" y2="48.603"/>
											  </g>
											  <g id="zoomin-5">
												<path fill="#005BFD" d="M47.757,104.488c0,2.725-2.209,4.935-4.935,4.935c-2.725,0-4.935-2.21-4.935-4.935 c0-2.726,2.21-4.935,4.935-4.935C45.548,99.553,47.757,101.763,47.757,104.488"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="42.822" cy="104.488" r="4.935"/>
											  </g>
											  <g id="zoomin-4">
												<path fill="#005BFD" d="M169.762,104.488c0,2.725-2.209,4.935-4.936,4.935c-2.725,0-4.935-2.21-4.935-4.935 c0-2.726,2.21-4.935,4.935-4.935C167.553,99.553,169.762,101.763,169.762,104.488"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="164.827" cy="104.488" r="4.935"/>
											  </g>
											  <g id="fadein-5" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<path d="M120.863,86.713H86.785c-0.665,0-1.208-0.544-1.208-1.208v-17.88c0-0.664,0.543-1.208,1.208-1.208h34.078 c0.665,0,1.208,0.544,1.208,1.208v17.88C122.071,86.169,121.528,86.713,120.863,86.713z"/>
												<line x1="96.87" y1="78.724" x2="111.51" y2="78.724"/>
												<line x1="93.564" y1="74.406" x2="114.816" y2="74.406"/>
											  </g>
											  <g>
												<g id="zoomin-3">
												  <path fill="#00133E" d="M205.928,85.026c0,1.371-1.111,2.482-2.482,2.482s-2.481-1.111-2.481-2.482 c0-1.371,1.11-2.482,2.481-2.482S205.928,83.656,205.928,85.026"/>
												  <circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="203.446" cy="85.026" r="2.482"/>
												</g>
												<g id="zoomin-3-2">
												  <path fill="#00133E" d="M6.686,83.23c0,1.371-1.111,2.482-2.482,2.482c-1.371,0-2.482-1.111-2.482-2.482 c0-1.371,1.111-2.482,2.482-2.482C5.574,80.749,6.686,81.86,6.686,83.23"/>
												  <circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="4.203" cy="83.23" r="2.482"/>
												</g>
											  </g>
											  <g>
												<g id="zoomin-2">
												  <path fill="#00133E" d="M166.545,20.776c0,2.401-1.947,4.349-4.35,4.349c-2.401,0-4.349-1.948-4.349-4.349 c0-2.402,1.947-4.349,4.349-4.349C164.598,16.428,166.545,18.375,166.545,20.776"/>
												  <circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="162.196" cy="20.776" r="4.349"/>
												</g>
												<g id="zoomin-2-2">
												  <path fill="#00133E" d="M49.439,188.618c0,2.401-1.947,4.349-4.349,4.349c-2.402,0-4.349-1.947-4.349-4.349 c0-2.402,1.947-4.349,4.349-4.349C47.493,184.27,49.439,186.216,49.439,188.618"/>
												  <circle fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="45.091" cy="188.618" r="4.349"/>
												</g>
											  </g>
											  <g>
												<g id="zoomin-1">
												  <path fill="#00133E" d="M193.896,161.125c0,2.4-1.947,4.349-4.349,4.349c-2.402,0-4.35-1.948-4.35-4.349 c0-2.402,1.947-4.35,4.35-4.35C191.949,156.775,193.896,158.723,193.896,161.125"/>
												  <circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="189.547" cy="161.125" r="4.349"/>
												</g>
												<g id="zoomin-1-2">
												  <path fill="#00133E" d="M43.565,22.992c0,2.401-1.947,4.349-4.349,4.349s-4.349-1.948-4.349-4.349 c0-2.402,1.947-4.349,4.349-4.349S43.565,20.59,43.565,22.992"/>
												  <circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="39.216" cy="22.992" r="4.349"/>
												</g>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Інтерактивна анімація</div>
											<div class="desc">
												<p>Наша команда зацікавлена регулярно вирішувати питання стабільності, продуктивності, технічного обслуговування і підтримки вашого продукту, щоб в свою чергу підвищувати якість портфоліо компанії.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-6">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_4" xmlns="http://www.w3.org/2000/svg" width="205" height="184" viewBox="0 0 205 184">
											  <g id="fadein-up-3">
												<path fill="#00133E" d="M149.358,145.804H38.13c-3.85,0-7-3.149-7-7V34.8c0-3.85,3.15-7,7-7h111.229c3.85,0,7,3.15,7,7v104.004 C156.358,142.654,153.208,145.804,149.358,145.804"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M149.358,145.804H38.13c-3.85,0-7-3.149-7-7V34.8c0-3.85,3.15-7,7-7h111.229c3.85,0,7,3.15,7,7v104.004 C156.358,142.654,153.208,145.804,149.358,145.804z"/>
											  </g>
											  <g id="fadein-up-2">
												<path fill="#00133E" d="M157.422,151.804H30.066c-3.85,0-7-3.149-7-7V40.8c0-3.85,3.15-7,7-7h127.355c3.85,0,7,3.15,7,7v104.004 C164.422,148.654,161.271,151.804,157.422,151.804"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M157.422,151.804H30.066c-3.85,0-7-3.149-7-7V40.8c0-3.85,3.15-7,7-7h127.355c3.85,0,7,3.15,7,7v104.004 C164.422,148.654,161.271,151.804,157.422,151.804z"/>
											  </g>
											  <g id="fadein-up-1">
												<path fill="#00133E" d="M163.065,157.804H24.423c-3.85,0-7-3.149-7-7V46.8c0-3.85,3.15-7,7-7h138.643c3.851,0,7,3.15,7,7v104.004 C170.065,154.654,166.916,157.804,163.065,157.804"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M163.065,157.804H24.423c-3.85,0-7-3.149-7-7V46.8c0-3.85,3.15-7,7-7h138.643c3.851,0,7,3.15,7,7v104.004 C170.065,154.654,166.916,157.804,163.065,157.804z"/>
											  </g>
											  <g id="draw-1">
												<line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17.966" y1="56.066" x2="170.133" y2="56.066"/>
											  </g>
											  <g id="fadein-1" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<circle cx="29.3" cy="47.9" r="2.333"/>
												<circle cx="36.767" cy="47.9" r="2.333"/>
												<circle cx="44.234" cy="47.9" r="2.333"/>
											  </g>
											  <g id="draw-3" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<polyline points="91.615,166.64 91.615,174.64 57.615,174.64"/>
												<circle cx="54.573" cy="174.64" r="3.042"/>
											  </g>
											  <g id="draw-2" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<polyline points="103.697,19.8 103.697,10.133 140.138,10.133"/>
												<circle cx="143.18" cy="10.133" r="3.042"/>
											  </g>
											  <g id="fadein-right-1" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<rect x="1.521" y="165.574" width="42.522" height="16.584"/>
												<line x1="7.844" y1="176.866" x2="37.719" y2="176.866"/>
												<line x1="7.844" y1="171.866" x2="37.719" y2="171.866"/>
											  </g>
											  <g id="fadein-left-1" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<rect x="154.538" y="1.841" width="42.521" height="16.584"/>
												<line x1="160.861" y1="13.133" x2="190.736" y2="13.133"/>
												<line x1="160.861" y1="8.133" x2="190.736" y2="8.133"/>
											  </g>
											  <g id="zoomin-group-1">
												<g id="zoomin-1" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="37.462" cy="73.566" r="9.677"/>
												  <line x1="35.44" y1="76.236" x2="39.544" y2="72.132"/>
												  <line x1="39.484" y1="76.236" x2="35.381" y2="72.132"/>
												</g>
												<g id="zoomin-2" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="65.741" cy="73.566" r="9.677"/>
												  <line x1="63.719" y1="76.236" x2="67.823" y2="72.132"/>
												  <line x1="67.763" y1="76.236" x2="63.659" y2="72.132"/>
												</g>
												<g id="zoomin-3" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="94.02" cy="73.566" r="9.677"/>
												  <line x1="91.998" y1="76.236" x2="96.102" y2="72.132"/>
												  <line x1="96.042" y1="76.236" x2="91.938" y2="72.132"/>
												</g>
												<g id="zoomin-5" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="150.577" cy="73.566" r="9.677"/>
												  <line x1="148.555" y1="76.236" x2="152.659" y2="72.132"/>
												  <line x1="152.6" y1="76.236" x2="148.495" y2="72.132"/>
												</g>
												<g id="zoomin-6" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="37.462" cy="103.565" r="9.677"/>
												  <line x1="35.44" y1="106.235" x2="39.544" y2="102.132"/>
												  <line x1="39.484" y1="106.235" x2="35.381" y2="102.132"/>
												</g>
												<g id="zoomin-7" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="65.741" cy="103.565" r="9.677"/>
												  <line x1="63.719" y1="106.235" x2="67.823" y2="102.132"/>
												  <line x1="67.763" y1="106.235" x2="63.659" y2="102.132"/>
												</g>
												<g id="zoomin-8">
												  <path fill="#005BFD" d="M103.697,103.565c0,5.345-4.333,9.678-9.678,9.678c-5.344,0-9.677-4.333-9.677-9.678 c0-5.344,4.333-9.677,9.677-9.677C99.365,93.889,103.697,98.222,103.697,103.565"/>
												  <circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="94.02" cy="103.565" r="9.677"/>
												  <polyline fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="97.102,102.132 92.998,106.236 90.67,103.977"/>
												</g>
												<g id="zoomin-12">
												  <path fill="#005BFD" d="M75.388,133.565c0,5.345-4.332,9.678-9.677,9.678c-5.344,0-9.677-4.333-9.677-9.678 c0-5.344,4.333-9.677,9.677-9.677C71.056,123.889,75.388,128.222,75.388,133.565"/>
												  <circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="65.711" cy="133.565" r="9.677"/>
												  <polyline fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="68.793,132.132 64.689,136.236 62.362,133.977"/>
												</g>
												<g id="zoomin-4">
												  <path fill="#005BFD" d="M132.005,73.566c0,5.344-4.332,9.677-9.677,9.677c-5.344,0-9.677-4.333-9.677-9.677 c0-5.344,4.333-9.677,9.677-9.677C127.673,63.889,132.005,68.222,132.005,73.566"/>
												  <circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="122.328" cy="73.566" r="9.677"/>
												  <polyline fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="125.41,72.132 121.306,76.236 118.979,73.977"/>
												</g>
												<g id="zoomin-9" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="122.298" cy="103.565" r="9.677"/>
												  <line x1="120.276" y1="106.235" x2="124.38" y2="102.132"/>
												  <line x1="124.32" y1="106.235" x2="120.217" y2="102.132"/>
												</g>
												<g id="zoomin-10" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="150.577" cy="103.565" r="9.677"/>
												  <line x1="148.555" y1="106.235" x2="152.659" y2="102.132"/>
												  <line x1="152.6" y1="106.235" x2="148.495" y2="102.132"/>
												</g>
												<g id="zoomin-11" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="37.462" cy="133.565" r="9.677"/>
												  <line x1="35.44" y1="136.235" x2="39.544" y2="132.132"/>
												  <line x1="39.484" y1="136.235" x2="35.381" y2="132.132"/>
												</g>
												<g id="zoomin-13" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="94.02" cy="133.565" r="9.677"/>
												  <line x1="91.998" y1="136.235" x2="96.102" y2="132.132"/>
												  <line x1="96.042" y1="136.235" x2="91.938" y2="132.132"/>
												</g>
												<g id="zoomin-14" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="122.298" cy="133.565" r="9.677"/>
												  <line x1="120.276" y1="136.235" x2="124.38" y2="132.132"/>
												  <line x1="124.32" y1="136.235" x2="120.217" y2="132.132"/>
												</g>
												<g id="zoomin-15" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												  <circle cx="150.577" cy="133.565" r="9.677"/>
												  <line x1="148.555" y1="136.235" x2="152.659" y2="132.132"/>
												  <line x1="152.6" y1="136.235" x2="148.495" y2="132.132"/>
												</g>
											  </g>
											  <g id="fadein-right-2">
												<path fill="#00133E" d="M140.138,105.332c0,0,5.494,52.991,5.494,53.243c0,4.164,11.058,7.54,24.695,7.54 c13.642,0,24.698-3.376,24.698-7.54c0-0.252,5.496-53.479,5.496-53.479"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M140.138,105.332c0,0,5.494,52.991,5.494,53.243c0,4.164,11.058,7.54,24.695,7.54c13.642,0,24.698-3.376,24.698-7.54 c0-0.252,5.496-53.479,5.496-53.479"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="146.088" y1="113.617" x2="192.628" y2="132.688"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="178.305" y1="113.617" x2="193.931" y2="120.1"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="147.818" y1="127.467" x2="191.109" y2="145.125"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="148.766" y1="139.896" x2="188.128" y2="156.238"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="150.439" y1="152.029" x2="170.327" y2="160.805"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="194.57" y1="113.617" x2="148.02" y2="132.688"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="162.359" y1="113.617" x2="146.716" y2="120.1"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="192.839" y1="127.467" x2="149.551" y2="145.125"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="191.889" y1="139.896" x2="152.12" y2="156.616"/>
												<line fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="190.219" y1="152.029" x2="170.327" y2="160.805"/>
												<path fill="#00133E" d="M203.479,101.293c0,4.162-14.961,7.538-33.412,7.538c-18.453,0-33.413-3.376-33.413-7.538 c0-4.167,14.96-7.543,33.413-7.543C188.518,93.75,203.479,97.126,203.479,101.293"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M203.479,101.293c0,4.162-14.961,7.538-33.412,7.538c-18.453,0-33.413-3.376-33.413-7.538c0-4.167,14.96-7.543,33.413-7.543 C188.518,93.75,203.479,97.126,203.479,101.293z"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Розробка зручного функціоналу</div>
											<div class="desc">
												<p>Побудова архітектури та логіки проекту потребує особливої уваги, оскільки являється базовим етапом в розробці нашого продукту та забепечує вирішення основних задач зі взаємодії інтерфейсу з користувачем.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-7">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_3" xmlns="http://www.w3.org/2000/svg" width="206" height="168" viewBox="0 0 206 168">
											  <g id="fadein-up-3">
												<path fill="#00133E" d="M6.033,105.739h129.125c2.424,0,4.391-1.966,4.391-4.391V27.953c0-2.425-1.967-4.39-4.391-4.39H6.033 c-2.425,0-4.39,1.965-4.39,4.39v73.396C1.644,103.773,3.608,105.739,6.033,105.739"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M6.033,105.739h129.125c2.424,0,4.391-1.966,4.391-4.391V27.953c0-2.425-1.967-4.39-4.391-4.39H6.033 c-2.425,0-4.39,1.965-4.39,4.39v73.396C1.644,103.773,3.608,105.739,6.033,105.739z"/>
												<path fill="#00133E" d="M199.323,105.739H70.198c-2.424,0-4.39-1.966-4.39-4.391V27.953c0-2.425,1.966-4.39,4.39-4.39h129.125 c2.425,0,4.39,1.965,4.39,4.39v73.396C203.713,103.773,201.748,105.739,199.323,105.739"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M199.323,105.739H70.198c-2.424,0-4.39-1.966-4.39-4.391V27.953c0-2.425,1.966-4.39,4.39-4.39h129.125 c2.425,0,4.39,1.965,4.39,4.39v73.396C203.713,103.773,201.748,105.739,199.323,105.739z"/>
											  </g>
											  <g id="fadein-up-2">
												<path fill="#00133E" d="M12.31,108.952h139.909c2.424,0,4.39-1.966,4.39-4.39V24.74c0-2.425-1.966-4.391-4.39-4.391H12.31 c-2.425,0-4.39,1.966-4.39,4.391v79.822C7.919,106.986,9.884,108.952,12.31,108.952"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M12.31,108.952h139.909c2.424,0,4.39-1.966,4.39-4.39V24.74c0-2.425-1.966-4.391-4.39-4.391H12.31c-2.425,0-4.39,1.966-4.39,4.391 v79.822C7.919,106.986,9.884,108.952,12.31,108.952z"/>
												<path fill="#00133E" d="M193.047,108.952H53.138c-2.424,0-4.39-1.966-4.39-4.39V24.74c0-2.425,1.966-4.391,4.39-4.391h139.909 c2.425,0,4.39,1.966,4.39,4.391v79.822C197.437,106.986,195.472,108.952,193.047,108.952"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M193.047,108.952H53.138c-2.424,0-4.39-1.966-4.39-4.39V24.74c0-2.425,1.966-4.391,4.39-4.391h139.909 c2.425,0,4.39,1.966,4.39,4.391v79.822C197.437,106.986,195.472,108.952,193.047,108.952z"/>
											  </g>
											  <g id="fadein-up-1">
												<rect x="16.575" y="12.127" fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="172.728" height="102.927"/>
												<rect x="16.575" y="12.127" fill="#00133E" width="172.728" height="102.927"/>
												<path fill="#00133E" d="M191.301,12.126H14.577c-1.516,0-2.756-1.24-2.756-2.755V4.54c0-1.516,1.24-2.756,2.756-2.756h176.724 c1.515,0,2.755,1.24,2.755,2.756v4.832C194.056,10.887,192.815,12.126,191.301,12.126"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M191.301,12.126H14.577c-1.516,0-2.756-1.24-2.756-2.755V4.54c0-1.516,1.24-2.756,2.756-2.756h176.724 c1.515,0,2.755,1.24,2.755,2.756v4.832C194.056,10.887,192.815,12.126,191.301,12.126z"/>
												<path fill="#00133E" d="M191.301,125.878H14.577c-1.516,0-2.756-1.239-2.756-2.755v-4.832c0-1.516,1.24-2.756,2.756-2.756h176.724 c1.515,0,2.755,1.24,2.755,2.756v4.832C194.056,124.639,192.815,125.878,191.301,125.878"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M191.301,125.878H14.577c-1.516,0-2.756-1.239-2.756-2.755v-4.832c0-1.516,1.24-2.756,2.756-2.756h176.724 c1.515,0,2.755,1.24,2.755,2.756v4.832C194.056,124.639,192.815,125.878,191.301,125.878z"/>
											  </g>
											  <g id="fadein-down-1">
												<path fill="#00133E" d="M136.926,166.626H68.951c-1.515,0-2.755-1.239-2.755-2.755v-1.472c0-1.517,1.24-2.756,2.755-2.756h67.975 c1.515,0,2.755,1.239,2.755,2.756v1.472C139.681,165.387,138.44,166.626,136.926,166.626"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M136.926,166.626H68.951c-1.515,0-2.755-1.239-2.755-2.755v-1.472c0-1.517,1.24-2.756,2.755-2.756h67.975 c1.515,0,2.755,1.239,2.755,2.756v1.472C139.681,165.387,138.44,166.626,136.926,166.626z"/>
												<line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="102.938" y1="126.042" x2="102.938" y2="159.646"/>
											  </g>
											  <g id="fadein-1">
												<path fill="#005BFD" d="M45.662,96.772h-9.576v-38.12c0-1.272,1.041-2.312,2.312-2.312h4.951c1.272,0,2.313,1.04,2.313,2.312 V96.772z"/>
												<path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.662,96.772h-9.576v-38.12c0-1.272,1.041-2.312,2.312-2.312h4.951c1.272,0,2.313,1.04,2.313,2.312V96.772z"/>
											  </g>
											  <g id="fadein-2">
												<path fill="#005BFD" d="M61.912,96.772h-9.576V68.47c0-1.272,1.041-2.312,2.312-2.312h4.951c1.272,0,2.313,1.04,2.313,2.312V96.772 z"/>
												<path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M61.912,96.772h-9.576V68.47c0-1.272,1.041-2.312,2.312-2.312h4.951c1.272,0,2.313,1.04,2.313,2.312V96.772z"/>
											  </g>
											  <g id="fadein-3">
												<path fill="#005BFD" d="M78.163,96.772h-9.576V75.435c0-1.272,1.041-2.313,2.312-2.313h4.951c1.272,0,2.313,1.041,2.313,2.313 V96.772z"/>
												<path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M78.163,96.772h-9.576V75.435c0-1.272,1.041-2.313,2.312-2.313h4.951c1.272,0,2.313,1.041,2.313,2.313V96.772z"/>
											  </g>
											  <g id="fadein-4">
												<path fill="#005BFD" d="M94.413,96.772h-9.576V62.376c0-1.272,1.041-2.312,2.312-2.312H92.1c1.272,0,2.313,1.04,2.313,2.312V96.772 z"/>
												<path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M94.413,96.772h-9.576V62.376c0-1.272,1.041-2.312,2.312-2.312H92.1c1.272,0,2.313,1.04,2.313,2.312V96.772z"/>
											  </g>
											  <g id="draw-1" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<line stroke="#143C81" x1="30.766" y1="24.667" x2="97.121" y2="24.667"/>
												<line stroke="#143C81" x1="30.766" y1="33.953" x2="76.131" y2="33.953"/>
												<line stroke="#143C81" x1="30.766" y1="43.239" x2="57.124" y2="43.239"/>
												<line stroke="#143C81" x1="119.175" y1="78.201" x2="174.697" y2="78.201"/>
												<line stroke="#143C81" x1="119.175" y1="87.486" x2="170.441" y2="87.486"/>
												<line stroke="#143C81" x1="119.175" y1="96.772" x2="158.833" y2="96.772"/>
												<line stroke="#143C81" x1="119.175" y1="59.629" x2="170.441" y2="59.629"/>
												<line stroke="#143C81" x1="119.175" y1="68.915" x2="158.833" y2="68.915"/>
												<line stroke="#285FAF" x1="30.766" y1="96.772" x2="103.892" y2="96.772"/>
												<path stroke="#143C81" d="M176.717,48.989h-56.272c-0.698,0-1.27-0.571-1.27-1.268V25.35c0-0.698,0.571-1.268,1.27-1.268h56.272 c0.698,0,1.269,0.57,1.269,1.268v22.371C177.985,48.417,177.415,48.989,176.717,48.989z"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Контроль якості кожної деталі</div>
											<div class="desc">
												<p>Ми пройдемо усі можливі сценарії взаємодії користувача з інтерфейсом, використаємо різні техніки та методи тестування так, щоб запущений продукт відповідав очікуванням клієнтів і потребам користувачів.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="proc_tab" id="proc-tab-8">
									<div class="vcontent">
										<div class="image">
											<svg id="proc_icon_8" xmlns="http://www.w3.org/2000/svg" width="184" height="176" viewBox="0 0 184 176">
											  <g id="fadein-up-1">
												<path fill="#00133E" d="M168.227,157.106H29.583c-3.85,0-7-3.149-7-7V57.107c0-3.85,3.15-7,7-7h138.643c3.85,0,7,3.15,7,7v92.999 C175.227,153.957,172.076,157.106,168.227,157.106"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M168.227,157.106H29.583c-3.85,0-7-3.149-7-7V57.107c0-3.85,3.15-7,7-7h138.643c3.85,0,7,3.15,7,7v92.999 C175.227,153.957,172.076,157.106,168.227,157.106z"/>
											  </g>
											  <g id="zoomin-5">
												<path fill="#005BFD" d="M26.933,97.622c0,2.401-1.947,4.349-4.349,4.349s-4.349-1.947-4.349-4.349c0-2.402,1.947-4.349,4.349-4.349 S26.933,95.22,26.933,97.622"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="22.583" cy="97.622" r="4.349"/>
											  </g>
											  <g id="zoomin-4">
												<path fill="#005BFD" d="M179.821,138.54c0,2.401-1.947,4.35-4.349,4.35c-2.402,0-4.35-1.948-4.35-4.35s1.947-4.349,4.35-4.349 C177.874,134.191,179.821,136.139,179.821,138.54"/>
												<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="175.472" cy="138.54" r="4.349"/>
											  </g>
											  <g id="draw-2" fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
												<polyline points="40.591,74.403 45.35,74.403 54.734,74.403"/>
												<line x1="106.208" y1="84.403" x2="153.737" y2="84.403"/>
												<line x1="40.591" y1="84.403" x2="70.102" y2="84.403"/>
												<line x1="137.419" y1="94.403" x2="153.737" y2="94.403"/>
												<polyline points="40.591,94.403 57.046,94.403 67.653,94.403 80.913,94.403 94.784,94.403"/>
												<polyline points="44.28,104.403 71.985,104.403 99.973,104.403 121.176,104.403 140.683,104.403"/>
												<polyline points="135.378,114.403 145.578,114.403 153.738,114.403"/>
												<polyline points="50.333,114.403 67.068,114.403 88.628,114.403 104.237,114.403"/>
												<line x1="148.161" y1="124.403" x2="153.737" y2="124.403"/>
												<polyline points="55.346,124.403 65.207,124.403 81.459,124.403 96.078,124.403 111.851,124.403 123.14,124.403"/>
												<line x1="40.591" y1="124.403" x2="43.718" y2="124.403"/>
												<polyline points="136.06,134.403 143.811,134.403 148.706,134.403 153.737,134.403"/>
												<polyline points="83.7,134.403 92.675,134.403 100.429,134.403 111.172,134.403 118.786,134.403"/>
												<polyline points="40.591,134.403 46.982,134.403 52.286,134.403 60.174,134.403 66.974,134.403"/>
												<polyline points="110.187,144.403 120.08,144.403 129.667,144.403 139.765,144.403 148.161,144.403 152.004,144.403 153.738,144.403"/>
												<polyline points="62.554,144.403 71.225,144.403 80.607,144.403 87.644,144.403"/>
												<line x1="40.591" y1="144.403" x2="47.97" y2="144.403"/>
												<polyline points="71.122,74.403 78.804,74.403 87.372,74.403 96.35,74.403 106.208,74.403"/>
												<polyline points="125.043,74.403 132.114,74.403 140.683,74.403 148.16,74.403 153.737,74.403"/>
												<line x1="40.591" y1="64.403" x2="144.558" y2="64.403"/>
											  </g>
											  <g id="fadein-up-4">
												<path fill="#00133E" d="M118.976,173.319H78.834c-3.662,0-6.659-2.996-6.659-6.658V50.466c0-3.663,2.997-6.659,6.659-6.659h40.142 c3.663,0,6.659,2.996,6.659,6.659v116.195C125.635,170.323,122.639,173.319,118.976,173.319"/>
												<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M118.976,173.319H78.834c-3.662,0-6.659-2.996-6.659-6.658V50.466c0-3.663,2.997-6.659,6.659-6.659h40.142 c3.663,0,6.659,2.996,6.659,6.659v116.195C125.635,170.323,122.639,173.319,118.976,173.319z"/>
											  </g>
											  <g id="fadein-up-3">
												<path fill="#00133E" d="M124.138,163.812H73.672c-3.663,0-6.659-2.997-6.659-6.659V40.958c0-3.663,2.996-6.659,6.659-6.659h50.466 c3.663,0,6.659,2.996,6.659,6.659v116.195C130.797,160.814,127.801,163.812,124.138,163.812"/>
												<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M124.138,163.812H73.672c-3.663,0-6.659-2.997-6.659-6.659V40.958c0-3.663,2.996-6.659,6.659-6.659h50.466 c3.663,0,6.659,2.996,6.659,6.659v116.195C130.797,160.814,127.801,163.812,124.138,163.812z"/>
											  </g>
											  <g id="fadein-up-2">
												<path fill="#00133E" d="M129.077,154.586H68.732c-3.662,0-6.659-2.997-6.659-6.659V31.732c0-3.663,2.997-6.659,6.659-6.659h60.345 c3.663,0,6.659,2.996,6.659,6.659v116.195C135.736,151.589,132.74,154.586,129.077,154.586"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M129.077,154.586H68.732c-3.662,0-6.659-2.997-6.659-6.659V31.732c0-3.663,2.997-6.659,6.659-6.659h60.345 c3.663,0,6.659,2.996,6.659,6.659v116.195C135.736,151.589,132.74,154.586,129.077,154.586z"/>
											  </g>
											  <g id="draw-1">
												<path fill="#00133E" d="M62.073,40.941h73.664H62.073z"/>
												<line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="62.073" y1="40.94" x2="135.736" y2="40.94"/>
												<path fill="#00133E" d="M62.073,133.419h73.664H62.073z"/>
												<line fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="135.736" y1="133.419" x2="62.073" y2="133.419"/>
											  </g>
											  <g id="fadein-1">
												<g>
												  <circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="98.905" cy="144.676" r="4.009"/>
												</g>
												<g>
												  <path fill="#41658C" d="M111.252,79.38c0,6.949-5.634,12.582-12.582,12.582c-6.949,0-12.583-5.633-12.583-12.582 c0-6.949,5.634-12.582,12.583-12.582C105.618,66.798,111.252,72.431,111.252,79.38"/>
												  <path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M80.243,78.694c0-10.102,8.186-18.291,18.288-18.291c10.104,0,18.291,8.189,18.291,18.291"/>
												  <path fill="#005BFD" d="M82.851,81.304c0,1.442-1.168,2.61-2.611,2.61c-1.442,0-2.61-1.168-2.61-2.61 c0-1.442,1.168-2.611,2.61-2.611C81.683,78.693,82.851,79.862,82.851,81.304"/>
												  <circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="80.24" cy="81.304" r="2.611"/>
												  <path fill="#005BFD" d="M111.252,79.38c0,6.949-5.634,12.582-12.582,12.582c-6.949,0-12.583-5.633-12.583-12.582 c0-6.949,5.634-12.582,12.583-12.582C105.618,66.798,111.252,72.431,111.252,79.38"/>
												  <circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="98.669" cy="79.38" r="12.583"/>
												  <path fill="#005BFD" d="M105.754,97.622H92.055c-9.201,0-16.661,7.459-16.661,16.661h47.021 C122.415,105.081,114.959,97.622,105.754,97.622"/>
												  <path fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M105.754,97.622H92.055c-9.201,0-16.661,7.459-16.661,16.661h47.021C122.415,105.081,114.959,97.622,105.754,97.622z"/>
												</g>
											  </g>
											  <g id="zoomin-3">
												<path fill="#00133E" d="M30.555,1.331c-9.297,0-16.833,7.536-16.833,16.833c0,3.766,1.251,7.23,3.34,10.034l-0.854,7.651 l6.45-2.822c2.356,1.254,5.042,1.971,7.897,1.971c9.297,0,16.833-7.537,16.833-16.834S39.853,1.331,30.555,1.331"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M30.555,1.331c-9.297,0-16.833,7.536-16.833,16.833c0,3.766,1.251,7.23,3.34,10.034l-0.854,7.651l6.45-2.822 c2.356,1.254,5.042,1.971,7.897,1.971c9.297,0,16.833-7.537,16.833-16.834S39.853,1.331,30.555,1.331z"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="22.937" cy="18.597" r="2.208"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="30.309" cy="18.597" r="2.208"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="37.68" cy="18.597" r="2.208"/>
											  </g>
											  <g id="zoomin-1">
												<path fill="#00133E" d="M165.893,35.849c9.297,0,16.833,7.536,16.833,16.833c0,3.766-1.251,7.23-3.34,10.034l0.854,7.651 l-6.45-2.822c-2.356,1.254-5.042,1.971-7.897,1.971c-9.297,0-16.833-7.537-16.833-16.834 C149.06,43.385,156.596,35.849,165.893,35.849"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M165.893,35.849c9.297,0,16.833,7.536,16.833,16.833c0,3.766-1.251,7.23-3.34,10.034l0.854,7.651l-6.45-2.822 c-2.356,1.254-5.042,1.971-7.897,1.971c-9.297,0-16.833-7.537-16.833-16.834C149.06,43.385,156.596,35.849,165.893,35.849z"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="173.511" cy="53.115" r="2.208"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="166.14" cy="53.115" r="2.208"/>
												<circle fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="158.768" cy="53.115" r="2.208"/>
											  </g>
											  <g id="zoomin-2">
												<path fill="#00133E" d="M42.42,158.653c-3.294,10.953-14.838,17.17-25.798,13.876c-10.946-3.294-17.155-14.838-13.875-25.798 c3.294-10.946,14.851-17.155,25.798-13.868C39.505,136.149,45.714,147.708,42.42,158.653"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M42.42,158.653c-3.294,10.953-14.838,17.17-25.798,13.876c-10.946-3.294-17.155-14.838-13.875-25.798 c3.294-10.946,14.851-17.155,25.798-13.868C39.505,136.149,45.714,147.708,42.42,158.653z"/>
												<path fill="#00133E" d="M26.919,146.494c0,2.394-1.94,4.333-4.333,4.333c-2.393,0-4.333-1.939-4.333-4.333 c0-2.393,1.94-4.333,4.333-4.333C24.979,142.161,26.919,144.102,26.919,146.494"/>
												<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="22.586" cy="146.494" r="4.333"/>
												<path fill="#00133E" d="M14.616,163.233v-1.29c0-4.384,3.586-7.97,7.97-7.97c4.383,0,7.969,3.586,7.969,7.97v1.29"/>
												<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14.616,163.233v-1.29c0-4.384,3.586-7.97,7.97-7.97c4.383,0,7.969,3.586,7.969,7.97v1.29"/>
											  </g>
											</svg>
										</div>
										<div class="info">
											<div class="name">Обслуговування та підтримка</div>
											<div class="desc">
												<p>Наша команда зацікавлена регулярно вирішувати питання стабільності, продуктивності, технічного обслуговування і підтримки вашого продукту, щоб в свою чергу підвищувати якість портфоліо компанії.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="nav">
									<a class="c-prev prev"></a>
									<a class="c-next next"></a>
								</div>
							</div>
							<div class="proc_line">
								<div class="label">аналіз конкурентів</div>
								<div class="line">
									<i class="start">0%</i>
									<span class="f-line" style="width: 5%;">
										<i class="current">5%</i>
									</span>
									<!--<i class="end">100%</i>-->
								</div>
							</div>
						</div>
						<div class="rt">
							<div class="proc_menu">
								<a href="#proc-tab-1"
								  data-time="5"
								  data-spec="3"
								  data-label="аналіз конкурентів" 
								  data-graph1="M4059.539,138.051c-49.369-25.127-70.008-43.13-185.133-43.13   c-165,0-209.875,125.677-412.787,125.677c-192.088,0-257.418-136.547-419.752-136.547c-162.334,0-216.658,136.547-412.87,136.547   c-188.197,0-214.675-149.881-390.008-149.881c-176.725,0-230.087,149.881-413.087,149.881   c-181.959,0-240.646-115.047-414.646-115.047c-182.002,0-225,120-417,126c-191.358,5.979-226.743-133.033-402-133   c-192.913,0.036-277,238-592.255,73l-0.985,248.583h4060.523V138.051z"

								  data-graph2="M4064.103,604.473l-0.066-431.753c0,0-52.783,61.374-169.024,61.374   c-136.78,0-262.114-176.311-422.427-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.197,0-232.549-143.458-402.382-143.458c-179.5,0-224.174,143.458-396.174,143.458c-190,0-257.561-225.374-431.007-225.374   c-187.22,0-208.535,225.374-421.235,225.374c-207.78,0-231.355-138.041-417.722-138.041c-159.245,0-231.66,138.041-373.607,138.041   c-136.97,0-195.468-176.958-351.655-176.958c-149,0-187.775,111.917-244.741,111.917c0,82,0,421.919,0,421.919L4064.103,604.473z"
								  class="active">
									<span>1</span> аналіз<br/> конкурентів
								</a>
								<a href="#proc-tab-2"
  								  data-time="9"
								  data-spec="2"
								  data-label="проектування інтерфейсу"
								  data-graph1="M3756.066,147.831c-49.369-25.127-70.008-43.13-185.135-43.13   c-165,0-209.873,125.677-412.787,125.677c-192.086,0-257.418-136.547-419.751-136.547c-162.334,0,13.162,9.536-183.05,9.536   c-188.197,0-180.417,127.13-355.75,127.13c-176.725,0-316.763-126.402-487.389-123.574c-181,3-84.612,121.753-244.206,126.464   c-180.667,5.333-288.667-213.999-454.667-213.999C862.652,19.388,762.668,232.72,590,232.72   c-180,0-234.797-128.665-363.334-128.665C93.781,104.055,35,209.053-111,215.053c-138.186,5.679-492.788,368.421-492.788,368.421   l4359.854,9.769V147.831z" 
                                  
								  data-graph2="M3461.137,604.473l-0.066-431.753c0,0-52.783,61.374-169.024,61.374   c-136.78,0-262.114-176.311-422.427-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.197,0-232.549-143.458-402.382-143.458c-179.5,0-424.193-81.915-596.193-81.915c-190,0-233.055,229.769-416.046,226.77   C837.254,232.422,778.461,97.496,613.47,97.497C405.69,97.498,382.481,238.489,239.988,235.49   C80.778,232.14,37.248,57.847-129.243,57.847c-136.97,0-137.548,125.146-293.736,125.146c-149,0-119.51-13.94-176.476-13.94   c0,82,0,421.919,0,421.919L3461.137,604.473z">
									<span>2</span> проектування<br/> інтерфейсу
								</a>
								<a href="#proc-tab-3" 
								  data-time="25"
								  data-spec="3"
								  data-label="унікальний дизайн"
								  data-graph1="M3864.549,150.053c-49.369-25.127-70.008-43.13-185.134-43.13   c-165,0-209.874,125.677-412.787,125.677c-192.087,0-257.418-136.547-419.752-136.547c-162.334,0-216.658,136.547-412.87,136.547   c-188.197,0-808.663-149.381-983.997-149.381c-176.725,0-205.063,149.271-388.063,149.271   c-181.959,0-284.977-214.489-458.977-214.489c-182.002,0-276.203,219.024-418.479,217.488   c-116.969-1.263-220.489-68.996-220.489-68.996c-49.498-13.499-100.495-67.497-157.742-59.57l-2.235,481.041l4060.524,7.5V150.053z   " 

								  data-graph2="M4060.591,609.252l-0.066-431.753c0,0-52.783,61.374-169.024,61.374   c-136.78,0-262.114-176.311-422.427-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.198,0-232.549-143.458-402.383-143.458c-179.5,0-424.193-81.915-596.193-81.915c-190,0-30.05,85.495-213.041,82.496   c-187.195-3.068-217.543,142.223-382.481,137.993c-175.491-4.5-295.735-225.22-438.228-225.22   c-159.245,0-226.239,228.22-427.229,228.22c-136.97,0-242.988-143.993-413.979-139.493C16.043,101.416,4.5,159.153,0,161.993   c0,82,0,433.758,0,433.758L4060.591,609.252z">
									<span>3</span> унікальний <br/> дизайн
								</a>
								<a href="#proc-tab-4"
								  data-time="27"
								  data-spec="2"
								  data-label="верстка сайту"
								  data-graph1="M3998.042,150.053c-49.369-25.127-70.008-43.13-185.134-43.13   c-165,0-209.874,125.677-412.787,125.677c-192.087,0-257.418-136.547-419.752-136.547c-162.334,0-216.658,136.547-412.87,136.547   c-188.197,0-923.655,0.5-1098.988,0.5c-176.725,0-199.575-143.103-382.816-150.715c-181.802-7.553-239.729,153.104-413.729,153.104   c-182.002,0-275.87-216.656-444.695-216.27C104.995,19.5,9,142.494,9,142.494s-71.747,80.569-71.997,28.499l0.515,416.971   l4060.524,7.5V150.053z" 

								  data-graph2="M3671.111,607.471l-0.066-431.753c0,0-52.783,61.374-169.025,61.374   c-136.779,0-262.113-176.311-422.426-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.198,0-232.549-143.458-402.383-143.458c-179.5,0-424.193-81.915-596.193-81.915c-190,0,11.738,81.917-171.252,78.918   c-187.195-3.068-237.334,152.079-402.271,147.85C901.454,233.986,808.175,11.875,665.716,8.77   C472.256,4.553,431.79,234.095,230.8,234.095c-136.97,0-284.297-142.88-455.289-138.38   c-148.948,3.92-160.492,61.657-164.992,64.497c0,82,0,433.758,0,433.758L3671.111,607.471z">	
									<span>4</span> верстка<br/> сайту
								</a>
								<a href="#proc-tab-5"
								  data-time="13"
								  data-spec="3"
								  data-label="Інтерактивна анімація"
								  data-graph1="M4059.539,138.051c-49.369-25.127-70.008-43.13-185.133-43.13   c-165,0-209.875,125.677-412.787,125.677c-192.088,0-257.418-136.547-419.752-136.547c-162.334,0-216.658,136.547-412.87,136.547   c-188.197,0-214.675-149.881-390.008-149.881c-176.725,0-230.087,149.881-413.087,149.881   c-181.959,0-240.473-136.597-414.473-136.597c-182.002,0-225.997,140.505-416.84,135.885   C806.447,215.331,776.318,68.883,601.07,70.717C416.565,72.647,241.921,356.551,0,141.218l-0.985,278.916h4060.523V138.051z" 

								  data-graph2="M3413.855,607.471l-0.066-431.753c0,0-52.783,61.374-169.025,61.374   c-136.779,0-262.113-176.311-422.426-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.198,0-232.549-143.458-402.383-143.458c-179.5,0-181.757-51.635-353.757-51.635c-190,0,34.498,197.989-148.493,194.99   c-187.195-3.068-256.542-141.263-421.479-145.492c-175.491-4.5-252.345,139.89-418.178,143.056   C484.492,237.665,390.75,8.77,223.75,8.77C75.074,8.77-37,230.053-198,236.053c-148.896,5.549-444.236-78.681-448.736-75.841   c0,82,0,433.758,0,433.758L3413.855,607.471z">
								   <span>5</span> Інтерактивна<br/> анімація
								</a>
								<a href="#proc-tab-6"
								  data-time="10"
								  data-spec="2"
								  data-label="тестування і аналіз"
								  data-graph1="M4109.613,147.831c-49.369-25.127-70.008-43.13-185.135-43.13   c-165,0-209.873,125.677-412.787,125.677c-192.086,0-257.418-136.547-419.752-136.547c-162.334,0,13.162,9.536-183.05,9.536   c-188.197,0-180.417,127.13-355.75,127.13c-176.725,0-540.764-126.402-711.39-123.574c-181,3-284.122,130.457-443.75,127.13   c-159.999-3.335-239.796-137.881-409.873-138c-169.929-0.119-233.459,136-406.127,136c-180,0-234.25-149.668-408.25-149.668   C51.75,82.385-84,218.053-206,236.053c-136.821,20.187,96.75,348.919,96.75,348.919l4218.863,8.271V147.831z" 

								  data-graph2="M3139.855,607.471l-0.066-431.753c0,0-52.783,61.374-169.025,61.374   c-136.779,0-262.113-176.311-422.426-176.311c-160.312,0-221.519,176.311-430.548,176.311c-188.198,0,73.66-133.595-96.173-133.595   c-179.5,0-138.484-59.997-310.484-59.997c-190,0-99.216,14.217-282.231,14.284c-170.504,0.063-187.549,170.873-430.548,176.311   C822.848,238.021,761.804,87.471,595.97,90.637c-163.008,3.112-232.764,143.353-399.763,143.353   c-148.676,0-271.071-228.45-429.813-225.22c-148.969,3.031-682.63,148.603-687.13,151.442c0,82,0,433.758,0,433.758   L3139.855,607.471z">
									<span>6</span> тестування<br/> і аналіз
								</a>
								<a href="#proc-tab-7"
								  data-time="7"
								  data-spec="3"
								  data-label="контроль якості"
								  data-graph1="M3537.613,147.831c-49.369-25.127-70.008-43.13-185.135-43.13   c-165,0-209.873,125.677-412.787,125.677c-192.086,0-257.418-136.547-419.752-136.547c-162.334,0,13.162,9.536-183.05,9.536   c-188.197,0-180.417,127.13-355.75,127.13c-176.725,0-316.763-126.402-487.389-123.574c-181,3-270.123,128.457-429.75,125.13   c-159.999-3.335-286-134-428.864-136C465.224,93.674,394.935,232.6,222.267,232.6c-180,0-210.517-150.215-384.517-150.215   c-122,0-493.75,135.668-615.75,153.668c-136.821,20.187-44.242,347.421-44.242,347.421l4359.855,9.769V147.831z" 

								  data-graph2="M3383.855,607.471l-0.066-431.753c0,0-52.783,61.374-169.025,61.374   c-136.779,0-262.113-176.311-422.426-176.311c-160.312,0-221.519,176.311-430.548,176.311c-188.198,0,73.66-133.595-96.173-133.595   c-179.5,0-138.484-59.997-310.484-59.997c-190,0-340.116,194.485-523.132,194.553c-170.504,0.063-248.273-180.206-422.25-180.206   c-175.549,0-266.417,181.539-439.397,176.248C407.391,229.11,334.725,99.675,167.97,90.637   C15.728,82.385-59.259,230.822-218,234.053c-148.969,3.031-454.236-76.681-458.736-73.841c0,82,0,433.758,0,433.758   L3383.855,607.471z">
									<span>7</span> контроль <br/> якості
								</a>
								<a href="#proc-tab-8"
								  data-time="4"
								  data-spec="2"
								  data-label="обслуговування і підтримка"
								  data-graph1="M3681.56,145.551c-49.369-25.127-70.008-43.13-185.134-43.13   c-165,0-209.874,125.677-412.787,125.677c-192.087,0-257.418-136.547-419.752-136.547c-162.334,0-216.658,136.547-412.87,136.547   c-188.197,0-214.675-149.881-390.008-149.881c-176.725,0-230.087,149.881-413.087,149.881   c-181.959,0-209.224-125.677-383.224-125.677c-182.002,0-239.087,125.652-434.077,125.652   c-188.197,0-268.758-136.547-419.752-136.547c-180.881,0-237.904,232.024-589.834,43.024v293.083H3681.56V145.551z" 

								  data-graph2="M3948.85,427.634l-0.066-259.416c0,0-52.783,61.374-169.024,61.374   c-136.78,0-262.114-176.311-422.427-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.197,0-232.549-143.458-402.382-143.458c-179.5,0-224.174,143.458-396.174,143.458c-190,0-257.561-225.374-431.007-225.374   c-187.22,0-30.52,40.333-243.22,40.333c-207.78,0-240.633,185-427,185c-159.245,0-270.333-179.332-423.25-176.206   C453.095,56.425,347.334,230.885,159,230.551c-149-0.265-332.034-143-389-143c0,82-1,341-1,341L3948.85,427.634z">
									<span>8</span> обслуговування<br/> і підтримка
								</a>
							</div>
						</div>
					</div>
					<div class="graphic">
						<div class="curves">
							<div id="graph">
                                <div  class="graph-wrap graph-wrap-2">
                                    <svg id="graphic2" x="0px" y="0px" width="1200px" height="750px" viewBox="11.406 -368.917 1200 750" enable-background="new 11.406 -368.917 1200 750" xml:space="preserve">
                                        <g>
                                            <g class="g2">
                                                <path class="path2" id="graph2" fill="#003a78" fill-opacity="0.99" d="M4064.103,604.473l-0.066-431.753c0,0-52.783,61.374-169.024,61.374   c-136.78,0-262.114-176.311-422.427-176.311c-160.312,0-221.519,176.311-430.548,176.311   c-188.197,0-232.549-143.458-402.382-143.458c-179.5,0-224.174,143.458-396.174,143.458c-190,0-257.561-225.374-431.007-225.374   c-187.22,0-208.535,225.374-421.235,225.374c-207.78,0-231.355-138.041-417.722-138.041c-159.245,0-231.66,138.041-373.607,138.041   c-136.97,0-195.468-176.958-351.655-176.958c-149,0-187.775,111.917-244.741,111.917c0,82,0,421.919,0,421.919L4064.103,604.473z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="labels">
                                    <div class="label label-1">
                                        <div>
                                            <span>5%</span> Від загального часу
                                        </div>
                                    </div>
                                </div>
                                <div  class="graph-wrap graph-wrap-1">
                                    <svg id="graphic" x="0px" y="0px" width="1200px" height="750px" viewBox="11.406 -368.917 1200 750" enable-background="new 11.406 -368.917 1200 750" xml:space="preserve">
										<g class="g1">
											<path class="path1" id="graph1" fill="#0196FF" fill-opacity="1" d="M4060.524,150.053c-49.369-25.127-70.008-43.13-185.134-43.13
											c-165,0-209.874,125.677-412.787,125.677c-192.087,0-257.418-136.547-419.752-136.547c-162.334,0-216.658,136.547-412.87,136.547
											c-188.197,0-214.675-149.881-390.008-149.881c-176.725,0-230.087,149.881-413.087,149.881
											c-181.959,0-264.146-213.88-438.146-213.88c-182.002,0-223.813,213.88-418.804,213.88c-188.197,0-227.025-127.213-378.02-127.213
											C411.037,105.387,351.93,328.053,0,139.053v448.911l4060.524,7.5V150.053z"></path>
										</g>
                                    </svg>
                                </div>
							</div>
						</div>
						<div class="grid"></div>
					</div>
					<div class="s-circle"></div>
				</div>	
			</div>
		</section>
		
		<!--Popups-->
		<div class="popups_group">
			<!-- Menu Popup -->
			<div class="menu_popup">
				<!--<div class="bg_title">Меню</div>-->
				<div class="centrize">
					<div class="vertical-center">
						<div class="wrap">
							<div class="menu_popup_fx">
								<div class="menu lt">
									<ul>
										<li><a href="index.html" data-id="#mi_1">Головна</a></li>
										<li><a href="services.php" data-id="#mi_4">Послуги</a></li>
										<li class="active"><a href="process.php" data-id="#mi_5">Процес</a></li>
										<li><a href="industry.php" data-id="#mi_2">Індустрії</a></li>
									</ul>
								</div>
								<div class="menu rt">
									<ul>
										<li><a href="portfolio.php" data-id="#mi_3">Портфоліо</a></li>
										<li><a href="values.php" data-id="#mi_8">Цінності</a></li>
										<li><a href="reviews.php" data-id="#mi_6">Відгуки</a></li>
										<li><a href="contacts.php" data-id="#mi_7">Контакти</a></li>
									</ul>
								</div>
								<div class="clr"></div>
								<div class="lang">
									<a href="process.php" class="active">укр</a> / <a href="../process.php">eng</a> / <a href="../rus/process.php">рус</a>
								</div>
							</div>
							<div class="menu_content">
								<div class="menu_items">
									<div class="menu_item menu_item_1" id="mi_1">
										<svg width="249.328" height="191.667" viewBox="0 0 249.328 191.667">
										  <g id="menu-icon-1">
											<path fill="#00133e" d="M203.784 144.39c0 1.65-1.35 3-3 3H17.93c-1.65 0-3-1.35-3-3V8.833c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v135.56z" id="pageh"/>
											<g id="page4">
											  <path fill="#00133e" d="M242.948 105.14c0 1.648-1.35 3-3 3H57.094c-1.65 0-3-1.352-3-3V48.082c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v57.056z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M242.948 105.14c0 1.648-1.35 3-3 3H57.094c-1.65 0-3-1.352-3-3V48.082c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v57.056z"/>
											</g>
											<g id="page3">
											  <path fill="#00133e" d="M229.894 118.294c0 1.65-1.35 3-3 3H44.04c-1.65 0-3-1.35-3-3V34.928c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v83.366z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M229.894 118.294c0 1.65-1.35 3-3 3H44.04c-1.65 0-3-1.35-3-3V34.928c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v83.366z"/>
											</g>
											<g id="page2">
											  <path fill="#00133e" d="M216.84 129.166c0 1.65-1.352 3-3 3H30.984c-1.65 0-3-1.35-3-3V24.056c0-1.65 1.35-3 3-3H213.84c1.648 0 3 1.35 3 3v105.11z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M216.84 129.166c0 1.65-1.352 3-3 3H30.984c-1.65 0-3-1.35-3-3V24.056c0-1.65 1.35-3 3-3H213.84c1.648 0 3 1.35 3 3v105.11z"/>
											</g>
											<g id="page1">
											  <path fill="#00133e" d="M203.784 144.39c0 1.65-1.35 3-3 3H17.93c-1.65 0-3-1.35-3-3V8.833c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v135.56z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M203.784 144.39c0 1.65-1.35 3-3 3H17.93c-1.65 0-3-1.35-3-3V8.833c0-1.65 1.35-3 3-3h182.854c1.65 0 3 1.35 3 3v135.56z"/>
											</g>
											<g id="image">
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M62.25 98.66c0 .55.45 1 1 1h36.463c.55 0 1-.45 1-1V54.8c0-.55-.45-1-1-1H63.25c-.55 0-1 .45-1 1v43.86z"/>
											  <path fill="#055BFA" d="M62.25 98.66c0 .55.45 1 1 1h36.463c.55 0 1-.45 1-1V54.8c0-.55-.45-1-1-1H63.25c-.55 0-1 .45-1 1v43.86z"/>
											</g>
											<g id="lines" fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
											  <path d="M20.475 79.91H43.09M20.475 73.38h28.05M20.475 66.854H46.35M20.475 60.327H43.09M20.475 53.8h28.05M20.475 47.272H46.35M62.25 47.272h134.357M113.785 99.49h68.69M113.785 92.963h62.383M113.785 86.436h68.69M113.785 79.91h55.207M113.785 73.38h68.69M113.785 66.854h68.69M62.25 40.744h14.025M113.785 60.327h28.05M20.475 40.744h28.05M20.475 26.384h28.05M53.526 19.856V147.39M14.93 31.606h188.853M14.93 19.857h188.853"/>
											</g>
											<g id="mouse">
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M165.592 155.417c4.558 6.877 2.66 16.232-4.217 20.79l-7.38 4.89c-6.877 4.56-16.232 2.66-20.79-4.217l-24.862-37.516c-4.558-6.877-2.66-16.233 4.217-20.79l7.38-4.892c6.877-4.557 16.232-2.658 20.79 4.22l24.862 37.515z"/>
											  <path fill="#00133e" d="M165.592 155.417c4.558 6.877 2.66 16.232-4.217 20.79l-7.38 4.89c-6.877 4.56-16.232 2.66-20.79-4.217l-24.862-37.516c-4.558-6.877-2.66-16.233 4.217-20.79l7.38-4.892c6.877-4.557 16.232-2.658 20.79 4.22l24.862 37.515z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M115.905 150.775l32.388-21.462M116.512 116.523l15.587 23.52"/>
											</g>
										  </g>
										</svg>
										<div class="name">Головна сторінка <span>Поверніться туди, звідки починали</span></div>
									</div>
									<div class="menu_item menu_item_2" id="mi_2">
										<svg width="244.333" height="227.333" viewBox="0 0 244.333 227.333">
										  <g id="menu-icon-2">
											<g id="layer3">
											  <path fill="#00133e" d="M124.062 220.798L42.785 173.19l81.277-47.84 80.916 47.84z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M124.062 220.798L42.785 173.19l81.277-47.84 80.916 47.84z" opacity=".3"/>
											</g>
											<g id="layer2">
											  <path fill="#00133e" d="M124.1 204.527l-97.975-57.385 97.974-57.67 97.538 57.67z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M124.1 204.527l-97.975-57.385 97.974-57.67 97.538 57.67z" opacity=".5"/>
											</g>
											<g id="layer1">
											  <path fill="#00133e" d="M124.126 185.62L13.95 121.086l110.176-64.854 109.688 64.854z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M124.126 185.62L13.95 121.086l110.176-64.854 109.688 64.854z" opacity=".7"/>
											</g>
											<g id="cube3">
											  <path fill="#00133e" d="M139.815 102.103V64.72l30.836 17.62.095 38.142z"/>
											  <path fill="#00133e" d="M170.65 82.34l31.628-17.618v36.51l-31.142 19.854M202.278 63.938L170.65 81.772l-31.268-17.834M139.382 63.938l31.362-15.412 31.99 15.412"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M139.815 102.103V64.72l30.836 17.62.095 38.142z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M170.65 82.34l31.628-17.618v36.51l-31.142 19.854M139.382 63.938l31.362-15.412 31.99 15.412"/>
											  <path fill="#00133e" d="M150.34 44.128V19.34l20.45 11.684.06 25.292z"/>
											  <path fill="#00133e" d="M170.788 31.024L191.76 19.34v24.212l-20.65 13.164M191.76 18.82l-20.97 11.826-20.737-11.826M150.053 18.82L170.85 8.6l21.213 10.22"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M150.34 44.128V19.34l20.45 11.684.06 25.292z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M170.788 31.024L191.76 19.34v24.212l-20.65 13.164M150.053 18.82L170.85 8.6l21.213 10.22"/>
											</g>
											<g id="cube2">
											  <path fill="#00133e" d="M47.253 102.103V64.72L78.09 82.34l.093 38.142zM78.09 82.34l31.626-17.618v36.51l-31.142 19.854M109.716 63.938L78.09 81.772 46.82 63.938M46.82 63.938L78.18 48.526l31.99 15.412"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M47.253 102.103V64.72L78.09 82.34l.093 38.142zM78.09 82.34l31.626-17.618v36.51l-31.142 19.854M46.82 63.938L78.18 48.526l31.99 15.412"/>
											  <path fill="#00133e" d="M92.883 139.91v-37.382l30.836 17.62.092 38.14zM123.72 120.148l31.626-17.62v36.513l-31.143 19.853M57.778 44.128V19.34l20.45 11.684.06 25.292z"/>
											  <path fill="#00133e" d="M78.226 31.024L99.198 19.34v24.212l-20.65 13.164M99.2 18.82L78.226 30.646 57.49 18.82M57.49 18.82L78.29 8.6 99.5 18.82"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M57.778 44.128V19.34l20.45 11.684.06 25.292z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M78.226 31.024L99.198 19.34v24.212l-20.65 13.164M57.49 18.82L78.29 8.6 99.5 18.82"/>
											</g>
											<g id="cube1">
											  <path fill="#00133e" d="M155.345 101.745l-31.627 17.834-31.27-17.835"/>
											  <path fill="#00133e" d="M92.448 101.745l31.364-15.412 31.99 15.412"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M92.883 139.91v-37.382l30.836 17.62.092 38.14zM123.72 120.148l31.626-17.62v36.513l-31.143 19.853M92.448 101.745l31.364-15.412 31.99 15.412"/>
											  <path fill="#055BFA" d="M92.883 87.762v-37.38L123.72 68l.092 38.142zM123.72 68l31.626-17.62v36.513l-31.143 19.852M123.812 34.186L92.45 49.598l31.268 17.834 31.627-17.834h.458z" opacity=".8"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M92.883 87.762v-37.38L123.72 68l.092 38.142zM123.72 68l31.626-17.62v36.513l-31.143 19.852M92.448 49.597l31.364-15.41 31.99 15.41"/>
											</g>
										  </g>
										</svg>
										<div class="name">Світові індустрії <span>З якими ми переважно працюємо</span></div>
									</div>
									<div class="menu_item menu_item_3" id="mi_3">
										<svg width="392.333" height="170" viewBox="0 0 392.333 170">
										  <g id="menu-icon-3">
											<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M126.503 122.638c-.187 2.034-2.978 3.44-6.235 3.14l-90.323-8.3c-3.256-.3-5.744-2.192-5.557-4.227l4.627-50.336c.187-2.035 2.978-3.44 6.235-3.142l90.323 8.303c3.256.3 5.744 2.19 5.557 4.225l-4.627 50.338z" opacity=".3" id="page3"/>
											<g id="page2">
											  <path fill="#00133e" d="M135.15 115.227c-.188 2.034-2.98 3.44-6.236 3.14l-90.323-8.3c-3.255-.3-5.743-2.192-5.556-4.227l4.627-50.337c.188-2.035 2.98-3.44 6.236-3.142l90.323 8.304c3.255.3 5.743 2.19 5.556 4.225l-4.627 50.337z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M135.15 115.227c-.188 2.034-2.98 3.44-6.236 3.14l-90.323-8.3c-3.255-.3-5.743-2.192-5.556-4.227l4.627-50.337c.188-2.035 2.98-3.44 6.236-3.142l90.323 8.304c3.255.3 5.743 2.19 5.556 4.225l-4.627 50.337z" opacity=".5"/>
											</g>
											<g id="page1">
											  <path fill="#00133e" d="M143.795 109.05c-.187 2.035-2.978 3.44-6.235 3.142l-90.323-8.302c-3.256-.3-5.744-2.19-5.557-4.226l4.627-50.337c.187-2.035 2.978-3.44 6.235-3.142l90.323 8.303c3.256.3 5.744 2.19 5.557 4.225l-4.627 50.338z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M143.795 109.05c-.187 2.035-2.978 3.44-6.235 3.142l-90.323-8.302c-3.256-.3-5.744-2.19-5.557-4.226l4.627-50.337c.187-2.035 2.978-3.44 6.235-3.142l90.323 8.303c3.256.3 5.744 2.19 5.557 4.225l-4.627 50.338z" opacity=".7"/>
											</g>
											<g id="left">
											  <g id="lines2">
												<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M91.18 69.83l39.888 3.668M90.387 78.44l29.85 2.744M89.596 87.05l39.89 3.667" opacity=".6"/>
											  </g>
											  <path fill="#FFF" d="M68.312 79.84l-2.42 5.56-2.434-.224 7.896-17.658 2.813.26 4.545 18.8-2.515-.23-1.42-5.913-6.465-.595zm6.173-1.288l-1.33-5.413c-.296-1.23-.468-2.335-.64-3.415l-.055-.005c-.368 1.03-.742 2.142-1.223 3.216l-2.27 5.11 5.518.506z" id="text"/>
											</g>
											<g id="right">
											  <circle fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" stroke-dasharray="4.095,4.095" cx="326.812" cy="81.603" r="26.078" id="circle0"/>
											  <g id="circle">
												<path fill="#055BFA" d="M377.594 81.603c0 14.402-11.676 26.077-26.077 26.077-14.403 0-26.078-11.675-26.078-26.077 0-14.402 11.674-26.077 26.077-26.077 14.4 0 26.077 11.675 26.077 26.077"/>
												<circle fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" cx="351.516" cy="81.603" r="26.078"/>
												<path fill="none" stroke="#FFF" stroke-width="1.25" stroke-miterlimit="10" d="M341.576 81.95l6.76 6.363 13.12-13.42"/>
											  </g>
											</g>
											<g id="note">
											  <path fill="#00133e" d="M312.514 144V20.582c0-3.3-2.7-6-6-6H116.89c-3.3 0-6 2.7-6 6v123.11"/>
											  <path fill="#00133e" d="M300.735 144V31.185c0-3.3-2.7-6-6-6H128.668c-3.3 0-6 2.7-6 6v112.53"/>
											  <path fill="#00133e" d="M330.813 152.948c-.128 1.357-1.105 2.47-2.47 2.47H95.06c-1.364 0-2.34-1.112-2.47-2.47-.154-1.642-1.08-4.838-1.235-6.48-.128-1.356 1.106-2.47 2.47-2.47h235.754c1.363 0 2.597 1.113 2.47 2.47-.157 1.642-1.082 4.84-1.237 6.48"/>
											  <path fill="#00133e" d="M233.175 143.896c0 3.353-2.144 6.07-4.787 6.07h-33.373c-2.644 0-4.787-2.718-4.787-6.07"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M312.514 144V20.582c0-3.3-2.7-6-6-6H116.89c-3.3 0-6 2.7-6 6v123.11"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M300.735 144V31.185c0-3.3-2.7-6-6-6H128.668c-3.3 0-6 2.7-6 6v112.53"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M330.813 152.948c-.128 1.357-1.105 2.47-2.47 2.47H95.06c-1.364 0-2.34-1.112-2.47-2.47-.154-1.642-1.08-4.838-1.235-6.48-.128-1.356 1.106-2.47 2.47-2.47h235.754c1.363 0 2.597 1.113 2.47 2.47-.157 1.642-1.082 4.84-1.237 6.48z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M233.175 143.896c0 3.353-2.144 4.834-4.787 4.834h-33.373c-2.644 0-4.787-1.48-4.787-4.834"/>
											</g>
											<g id="lines" fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
											  <path d="M166.66 46.145h90.427M179.902 58.974h65.558M155.28 71.326h112.843M179.902 83.678h65.558M165.422 96.03h92.558M155.28 120.733h112.843M179.902 108.38h65.558"/>
											</g>
										  </g>
										</svg>
										<div class="name">Наше портфоліо <span>Переконайтесь у якості наших робіт</span></div>
									</div>
									<div class="menu_item menu_item_4" id="mi_4">
										<svg width="288" height="188" viewBox="0 0 288 188">
										  <g id="menu-icon-4">
											<g id="page4">
											  <path fill="#00133e" d="M250.892 162.044c0 3.567-2.686 6.46-5.997 6.46h-85.617c-3.312 0-5.997-2.893-5.997-6.46V84.93c0-3.57 2.687-6.46 5.998-6.46h85.617c3.312 0 5.997 2.89 5.997 6.46v77.114z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M250.892 162.044c0 3.567-2.686 6.46-5.997 6.46h-85.617c-3.312 0-5.997-2.893-5.997-6.46V84.93c0-3.57 2.687-6.46 5.998-6.46h85.617c3.312 0 5.997 2.89 5.997 6.46v77.114z" opacity=".5"/>
											</g>
											<g id="page3">
											  <path fill="#00133e" d="M258.433 157.287c0 3.603-2.685 6.524-5.997 6.524H166.82c-3.313 0-5.997-2.92-5.997-6.523V79.405c0-3.604 2.685-6.525 5.996-6.525h85.616c3.313 0 5.997 2.92 5.997 6.525v77.882z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M258.433 156.456c0 3.567-2.685 6.46-5.997 6.46H166.82c-3.313 0-5.997-2.893-5.997-6.46V79.34c0-3.567 2.685-6.46 5.996-6.46h85.616c3.313 0 5.997 2.893 5.997 6.46v77.116z" opacity=".7"/>
											</g>
											<g id="page2">
											  <path fill="#00133e" d="M265.978 149.99c0 3.57-2.892 6.46-6.46 6.46h-92.235c-3.568 0-6.46-2.89-6.46-6.46V72.877c0-3.568 2.892-6.46 6.46-6.46h92.235c3.568 0 6.46 2.892 6.46 6.46v77.115z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M265.978 149.99c0 3.57-2.892 6.46-6.46 6.46h-92.235c-3.568 0-6.46-2.89-6.46-6.46V72.877c0-3.568 2.892-6.46 6.46-6.46h92.235c3.568 0 6.46 2.892 6.46 6.46v77.115z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M196.71 66.54v-9.055c0-1.017.92-1.842 2.052-1.842h29.276c1.132 0 2.05.825 2.05 1.842v9.056"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M200.86 66.49v-5.433c0-.61.69-1.104 1.54-1.104H224.4c.852 0 1.54.494 1.54 1.104v5.432M168.846 63.6h17.406v2.816h-17.406zM241.027 63.6h17.405v2.816h-17.405z"/>
											</g>
											<g id="lines2" fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
											  <path d="M189.296 105.772h48.81M193.755 113.313h39.892M195.773 120.854h35.856M189.296 128.396h48.81M192.678 135.938h42.047M189.296 143.48h48.81"/>
											</g>
											<g id="image3">
											  <image overflow="visible" width="483" height="366" xlink:href="../images/svg/992C169B.png" transform="matrix(.24 0 0 .24 155.54 42.78)"/>
											  <path fill="#055BFA" d="M235.263 93.583c0 .55-.45 1-1 1h-41.726c-.55 0-1-.45-1-1V79.777c0-.55.45-1 1-1h41.726c.55 0 1 .45 1 1v13.806z"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M235.263 93.583c0 .55-.45 1-1 1h-41.726c-.55 0-1-.45-1-1V79.777c0-.55.45-1 1-1h41.726c.55 0 1 .45 1 1v13.806z"/>
											</g>
											<g id="page1">
											  <path fill="#00133e" d="M176.293 163.673l-4.814 8.346-9.31 7.075-12.236 1.687-82.884-18.388V32.98l109.243-11.508z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M154.56 180.408c12.185 0 21.632-10.156 21.632-22.342M22.503 158.066c0 12.185 9.878 22.342 22.064 22.342 12.185 0 22.063-10.157 22.063-22.342M220.067 35.035c0-12.185-9.877-22.75-22.063-22.75M110.533 34.347c0-12.185-9.878-22.064-22.064-22.064s-21.84 9.88-21.84 22.064M176.19 158.066l.498-123.718h-66.805M66.63 34.347v123.72M176.19 34.347h43.88M22.178 158.066h43.878M198.005 12.283H86.143M159.703 180.408H49.12"/>
											</g>
											<g id="image1">
											  <image overflow="visible" width="408" height="444" xlink:href="../images/svg/992C169E.png" transform="matrix(.24 0 0 .24 53.1 30.93)"/>
											  <path fill="#055BFA" d="M114.812 100.46c0 .552-.45 1-1 1H90.104c-.55 0-1-.448-1-1V67.93c0-.55.45-1 1-1h23.708c.55 0 1 .45 1 1v32.53z"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M114.812 100.46c0 .552-.45 1-1 1H90.104c-.55 0-1-.448-1-1V67.93c0-.55.45-1 1-1h23.708c.55 0 1 .45 1 1v32.53z"/>
											</g>
											<g id="lines" fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
											  <path d="M123.49 66.93h31.636M123.49 75.883h31.636M123.49 84.835h31.636M123.49 101.46h31.636M123.49 92.51h31.636M123.49 116.808h31.636M123.49 125.76h31.636M123.49 134.713h31.636M123.49 142.386h31.636M123.49 151.338h31.636"/>
											</g>
											<g id="image2">
											  <image overflow="visible" width="408" height="444" xlink:href="../images/svg/992C169D.png" transform="matrix(.24 0 0 .24 53.1 80.81)"/>
											  <path fill="#055BFA" d="M114.812 150.338c0 .55-.45 1-1 1H90.104c-.55 0-1-.45-1-1v-32.53c0-.55.45-1 1-1h23.708c.55 0 1 .45 1 1v32.53z"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M114.812 150.338c0 .55-.45 1-1 1H90.104c-.55 0-1-.45-1-1v-32.53c0-.55.45-1 1-1h23.708c.55 0 1 .45 1 1v32.53z"/>
											</g>
										  </g>
										</svg>
										<div class="name">Послуги компанії <span>Перелік послуг, які надає компанія</span></div>
									</div>
									<div class="menu_item menu_item_5 active" id="mi_5">
										<svg width="357" height="179" viewBox="0 0 357 179">
										  <g id="menu-icon-5">
											<g opacity=".7" id="star">
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M293.11 117.604h5.784c.77-1.646 2.237-5.374 3.43-8.577.213-.568.656-1.028 1.225-1.255l4.542-1.85c.522-.212 1.146-.195 1.67.035 3.265 1.37 7.12 2.94 8.868 3.53l4.036-3.975c-.64-1.714-2.288-5.34-3.743-8.393-.26-.56-.275-1.21-.033-1.783l1.865-4.446c.227-.538.67-.978 1.226-1.174 3.284-1.276 7.123-2.844 8.788-3.643v-5.537c-1.698-.753-5.487-2.208-8.758-3.367-.568-.197-1.046-.637-1.27-1.21l-1.88-4.44c-.23-.557-.23-1.18.014-1.737 1.405-3.15 2.957-6.875 3.58-8.624l-4.053-3.936c-1.73.62-5.486 2.238-8.656 3.69-.54.245-1.175.262-1.715.032l-4.543-1.827c-.556-.232-1-.67-1.208-1.21-1.294-3.22-2.897-6.976-3.71-8.61h-5.77c-.77 1.65-2.254 5.373-3.445 8.576-.196.573-.652 1.03-1.208 1.26l-4.526 1.844c-.538.213-1.145.213-1.684-.017-3.267-1.39-7.14-2.94-8.87-3.513l-4.05 3.94c.652 1.714 2.285 5.34 3.74 8.41.28.556.28 1.21.05 1.782l-1.878 4.445c-.246.54-.674.98-1.226 1.176-3.287 1.275-7.11 2.844-8.79 3.626v5.553c1.697.77 5.49 2.208 8.756 3.366.586.213 1.046.652 1.276 1.208l1.878 4.442c.226.538.213 1.16-.017 1.72-1.405 3.15-2.957 6.89-3.58 8.622l4.053 3.953c1.73-.637 5.49-2.256 8.657-3.69.54-.246 1.163-.263 1.72-.05l4.537 1.845c.556.23.98.657 1.213 1.21 1.288 3.22 2.89 6.96 3.705 8.594zM295.842 74c-5.362 0-9.725 4.25-9.725 9.46 0 5.228 4.362 9.46 9.725 9.46 5.357 0 9.72-4.25 9.72-9.46S301.2 74 295.842 74z"/>
											</g>
											<g id="zoom">
											  <g opacity=".6">
												<path fill="none" stroke="#143b88" stroke-width="1.5" stroke-miterlimit="10" d="M32.55 69.757c-5.705 17.97 4.237 37.16 22.206 42.864 17.97 5.705 37.16-4.237 42.864-22.206 5.705-17.97-4.237-37.16-22.206-42.864-17.97-5.704-37.16 4.238-42.865 22.207zM87.21 87.11c-3.88 12.218-16.93 18.98-29.15 15.1-12.217-3.88-18.978-16.93-15.1-29.148 3.88-12.22 16.93-18.98 29.148-15.1 12.22 3.878 18.98 16.928 15.1 29.147z"/>
											  </g>
											  <g opacity=".6">
												<path fill="none" stroke="#143b88" stroke-width="1.5" stroke-miterlimit="10" d="M122.383 135.213c.976 1.15.836 2.873-.314 3.85l-5.205 4.418c-1.15.978-2.873.837-3.85-.312l-21.97-27.983c-.975-1.15-.835-2.873.315-3.85l3.12-2.65c1.15-.976 2.874-.835 3.85.314l24.053 26.213z"/>
											  </g>
											  <g opacity=".6">
												<path transform="rotate(-40.34 90.67 107.36)" fill="none" stroke="#143b88" stroke-width="1.5" stroke-miterlimit="10" d="M88.277 103.87h4.778v6.967h-4.778z"/>
											  </g>
											</g>
											<g id="page3">
											  <path fill="#00133e" d="M278.992 171.833c0 1.65-1.35 3-3 3H114.42c-1.65 0-3-1.35-3-3V159.85c0-1.65 1.35-3 3-3H275.99c1.65 0 3 1.35 3 3v11.983z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M278.992 171.833c0 1.65-1.35 3-3 3H114.42c-1.65 0-3-1.35-3-3V159.85c0-1.65 1.35-3 3-3H275.99c1.65 0 3 1.35 3 3v11.983z" opacity=".5"/>
											</g>
											<g id="page2">
											  <path fill="#00133e" d="M286.502 163.636c0 1.65-1.35 3-3 3H106.91c-1.65 0-3-1.35-3-3v-11.984c0-1.65 1.35-3 3-3H283.5c1.65 0 3 1.35 3 3v11.984z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M286.502 163.636c0 1.65-1.35 3-3 3H106.91c-1.65 0-3-1.35-3-3v-11.984c0-1.65 1.35-3 3-3H283.5c1.65 0 3 1.35 3 3v11.984z" opacity=".8"/>
											</g>
											<g id="page1">
											  <path fill="#00133e" d="M294.313 154.072c0 1.65-1.35 3-3 3H99.1c-1.65 0-3-1.35-3-3V11.696c0-1.65 1.35-3 3-3h192.213c1.65 0 3 1.35 3 3v142.376z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M294.313 154.072c0 1.65-1.35 3-3 3H99.1c-1.65 0-3-1.35-3-3V11.696c0-1.65 1.35-3 3-3h192.213c1.65 0 3 1.35 3 3v142.376z"/>
											</g>
											<g id="arrows">
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M128.186 60.126h134.04M195.687 54.096v12.06M195.506 96.424v9.9M250.383 60.126v46.652M140.93 60.582v5.575"/>
											  <path fill="#143b88" d="M200.373 66.158l-4.687 4.75-4.687-4.75zM200.192 106.234l-4.686 4.75-4.688-4.75zM255.07 106.234l-4.687 4.75-4.687-4.75zM145.617 66.158l-4.687 4.75-4.687-4.75z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M140.93 101.57v5.576"/>
											  <path fill="#143b88" d="M145.617 106.234l-4.687 4.75-4.687-4.75z"/>
											</g>
											<g id="text1">
											  <path fill="#143b88" d="M213.437 53.096c0 .55-.45 1-1 1h-33.5c-.55 0-1-.45-1-1v-18.48c0-.55.45-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#515B7A" stroke-width="1.25" stroke-miterlimit="10" d="M189.456 40.386h12.46M184.848 46.017h21.676"/>
											  <path fill="#143b88" d="M213.437 95.45c0 .55-.45 1-1 1h-33.5c-.55 0-1-.45-1-1V76.97c0-.55.45-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#515B7A" stroke-width="1.25" stroke-miterlimit="10" d="M189.456 82.74h12.46M184.848 88.37h21.676"/>
											  <image overflow="visible" width="448" height="386" xlink:href="../images/svg/A87894E6.png" transform="matrix(.24 0 0 .24 141.94 80.96)"/>
											  <path fill="#055BFA" d="M213.437 136.437c0 .55-.45 1-1 1h-33.5c-.55 0-1-.45-1-1v-18.48c0-.55.45-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#FFF" stroke-width="1.25" stroke-miterlimit="10" d="M189.456 123.727h12.46M184.848 129.358h21.676"/>
											  <image overflow="visible" width="448" height="386" xlink:href="../images/svg/A87894EA.png" transform="matrix(.24 0 0 .24 196.59 80.96)"/>
											  <path fill="#055BFA" d="M268.087 136.437c0 .55-.45 1-1 1h-33.5c-.552 0-1-.45-1-1v-18.48c0-.55.448-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M213.437 136.437c0 .55-.45 1-1 1h-33.5c-.55 0-1-.45-1-1v-18.48c0-.55.45-1 1-1h33.5c.55 0 1 .45 1 1v18.48zM268.087 136.437c0 .55-.45 1-1 1h-33.5c-.552 0-1-.45-1-1v-18.48c0-.55.448-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#FFF" stroke-width="1.25" stroke-miterlimit="10" d="M244.106 123.727h12.46M239.498 129.358h21.676"/>
											  <path fill="#143b88" d="M158.787 95.45c0 .55-.45 1-1 1h-33.5c-.55 0-1-.45-1-1V76.97c0-.55.45-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#515B7A" stroke-width="1.25" stroke-miterlimit="10" d="M134.807 82.74h12.46M130.198 88.37h21.677"/>
											  <path fill="#143b88" d="M158.68 136.437c0 .55-.45 1-1 1h-33.5c-.55 0-1-.45-1-1v-18.48c0-.55.45-1 1-1h33.5c.55 0 1 .45 1 1v18.48z"/>
											  <path fill="none" stroke="#515B7A" stroke-width="1.25" stroke-miterlimit="10" d="M134.7 123.727h12.46M130.092 129.358h21.676"/>
											</g>
										  </g>
										</svg>
										<div class="name">Процес роботи <span>Послідовність етапів нашої роботи</span></div>
									</div>
									<div class="menu_item menu_item_6" id="mi_6">
										<svg width="148" height="159" viewBox="0 0 148 159">
										  <g id="page-3">
											<path fill="#00133E" d="M98.535,133.861H3.464c-1.258,0-2.288-1.029-2.288-2.289V32.044c0-1.259,1.03-2.289,2.288-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v99.528C100.824,132.832,99.795,133.861,98.535,133.861"/>
											<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M98.535,133.861H3.464c-1.258,0-2.288-1.029-2.288-2.289V32.044c0-1.259,1.03-2.289,2.288-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v99.528C100.824,132.832,99.795,133.861,98.535,133.861z"/>
											<path fill="#00133E" d="M144.535,133.861H49.464c-1.259,0-2.289-1.029-2.289-2.289V32.044c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v99.528C146.824,132.832,145.795,133.861,144.535,133.861"/>
											<path fill="none" stroke="#082765" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M144.535,133.861H49.464c-1.259,0-2.289-1.029-2.289-2.289V32.044c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v99.528C146.824,132.832,145.795,133.861,144.535,133.861z"/>
										  </g>
										  <g id="page-2">
											<path fill="#00133E" d="M108.535,145.256H13.464c-1.259,0-2.289-1.029-2.289-2.289V20.65c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v122.316C110.824,144.227,109.795,145.256,108.535,145.256"/>
											<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M108.535,145.256H13.464c-1.259,0-2.289-1.029-2.289-2.289V20.65c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v122.316C110.824,144.227,109.795,145.256,108.535,145.256z"/>
											<path fill="#00133E" d="M134.535,145.256H39.464c-1.259,0-2.289-1.029-2.289-2.289V20.65c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v122.316C136.824,144.227,135.795,145.256,134.535,145.256"/>
											<path fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M134.535,145.256H39.464c-1.259,0-2.289-1.029-2.289-2.289V20.65c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v122.316C136.824,144.227,135.795,145.256,134.535,145.256z"/>
										  </g>
										  <g id="page-1">
											<path fill="#00133E" d="M121.535,157.922H26.464c-1.259,0-2.289-1.029-2.289-2.289V7.984c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v147.649C123.824,156.893,122.795,157.922,121.535,157.922"/>
											<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M121.535,157.922H26.464c-1.259,0-2.289-1.029-2.289-2.289V7.984c0-1.259,1.03-2.289,2.289-2.289h95.071 c1.26,0,2.289,1.03,2.289,2.289v147.649C123.824,156.893,122.795,157.922,121.535,157.922z"/>
											<path fill="#00133E" d="M101.41,9.695H46.589c-2.37,0-4.309-1.939-4.309-4.309c0-2.369,1.938-4.308,4.309-4.308h54.821 c2.371,0,4.311,1.939,4.311,4.308C105.721,7.756,103.781,9.695,101.41,9.695"/>
											<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M101.41,9.695H46.589c-2.37,0-4.309-1.939-4.309-4.309c0-2.369,1.938-4.308,4.309-4.308h54.821c2.371,0,4.311,1.939,4.311,4.308 C105.721,7.756,103.781,9.695,101.41,9.695z"/>
										  </g>
										  <g id="circle-1">
											<path fill="#005BFD" d="M63.152,43.862c0,8.161-6.617,14.777-14.778,14.777c-8.16,0-14.777-6.616-14.777-14.777 s6.617-14.777,14.777-14.777C56.535,29.085,63.152,35.701,63.152,43.862"/>
											<circle fill="none" stroke="#1490E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="48.375" cy="43.862" r="14.778"/>
											<path fill="#005BFD" d="M51.557,39.687c0,1.757-1.424,3.181-3.181,3.181c-1.758,0-3.183-1.424-3.183-3.181 c0-1.758,1.425-3.182,3.183-3.182C50.133,36.505,51.557,37.929,51.557,39.687"/>
											<circle fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="48.375" cy="39.687" r="3.182"/>
											<path fill="#005BFD" d="M42.523,51.977V51.03c0-3.219,2.633-5.853,5.853-5.853c3.218,0,5.851,2.634,5.851,5.853v0.946"/>
											<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M42.523,51.977V51.03c0-3.219,2.633-5.853,5.853-5.853c3.218,0,5.851,2.634,5.851,5.853v0.946"/>
										  </g>
										  <g id="circle-2">
											<path fill="#00133E" d="M63.152,83.861c0,8.162-6.617,14.777-14.778,14.777c-8.16,0-14.777-6.615-14.777-14.777 c0-8.16,6.617-14.777,14.777-14.777C56.535,69.084,63.152,75.702,63.152,83.861"/>
											<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="48.375" cy="83.861" r="14.778"/>
											<path fill="#00133E" d="M51.557,79.686c0,1.757-1.424,3.181-3.181,3.181c-1.758,0-3.183-1.424-3.183-3.181 c0-1.758,1.425-3.182,3.183-3.182C50.133,76.504,51.557,77.928,51.557,79.686"/>
											<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="48.375" cy="79.686" r="3.182"/>
											<path fill="#00133E" d="M42.523,91.977v-0.947c0-3.219,2.633-5.852,5.853-5.852c3.218,0,5.851,2.633,5.851,5.852v0.947"/>
											<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M42.523,91.977v-0.947c0-3.219,2.633-5.852,5.853-5.852c3.218,0,5.851,2.633,5.851,5.852v0.947"/>
										  </g>
										  <g id="lines-2" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
											<polyline points="103.012,73.862 105.523,73.862 108.568,73.862 111.227,73.862 113.209,73.862"/>
											<polyline points="83.85,73.862 86.58,73.862 89.625,73.862 92.814,73.862 96.318,73.862"/>
											<polyline points="73,73.862 74.691,73.862 78.025,73.862"/>
											<line x1="96.318" y1="83.861" x2="113.209" y2="83.861"/>
											<line x1="73" y1="83.861" x2="83.486" y2="83.861"/>
											<line x1="107.408" y1="93.861" x2="113.209" y2="93.861"/>
											<polyline points="73,93.861 78.848,93.861 82.617,93.861 87.328,93.861 92.258,93.861"/>
										  </g>
										  <g id="circle-3">
											<path fill="#00133E" d="M63.152,123.861c0,8.162-6.617,14.777-14.778,14.777c-8.16,0-14.777-6.615-14.777-14.777 c0-8.16,6.617-14.777,14.777-14.777C56.535,109.084,63.152,115.701,63.152,123.861"/>
											<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="48.375" cy="123.861" r="14.778"/>
											<path fill="#00133E" d="M51.557,119.686c0,1.758-1.424,3.182-3.181,3.182c-1.758,0-3.183-1.424-3.183-3.182 c0-1.756,1.425-3.18,3.183-3.18C50.133,116.506,51.557,117.93,51.557,119.686"/>
											<circle fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="48.375" cy="119.686" r="3.182"/>
											<path fill="#00133E" d="M42.523,131.977v-0.947c0-3.219,2.633-5.852,5.853-5.852c3.218,0,5.851,2.633,5.851,5.852v0.947"/>
											<path fill="none" stroke="#285FAF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M42.523,131.977v-0.947c0-3.219,2.633-5.852,5.853-5.852c3.218,0,5.851,2.633,5.851,5.852v0.947"/>
										  </g>
										  <g id="lines-3" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
											<polyline points="103.012,113.861 105.523,113.861 108.568,113.861 111.227,113.861 113.209,113.861"/>
											<polyline points="83.85,113.861 86.58,113.861 89.625,113.861 92.814,113.861 96.318,113.861"/>
											<polyline points="73,113.861 74.691,113.861 78.025,113.861"/>
											<line x1="96.318" y1="123.861" x2="113.209" y2="123.861"/>
											<line x1="73" y1="123.861" x2="83.486" y2="123.861"/>
											<line x1="107.408" y1="133.861" x2="113.209" y2="133.861"/>
											<polyline points="73,133.861 78.848,133.861 82.617,133.861 87.328,133.861 92.258,133.861"/>
										  </g>
										  <g id="lines-1" fill="none" stroke="#143C81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
											<polyline points="103.012,33.862 105.523,33.862 108.568,33.862 111.227,33.862 113.209,33.862"/>
											<polyline points="83.85,33.862 86.58,33.862 89.625,33.862 92.814,33.862 96.318,33.862"/>
											<polyline points="73,33.862 74.691,33.862 78.025,33.862"/>
											<line x1="96.318" y1="43.862" x2="113.209" y2="43.862"/>
											<line x1="73" y1="43.862" x2="83.486" y2="43.862"/>
											<line x1="107.408" y1="53.862" x2="113.209" y2="53.862"/>
											<polyline points="73,53.862 78.848,53.862 82.617,53.862 87.328,53.862 92.258,53.862"/>
										  </g>
										</svg>
										<div class="name">Відгуки замовників <span>Досвід співпраці наших замовників</span></div>
									</div>
									<div class="menu_item menu_item_7" id="mi_7">
										<svg width="317" height="219.667" viewBox="0 0 317 219.667">
										  <g id="menu-icon-7">
											<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M200.126 185.346c0 1.355-1.39 2.455-3.104 2.455h-93.095c-1.713 0-3.103-1.1-3.103-2.454V34.14c0-1.357 1.39-2.456 3.103-2.456h93.095c1.714 0 3.104 1.1 3.104 2.455v151.206z" opacity=".5" id="page3"/>
											<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M222.575 185.346c0 1.355-1.39 2.455-3.103 2.455h-93.095c-1.713 0-3.103-1.1-3.103-2.454V34.14c0-1.357 1.39-2.456 3.103-2.456h93.095c1.714 0 3.103 1.1 3.103 2.455v151.206z" opacity=".5" id="page2"/>
											<g id="page1">
											  <path fill="#00133e" d="M211.35 198.93c0 1.6-1.388 2.896-3.103 2.896h-93.095c-1.713 0-3.103-1.297-3.103-2.896V20.554c0-1.6 1.39-2.896 3.102-2.896h93.095c1.715 0 3.104 1.297 3.104 2.896V198.93z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M211.35 198.93c0 1.6-1.388 2.896-3.103 2.896h-93.095c-1.713 0-3.103-1.297-3.103-2.896V20.554c0-1.6 1.39-2.896 3.102-2.896h93.095c1.715 0 3.104 1.297 3.104 2.896V198.93z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M200.693 170.67c0 1.2-1.09 2.176-2.438 2.176h-73.112c-1.346 0-2.437-.975-2.437-2.177V36.59c0-1.2 1.09-2.176 2.437-2.176h73.112c1.347 0 2.438.975 2.438 2.177v134.08z"/>
											  <path fill="#055BFA" d="M188.353 150.526c0 .55-.45 1-1 1h-51.306c-.55 0-1-.45-1-1v-11.84c0-.55.45-1 1-1h51.306c.55 0 1 .45 1 1v11.84z"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M188.353 150.526c0 .55-.45 1-1 1h-51.306c-.55 0-1-.45-1-1v-11.84c0-.55.45-1 1-1h51.306c.55 0 1 .45 1 1v11.84z"/>
											  <g id="text1">
												<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M140.937 63.98h41.527M140.937 52.755h41.527M140.937 75.206h41.527M140.937 86.43h41.527M140.937 97.655h41.527M140.937 108.88h41.527" opacity=".6"/>
												<g opacity=".6">
												  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M140.937 120.105h41.527"/>
												</g>
												<circle fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" cx="161.7" cy="187.801" r="7.479"/>
												<path fill="none" stroke="#FFF" stroke-width="1.25" stroke-miterlimit="10" d="M147.174 144.8h29.053"/>
												<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M149.5 25.698h24.4"/>
											  </g>
											</g>
											<g id="right">
											  <image overflow="visible" width="688" height="429" xlink:href="../images/svg/D361C266.png" transform="matrix(.24 0 0 .24 144.87 94.53)"/>
											  <path fill="#00133e" d="M273.906 159.713c0 .268-1.302.484-2.906.484h-87.224c-1.604 0-2.907-.217-2.907-.484v-29.82c0-.268 1.302-.484 2.906-.484H271c1.604 0 2.906.216 2.906.483v29.82z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M273.906 159.713c0 .268-1.302.484-2.906.484h-87.224c-1.604 0-2.907-.217-2.907-.484v-29.82c0-.268 1.302-.484 2.906-.484H271c1.604 0 2.906.216 2.906.483v29.82z"/>
											  <path fill="#00133e" d="M298.376 142.752c0 11.41-9.25 20.66-20.66 20.66s-20.66-9.25-20.66-20.66 9.25-20.66 20.66-20.66 20.66 9.25 20.66 20.66"/>
											  <g fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
												<path d="M277.716 136.22c8.423 0 15.535 7.372 17.825 17.483 1.964-3.19 3.117-6.932 3.117-10.95 0-11.566-9.376-20.942-20.94-20.942s-20.942 9.377-20.942 20.942c0 4.02 1.153 7.762 3.116 10.95 2.29-10.11 9.403-17.483 17.826-17.483z"/>
												<path d="M277.716 163.693c7.545 0 14.14-4.005 17.825-9.99-2.29-10.11-9.4-17.484-17.824-17.484s-15.535 7.372-17.825 17.483c3.687 5.985 10.28 9.99 17.826 9.99z"/>
											  </g>
											  <path fill="#00133e" d="M276.72 141.4c-5.5 0-10-4.5-10-10v-11.66c0-5.5 4.5-10 10-10h1.992c5.5 0 10 4.5 10 10v11.66c0 5.5-4.5 10-10 10h-1.99z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M276.72 141.4c-5.5 0-10-4.5-10-10v-11.66c0-5.5 4.5-10 10-10h1.992c5.5 0 10 4.5 10 10v11.66c0 5.5-4.5 10-10 10h-1.99z"/>
											  <path fill="#143b88" d="M272.438 126.99c-.51 0-.925-.515-.925-1.145s.416-1.145.925-1.145.925.515.925 1.145-.417 1.145-.925 1.145M283.328 126.99c-.51 0-.925-.515-.925-1.145s.416-1.145.925-1.145.925.515.925 1.145-.416 1.145-.925 1.145"/>
											  <path fill="#00133e" d="M266.72 120.865s1.928-3.04 7.63-3.32c2.32-.114 5.048 2.447 7.502 2.916 3.574.682 6.563-.562 6.86-.107"/>
											  <path fill="none" stroke="#143b88" stroke-miterlimit="10" d="M266.72 120.865s1.928-3.04 7.63-3.32c2.32-.114 5.048 2.447 7.502 2.916 3.574.682 6.563-.562 6.86-.107M281.206 132.763c0 2.2-.942 2.86-3.49 2.86-2.547 0-3.49-.66-3.49-2.86M283.307 141.506c0 3.088-2.503 5.59-5.59 5.59s-5.592-2.502-5.592-5.59 2.503.02 5.59.02 5.592-3.108 5.592-.02z"/>
											  <g id="text3">
												<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M192.268 140.404h41.527M192.268 150.507h51.05" opacity=".6"/>
											  </g>
											</g>
											<g id="left">
											  <image overflow="visible" width="688" height="429" xlink:href="../images/svg/D361C26A.png" transform="matrix(.24 0 0 .24 20.46 27.41)"/>
											  <path fill="#00133e" d="M149.5 93.71c0 .268-1.302.485-2.907.485H59.37c-1.605 0-2.907-.217-2.907-.484V63.89c0-.266 1.302-.483 2.907-.483h87.223c1.605 0 2.907.217 2.907.484v29.82z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M149.5 93.71c0 .268-1.302.485-2.907.485H59.37c-1.605 0-2.907-.217-2.907-.484V63.89c0-.266 1.302-.483 2.907-.483h87.223c1.605 0 2.907.217 2.907.484v29.82z"/>
											  <path fill="#00133e" d="M65.087 76.75c0 11.41-9.25 20.66-20.66 20.66s-20.66-9.25-20.66-20.66 9.25-20.66 20.66-20.66 20.66 9.25 20.66 20.66"/>
											  <g fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
												<path d="M44.427 70.217c8.423 0 15.535 7.373 17.825 17.484 1.963-3.188 3.116-6.93 3.116-10.95 0-11.565-9.376-20.94-20.94-20.94s-20.942 9.375-20.942 20.94c0 4.02 1.153 7.762 3.116 10.95 2.29-10.11 9.402-17.483 17.825-17.483z"/>
												<path d="M44.427 97.69c7.546 0 14.14-4.003 17.825-9.99-2.29-10.11-9.402-17.483-17.825-17.483S28.892 77.59 26.602 87.7c3.686 5.987 10.28 9.99 17.825 9.99z"/>
											  </g>
											  <path fill="#00133e" d="M43.432 75.398c-5.5 0-10-4.5-10-10V53.74c0-5.5 4.5-10 10-10h1.99c5.5 0 10 4.5 10 10v11.658c0 5.5-4.5 10-10 10h-1.99z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M43.432 75.398c-5.5 0-10-4.5-10-10V53.74c0-5.5 4.5-10 10-10h1.99c5.5 0 10 4.5 10 10v11.658c0 5.5-4.5 10-10 10h-1.99z"/>
											  <path fill="#143b88" d="M39.15 60.99c-.51 0-.926-.516-.926-1.146s.416-1.145.925-1.145c.508 0 .924.514.924 1.144s-.416 1.145-.925 1.145M50.04 60.99c-.51 0-.925-.516-.925-1.146s.416-1.145.925-1.145c.51 0 .925.514.925 1.144s-.417 1.145-.925 1.145"/>
											  <path fill="#00133e" d="M33.432 55.986s1.927-3.04 7.628-3.32c2.32-.115 5.05 2.447 7.503 2.915 3.574.682 6.564-.56 6.86-.107"/>
											  <path fill="none" stroke="#143b88" stroke-miterlimit="10" d="M33.432 55.986s1.927-3.04 7.628-3.32c2.32-.115 5.05 2.447 7.503 2.915 3.574.682 6.564-.56 6.86-.107M50.018 75.504c0 3.088-2.503 6.714-5.59 6.714-3.09 0-5.592-3.626-5.592-6.714s2.503.02 5.59.02c3.09 0 5.592-3.108 5.592-.02zM41.487 69.543h5.983"/>
											  <g id="text2">
												<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M76.842 84.505h51.05M76.842 74.402h41.527" opacity=".6"/>
											  </g>
											</g>
										  </g>
										</svg>
										<div class="name">Контактна інформація <span>Звяжіться чи слідкуйте за нами</span></div>
									</div>
									<div class="menu_item menu_item_8" id="mi_8">
										<svg xmlns="http://www.w3.org/2000/svg" width="282.667" height="222.333" viewBox="0 0 282.667 222.333">
										  <g id="menu-icon-8">
											<g id="page3">
											  <path fill="#00133e" d="M236.585 210.4c0 1.468-2.6 2.656-5.807 2.656H56.562c-3.207 0-5.807-1.188-5.807-2.655V46.9c0-1.467 2.6-2.655 5.807-2.655h174.216c3.207 0 5.807 1.188 5.807 2.655V210.4z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M236.585 210.4c0 1.468-2.6 2.656-5.807 2.656H56.562c-3.207 0-5.807-1.188-5.807-2.655V46.9c0-1.467 2.6-2.655 5.807-2.655h174.216c3.207 0 5.807 1.188 5.807 2.655V210.4z" opacity=".3"/>
											</g>
											<g id="page2">
											  <path fill="#00133e" d="M243.188 202.366c0 1.507-2.785 2.728-6.22 2.728H50.37c-3.434 0-6.22-1.22-6.22-2.728V34.313c0-1.507 2.786-2.728 6.22-2.728h186.6c3.434 0 6.22 1.22 6.22 2.728v168.053z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M243.188 202.366c0 1.507-2.785 2.728-6.22 2.728H50.37c-3.434 0-6.22-1.22-6.22-2.728V34.313c0-1.507 2.786-2.728 6.22-2.728h186.6c3.434 0 6.22 1.22 6.22 2.728v168.053z" opacity=".5"/>
											</g>
											<g id="page1">
											  <path fill="#00133e" d="M254.995 194.272c0 1.435-3.114 2.6-6.958 2.6H39.3c-3.842 0-6.957-1.165-6.957-2.6V34.182c0-1.434 3.115-2.598 6.958-2.598h208.737c3.844 0 6.958 1.164 6.958 2.6V194.27z"/>
											  <g opacity=".7">
												<path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M254.995 194.272c0 1.435-3.114 2.6-6.958 2.6H39.3c-3.842 0-6.957-1.165-6.957-2.6V34.182c0-1.434 3.115-2.598 6.958-2.598h208.737c3.844 0 6.958 1.164 6.958 2.6V194.27z"/>
											  </g>
											  <path fill="#00133e" d="M60.617 151.503l.227-141.705-10.75 9.264 1.52 155.292z"/>
											  <path fill="#00133e" d="M237.72 19.062l-10.75-9.264.227 141.705 9 22.845-4.296-10.85H143.98c.89-15.373 30.642-12.592 54.277-11.082 15.713 1.004 28.713-.913 28.713-.913V9.1s-30.765 3.568-56.04.812c-21.503-2.344-26.814 3.594-26.993 10.865-.01.395-.02.81-.028 1.224-.01-.413-.02-.828-.027-1.223-.18-7.27-5.49-13.21-26.992-10.865C91.61 12.668 60.846 9.1 60.846 9.1v142.403s13 1.917 28.713.913c23.635-1.51 53.387-4.29 54.276 11.082H55.914l-5.304 13.396s73.368.894 79.36.894c0-11.064 11.526-13.78 13.87-14.218.012.212.04.413.04.63 0 0 0-.224.004-.638.007 0 .016-.003.022-.005l.023.005.004.64c0-.22.027-.42.038-.632 2.345.438 13.87 3.153 13.87 14.218 5.993 0 79.36-.894 79.36-.894l-1.004-2.538 1.52-155.294zm-93.814 141.335c.01 1.414.02 2.468.023 3.1h-.047c.006-.632.013-1.685.023-3.1M143.906 160.396V22v138.396z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M60.617 151.503l.227-141.705-10.75 9.264 1.52 155.292z"/>
											  <path fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10" d="M237.72 19.062l-10.75-9.264.227 141.705 9 22.845-4.296-10.85H143.98c.89-15.373 30.642-12.592 54.277-11.082 15.713 1.004 28.713-.913 28.713-.913V9.1s-30.765 3.568-56.04.812c-21.503-2.344-26.814 3.594-26.993 10.865-.01.395-.02.81-.028 1.224-.01-.413-.02-.828-.027-1.223-.18-7.27-5.49-13.21-26.992-10.865C91.61 12.668 60.846 9.1 60.846 9.1v142.403s13 1.917 28.713.913c23.635-1.51 53.387-4.29 54.276 11.082H55.914l-5.304 13.396s73.368.894 79.36.894c0-11.064 11.526-13.78 13.87-14.218.012.212.04.413.04.63 0 0 0-.224.004-.638.007 0 .016-.003.022-.005l.023.005.004.64c0-.22.027-.42.038-.632 2.345.438 13.87 3.153 13.87 14.218 5.993 0 79.36-.894 79.36-.894l-1.004-2.538 1.52-155.294zm-93.814 141.335c.01 1.414.02 2.468.023 3.1h-.047c.006-.632.013-1.685.023-3.1zM143.906 22v138.396"/>
											</g>
											<g id="text" fill="none" stroke="#143b88" stroke-width="1.25" stroke-miterlimit="10">
											  <path d="M98.022 30.357h31.312M152.452 30.357h66.226M98.022 39.218h31.312M98.022 48.08h31.312M187.365 39.218h31.313M187.365 48.08h31.313M187.365 56.94h31.313M187.365 64.535h31.313M187.365 73.396h31.313M71.982 56.94h57.35M71.982 65.8h57.35M71.982 74.66h57.35M71.982 83.522h57.35M71.982 92.383h57.35M71.982 101.244h57.35M71.982 110.104h57.35M71.982 118.965h57.35M71.982 127.826h57.35M71.982 136.687h57.35M184.522 83.522H153.21M184.522 92.383H153.21M184.522 101.244H153.21M184.522 110.104H153.21M218.678 127.826H153.21M218.678 136.687H153.21M184.522 118.965H153.21"/>
											</g>
											<path fill="#FFF" d="M83.5 27.507l6.708 17.868 1.642.557v1.084h-6.847V45.96l2.477-.67-1.586-4.313H78.77L77.32 45.29l2.81.613v1.113h-6.874v-1.113l1.976-.584 5.622-14.78c.186-.463.362-.923.53-1.377.166-.455.324-.94.472-1.462l1.503-.25.14.057zm-2.894 8.238l-1.364 3.84h6.15l-1.363-3.84-1.67-4.73h-.14l-1.614 4.73z" id="char"/>
											<g id="images">
											  <image overflow="visible" width="404" height="443" xlink:href="../images/svg/34B539A7.png" transform="matrix(.24 0 0 .24 157.84 47.52)"/>
											  <image overflow="visible" width="407" height="443" xlink:href="../images/svg/34B539A5.png" transform="matrix(.24 0 0 .24 117.33 3.22)"/>
											  <path fill="#055BFA" d="M178.775 72.396c0 .55-.45 1-1 1H154.33c-.55 0-1-.45-1-1V40.22c0-.55.45-1 1-1h23.445c.55 0 1 .45 1 1v32.176zM193.112 116.7c0 .55.45 1 1 1h23.445c.55 0 1-.45 1-1V84.52c0-.55-.45-1-1-1h-23.445c-.55 0-1 .45-1 1V116.7z"/>
											  <path fill="none" stroke="#488DF9" stroke-width="1.25" stroke-miterlimit="10" d="M178.775 72.396c0 .55-.45 1-1 1H154.33c-.55 0-1-.45-1-1V40.22c0-.55.45-1 1-1h23.445c.55 0 1 .45 1 1v32.176zM193.112 116.7c0 .55.45 1 1 1h23.445c.55 0 1-.45 1-1V84.52c0-.55-.45-1-1-1h-23.445c-.55 0-1 .45-1 1V116.7z"/>
											</g>
										  </g>
										</svg>
										<div class="name">Основні цінності <span>Склад фундаменту нашої компанії</span></div>
									</div>
								</div>
								<div class="menu_circles">
									<svg width="872" height="872" viewBox="0 0 872 872">
									  <circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="257.936" id="circle2" opacity=".22"/>
									  <circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="282.806" id="circle3" opacity=".22"/>
									  <circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="307.67" id="circle4" opacity=".2"/>
									  <circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="333.132" id="circle5" opacity=".1"/>
									  
									  <circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="333.132" id="circle6" opacity=".1"/>
									  <circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="333.132" id="circle7" opacity=".1"/>
									 
									  <g id="circle1">
										<circle fill="none" stroke="#063D80" stroke-width="1.5" stroke-miterlimit="10" cx="436" cy="436" r="234.237" opacity=".28"/>
										<g id="points">
											<path fill="#005bfe" d="M540.333 222.833c0 2.854-2.313 5.167-5.167 5.167-2.853 0-5.166-2.313-5.166-5.167 0-2.853 2.313-5.167 5.166-5.167 2.855 0 5.167 2.314 5.167 5.167"/>
											<path fill="#005bfe" d="M319.333 635.833c0 2.854-2.313 5.167-5.167 5.167-2.853 0-5.166-2.313-5.166-5.167 0-2.853 2.313-5.167 5.166-5.167 2.855 0 5.167 2.314 5.167 5.167"/>
										</g>
									  </g>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php 
				require 'layout/order_popup.php';
				
				require 'layout/cases_popup.php';
			?>
		</div>		
				
		<?php require 'layout/footer.php';	?>
	</body>
</html>