<?php
$cates = get_list_taxomomy('jlpt-test_cate');

$post_datas = getListAll('life', 12, $_GET);

$head = [
    'head_title' => ['Luyen thi JLPT'],
    'head_des' => ['bui tuan anh'],
    '_css' => [''],
    '_script' => ['<script src="/assets/js/jlpt.js"></script>']
];
get_header(null, ['head' => $head]);
?>

<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="row g-4">

                <div class="col-lg-8 col-xl-9">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                        <h1 class="mb-4">Luyện Thi JLPT</h1>
                        <ul class="nav nav-pills d-inline-flex text-center">
                            <?php foreach ($cates as $id => $cate_data) : ?>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-<?= $id ?>">
                                        <span class="text-dark" style="width: 100px;"><?= $cate_data->name ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tab-content mb-4">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="bg-light rounded my-4 p-4">
                                <h4 class="mb-4">Đề Thi Thật JLPT N1</h4>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center p-3 bg-white rounded">
                                            <img src="img/chatGPT.jpg" class="img-fluid rounded" alt="">
                                            <div class="ms-3">
                                                <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the
                                                    printing</a>
                                                <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute
                                                    read
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center p-3 bg-white rounded">
                                            <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                            <div class="ms-3">
                                                <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the
                                                    printing</a>
                                                <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute
                                                    read
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center p-3 bg-white rounded">
                                            <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                            <div class="ms-3">
                                                <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the
                                                    printing</a>
                                                <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute
                                                    read
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="bg-light rounded my-4 p-4">
                                <h4 class="mb-4">You Might Also Like</h4>
                                <div class="row g-4">

                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center p-3 bg-white rounded">
                                            <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                            <div class="ms-3">
                                                <a href="#" class="h5 mb-2">1111111 Ipsum is simply dummy text of the
                                                    printing</a>
                                                <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute
                                                    read
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center p-3 bg-white rounded">
                                            <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                            <div class="ms-3">
                                                <a href="#" class="h5 mb-2">2222 Ipsum is simply dummy text of the
                                                    printing</a>
                                                <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute
                                                    read
                                                </p>
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
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy..
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                        <a href="#" class="h4">World Happiness Report 2023: What's the highway to
                                            happiness?</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
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
                                            <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">7,999 Subscriber</span>
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
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
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
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
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
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
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
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View
                                            More</a>
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

<?php get_footer(null, ['head' => $head]); ?>