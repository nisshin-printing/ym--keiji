<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
	<main>
		<?php get_template_part( './elements/fp-topheader' ); ?>


		<p class="text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/souzokutop.png'; ?>" alt="広島で相続・遺言のご相談なら山下江法律事務所へ！"></p>


		<?php get_template_part( './elements/fp-welcome-mess' ); ?>


		<?php // get_template_part( 'elements/cta--jiko-lp' ); ?>



		<div class="row">
			<div class="column large-3 sidebar--wrap">
				<?php get_sidebar(); ?>
			</div>
			<div class="sidenav--overlay js--sidenav--button"></div>
			<div class="column small-12 large-8 contents --mt0 --pt0">
				<section class="contents--section contents--section__pickup">
					<div class="row text-center">
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="<?php echo get_template_directory_uri(), '/assets/img/TtlSDTop2_1.jpg'; ?>" alt="相続の基礎知識"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6417' ); ?>"><?php echo get_the_title( '6417' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6419' ); ?>"><?php echo get_the_title( '6419' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6438' ); ?>"><?php echo get_the_title( '6438' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6427' ); ?>"><?php echo get_the_title( '6427' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6422' ); ?>"><?php echo get_the_title( '6422' ); ?></a></li>
							</ul>
						</div>
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="<?php echo get_template_directory_uri(), '/assets/img/TtlSDTop2_2.jpg'; ?>" alt="遺産分割協議"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6436' ); ?>"><?php echo get_the_title( '6436' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6427' ); ?>"><?php echo get_the_title( '6427' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6422' ); ?>"><?php echo get_the_title( '6422' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6458' ); ?>"><?php echo get_the_title( '6458' ); ?></a></li>
							</ul>
						</div>
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="<?php echo get_template_directory_uri(), '/assets/img/TtlSDTop2_3.jpg'; ?>" alt="遺留分・寄与分"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6467' ); ?>"><?php echo get_the_title( '6467' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6469' ); ?>"><?php echo get_the_title( '6469' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6473' ); ?>"><?php echo get_the_title( '6473' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6475' ); ?>"><?php echo get_the_title( '6475' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6484' ); ?>"><?php echo get_the_title( '6484' ); ?></a></li>
							</ul>
						</div>
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="<?php echo get_template_directory_uri(), '/assets/img/TtlSDTop2_4.jpg'; ?>" alt="遺言書"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6523' ); ?>"><?php echo get_the_title( '6523' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6533' ); ?>"><?php echo get_the_title( '6533' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6535' ); ?>"><?php echo get_the_title( '6535' ); ?></a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="column small-4 text-center"><a href="<?php echo get_page_link( '6070' ); ?>"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop2.jpg';?>" alt="<?php echo get_the_title( '6070' ); ?>"></a></div>
						<div class="column small-4 text-center"><a href="<?php echo get_page_link( '5487' ); ?>"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop3.jpg';?>" alt="<?php echo get_the_title( '5487' ); ?>"></a></div>
						<div class="column small-4 text-center"><a href="<?php echo get_page_link( '5492' ); ?>"><img src="<?php echo get_template_directory_uri(), '/assets/img/ImgTop4.jpg';?>" alt="<?php echo get_the_title( '5492' ); ?>"></a></div>
					</div>
				</section>


				<section class="contents--section contents--section__point">
					<h2>山下江法律事務所の相続の３つのポイント</h2>
					<h3>メリット1 相続手続の専門家が直接お話をお伺いします。</h3>
					<p>当事務所では、相続手続きのご相談において、専門的な知識を備えたNPO法人相続アドバイザー協議会認定の相続アドバイザー・上級アドバイザーが承ります。</p>
					<h3>メリット2  相続手続から、相続争いまで、すべてに対応できます。</h3>
					<p>「争 いはないけど、複雑な相続手続をどう進めて良いか分からない」「自分がしなければならない手続きがどれか分からない」という相談から、「親族ともめてし まったので解決したい」という相談まで、相続に関することなら何でも対応することができます。所内には弁護士の他、相続アドバイザー・上級アドバイザーが 在籍しており、税理士、司法書士、行政書士などとも連携をしていますので、速やかに相続手続きも行うことができます。</p>
					<h3>メリット3 広島最大級の法律事務所</h3>
					<p>当事務所は士業事務所に良く見られる個人事務所ではなく、所員総勢38名の広島最大級の法律事務所です。総合力と機動力は地域ナンバーワンと自負しております。実績多数の当法律事務所に、是非ご相談ください。</p>
					<h3>相続アドバイザー・上級アドバイザーによる相談も、無料で承っています</h3>
					<p>・弁護士に相談するのは敷居が高い<br>・ちょっとだけ教えてもらいたいことがある<br>と思われる方は、相続アドバイザーにお気軽にお電話ください。</p>
					<p class="text-center"><img src="<?php echo get_template_directory_uri(), '/assets/img/BgSDTop4.png'; ?>" alt="相続アドバイザーが丁寧にお答えします！"><br>◆チェックリストはこちら☞<a href="<?php echo get_page_link( '6405' ); ?>">相続対策チェック</a></p>
					<p class="text-center"><a href="https://www.law-yamashita.com/contact" target="_blank"><img src="<?php echo get_template_directory_uri(), '/assets/img/banner_01.png'; ?>" alt="広島の相続・遺言相談は縮景園駅すぐの山下江法律事務所へ"></a></p>
				</section>


				<?php get_template_part( './elements/fp--access' ); ?>



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
							<a href="<?php echo get_page_link( '5749' ); ?>">最新情報
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
	<?php get_footer(); ?>
