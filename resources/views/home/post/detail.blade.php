@extends('home.layout')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Trang chủ</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a class="home" href="#" title="Blog">Bài viết</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span> Chi tiết bài viết</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- Blog category -->
                    <div class="block left-module">
                        <p class="title_block">Blog Categories</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        <li><span></span><a href="#">News</a></li>
                                        <li><span></span><a href="#">About Beauty</a></li>
                                        <li><span></span><a href="#">Baby &amp; Mom</a></li>
                                        <li><span></span><a href="#">Diet &amp; Fitness</a></li>
                                        <li><span></span><a href="#">Promotions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./blog category  -->
                    <!-- Popular Posts -->
                    <div class="block left-module">
                        <p class="title_block">Bài viết được xem nhiều</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar clearfix">
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="{!! url('/') !!}/public/home/assets/data/blog-thumb1.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="{!! url('/') !!}/public/home/assets/data/blog-thumb2.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="{!! url('/') !!}/public/home/assets/data/blog-thumb3.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Popular Posts -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{!! url('/') !!}/public/home/assets/data/slide-left.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                    <!-- Recent Comments -->
                    <div class="block left-module">
                        <p class="title_block">Ý kiến đóng góp</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="recent-comment-list">
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Recent Comments -->
                    <!-- tags -->
                    <div class="block left-module">
                        <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level1">good</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- ./tags -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{!! url('/') !!}/public/home/assets/data/slide-left2.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                </div>
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2">{!! $chitiet->name !!} </span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-meta-data">
                        <span class="author">
                        <i class="fa fa-user"></i>
                        by: <a href="#">NK2</a></span>
                            <span class="cat">
                            <i class="fa fa-folder-o"></i>
                            <a href="#">Tin mới</a>
                        </span>
                            <span class="comment-count">
                            <i class="fa fa-comment-o"></i> 3
                        </span>
                            <span class="date"><i class="fa fa-calendar"></i> {!! $chitiet['created_at'] !!}</span>
                            <span class="post-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(7 votes)</span>
                        </span>
                        </div>
                        <div class="entry-photo">
                            <img src="{!! asset('resources/upload/post/'.$chitiet['avatar']) !!}" alt="xe máy exciter 150">
                        </div>
                        <div class="content-text clearfix">
                            {!! $chitiet->content !!}
                        </div>
                        <div class="entry-tags">
                            <span>Tags:</span>
                            <a href="#">Yamaha,</a>
                            <a href="#">Honda,</a>
                            <a href="#">Suzuki</a>
                        </div>
                    </article>
                    <!-- Related Posts -->
                    <div class="single-box">
                        <h2>Tin tức liên quan</h2>
                        <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="{!! url('/') !!}/public/home/assets/data/blog-1.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Chi tiết</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="{!! url('/') !!}/public/home/assets/data/blog-2.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Chi tiết</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="{!! url('/') !!}/public/home/assets/data/blog-3.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Chi tiết</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="{!! url('/') !!}/public/home/assets/data/blog-4.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Chi tiết</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <!-- ./Related Posts -->
                    <!-- Comment -->
                    <div class="single-box">
                        <h2 class="">Bình luận</h2>
                        <div class="comment-list">
                            <ul>
                                <li>
                                    <div class="avartar">
                                        <img src="{!! url('/') !!}/public/home/assets/data/icon-s4.png" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author"><a href="#">Admin</a></span>
                                            <span class="date">2015-04-01</span>
                                        </div>
                                        <div class="comment">
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <div class="avartar">
                                                <img src="{!! url('/') !!}/public/home/assets/data/icon-s4.png" alt="Avatar">
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author"><a href="#">Admin</a></span>
                                                    <span class="date">2015-04-01</span>
                                                </div>
                                                <div class="comment">
                                                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avartar">
                                                <img src="{!! url('/') !!}/public/home/assets/data/icon-s4.png" alt="Avatar">
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author"><a href="#">Admin</a></span>
                                                    <span class="date">2015-04-01</span>
                                                </div>
                                                <div class="comment">
                                                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="avartar">
                                        <img src="{!! url('/') !!}/public/home/assets/data/icon-s4.png" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author"><a href="#">Admin</a></span>
                                            <span class="date">2015-04-01</span>
                                        </div>
                                        <div class="comment">
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="avartar">
                                        <img src="{!! url('/') !!}/public/home/assets/data/icon-s4.png" alt="Avatar">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <span class="author"><a href="#">Admin</a></span>
                                            <span class="date">2015-04-01</span>
                                        </div>
                                        <div class="comment">
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-box">
                        <h2>Ý kiến của bạn</h2>
                        <div class="coment-form">
                            <p>(*) Những bình luận có nội dung không phù hợp sẽ bị xóa</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Tên của bạn</label>
                                    <input id="name" type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for="message">Bình luận</label>
                                    <textarea name="message" id="message"rows="8" class="form-control" placeholder="Xin mời bạn nhập bình luận tại đây"></textarea>
                                </div>
                            </div>
                            <button class="btn-comment">Gửi</button>
                        </div>
                    </div>
                    <!-- ./Comment -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection