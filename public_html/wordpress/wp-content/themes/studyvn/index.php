<?php
$post_datas = getListAll('blog', 10, $_GET);

$head = [
	'head_title' => ['学校法人 SBC東京医療大学'],
	'head_des' => ['SBC東京医療大学は、理学療法学科、整復医療･トレーナー学科、看護学科の3つの学科を擁する医療系大学です。SBCメディカルグループの美容医療を取り入れた、実学の医療教育と、充実したサポート体制であなたの夢の実現を支えます。'],
	'_css' => ['<link rel="stylesheet" href="/assets/css/all.css">'],
	'_script' => ['']
];
get_header(null, ['head' => $head]);
?>

<!-- Features Start -->
<div class="container-fluid features mb-5">
	<div class="container py-5">
		<div class="row g-4">
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="row g-4 align-items-center features-item">
					<div class="col-4">
						<div class="rounded-circle position-relative">
							<div class="overflow-hidden rounded-circle">
								<img src="img/features-sports-1.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
							</div>
							<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
						</div>
					</div>
					<div class="col-8">
						<div class="features-content d-flex flex-column">
							<p class="text-uppercase mb-2">Sports</p>
							<a href="#" class="h6">
								Get the best speak market, news.
							</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="row g-4 align-items-center features-item">
					<div class="col-4">
						<div class="rounded-circle position-relative">
							<div class="overflow-hidden rounded-circle">
								<img src="img/features-technology.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
							</div>
							<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
						</div>
					</div>
					<div class="col-8">
						<div class="features-content d-flex flex-column">
							<p class="text-uppercase mb-2">Technology</p>
							<a href="#" class="h6">
								Get the best speak market, news.
							</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="row g-4 align-items-center features-item">
					<div class="col-4">
						<div class="rounded-circle position-relative">
							<div class="overflow-hidden rounded-circle">
								<img src="img/features-fashion.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
							</div>
							<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
						</div>
					</div>
					<div class="col-8">
						<div class="features-content d-flex flex-column">
							<p class="text-uppercase mb-2">Fashion</p>
							<a href="#" class="h6">
								Get the best speak market, news.
							</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="row g-4 align-items-center features-item">
					<div class="col-4">
						<div class="rounded-circle position-relative">
							<div class="overflow-hidden rounded-circle">
								<img src="img/features-life-style.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
							</div>
							<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
						</div>
					</div>
					<div class="col-8">
						<div class="features-content d-flex flex-column">
							<p class="text-uppercase mb-2">Life Style</p>
							<a href="#" class="h6">
								Get the best speak market, news.
							</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Features End -->


