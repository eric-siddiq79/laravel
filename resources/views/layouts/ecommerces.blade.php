<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SHOPMAMA HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/ecommerces.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- HEADER -->
<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-left">
                <span>Welcome to E-shop!</span>
            </div>
            <div class="pull-right">
                <ul class="header-top-links">
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li class="dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="#">English (ENG)</a></li>
                            <li><a href="#">Russian (Ru)</a></li>
                            <li><a href="#">French (FR)</a></li>
                            <li><a href="#">Spanish (Es)</a></li>
                        </ul>
                    </li>
                    <li class="dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="#">USD ($)</a></li>
                            <li><a href="#">EUR (€)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="#">
                        <img src="./img/logo.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            {{--                            <option value="0">All Categories</option>--}}
                            {{--                            @foreach( $categories as $category)--}}
                            {{--                                <option value="1">{{ $category->name }}</option>--}}
                            {{--                            @endforeach--}}
                        </select>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                        </div>
                        <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
                        <ul class="custom-menu">
                            <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                        </ul>
                    </li>
                    <!-- /Account -->

                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <?php $sum = 0; ?>
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty">
                                    <?php
                                    if( session('cart') ) {
                                        $count = 0;
                                        $sum = 0;
                                        foreach( session('cart') as $counter) {
                                            $countPriceTotal = $counter['price'] * $counter['quantity'];
                                            $sum += $countPriceTotal;
                                            $count++;
                                        }
                                        echo $count;
                                    }
                                    ?>
                                </span>
                            </div>
                            <strong class="text-uppercase">My Cart:</strong>
                            <br>
                            <span>{{ $sum }}</span>
                        </a>
                        @if( session( 'cart' ) )
                            <div class="custom-menu">
                                <div id="shopping-cart">
                                    <div class="shopping-cart-list">
                                        <?php $total=0; ?>
                                        @foreach( session( 'cart' ) as $id => $details )
                                            <div class="product product-widget">
                                                <div class="product-thumb">
                                                    <img src="{{ $details['photo'] }}" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-price">${{$details['price']}} <span class="qty">x{{$details['quantity']}}</span></h3>
                                                    <h2 class="product-name"><a href="#">{{$details['name']}}</a></h2>
                                                </div>
                                                <button class="cancel-btn remove-from-cart" data-id="{{$id}}"><i class="fa fa-trash"></i></button>
                                            </div>
                                            <?php $sum+= $details['price']*$details['quantity']; ?>
                                        @endforeach
                                    </div>
                                    <div class="shopping-cart-btns">
                                        <a class="main-btn" href="{{ url('cart') }}">View Cart</a>
                                        <a class="primary-btn" href="{{ url('checkout') }}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        @endif
                    </li>
                    <!-- /Cart -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->

<!-- Begin Content -->
@yield('content')
<!-- /End Content -->

<!-- FOOTER -->
<footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="#">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /footer logo -->

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                    <!-- footer social -->
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                    <!-- /footer social -->
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">My Account</h3>
                    <ul class="list-links">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <div class="clearfix visible-sm visible-xs"></div>

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Customer Service</h3>
                    <ul class="list-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shiping & Return</a></li>
                        <li><a href="#">Shiping Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer subscribe -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Stay Connected</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    <form>
                        <div class="form-group">
                            <input class="input" placeholder="Enter Email Address">
                        </div>
                        <button class="primary-btn">Join Newslatter</button>
                    </form>
                </div>
            </div>
            <!-- /footer subscribe -->
        </div>
        <!-- /row -->
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    Copyright &copy; SHOPMAMA
                </div>
                <!-- /footer copyright -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/slick.min.js') }}"></script>
<script src="{{ asset('/js/nouislider.min.js') }}"></script>
<script src="{{ asset('/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('/js/main.j') }}s"></script>
<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });


    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

    $(".cupon-button").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        var coupon = $('#cupon').val();

        $.ajax({
            type : 'get',
            url: '{{ url('checkcoupon') }}',
            data: {_token: '{{ csrf_token() }}', coupon },
            success: function (response) {
                if( jQuery.type( response ) === 'array'){
                    var $dis = parseFloat(response[0]['discount']),
                        $Total = $('.total_price').text(),
                        calcTotal = $Total - $dis;
                    $('.discount').text('$'+response[0]['discount']);
                    $('.total_price').html(calcTotal);
                }else{
                    $('.discount').text(response);
                }

            }
        });
    });


    var total = $('.total_price').text();
        total = parseFloat( total );

    $('[name="shipping"]').each( function(){
        $(this).on('change', function(){
            var shipCharge = $(this).val();
                shipCharge = parseFloat( shipCharge );
               var calcTotal = parseInt(total + shipCharge),
                   method = $(this).attr('data-method');
               $('.shipping').text( method );
            $('.total_price').text(calcTotal );
        })
    });

</script>
</body>

</html>
