@extends('layouts.app')
@section('content')
<!-- ======================== page title =========================== -->
<section class="page-title page-title-layout5 bg-overlay">
    <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Health Essentials Blogs</h1>
                {{-- <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav> --}}
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.page-title -->

<!-- ====================== Blog Grid ========================= -->
<section class="blog-grid">
    <div class="container">
        <div class="row">
            <!-- Post Item #1 -->
            @foreach ($blogs as $blog)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                        <a href="blog-single-post.html">
                            <img src="{{ Voyager::image($blog->image) }}" alt="blog image" loading="lazy">
                        </a>
                    </div><!-- /.post__img -->
                    <div class="post__body">
                        <div class="post__meta-cat">
                            <a>{{ $blog->tag }}</a>
                        </div><!-- /.blog-meta-cat -->
                        <div class="post__meta d-flex">
                            <span class="post__meta-date">{{ Carbon\Carbon::parse($blog->created_at)->format('d-M-Y') ??
                                '' }}</span>
                        </div>
                        <h4 class="post__title"><a href="#">{{ $blog->title }}</a>
                        </h4>
                        <p class="post__desc">
                            {{ \Illuminate\Support\Str::limit($blog->description, $limit = 150, $end = '...') }}
                        </p>
                        <a href="{{ route('blog-detail',$blog->id) }}"
                            class="btn btn__secondary btn__link btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.post__body -->
                </div><!-- /.post-item -->
            </div>
            @endforeach

        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center">
                <nav class="pagination-area">
                    <ul class="pagination justify-content-center">
                        <nav class="pagination-area">
                            {{-- <ul class="pagination justify-content-center">

                                @if ($blogs->currentPage() == 1)
                                <li class="disabled"><span class="current"></span></li>
                                @else
                                <li><a href="{{ $blogs->url(1) }}">1</a></li>
                                @endif

                                @if ($blogs->currentPage() > 2)
                                <li><span>...</span></li>
                                @endif

                                @for ($i = max(2, $blogs->currentPage() - 1); $i <= min($blogs->lastPage(),
                                    $blogs->currentPage() + 1); $i++)
                                    @if ($i == $blogs->currentPage())
                                    <li class="disabled"><span class="current"></span></li>
                                    @else
                                    <li><a href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor

                                @if ($blogs->currentPage() < $blogs->lastPage() - 1)
                                    <li><span>...</span></li>
                                @endif

                                @if ($blogs->currentPage() == $blogs->lastPage())
                                    <li class="disabled"><span></span></li>
                                    @else
                                    <li><a href="{{ $blogs->nextPageUrl() }}"><i class="icon-arrow-right"></i></a>
                                    </li>
                                @endif
                            </ul> --}}
                        </nav>

                    </ul>
                </nav>
            <div class="float-right">
                {!! $blogs->links() !!}
            </div>
            </div>
        </div>
    </div>
</section>
<!-- /.blog Grid -->
@endsection
