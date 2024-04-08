<?php


$head = [
	'head_title' => ['Luyen thi JLPT'],
	'head_des' => ['bui tuan anh'],
	'_css' => ['<link rel="stylesheet" href="/assets/css/jlpt-test.css">'],
	'_script' => ['<script src="/assets/js/jlpt.js"></script>']
];
get_header(null, ['head' => $head]);
?>

<!-- Single Product Start -->
<div class="container-fluid py-5">
	<div class="container py-5">
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="row g-4">
					<div class="col-12">
						<div class="p-3 rounded border">
							<h4 class="mb-4 center">JLPT N1 2023/7</h4>
							<div class="row g-2" id="jlpt-test-info">
								<div class="col-12">
									<a href="?positon=moji" class="btn btn-light w-100 rounded text-uppercase text-dark py-3">文字－語彙</a>
								</div>
								<div class="col-12">
									<a href="?positon=bunpou" class="btn btn-light w-100 rounded text-uppercase text-dark py-3">文法 - 12/20</a>
								</div>
								<div class="col-12">
									<a href="?positon=dokkai" class="btn btn-light w-100 rounded text-uppercase text-dark py-3">読解</a>
								</div>
								<div class="col-12">
									<a href="?positon=cyoukai" class="btn btn-light w-100 rounded text-uppercase text-dark py-3">聴解</a>
								</div>
								<div class="col-12">
									<a href="?positon=check" id="check-jlpt-test" class="btn btn-light w-100 rounded text-uppercase text-dark py-3">チェックする</a>
								</div>
							</div>
						</div>
						<!-- <div class="col-12">
                            <a href="#" class="btn btn-light w-100 rounded text-uppercase text-dark py-3">残り時間：65:20</a>
                        </div> -->
					</div>
				</div>
			</div>

			<div class="col-lg-8 bg-qs">
				<div class=" my-1">
					<div class="question ml-sm-5 pl-sm-5 pt-2" id="jlpt-test-content">
						<!-- Confirm Modal -->
						<button class="display-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"></button>
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">Xác Nhận</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										Bạn có muốn nộp bài bà chấm điểm bây giờ không?
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary bg-none" id="continueBtn">Làm Tiếp</button>
										<button type="button" class="btn btn-secondary bg-none" id="submitBtn">Nộp Bài</button>
									</div>
								</div>
							</div>
						</div>



						<!-- Content -->
						<?php the_content() ?>

					</div>
					<div class="d-flex align-items-center pt-3">
						<div id="prev">
							<button class="btn btn-primary">前</button>
						</div>
						<div class="ml-auto mr-sm-5">
							<button class="btn btn-success">次</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Single Product End -->

<?php get_footer(null, ['head' => $head]); ?>