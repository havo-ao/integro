<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Integro
 */

?>
</div>
	</div>

	<footer id="colophon" class="site-footer">
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
	<!--- uncompress-->

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/elastic_grid.js"></script>

	<script type="text/javascript">
		$(function(){
		$("#demo").elastic_grid({
		'filterEffect': '<a href="https://www.jqueryscript.net/tags.php?/popup/">popup</a>', // moveup, scaleup, fallperspective, fly, flip, helix , popup
		'hoverDirection': true,
		'hoverDelay': 0,
		'hoverInverse': false,
		'expandingSpeed': 500,
		'expandingHeight': 500,
		'items' :
		[
		{
		'title' : 'Gallery 1',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/1.jpg', 'images/small/2.jpg', 'images/small/3.jpg', 'images/small/10.jpg', 'images/small/11.jpg'],
		'large' : ['images/large/1.jpg', 'images/large/2.jpg', 'images/large/3.jpg', 'images/large/10.jpg', 'images/large/11.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Portrait']
		},
		{
		'title' : 'Swiss chard pumpkin',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/4.jpg', 'images/small/5.jpg', 'images/small/6.jpg', 'images/small/7.jpg'],
		'large' : ['images/large/4.jpg', 'images/large/5.jpg', 'images/large/6.jpg', 'images/large/7.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Landscape']
		},
		{
		'title' : 'Spinach winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/15.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/15.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Portrait', 'Landscape']
		},
		{
		'title' : 'Aubergine napa cabbage',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/12.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
		'large' : ['images/large/12.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Portrait']
		},
		{
		'title' : 'Swiss chard pumpkin',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/17.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
		'large' : ['images/large/17.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Landscape']
		},
		{
		'title' : 'Spinach winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/13.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/13.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Vintage']
		},
		{
		'title' : 'Spinach winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/7.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/7.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Portrait']
		},
		{
		'title' : 'Azuki bean',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/16.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
		'large' : ['images/large/16.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Vintage']
		},
		{
		'title' : 'Swiss chard pumpkin',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/18.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
		'large' : ['images/large/18.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Landscape']
		},
		{
		'title' : 'Winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/11.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/11.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Portrait']
		},
		{
		'title' : 'Spinach winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/3.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/3.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
		{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
		],
		'tags'  : ['Vintage']
		},
		{
		'title' : 'Spinach winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/5.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/5.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://#' },
		{ 'title':'Download', 'url':'http://#'}
		],
		'tags'  : ['Portrait', 'Landscape']
		},
		{
		'title' : 'Azuki bean',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/6.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
		'large' : ['images/large/6.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://#' },
		{ 'title':'Download', 'url':'http://#'}
		],
		'tags'  : ['Vintage']
		},
		{
		'title' : 'Swiss chard pumpkin',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/8.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
		'large' : ['images/large/8.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://#' },
		{ 'title':'Download', 'url':'http://#'}
		],
		'tags'  : ['Landscape']
		},
		{
		'title' : 'Spinach winter purslane',
		'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
		'thumbnail' : ['images/small/9.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
		'large' : ['images/large/9.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
		'button_list'   :
		[
		{ 'title':'Demo', 'url' : 'http://#' },
		{ 'title':'Download', 'url':'http://#'}
		],
		'tags'  : ['Vintage', 'Landscape']
		}

		]
		});
		});
	</script>

</body>
</html>
