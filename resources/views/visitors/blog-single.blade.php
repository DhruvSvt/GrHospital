@extends('layouts.app')
@section('content')
<!-- ======================== page title =========================== -->
<section class="page-title pt-30 pb-30 text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.page-title -->

<!-- ====================== Blog Single ========================= -->
<section class="blog blog-single pt-0 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="post-item mb-0">
                    <div class="post__img">
                        <a href="#">
                            <img src="assets/images/blog/single/1.jpg" alt="post image" loading="lazy">
                        </a>
                    </div><!-- /.post-img -->
                    <div class="post__body pb-0">
                        <div class="post__meta-cat">
                            <a href="#">Consulting</a><a href="#">Sales</a>
                        </div><!-- /.blog-meta-cat -->
                        <div class="post__meta d-flex align-items-center mb-20">
                            <span class="post__meta-date">Jan 20, 2022</span>
                            <a class="post__meta-author" href="#">Martin King</a>
                            <a class="post__meta-comments" href="#">2 coments</a>
                        </div><!-- /.blog-meta -->
                        <h1 class="post__title mb-30">
                            6 Tips to Protect Your Mental Health When You’re Sick
                        </h1>
                        <div class="post__desc">
                            <p>Vast numbers of employees now work remotely, and it’s too late to develop a set of
                                remote-work
                                policies if you didn’t already have one. But there are ways to make the remote-work
                                experience
                                productive and engaging — for employees and the organization.</p>
                            <p> “At most organizations, scenario planning focuses on the necessary operational responses
                                to ensure
                                business continuity. Few of these plans address the ability or bandwidth of employees to
                                focus on
                                their work,” says Brian Kropp, Distinguished Vice President, Research, Gartner.</p>
                            <p>Use both direct conversations and indirect observations to get visibility into employees’
                                challenges
                                and concerns. Use every opportunity to make clear to employees that you support and care
                                for them.
                                To
                                facilitate regular conversations between managers and employees, provide managers with
                                guidance on
                                how
                                best to broach sensitive subjects arising from the COVID-19 pandemic, including
                                alternative work
                                models, job security and prospects, impact on staffing and tension in the workplace.</p>
                            <p>Make sure employees have the technology they need to be successful, which may be more
                                than just a
                                mobile phone and laptop. For example, if you expect employees to attend virtual
                                meetings, do they
                                have
                                adequate cameras?</p>
                            <p>Even if you don’t have an extensive set of technology and collaborative tools available,
                                you can
                                equip employees to function effectively when remote. But don’t just assume that people
                                know how to
                                operate with virtual communications — or are comfortable in that environment. </p>
                        </div><!-- /.blog-desc -->
                    </div>
                </div><!-- /.post-item -->
                <div class="d-flex flex-wrap justify-content-between border-top border-bottom pt-30 pb-30 mb-40">
                    <div class="blog-share d-flex flex-wrap align-items-center">
                        <strong class="mr-20 color-heading">Share</strong>
                        <ul class="list-unstyled social-icons d-flex mb-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div><!-- /.blog-share -->
                </div>
                <div class="widget-nav d-flex justify-content-between mb-40">
                    <a href="#" class="widget-nav__prev d-flex flex-wrap">
                        <div class="widget-nav__img">
                            <img src="assets/images/blog/grid/2.jpg" alt="blog thumb">
                        </div>
                        <div class="widget-nav__content">
                            <span>Previous Post</span>
                            <h5 class="widget-nav__ttile mb-0">Unsure About Wearing a Face Mask?</h5>
                        </div>
                    </a><!-- /.widget-prev  -->
                    <a href="#" class="widget-nav__next d-flex flex-wrap">
                        <div class="widget-nav__img">
                            <img src="assets/images/blog/grid/3.jpg" alt="blog thumb">
                        </div>
                        <div class="widget-nav__content">
                            <span>Next Post</span>
                            <h5 class="widget-nav__ttile mb-0">Tips for Eating Healthy When You’re Home</h5>
                        </div>
                    </a><!-- /.widget-next  -->
                </div>
            </div><!-- /.col-lg-8 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar">

                    <div class="widget widget-posts">
                        <h5 class="widget__title">Recent Posts</h5>
                        <div class="widget__content">
                            <!-- post item #1 -->
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="assets/images/blog/grid/2.jpg" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">Sep 19, 2022</span>
                                    <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your
                                            Leadership</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                            <!-- post item #2 -->
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="assets/images/blog/grid/3.jpg" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">July 7, 2022</span>
                                    <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About
                                            Employee?</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                            <!-- post item #3 -->
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="assets/images/blog/grid/6.jpg" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">March 13, 2022</span>
                                    <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your
                                            Leadership</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-posts -->

                    <div class="widget widget-posts">
                        <h5 class="widget__title">Featured Posts</h5>
                        <div class="widget__content">
                            <!-- post item #1 -->
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="assets/images/blog/grid/2.jpg" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">Sep 19, 2022</span>
                                    <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your
                                            Leadership</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                            <!-- post item #2 -->
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="assets/images/blog/grid/3.jpg" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">July 7, 2022</span>
                                    <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About
                                            Employee?</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                            <!-- post item #3 -->
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="assets/images/blog/grid/6.jpg" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">March 13, 2022</span>
                                    <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your
                                            Leadership</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-posts -->
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.blog Single -->
@endsection
