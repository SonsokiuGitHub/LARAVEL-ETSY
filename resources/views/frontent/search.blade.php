@extends('layouts.master')

@section('link-css')
<link rel="stylesheet" href="./assets/styles/6-pages/style-search/search.css">
@endsection

@section('title')
    Etsy - Search
@endsection

@section('content')
<div id="box-menu-header" class="w-100 mx-auto my-0 position-relative">
    <x-MenuHeader></x-MenuHeader>
</div>

<section id="search-content">
            <div class="search-content-wrapper">
                <div class="search-content__control">
                    <div class="content__control-left">
                        <button id="btnAllFilter" class="btn__all-filter btn-etsy-main--small btn-hover-effect-main text-caption-13 fw-normal">
                            <span class="all-filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5,7.6h5.7c0.4,1.2,1.5,2,2.8,2s2.4-0.8,2.8-2H19c0.6,0,1-0.4,1-1s-0.4-1-1-1h-2.7c-0.4-1.2-1.5-2-2.8-2s-2.4,0.8-2.8,2H5 c-0.6,0-1,0.4-1,1S4.4,7.6,5,7.6z M13.5,5.6c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S12.9,5.6,13.5,5.6z"></path><path d="M19,11.1h-7.7c-0.4-1.2-1.5-2-2.8-2s-2.4,0.8-2.8,2H5c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h0.7c0.4,1.2,1.5,2,2.8,2 s2.4-0.8,2.8-2H19c0.6,0,1-0.4,1-1C20,11.5,19.6,11.1,19,11.1z M8.5,13.1c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1 C9.5,12.7,9.1,13.1,8.5,13.1z"></path><path d="M19,16.6h-1.2c-0.4-1.2-1.5-2-2.8-2s-2.4,0.8-2.8,2H5c-0.6,0-1,0.4-1,1s0.4,1,1,1h7.2c0.4,1.2,1.5,2,2.8,2s2.4-0.8,2.8-2 H19c0.6,0,1-0.4,1-1S19.6,16.6,19,16.6z M15,18.6c-0.6,0-1-0.4-1-1s0.4-1,1-1s1,0.4,1,1S15.6,18.6,15,18.6z"></path></svg>
                            </span>
                            <span class="all-filter__text">
                                All Filters
                            </span>
                        </button>
                    </div>
                    <div class="content__control-right">
                        <div class="control-right-first">
                            <span>8,996 results,</span>
                            <span class="right-first--text">
                                with Ads
                                <span class="right-first--icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12,22A10,10,0,1,1,22,12,10.012,10.012,0,0,1,12,22ZM12,4a8,8,0,1,0,8,8A8.009,8.009,0,0,0,12,4Z"></path><circle cx="12" cy="16.5" r="1.5"></circle><path d="M13,14H11a3.043,3.043,0,0,1,1.7-2.379C13.5,11.055,14,10.674,14,10a2,2,0,1,0-4,0H8a4,4,0,1,1,8,0,4,4,0,0,1-2.152,3.259A2.751,2.751,0,0,0,13,14Z"></path></svg>
                                </span>
                            </span>
                        </div>
                        <div class="control-right-secondary">
                            <button class="control-right-secondary__btn btn-etsy-main--small btn-hover-effect-main rounded-circle px-0">
                                <span class="btn__icon-secondary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12,21C10.349,21,2,14.688,2,9,2,5.579,4.364,3,7.5,3A6.912,6.912,0,0,1,12,5.051,6.953,6.953,0,0,1,16.5,3C19.636,3,22,5.579,22,9,22,14.688,13.651,21,12,21ZM7.5,5C5.472,5,4,6.683,4,9c0,4.108,6.432,9.325,8,10,1.564-.657,8-5.832,8-10,0-2.317-1.472-4-3.5-4-1.979,0-3.7,2.105-3.721,2.127L11.991,8.1,11.216,7.12C11.186,7.083,9.5,5,7.5,5Z"></path></svg>
                                </span>
                            </button>
                        </div>
                        <div class="control-right-third">
                            <button id="btnSortFilter" class="control-right-third__btn btn-etsy-main--small btn-hover-effect-main rounded-circle px-0" aria-expanded="false">
                                <span class="btn__icon-third" data-sort-by-button-icon=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M16 20.414l3.707-3.707a1 1 0 00-1.414-1.414L17 16.586V6a1 1 0 00-2 0v10.586l-1.293-1.293a1 1 0 10-1.414 1.414L16 20.414zM9 18V7.414l1.293 1.293a1 1 0 001.414-1.414L8 3.586 4.293 7.293a1 1 0 001.414 1.414L7 7.414V18a1 1 0 102 0z"></path>
                                  </svg>
                                </span>
                            </button>
                            <div class="box-sort-filter">
                                <div class="box-sort-filter__title">
                                    <span class="box-sort-filter__title--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                            <path d="M16 20.414l3.707-3.707a1 1 0 00-1.414-1.414L17 16.586V6a1 1 0 00-2 0v10.586l-1.293-1.293a1 1 0 10-1.414 1.414L16 20.414zM9 18V7.414l1.293 1.293a1 1 0 001.414-1.414L8 3.586 4.293 7.293a1 1 0 001.414 1.414L7 7.414V18a1 1 0 102 0z"></path>
                                        </svg>
                                    </span>
                                    <span class="box-sort-filter__title--name">
                                        Sort by
                                        <strong>Relevancy</strong>
                                    </span>
                                </div>
                                <ul class="box-sort-filter__list">
                                    <li><a href="">Relevancy</a></li>
                                    <li><a href="">Top Customer Reviews</a></li>
                                    <li><a href="">Highest Price</a></li>
                                    <li><a href="">Lowest Price</a></li>
                                    <li><a href="">Most Recent</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="search-content__main">
                    <div>
                        <div class="row gx-2 gx-md-3">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2990155664_k692y.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2990097132_50rw3.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_340x270.2656700309_c61k6.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_340x270.2973012589_o982.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_340x270.3102666394_eg4n.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_680x540.2919037940_nbvl.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_680x540.2934224120_piyz.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_680x540.2997934369_171h.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_680x540.3105728466_kqx3.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2990155664_k692y.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.2990097132_50rw3.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-our-picks/il_340x270.2973012589_o982.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="box-product">
                                    <a href="" class="product-link">
                                        <div class="product-link__img">
                                            <img src="../../assets/images/images_Home/box-more-products/il_340x270.2656700309_c61k6.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-link__describe">
                                            <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                            <div class="product-link__describe--rate">
                                                <span class="product-rate">
                                                    <span class="box-rate-star">
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                        <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                        </span>
                                                    </span>
                                                    <span class="box-rate-stat text-caption-12 text-gray">
                                                        (9,199)
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="product-link__describe--price">
                                                <p class="product-price__main pe-1">
                                                    <span class="currency-symbol">US$</span>
                                                    <span class="currency-value">11.62</span>
                                                </p>
                                                <p class="product-price__sub px-1">
                                                   <span class="product-price__sub-left">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                   </span>
                                                   <span class="product-price__sub-right">
                                                       (30% off)
                                                   </span>
                                                </p>
                                            </div>
                                            <div class="product-link__describe--shop">
                                                <p class="text-caption-12">Local taxes included (where applicable)</p>
                                            </div>
                                            <span class="product-link__describe--discount">
                                                <span class="box-discount discount-best-seller">
                                                    <div class="box-discount__logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            aria-hidden="true" focusable="false">
                                                            <path
                                                                d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                            </path>
                                                            <path
                                                                d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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

                <div class="search-content__pagination box-pagination">
                    <h2>There's so much more for you to discover</h2>
                    <ul class="pagination-list hide-on-pc">
                        <li>
                            <a href="">
                                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">  <path d="M6.7 11.3L6 12l.7.7 4 4c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L9.8 13H17c.6 0 1-.4 1-1s-.4-1-1-1H9.8l2.3-2.3c.2-.2.3-.4.3-.7 0-.6-.4-1-1-1-.3 0-.5.1-.7.3l-4 4z"></path></svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">  <path d="M17.3 12.7l.7-.7-.7-.7-4-4c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l2.3 2.3H7c-.6 0-1 .4-1 1s.4 1 1 1h7.2l-2.3 2.3c-.2.2-.3.4-.3.7 0 .6.4 1 1 1 .3 0 .5-.1.7-.3l4-4z"></path></svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pagination-list hide-on-mobie-tablet">
                        <li>
                            <a href="#">
                                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">  <path d="M6.7 11.3L6 12l.7.7 4 4c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L9.8 13H17c.6 0 1-.4 1-1s-.4-1-1-1H9.8l2.3-2.3c.2-.2.3-.4.3-.7 0-.6-.4-1-1-1-.3 0-.5.1-.7.3l-4 4z"></path></svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="active">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">  <path d="M17.3 12.7l.7-.7-.7-.7-4-4c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l2.3 2.3H7c-.6 0-1 .4-1 1s.4 1 1 1h7.2l-2.3 2.3c-.2.2-.3.4-.3.7 0 .6.4 1 1 1 .3 0 .5-.1.7-.3l4-4z"></path></svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-recently-viewed">
                    <div class="wrapper-box-products">
                        <div class="box-products__heading">
                            <h2>Recently viewed</h2>
                            <h3>
                                <a class="" href="">See more</a>
                            </h3>
                        </div>
                        <div class="recently-viewed__main">
                            <div class="row g-2 g-md-3">
                                <div class="col-4 col-lg-2">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="../../assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
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
                                                <img src="../../assets/images/images_Home/box-our-picks/il_340x270.3102666394_eg4n.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
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
                                                <img src="../../assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false">
                                                                <path
                                                                    d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path
                                                                    d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                                                <img src="../../assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
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
                                                <img src="../../assets/images/images_Home/box-our-picks/il_340x270.2973012589_o982.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
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
                                                <img src="../../assets/images/images_Home/box-more-products/il_340x270.2656700309_c61k6.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-recently-viewed">
                    <div class="wrapper-box-products">
                        <div class="box-products__heading">
                            <h2>Similar to recently viewed</h2>
                        </div>
                        <div class="recently-viewed__main">
                            <div class="row g-2 g-md-3">
                                <div class="col-4 col-lg-2">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="../../assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                                <div class="product-link__describe--rate">
                                                    <span class="product-rate">
                                                        <span class="box-rate-star">
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <span class="box-rate-stat text-caption-12 text-gray">
                                                            (9,199)
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
                                                       <span class="product-price__sub-left">
                                                            <span class="currency-symbol">US$</span>
                                                            <span class="currency-value">11.62</span>
                                                       </span>
                                                       <span class="product-price__sub-right">
                                                           (30% off)
                                                       </span>
                                                    </p>
                                                </div>
                                                <div class="product-link__describe--shop">
                                                    <p class="text-caption-12">Local taxes included (where applicable)</p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false">
                                                                <path
                                                                    d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path
                                                                    d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                                                <img src="../../assets/images/images_Home/box-our-picks/il_340x270.3102666394_eg4n.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                                <div class="product-link__describe--rate">
                                                    <span class="product-rate">
                                                        <span class="box-rate-star">
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <span class="box-rate-stat text-caption-12 text-gray">
                                                            (9,199)
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
                                                       <span class="product-price__sub-left">
                                                            <span class="currency-symbol">US$</span>
                                                            <span class="currency-value">11.62</span>
                                                       </span>
                                                       <span class="product-price__sub-right">
                                                           (30% off)
                                                       </span>
                                                    </p>
                                                </div>
                                                <div class="product-link__describe--shop">
                                                    <p class="text-caption-12">Local taxes included (where applicable)</p>
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
                                                <img src="../../assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                                <div class="product-link__describe--rate">
                                                    <span class="product-rate">
                                                        <span class="box-rate-star">
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <span class="box-rate-stat text-caption-12 text-gray">
                                                            (9,199)
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
                                                       <span class="product-price__sub-left">
                                                            <span class="currency-symbol">US$</span>
                                                            <span class="currency-value">11.62</span>
                                                       </span>
                                                       <span class="product-price__sub-right">
                                                           (30% off)
                                                       </span>
                                                    </p>
                                                </div>
                                                <div class="product-link__describe--shop">
                                                    <p class="text-caption-12">Local taxes included (where applicable)</p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false">
                                                                <path
                                                                    d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path
                                                                    d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                                                <img src="../../assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                                <div class="product-link__describe--rate">
                                                    <span class="product-rate">
                                                        <span class="box-rate-star">
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <span class="box-rate-stat text-caption-12 text-gray">
                                                            (9,199)
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
                                                       <span class="product-price__sub-left">
                                                            <span class="currency-symbol">US$</span>
                                                            <span class="currency-value">11.62</span>
                                                       </span>
                                                       <span class="product-price__sub-right">
                                                           (30% off)
                                                       </span>
                                                    </p>
                                                </div>
                                                <div class="product-link__describe--shop">
                                                    <p class="text-caption-12">Local taxes included (where applicable)</p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false">
                                                                <path
                                                                    d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path
                                                                    d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                                <div class="col-4 col-lg-2">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="../../assets/images/images_Home/box-our-picks/il_340x270.2973012589_o982.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                                <div class="product-link__describe--rate">
                                                    <span class="product-rate">
                                                        <span class="box-rate-star">
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <span class="box-rate-stat text-caption-12 text-gray">
                                                            (9,199)
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
                                                       <span class="product-price__sub-left">
                                                            <span class="currency-symbol">US$</span>
                                                            <span class="currency-value">11.62</span>
                                                       </span>
                                                       <span class="product-price__sub-right">
                                                           (30% off)
                                                       </span>
                                                    </p>
                                                </div>
                                                <div class="product-link__describe--shop">
                                                    <p class="text-caption-12">Local taxes included (where applicable)</p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false">
                                                                <path
                                                                    d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path
                                                                    d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                                <div class="col-4 col-lg-2">
                                    <div class="box-product">
                                        <a href="" class="product-link">
                                            <div class="product-link__img">
                                                <img src="../../assets/images/images_Home/box-more-products/il_340x270.2656700309_c61k6.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-link__describe">
                                                <h3 class="product-link__describe--name">Baby Sock Corsage, Mommy to be Baby Shower Corsage, Grandma Corsage, Were Expecting, Baby Shower Decorations</h3>
                                                <div class="product-link__describe--rate">
                                                    <span class="product-rate">
                                                        <span class="box-rate-star">
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                            <span class="etsy-icon-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false"><path d="M19.985,10.36a0.5,0.5,0,0,0-.477-0.352H14.157L12.488,4.366a0.5,0.5,0,0,0-.962,0l-1.67,5.642H4.5a0.5,0.5,0,0,0-.279.911L8.53,13.991l-1.5,5.328a0.5,0.5,0,0,0,.741.6l4.231-2.935,4.215,2.935a0.5,0.5,0,0,0,.743-0.6l-1.484-5.328,4.306-3.074A0.5,0.5,0,0,0,19.985,10.36Z"></path></svg>
                                                            </span>
                                                        </span>
                                                        <span class="box-rate-stat text-caption-12 text-gray">
                                                            (9,199)
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product-link__describe--price">
                                                    <p class="product-price__main pe-1">
                                                        <span class="currency-symbol">US$</span>
                                                        <span class="currency-value">11.62</span>
                                                    </p>
                                                    <p class="product-price__sub px-1">
                                                       <span class="product-price__sub-left">
                                                            <span class="currency-symbol">US$</span>
                                                            <span class="currency-value">11.62</span>
                                                       </span>
                                                       <span class="product-price__sub-right">
                                                           (30% off)
                                                       </span>
                                                    </p>
                                                </div>
                                                <div class="product-link__describe--shop">
                                                    <p class="text-caption-12">Local taxes included (where applicable)</p>
                                                </div>
                                                <span class="product-link__describe--discount">
                                                    <span class="box-discount discount-best-seller">
                                                        <div class="box-discount__logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false">
                                                                <path
                                                                    d="M19 13.8c.6-1.1 1-2.4 1-3.8 0-4.4-3.6-8-8-8s-8 3.6-8 8c0 1.4.4 2.7 1 3.8L2 19l4.2.7L8.9 23l2.9-5h.4l2.9 5 2.7-3.3L22 19l-3-5.2zM8.6 19.5l-.9-1.1-.5-.6-.7-.1-1.4-.2 1.1-1.9c.9 1 2.1 1.7 3.4 2.1l-1 1.8zM12 16c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6zm5.5 1.7l-.7.1-.5.6-.9 1.1-1.1-1.8c1.3-.4 2.5-1.1 3.4-2.1l1.1 1.9-1.3.2z">
                                                                </path>
                                                                <path
                                                                    d="M16.5 9.2c.2-.1.2-.4.2-.6s-.3-.3-.5-.3h-2.8l-.9-2.7c-.1-.4-.8-.4-1 0l-.9 2.7H7.8c-.2 0-.4.1-.5.3-.1.2 0 .4.2.6l2.3 1.7-.9 2.7c-.1.2 0 .4.2.6.2.1.4.1.6 0l2.3-1.7 2.3 1.7c.1.1.2.1.3.1s.2 0 .3-.1c.2-.1.2-.4.2-.6l-.9-2.7 2.3-1.7zm-4.2 2.3c-.1-.1-.2-.1-.3-.1s-.2 0-.3.1l-1.4 1 .5-1.6c.1-.2 0-.4-.2-.6l-1.4-1H11c.2 0 .4-.1.5-.3l.5-1.6.5 1.6c.1.2.3.3.5.3h1.7l-1.4 1c-.2.1-.2.4-.2.6l.5 1.6-1.3-1z">
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
                </div>
            </div>
        </section>

        <div id="modal-container">
            <div class="modal-fade"></div>
            <div class="box-filter-products">
                    <div class="box-search-filter">
                        <div class="box-search-filter__heading">
                            <h1>Filters</h1>
                        </div>
                        <div class="box-search-filter__main">
                            <div class="filter__category">
                                <h3>Filter by category</h3>
                                <button class="filter__category-btn btn-etsy-main--small btn-hover-effect-main justify-content-between">
                                    All Categories
                                    <span class="filter__category-btn--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                            <path d="M8 21a1 1 0 01-.664-1.747L15.5 12 7.336 4.747a1 1 0 011.328-1.494L18.5 12l-9.836 8.747A.994.994 0 018 21z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="filter__special-offers box-filter-describe">
                                <h3>
                                    Special offers
                                </h3>
                                <div class="box-filter-list">
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">FREE shipping</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">On sale</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__max-processing-day box-filter-describe">
                                <h3>
                                    Ready to ship in
                                </h3>
                                <div class="box-filter-list">
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">1 business day</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">1-3 business day</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__price box-filter-describe">
                                <h3>
                                    Price ($)
                                </h3>
                                <div class="box-filter-list">
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-price" id="">
                                        <label for="">Any price</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-price" id="">
                                        <label for="">Under US$25</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-price" id="">
                                        <label for="">US$25 to US$50</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-price" id="">
                                        <label for="">US$50 to US$100</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-price" id="">
                                        <label for="">Over US$100</label>
                                    </div>
                                    <div class="custom-filter">
                                        <div class="box-filter__item">
                                            <input type="radio" value="" name="filter-price" id="">
                                            <label for="">Custom</label>
                                        </div>
                                        <div class="custom-filter__main">
                                            <div class="custom-filter__main-item">
                                                <!-- <label for=""></label> -->
                                                <input class="input__element--small effect-hover-input" type="text" placeholder="Low">
                                            </div>
                                            <div class="custom-filter__main-text">
                                                to
                                            </div>
                                            <div class="custom-filter__main-item">
                                                <!-- <label for=""></label> -->
                                                <input class="input__element--small effect-hover-input" type="text" placeholder="High">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__shop-location box-filter-describe">
                                <h3>
                                    Shop location
                                </h3>
                                <div class="box-filter-list">
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-location" id="">
                                        <label for="">AnyWhere</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-location" id="">
                                        <label for="">Vietnam</label>
                                    </div>
                                    <div class="custom-filter">
                                        <div class="box-filter__item">
                                            <input type="radio" value="" name="filter-location" id="">
                                            <label for="">Custom</label>
                                        </div>
                                        <div class="custom-filter__main">
                                            <!-- <div class="custom-filter__main-item"> -->
                                                <!-- <label for=""></label> -->
                                            <!-- </div> -->
                                            <input class="input__element--small effect-hover-input" type="text" placeholder="Enter Location">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__type box-filter-describe">
                                <h3>
                                    Item type
                                </h3>
                                <div class="box-filter-list">
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-type" id="">
                                        <label for="">All item</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-type" id="">
                                        <label for="">Hand made</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-type" id="">
                                        <label for="">US$25 to US$50</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="radio" value="" name="filter-type" id="">
                                        <label for="">Vintage</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__ordering-options box-filter-describe">
                                <h3>
                                    Ordering options
                                </h3>
                                <div class="box-filter-list">
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">Accepts Etsy gift cards</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">Can be gift-wrapped</label>
                                    </div>
                                    <div class="box-filter__item">
                                        <input type="checkbox" id="">
                                        <label for="">Customizable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__ship-to box-filter-describe">
                                <h3>Ship to</h3>
                                <div class="box-filter__item">
                                    <div class="box-select">
                                        <label for=""></label>
                                        <div class="box-select-main">
                                            <select name="ship_to" class="select__element effect-hover-select" id="ship_to_select" aria-label="Choose country...">
                                                <option value="ZZ">
                                            Choose country...
                                        </option>
                                                <optgroup label="————————">
                                            <option value="AU" data-context="region" data-path="Australia">
                                            Australia
                                        </option><option value="CA" data-context="region" data-path="Canada">
                                            Canada
                                        </option><option value="FR" data-context="region" data-path="France">
                                            France
                                        </option><option value="DE" data-context="region" data-path="Germany">
                                            Germany
                                        </option><option value="GR" data-context="region" data-path="Greece">
                                            Greece
                                        </option><option value="IE" data-context="region" data-path="Ireland">
                                            Ireland
                                        </option><option value="IT" data-context="region" data-path="Italy">
                                            Italy
                                        </option><option value="JP" data-context="region" data-path="Japan">
                                            Japan
                                        </option><option value="NZ" data-context="region" data-path="New Zealand">
                                            New Zealand
                                        </option><option value="PL" data-context="region" data-path="Poland">
                                            Poland
                                        </option><option value="PT" data-context="region" data-path="Portugal">
                                            Portugal
                                        </option><option value="RU" data-context="region" data-path="Russia">
                                            Russia
                                        </option><option value="ES" data-context="region" data-path="Spain">
                                            Spain
                                        </option><option value="NL" data-context="region" data-path="The Netherlands">
                                            The Netherlands
                                        </option><option value="GB" data-context="region" data-path="United Kingdom">
                                            United Kingdom
                                        </option><option value="US" data-context="region" data-path="United States">
                                            United States
                                        </option>
                                        </optgroup><optgroup label="————————">
                                            <option value="AF" data-context="region" data-path="Afghanistan">
                                            Afghanistan
                                        </option><option value="AL" data-context="region" data-path="Albania">
                                            Albania
                                        </option><option value="DZ" data-context="region" data-path="Algeria">
                                            Algeria
                                        </option><option value="AS" data-context="region" data-path="American Samoa">
                                            American Samoa
                                        </option><option value="AD" data-context="region" data-path="Andorra">
                                            Andorra
                                        </option><option value="AO" data-context="region" data-path="Angola">
                                            Angola
                                        </option><option value="AI" data-context="region" data-path="Anguilla">
                                            Anguilla
                                        </option><option value="AG" data-context="region" data-path="Antigua and Barbuda">
                                            Antigua and Barbuda
                                        </option><option value="AR" data-context="region" data-path="Argentina">
                                            Argentina
                                        </option><option value="AM" data-context="region" data-path="Armenia">
                                            Armenia
                                        </option><option value="AW" data-context="region" data-path="Aruba">
                                            Aruba
                                        </option><option value="AU" data-context="region" data-path="Australia">
                                            Australia
                                        </option><option value="AT" data-context="region" data-path="Austria">
                                            Austria
                                        </option><option value="AZ" data-context="region" data-path="Azerbaijan">
                                            Azerbaijan
                                        </option><option value="BS" data-context="region" data-path="Bahamas">
                                            Bahamas
                                        </option><option value="BH" data-context="region" data-path="Bahrain">
                                            Bahrain
                                        </option><option value="BD" data-context="region" data-path="Bangladesh">
                                            Bangladesh
                                        </option><option value="BB" data-context="region" data-path="Barbados">
                                            Barbados
                                        </option><option value="BY" data-context="region" data-path="Belarus">
                                            Belarus
                                        </option><option value="BE" data-context="region" data-path="Belgium">
                                            Belgium
                                        </option><option value="BZ" data-context="region" data-path="Belize">
                                            Belize
                                        </option><option value="BJ" data-context="region" data-path="Benin">
                                            Benin
                                        </option><option value="BM" data-context="region" data-path="Bermuda">
                                            Bermuda
                                        </option><option value="BT" data-context="region" data-path="Bhutan">
                                            Bhutan
                                        </option><option value="BO" data-context="region" data-path="Bolivia">
                                            Bolivia
                                        </option><option value="BA" data-context="region" data-path="Bosnia and Herzegovina">
                                            Bosnia and Herzegovina
                                        </option><option value="BW" data-context="region" data-path="Botswana">
                                            Botswana
                                        </option><option value="BV" data-context="region" data-path="Bouvet Island">
                                            Bouvet Island
                                        </option><option value="BR" data-context="region" data-path="Brazil">
                                            Brazil
                                        </option><option value="IO" data-context="region" data-path="British Indian Ocean Territory">
                                            British Indian Ocean Territory
                                        </option><option value="VG" data-context="region" data-path="British Virgin Islands">
                                            British Virgin Islands
                                        </option><option value="BN" data-context="region" data-path="Brunei">
                                            Brunei
                                        </option><option value="BG" data-context="region" data-path="Bulgaria">
                                            Bulgaria
                                        </option><option value="BF" data-context="region" data-path="Burkina Faso">
                                            Burkina Faso
                                        </option><option value="BI" data-context="region" data-path="Burundi">
                                            Burundi
                                        </option><option value="KH" data-context="region" data-path="Cambodia">
                                            Cambodia
                                        </option><option value="CM" data-context="region" data-path="Cameroon">
                                            Cameroon
                                        </option><option value="CA" data-context="region" data-path="Canada">
                                            Canada
                                        </option><option value="CV" data-context="region" data-path="Cape Verde">
                                            Cape Verde
                                        </option><option value="KY" data-context="region" data-path="Cayman Islands">
                                            Cayman Islands
                                        </option><option value="CF" data-context="region" data-path="Central African Republic">
                                            Central African Republic
                                        </option><option value="TD" data-context="region" data-path="Chad">
                                            Chad
                                        </option><option value="CL" data-context="region" data-path="Chile">
                                            Chile
                                        </option><option value="CN" data-context="region" data-path="China">
                                            China
                                        </option><option value="CX" data-context="region" data-path="Christmas Island">
                                            Christmas Island
                                        </option><option value="CC" data-context="region" data-path="Cocos (Keeling) Islands">
                                            Cocos (Keeling) Islands
                                        </option><option value="CO" data-context="region" data-path="Colombia">
                                            Colombia
                                        </option><option value="KM" data-context="region" data-path="Comoros">
                                            Comoros
                                        </option><option value="CG" data-context="region" data-path="Congo, Republic of">
                                            Congo, Republic of
                                        </option><option value="CK" data-context="region" data-path="Cook Islands">
                                            Cook Islands
                                        </option><option value="CR" data-context="region" data-path="Costa Rica">
                                            Costa Rica
                                        </option><option value="HR" data-context="region" data-path="Croatia">
                                            Croatia
                                        </option><option value="CW" data-context="region" data-path="Curaçao">
                                            Curaçao
                                        </option><option value="CY" data-context="region" data-path="Cyprus">
                                            Cyprus
                                        </option><option value="CZ" data-context="region" data-path="Czech Republic">
                                            Czech Republic
                                        </option><option value="DK" data-context="region" data-path="Denmark">
                                            Denmark
                                        </option><option value="DJ" data-context="region" data-path="Djibouti">
                                            Djibouti
                                        </option><option value="DM" data-context="region" data-path="Dominica">
                                            Dominica
                                        </option><option value="DO" data-context="region" data-path="Dominican Republic">
                                            Dominican Republic
                                        </option><option value="EC" data-context="region" data-path="Ecuador">
                                            Ecuador
                                        </option><option value="EG" data-context="region" data-path="Egypt">
                                            Egypt
                                        </option><option value="SV" data-context="region" data-path="El Salvador">
                                            El Salvador
                                        </option><option value="GQ" data-context="region" data-path="Equatorial Guinea">
                                            Equatorial Guinea
                                        </option><option value="ER" data-context="region" data-path="Eritrea">
                                            Eritrea
                                        </option><option value="EE" data-context="region" data-path="Estonia">
                                            Estonia
                                        </option><option value="ET" data-context="region" data-path="Ethiopia">
                                            Ethiopia
                                        </option><option value="FK" data-context="region" data-path="Falkland Islands (Malvinas)">
                                            Falkland Islands (Malvinas)
                                        </option><option value="FO" data-context="region" data-path="Faroe Islands">
                                            Faroe Islands
                                        </option><option value="FJ" data-context="region" data-path="Fiji">
                                            Fiji
                                        </option><option value="FI" data-context="region" data-path="Finland">
                                            Finland
                                        </option><option value="FR" data-context="region" data-path="France">
                                            France
                                        </option><option value="GF" data-context="region" data-path="French Guiana">
                                            French Guiana
                                        </option><option value="PF" data-context="region" data-path="French Polynesia">
                                            French Polynesia
                                        </option><option value="TF" data-context="region" data-path="French Southern Territories">
                                            French Southern Territories
                                        </option><option value="GA" data-context="region" data-path="Gabon">
                                            Gabon
                                        </option><option value="GM" data-context="region" data-path="Gambia">
                                            Gambia
                                        </option><option value="GE" data-context="region" data-path="Georgia">
                                            Georgia
                                        </option><option value="DE" data-context="region" data-path="Germany">
                                            Germany
                                        </option><option value="GH" data-context="region" data-path="Ghana">
                                            Ghana
                                        </option><option value="GI" data-context="region" data-path="Gibraltar">
                                            Gibraltar
                                        </option><option value="GR" data-context="region" data-path="Greece">
                                            Greece
                                        </option><option value="GL" data-context="region" data-path="Greenland">
                                            Greenland
                                        </option><option value="GD" data-context="region" data-path="Grenada">
                                            Grenada
                                        </option><option value="GP" data-context="region" data-path="Guadeloupe">
                                            Guadeloupe
                                        </option><option value="GU" data-context="region" data-path="Guam">
                                            Guam
                                        </option><option value="GT" data-context="region" data-path="Guatemala">
                                            Guatemala
                                        </option><option value="GN" data-context="region" data-path="Guinea">
                                            Guinea
                                        </option><option value="GW" data-context="region" data-path="Guinea-Bissau">
                                            Guinea-Bissau
                                        </option><option value="GY" data-context="region" data-path="Guyana">
                                            Guyana
                                        </option><option value="HT" data-context="region" data-path="Haiti">
                                            Haiti
                                        </option><option value="HM" data-context="region" data-path="Heard Island and McDonald Islands">
                                            Heard Island and McDonald Islands
                                        </option><option value="VA" data-context="region" data-path="Holy See (Vatican City State)">
                                            Holy See (Vatican City State)
                                        </option><option value="HN" data-context="region" data-path="Honduras">
                                            Honduras
                                        </option><option value="HK" data-context="region" data-path="Hong Kong">
                                            Hong Kong
                                        </option><option value="HU" data-context="region" data-path="Hungary">
                                            Hungary
                                        </option><option value="IS" data-context="region" data-path="Iceland">
                                            Iceland
                                        </option><option value="IN" data-context="region" data-path="India">
                                            India
                                        </option><option value="ID" data-context="region" data-path="Indonesia">
                                            Indonesia
                                        </option><option value="IQ" data-context="region" data-path="Iraq">
                                            Iraq
                                        </option><option value="IE" data-context="region" data-path="Ireland">
                                            Ireland
                                        </option><option value="IM" data-context="region" data-path="Isle of Man">
                                            Isle of Man
                                        </option><option value="IL" data-context="region" data-path="Israel">
                                            Israel
                                        </option><option value="IT" data-context="region" data-path="Italy">
                                            Italy
                                        </option><option value="IC" data-context="region" data-path="Ivory Coast">
                                            Ivory Coast
                                        </option><option value="JM" data-context="region" data-path="Jamaica">
                                            Jamaica
                                        </option><option value="JP" data-context="region" data-path="Japan">
                                            Japan
                                        </option><option value="JO" data-context="region" data-path="Jordan">
                                            Jordan
                                        </option><option value="KZ" data-context="region" data-path="Kazakhstan">
                                            Kazakhstan
                                        </option><option value="KE" data-context="region" data-path="Kenya">
                                            Kenya
                                        </option><option value="KI" data-context="region" data-path="Kiribati">
                                            Kiribati
                                        </option><option value="KV" data-context="region" data-path="Kosovo">
                                            Kosovo
                                        </option><option value="KW" data-context="region" data-path="Kuwait">
                                            Kuwait
                                        </option><option value="KG" data-context="region" data-path="Kyrgyzstan">
                                            Kyrgyzstan
                                        </option><option value="LA" data-context="region" data-path="Laos">
                                            Laos
                                        </option><option value="LV" data-context="region" data-path="Latvia">
                                            Latvia
                                        </option><option value="LB" data-context="region" data-path="Lebanon">
                                            Lebanon
                                        </option><option value="LS" data-context="region" data-path="Lesotho">
                                            Lesotho
                                        </option><option value="LR" data-context="region" data-path="Liberia">
                                            Liberia
                                        </option><option value="LY" data-context="region" data-path="Libya">
                                            Libya
                                        </option><option value="LI" data-context="region" data-path="Liechtenstein">
                                            Liechtenstein
                                        </option><option value="LT" data-context="region" data-path="Lithuania">
                                            Lithuania
                                        </option><option value="LU" data-context="region" data-path="Luxembourg">
                                            Luxembourg
                                        </option><option value="MO" data-context="region" data-path="Macao">
                                            Macao
                                        </option><option value="MK" data-context="region" data-path="Macedonia">
                                            Macedonia
                                        </option><option value="MG" data-context="region" data-path="Madagascar">
                                            Madagascar
                                        </option><option value="MW" data-context="region" data-path="Malawi">
                                            Malawi
                                        </option><option value="MY" data-context="region" data-path="Malaysia">
                                            Malaysia
                                        </option><option value="MV" data-context="region" data-path="Maldives">
                                            Maldives
                                        </option><option value="ML" data-context="region" data-path="Mali">
                                            Mali
                                        </option><option value="MT" data-context="region" data-path="Malta">
                                            Malta
                                        </option><option value="MH" data-context="region" data-path="Marshall Islands">
                                            Marshall Islands
                                        </option><option value="MQ" data-context="region" data-path="Martinique">
                                            Martinique
                                        </option><option value="MR" data-context="region" data-path="Mauritania">
                                            Mauritania
                                        </option><option value="MU" data-context="region" data-path="Mauritius">
                                            Mauritius
                                        </option><option value="YT" data-context="region" data-path="Mayotte">
                                            Mayotte
                                        </option><option value="MX" data-context="region" data-path="Mexico">
                                            Mexico
                                        </option><option value="FM" data-context="region" data-path="Micronesia, Federated States of">
                                            Micronesia, Federated States of
                                        </option><option value="MD" data-context="region" data-path="Moldova">
                                            Moldova
                                        </option><option value="MC" data-context="region" data-path="Monaco">
                                            Monaco
                                        </option><option value="MN" data-context="region" data-path="Mongolia">
                                            Mongolia
                                        </option><option value="ME" data-context="region" data-path="Montenegro">
                                            Montenegro
                                        </option><option value="MS" data-context="region" data-path="Montserrat">
                                            Montserrat
                                        </option><option value="MA" data-context="region" data-path="Morocco">
                                            Morocco
                                        </option><option value="MZ" data-context="region" data-path="Mozambique">
                                            Mozambique
                                        </option><option value="MM" data-context="region" data-path="Myanmar (Burma)">
                                            Myanmar (Burma)
                                        </option><option value="NA" data-context="region" data-path="Namibia">
                                            Namibia
                                        </option><option value="NR" data-context="region" data-path="Nauru">
                                            Nauru
                                        </option><option value="NP" data-context="region" data-path="Nepal">
                                            Nepal
                                        </option><option value="AN" data-context="region" data-path="Netherlands Antilles">
                                            Netherlands Antilles
                                        </option><option value="NC" data-context="region" data-path="New Caledonia">
                                            New Caledonia
                                        </option><option value="NZ" data-context="region" data-path="New Zealand">
                                            New Zealand
                                        </option><option value="NI" data-context="region" data-path="Nicaragua">
                                            Nicaragua
                                        </option><option value="NE" data-context="region" data-path="Niger">
                                            Niger
                                        </option><option value="NG" data-context="region" data-path="Nigeria">
                                            Nigeria
                                        </option><option value="NU" data-context="region" data-path="Niue">
                                            Niue
                                        </option><option value="NF" data-context="region" data-path="Norfolk Island">
                                            Norfolk Island
                                        </option><option value="MP" data-context="region" data-path="Northern Mariana Islands">
                                            Northern Mariana Islands
                                        </option><option value="NO" data-context="region" data-path="Norway">
                                            Norway
                                        </option><option value="OM" data-context="region" data-path="Oman">
                                            Oman
                                        </option><option value="PK" data-context="region" data-path="Pakistan">
                                            Pakistan
                                        </option><option value="PW" data-context="region" data-path="Palau">
                                            Palau
                                        </option><option value="PS" data-context="region" data-path="Palestinian Territory, Occupied">
                                            Palestinian Territory, Occupied
                                        </option><option value="PA" data-context="region" data-path="Panama">
                                            Panama
                                        </option><option value="PG" data-context="region" data-path="Papua New Guinea">
                                            Papua New Guinea
                                        </option><option value="PY" data-context="region" data-path="Paraguay">
                                            Paraguay
                                        </option><option value="PE" data-context="region" data-path="Peru">
                                            Peru
                                        </option><option value="PH" data-context="region" data-path="Philippines">
                                            Philippines
                                        </option><option value="PL" data-context="region" data-path="Poland">
                                            Poland
                                        </option><option value="PT" data-context="region" data-path="Portugal">
                                            Portugal
                                        </option><option value="PR" data-context="region" data-path="Puerto Rico">
                                            Puerto Rico
                                        </option><option value="QA" data-context="region" data-path="Qatar">
                                            Qatar
                                        </option><option value="RE" data-context="region" data-path="Reunion">
                                            Reunion
                                        </option><option value="RO" data-context="region" data-path="Romania">
                                            Romania
                                        </option><option value="RU" data-context="region" data-path="Russia">
                                            Russia
                                        </option><option value="RW" data-context="region" data-path="Rwanda">
                                            Rwanda
                                        </option><option value="SH" data-context="region" data-path="Saint Helena">
                                            Saint Helena
                                        </option><option value="KN" data-context="region" data-path="Saint Kitts and Nevis">
                                            Saint Kitts and Nevis
                                        </option><option value="LC" data-context="region" data-path="Saint Lucia">
                                            Saint Lucia
                                        </option><option value="MF" data-context="region" data-path="Saint Martin (French part)">
                                            Saint Martin (French part)
                                        </option><option value="PM" data-context="region" data-path="Saint Pierre and Miquelon">
                                            Saint Pierre and Miquelon
                                        </option><option value="VC" data-context="region" data-path="Saint Vincent and the Grenadines">
                                            Saint Vincent and the Grenadines
                                        </option><option value="WS" data-context="region" data-path="Samoa">
                                            Samoa
                                        </option><option value="SM" data-context="region" data-path="San Marino">
                                            San Marino
                                        </option><option value="ST" data-context="region" data-path="Sao Tome and Principe">
                                            Sao Tome and Principe
                                        </option><option value="SA" data-context="region" data-path="Saudi Arabia">
                                            Saudi Arabia
                                        </option><option value="SN" data-context="region" data-path="Senegal">
                                            Senegal
                                        </option><option value="RS" data-context="region" data-path="Serbia">
                                            Serbia
                                        </option><option value="SC" data-context="region" data-path="Seychelles">
                                            Seychelles
                                        </option><option value="SL" data-context="region" data-path="Sierra Leone">
                                            Sierra Leone
                                        </option><option value="SG" data-context="region" data-path="Singapore">
                                            Singapore
                                        </option><option value="SX" data-context="region" data-path="Sint Maarten (Dutch part)">
                                            Sint Maarten (Dutch part)
                                        </option><option value="SK" data-context="region" data-path="Slovakia">
                                            Slovakia
                                        </option><option value="SI" data-context="region" data-path="Slovenia">
                                            Slovenia
                                        </option><option value="SB" data-context="region" data-path="Solomon Islands">
                                            Solomon Islands
                                        </option><option value="SO" data-context="region" data-path="Somalia">
                                            Somalia
                                        </option><option value="ZA" data-context="region" data-path="South Africa">
                                            South Africa
                                        </option><option value="GS" data-context="region" data-path="South Georgia and the South Sandwich Islands">
                                            South Georgia and the South Sandwich Islands
                                        </option><option value="KR" data-context="region" data-path="South Korea">
                                            South Korea
                                        </option><option value="SS" data-context="region" data-path="South Sudan">
                                            South Sudan
                                        </option><option value="ES" data-context="region" data-path="Spain">
                                            Spain
                                        </option><option value="LK" data-context="region" data-path="Sri Lanka">
                                            Sri Lanka
                                        </option><option value="SD" data-context="region" data-path="Sudan">
                                            Sudan
                                        </option><option value="SR" data-context="region" data-path="Suriname">
                                            Suriname
                                        </option><option value="SJ" data-context="region" data-path="Svalbard and Jan Mayen">
                                            Svalbard and Jan Mayen
                                        </option><option value="SZ" data-context="region" data-path="Swaziland">
                                            Swaziland
                                        </option><option value="SE" data-context="region" data-path="Sweden">
                                            Sweden
                                        </option><option value="CH" data-context="region" data-path="Switzerland">
                                            Switzerland
                                        </option><option value="TW" data-context="region" data-path="Taiwan">
                                            Taiwan
                                        </option><option value="TJ" data-context="region" data-path="Tajikistan">
                                            Tajikistan
                                        </option><option value="TZ" data-context="region" data-path="Tanzania">
                                            Tanzania
                                        </option><option value="TH" data-context="region" data-path="Thailand">
                                            Thailand
                                        </option><option value="NL" data-context="region" data-path="The Netherlands">
                                            The Netherlands
                                        </option><option value="TL" data-context="region" data-path="Timor-Leste">
                                            Timor-Leste
                                        </option><option value="TG" data-context="region" data-path="Togo">
                                            Togo
                                        </option><option value="TK" data-context="region" data-path="Tokelau">
                                            Tokelau
                                        </option><option value="TO" data-context="region" data-path="Tonga">
                                            Tonga
                                        </option><option value="TT" data-context="region" data-path="Trinidad">
                                            Trinidad
                                        </option><option value="TN" data-context="region" data-path="Tunisia">
                                            Tunisia
                                        </option><option value="TR" data-context="region" data-path="Turkey">
                                            Turkey
                                        </option><option value="TM" data-context="region" data-path="Turkmenistan">
                                            Turkmenistan
                                        </option><option value="TC" data-context="region" data-path="Turks and Caicos Islands">
                                            Turks and Caicos Islands
                                        </option><option value="TV" data-context="region" data-path="Tuvalu">
                                            Tuvalu
                                        </option><option value="UG" data-context="region" data-path="Uganda">
                                            Uganda
                                        </option><option value="UA" data-context="region" data-path="Ukraine">
                                            Ukraine
                                        </option><option value="AE" data-context="region" data-path="United Arab Emirates">
                                            United Arab Emirates
                                        </option><option value="GB" data-context="region" data-path="United Kingdom">
                                            United Kingdom
                                        </option><option value="US" data-context="region" data-path="United States">
                                            United States
                                        </option><option value="UM" data-context="region" data-path="United States Minor Outlying Islands">
                                            United States Minor Outlying Islands
                                        </option><option value="UY" data-context="region" data-path="Uruguay">
                                            Uruguay
                                        </option><option value="VI" data-context="region" data-path="U.S. Virgin Islands">
                                            U.S. Virgin Islands
                                        </option><option value="UZ" data-context="region" data-path="Uzbekistan">
                                            Uzbekistan
                                        </option><option value="VU" data-context="region" data-path="Vanuatu">
                                            Vanuatu
                                        </option><option value="VE" data-context="region" data-path="Venezuela">
                                            Venezuela
                                        </option><option value="VN" selected="selected" data-context="region" data-path="Vietnam">
                                            Vietnam
                                        </option><option value="WF" data-context="region" data-path="Wallis and Futuna">
                                            Wallis and Futuna
                                        </option><option value="EH" data-context="region" data-path="Western Sahara">
                                            Western Sahara
                                        </option><option value="YE" data-context="region" data-path="Yemen">
                                            Yemen
                                        </option><option value="CD" data-context="region" data-path="Zaire (Democratic Republic of Congo)">
                                            Zaire (Democratic Republic of Congo)
                                        </option><option value="ZM" data-context="region" data-path="Zambia">
                                            Zambia
                                        </option><option value="ZW" data-context="region" data-path="Zimbabwe">
                                            Zimbabwe
                                        </option>
                                        </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-search-filter__btn-bottom">
                        <button class="btn-bottom--cancel btn-etsy-main btn-hover-effect-main">Cancel</button>
                        <button class="btn-bottom--apply btn-etsy-main btn-hover-effect-main bg-btn-main">Apply</button>
                    </div>
            </div>
            <button id="btnCloseBoxFilter" class="btn-close_box-search-filter">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z"></path>
                    </svg>
                </span>
            </button>
        </div>

@endsection