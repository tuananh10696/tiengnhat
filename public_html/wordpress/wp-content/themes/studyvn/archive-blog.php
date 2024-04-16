<?php
$cates = get_list_taxomomy('blog_cate');
$tags = get_list_taxomomy('blog_tag');

$post_datas = getListAll('blog', 10, $_GET);
$popular_post = getListAll('blog', 6, $_GET, '', '', 'post_views', 'DESC');
$param = (isset($_GET['cate_slug']) && isset($_GET['cate_slug']) != '') ? $_GET['cate_slug'] : false;

$head = [
	'head_title' => ['Luyen thi JLPT'],
	'head_des' => ['bui tuan anh'],
	'_css' => [''],
	'_script' => ['<script src="/assets/js/jlpt.js"></script>']
];
get_header(null, ['head' => $head]);
$color = ['primary', 'warning', 'success', 'danger', 'info', 'dark']
?>

<div class="container-fluid populer-news py-5">
	<div class="container py-5">
		<div class="tab-class mb-4">
			<div class="row g-4">
				<div class="col-lg-8 col-xl-9">
					<div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
						<h1 class="mb-4">BLOG</h1>
						<ul class="nav nav-pills d-inline-flex text-center">
							<li class="nav-item mb-3">
								<a class="d-flex py-2 btn btn-outline-dark btn-round me-2 cs-a-btn text-dark <?= $param ? '' : 'active' ?>" href="/blog/">
									<span class="text-dark" style="width: 100px;">ALL</span></a>
							</li>
							<?php foreach ($cates as $id => $cate_data) :
								$active = ($param && $param == $cate_data->slug) ? 'active' : ''; ?>
								<li class="nav-item mb-3">
									<a class="d-flex py-2 btn btn-outline-<?= $color[$id] ?> btn-round me-2 cs-a-btn text-<?= $color[$id] . ' ' . $active ?>" href="/blog?cate_slug=<?= $cate_data->slug  ?>">
										<span class="text-<?= $color[$id] ?>" style="width: 100px;"><?= $cate_data->name ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="tab-content mb-4">
						<div id="tab-1" class="tab-pane fade show p-0 active">
							<div class="bg-light rounded my-4 p-4">
								<section>
									<div class="row">


										<?php foreach ($post_datas->posts as $post_data) :
											$img = get_the_post_thumbnail_url($post_data->ID, 'large');
											$img = $img ? $img : '/assets/img/no_img.png';
											$post_categories = wp_get_post_terms($post_data->ID, $post_data->post_type . '_cate');
											$post_tags = wp_get_post_terms($post_data->ID, $post_data->post_type . '_cate'); ?>
											<div class="col-md-4 mt-4 sp-blog-list mb-5">
												<a href="<?= get_permalink($post_data->ID) ?>">
													<div class="card profile-card-5 h-100">
														<div class="card-img-block">
															<img class="card-img-top" src="<?= $img ?>" width="262" height="174" alt="<?= $post_data->post_title ?>">
														</div>
														<div class="card-body pt-0">
															<h5 class="card-title"><?= $post_data->post_title ?></h5>
															<p class="card-text"><?= get_first_text($post_data->ID) ?></p>
															<div class="cs-tags">
																<?php foreach ($post_tags as $tag) {
																	echo '<a class="text-secondary d-inline">#' . esc_html($tag->name) . '</a>　';
																} ?>
															</div>
															<hr>
															<div class="img-zoomin img-fluid" style="margin-bottom: -23px;">
																<a href="">
																	<img src="https://scontent-nrt1-1.xx.fbcdn.net/v/t39.30808-6/434328087_2557841507726380_7528039624968605877_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ch1pOlfQJdcAb5NYNgy&_nc_ht=scontent-nrt1-1.xx&oh=00_AfD5t21k9CSieC8fqqQcgoXTYrlu41reEVooq4cxj2NF8w&oe=6622AD50" alt="mdo" width="33" height="33" class="rounded-circle d-inline border border-2 border-warning">
																	<p class="text-body d-inline">Bui Tuan Anh</p>
																</a>
															</div>
														</div>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
										<nav class="p-3" aria-label="Page navigation example">
											<?php pagination($post_datas, 'blog') ?>
										</nav>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<?php get_template_part('inc/php/front/left-sidebar', null, ['slug' => 'blog', 'tags' => $tags, 'datas' => $popular_post]); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(null, ['head' => $head]); ?>