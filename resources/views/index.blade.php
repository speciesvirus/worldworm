@extends('layouts/main')

@section('body')


    <div class="page-wrapper"><!-- page wrapper -->

        <div class="header-wrapper clearfix"><!-- header wrapper -->

            <header id="header" class="header-separate header-4 logo-center search-sm sticky-menu-header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <div class="switcher-wrap">
                                <ul id="menu-currency-switcher"
                                    class="currency-switcher mega-menu show-arrow effect-down subeffect-fadein-left">
                                    <li id="nav-menu-item-2218"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub narrow ">
                                        <a href="#" class="">GBP</a>
                                        <div class="popup" style="display: block;">
                                            <div class="inner" style="">
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-2216"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom "
                                                        data-cols="1"><a href="#" class="">USD</a></li>
                                                    <li id="nav-menu-item-2217"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom "
                                                        data-cols="1"><a href="#" class="">EUR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <span class="gap switcher-gap">|</span>
                                <ul id="menu-view-switcher"
                                    class="view-switcher mega-menu show-arrow effect-down subeffect-fadein-left">
                                    <li id="nav-menu-item-2220"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub narrow ">
                                        <a href="#" class="">English</a>
                                        <div class="popup" style="display: block;">
                                            <div class="inner" style="">
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-2221"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom "
                                                        data-cols="1"><a href="#" class="">French</a></li>
                                                    <li id="nav-menu-item-2222"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom "
                                                        data-cols="1"><a href="#" class="">German</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-right">
                            <span class="welcome-msg">WELCOME TO PORTO WORDPRESS</span><span class="gap">|</span>
                            <ul id="menu-top-navigation"
                                class="top-links mega-menu show-arrow effect-down subeffect-fadein-left">
                                <li id="nav-menu-item-2223"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="http://newsmartwave.net/wordpress/porto/demo8/my-account/" class="">My
                                        Account</a></li>
                                <li id="nav-menu-item-2224"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/" class="">My
                                        Wishlist</a></li>
                                <li id="nav-menu-item-2304"
                                    class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="http://newsmartwave.net/wordpress/porto/demo8/about-us/" class="">About
                                        Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header-main" style="top: 0px;">

                    <div class="container">
                        <div class="header-left">

                            <div class="searchform-popup">
                                <a class="search-toggle"><i class="fa fa-search"></i></a>

                                <form role="search" method="get" id="yith-ajaxsearchform"
                                      action="http://newsmartwave.net/wordpress/porto/demo8/"
                                      class="yith-ajaxsearchform-container yith-ajaxsearchform-container945982881 searchform searchform-cats">
                                    <fieldset>
                                    <span class="text"><input name="s" id="yith-s" class="yith-s" type="text" value=""
                                                              placeholder="Search…" autocomplete="off"></span>
                                        <select name="product_cat" id="product_cat" class="cat">
                                            <option value="0">All Categories</option>
                                            <option class="level-0" value="women">Women</option>
                                            <option class="level-1" value="fashion">&nbsp;&nbsp;&nbsp;Fashion</option>
                                            <option class="level-1" value="women-sports">&nbsp;&nbsp;&nbsp;Sports
                                            </option>
                                            <option class="level-1" value="women-dress">&nbsp;&nbsp;&nbsp;Dress</option>
                                            <option class="level-0" value="furnitures">Furnitures</option>
                                            <option class="level-0" value="men">Men</option>
                                            <option class="level-1" value="accessories-men">&nbsp;&nbsp;&nbsp;Accessories
                                            </option>
                                            <option class="level-1" value="pants-denim">&nbsp;&nbsp;&nbsp;Pants &amp;
                                                Denim
                                            </option>
                                            <option class="level-0" value="bags">Bags</option>
                                            <option class="level-0" value="accessories">Accessories</option>
                                            <option class="level-0" value="t-shirts">T-shirts</option>
                                            <option class="level-0" value="sun-glasses">Sun Glasses</option>
                                            <option class="level-0" value="sports">Sports</option>
                                            <option class="level-0" value="dress">Dress</option>
                                            <option class="level-0" value="fashion-2">Fashion</option>
                                            <option class="level-0" value="polos">Polos</option>
                                            <option class="level-0" value="shoes">Shoes</option>
                                        </select>
                                    <span class="button-wrap"><button class="btn" id="yith-searchsubmit" title="Search"
                                                                      type="submit"><i class="fa fa-search"></i>
                                        </button></span>
                                        <input type="hidden" name="post_type" value="product">
                                    </fieldset>
                                    <div class="autocomplete-suggestions"
                                         style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                </form>


                            </div>
                            <a class="mobile-toggle"><i class="fa fa-reorder"></i></a>
                        </div>
                        <div class="header-center">
                            <h1 class="logo"><a href="http://newsmartwave.net/wordpress/porto/demo8/"
                                                title="Porto Wordpress - Porto Wordpress Demo Site" rel="home">
                                    <img class="img-responsive standard-logo"
                                         src="//newsmartwave.net/wordpress/porto/demo8/wp-content/themes/porto/images/logo/logo_red.png"
                                         alt="Porto Wordpress"><img class="img-responsive retina-logo"
                                                                    src="//newsmartwave.net/wordpress/porto/demo8/wp-content/themes/porto/images/logo/logo_red.png"
                                                                    alt="Porto Wordpress" style="display:none;"> </a>
                            </h1></div>
                        <div class="header-right">
                            <div class="header-minicart">
                                <div class="header-contact"><i class="fa fa-phone"></i> +(404) 158 14 25 78 <span
                                            class="gap">|</span><a href="#">CONTACT US</a></div>
                                <div id="mini-cart" class="dropdown mini-cart  effect-fadein-up">
                                    <div class="dropdown-toggle cart-head " data-toggle="dropdown" data-delay="50"
                                         data-close-others="false">
                                        <i class="minicart-icon "></i>
                                        <span class="cart-items">0</span>
                                    </div>
                                    <div class="dropdown-menu cart-popup widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">

                                            <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner"
                                                 style="position: relative;">
                                                <ul class="cart_list product_list_widget scrollbar-inner  scroll-content"
                                                    style="margin-bottom: 0px; margin-right: 0px;">


                                                    <li class="empty">No products in the cart.</li>


                                                </ul>
                                                <div class="scroll-element scroll-x">
                                                    <div class="scroll-element_outer">
                                                        <div class="scroll-element_size"></div>
                                                        <div class="scroll-element_track"></div>
                                                        <div class="scroll-bar" style="width: 100px;"></div>
                                                    </div>
                                                </div>
                                                <div class="scroll-element scroll-y">
                                                    <div class="scroll-element_outer">
                                                        <div class="scroll-element_size"></div>
                                                        <div class="scroll-element_track"></div>
                                                        <div class="scroll-bar" style="height: 100px;"></div>
                                                    </div>
                                                </div>
                                            </div><!-- end product list -->


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="porto-tooltip">
                                <span class="tooltip-icon"><i class="fa fa-exclamation"></i></span>
                                <div class="tooltip-popup">
                                    <span href="javascript:void(0)" class="tooltip-close"><i
                                                class="fa fa-close"></i></span>
                                    <div class="content">
                                        <h4>Header Options</h4>
                                        <p>Porto theme includes different 17 headers and 5 breadcrumbs. Variety of logo
                                            position, colors, search bar, main menu, and shopping cart icon.</p>
                                        <p>You can choose one of them to use your website.</p>
                                        <p>Language, Currency switchers are compatible with WPML language switcher,
                                            woocommerce currency switcher.</p></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="main-menu-wrap" style="top: 0px;">
                    <div id="main-menu" class="container centered hide-sticky-content">
                        <div class="menu-left">
                            <div class="logo"><a href="http://newsmartwave.net/wordpress/porto/demo8/"
                                                 title="Porto Wordpress - Porto Wordpress Demo Site" rel="home">
                                    <img class="img-responsive standard-logo"
                                         src="//newsmartwave.net/wordpress/porto/demo8/wp-content/themes/porto/images/logo/logo_red.png"
                                         alt="Porto Wordpress"><img class="img-responsive retina-logo"
                                                                    src="//newsmartwave.net/wordpress/porto/demo8/wp-content/themes/porto/images/logo/logo_red.png"
                                                                    alt="Porto Wordpress" style="display:none;"> </a>
                            </div>
                        </div>
                        <div class="menu-center">
                            <ul id="menu-main-menu"
                                class="main-menu mega-menu show-arrow effect-down subeffect-fadein-left">
                                <li id="nav-menu-item-2299"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children active has-sub narrow pos-left">
                                    <a href="http://newsmartwave.net/wordpress/porto/demo8" class=" current">Home</a>

                                    <div class="popup">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-2242"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom"
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/#demos"
                                                            class="">Overview</a></li>
                                                <li id="nav-menu-item-2242"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom"
                                                    data-cols="1"><a href="http://newsmartwave.net/wordpress/porto/"
                                                                     class="">Landing Page</a></li>
                                                <li data-cols="1"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    id="nav-menu-item-2582"><h5>eCommerce</h5>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2583"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo1/">eCommerce
                                                                1<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_01.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2584"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo2/">eCommerce
                                                                2<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_02.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2585"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo3/">eCommerce
                                                                3<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_03.jpg);"
                                                                                class="thumb-info-image fixed-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2586"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo4/">eCommerce
                                                                4<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_04.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2587"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo5/">eCommerce
                                                                5<span style="background:#eb2771;" class="tip"><span
                                                                            style="color:#eb2771;"
                                                                            class="tip-arrow"></span>HOT</span><span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_05.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2588"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo6/">eCommerce
                                                                6<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_06.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2589"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo7/">eCommerce
                                                                7<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_07.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2590"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo8/">eCommerce
                                                                8<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_08.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2591"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo9/">eCommerce
                                                                9<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_09.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2592"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo10/">eCommerce
                                                                10<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_10.jpg);"
                                                                                class="thumb-info-image fixed-image"></span></span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-cols="1"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    id="nav-menu-item-2593"><h5>Classic</h5>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2594"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo11/">Classic
                                                                – Original<span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_11.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2595"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo13/">Classic
                                                                – Color<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_13.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2596"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo14/">Classic
                                                                – Light<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_14.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2597"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo11/">Classic
                                                                – Video<span class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/11/select_demo_11_01.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-2598"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo13/">Classic
                                                                – Video Light<span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/11/select_demo_13_01.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-cols="1"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    id="nav-menu-item-2599"><a class="" href="#">Corporative<span
                                                                style=""
                                                                class="tip"><span
                                                                    style="" class="tip-arrow"></span>NEW</span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "
                                                            id="nav-menu-item-3608"><h5>Corporate – Versions<span
                                                                        style="background:#eb2771;" class="tip"><span
                                                                            style="color:#eb2771;"
                                                                            class="tip-arrow"></span>HOT</span>
                                                            </h5>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-2600"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo12/">Corporate
                                                                        – Version 1<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_12.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3541"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo16/">Corporate
                                                                        – Version 2<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_16.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3542"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo17/">Corporate
                                                                        – Version 3<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_17.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3544"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo18/">Corporate
                                                                        – Version 4<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_18.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3546"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo19/">Corporate
                                                                        – Version 5<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_19.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3549"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo20/">Corporate
                                                                        – Version 6<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_20.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3552"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo21/">Corporate
                                                                        – Version 7<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/01/select_demo_21.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                                    id="nav-menu-item-3553"><a class=" has-preview"
                                                                                               href="http://newsmartwave.net/wordpress/porto/demo22/">Corporate
                                                                        – Version 8<span
                                                                                class="thumb-info thumb-info-preview"><span
                                                                                    class="thumb-info-wrapper"><span
                                                                                        style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/01/select_demo_22.jpg);"
                                                                                        class="thumb-info-image"></span></span></span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-3600"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo23/">Corporate
                                                                – Hosting<span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/11/select_demo_23.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-3609"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo24">Corporate
                                                                – Digital Agency<span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/11/select_demo_24.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-cols="1"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    id="nav-menu-item-3297"><h5>One Page</h5>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-3300"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo12/home-one-page/">One
                                                                Page Original<span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_onepage.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-cols="1"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    id="nav-menu-item-3298"><h5>Dark</h5>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-3301"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo15/">Dark
                                                                Original<span style="background:#eb2771;"
                                                                              class="tip"><span
                                                                            style="color:#eb2771;"
                                                                            class="tip-arrow"></span>HOT</span><span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_15.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li data-cols="1"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    id="nav-menu-item-3299"><h5>RTL</h5>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom "
                                                            id="nav-menu-item-3302"><a class=" has-preview"
                                                                                       href="http://newsmartwave.net/wordpress/porto/demo-rtl/">RTL
                                                                Original<span
                                                                        class="thumb-info thumb-info-preview"><span
                                                                            class="thumb-info-wrapper"><span
                                                                                style="background-image: url(//newsmartwave.net/wordpress/porto/wp-content/uploads/2015/09/select_demo_rtl.jpg);"
                                                                                class="thumb-info-image"></span></span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li id="nav-menu-item-1552"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub wide  col-4">
                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/shop/" class="">Shop<span
                                                class="tip" style=""><span class="tip-arrow" style=""></span>NEW</span></a>
                                    <div class="popup">
                                        <div class="inner" style="">
                                            <ul class="sub-menu" style="width: 1110px;">
                                                <li id="nav-menu-item-1662"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;">
                                                    <h5>Category Variation</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-1696"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=2"
                                                               class="">2 Columns</a></li>
                                                        <li id="nav-menu-item-1697"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=3"
                                                               class="">3 Columns</a></li>
                                                        <li id="nav-menu-item-1698"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=4"
                                                               class="">4 Columns</a></li>
                                                        <li id="nav-menu-item-1699"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=5"
                                                               class="">5 Columns</a></li>
                                                        <li id="nav-menu-item-1700"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=6"
                                                               class="">6 Columns</a></li>
                                                        <li id="nav-menu-item-1701"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=7"
                                                               class="">7 Columns<span class="tip"
                                                                                       style="background:#eb2771;"><span
                                                                            class="tip-arrow"
                                                                            style="color:#eb2771;"></span>HOT</span></a>
                                                        </li>
                                                        <li id="nav-menu-item-1702"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/dress/?product_cols=8"
                                                               class="">8 Columns<span class="tip"
                                                                                       style="color:#ffffff;background:#0cc485;"><span
                                                                            class="tip-arrow"
                                                                            style="color:#0cc485;"></span>NEW</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-1695"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;">
                                                    <h5>Category Variation</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-2481"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/women/fashion/"
                                                               class="">Banner with Sidebar</a></li>
                                                        <li id="nav-menu-item-2484"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/women/"
                                                               class="">Banner Slider with Sidebar</a></li>
                                                        <li id="nav-menu-item-2480"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/women/women-sports/"
                                                               class="">Parallax Banner</a></li>
                                                        <li id="nav-menu-item-2482"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/men/accessories-men/"
                                                               class="">Full Width Slider</a></li>
                                                        <li id="nav-menu-item-2649"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/women/women-dress/"
                                                               class="">With Left Sidebar</a></li>
                                                        <li id="nav-menu-item-2651"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/polos/"
                                                               class="">With Right Sidebar</a></li>
                                                        <li id="nav-menu-item-2650"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product-category/t-shirts/"
                                                               class="">Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-1672"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;">
                                                    <h5>Product Variation</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-1673"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sheer-fri-yay-tie-back-top/"
                                                               class="">Simple Product</a></li>
                                                        <li id="nav-menu-item-1675"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sketched-floral-crop-tee/"
                                                               class="">Featured Product</a></li>
                                                        <li id="nav-menu-item-1676"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/strapless-lace-ruffle-dress/"
                                                               class="">Sale Product</a></li>
                                                        <li id="nav-menu-item-1677"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/rose-jeweled-strapless-dress/"
                                                               class="">Featured &amp; Sale Product</a></li>
                                                        <li id="nav-menu-item-1679"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sleeve-cropped-sweatshirt/"
                                                               class="">Variable Product</a></li>
                                                        <li id="nav-menu-item-1691"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sketched-floral-crop-tee/"
                                                               class="">Product With Sidebar</a></li>
                                                        <li id="nav-menu-item-1687"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/strappy-slip-dress/"
                                                               class="">Product Without Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-1682"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;">
                                                    <h5>Product Variation</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-1683"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
                                                            <h5>Product Tabs</h5>
                                                            <ul class="sub-menu">
                                                                <li id="nav-menu-item-1684"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sheer-fri-yay-tie-back-top/?product_tabs=default"
                                                                       class="">Horizontal Tabs</a></li>
                                                                <li id="nav-menu-item-1685"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sheer-fri-yay-tie-back-top/?product_tabs=vertical"
                                                                       class="">Vertical Tabs</a></li>
                                                                <li id="nav-menu-item-1686"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/sheer-fri-yay-tie-back-top/?product_tabs=accordion"
                                                                       class="">Accordions</a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="nav-menu-item-1680"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/floral-paisley-tiered-dress/"
                                                               class="">Product With Global Tab</a></li>
                                                        <li id="nav-menu-item-1681"
                                                            class="menu-item menu-item-type-post_type menu-item-object-product ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/product/mosaic-strapless-jumpsuit/"
                                                               class="">Product With Custom Tab</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-2448"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-block-item  "
                                                    data-cols="4" style="width: 100%;">
                                                    <div class="menu-block menu-block-after">
                                                        <div class="porto-block ">
                                                            <div class="vc_row wpb_row vc_row-fluid ads-container menu-ads-container">
                                                                <div class="vc_column_container vc_col-sm-4">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="aio-icon-component   style_1">
                                                                            <div id="Info-box-wrap-7484"
                                                                                 class="aio-icon-box left-icon"
                                                                                 style="">
                                                                                <div class="aio-icon-left">
                                                                                    <div class="ult-just-icon-wrapper ">
                                                                                        <div class="align-icon"
                                                                                             style="text-align:center;">
                                                                                            <div class="aio-icon none "
                                                                                                 style="color:#000000;font-size:32px;display:inline-block;">
                                                                                                <i class="Defaults-truck"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="aio-ibd-block">
                                                                                    <div class="aio-icon-header"><h3
                                                                                                class="aio-icon-title ult-responsive"
                                                                                                data-ultimate-target="#Info-box-wrap-7484 .aio-icon-title"
                                                                                                data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:15px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                                                style="font-family:'Open Sans';font-weight:600;color:#333333;">
                                                                                            FREE SHIPPING &amp;
                                                                                            RETURN</h3>
                                                                                    </div> <!-- header -->
                                                                                    <div class="aio-icon-description ult-responsive"
                                                                                         data-ultimate-target="#Info-box-wrap-7484 .aio-icon-description"
                                                                                         data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                                         style="color:#333333;">Free
                                                                                        shipping on all orders over $99.
                                                                                    </div> <!-- description -->
                                                                                </div> <!-- aio-ibd-block -->
                                                                            </div> <!-- aio-icon-box -->
                                                                        </div> <!-- aio-icon-component -->
                                                                    </div>
                                                                </div>
                                                                <div class="vc_column_container vc_col-sm-4">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="aio-icon-component   style_1">
                                                                            <div id="Info-box-wrap-9231"
                                                                                 class="aio-icon-box left-icon"
                                                                                 style="">
                                                                                <div class="aio-icon-left">
                                                                                    <div class="ult-just-icon-wrapper ">
                                                                                        <div class="align-icon"
                                                                                             style="text-align:center;">
                                                                                            <div class="aio-icon none "
                                                                                                 style="color:#000000;font-size:32px;display:inline-block;">
                                                                                                <i class="Defaults-dollar"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="aio-ibd-block">
                                                                                    <div class="aio-icon-header"><h3
                                                                                                class="aio-icon-title ult-responsive"
                                                                                                data-ultimate-target="#Info-box-wrap-9231 .aio-icon-title"
                                                                                                data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:15px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                                                style="font-family:'Open Sans';font-weight:600;color:#333333;">
                                                                                            MONEY BACK GUARANTEE</h3>
                                                                                    </div>
                                                                                    <!-- header -->
                                                                                    <div class="aio-icon-description ult-responsive"
                                                                                         data-ultimate-target="#Info-box-wrap-9231 .aio-icon-description"
                                                                                         data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                                         style="color:#333333;">100%
                                                                                        money
                                                                                        back guarantee.
                                                                                    </div> <!-- description -->
                                                                                </div> <!-- aio-ibd-block -->
                                                                            </div> <!-- aio-icon-box -->
                                                                        </div> <!-- aio-icon-component -->
                                                                    </div>
                                                                </div>
                                                                <div class="vc_column_container vc_col-sm-4">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="aio-icon-component   style_1">
                                                                            <div id="Info-box-wrap-2723"
                                                                                 class="aio-icon-box left-icon"
                                                                                 style="">
                                                                                <div class="aio-icon-left">
                                                                                    <div class="ult-just-icon-wrapper ">
                                                                                        <div class="align-icon"
                                                                                             style="text-align:center;">
                                                                                            <div class="aio-icon none "
                                                                                                 style="color:#000000;font-size:32px;display:inline-block;">
                                                                                                <i class="Defaults-comments"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="aio-ibd-block">
                                                                                    <div class="aio-icon-header"><h3
                                                                                                class="aio-icon-title ult-responsive"
                                                                                                data-ultimate-target="#Info-box-wrap-2723 .aio-icon-title"
                                                                                                data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:15px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                                                style="font-family:'Open Sans';font-weight:600;color:#333333;">
                                                                                            ONLINE SUPPORT 24/7</h3>
                                                                                    </div>
                                                                                    <!-- header -->
                                                                                    <div class="aio-icon-description ult-responsive"
                                                                                         data-ultimate-target="#Info-box-wrap-2723 .aio-icon-description"
                                                                                         data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                                         style="color:#333333;">Lorem
                                                                                        ipsum
                                                                                        dolor sit amet.
                                                                                    </div> <!-- description -->
                                                                                </div> <!-- aio-ibd-block -->
                                                                            </div> <!-- aio-icon-box -->
                                                                        </div> <!-- aio-icon-component -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-2685"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub wide  col-4">
                                    <h5>Shortcodes</h5>

                                    <div class="popup" style="display: block;">
                                        <div class="inner" style="">
                                            <ul class="sub-menu" style="width: 1110px;">
                                                <li id="nav-menu-item-2604"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;"><h5>Shortcodes 1</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-2683"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/accordions/"
                                                               class="">Accordions</a></li>
                                                        <li id="nav-menu-item-2713"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/toggles/"
                                                               class="">Toggles</a></li>
                                                        <li id="nav-menu-item-2711"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/tabs/"
                                                               class="">Tabs</a></li>
                                                        <li id="nav-menu-item-2695"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/icons/"
                                                               class="">Icons</a></li>
                                                        <li id="nav-menu-item-2694"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/icon-boxes/"
                                                               class="">Icon Boxes</a></li>
                                                        <li id="nav-menu-item-2690"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/carousels/"
                                                               class="">Carousels</a></li>
                                                        <li id="nav-menu-item-2703"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/modals/"
                                                               class="">Modals</a></li>
                                                        <li id="nav-menu-item-2699"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/lightboxes/"
                                                               class="">Lightboxes</a></li>
                                                        <li id="nav-menu-item-3585"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/preview-image/"
                                                               class="">Preview Image</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-2605"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;"><h5>Shortcodes 2</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-2688"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/buttons/"
                                                               class="">Buttons</a></li>
                                                        <li id="nav-menu-item-2698"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/labels/"
                                                               class="">Labels</a></li>
                                                        <li id="nav-menu-item-2700"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/lists/"
                                                               class="">Lists</a></li>
                                                        <li id="nav-menu-item-2712"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/testimonials/"
                                                               class="">Testimonials</a></li>
                                                        <li id="nav-menu-item-2687"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/blockquotes/"
                                                               class="">Blockquotes</a></li>
                                                        <li id="nav-menu-item-2715"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/word-rotator/"
                                                               class="">Word Rotator</a></li>
                                                        <li id="nav-menu-item-2689"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/call-to-action/"
                                                               class="">Call to Action</a></li>
                                                        <li id="nav-menu-item-3515"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/pricing-tables/"
                                                               class="">Pricing Tables</a></li>
                                                        <li id="nav-menu-item-3588"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/isotope/"
                                                               class="">Isotope</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-2606"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"
                                                    data-cols="1" style="width: 25%;"><h5>Shortcodes 3</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-2707"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/progress-bars/"
                                                               class="">Progress Bars</a></li>
                                                        <li id="nav-menu-item-2691"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/counters/"
                                                               class="">Counters</a></li>
                                                        <li id="nav-menu-item-2708"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/sections-parallax/"
                                                               class="">Sections &amp; Parallax</a></li>
                                                        <li id="nav-menu-item-2714"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/tooltips-popovers/"
                                                               class="">Tooltips &amp; Popovers</a></li>
                                                        <li id="nav-menu-item-2693"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/headings/"
                                                               class="">Headings</a></li>
                                                        <li id="nav-menu-item-2692"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/dividers/"
                                                               class="">Dividers</a></li>
                                                        <li id="nav-menu-item-2685"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/animations/"
                                                               class="">Animations</a></li>
                                                        <li id="nav-menu-item-2702"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/medias/"
                                                               class="">Medias</a></li>
                                                        <li id="nav-menu-item-2701"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/maps/"
                                                               class="">Maps</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-2607"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1" style="width: 25%;"><h5>Shortcodes 4</h5>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-2684"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/alerts/"
                                                               class="">Alerts</a></li>
                                                        <li id="nav-menu-item-3307"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/history/"
                                                               class="">History</a></li>
                                                        <li id="nav-menu-item-3306"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/masonry/"
                                                               class="">Masonry</a></li>
                                                        <li id="nav-menu-item-2705"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/posts/"
                                                               class="">Posts</a></li>
                                                        <li id="nav-menu-item-3303"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/products/"
                                                               class="">Products<span class="tip"
                                                                                      style="background:#eb2771;"><span
                                                                            class="tip-arrow"
                                                                            style="color:#eb2771;"></span>HOT</span></a>
                                                        </li>
                                                        <li id="nav-menu-item-3304"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/portfolios/"
                                                               class="">Portfolios</a></li>
                                                        <li id="nav-menu-item-3305"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/members/"
                                                               class="">Members</a></li>
                                                        <li id="nav-menu-item-3592"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/faqs/"
                                                               class="">FAQs</a></li>
                                                        <li id="nav-menu-item-3593"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/shortcodes/sticky-elements/"
                                                               class="">Sticky Elements</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-277"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub narrow ">
                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/blog/" class="">Blog</a>
                                    <div class="popup" style="display: block;">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-1537"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=full"
                                                            class="">Blog Full Width</a></li>
                                                <li id="nav-menu-item-1538"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=large"
                                                            class="">Blog Large Image</a></li>
                                                <li id="nav-menu-item-2328"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=large-alt"
                                                            class="">Blog Large Image Alt.</a></li>
                                                <li id="nav-menu-item-1539"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=medium"
                                                            class="">Blog Medium Image</a></li>
                                                <li id="nav-menu-item-1541"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=timeline"
                                                            class="">Blog Timeline</a></li>
                                                <li id="nav-menu-item-1540"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1">
                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=grid"
                                                       class="">Blog Grid</a>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-2329"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=grid&amp;columns=2"
                                                               class="">2 Columns</a></li>
                                                        <li id="nav-menu-item-2330"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=grid&amp;columns=3"
                                                               class="">3 Columns</a></li>
                                                        <li id="nav-menu-item-2331"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/blog/?layout=grid&amp;columns=4"
                                                               class="">4 Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-1543"
                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children  sub"
                                                    data-cols="1">
                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/sed-elementum-massa-volutpat/"
                                                       class="">Single Post</a>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-1841"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/aliquam-erat-volutpat-2/"
                                                               class="">Image Post</a></li>
                                                        <li id="nav-menu-item-1545"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/sed-elementum-massa-volutpat/"
                                                               class="">Gallery Post</a></li>
                                                        <li id="nav-menu-item-1548"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/aliquam-erat-volutpat/"
                                                               class="">Video Post</a></li>
                                                        <li id="nav-menu-item-1546"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/deleniti-nam-porro-quisquam-ab-temporibus-2/"
                                                               class="">Audio Post</a></li>
                                                        <li id="nav-menu-item-1837"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/etiam-laoreet-sem-eget-eros-rhoncus-3/"
                                                               class="">Link Post</a></li>
                                                        <li id="nav-menu-item-1838"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/etiam-laoreet-sem-eget-eros-rhoncus-4/"
                                                               class="">Aside Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-36"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has-sub narrow ">
                                    <a href="#" class="">Pages</a>
                                    <div class="popup" style="display: block;">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-187"
                                                    class="menu-item menu-item-type-post_type_archive menu-item-object-member menu-item-has-children  sub"
                                                    data-cols="1">
                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/member/"
                                                       class="">Team</a>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-189"
                                                            class="menu-item menu-item-type-post_type_archive menu-item-object-member ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/member/"
                                                               class="">Team</a></li>
                                                        <li id="nav-menu-item-185"
                                                            class="menu-item menu-item-type-post_type menu-item-object-member ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/member/john-doe/"
                                                               class="">Member</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-193"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/services/"
                                                            class="">Services</a></li>
                                                <li id="nav-menu-item-222"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/careers/"
                                                            class="">Careers</a></li>
                                                <li id="nav-menu-item-237"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/our-office/"
                                                            class="">Our Office</a></li>
                                                <li id="nav-menu-item-188"
                                                    class="menu-item menu-item-type-post_type_archive menu-item-object-faq "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/faq/"
                                                            class="">FAQ</a></li>
                                                <li id="nav-menu-item-1661"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/my-account/"
                                                            class="">My Account</a></li>
                                                <li id="nav-menu-item-1655"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/"
                                                            class="">Wishlist</a></li>
                                                <li id="nav-menu-item-1659"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/cart/"
                                                            class="">Cart</a></li>
                                                <li id="nav-menu-item-1660"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/checkout/"
                                                            class="">Checkout</a></li>
                                                <li id="nav-menu-item-2259"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/sitemap/"
                                                            class="">Sitemap</a></li>
                                                <li id="nav-menu-item-1550"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/?p=120131230123"
                                                            class="">404 Error</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-186"
                                    class="menu-item menu-item-type-post_type_archive menu-item-object-portfolio menu-item-has-children  has-sub narrow ">
                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/"
                                       class="">Portfolio</a>
                                    <div class="popup" style="display: block;">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-106"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub"
                                                    data-cols="1">
                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid"
                                                       class="">Portfolio Grid</a>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-103"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid&amp;columns=2"
                                                               class="">2 Columns</a></li>
                                                        <li id="nav-menu-item-102"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid&amp;columns=3"
                                                               class="">3 Columns</a></li>
                                                        <li id="nav-menu-item-101"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid&amp;columns=4"
                                                               class="">4 Columns</a></li>
                                                        <li id="nav-menu-item-104"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid&amp;columns=5"
                                                               class="">5 Columns</a></li>
                                                        <li id="nav-menu-item-105"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid&amp;columns=6"
                                                               class="">6 Columns</a></li>
                                                        <li id="nav-menu-item-113"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=grid&amp;view=full"
                                                               class="">Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li id="nav-menu-item-100"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=timeline"
                                                            class="">Portfolio Timeline</a></li>
                                                <li id="nav-menu-item-109"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=medium"
                                                            class="">Portfolio Medium Image</a></li>
                                                <li id="nav-menu-item-108"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=large"
                                                            class="">Portfolio Large Image</a></li>
                                                <li id="nav-menu-item-107"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/?layout=full"
                                                            class="">Portfolio Full Image</a></li>
                                                <li id="nav-menu-item-119"
                                                    class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-has-children  sub"
                                                    data-cols="1">
                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/ecommerce/"
                                                       class="">Single Project</a>
                                                    <ul class="sub-menu">
                                                        <li id="nav-menu-item-120"
                                                            class="menu-item menu-item-type-post_type menu-item-object-portfolio ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/ecommerce/"
                                                               class="">Medium Image</a></li>
                                                        <li id="nav-menu-item-121"
                                                            class="menu-item menu-item-type-post_type menu-item-object-portfolio ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/wordpress/"
                                                               class="">Large Image</a></li>
                                                        <li id="nav-menu-item-122"
                                                            class="menu-item menu-item-type-post_type menu-item-object-portfolio ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/the-code/"
                                                               class="">Full Width</a></li>
                                                        <li id="nav-menu-item-123"
                                                            class="menu-item menu-item-type-post_type menu-item-object-portfolio ">
                                                            <a href="http://newsmartwave.net/wordpress/porto/demo8/portfolio/seo/"
                                                               class="">Video Project</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-177"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub narrow ">
                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/about-us/" class="">About
                                        Us</a>
                                    <div class="popup" style="display: block;">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-172"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/about-us/"
                                                            class="">About Us</a></li>
                                                <li id="nav-menu-item-176"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/about-us-basic/"
                                                            class="">About Us – Basic</a></li>
                                                <li id="nav-menu-item-184"
                                                    class="menu-item menu-item-type-post_type menu-item-object-member "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/member/john-doe/"
                                                            class="">About Me</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="nav-menu-item-45"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub narrow ">
                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/contact-us/" class="">Contact
                                        Us</a>
                                    <div class="popup" style="display: block;">
                                        <div class="inner" style="">
                                            <ul class="sub-menu">
                                                <li id="nav-menu-item-49"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/contact-us/contact-us-basic/"
                                                            class="">Contact Us – Basic</a></li>
                                                <li id="nav-menu-item-55"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page "
                                                    data-cols="1"><a
                                                            href="http://newsmartwave.net/wordpress/porto/demo8/contact-us/contact-us-advanced/"
                                                            class="">Contact Us – Advanced</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-custom-content inline-menu-item">
                                    <div class="menu-custom-block">
                                        <a href="#">Special Offer!</a><a target="_blank"
                                                                         href="http://themeforest.net/item/porto-responsive-ecommerce-wordpress-theme/9207399?ref=SW-THEMES">Buy
                                            this Theme!<em class="tip hot">HOT<i class="tip-arrow"></i></em></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-right">
                            <div class="searchform-popup">
                                <a class="search-toggle"><i class="fa fa-search"></i></a>

                                <form role="search" method="get" id="yith-ajaxsearchform"
                                      action="http://newsmartwave.net/wordpress/porto/demo8/"
                                      class="yith-ajaxsearchform-container yith-ajaxsearchform-container77626844 searchform searchform-cats">
                                    <fieldset>
                                    <span class="text"><input name="s" id="yith-s" class="yith-s" type="text" value=""
                                                              placeholder="Search…" autocomplete="off"></span>
                                        <select name="product_cat" id="product_cat" class="cat">
                                            <option value="0">All Categories</option>
                                            <option class="level-0" value="women">Women</option>
                                            <option class="level-1" value="fashion">&nbsp;&nbsp;&nbsp;Fashion</option>
                                            <option class="level-1" value="women-sports">&nbsp;&nbsp;&nbsp;Sports
                                            </option>
                                            <option class="level-1" value="women-dress">&nbsp;&nbsp;&nbsp;Dress</option>
                                            <option class="level-0" value="furnitures">Furnitures</option>
                                            <option class="level-0" value="men">Men</option>
                                            <option class="level-1" value="accessories-men">&nbsp;&nbsp;&nbsp;Accessories
                                            </option>
                                            <option class="level-1" value="pants-denim">&nbsp;&nbsp;&nbsp;Pants &amp;
                                                Denim
                                            </option>
                                            <option class="level-0" value="bags">Bags</option>
                                            <option class="level-0" value="accessories">Accessories</option>
                                            <option class="level-0" value="t-shirts">T-shirts</option>
                                            <option class="level-0" value="sun-glasses">Sun Glasses</option>
                                            <option class="level-0" value="sports">Sports</option>
                                            <option class="level-0" value="dress">Dress</option>
                                            <option class="level-0" value="fashion-2">Fashion</option>
                                            <option class="level-0" value="polos">Polos</option>
                                            <option class="level-0" value="shoes">Shoes</option>
                                        </select>
                                    <span class="button-wrap"><button class="btn" id="yith-searchsubmit" title="Search"
                                                                      type="submit"><i class="fa fa-search"></i>
                                        </button></span>
                                        <input type="hidden" name="post_type" value="product">
                                    </fieldset>
                                    <div class="autocomplete-suggestions"
                                         style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                </form>


                                <div id="mini-cart" class="dropdown mini-cart  effect-fadein-up">
                                    <div class="dropdown-toggle cart-head " data-toggle="dropdown" data-delay="50"
                                         data-close-others="false">
                                        <i class="minicart-icon "></i>
                                        <span class="cart-items">0</span>
                                    </div>
                                    <div class="dropdown-menu cart-popup widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">

                                            <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner"
                                                 style="position: relative;">
                                                <ul class="cart_list product_list_widget scrollbar-inner  scroll-content"
                                                    style="margin-bottom: 0px; margin-right: 0px;">


                                                    <li class="empty">No products in the cart.</li>


                                                </ul>
                                                <div class="scroll-element scroll-x">
                                                    <div class="scroll-element_outer">
                                                        <div class="scroll-element_size"></div>
                                                        <div class="scroll-element_track"></div>
                                                        <div class="scroll-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="scroll-element scroll-y">
                                                    <div class="scroll-element_outer">
                                                        <div class="scroll-element_size"></div>
                                                        <div class="scroll-element_track"></div>
                                                        <div class="scroll-bar"></div>
                                                    </div>
                                                </div>
                                            </div><!-- end product list -->


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>

        </div><!-- end header wrapper -->


        <div id="main" class="column1 boxed no-breadcrumbs"><!-- main -->


            <div class="container">
                <div class="row">

                    <!-- main content -->
                    <div class="main-content col-md-12">


                        <div id="content" role="main">

                            <article class="post-1770 page type-page status-publish hentry">

                                <span class="entry-title" style="display: none;">Home Shop 8</span><span class="vcard"
                                                                                                         style="display: none;"><span
                                            class="fn"><a
                                                href="http://newsmartwave.net/wordpress/porto/demo8/author/admin/"
                                                title="Posts by Joe Doe" rel="author">Joe
                                            Doe</a></span></span><span class="updated" style="display:none">2015-12-11T13:09:11+00:00</span>
                                <div class="page-content">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1425551598098">
                                        <div class="vc_column_container vc_col-sm-12">

                                            <div class="wpb_wrapper">
                                                <div class="avt_masterslider_el ">
                                                    <!-- MasterSlider -->

                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <img src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/slider_bg_23.jpg"
                                                                 alt="" title="">
                                                        </div>
                                                        <div class="item">
                                                            <img src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/slider_bg_22.jpg"
                                                                 alt="" title="">
                                                        </div>
                                                        <div class="item">
                                                            <img src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/slider_bg_22.jpg"
                                                                 alt="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MasterSlider -->


                                            </div>
                                            <div class="vc_empty_space" style="height: 35px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="vc_column_container vc_col-sm-4">
                                                    <div class="wpb_wrapper"><h4
                                                                style="font-size: 17px;color: #818385;text-align: center;font-family:Open Sans;font-weight:600;font-style:normal"
                                                                class="vc_custom_heading">SHOP LIVING ROOM</h4>
                                                        <div class="ult-new-ib ult-ib-effect-style5 ult-ib-resp "
                                                             data-min-width="768" data-max-width="900"
                                                             style="background:#000000;" data-opacity="1"
                                                             data-hover-opacity="0.8"><img class="ult-new-ib-img"
                                                                                           style="opacity:1;"
                                                                                           alt="LIVING ROOM STARTING AT $999"
                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/banner_09.jpg">
                                                            <div id="interactive-banner-wrap-6745"
                                                                 class="ult-new-ib-desc"
                                                                 style="background:#a1a2a3;"><h2
                                                                        class="ult-new-ib-title ult-responsive"
                                                                        data-ultimate-target="#interactive-banner-wrap-6745 .ult-new-ib-title"
                                                                        data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                        style="font-weight:normal;color:#ffffff;">LIVING
                                                                    ROOM STARTING AT $999</h2>
                                                                <div class="ult-new-ib-content ult-responsive"
                                                                     data-ultimate-target="#interactive-banner-wrap-6745 .ult-new-ib-content"
                                                                     data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                     style="font-weight:normal;color:#ffffff;"><p></p>
                                                                </div>
                                                            </div>
                                                            <a class="ult-new-ib-link"></a></div>
                                                    </div>
                                                </div>
                                                <div class="vc_column_container vc_col-sm-4">
                                                    <div class="wpb_wrapper"><h4
                                                                style="font-size: 17px;color: #818385;text-align: center;font-family:Open Sans;font-weight:600;font-style:normal"
                                                                class="vc_custom_heading">SHOP DINING ROOM</h4>
                                                        <div class="ult-new-ib ult-ib-effect-style5 ult-ib-resp "
                                                             data-min-width="768" data-max-width="900"
                                                             style="background:#000000;" data-opacity="1"
                                                             data-hover-opacity="0.8"><img class="ult-new-ib-img"
                                                                                           style="opacity: 1;"
                                                                                           alt="DINING ROOM STARTING AT $999"
                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/banner_10.jpg">
                                                            <div id="interactive-banner-wrap-5385"
                                                                 class="ult-new-ib-desc"
                                                                 style="background:#a1a2a3;"><h2
                                                                        class="ult-new-ib-title ult-responsive"
                                                                        data-ultimate-target="#interactive-banner-wrap-5385 .ult-new-ib-title"
                                                                        data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                        style="font-weight:normal;color:#ffffff;">DINING
                                                                    ROOM STARTING AT $999</h2>
                                                                <div class="ult-new-ib-content ult-responsive"
                                                                     data-ultimate-target="#interactive-banner-wrap-5385 .ult-new-ib-content"
                                                                     data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                     style="font-weight:normal;color:#ffffff;"><p></p>
                                                                </div>
                                                            </div>
                                                            <a class="ult-new-ib-link"></a></div>
                                                    </div>
                                                </div>
                                                <div class="vc_column_container vc_col-sm-4">
                                                    <div class="wpb_wrapper"><h4
                                                                style="font-size: 17px;color: #818385;text-align: center;font-family:Open Sans;font-weight:600;font-style:normal"
                                                                class="vc_custom_heading">SHOP BEDROOM</h4>
                                                        <div class="ult-new-ib ult-ib-effect-style5 ult-ib-resp "
                                                             data-min-width="768" data-max-width="900"
                                                             style="background:#000000;" data-opacity="1"
                                                             data-hover-opacity="0.8"><img class="ult-new-ib-img"
                                                                                           style="opacity:1;"
                                                                                           alt="BEDROOM STARTING AT $999"
                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/banner_11.jpg">
                                                            <div id="interactive-banner-wrap-2183"
                                                                 class="ult-new-ib-desc"
                                                                 style="background:#a1a2a3;"><h2
                                                                        class="ult-new-ib-title ult-responsive"
                                                                        data-ultimate-target="#interactive-banner-wrap-2183 .ult-new-ib-title"
                                                                        data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:14px;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                        style="font-weight:normal;color:#ffffff;">
                                                                    BEDROOM
                                                                    STARTING AT $999</h2>
                                                                <div class="ult-new-ib-content ult-responsive"
                                                                     data-ultimate-target="#interactive-banner-wrap-2183 .ult-new-ib-content"
                                                                     data-responsive-json-new="{&quot;font-size&quot;:&quot;&quot;,&quot;line-height&quot;:&quot;&quot;}"
                                                                     style="font-weight:normal;color:#ffffff;"><p></p>
                                                                </div>
                                                            </div>
                                                            <a class="ult-new-ib-link"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 style="font-size: 17px;color: #818385;text-align: left;font-family:Open Sans;font-weight:600;font-style:normal"
                                                class="vc_custom_heading">Top Selling Items</h4>
                                            <div class="porto-products wpb_content_element appear-animation appear-animation-visible fadeInUp"
                                                 data-appear-animation="fadeInUp">
                                                <div class="woocommerce columns-4">

                                                    <div class="yit-wcan-container">
                                                        <ul class="products  grid  pcols-lg-4 pcols-md-4 pcols-xs-2 pcols-ls-1  pwidth-lg-4 pwidth-md-4 pwidth-xs-2 pwidth-ls-1">

                                                            <li class="show-links-onimage first pcols-lg-first pcols-md-first pcols-xs-first post-2430 product type-product status-publish has-post-thumbnail product_cat-furnitures product_tag-chair product_tag-furniture product_tag-red pa_brand-envato pa_color-green pa_size-large pa_size-medium sale shipping-taxable purchasable product-type-simple product-cat-furnitures product-tag-chair product-tag-furniture product-tag-red instock">


                                                                <div class="product-image">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/red-wooden-chair/">
                                                                        <div class="labels">
                                                                            <div class="onsale">-10%</div>
                                                                            <div data-link="http://newsmartwave.net/wordpress/porto/demo8/cart/"
                                                                                 class="viewcart  viewcart-2430"
                                                                                 title="View Cart"></div>
                                                                        </div>
                                                                        <div class="inner img-effect"><img width="300"
                                                                                                           height="400"
                                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_32-300x400.jpg"
                                                                                                           class=" wp-post-image"
                                                                                                           alt="product_32"
                                                                                                           srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_32-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_32-500x666.jpg 500w"
                                                                                                           sizes="(max-width: 300px) 100vw, 300px"><img
                                                                                    width="300" height="400"
                                                                                    src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_31-300x400.jpg"
                                                                                    class="hover-image" alt="product_31"
                                                                                    srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_31-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_31-500x666.jpg 500w"
                                                                                    sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <div class="links-on-image">
                                                                        <div class="add-links-wrap">
                                                                            <div class="add-links  clearfix">
                                                                            <span rel="nofollow"
                                                                                  href="/wordpress/porto/demo8/?add-to-cart=2430"
                                                                                  data-quantity="1"
                                                                                  data-product_id="2430"
                                                                                  data-product_sku="56651322"
                                                                                  class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</span>
                                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2430">
                                                                                    <div class="yith-wcwl-add-button show"
                                                                                         style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2430" rel="nofollow" data-product-id="2430"
      data-product-type="simple" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                        <span class="ajax-loading"></span>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                         style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                         style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <div class="quickview" data-id="2430"
                                                                                     title="Quick View">Quick View
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a class="product-loop-title"
                                                                   href="http://newsmartwave.net/wordpress/porto/demo8/product/red-wooden-chair/">
                                                                    <h3>Red Wooden Chair</h3></a>
                                                                <div class="rating-wrap">
                                                                <span class="rating-before"><span
                                                                            class="rating-line"></span></span>
                                                                    <div class="rating-content">
                                                                        <div class="star-rating" title=""
                                                                             data-original-title="4"><span
                                                                                    style="width:80%"><strong
                                                                                        class="rating">4</strong> out of 5</span>
                                                                        </div>
                                                                    </div>
                                                                <span class="rating-after"><span
                                                                            class="rating-line"></span></span>
                                                                </div>
                                                                <div class="description">
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae
                                                                        est. Mauris placerat eleifend leo.</p>
                                                                </div>

                                                            <span class="price"><del><span class="amount">$20.00</span>
                                                                </del> <ins><span class="amount">$18.00</span>
                                                                </ins></span>

                                                                <div class="add-links-wrap">
                                                                    <div class="add-links  clearfix">
                                                                    <span rel="nofollow"
                                                                          href="/wordpress/porto/demo8/?add-to-cart=2430"
                                                                          data-quantity="1" data-product_id="2430"
                                                                          data-product_sku="56651322"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</span>
                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2430">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2430" rel="nofollow" data-product-id="2430"
      data-product-type="simple" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                <span class="ajax-loading"></span>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                 style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                 style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <div class="quickview" data-id="2430"
                                                                             title="Quick View">Quick View
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="show-links-onimage post-2426 product type-product status-publish has-post-thumbnail product_cat-furnitures product_tag-armchair product_tag-furniture pa_brand-microsoft pa_color-black pa_color-green pa_size-large pa_size-medium pa_size-small shipping-taxable purchasable product-type-variable product-cat-furnitures product-tag-armchair product-tag-furniture has-default-attributes has-children instock">


                                                                <div class="product-image">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/axiom-oversized-chair/">
                                                                        <div class="labels">
                                                                            <div data-link="http://newsmartwave.net/wordpress/porto/demo8/cart/"
                                                                                 class="viewcart  viewcart-2426"
                                                                                 title="View Cart"></div>
                                                                        </div>
                                                                        <div class="inner img-effect"><img width="300"
                                                                                                           height="400"
                                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_30-300x400.jpg"
                                                                                                           class=" wp-post-image"
                                                                                                           alt="product_30"
                                                                                                           srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_30-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_30-500x666.jpg 500w"
                                                                                                           sizes="(max-width: 300px) 100vw, 300px"><img
                                                                                    width="300" height="400"
                                                                                    src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_33-300x400.jpg"
                                                                                    class="hover-image" alt="product_33"
                                                                                    srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_33-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_33-500x666.jpg 500w"
                                                                                    sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <div class="links-on-image">
                                                                        <div class="add-links-wrap">
                                                                            <div class="add-links  clearfix">
                                                                            <span rel="nofollow"
                                                                                  href="http://newsmartwave.net/wordpress/porto/demo8/product/axiom-oversized-chair/"
                                                                                  data-quantity="1"
                                                                                  data-product_id="2426"
                                                                                  data-product_sku="6551231"
                                                                                  class="button product_type_variable add_to_cart_button">Select options</span>
                                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2426">
                                                                                    <div class="yith-wcwl-add-button show"
                                                                                         style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2426" rel="nofollow" data-product-id="2426"
      data-product-type="variable" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                        <span class="ajax-loading"></span>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                         style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                         style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <div class="quickview" data-id="2426"
                                                                                     title="Quick View">Quick View
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a class="product-loop-title"
                                                                   href="http://newsmartwave.net/wordpress/porto/demo8/product/axiom-oversized-chair/">
                                                                    <h3>Axiom Oversized Chair</h3></a>
                                                                <div class="rating-wrap">
                                                                <span class="rating-before"><span
                                                                            class="rating-line"></span></span>
                                                                    <div class="rating-content">
                                                                        <div class="star-rating" title=""
                                                                             data-original-title="5"><span
                                                                                    style="width:100%"><strong
                                                                                        class="rating">5</strong> out of 5</span>
                                                                        </div>
                                                                    </div>
                                                                <span class="rating-after"><span
                                                                            class="rating-line"></span></span>
                                                                </div>
                                                                <div class="description">
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae
                                                                        est. Mauris placerat eleifend leo.</p>
                                                                </div>

                                                            <span class="price"><span
                                                                        class="amount">$20.00</span></span>

                                                                <div class="add-links-wrap">
                                                                    <div class="add-links  clearfix">
                                                                    <span rel="nofollow"
                                                                          href="http://newsmartwave.net/wordpress/porto/demo8/product/axiom-oversized-chair/"
                                                                          data-quantity="1" data-product_id="2426"
                                                                          data-product_sku="6551231"
                                                                          class="button product_type_variable add_to_cart_button">Select options</span>
                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2426">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2426" rel="nofollow" data-product-id="2426"
      data-product-type="variable" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                <span class="ajax-loading"></span>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                 style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                 style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <div class="quickview" data-id="2426"
                                                                             title="Quick View">Quick View
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="show-links-onimage pcols-xs-first post-2425 product type-product status-publish has-post-thumbnail product_cat-furnitures product_tag-furniture pa_brand-apple pa_color-black pa_color-green pa_color-indigo pa_size-large pa_size-medium pa_size-small shipping-taxable purchasable product-type-simple product-cat-furnitures product-tag-furniture instock">


                                                                <div class="product-image">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/victory-oversized-chair/">
                                                                        <div class="labels">
                                                                            <div data-link="http://newsmartwave.net/wordpress/porto/demo8/cart/"
                                                                                 class="viewcart  viewcart-2425"
                                                                                 title="View Cart"></div>
                                                                        </div>
                                                                        <div class="inner img-effect"><img width="300"
                                                                                                           height="400"
                                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_31-300x400.jpg"
                                                                                                           class=" wp-post-image"
                                                                                                           alt="product_31"
                                                                                                           srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_31-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_31-500x666.jpg 500w"
                                                                                                           sizes="(max-width: 300px) 100vw, 300px"><img
                                                                                    width="300" height="400"
                                                                                    src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_32-300x400.jpg"
                                                                                    class="hover-image" alt="product_32"
                                                                                    srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_32-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_32-500x666.jpg 500w"
                                                                                    sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <div class="links-on-image">
                                                                        <div class="add-links-wrap">
                                                                            <div class="add-links  clearfix">
                                                                            <span rel="nofollow"
                                                                                  href="/wordpress/porto/demo8/?add-to-cart=2425"
                                                                                  data-quantity="1"
                                                                                  data-product_id="2425"
                                                                                  data-product_sku="15235126"
                                                                                  class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</span>
                                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2425">
                                                                                    <div class="yith-wcwl-add-button show"
                                                                                         style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2425" rel="nofollow" data-product-id="2425"
      data-product-type="simple" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                        <span class="ajax-loading"></span>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                         style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                         style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <div class="quickview" data-id="2425"
                                                                                     title="Quick View">Quick View
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a class="product-loop-title"
                                                                   href="http://newsmartwave.net/wordpress/porto/demo8/product/victory-oversized-chair/">
                                                                    <h3>Victory Oversized Chair</h3></a>
                                                                <div class="rating-wrap">
                                                                <span class="rating-before"><span
                                                                            class="rating-line"></span></span>
                                                                    <div class="rating-content">
                                                                        <div class="star-rating" title=""
                                                                             data-original-title="0"><span
                                                                                    style="width:0%"><strong
                                                                                        class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                    </div>
                                                                <span class="rating-after"><span
                                                                            class="rating-line"></span></span>
                                                                </div>
                                                                <div class="description">
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae
                                                                        est. Mauris placerat eleifend leo.</p>
                                                                </div>

                                                            <span class="price"><span
                                                                        class="amount">$20.00</span></span>

                                                                <div class="add-links-wrap">
                                                                    <div class="add-links  clearfix">
                                                                    <span rel="nofollow"
                                                                          href="/wordpress/porto/demo8/?add-to-cart=2425"
                                                                          data-quantity="1" data-product_id="2425"
                                                                          data-product_sku="15235126"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</span>
                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2425">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2425" rel="nofollow" data-product-id="2425"
      data-product-type="simple" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                <span class="ajax-loading"></span>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                 style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                 style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <div class="quickview" data-id="2425"
                                                                             title="Quick View">Quick View
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="show-links-onimage post-2429 product type-product status-publish has-post-thumbnail product_cat-furnitures product_tag-benchi product_tag-furniture pa_brand-apple pa_color-black pa_color-brown pa_color-green pa_size-medium pa_size-small featured shipping-taxable purchasable product-type-simple product-cat-furnitures product-tag-benchi product-tag-furniture instock">


                                                                <div class="product-image">
                                                                    <a href="http://newsmartwave.net/wordpress/porto/demo8/product/crestwood-ottoman/">
                                                                        <div class="labels">
                                                                            <div class="onhot">Hot</div>
                                                                            <div data-link="http://newsmartwave.net/wordpress/porto/demo8/cart/"
                                                                                 class="viewcart  viewcart-2429"
                                                                                 title="View Cart"></div>
                                                                        </div>
                                                                        <div class="inner img-effect"><img width="300"
                                                                                                           height="400"
                                                                                                           src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_33-300x400.jpg"
                                                                                                           class=" wp-post-image"
                                                                                                           alt="product_33"
                                                                                                           srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_33-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_33-500x666.jpg 500w"
                                                                                                           sizes="(max-width: 300px) 100vw, 300px"><img
                                                                                    width="300" height="400"
                                                                                    src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_30-300x400.jpg"
                                                                                    class="hover-image" alt="product_30"
                                                                                    srcset="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_30-300x400.jpg 300w, http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/02/product_30-500x666.jpg 500w"
                                                                                    sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <div class="links-on-image">
                                                                        <div class="add-links-wrap">
                                                                            <div class="add-links  clearfix">
                                                                            <span rel="nofollow"
                                                                                  href="/wordpress/porto/demo8/?add-to-cart=2429"
                                                                                  data-quantity="1"
                                                                                  data-product_id="2429"
                                                                                  data-product_sku="465213475"
                                                                                  class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</span>
                                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2429">
                                                                                    <div class="yith-wcwl-add-button show"
                                                                                         style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2429" rel="nofollow" data-product-id="2429"
      data-product-type="simple" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                        <span class="ajax-loading"></span>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                         style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                         style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                           rel="nofollow">
                                                                                            Browse Wishlist </a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <div class="quickview" data-id="2429"
                                                                                     title="Quick View">Quick View
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a class="product-loop-title"
                                                                   href="http://newsmartwave.net/wordpress/porto/demo8/product/crestwood-ottoman/">
                                                                    <h3>Crestwood Ottoman</h3></a>
                                                                <div class="rating-wrap">
                                                                <span class="rating-before"><span
                                                                            class="rating-line"></span></span>
                                                                    <div class="rating-content">
                                                                        <div class="star-rating" title=""
                                                                             data-original-title="0"><span
                                                                                    style="width:0%"><strong
                                                                                        class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                    </div>
                                                                <span class="rating-after"><span
                                                                            class="rating-line"></span></span>
                                                                </div>
                                                                <div class="description">
                                                                    <p>Pellentesque habitant morbi tristique senectus et
                                                                        netus et malesuada fames ac turpis egestas.
                                                                        Vestibulum tortor quam, feugiat vitae, ultricies
                                                                        eget, tempor sit amet, ante. Donec eu libero sit
                                                                        amet quam egestas semper. Aenean ultricies mi
                                                                        vitae
                                                                        est. Mauris placerat eleifend leo.</p>
                                                                </div>

                                                            <span class="price"><span
                                                                        class="amount">$20.00</span></span>

                                                                <div class="add-links-wrap">
                                                                    <div class="add-links  clearfix">
                                                                    <span rel="nofollow"
                                                                          href="/wordpress/porto/demo8/?add-to-cart=2429"
                                                                          data-quantity="1" data-product_id="2429"
                                                                          data-product_sku="465213475"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</span>
                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2429">
                                                                            <div class="yith-wcwl-add-button show"
                                                                                 style="display:block">


