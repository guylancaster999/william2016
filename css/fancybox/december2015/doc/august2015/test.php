<?php 
require "funcz/functionz.php";
print head("de","homepage");
?>
<body>	
       
		<div data-role="page" class="ui-responsive-panel">

			<div data-role="header" data-theme="f">
			<?php topBit("index_e.php","index.php","index_ch.php","Homepage");?>
			</div><!-- /header -->
			<div data-role="content">
				<h2>Panel: Menu + form</h2>

				<p>This is a typical page that has two buttons in the header bar that open panels. The left button opens a left menu with the reveal display mode. The right button opens a form in a right overlay panel.</p>
				
				<p>Since the panel links are in the top bar, there really isn't a need for the fixed positioning feature on the panel since you will always be scrolled to the top of the page. The fixed positioning impacts animation smoothness so it's off in this demo (<code>data-position-fixed="false"</code>) and the panel will scroll with the page.</p>
				
				<p>To make this responsive, the left panel stays open and causes the page to re-flow at wider widths. This allows both the menu and page to be used together when more space is available. This behavior is controlled by CSS media queries. You can create a custom one for a specific breakpoint or use the breakpoint preset by adding the <code> class="ui-responsive-panel"</code> to the page container.</p>

			</div><!-- /content -->

			<div class="jqm-footer">
				<p class="jqm-version"></p>
				<p>&copy; 2010, 2013 jQuery Foundation and other contributors</p>
			</div><!-- /jqm-footer -->
			
			
			<style>
				.nav-search .ui-btn-up-a {
					background-image:none;
					background-color:#333333;
				}
				.nav-search .ui-btn-inner {
					border-top: 1px solid #888;
					border-color: rgba(255, 255, 255, .1);
				}
            </style>

				<div data-role="panel" data-position="left" data-position-fixed="false" data-display="reveal" id="nav-panel" data-theme="a">

					<ul data-role="listview" data-theme="a" data-divider-theme="a" style="margin-top:-16px;" class="nav-search">
						<li data-icon="delete" style="background-color:#111;">
							<a href="#" data-rel="close">Close menu</a>
						</li>
						<li data-filtertext="wai-aria voiceover accessibility screen reader">
							<a href="../about/accessibility.html">Accessibility</a>
						</li>
						<li data-filtertext="accordions collapsible set collapsible-set collapsed">
							<a href="../content/content-collapsible-set.html">Accordions</a>
						</li>
						<li data-filtertext="ajax navigation model">
							<a href="../pages/page-navmodel.html">Ajax navigation model</a>
						</li>
						<li data-filtertext="anatomy of page viewport">
							<a href="../pages/page-anatomy.html">Anatomy of a page</a>
						</li>
						<li data-filtertext="events api animationComplete transition css">
							<a href="../api/events.html">Animation events</a>
						</li>
						<li data-filtertext="listview autodivider">
							<a href="../lists/lists-autodividers.html">Automatic listview dividers</a>
						</li>
						<li data-filtertext="button link submit cancel image reset mini buttonmarkup enable disable">
							<a href="../buttons/buttons-types.html">Buttons</a>
						</li>
						<li data-filtertext="button icon">
							<a href="../buttons/buttons-icons.html">Button icons</a>
						</li>
						<li data-filtertext="data-prefetch loadpage domCache data-dom-cache size clear cleanup pagehide lazyload spinner loader">
							<a href="../pages/page-cache.html">Caching pages</a>
						</li>
						<li data-filtertext="input forms multi select checkbox checks grouped horizontal toggle legend">
							<a href="../forms/checkboxes/">Checkbox</a>
						</li>
						<li data-filtertext="button icon">
							<a href="buttons/buttons-icons.html">Button icons</a>
						</li>
						<li data-filtertext="data-prefetch loadpage domCache data-dom-cache size clear cleanup pagehide lazyload spinner loader">
							<a href="../pages/page-cache.html">Caching pages</a>
						</li>
						<li data-filtertext="input forms multi select checkbox checks grouped horizontal toggle legend">
							<a href="../forms/checkboxes/">Checkbox</a>
						</li>
					</ul>

					<!-- panel content goes here -->
				</div><!-- /panel -->

				<style>
					.userform { padding:.8em 1.2em; }
					.userform h2 { color:#555; margin:0.3em 0 .8em 0; padding-bottom:.5em; border-bottom:1px solid rgba(0,0,0,.1); }
					.userform label { display:block; margin-top:1.2em; }
					.switch .ui-slider-switch { width: 6.5em !important }
					.ui-grid-a { margin-top:1em; padding-top:.8em; margin-top:1.4em; border-top:1px solid rgba(0,0,0,.1); }
                </style>

				<div data-role="panel" data-position="right" data-position-fixed="false" data-display="overlay" id="add-form" data-theme="b">

					<form class="userform">
						<h2>Create new user</h2>
						<label for="name">Name</label>
						<input type="text" name="name" id="name" value="" data-clear-btn="true" data-mini="true">

						<label for="email">Email</label>
						<input type="email" name="email" id="status" value="" data-clear-btn="true" data-mini="true">

						<label for="password">Password:</label>
						<input type="password" name="password" id="password" value="" data-clear-btn="true" autocomplete="off" data-mini="true">

						<div class="switch">
						<label for="status">Status</label>
						<select name="status" id="slider" data-role="slider" data-mini="true">
						    <option value="off">Inactive</option>
						    <option value="on">Active</option>
						</select>
						</div>

						<div class="ui-grid-a">
						    <div class="ui-block-a"><a href="#" data-rel="close" data-role="button" data-theme="c" data-mini="true">Cancel</a></div>
						    <div class="ui-block-b"><a href="#" data-rel="close" data-role="button" data-theme="b" data-mini="true">Save</a></div>
						</div>
					</form>

					<!-- panel content goes here -->
				</div><!-- /panel -->
				
		</div><!-- /page -->
	</body>
</html>
