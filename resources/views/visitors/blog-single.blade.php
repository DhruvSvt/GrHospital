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
                            <img src="{{ Voyager::image($blog->image) }}" alt="post image" loading="lazy">
                        </a>
                    </div><!-- /.post-img -->
                    <div class="post__body pb-0">
                        <div class="post__meta-cat">
                            <a href="#">{{ $blog->tag }}</a>
                        </div><!-- /.blog-meta-cat -->
                        <div class="post__meta d-flex align-items-center mb-20">
                            <span class="post__meta-date">{{ \Carbon\Carbon::parse($blog->created_at)->format('d-M-Y') ?? '' }}</span>
                        </div><!-- /.blog-meta -->
                        <h1 class="post__title mb-30">
                            {{ $blog->title }}
                        </h1>
                        <div class="post__desc">
                            <p>{{ $blog->description }}</p>
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
                    @if($prevBlog = \App\Models\Blog::find($blog->id - 1))
                    <a href="{{ route('blog-detail',$prevBlog->id) }}" class="widget-nav__prev d-flex flex-wrap">
                        <div class="widget-nav__img">
                            <img src="{{ Voyager::image($prevBlog->image) }}" alt="blog thumb">
                        </div>
                        <div class="widget-nav__content">
                            <span>Previous Post</span>
                            <h5 class="widget-nav__ttile mb-0">{{ $prevBlog->title }}</h5>
                        </div>
                    </a><!-- /.widget-prev  -->
                    @endif
                    @if($nextBlog = \App\Models\Blog::find($blog->id + 1))
                    <a href="{{ route('blog-detail',$nextBlog->id) }}" class="widget-nav__next d-flex flex-wrap">
                        <div class="widget-nav__img">
                            <img src="{{ Voyager::image($nextBlog->image) }}" alt="blog thumb">
                        </div>
                        <div class="widget-nav__content">
                            <span>Next Post</span>
                            <h5 class="widget-nav__ttile mb-0">{{ $nextBlog->title }}</h5>
                        </div>
                    </a><!-- /.widget-next  -->
                    @endif
                </div>
            </div><!-- /.col-lg-8 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar">

                    <div class="widget widget-posts">
                        <h5 class="widget__title">Recent Posts</h5>
                        <div class="widget__content">
                            <!-- post item #1 -->
                            @foreach ($recents as $recent )
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="{{ Voyager::image($recent->image) }}" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">{{ \Carbon\Carbon::parse($recent->created_at)->format('d-M-Y') ?? '' }}</span>
                                    <h4 class="widget-post__title"><a href="{{ route('blog-detail',$recent->id) }}">{{ $recent->title }}</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                            @endforeach
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-posts -->

                    <div class="widget widget-posts">
                        <h5 class="widget__title">Featured Posts</h5>
                        <div class="widget__content">
                            <!-- post item #1 -->
                            @foreach ($features as $feature )
                            <div class="widget-post-item d-flex align-items-center">
                                <div class="widget-post__img">
                                    <a href="#"><img src="{{ Voyager::image($feature->image) }}" alt="thumb"></a>
                                </div><!-- /.widget-post-img -->
                                <div class="widget-post__content">
                                    <span class="widget-post__date">{{ \Carbon\Carbon::parse($feature->created_at)->format('d-M-Y') ?? '' }}</span>
                                    <h4 class="widget-post__title"><a href="{{ route('blog-detail',$feature->id) }}">{{ $feature->title }}</a>
                                    </h4>
                                </div><!-- /.widget-post-content -->
                            </div><!-- /.widget-post-item -->
                            @endforeach
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-posts -->
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.blog Single -->
@endsection
