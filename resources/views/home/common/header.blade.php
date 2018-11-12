<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{!! url('public/home') !!}/assets/images/phone.png" />00-62-658-658</a>
                <a href="#"><img alt="email" src="{!! url('public/home') !!}/assets/images/email.png" />Liên hệ!</a>
            </div>

            <div class="support-link">
                <a href="#">Giới thiệu</a>
                <a href="#">Hỗ trợ</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Tài khoản</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Đăng nhập</a></li>
                        <li><a href="#">Đăng ký</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{!! url() !!}"><img alt="Kute Shop" src="{!! url('public/home') !!}/assets/images/logo.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline" method="post" action="javascript:void(0)">
                    <div class="form-group form-category">
                        <select class="select-category" name="cate_search">
                            <option value="0">Tất cả danh mục</option>
                            @for($i=1;$i<6;$i++)
                                <?php $selected = ""; ?>
                                @if(isset($search['cate']) && $search['cate'] == $i)
                                    <?php $selected = "selected"; ?>
                                @endif
                                <option {!! $selected !!} value="{!! $i !!}">Danh mục {!! $i !!}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group input-serach">
                        <input type="text" name="key_search" placeholder="Keyword here..." value="{!! @$search['key'] !!}">
                    </div>
                    <button type="button" class="pull-right btn-search" id="search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="order.html">
                    <span class="title">Giỏ hàng</span>
                    <span class="total">2 sp - 22.000.000 đ</span>
                    <span class="notify notify-left">2</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                            <img class="img-responsive" src="{!! url('public/home') !!}/assets/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 �</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                            <img class="img-responsive" src="{!! url('public/home') !!}/assets/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 �</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 �</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="gio-hang.html" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('home.common.cate_top')
</div>