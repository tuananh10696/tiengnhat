<?php
$cates = get_list_taxomomy('jlpt-test_cate');

$post_datas = getListAll('jlpt-test', 2, $_GET);
$param = (isset($_GET['category']) && isset($_GET['category']) != '') ? $_GET['category'] : false;

$head = [
	'head_title' => ['Luyen thi JLPT'],
	'head_des' => ['bui tuan anh'],
	'_css' => [''],
	'_script' => ['<script src="/assets/js/archive-jlpt-test.js"></script>']
];
get_header(null, ['head' => $head]);
?>
<style>
	/* .three-space {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
    }

    .three-space i {
        text-align: center;
    } */
</style>
<div class="container-fluid populer-news py-5">
	<div class="container py-5">
		<div class="tab-class mb-4">
			<div class="row g-4">

				<div class="col-lg-8 col-xl-9">
					<div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
						<h2 class="mb-4">Luyện Thi JLPT</h2>
						<ul class="nav nav-pills d-inline-flex text-center">
							<?php foreach ($cates as $id => $cate_data) :
								$active = ($param && $param == $cate_data->name) ? 'active' : '';
								echo '
                                <li class="nav-item mb-3">
                                    <a class="jlpt-cate d-flex py-2 bg-light rounded-pill me-2 ' . $active . '" href="/jlpt-test?category=' . $cate_data->name . '">
                                        <span style="width: 100px;">' . $cate_data->name . '</span>
                                    </a>
                                </li>'; ?>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="tab-content mb-4">



						<div class="bg-light rounded my-4 p-4">
							<h5 class="mb-4">JLPT N1</h5>
							<div class="row g-4">
								<?php foreach ($post_datas->posts as $post_data) : ?>
									<div class="col-lg-6">
										<a href="<?= get_permalink($post_data->ID) ?>">
											<div class="align-items-center p-3 bg-white rounded">

												<p class="h5 mb-4 text-center"><?= esc_html($post_data->post_title) ?></p>
												<p class="text-black-50 d-flex justify-content-between">
													<small class="cs-items-center">
														<i class="fa fa-clock"> 120 phút</i>
														<i class="fa fa-headphones"> Bài nghe</i>
														<i class="fa fa-trophy"> 128 điểm</i>
													</small>
												</p>

											</div>
										</a>
									</div>
								<?php endforeach; ?>
								<nav class="p-3" aria-label="Page navigation example">
									<?php pagination($post_datas, 'jlpt-test') ?>
								</nav>
							</div>
						</div>




					</div>
					<div class="border-bottom mb-4">
						<h2 class="my-4">Most Views News</h2>
					</div>
					<div class="whats-carousel owl-carousel">
						<div class="latest-news-item">
							<div class="bg-light rounded">
								<div class="rounded-top overflow-hidden">
									<img src="/img/news-7.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum
										available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
											Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
						<div class="whats-item">
							<div class="bg-light rounded">
								<div class="rounded-top overflow-hidden">
									<img src="/img/news-6.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum
										available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
											Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
						<div class="whats-item">
							<div class="bg-light rounded">
								<div class="rounded-top overflow-hidden">
									<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum
										available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
											Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
						<div class="whats-item">
							<div class="bg-light rounded">
								<div class="rounded-top overflow-hidden">
									<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum
										available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
											Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
						<div class="whats-item">
							<div class="bg-light rounded">
								<div class="rounded-top overflow-hidden">
									<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum
										available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
											Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php  get_template_part('inc/php/front/left-sidebar', null); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(null, ['head' => $head]); ?>