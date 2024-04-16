<?php extract($args); ?>
<div class="col-lg-4 col-xl-3">
	<div class="row g-4">
		<div class="col-12">
			<div class="p-3 rounded border">
				<h4 class="mb-4">Connect</h4>
				<div class="row g-4">
					<div class="col-12">
						<a target="_blank" href="https://www.facebook.com/profile.php?id=61558645585428" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
							<i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
							<span class="text-white">facebook</span>
						</a>
						<a target="_blank" href="https://www.youtube.com/@daisukii.net1" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
							<i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
							<span class="text-white">YouTube</span>
						</a>
					</div>
				</div>
				<h4 class="my-4">Popular News</h4>
				<div class="row g-4">

					<?php foreach ($datas->posts as $id => $pp) :
						$img = get_the_post_thumbnail_url($pp->ID, 'thumbnail');
						$img = $img ? $img : '/assets/img/no_img.png';
						$id = $id + 1; ?>
						<div class="col-12">
							<div class="row g-4 align-items-center features-item">
								<div class="col-4">
									<div class="rounded-circle position-relative">
										<div class="overflow-hidden rounded-circle">
											<img src="<?= $img ?>" class="img-zoomin img-fluid rounded-circle w-100" width="60" height="60" alt="<?= $pp->post_title ?>">
										</div>
										<span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;"><?= $id ?></span>
									</div>
								</div>
								<div class="col-8">
									<div class="features-content d-flex flex-column">
										<a href="<?= get_permalink($pp->ID) ?>" class="h6"><?= $pp->post_title ?></a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

					<?php if (isset($tags) && !empty($tags)) : ?>
						<div class="col-lg-12">
							<div class="border-bottom my-3 pb-3">
								<h4 class="mb-0">Tags</h4>
							</div>
							<ul class="nav nav-pills d-inline-flex text-center">
								<?php foreach ($tags as $tag) : ?>
									<li class="nav-item mb-3">
										<a class="d-flex bg-light rounded-pill me-2" href="/<?= $slug.'?kw='.$tag->slug ?>">
											<span class="text-dark link-hover" style="width: 90px;">#<?= $tag->name ?></span>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
					<div class="col-lg-12">
						<div class="position-relative banner-2">
							<img src="/img/banner-2.jpg" class="img-fluid w-100 rounded" alt="">
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