<!-- Main Post Section Start -->
<div class="container-fluid">
	<div class="container py-5">
		<div class="row g-4">


			<div class="col-lg-7 col-xl-8 mt-0">
				<?php
				$dts = array_slice($post_datas->posts, 0, 4);
				foreach ($dts as $id => $post_data) :
					$img = get_the_post_thumbnail_url($post_data->ID, 'large');
					$img = $img ? $img : '/assets/img/no_img.png';
					if (in_array($id, [0, 1, 2, 3])) : ?>
						<?php if ($id == 0) : ?>
							<a href="<?= get_permalink($post_data->ID) ?>">
								<div class="position-relative overflow-hidden rounded">
									<img src="<?= $img ?>" class="img-fluid rounded img-zoomin w-100 m-h-500" alt="<?= $post_data->post_title ?>">
									<div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
										<p class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</p>
										<p class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</p>
										<p class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</p>
										<p class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</p>
									</div>
								</div>
								<div class="border-bottom py-3">
									<p class="display-6 text-dark mb-0 link-hover"><?= $post_data->post_title ?></p>
								</div>
								<p class="mt-3 mb-4"><?= get_first_text($post_data->ID, 220) ?></p>
							</a>
							<div class="bg-light p-4 rounded">
								<div class="news-2">
									<h5 class="mb-4">Bài nổi bật</h5>
								</div>
								<div class="row g-4 align-items-center">
								<?php elseif (in_array($id, [1, 2, 3])) : ?>
									<div class="col-md-4">
										<div class="rounded overflow-hidden">
											<img src="<?= $img ?>" class="img-fluid rounded img-zoomin w-100 m-h-174" alt="<?= $post_data->post_title ?>">
										</div>
									</div>
									<div class="col-md-8">
										<div class="d-flex flex-column">
											<a href="<?= get_permalink($post_data->ID) ?>" class="h5"><?= $post_data->post_title ?></a>
											<p><?= get_first_text($post_data->ID, 130) ?></p>
											<a style="margin-top: -13px;" href="">
												<img src="https://scontent-nrt1-1.xx.fbcdn.net/v/t39.30808-6/434328087_2557841507726380_7528039624968605877_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ch1pOlfQJdcAb5NYNgy&_nc_ht=scontent-nrt1-1.xx&oh=00_AfD5t21k9CSieC8fqqQcgoXTYrlu41reEVooq4cxj2NF8w&oe=6622AD50" alt="mdo" width="26" height="26" class="rounded-circle d-inline border border-2 border-primary">
												<p class="text-body d-inline">Bui Tuan Anh</p>
											</a>
										</div>
									</div>
						<?php endif;
						endif;
					endforeach; ?>
								</div>
							</div>
			</div>


			<div class="col-lg-5 col-xl-4">
				<div class="bg-light rounded p-4 pt-0">
					<div class="row g-4">
						<?php $dts = array_slice($post_datas->posts, 4);
						foreach ($dts as $id => $post_data) :
							$img = get_the_post_thumbnail_url($post_data->ID, 'large');
							$img = $img ? $img : '/assets/img/no_img.png'; ?>
							<?php if ($id == 0) : ?>
								<a href="">
									<div class="col-12">
										<div class="rounded overflow-hidden">
											<img src="img/news-3.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
										</div>
									</div>
									<div class="col-12">
										<div class="d-flex flex-column">
											<p class="h4"><?= $post_data->post_title ?></p>
											<p><?= get_first_text($post_data->ID, 130) ?></p>
											<a style="margin-top: -13px;" href="">
												<img src="https://scontent-nrt1-1.xx.fbcdn.net/v/t39.30808-6/434328087_2557841507726380_7528039624968605877_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ch1pOlfQJdcAb5NYNgy&_nc_ht=scontent-nrt1-1.xx&oh=00_AfD5t21k9CSieC8fqqQcgoXTYrlu41reEVooq4cxj2NF8w&oe=6622AD50" alt="mdo" width="26" height="26" class="rounded-circle d-inline border border-2 border-primary">
												<p class="text-body d-inline">Bui Tuan Anh</p>
											</a>
										</div>
									</div>
								</a>
							<?php else : ?>

								<div class="col-12">
									<div class="row g-4 align-items-center">
										<div class="col-5">
											<div class="overflow-hidden rounded">
												<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
											</div>
										</div>
										<div class="col-7">
											<div class="features-content d-flex flex-column">
												<a href="#" class="h6">Get the best speak market, news.</a>
												<small><i class="fa fa-clock"> 06 minute read</i> </small>
												<small><i class="fa fa-eye"> 3.5k Views</i></small>
											</div>
										</div>
									</div>
								</div>
						<?php endif;
						endforeach; ?>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Main Post Section End -->


<!-- Banner Start -->
<div class="container-fluid py-5 my-5" style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-lg-7">
				<h1 class="mb-4 text-primary">daisukii.net</h1>
				<h1 class="mb-4">Cùng chia sẻ - cùng tốt hơn!</h1>
				<p class="text-dark mb-4 pb-2">
					Tạo Tài Khoản để làm những bài thi JLPT các năm (Bao gồm bài Nghe).
					Chức năng chữa lỗi sai sau khi làm bài sẽ giúp bạn học dễ dàng và hiệu quả hơn.
					Ngoài ra hãy cùng mình viết chia sẻ kinh nghiệm hay cùng thảo luận về 1 vấn đề bất kì nào nhé.
				</p>
				<div class="text-center">
					<button class="btn btn-primary btn btn-success py-3 px-5 text-white">TẠO TÀI KHOẢN</button>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="rounded"><img src="/assets/img/no_img.png" class="img-fluid rounded w-100 rounded" alt=""></div>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->


<!-- Latest News Start -->
<div class="container-fluid latest-news py-5">
	<div class="container py-5">
		<h2 class="mb-4">Latest News</h2>
		<div class="latest-news-carousel owl-carousel">
			<div class="latest-news-item">
				<div class="bg-light rounded">
					<div class="rounded-top overflow-hidden">
						<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
					</div>
					<div class="d-flex flex-column p-4">
						<a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
						<div class="d-flex justify-content-between">
							<a href="#" class="small text-body link-hover">by Willum Skeem</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="latest-news-item">
				<div class="bg-light rounded">
					<div class="rounded-top overflow-hidden">
						<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
					</div>
					<div class="d-flex flex-column p-4">
						<a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
						<div class="d-flex justify-content-between">
							<a href="#" class="small text-body link-hover">by Willum Skeem</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="latest-news-item">
				<div class="bg-light rounded">
					<div class="rounded-top overflow-hidden">
						<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
					</div>
					<div class="d-flex flex-column p-4">
						<a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
						<div class="d-flex justify-content-between">
							<a href="#" class="small text-body link-hover">by Willum Skeem</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="latest-news-item">
				<div class="bg-light rounded">
					<div class="rounded-top overflow-hidden">
						<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
					</div>
					<div class="d-flex flex-column p-4">
						<a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
						<div class="d-flex justify-content-between">
							<a href="#" class="small text-body link-hover">by Willum Skeem</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
			<div class="latest-news-item">
				<div class="bg-light rounded">
					<div class="rounded-top overflow-hidden">
						<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
					</div>
					<div class="d-flex flex-column p-4">
						<a href="#" class="h4 ">Lorem Ipsum is simply dummy text of...</a>
						<div class="d-flex justify-content-between">
							<a href="#" class="small text-body link-hover">by Willum Skeem</a>
							<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Latest News End -->

