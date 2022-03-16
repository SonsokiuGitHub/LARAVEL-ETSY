@extends('layouts.layout_master')

@section('link-css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title')
    Etsy - Home
@endsection

@section('content')
<div id="box-menu-header" class="w-100 mx-auto my-0 position-relative">
    <x-MenuHeader></x-MenuHeader>
</div>

<x-BannerHome></x-BannerHome>

<section id="box-products-popular" class="mt-4">
    <div class="wrapper-products-popular">
        <div class="box-suggested-searches">
            <div class="box-suggested-searches__heading">
                <h2>Suggested searches</h2>
                <p>Based on your recent activity</p>
            </div>
            <div class="box-suggested-searches__items">
                <ul class="box-suggested-searches__items-list">
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.906435834_q7qm1.jpg" alt=""></div>
                            <p>baby girl sock corsage</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.2989860493_qq3e2.jpg" alt=""></div>
                            <p>sock baby shower corsage</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.2755952278_gi7d3.jpg" alt=""></div>
                            <p>silk hair tie</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.3037428375_f5nd4.jpg" alt=""></div>
                            <p>silk scrunchy</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.2760702908_crbe5.jpg" alt=""></div>
                            <p>satin scrunchie</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.2963174736_82hq6.jpg" alt=""></div>
                            <p>baby sock corsage</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="suggested-searches__wrapper-img"><img src="./assets/images/images_Home/box-suggested-search/il_75x75.1293877369_sand7.jpg" alt=""></div>
                            <p>shower corsage</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="box-recently-viewed" class="wrapper-box-products">
            <div class="box-products__heading">
                <h2 class="me-2">Recently viewed</h2>
            </div>
            <div class="box-products__main">
                <div class="row g-2 g-md-3">
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.3037428375_f5nd.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                        <p class="product-price__sub">
                                            <span class="product-price__sub-left">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </span>
                                            <span class="product-price__sub-right">
                                                (30% off)
                                            </span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.2963174736_82hq.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                        <p class="product-price__sub">
                                            <span class="product-price__sub-left">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </span>
                                            <span class="product-price__sub-right">
                                                (30% off)
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.3195137173_2pmo.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                        <p class="product-price__sub">
                                            <span class="product-price__sub-left">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </span>
                                            <span class="product-price__sub-right">
                                                (30% off)
                                            </span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-free-shipping">
                                            <span>Free Shipping</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.2139763054_aqvu.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                        <p class="product-price__sub">
                                            <span class="product-price__sub-left">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </span>
                                            <span class="product-price__sub-right">
                                                (30% off)
                                            </span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.3187760441_7znp.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                        <p class="product-price__sub">
                                            <span class="product-price__sub-left">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </span>
                                            <span class="product-price__sub-right">
                                                (30% off)
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.2240981530_hzpn.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                        <p class="product-price__sub">
                                            <span class="product-price__sub-left">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </span>
                                            <span class="product-price__sub-right">
                                                (30% off)
                                            </span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                        <span class="box-discount discount-free-shipping">
                                            <span>Free Shipping</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="box-more-products" class="wrapper-box-products">
            <div class="box-products__heading">
                <h2 class="me-2"><a href="">More from MinknHoneyCreations</a></h2>
                <h3><a href="">Visit shop</a></h3>
            </div>
            <div class="box-products__main">
                <div class="row g-2 g-md-3">
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">8.71</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-more-products/il_680x540.2990155664_k692y.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-more-products/il_680x540.2990097132_50rw3.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.22</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.62</span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-more-products/il_340x270.2656700309_c61k6.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">9.79</span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="box-our-picks" class="wrapper-box-products">
            <div class="box-products__heading">
                <h2 class="me-2"><a href="">Our picks for you</a></h2>
                <h3><a class="text-decoration-none" href="">See more</a></h3>
            </div>
            <div class="box-products__main">
                <div class="row g-2 g-md-3">
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-our-picks/il_340x270.2973012589_o982.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">4.80</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-our-picks/il_340x270.3102666394_eg4n.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">8.50</span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-our-picks/il_680x540.2919037940_nbvl.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">12.99</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-our-picks/il_680x540.2934224120_piyz.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">11.22</span>
                                        </p>
                                    </div>
                                    <span class="product-link__describe--discount">
                                        <span class="box-discount discount-best-seller">
                                            <div class="box-discount__logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                    </path>
                                                    <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="box-discount__name">Bestseller</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-our-picks/il_680x540.2997934369_171h.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">5.99</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="box-product">
                            <a href="" class="product-link">
                                <div class="product-link__img">
                                    <img src="./assets/images/images_Home/box-our-picks/il_680x540.3105728466_kqx3.jpg" alt="">
                                </div>
                                <div class="product-link__describe">
                                    <div class="product-link__describe--price">
                                        <p class="product-price__main pe-1">
                                            <span class="currency-symbol">US$</span>
                                            <span class="currency-value">16.00</span>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="box-tab-products">
    <div class="tab-products-wrapper">
        <div class="tab-products">
            <h2 class="tab-products__heading">Discover unique hand-picked items</h2>
            <div class="tab-products__title-wrapper">
                <div class="tab-products__title">
                    <button class="tab-products__title--btn active">
                        <p>Outdoor entertaining</p>
                    </button>
                    <button class="tab-products__title--btn me-0 me-sm-3">
                        <p>Bath & beauty gifts</p>
                    </button>
                    <button class="tab-products__title--btn d-none d-sm-flex">
                        <p>Wedding planning ideas</p>
                    </button>
                    <button class="tab-products__title--btn me-0 me-lg-3 d-none d-sm-flex">
                        <p>Sustainability</p>
                    </button>
                    <button class="tab-products__title--btn d-none d-lg-flex">
                        <p>DIY updates</p>
                    </button>
                    <button class="tab-products__title--btn d-none d-lg-flex">
                        <p>Home decor ideas</p>
                    </button>
                </div>
            </div>
            <div class="tab-products__main row">
                <div class="tab-products__main-left col-12 col-md-6">
                    <div class="row flex-wrap-reverse">
                        <div class="col-12 col-md-8">
                            <div class="box-product">
                                <a href="" class="product-link">
                                    <div class="product-link__img">
                                        <img src="./assets/images/images_Home/tab-products__main/il_680x540.1766167314_qxmr.jpg" alt="">
                                    </div>
                                    <div class="product-link__describe">
                                        <div class="product-link__describe--price">
                                            <p class="product-price__main pe-1">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.22</span>
                                            </p>
                                        </div>
                                        <span class="product-link__describe--discount">
                                            <span class="box-discount discount-best-seller">
                                                <div class="box-discount__logo">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                        </path>
                                                        <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <span class="box-discount__name">Bestseller</span>
                                            </span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row gx-3 gx-lg-4">
                                <div class="col-6 col-md-12">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="./assets/images/images_Home/tab-products__main/il_680x540.3143622296_4v77.jpg" alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span class="box-discount__name">Bestseller</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="./assets/images/images_Home/tab-products__main/il_680x540.671161797_oqpl.jpg" alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span class="box-discount__name">Bestseller</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-products__main-right col-12 col-md-6">
                    <div class="row flex-wrap-reverse">
                        <div class="col-12 col-md-8">
                            <div class="box-product">
                                <a href="" class="product-link">
                                    <div class="product-link__img">
                                        <img src="./assets/images/images_Home/tab-products__main/il_680x540.1241102699_8mur.jpg" alt="">
                                    </div>
                                    <div class="product-link__describe">
                                        <div class="product-link__describe--price">
                                            <p class="product-price__main pe-1">
                                                <span class="currency-symbol">US$</span>
                                                <span class="currency-value">11.62</span>
                                            </p>
                                        </div>
                                        <span class="product-link__describe--discount">
                                            <span class="box-discount discount-best-seller">
                                                <div class="box-discount__logo">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                        </path>
                                                        <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <span class="box-discount__name">Bestseller</span>
                                            </span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row gx-3 gx-lg-4">
                                <div class="col-6 col-md-12">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="./assets/images/images_Home/tab-products__main/il_340x270.1049143929_mocx.jpg" alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span class="box-discount__name">Bestseller</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="./assets/images/images_Home/box-recently-viewed/il_680x540.3037428375_f5nd.jpg" alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span class="box-discount__name">Bestseller</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="box-our-selections">
    <div class="our-selections-wrapper">
        <div class="our-selections-content">
            <div class="our-selections__name flex-column flex-md-row">
                <h2>Shop our selections</h2>
                <span>Items hand-picked by our editors</span>
            </div>
            <div class="our-selections__main">
                <div class="row gx-3 gx-md-4">
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="" class="products-category">
                            <div class="products-category__box-image">
                                <img src="./assets/images/images_Home/box-our-selections/il_680x540.3164412349_e8ps.jpg" alt="">
                            </div>
                            <p class="products-category__title">Gifts for him</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="" class="products-category">
                            <div class="products-category__box-image">
                                <img src="./assets/images/images_Home/box-our-selections/il_680x540.2857142429_ssmn.jpg" alt="">
                            </div>
                            <p class="products-category__title">Gifts for her</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="" class="products-category">
                            <div class="products-category__box-image">
                                <img src="./assets/images/images_Home/box-our-selections/il_680x540.1519881457_919o.jpg" alt="">
                            </div>
                            <p class="products-category__title">Personalized gift ideas</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="" class="products-category">
                            <div class="products-category__box-image">
                                <img src="./assets/images/images_Home/box-our-selections/il_680x540.720969023_97jx.jpg" alt="">
                            </div>
                            <p class="products-category__title">Wedding gifts</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="" class="products-category">
                            <div class="products-category__box-image">
                                <img src="./assets/images/images_Home/box-our-selections/il_680x540.2263698256_gfol.jpg" alt="">
                            </div>
                            <p class="products-category__title">Housewarming gifts</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="" class="products-category">
                            <div class="products-category__box-image">
                                <img src="./assets/images/images_Home/box-our-selections/il_680x540.3152032454_ed7s.jpg" alt="">
                            </div>
                            <p class="products-category__title">Anniversary gifts</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-BoxIntroduce></x-BoxIntroduce>

@endsection

@section('script')
    <script src="{{asset('')}}"></script>
@endsection