		<footer id="content-info" class="span-24" role="contentinfo">
			<div class="container">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
				<?php endif; ?>
				
				<div id="contact">
					<span class="small-title">Contact Information</span>
					<p><?php echo get_post_meta(5, 'address', true); ?></p>
					<p>Office: <?php echo get_post_meta(5, 'phone', true); ?> &bull; Fax: <?php echo get_post_meta(5, 'fax', true); ?></p>
					<p><a href="mailto:<?php echo antispambot(get_post_meta(5, 'email', true)) ?>"><?php echo antispambot(get_post_meta(5, 'email', true)) ?></a></p>
				</div>
				<?php if (get_option('roots_footer_social_share') == 'checked') { ?>
				<p class="social">
					<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo home_url('/'); ?>" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
					<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo home_url('/'); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=110&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe>
				</p>
				<?php } ?>
				<?php if (get_option('roots_footer_vcard') == 'checked') { ?>
				<p class="vcard">
					<a class="fn org url" href="<?php echo home_url('/'); ?>" title="Contact Information for <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br>
					<span class="adr">
						<span class="street-address"><?php echo get_option('roots_vcard_street-address'); ?></span><br>
						<span class="locality"><?php echo get_option('roots_vcard_locality'); ?></span>,
						<span class="region"><?php echo get_option('roots_vcard_region'); ?></span>
						<span class="postal-code"><?php echo get_option('roots_vcard_postal-code'); ?></span><br>
					</span>
					<span class="tel"><span class="value"><span class="hidden">+1-</span><?php echo get_option('roots_vcard_tel'); ?></span></span><br>
					<a class="email" href="mailto:<?php echo get_option('roots_vcard_email'); ?>"><?php echo get_option('roots_vcard_email'); ?></a>
				</p>
				<?php } ?>
				
			</div>
		</footer>
	</div><!-- /#wrap -->
<?php wp_footer(); ?>
<!--[if lt IE 7 ]>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/dd_belated.js"></script>
	<script>DD_belatedPNG.fix('#logo img, .png_bg, .page-title, footer');</script>
	<![endif]-->
</body>
</html>