<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-5">
	<div class="container py-5">
		<div class="tab-class mb-4">
			<div class="row g-4">
				<div class="col-lg-8 col-xl-9">
					<div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
						<h1 class="mb-4">What’s New</h1>
						<ul class="nav nav-pills d-inline-flex text-center">
							<li class="nav-item mb-3">
								<a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
									<span class="text-dark" style="width: 100px;">Sports</span>
								</a>
							</li>
							<li class="nav-item mb-3">
								<a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-2">
									<span class="text-dark" style="width: 100px;">Magazine</span>
								</a>
							</li>
							<li class="nav-item mb-3">
								<a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
									<span class="text-dark" style="width: 100px;">Politics</span>
								</a>
							</li>
							<li class="nav-item mb-3">
								<a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-4">
									<span class="text-dark" style="width: 100px;">Technology</span>
								</a>
							</li>
							<li class="nav-item mb-3">
								<a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-5">
									<span class="text-dark" style="width: 100px;">Fashion</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content mb-4">
						<div id="tab-1" class="tab-pane fade show p-0 active">
							<div class="row g-4">
								<div class="col-lg-8">
									<div class="position-relative rounded overflow-hidden">
										<img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
										<div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
											Sports
										</div>
									</div>
									<div class="my-4">
										<a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
									</div>
									<div class="d-flex justify-content-between">
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
										<a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
									</div>
									<p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
									</p>
								</div>
								<div class="col-lg-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Sports</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Sports</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Sports</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Sports</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Magazine</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab-2" class="tab-pane fade show p-0">
							<div class="row g-4">
								<div class="col-lg-8">
									<div class="position-relative rounded overflow-hidden">
										<img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
										<div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
											Magazine
										</div>
									</div>
									<div class="my-3">
										<a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
									</div>
									<p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
									</p>
									<div class="d-flex justify-content-between">
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
										<a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Magazine</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Magazine</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Magazine</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Magazine</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Magazine</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab-3" class="tab-pane fade show p-0">
							<div class="row g-4">
								<div class="col-lg-8">
									<div class="position-relative rounded overflow-hidden">
										<img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
										<div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
											Politics
										</div>
									</div>
									<div class="my-3">
										<a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
									</div>
									<p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
									</p>
									<div class="d-flex justify-content-between">
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
										<a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Politics</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Politics</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Politics</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Politics</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Politics</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab-4" class="tab-pane fade show p-0">
							<div class="row g-4">
								<div class="col-lg-8">
									<div class="position-relative rounded overflow-hidden">
										<img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
										<div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
											Technology
										</div>
									</div>
									<div class="my-3">
										<a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
									</div>
									<p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
									</p>
									<div class="d-flex justify-content-between">
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
										<a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Technology</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Technology</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Technology</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Technology</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Technology</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab-5" class="tab-pane fade show p-0">
							<div class="row g-4">
								<div class="col-lg-8">
									<div class="position-relative rounded overflow-hidden">
										<img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
										<div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
											Fashion
										</div>
									</div>
									<div class="my-3">
										<a href="#" class="h4">World Happiness Report 2023: What's the highway to happiness?</a>
									</div>
									<p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
									</p>
									<div class="d-flex justify-content-between">
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
										<a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
										<a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Fashion</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Fashion</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Fashion</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Fashion</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="row g-4 align-items-center">
												<div class="col-5">
													<div class="overflow-hidden rounded">
														<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
													</div>
												</div>
												<div class="col-7">
													<div class="features-content d-flex flex-column">
														<p class="text-uppercase mb-2">Fashion</p>
														<a href="#" class="h6">Get the best speak market, news.</a>
														<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
									<img src="img/news-7.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
						<div class="whats-item">
							<div class="bg-light rounded">
								<div class="rounded-top overflow-hidden">
									<img src="img/news-6.jpg" class="img-zoomin img-fluid rounded-top w-100" alt="">
								</div>
								<div class="d-flex flex-column p-4">
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
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
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
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
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
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
									<a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
									<div class="d-flex justify-content-between">
										<a href="#" class="small text-body link-hover">by Willium Smith</a>
										<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-5 lifestyle">
						<div class="border-bottom mb-4">
							<h1 class="mb-4">Life Style</h1>
						</div>
						<div class="row g-4">
							<div class="col-lg-6">
								<div class="lifestyle-item rounded">
									<img src="img/lifestyle-1.jpg" class="img-fluid w-100 rounded" alt="">
									<div class="lifestyle-content">
										<div class="mt-auto">
											<a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
											<div class="d-flex justify-content-between mt-4">
												<a href="#" class="small text-white link-hover">By Willium Smith</a>
												<small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="lifestyle-item rounded">
									<img src="img/lifestyle-2.jpg" class="img-fluid w-100 rounded" alt="">
									<div class="lifestyle-content">
										<div class="mt-auto">
											<a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
											<div class="d-flex justify-content-between mt-4">
												<a href="#" class="small text-white link-hover">By Willium Smith</a>
												<small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="row g-4">
						<div class="col-12">
							<div class="p-3 rounded border">
								<h4 class="mb-4">Stay Connected</h4>
								<div class="row g-4">
									<div class="col-12">
										<a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
											<i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
											<span class="text-white">13,977 Fans</span>
										</a>
										<a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
											<i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
											<span class="text-white">21,798 Follower</span>
										</a>
										<a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
											<i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
											<span class="text-white">7,999 Subscriber</span>
										</a>
										<a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
											<i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
											<span class="text-white">19,764 Follower</span>
										</a>
										<a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
											<i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
											<span class="text-white">31,999 Subscriber</span>
										</a>
										<a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
											<i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
											<span class="text-white">37,999 Subscriber</span>
										</a>
									</div>
								</div>
								<h4 class="my-4">Popular News</h4>
								<div class="row g-4">
									<div class="col-12">
										<div class="row g-4 align-items-center features-item">
											<div class="col-4">
												<div class="rounded-circle position-relative">
													<div class="overflow-hidden rounded-circle">
														<img src="img/features-sports-1.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
													</div>
													<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
												</div>
											</div>
											<div class="col-8">
												<div class="features-content d-flex flex-column">
													<p class="text-uppercase mb-2">Sports</p>
													<a href="#" class="h6">
														Get the best speak market, news.
													</a>
													<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="row g-4 align-items-center features-item">
											<div class="col-4">
												<div class="rounded-circle position-relative">
													<div class="overflow-hidden rounded-circle">
														<img src="img/features-technology.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
													</div>
													<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
												</div>
											</div>
											<div class="col-8">
												<div class="features-content d-flex flex-column">
													<p class="text-uppercase mb-2">Technology</p>
													<a href="#" class="h6">
														Get the best speak market, news.
													</a>
													<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="row g-4 align-items-center features-item">
											<div class="col-4">
												<div class="rounded-circle position-relative">
													<div class="overflow-hidden rounded-circle">
														<img src="img/features-fashion.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
													</div>
													<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
												</div>
											</div>
											<div class="col-8">
												<div class="features-content d-flex flex-column">
													<p class="text-uppercase mb-2">Fashion</p>
													<a href="#" class="h6">
														Get the best speak market, news.
													</a>
													<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="row g-4 align-items-center features-item">
											<div class="col-4">
												<div class="rounded-circle position-relative">
													<div class="overflow-hidden rounded-circle">
														<img src="img/features-life-style.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
													</div>
													<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
												</div>
											</div>
											<div class="col-8">
												<div class="features-content d-flex flex-column">
													<p class="text-uppercase mb-2">Life Style</p>
													<a href="#" class="h6">
														Get the best speak market, news.
													</a>
													<small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
									</div>
									<div class="col-lg-12">
										<div class="border-bottom my-3 pb-3">
											<h4 class="mb-0">Trending Tags</h4>
										</div>
										<ul class="nav nav-pills d-inline-flex text-center mb-4">
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Lifestyle</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Sports</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Politics</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Magazine</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Game</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Movie</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">Travel</span>
												</a>
											</li>
											<li class="nav-item mb-3">
												<a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
													<span class="text-dark link-hover" style="width: 90px;">World</span>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-12">
										<div class="position-relative banner-2">
											<img src="img/banner-2.jpg" class="img-fluid w-100 rounded" alt="">
											<div class="text-center banner-content-2">
												<h6 class="mb-2">The Most Populer</h6>
												<p class="text-white mb-2">News & Magazine WP Theme</p>
												<a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>