<span href="/wordpress/porto/demo8/?add_to_wishlist=2429" rel="nofollow" data-product-id="2429"
      data-product-type="simple" class="add_to_wishlist">
        Add to Wishlist</span>
                                                                                <span class="ajax-loading"></span>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                 style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                 style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="http://newsmartwave.net/wordpress/porto/demo8/wishlist/view/"
                                                                                   rel="nofollow">
                                                                                    Browse Wishlist </a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <div class="quickview" data-id="2429"
                                                                             title="Quick View">Quick View
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="ult-carousel-1177707813569f1910dc06b"
                                                 class="ult-carousel-wrapper  ult_horizontal" data-gutter="0"
                                                 data-rtl="false">
                                                <div class="ult-carousel-85184222569f1910dbfce  slick-initialized slick-slider">
                                                    <div aria-live="polite" class="slick-list draggable" tabindex="0">
                                                        <div class="slick-track"
                                                             style="opacity: 1; width: 4608px; transform: translate3d(-1152px, 0px, 0px);">
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="-6" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_08.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_08"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="-5" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_09.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_09"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="-4" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_10.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_10"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="-3" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_11.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_11"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="-2" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_07.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_07"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="-1" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_08.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_08"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide animated no-animation slick-active"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="0"
                                                                 aria-hidden="false" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_07.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_07"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide animated no-animation slick-active"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="1"
                                                                 aria-hidden="false" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_08.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_08"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide animated no-animation slick-active"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="2"
                                                                 aria-hidden="false" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_09.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_09"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide animated no-animation slick-active"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="3"
                                                                 aria-hidden="false" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_10.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_10"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide animated no-animation slick-active"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="4"
                                                                 aria-hidden="false" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_11.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_11"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide animated no-animation slick-active"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="5"
                                                                 aria-hidden="false" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_07.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_07"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="6"
                                                                 aria-hidden="true" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_08.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_08"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="7"
                                                                 aria-hidden="true" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_09.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_09"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="8"
                                                                 aria-hidden="true" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_10.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_10"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="9"
                                                                 aria-hidden="true" style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_11.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_11"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="10" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_07.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_07"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="11" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_08.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_08"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="12" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_07.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_07"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="13" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_08.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_08"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="14" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_09.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_09"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="15" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_10.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_10"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="16" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_11.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_11"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ult-item-wrap slick-slide slick-cloned"
                                                                 data-animation="animated no-animation"
                                                                 data-slick-index="17" aria-hidden="true"
                                                                 style="width: 192px;">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <div class="wpb_wrapper">

                                                                        <a href="#" target="_self">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="140" height="29"
                                                                                     src="http://newsmartwave.net/wordpress/porto/demo8/wp-content/uploads/sites/22/2015/01/brand_07.png"
                                                                                     class="vc_single_image-img attachment-full"
                                                                                     alt="brand_07"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="slick-dots" style="display: block;">
                                                        <li class="slick-active" aria-hidden="false"><i type="button"
                                                                                                        style="color:#e13b3f;"
                                                                                                        class="ultsl-record"
                                                                                                        data-role="none"></i>
                                                        </li>
                                                        <li aria-hidden="true" class=""><i type="button"
                                                                                           style="color:#e13b3f;"
                                                                                           class="ultsl-record"
                                                                                           data-role="none"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <script type="text/javascript">


                                            </script>
                                        </div>
                                    </div>
                                </div>

                            </article>


                        </div>


                    </div><!-- end main content -->


                </div>
            </div>


        </div><!-- end main -->

    </div>
@stop