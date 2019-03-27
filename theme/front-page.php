<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
	<main>
		<?php get_template_part( './elements/fp-topheader' ); ?>
		<?php get_template_part( './elements/fp-welcome-mess' ); ?>
		<?php // get_template_part( 'elements/cta--jiko-lp' ); ?>



		<div class="row">
			<div class="column large-3 sidebar--wrap">
				<?php get_sidebar(); ?>
			</div>
			<div class="sidenav--overlay js--sidenav--button"></div>
			<div class="column small-12 large-8 contents --mt0 --pt0">
			<p class="text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/Va1.jpg'; ?>" alt="あなたの大切なご家族、ご友人が逮捕されてしまったら弁護士へご相談ください。"></p>
			
			
			<section class="contents--section">
				<h2 id="fp--service">ご依頼内容別</h2>
				<div class="row small-up-2 medium-up-3">
					<div class="column"><a href="<?php echo get_page_link( '6523' ); ?>"><img class="lazyload" alt="自首したい" data-src="<?php echo get_template_directory_uri(), '/assets/img/BtnTop1_1.jpg'; ?>"></a></div>
					<div class="column"><a href="<?php echo get_page_link( '6525' ); ?>"><img class="lazyload" alt="逮捕された家族・友人と面会したい" data-src="<?php echo get_template_directory_uri(), '/assets/img/BtnTop1_2.jpg'; ?>"></a></div>
					<div class="column"><a href="<?php echo get_page_link( '6527' ); ?>"><img class="lazyload" alt="前科をつけたくない" data-src="<?php echo get_template_directory_uri(), '/assets/img/BtnTop1_3.jpg'; ?>"></a></div>
					<div class="column"><a href="<?php echo get_page_link( '6529' ); ?>"><img class="lazyload" alt="相手方と示談したい" data-src="<?php echo get_template_directory_uri(), '/assets/img/BtnTop1_4.jpg'; ?>"></a></div>
					<div class="column"><a href="<?php echo get_page_link( '6531' ); ?>"><img class="lazyload" alt="執行猶予をつけてほしい" data-src="<?php echo get_template_directory_uri(), '/assets/img/BtnTop1_5.jpg'; ?>"></a></div>
					<div class="column"><a href="<?php echo get_page_link( '6533' ); ?>"><img class="lazyload" alt="冤罪・無罪を証明したい" data-src="<?php echo get_template_directory_uri(), '/assets/img/BtnTop1_6.jpg'; ?>"></a></div>
				</div>

				<h2>刑事事件解決の流れ</h2>
				<p class="text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop3.jpg'; ?>" alt="刑事事件解決の流れ"></p>

				<div class="row small-up-1 medium-up-2"><div class="column"><a href="<?php echo get_page_link( '6521' ); ?>"><img data-src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop4.jpg'; ?>" alt="私選弁護士と国選弁護士の違い" class="lazyload"></a></div>
				<div class="column"><a href="<?php echo get_page_link( '5485' ); ?>"><img data-src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop5.jpg'; ?>" alt="お客様の声" class="lazyload"></a></div></div>
			</section>


				<?php
				$args = array(
					'posts_per_page' => 4,
					'post_status'    => 'publish'
				);
				$news = new WP_Query( $args );
				if ( $news->have_posts() ) :
			?>
					<div class="contents--section">
						<h2>
							<a href="<?php echo get_page_link( '' ); ?>">最新情報
								<span class="badge">　></span>
							</a>
						</h2>
						<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
							<dl>
								<dt>
									<span class="label secondary">
										<?php echo get_the_date( 'Y-m-d' ); ?>
									</span>
									<?php the_category( '　' ); ?>
								</dt>
								<dd>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</dd>
							</dl>
							<?php
					endwhile;
				?>
							<p class="text-center contents--section_button" style="margin-top: 2rem">
								<a href="<?php echo get_page_link( '5749' ); ?>" class="button large">
									<?php NID_SVG::icon( 'list', array() ); ?>お知らせ一覧</a>
							</p>
					</div>
					<?php endif; ?>


					<div class="contents--section">
						<h2>
							<a href="https://www.law-yamashita.com/topics" target="_blank">事務所の最新情報
								<span class="badge">　></span>
							</a>
						</h2>
						<?php
					$url = 'https://www.law-yamashita.com/feed';
					$url = sprintf( esc_html( "%s" ), $url );
					add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					include_once( ABSPATH . WPINC . '/feed.php' );
					$feed = fetch_feed( $url );
					remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					$maxitems = 3;
					if ( ! is_wp_error( $feed ) ) {
						$maxitems = $feed->get_item_quantity( $maxitems );
						$rss_items = $feed->get_items( 0, $maxitems );
					}
					$site_title = $feed->get_title();
					$site_url = $feed->get_permalink();

					$output = '';
					date_default_timezone_set( 'Asia/Tokyo' );
					foreach ( $rss_items as $item ) {
						$f_link = esc_url( $item->get_permalink() );
						$f_date = $item->get_date( 'Y-m-d' );
						$f_title = esc_html( $item->get_title() );
						$f_category = '';
						foreach ( $item->get_categories() as $category ) {
							$f_category .= $category->get_label();
						}
						$output .= <<< EOM
<dl>
	<dt><span class="label secondary">{$f_date}</span>　<span class="label">{$f_category}</span></dt>
	<dd><a href="{$f_link}" target="_blank">{$f_title}</a></dd>
</dl>
EOM;
					}
					echo $output;
				?>
							<p class="text-center contents--section_button" style="margin-top: 2rem">
								<a href="https://www.law-yamashita.com/topics" class="button large" target="_blank">
									<?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧
									<br>
									<br>
									<span style="font-size:0.8em">※メインサイトへ移行します。</span>
								</a>
							</p>
					</div>

			</div>
		</div>
	</main>
	<?php get_template_part( './elements/fp--access' ); ?>
	<?php get_footer(); ?>
