@extends('layouts.layout_master')

@section('link-css')
<link rel="stylesheet" href="./assets/styles/6-pages/style-detail-product/detail-product.css">
@endsection

@section('title')
Etsy - Detail-Product
@endsection

@section('content')
<div id="box-menu-header" class="w-100 mx-auto my-0 position-relative">
    <x-MenuHeader></x-MenuHeader>
</div>

<section id="content-page-detail">
    <div class="wrapper-page-detail">
        <div class="page-detail-main">
            <div class="list-images-product">
                <div class="list-images-product__main">
                    <div class=list-image-product-wrapper>
                        <div class="box-image-detail">
                            <div class="image-left">
                                <div class="image-left__main">
                                    <ul class="image-left__list  p-2 p-md-0">
                                        <li class="active"><img src="../../assets/images/images_Home/box-more-products/il_1588xN.2963174736_82hq.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2990097132_50rw3.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2990155664_k692y.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg" alt=""></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="image-right">
                                <button class="btn-favorite btn-etsy-main--small btn-hover-effect-main position-absolute top-0 end-0">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                            <path d="M12,21C10.349,21,2,14.688,2,9,2,5.579,4.364,3,7.5,3A6.912,6.912,0,0,1,12,5.051,6.953,6.953,0,0,1,16.5,3C19.636,3,22,5.579,22,9,22,14.688,13.651,21,12,21ZM7.5,5C5.472,5,4,6.683,4,9c0,4.108,6.432,9.325,8,10,1.564-.657,8-5.832,8-10,0-2.317-1.472-4-3.5-4-1.979,0-3.7,2.105-3.721,2.127L11.991,8.1,11.216,7.12C11.186,7.083,9.5,5,7.5,5Z"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div class="carousel-container">
                                    <ul class="carousel-slide">
                                        <li class="active"><img src="../../assets/images/images_Home/box-more-products/il_1588xN.2963174736_82hq.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2986317729_jaip.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2989721394_5bd64.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2990097132_50rw3.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.2990155664_k692y.jpg" alt=""></li>
                                        <li><img src="../../assets/images/images_Home/box-more-products/il_680x540.3037848473_tpgm5.jpg" alt=""></li>

                                    </ul>
                                    <button class="btn-previous btn-etsy-main btn-hover-effect-main rounded-circle">
                                        <span class="btn-previous__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                <path d="M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn-next btn-etsy-main btn-hover-effect-main rounded-circle">
                                        <span class="btn-next__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                <path d="M8,21a1,1,0,0,1-.664-1.747L15.5,12,7.336,4.747A1,1,0,0,1,8.664,3.253L18.5,12,8.664,20.747A0.994,0.994,0,0,1,8,21Z"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-cart">
                <div class="cart-listing">
                    <div class="cart-listing__first">
                        <p class="cart-listing__first-title">
                            <a href="">
                                <span>WeddingByEli</span>
                            </a>
                        </p>
                        <div class="box-stat-and-rating">
                            <span class="box-stat">38,899 sales</span>
                            <span class="" style="color:#e1e3df;margin-left:6px;margin-right:6px;">|</span>
                            <span class="box-rating">
                                <a class="box-rating-link" href="" style="vertical-align: top;">
                                    <span class="box-rating-icon" data-rating="0"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                            <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="box-rating-icon" data-rating="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                            <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="box-rating-icon" data-rating="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                            <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="box-rating-icon" data-rating="3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                            <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="box-rating-icon" data-rating="4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                            <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="cart-listing__secondary">
                        <h1 class="">
                            Hearts Wedding Guest Book Alternative from WeddingByEli - Wooden Wedding
                            Decor - Fall Wedding - Autumn - Alternative Guest Book Drop Box
                        </h1>
                    </div>
                    <div class="cart-listing__third">
                        <div class="box-price">
                            <div class="box-price__first">
                                <div class="box-price__first-detail">
                                    <p>US$29.60+</p>
                                    <p>US$74.00+</p>
                                </div>
                                <div class="box-price__first-other ">
                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                            <path d="M9.057,20.471L2.293,13.707a1,1,0,0,1,1.414-1.414l5.236,5.236,11.3-13.18a1,1,0,1,1,1.518,1.3Z">
                                            </path>
                                        </svg>
                                    </span>
                                    <p>In stock</p>
                                </div>
                            </div>
                            <p class="box-price__second">You save US$44.40 (60%)</p>
                            <span class="box-price__third">Sale ends in 10 hours</span>
                            <div class="box-price__fourth">Local taxes included (where applicable)</div>
                        </div>
                        <div class="box-data-buy">
                            <div class="box-select">
                                <label for="">
                                    Hearts Quantity (YES/NO Heart Box)
                                </label>
                                <div class="box-select-main">
                                    <select id="" class="effect-hover-select" data-buy-box-select="0" aria-invalid="true">
                                        <option value="" selected="">
                                            Select an option
                                        </option>
                                        <option value="">
                                            30 Hearts (US$29.60 - US$51.20)
                                        </option>
                                        <option value="">
                                            30 Hearts + Box (US$47.20 - US$67.20)
                                        </option>
                                        <option value="">
                                            30 Big Hearts (US$51.20 - US$71.20)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="box-select">
                                <label for="">Guestbook Sign and Wall Mount
                                </label>
                                <div class="box-select-main">
                                    <select id="" class="effect-hover-select" data-buy-box-select="1">
                                        <option value="" selected="">
                                            Select an option
                                        </option>
                                        <option value="1220648462">
                                            No (US$29.60 - US$155.20)
                                        </option>
                                        <option value="1596336767">
                                            + Sign (US$43.20 - US$167.20)
                                        </option>
                                        <option value="1580896616">
                                            + Wall Mount (US$39.20 - US$163.20)
                                        </option>
                                        <option value="1596336771">
                                            + Sign + Wall Mount (US$51.20 - US$175.20)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="box-data-buy__personalization">
                                <label for="">
                                    Add your personalization
                                </label>
                                <p>
                                    1. Name of the couple<br>
                                    2. Wedding day<br>
                                    3. Design of the central part (see picture: A, B, C, D, E, F, G).
                                </p>
                                <textarea id="personalization-input" class="effect-hover-input" aria-labelledby="personalization-field-label" aria-describedby="personalization-empty-error" rows="1" class="" data-personalization-input="" aria-required="true" style="height: auto;" aria-invalid="true">
                                        </textarea>
                                <div class="text-max-length" id="personalization-character-count-remaining" for="personalization-input" data-buy-box-region="personalization-character-count-remaining" class="wt-text-caption wt-text-right-xs">
                                    800
                                </div>
                            </div>
                        </div>
                        <div class="box-button-data-buy">
                            <button class="btn-etsy-main btn-hover-effect-main bg-btn-main w-100">
                                Add to cart
                            </button>
                        </div>
                        <div class="box-infor-other">
                            <div class="box-infor-other__main">
                                <div class="box-icon-cart">

                                    <span class="icon-cart">

                                    </span>
                                </div>
                                <p class="text-infor-other">
                                    <strong>Other people want this.</strong> Over 20 people have this in
                                    their carts right now.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-infor">
                <div class="listing-infor-main">
                    <div class="listing-infor__first">
                        <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize">
                            <span class="text-caption-16 fw-bold">Highlights</span>
                            <span class="icon-arrow-down">
                            </span>
                        </button>
                        <div class="listing-infor__first-item-detail">
                            <ul>
                                <li>
                                    <span class="item-detail-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" aria-hidden="true" focusable="false">
                                            <path d="M10.313 10.252l1.86-3.45-1.328-1.32-3.307-3.307a.57.57 0 00-.788 0 .57.57 0 000 .75l3.098 3.57-.533.532-4.425-4.32a.577.577 0 00-.817 0 .577.577 0 000 .795l4.14 4.628-.525.532L3.825 4.83a.555.555 0 00-.825 0 .57.57 0 000 .75l3.6 4.17-.525.532L3 7.68a.578.578 0 00-.75 0 .578.578 0 000 .817l2.775 2.768L9.27 15.51a1.498 1.498 0 002.123 0l3.75-3.713.405-.405a1.5 1.5 0 00.36-1.537L13.5 3.885l-.45.15a.578.578 0 00-.382.487l.3 3.075-2.123 3.188-.532-.533z" fill="#222"></path>
                                        </svg>
                                    </span>
                                    <div class="item-detail-text">
                                        Hand made
                                    </div>
                                </li>
                                <li>
                                    <span class="item-detail-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                            <path d="M18.1 6c.7 1.7.9 3.6.4 5.6-.8 3.4-3.5 6.1-6.9 6.9-2 .5-3.9.2-5.6-.4v1.4L7.5 21h12l1.5-1.5v-12L19.5 6h-1.4z">
                                            </path>
                                            <path d="M9.5 2C5.4 2 2 5.4 2 9.5S5.4 17 9.5 17 17 13.6 17 9.5 13.6 2 9.5 2zM7.8 15c-.6-.2-1.2-.5-1.7-.9l8-8c.4.5.7 1.1.9 1.7L7.8 15zm3.4-11c.6.2 1.2.5 1.7.9l-8 8c-.4-.5-.7-1.1-.9-1.7L11.2 4zM9 3.8L3.8 9C4 6.2 6.2 4 9 3.8zm1 11.4l5.2-5.2c-.2 2.8-2.4 5-5.2 5.2z">
                                            </path>
                                        </svg>
                                    </span>
                                    <div class="item-detail-text">
                                        Materials: PlyWood, Acrylic, Lazer Engraving, Wood
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="listing-infor__second">
                        <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize">
                            <span class="text-caption-16 fw-bold">Description</span>
                            <span class="icon-arrow-down">
                            </span>
                        </button>
                        <div class="listing-infor__second-box-describe" aria-hidden="false">
                            <div class="box-describe-main">
                                <div class="box-describe-main__text" aria-hidden="true">
                                    <p data-product-details-description-text-content="" class="describe-main__text-detail">
                                        Alternative Guest Book Drop Box<br><br>
                                        We know how important this day is for you and how important it
                                        is to make everything perfect👰🏻🤵🏻. <br>
                                        How important every detail is.<br>
                                        You definitely want to keep every moment of the day, not to miss
                                        a minute. <br>
                                        Remember the emotions of your loved ones and friends. Our
                                        alternative guest book will decorate your holiday and give your
                                        loved ones an opportunity to leave their wishes on wooden
                                        hearts❤.<br>
                                        You will be able to keep these warm words for the rest of your
                                        life.<br>This beautiful book can be both on the stand and on our
                                        new wall mount to become a part of your decor.<br>
                                        These stylish guest books are made in rustic style🌿.<br>You can
                                        choose the size of the guest book according to the number of
                                        guests at your
                                        wedding.<br>______________________________________<br>TECHNICAL
                                        DETAILS🔧:<br><br>All our guest book are made in one brown
                                        color🎨.<br>You can choose one of the designs with your name or
                                        initials and date as you wish with different shapes of center
                                        inside.<br>The price includes: frame, central part, stand.
                                        <br>The box for small hearts is available upon request.<br>The
                                        shape of the container changes in proportion to the number of
                                        little hearts. The more hearts there are, the bigger is the
                                        frame!<br><br>Heart frame Guest Book (Standard)<br>30-40 hearts
                                        - 31*28,2 cm / 12,2*11,10 inches<br>50-60 hearts - 36*33,2 cm /
                                        14,1*13 inches<br>70-80 hearts - 41,3*37,6 cm / 16,2*14,8
                                        inches<br>90-100-110 hearts - 45*41,1 cm / 17,7*16,1
                                        inches<br>120-130-140-150-160 hearts - 51,6*47 cm / 20,3*18,5
                                        inches<br>170-180-190-200-210 hearts - 56,7*51,5 cm / 22,3*20,2
                                        inches<br>220-230-240-250-260 hearts - 62 * 56,3 cm / 24,4*22,1
                                        inches<br>270-280-290-300-310-320-330-340-350 hearts - 63,4*58,1
                                        cm / 24,9*22,8 inches<br><br>Drop box heart sizes:<br>1x1.2
                                        inches<br>1.4 x 1.6 inch<br>1.6 x 1.9 inch<br>2.4 x 2
                                        inch<br><br>Heart frame Guest Book (Big)<br>30 hearts -
                                        41,3*37,6 cm / 16,2*14,8 inches <br>40 hearts - 45*41,1 cm /
                                        17,7*16,1 inches<br>50 hearts - 45*41,1 cm / 17,7*16,1
                                        inches<br>60 hearts - 51,6*47 cm / 20,3*18,5 inches<br>70 hearts
                                        - 51,6*47 cm / 20,3*18,5 inches<br>80 hearts - 56,7*51,5 cm /
                                        22,3*20,2 inches<br>90 hearts - 56,7*51,5 cm / 22,3*20,2
                                        inches<br>100 hearts - 62 * 56,3 cm / 24,4*22,1 inches<br>110
                                        hearts - 62 * 56,3 cm / 24,4*22,1 inches<br><br>Sizes of Big
                                        hearts:<br>3.1x2.9 in<br>3.5x3.35 in<br><br><br>Size of the box
                                        (depending on the number of hearts)<br>length: 4-8 in<br>Width:
                                        2.5-6 in<br>Height: 1-2 in<br><br>The material from which they
                                        are made is PlyWood.
                                        <br>__________________________________<br>Delivery and
                                        return🚚📬:<br><br>Free delivery within 3-5 business
                                        days.<br>You can also return the product, exchange or cancel
                                        it.<br>Buyers are responsible for the return shipping cost.
                                        <br>If the product is not returned in its original condition,
                                        the buyer is responsible for any loss of value.<br><br>We will
                                        be happy to make these Guest Book for
                                        you❤<br><br>______________________________________<br><br>WITH
                                        THIS GUEST BOOK, OUR CUSTOMERS ALSO ORDER:<br><br>! SPECIAL
                                        OFFER !<br>With this Guest Book our other wedding decor you will
                                        get cheaper . We offered a 60% discount coupon instead of the
                                        standard 50% discount.<br>Just enter WEDDINGSALE - and enjoy the
                                        shopping.<br><br>We know how important it is that your wedding
                                        is in one style, so we have developed the most popular decor
                                        elements for you. We use the same wood color and similar design
                                        for all of our products to fit your special day. We did it all
                                        with great love, so that this day would be perfect and you would
                                        remember it with warmth.<br><br>Wedding Invitation<br>These
                                        beautiful and stylish guest invitations are made in rustic
                                        style. Your guests will be very happy to receive such an unusual
                                        invitation. <br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=28525073" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=28525073</a><br><br>Dress
                                        Hanger <br>Imagine the bride's morning begins and your gorgeous
                                        dress weighs on this beautiful hanger with your name on it. The
                                        photos from this morning are always special, because you will
                                        want to remember all the details from that beautiful morning
                                        after your wedding.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=30047425" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=30047425</a><br><br>Wedding
                                        Welcome Sign<br>We know how important this day is for you, and
                                        it is surely very important to make everything perfect, every
                                        detail is important.<br>Our wedding sign with welcoming guests
                                        is the first thing your guests will see at your wedding.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=28224950" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=28224950</a><br><br>Wedding
                                        Boxes For Rings<br>As a bride, you surely want everything to
                                        look its best.<br>We are sure that our ring boxes will look
                                        beautiful at your wedding.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=31295751" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=31295751</a><br><br>Wedding
                                        Card Box<br>These at the same time simple and beautiful envelope
                                        boxes in rustic style, will help you to complement and decorate
                                        the appearance of your wedding, as well as attract the attention
                                        of your guests and allow them to easily throw their
                                        envelopes.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=31246459" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=31246459</a><br><br>Wedding
                                        Guest Book<br>You definitely want to save every moment of the
                                        day, not to miss a minute. <br>Remember the emotions of your
                                        loved ones and friends. <br>Our guest book will decorate your
                                        holiday, each guest can leave his desire to a young couple by
                                        signing a guest book. <br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=29060413" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=29060413</a><br><br>Wedding
                                        Table Numbers<br>Every detail is important at a wedding. Imagine
                                        how beautiful these rooms will look on your tables when the
                                        banquet part starts.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=29833665" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=29833665</a><br><br>Wedding
                                        Cake Topper<br>Our toppers are made with great love to you.
                                        Imagine how beautiful these toppers will look on your cake when
                                        your banquet comes to an end and will bear your wedding cake.
                                        Your photos will also look beautiful with our toppers on your
                                        cake.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=29347983" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=29347983</a><br><br>Wedding
                                        Favors<br>The guests will be very pleased that you will thank
                                        them in this way, for being a part of your holiday, with our
                                        wedding gifts.<br><a href="https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav&amp;section_id=29816994" target="_blank">https://www.etsy.com/shop/WeddingByEli?ref=seller-platform-mcnav§ion_id=29816994</a>
                                    </p>
                                </div>
                                <div class="box-describe-main__btn">
                                    <button class="btn-etsy-main btn-hover-effect-sub">
                                        Learn more about this item
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-infor__third">
                        <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize justify-content-between">
                            <span class="text-caption-16 fw-bold">Shipping and return policies</span>
                            <span class="icon-arrow-up"></span>
                        </button>
                        <div class="shipping-return-policies" aria-hidden="false">

                            <div class="timeline-shipping">
                                <div class="timeline-shipping__top">
                                    <span class="estimated-arrival">
                                        <span class="estimated-arrival__text tooltip-trigger-underline">Estimated
                                            arrival</span>
                                        <span class="estimated-arrival__sub">
                                            The estimated delivery date is based on your purchase date,
                                            the recipient's location, the seller's processing time and
                                            location, and the shipping carrier. Other factors—like
                                            placing an order on a weekend or a holiday—may end up
                                            pushing the arrival of your item beyond the estimated
                                            delivery date. It's our hope that your item gets where it's
                                            going as soon as possible, but given the factors involved,
                                            this is only an estimate.
                                            <a href="">Learn more</a>
                                        </span>
                                    </span>
                                    <p class="time-shipping-final mt-6 fts-26">Jul 27-Aug 17</p>
                                </div>
                                <div class="timeline-shipping__main">
                                    <div class="timeline-shipping__main-item">
                                        <div class="timeline-detail align-items-start">
                                            <div class="timeline-detail__first">
                                                <span class="timeline-detail-icon" style="padding:3px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true" focusable="false">
                                                        <path d="M10.3126 10.2524L12.1726 6.80245L10.8451 5.48245L7.53761 2.17495C7.43156 2.07363 7.29053 2.01709 7.14386 2.01709C6.99719 2.01709 6.85616 2.07363 6.75011 2.17495C6.65938 2.27881 6.60938 2.41204 6.60938 2.54995C6.60938 2.68786 6.65938 2.82109 6.75011 2.92495L9.84761 6.49495L9.31511 7.02745L4.89011 2.70745C4.83647 2.6537 4.77276 2.61106 4.70262 2.58197C4.63248 2.55288 4.55729 2.53791 4.48136 2.53791C4.40543 2.53791 4.33024 2.55288 4.2601 2.58197C4.18996 2.61106 4.12625 2.6537 4.07261 2.70745V2.70745C3.97079 2.81475 3.91404 2.95703 3.91404 3.10495C3.91404 3.25287 3.97079 3.39515 4.07261 3.50245L8.21261 8.12995L7.68761 8.66245L3.82511 4.82995C3.77306 4.77213 3.70945 4.7259 3.63838 4.69425C3.56732 4.66261 3.4904 4.64625 3.41261 4.64625C3.33482 4.64625 3.2579 4.66261 3.18683 4.69425C3.11577 4.7259 3.05215 4.77213 3.00011 4.82995V4.82995C2.90938 4.93381 2.85938 5.06704 2.85938 5.20495C2.85938 5.34286 2.90938 5.47609 3.00011 5.57995L6.60011 9.74995L6.07511 10.2824L3.00011 7.67995C2.89556 7.59068 2.76259 7.54163 2.62511 7.54163C2.48763 7.54163 2.35466 7.59068 2.25011 7.67995V7.67995C2.19636 7.73359 2.15373 7.7973 2.12463 7.86744C2.09554 7.93758 2.08057 8.01277 2.08057 8.0887C2.08057 8.16463 2.09554 8.23982 2.12463 8.30996C2.15373 8.38009 2.19636 8.44381 2.25011 8.49745L5.02511 11.2649L9.27011 15.5099C9.40942 15.6494 9.57485 15.7601 9.75695 15.8355C9.93904 15.911 10.1342 15.9499 10.3314 15.9499C10.5285 15.9499 10.7237 15.911 10.9058 15.8355C11.0879 15.7601 11.2533 15.6494 11.3926 15.5099L15.1426 11.7974L15.5476 11.3924C15.7446 11.195 15.8827 10.9465 15.9463 10.6749C16.0099 10.4033 15.9965 10.1194 15.9076 9.85495L13.5001 3.88495L13.0501 4.03495C12.9466 4.07147 12.8557 4.13672 12.7879 4.22305C12.7202 4.30939 12.6785 4.41324 12.6676 4.52245L12.9676 7.59745L10.8451 10.7849L10.3126 10.2524Z" fill="#222222"></path>
                                                    </svg>
                                                </span>
                                                <div class="timeline-detail__horizontal">
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="text-order">Jul 14 </div>
                                            <span class="tooltip-trigger-underline">Order placed</span>
                                            <span class="">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="timeline-shipping__main-item">
                                        <div class="timeline-detail align-items-center">
                                            <div class="timeline-detail__first">
                                                <div class="timeline-detail__horizontal">
                                                    <div></div>
                                                </div>
                                                <span class="timeline-detail-icon" style="padding:3px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path d="M21.868,11.5l-4-7A1,1,0,0,0,17,4H5A1,1,0,0,0,4,5V6H2A1,1,0,1,0,2,8H6a1,1,0,0,1,0,2H3a1,1,0,0,0,0,2H5a1,1,0,1,1,0,2H4v3a1,1,0,0,0,1,1H6.05a2.5,2.5,0,0,0,4.9,0h4.1a2.5,2.5,0,0,0,4.9,0H21a1,1,0,0,0,1-1V12A1,1,0,0,0,21.868,11.5ZM8.5,19A1.5,1.5,0,1,1,10,17.5,1.5,1.5,0,0,1,8.5,19Zm5.488-8V6h1.725l2.845,5h-4.57ZM17.5,19A1.5,1.5,0,1,1,19,17.5,1.5,1.5,0,0,1,17.5,19Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="timeline-detail__horizontal">
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="text-order">Jul 19-21 </div>
                                            <span class="tooltip-trigger-underline">Order ships</span>
                                            <span class="">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="timeline-shipping__main-item">
                                        <div class="timeline-detail align-items-end">
                                            <div class="timeline-detail__first">
                                                <div class="timeline-detail__horizontal">
                                                    <div></div>
                                                </div>
                                                <span class="timeline-detail-icon" style="padding:3px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path d="M21,9.25A1.25,1.25,0,0,0,19.75,8H12.41l4.29-4.29a1,1,0,0,0-1.41-1.41L12,5.59,10.71,4.29A1,1,0,0,0,9.29,5.71L11.59,8H4.25A1.25,1.25,0,0,0,3,9.25V15H4v5.75A1.25,1.25,0,0,0,5.25,22h13.5A1.25,1.25,0,0,0,20,20.75V15h1ZM19,10v3H13V10ZM5,10h6v3H5ZM6,20V15h5v5Zm12,0H13V15h5Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="text-order">Jul 28 - Aug 18 </div>
                                            <span class="tooltip-trigger-underline">Delivered</span>
                                            <span class="">

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-ship-return">
                                <div class="ship-return__main">
                                    <span class="ship-return__main-title">Cost to ship</span>
                                    <p class="ship-return__main-detail">
                                        <span class="currency-symbol">US$</span>
                                        <span class="currency-value">6.90</span>
                                    </p>
                                </div>
                                <div class="ship-return__main">
                                    <span class="ship-return__main-title">Returns & exchanger</span>
                                    <p class="ship-return__main-detail">
                                        Accepted
                                    </p>
                                    <span>Exceptions may apply</span>
                                </div>
                            </div>
                            <div class="box-deliver-address">
                                <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize-small">
                                    Deliver to Vietnam
                                    <span class="icon-arrow-up"></span>
                                </button>
                                <div class="">
                                    <h3 class="title-select">Country</h3>
                                    <div class="box-select">
                                        <select name="ship_to" class="select__element" id="ship_to_select" aria-label="Choose country...">
                                            <option value="ZZ">
                                                Choose country...
                                            </option>
                                            <optgroup label="————————">
                                                <option value="AU" data-context="region" data-path="Australia">
                                                    Australia
                                                </option>
                                                <option value="CA" data-context="region" data-path="Canada">
                                                    Canada
                                                </option>
                                                <option value="FR" data-context="region" data-path="France">
                                                    France
                                                </option>
                                                <option value="DE" data-context="region" data-path="Germany">
                                                    Germany
                                                </option>
                                                <option value="GR" data-context="region" data-path="Greece">
                                                    Greece
                                                </option>
                                                <option value="IE" data-context="region" data-path="Ireland">
                                                    Ireland
                                                </option>
                                                <option value="IT" data-context="region" data-path="Italy">
                                                    Italy
                                                </option>
                                                <option value="JP" data-context="region" data-path="Japan">
                                                    Japan
                                                </option>
                                                <option value="NZ" data-context="region" data-path="New Zealand">
                                                    New Zealand
                                                </option>
                                                <option value="PL" data-context="region" data-path="Poland">
                                                    Poland
                                                </option>
                                                <option value="PT" data-context="region" data-path="Portugal">
                                                    Portugal
                                                </option>
                                                <option value="RU" data-context="region" data-path="Russia">
                                                    Russia
                                                </option>
                                                <option value="ES" data-context="region" data-path="Spain">
                                                    Spain
                                                </option>
                                                <option value="NL" data-context="region" data-path="The Netherlands">
                                                    The Netherlands
                                                </option>
                                                <option value="GB" data-context="region" data-path="United Kingdom">
                                                    United Kingdom
                                                </option>
                                                <option value="US" data-context="region" data-path="United States">
                                                    United States
                                                </option>
                                            </optgroup>
                                            <optgroup label="————————">
                                                <option value="AF" data-context="region" data-path="Afghanistan">
                                                    Afghanistan
                                                </option>
                                                <option value="AL" data-context="region" data-path="Albania">
                                                    Albania
                                                </option>
                                                <option value="DZ" data-context="region" data-path="Algeria">
                                                    Algeria
                                                </option>
                                                <option value="AS" data-context="region" data-path="American Samoa">
                                                    American Samoa
                                                </option>
                                                <option value="AD" data-context="region" data-path="Andorra">
                                                    Andorra
                                                </option>
                                                <option value="AO" data-context="region" data-path="Angola">
                                                    Angola
                                                </option>
                                                <option value="AI" data-context="region" data-path="Anguilla">
                                                    Anguilla
                                                </option>
                                                <option value="AG" data-context="region" data-path="Antigua and Barbuda">
                                                    Antigua and Barbuda
                                                </option>
                                                <option value="AR" data-context="region" data-path="Argentina">
                                                    Argentina
                                                </option>
                                                <option value="AM" data-context="region" data-path="Armenia">
                                                    Armenia
                                                </option>
                                                <option value="AW" data-context="region" data-path="Aruba">
                                                    Aruba
                                                </option>
                                                <option value="AU" data-context="region" data-path="Australia">
                                                    Australia
                                                </option>
                                                <option value="AT" data-context="region" data-path="Austria">
                                                    Austria
                                                </option>
                                                <option value="AZ" data-context="region" data-path="Azerbaijan">
                                                    Azerbaijan
                                                </option>
                                                <option value="BS" data-context="region" data-path="Bahamas">
                                                    Bahamas
                                                </option>
                                                <option value="BH" data-context="region" data-path="Bahrain">
                                                    Bahrain
                                                </option>
                                                <option value="BD" data-context="region" data-path="Bangladesh">
                                                    Bangladesh
                                                </option>
                                                <option value="BB" data-context="region" data-path="Barbados">
                                                    Barbados
                                                </option>
                                                <option value="BY" data-context="region" data-path="Belarus">
                                                    Belarus
                                                </option>
                                                <option value="BE" data-context="region" data-path="Belgium">
                                                    Belgium
                                                </option>
                                                <option value="BZ" data-context="region" data-path="Belize">
                                                    Belize
                                                </option>
                                                <option value="BJ" data-context="region" data-path="Benin">
                                                    Benin
                                                </option>
                                                <option value="BM" data-context="region" data-path="Bermuda">
                                                    Bermuda
                                                </option>
                                                <option value="BT" data-context="region" data-path="Bhutan">
                                                    Bhutan
                                                </option>
                                                <option value="BO" data-context="region" data-path="Bolivia">
                                                    Bolivia
                                                </option>
                                                <option value="BA" data-context="region" data-path="Bosnia and Herzegovina">
                                                    Bosnia and Herzegovina
                                                </option>
                                                <option value="BW" data-context="region" data-path="Botswana">
                                                    Botswana
                                                </option>
                                                <option value="BV" data-context="region" data-path="Bouvet Island">
                                                    Bouvet Island
                                                </option>
                                                <option value="BR" data-context="region" data-path="Brazil">
                                                    Brazil
                                                </option>
                                                <option value="IO" data-context="region" data-path="British Indian Ocean Territory">
                                                    British Indian Ocean Territory
                                                </option>
                                                <option value="VG" data-context="region" data-path="British Virgin Islands">
                                                    British Virgin Islands
                                                </option>
                                                <option value="BN" data-context="region" data-path="Brunei">
                                                    Brunei
                                                </option>
                                                <option value="BG" data-context="region" data-path="Bulgaria">
                                                    Bulgaria
                                                </option>
                                                <option value="BF" data-context="region" data-path="Burkina Faso">
                                                    Burkina Faso
                                                </option>
                                                <option value="BI" data-context="region" data-path="Burundi">
                                                    Burundi
                                                </option>
                                                <option value="KH" data-context="region" data-path="Cambodia">
                                                    Cambodia
                                                </option>
                                                <option value="CM" data-context="region" data-path="Cameroon">
                                                    Cameroon
                                                </option>
                                                <option value="CA" data-context="region" data-path="Canada">
                                                    Canada
                                                </option>
                                                <option value="CV" data-context="region" data-path="Cape Verde">
                                                    Cape Verde
                                                </option>
                                                <option value="KY" data-context="region" data-path="Cayman Islands">
                                                    Cayman Islands
                                                </option>
                                                <option value="CF" data-context="region" data-path="Central African Republic">
                                                    Central African Republic
                                                </option>
                                                <option value="TD" data-context="region" data-path="Chad">
                                                    Chad
                                                </option>
                                                <option value="CL" data-context="region" data-path="Chile">
                                                    Chile
                                                </option>
                                                <option value="CN" data-context="region" data-path="China">
                                                    China
                                                </option>
                                                <option value="CX" data-context="region" data-path="Christmas Island">
                                                    Christmas Island
                                                </option>
                                                <option value="CC" data-context="region" data-path="Cocos (Keeling) Islands">
                                                    Cocos (Keeling) Islands
                                                </option>
                                                <option value="CO" data-context="region" data-path="Colombia">
                                                    Colombia
                                                </option>
                                                <option value="KM" data-context="region" data-path="Comoros">
                                                    Comoros
                                                </option>
                                                <option value="CG" data-context="region" data-path="Congo, Republic of">
                                                    Congo, Republic of
                                                </option>
                                                <option value="CK" data-context="region" data-path="Cook Islands">
                                                    Cook Islands
                                                </option>
                                                <option value="CR" data-context="region" data-path="Costa Rica">
                                                    Costa Rica
                                                </option>
                                                <option value="HR" data-context="region" data-path="Croatia">
                                                    Croatia
                                                </option>
                                                <option value="CW" data-context="region" data-path="Curaçao">
                                                    Curaçao
                                                </option>
                                                <option value="CY" data-context="region" data-path="Cyprus">
                                                    Cyprus
                                                </option>
                                                <option value="CZ" data-context="region" data-path="Czech Republic">
                                                    Czech Republic
                                                </option>
                                                <option value="DK" data-context="region" data-path="Denmark">
                                                    Denmark
                                                </option>
                                                <option value="DJ" data-context="region" data-path="Djibouti">
                                                    Djibouti
                                                </option>
                                                <option value="DM" data-context="region" data-path="Dominica">
                                                    Dominica
                                                </option>
                                                <option value="DO" data-context="region" data-path="Dominican Republic">
                                                    Dominican Republic
                                                </option>
                                                <option value="EC" data-context="region" data-path="Ecuador">
                                                    Ecuador
                                                </option>
                                                <option value="EG" data-context="region" data-path="Egypt">
                                                    Egypt
                                                </option>
                                                <option value="SV" data-context="region" data-path="El Salvador">
                                                    El Salvador
                                                </option>
                                                <option value="GQ" data-context="region" data-path="Equatorial Guinea">
                                                    Equatorial Guinea
                                                </option>
                                                <option value="ER" data-context="region" data-path="Eritrea">
                                                    Eritrea
                                                </option>
                                                <option value="EE" data-context="region" data-path="Estonia">
                                                    Estonia
                                                </option>
                                                <option value="ET" data-context="region" data-path="Ethiopia">
                                                    Ethiopia
                                                </option>
                                                <option value="FK" data-context="region" data-path="Falkland Islands (Malvinas)">
                                                    Falkland Islands (Malvinas)
                                                </option>
                                                <option value="FO" data-context="region" data-path="Faroe Islands">
                                                    Faroe Islands
                                                </option>
                                                <option value="FJ" data-context="region" data-path="Fiji">
                                                    Fiji
                                                </option>
                                                <option value="FI" data-context="region" data-path="Finland">
                                                    Finland
                                                </option>
                                                <option value="FR" data-context="region" data-path="France">
                                                    France
                                                </option>
                                                <option value="GF" data-context="region" data-path="French Guiana">
                                                    French Guiana
                                                </option>
                                                <option value="PF" data-context="region" data-path="French Polynesia">
                                                    French Polynesia
                                                </option>
                                                <option value="TF" data-context="region" data-path="French Southern Territories">
                                                    French Southern Territories
                                                </option>
                                                <option value="GA" data-context="region" data-path="Gabon">
                                                    Gabon
                                                </option>
                                                <option value="GM" data-context="region" data-path="Gambia">
                                                    Gambia
                                                </option>
                                                <option value="GE" data-context="region" data-path="Georgia">
                                                    Georgia
                                                </option>
                                                <option value="DE" data-context="region" data-path="Germany">
                                                    Germany
                                                </option>
                                                <option value="GH" data-context="region" data-path="Ghana">
                                                    Ghana
                                                </option>
                                                <option value="GI" data-context="region" data-path="Gibraltar">
                                                    Gibraltar
                                                </option>
                                                <option value="GR" data-context="region" data-path="Greece">
                                                    Greece
                                                </option>
                                                <option value="GL" data-context="region" data-path="Greenland">
                                                    Greenland
                                                </option>
                                                <option value="GD" data-context="region" data-path="Grenada">
                                                    Grenada
                                                </option>
                                                <option value="GP" data-context="region" data-path="Guadeloupe">
                                                    Guadeloupe
                                                </option>
                                                <option value="GU" data-context="region" data-path="Guam">
                                                    Guam
                                                </option>
                                                <option value="GT" data-context="region" data-path="Guatemala">
                                                    Guatemala
                                                </option>
                                                <option value="GN" data-context="region" data-path="Guinea">
                                                    Guinea
                                                </option>
                                                <option value="GW" data-context="region" data-path="Guinea-Bissau">
                                                    Guinea-Bissau
                                                </option>
                                                <option value="GY" data-context="region" data-path="Guyana">
                                                    Guyana
                                                </option>
                                                <option value="HT" data-context="region" data-path="Haiti">
                                                    Haiti
                                                </option>
                                                <option value="HM" data-context="region" data-path="Heard Island and McDonald Islands">
                                                    Heard Island and McDonald Islands
                                                </option>
                                                <option value="VA" data-context="region" data-path="Holy See (Vatican City State)">
                                                    Holy See (Vatican City State)
                                                </option>
                                                <option value="HN" data-context="region" data-path="Honduras">
                                                    Honduras
                                                </option>
                                                <option value="HK" data-context="region" data-path="Hong Kong">
                                                    Hong Kong
                                                </option>
                                                <option value="HU" data-context="region" data-path="Hungary">
                                                    Hungary
                                                </option>
                                                <option value="IS" data-context="region" data-path="Iceland">
                                                    Iceland
                                                </option>
                                                <option value="IN" data-context="region" data-path="India">
                                                    India
                                                </option>
                                                <option value="ID" data-context="region" data-path="Indonesia">
                                                    Indonesia
                                                </option>
                                                <option value="IQ" data-context="region" data-path="Iraq">
                                                    Iraq
                                                </option>
                                                <option value="IE" data-context="region" data-path="Ireland">
                                                    Ireland
                                                </option>
                                                <option value="IM" data-context="region" data-path="Isle of Man">
                                                    Isle of Man
                                                </option>
                                                <option value="IL" data-context="region" data-path="Israel">
                                                    Israel
                                                </option>
                                                <option value="IT" data-context="region" data-path="Italy">
                                                    Italy
                                                </option>
                                                <option value="IC" data-context="region" data-path="Ivory Coast">
                                                    Ivory Coast
                                                </option>
                                                <option value="JM" data-context="region" data-path="Jamaica">
                                                    Jamaica
                                                </option>
                                                <option value="JP" data-context="region" data-path="Japan">
                                                    Japan
                                                </option>
                                                <option value="JO" data-context="region" data-path="Jordan">
                                                    Jordan
                                                </option>
                                                <option value="KZ" data-context="region" data-path="Kazakhstan">
                                                    Kazakhstan
                                                </option>
                                                <option value="KE" data-context="region" data-path="Kenya">
                                                    Kenya
                                                </option>
                                                <option value="KI" data-context="region" data-path="Kiribati">
                                                    Kiribati
                                                </option>
                                                <option value="KV" data-context="region" data-path="Kosovo">
                                                    Kosovo
                                                </option>
                                                <option value="KW" data-context="region" data-path="Kuwait">
                                                    Kuwait
                                                </option>
                                                <option value="KG" data-context="region" data-path="Kyrgyzstan">
                                                    Kyrgyzstan
                                                </option>
                                                <option value="LA" data-context="region" data-path="Laos">
                                                    Laos
                                                </option>
                                                <option value="LV" data-context="region" data-path="Latvia">
                                                    Latvia
                                                </option>
                                                <option value="LB" data-context="region" data-path="Lebanon">
                                                    Lebanon
                                                </option>
                                                <option value="LS" data-context="region" data-path="Lesotho">
                                                    Lesotho
                                                </option>
                                                <option value="LR" data-context="region" data-path="Liberia">
                                                    Liberia
                                                </option>
                                                <option value="LY" data-context="region" data-path="Libya">
                                                    Libya
                                                </option>
                                                <option value="LI" data-context="region" data-path="Liechtenstein">
                                                    Liechtenstein
                                                </option>
                                                <option value="LT" data-context="region" data-path="Lithuania">
                                                    Lithuania
                                                </option>
                                                <option value="LU" data-context="region" data-path="Luxembourg">
                                                    Luxembourg
                                                </option>
                                                <option value="MO" data-context="region" data-path="Macao">
                                                    Macao
                                                </option>
                                                <option value="MK" data-context="region" data-path="Macedonia">
                                                    Macedonia
                                                </option>
                                                <option value="MG" data-context="region" data-path="Madagascar">
                                                    Madagascar
                                                </option>
                                                <option value="MW" data-context="region" data-path="Malawi">
                                                    Malawi
                                                </option>
                                                <option value="MY" data-context="region" data-path="Malaysia">
                                                    Malaysia
                                                </option>
                                                <option value="MV" data-context="region" data-path="Maldives">
                                                    Maldives
                                                </option>
                                                <option value="ML" data-context="region" data-path="Mali">
                                                    Mali
                                                </option>
                                                <option value="MT" data-context="region" data-path="Malta">
                                                    Malta
                                                </option>
                                                <option value="MH" data-context="region" data-path="Marshall Islands">
                                                    Marshall Islands
                                                </option>
                                                <option value="MQ" data-context="region" data-path="Martinique">
                                                    Martinique
                                                </option>
                                                <option value="MR" data-context="region" data-path="Mauritania">
                                                    Mauritania
                                                </option>
                                                <option value="MU" data-context="region" data-path="Mauritius">
                                                    Mauritius
                                                </option>
                                                <option value="YT" data-context="region" data-path="Mayotte">
                                                    Mayotte
                                                </option>
                                                <option value="MX" data-context="region" data-path="Mexico">
                                                    Mexico
                                                </option>
                                                <option value="FM" data-context="region" data-path="Micronesia, Federated States of">
                                                    Micronesia, Federated States of
                                                </option>
                                                <option value="MD" data-context="region" data-path="Moldova">
                                                    Moldova
                                                </option>
                                                <option value="MC" data-context="region" data-path="Monaco">
                                                    Monaco
                                                </option>
                                                <option value="MN" data-context="region" data-path="Mongolia">
                                                    Mongolia
                                                </option>
                                                <option value="ME" data-context="region" data-path="Montenegro">
                                                    Montenegro
                                                </option>
                                                <option value="MS" data-context="region" data-path="Montserrat">
                                                    Montserrat
                                                </option>
                                                <option value="MA" data-context="region" data-path="Morocco">
                                                    Morocco
                                                </option>
                                                <option value="MZ" data-context="region" data-path="Mozambique">
                                                    Mozambique
                                                </option>
                                                <option value="MM" data-context="region" data-path="Myanmar (Burma)">
                                                    Myanmar (Burma)
                                                </option>
                                                <option value="NA" data-context="region" data-path="Namibia">
                                                    Namibia
                                                </option>
                                                <option value="NR" data-context="region" data-path="Nauru">
                                                    Nauru
                                                </option>
                                                <option value="NP" data-context="region" data-path="Nepal">
                                                    Nepal
                                                </option>
                                                <option value="AN" data-context="region" data-path="Netherlands Antilles">
                                                    Netherlands Antilles
                                                </option>
                                                <option value="NC" data-context="region" data-path="New Caledonia">
                                                    New Caledonia
                                                </option>
                                                <option value="NZ" data-context="region" data-path="New Zealand">
                                                    New Zealand
                                                </option>
                                                <option value="NI" data-context="region" data-path="Nicaragua">
                                                    Nicaragua
                                                </option>
                                                <option value="NE" data-context="region" data-path="Niger">
                                                    Niger
                                                </option>
                                                <option value="NG" data-context="region" data-path="Nigeria">
                                                    Nigeria
                                                </option>
                                                <option value="NU" data-context="region" data-path="Niue">
                                                    Niue
                                                </option>
                                                <option value="NF" data-context="region" data-path="Norfolk Island">
                                                    Norfolk Island
                                                </option>
                                                <option value="MP" data-context="region" data-path="Northern Mariana Islands">
                                                    Northern Mariana Islands
                                                </option>
                                                <option value="NO" data-context="region" data-path="Norway">
                                                    Norway
                                                </option>
                                                <option value="OM" data-context="region" data-path="Oman">
                                                    Oman
                                                </option>
                                                <option value="PK" data-context="region" data-path="Pakistan">
                                                    Pakistan
                                                </option>
                                                <option value="PW" data-context="region" data-path="Palau">
                                                    Palau
                                                </option>
                                                <option value="PS" data-context="region" data-path="Palestinian Territory, Occupied">
                                                    Palestinian Territory, Occupied
                                                </option>
                                                <option value="PA" data-context="region" data-path="Panama">
                                                    Panama
                                                </option>
                                                <option value="PG" data-context="region" data-path="Papua New Guinea">
                                                    Papua New Guinea
                                                </option>
                                                <option value="PY" data-context="region" data-path="Paraguay">
                                                    Paraguay
                                                </option>
                                                <option value="PE" data-context="region" data-path="Peru">
                                                    Peru
                                                </option>
                                                <option value="PH" data-context="region" data-path="Philippines">
                                                    Philippines
                                                </option>
                                                <option value="PL" data-context="region" data-path="Poland">
                                                    Poland
                                                </option>
                                                <option value="PT" data-context="region" data-path="Portugal">
                                                    Portugal
                                                </option>
                                                <option value="PR" data-context="region" data-path="Puerto Rico">
                                                    Puerto Rico
                                                </option>
                                                <option value="QA" data-context="region" data-path="Qatar">
                                                    Qatar
                                                </option>
                                                <option value="RE" data-context="region" data-path="Reunion">
                                                    Reunion
                                                </option>
                                                <option value="RO" data-context="region" data-path="Romania">
                                                    Romania
                                                </option>
                                                <option value="RU" data-context="region" data-path="Russia">
                                                    Russia
                                                </option>
                                                <option value="RW" data-context="region" data-path="Rwanda">
                                                    Rwanda
                                                </option>
                                                <option value="SH" data-context="region" data-path="Saint Helena">
                                                    Saint Helena
                                                </option>
                                                <option value="KN" data-context="region" data-path="Saint Kitts and Nevis">
                                                    Saint Kitts and Nevis
                                                </option>
                                                <option value="LC" data-context="region" data-path="Saint Lucia">
                                                    Saint Lucia
                                                </option>
                                                <option value="MF" data-context="region" data-path="Saint Martin (French part)">
                                                    Saint Martin (French part)
                                                </option>
                                                <option value="PM" data-context="region" data-path="Saint Pierre and Miquelon">
                                                    Saint Pierre and Miquelon
                                                </option>
                                                <option value="VC" data-context="region" data-path="Saint Vincent and the Grenadines">
                                                    Saint Vincent and the Grenadines
                                                </option>
                                                <option value="WS" data-context="region" data-path="Samoa">
                                                    Samoa
                                                </option>
                                                <option value="SM" data-context="region" data-path="San Marino">
                                                    San Marino
                                                </option>
                                                <option value="ST" data-context="region" data-path="Sao Tome and Principe">
                                                    Sao Tome and Principe
                                                </option>
                                                <option value="SA" data-context="region" data-path="Saudi Arabia">
                                                    Saudi Arabia
                                                </option>
                                                <option value="SN" data-context="region" data-path="Senegal">
                                                    Senegal
                                                </option>
                                                <option value="RS" data-context="region" data-path="Serbia">
                                                    Serbia
                                                </option>
                                                <option value="SC" data-context="region" data-path="Seychelles">
                                                    Seychelles
                                                </option>
                                                <option value="SL" data-context="region" data-path="Sierra Leone">
                                                    Sierra Leone
                                                </option>
                                                <option value="SG" data-context="region" data-path="Singapore">
                                                    Singapore
                                                </option>
                                                <option value="SX" data-context="region" data-path="Sint Maarten (Dutch part)">
                                                    Sint Maarten (Dutch part)
                                                </option>
                                                <option value="SK" data-context="region" data-path="Slovakia">
                                                    Slovakia
                                                </option>
                                                <option value="SI" data-context="region" data-path="Slovenia">
                                                    Slovenia
                                                </option>
                                                <option value="SB" data-context="region" data-path="Solomon Islands">
                                                    Solomon Islands
                                                </option>
                                                <option value="SO" data-context="region" data-path="Somalia">
                                                    Somalia
                                                </option>
                                                <option value="ZA" data-context="region" data-path="South Africa">
                                                    South Africa
                                                </option>
                                                <option value="GS" data-context="region" data-path="South Georgia and the South Sandwich Islands">
                                                    South Georgia and the South Sandwich Islands
                                                </option>
                                                <option value="KR" data-context="region" data-path="South Korea">
                                                    South Korea
                                                </option>
                                                <option value="SS" data-context="region" data-path="South Sudan">
                                                    South Sudan
                                                </option>
                                                <option value="ES" data-context="region" data-path="Spain">
                                                    Spain
                                                </option>
                                                <option value="LK" data-context="region" data-path="Sri Lanka">
                                                    Sri Lanka
                                                </option>
                                                <option value="SD" data-context="region" data-path="Sudan">
                                                    Sudan
                                                </option>
                                                <option value="SR" data-context="region" data-path="Suriname">
                                                    Suriname
                                                </option>
                                                <option value="SJ" data-context="region" data-path="Svalbard and Jan Mayen">
                                                    Svalbard and Jan Mayen
                                                </option>
                                                <option value="SZ" data-context="region" data-path="Swaziland">
                                                    Swaziland
                                                </option>
                                                <option value="SE" data-context="region" data-path="Sweden">
                                                    Sweden
                                                </option>
                                                <option value="CH" data-context="region" data-path="Switzerland">
                                                    Switzerland
                                                </option>
                                                <option value="TW" data-context="region" data-path="Taiwan">
                                                    Taiwan
                                                </option>
                                                <option value="TJ" data-context="region" data-path="Tajikistan">
                                                    Tajikistan
                                                </option>
                                                <option value="TZ" data-context="region" data-path="Tanzania">
                                                    Tanzania
                                                </option>
                                                <option value="TH" data-context="region" data-path="Thailand">
                                                    Thailand
                                                </option>
                                                <option value="NL" data-context="region" data-path="The Netherlands">
                                                    The Netherlands
                                                </option>
                                                <option value="TL" data-context="region" data-path="Timor-Leste">
                                                    Timor-Leste
                                                </option>
                                                <option value="TG" data-context="region" data-path="Togo">
                                                    Togo
                                                </option>
                                                <option value="TK" data-context="region" data-path="Tokelau">
                                                    Tokelau
                                                </option>
                                                <option value="TO" data-context="region" data-path="Tonga">
                                                    Tonga
                                                </option>
                                                <option value="TT" data-context="region" data-path="Trinidad">
                                                    Trinidad
                                                </option>
                                                <option value="TN" data-context="region" data-path="Tunisia">
                                                    Tunisia
                                                </option>
                                                <option value="TR" data-context="region" data-path="Turkey">
                                                    Turkey
                                                </option>
                                                <option value="TM" data-context="region" data-path="Turkmenistan">
                                                    Turkmenistan
                                                </option>
                                                <option value="TC" data-context="region" data-path="Turks and Caicos Islands">
                                                    Turks and Caicos Islands
                                                </option>
                                                <option value="TV" data-context="region" data-path="Tuvalu">
                                                    Tuvalu
                                                </option>
                                                <option value="UG" data-context="region" data-path="Uganda">
                                                    Uganda
                                                </option>
                                                <option value="UA" data-context="region" data-path="Ukraine">
                                                    Ukraine
                                                </option>
                                                <option value="AE" data-context="region" data-path="United Arab Emirates">
                                                    United Arab Emirates
                                                </option>
                                                <option value="GB" data-context="region" data-path="United Kingdom">
                                                    United Kingdom
                                                </option>
                                                <option value="US" data-context="region" data-path="United States">
                                                    United States
                                                </option>
                                                <option value="UM" data-context="region" data-path="United States Minor Outlying Islands">
                                                    United States Minor Outlying Islands
                                                </option>
                                                <option value="UY" data-context="region" data-path="Uruguay">
                                                    Uruguay
                                                </option>
                                                <option value="VI" data-context="region" data-path="U.S. Virgin Islands">
                                                    U.S. Virgin Islands
                                                </option>
                                                <option value="UZ" data-context="region" data-path="Uzbekistan">
                                                    Uzbekistan
                                                </option>
                                                <option value="VU" data-context="region" data-path="Vanuatu">
                                                    Vanuatu
                                                </option>
                                                <option value="VE" data-context="region" data-path="Venezuela">
                                                    Venezuela
                                                </option>
                                                <option value="VN" selected="selected" data-context="region" data-path="Vietnam">
                                                    Vietnam
                                                </option>
                                                <option value="WF" data-context="region" data-path="Wallis and Futuna">
                                                    Wallis and Futuna
                                                </option>
                                                <option value="EH" data-context="region" data-path="Western Sahara">
                                                    Western Sahara
                                                </option>
                                                <option value="YE" data-context="region" data-path="Yemen">
                                                    Yemen
                                                </option>
                                                <option value="CD" data-context="region" data-path="Zaire (Democratic Republic of Congo)">
                                                    Zaire (Democratic Republic of Congo)
                                                </option>
                                                <option value="ZM" data-context="region" data-path="Zambia">
                                                    Zambia
                                                </option>
                                                <option value="ZW" data-context="region" data-path="Zimbabwe">
                                                    Zimbabwe
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="address-ship">
                                Ships from Ukraine
                            </div>
                            <div>
                                <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize-small">
                                    View shop policies
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="listing-infor__fourth">
                        <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize">
                            <span class="text-caption-16 fw-bold">FAQs</span>
                            <span class="icon-arrow-up"></span>
                        </button>
                        <div class="" aria-hidden="false">
                            <div>
                                <div class="ms-custom-12">
                                    <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize px-custom-15 py-custom-9">
                                        <span class="text-caption-13 fw-bold text-start">We have changed our wedding date, could you change the engraving?</span>
                                        <span class="icon-arrow-up"></span>
                                    </button>
                                    <div class="my-3" aria-hidden="false">

                                        <p class="text-caption-13 fw-normal" data-region="faq-answer-text">
                                            <span>Yes, of course. Email us and we will do our best to help you.</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="ms-custom-12">
                                    <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize px-custom-15 py-custom-9">
                                        <span class="text-caption-13 fw-bold">What is the lead time for the product?</span>
                                        <span class="icon-arrow-up"></span>
                                    </button>
                                    <div class="my-3" aria-hidden="false">
                                        <p class="text-caption-13 fw-normal" data-region="faq-answer-text">
                                            3-5 business days.
                                        </p>
                                    </div>
                                </div>
                                <div class="ms-custom-12">
                                    <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize px-custom-15 py-custom-9">
                                        <span class="text-caption-13 fw-bold">How many letterpress guest book can the inscriptions hold ?</span>
                                        <span class="icon-arrow-up"></span>
                                    </button>
                                    <div class="my-3" aria-hidden="false">
                                        <p class="text-caption-13 fw-normal" data-region="faq-answer-text">
                                            Small size can fit 20-30 guests (10-15 signatures)<br>
                                            Medium size can fit 50-60 guests (20-30 signatures)<br>
                                            Large size can fit 90-100 guests (40-50 signatures)<br>
                                            X-Large size can fit 120-130 guests (60-70 signatures)
                                        </p>
                                    </div>
                                </div>
                                <div class="ms-custom-12">
                                    <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize px-custom-15 py-custom-9">
                                        <span class="text-caption-13 fw-bold">What are the delivery times?</span>
                                        <span class="icon-arrow-up"></span>
                                    </button>
                                    <div class="my-3" aria-hidden="false">
                                        <p class="text-caption-13 fw-normal" data-region="faq-answer-text">
                                            Delivery terms:<br>
                                            For USA:<br>
                                            Time for express (UPS) delivery: 5-7 days!<br>
                                            Time for regular (UPS) delivery: 10-15 days!<br>
                                            Business days!<br>
                                            For Europe/Canada/Australia:<br>
                                            Time for express (UPS) delivery: 5-7 days!<br>
                                            Time for regular (Ukrposhta) delivery: 1.5-2 months!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-infor__fifth">
                        <button class="btn-etsy-main btn-hover-effect-sub width-btn-customize">
                            <span class="text-caption-16 fww-bold">Meet your sellers</span>
                            <span class="icon-arrow-up"></span>
                        </button>
                        <div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <img class="w-100 h-100 overflow-hidden" src="https://i.etsystatic.com/isla/4d0ca1/41039328/isla_75x75.41039328_jf09ftc1.jpg?version=0" name="img" alt="">
                                    </div>
                                    <div>
                                        <p class="mb-3 ">Elizabeth</p>
                                        <p class="text-caption-13">
                                            Owner of <a class="" href="https://www.etsy.com/shop/WeddingByEli?ref=l2-about-shopname" class="wt-text-link">WeddingByEli</a>
                                        </p>
                                    </div>
                                </div>
                                <a href="" class="text-decoration-none">
                                    <button class="btn-etsy-main btn-hover-effect-main w-100">
                                        <span>Message Elizabeth </span>
                                    </button>
                                </a>
                                <p class="text-caption-13 pt-2 text-center">
                                    This seller usually responds <strong class="fw-bold">within a few hours.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-review">
                <div class="box-review-wrapper">
                    <div class="box-review__main">
                        <div class="box-review__header">
                            <div class="d-flex flex-row justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <h3 class="me-3 fs-4">9,199 review</h3>
                                    <span class="rating-star d-flex align-items-center">
                                        <span class="etsy-icon--small" data-rating="0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                            </svg></span>
                                        <span class="etsy-icon--small" data-rating="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                            </svg></span>
                                        <span class="etsy-icon--small" data-rating="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                            </svg></span>
                                        <span class="etsy-icon--small" data-rating="3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                            </svg></span>
                                        <span class="etsy-icon--small" data-rating="4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                            </svg></span>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-comlumn flex-md-row mb-3 me-3">
                                <span class="etsy-icon--large me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
                                        <path d="M12 3C9.61307 3 7.32388 3.94821 5.63606 5.63604C3.94823 7.32387 3.00002 9.61305 3.00002 12C2.99687 13.5776 3.41456 15.1276 4.21002 16.49L3.29002 19.92L4.08002 20.71L7.51002 19.79C8.87244 20.5855 10.4224 21.0031 12 21C14.387 21 16.6762 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6762 3.94821 14.387 3 12 3ZM15 15.93L14.63 16.2L12 14.65L9.41002 16.2L9.00002 15.93L9.72002 13L7.44002 11L7.59002 10.57L10.59 10.3L11.77 7.53H12.23L13.41 10.3L16.41 10.57L16.56 11L14.28 13L15 15.93Z" fill="#222222"></path>
                                    </svg>
                                </span>
                                <div class="d-flex align-items-center ms-1">
                                    <p class="text-caption-13 fw-normal me-2">Buyers are raving!</p>
                                    <p class="text-caption-13">Multiple people gave 5-star reviews to this shop in the past 7 days.</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-review__body">
                            <div>
                                <div class="box-review__body-top mb-3">
                                    <div class="box-review--control d-flex">
                                        <button class="active">
                                            Reviews for this item
                                            <span>27</span>
                                        </button>
                                        <button>
                                            Reviews for this shop
                                            <span>9,199</span>
                                        </button>
                                    </div>
                                    <div class="box-review--sort d-flex justify-content-end">
                                        <div class="d-inline-flex position-relative">
                                            <button id="btn-sort-review" class="btn-etsy-main--small btn-hover-effect-sub align-items-center text-caption-13 fw-normal" aria-expanded="false">
                                                Sort by: Recommended
                                                <span class="etsy-icon--large">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <polygon points="16.5 10 12 16 7.5 10 16.5 10"></polygon>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="list-sort-review" style="min-width: 200.797px; padding-bottom: 0px; padding-top: 42px;">
                                                <button class="active btn-etsy-main--small text-caption-13 fw-normal justify-content-between">
                                                    Recommended
                                                </button>
                                                <button class="btn-etsy-main--small text-caption-13 fw-normal justify-content-between">
                                                    Newest
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-review__body-detail">
                                    <div class="wrapper-review-customer">
                                        <div class="review-customer">
                                            <div class="review-customer__infor d-flex align-items-center mb-2">
                                                <div class="me-3 d-flex align-items-center" style="width:36px; height: 36px; padding:6px; border-radius:50%;background-color:tomato">
                                                    <span>
                                                        Son
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="d-flex align-items-center text-caption-13 text-gray">
                                                        <a class="user-name-link" href="">Son Nguyen</a>
                                                        Jan 9, 2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-customer__main">
                                                <div class="review-customer-wrapper mb-2 d-flex flex-wrap">
                                                    <div class="content-review__text me-0 me-md-5">
                                                        <div class="user-rating mb-2">
                                                            <span class="d-flex align-items-center">
                                                                <span class="etsy-icon--small" data-rating="0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                            </span>
                                                        </div>
                                                        <div class="variation-infor">
                                                            <ul class="variation-infor__list">
                                                                <li class="variation-infor--item text-caption-13 me-3">
                                                                    <p class="d-inline-flex fw-normal">Sock/Bow Color:</p>
                                                                    <p class="d-inline-flex fw-light">pink/pink</p>
                                                                </li>
                                                                <li class="variation-infor--item text-caption-13 me-3">
                                                                    <p class="d-inline-flex fw-normal">Wrist-Pin On:</p>
                                                                    <p class="d-inline-flex fw-light">Pin-on</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content__main d-block position-relative">
                                                                <p class="text-comment text-caption-16 fw-light" aria-hidden="true">
                                                                    I just received the baby sock corsage . OMG I'm in love with this .
                                                                    I'm daughter is having her first baby in Sept so my mom and I are having her baby shower .
                                                                    I can't wait to pin this on her . It looks just like the picture but even better .
                                                                    It is beautiful and a wonderful keepsake for her.Arrived on time and perfectly wrapped .
                                                                    So excited! Thank You
                                                                </p>
                                                                <button class="btn-show-full-comment btn-etsy-main--small btn-hover-effect-sub width-btn-customize-small">

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-review__image d-flex align-items-start justify-content-end ">
                                                        <button class="btn-etsy-main">
                                                            <img class="img-fluid" src="../../assets/images/images_Home/box-more-products/il_1588xN.2963174736_82hq.jpg" alt="">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div>
                                                        <button class="btn-etsy-main--small btn-hover-effect-sub text-caption-13 fw-normal" style="margin:0 -15px;">
                                                            <span class="etsy-icon--small" style="line-height: 0; margin-right:2px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                    <path d="M5,19.053c-0.584,0-1.058-0.474-1.058-1.058v-10c0-0.584,0.474-1.058,1.058-1.058s1.058,0.474,1.058,1.058v10 C6.058,18.579,5.584,19.053,5,19.053z"></path>
                                                                    <path d="M20.318,11.382c0-0.509-0.35-0.92-0.817-1.051c-0.014-0.009-0.028-0.023-0.042-0.031l-0.481-0.12 c0.497-0.111,0.875-0.534,0.875-1.065c0-0.587-0.458-1.07-1.034-1.112c-0.046-0.024-4.412,0-4.412,0s1.08-2.647,0.664-4.573 c-0.224-1.035-1.075-1.263-1.25-0.904c-0.453,0.925-2.253,5.476-4.609,5.476c-0.926,0-2.221,0-2.221,0v9.996 c0,0,9.348,0.096,11.227-1.713c0.251-0.204,0.421-0.502,0.421-0.851c0-0.3-0.122-0.57-0.314-0.77c0.001,0,0.002-0.001,0.003-0.001 h0.404c0.626,0,1.134-0.508,1.134-1.134c0-0.353-0.171-0.656-0.424-0.864c-0.059-0.07-0.135-0.129-0.229-0.175 C19.822,12.49,20.318,11.994,20.318,11.382z"></path>
                                                                </svg>
                                                            </span>
                                                            Helpful ?
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-customer">
                                            <div class="review-customer__infor d-flex align-items-center mb-2">
                                                <div class="me-3 d-flex align-items-center" style="width:36px; height: 36px; padding:6px; border-radius:50%;background-color:tomato">
                                                    <span>
                                                        Ema
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="d-flex align-items-center text-caption-13 text-gray">
                                                        <a class="user-name-link" href="">Emma Watson</a>
                                                        Nov 22, 2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-customer__main">
                                                <div class="review-customer-wrapper mb-2 d-flex flex-wrap">
                                                    <div class="content-review__text me-0 me-md-5">
                                                        <div class="user-rating mb-2">
                                                            <span class="d-flex align-items-center">
                                                                <span class="etsy-icon--small" data-rating="0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                            </span>
                                                        </div>
                                                        <div class="variation-infor">
                                                            <ul class="variation-infor__list">
                                                                <li class="variation-infor--item text-caption-13 me-3">
                                                                    <p class="d-inline-flex fw-normal">Sock/Bow Color:</p>
                                                                    <p class="d-inline-flex fw-light">pink/pink</p>
                                                                </li>
                                                                <li class="variation-infor--item text-caption-13 me-3">
                                                                    <p class="d-inline-flex fw-normal">Wrist-Pin On:</p>
                                                                    <p class="d-inline-flex fw-light">Pin-on</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content__main d-block position-relative">
                                                                <p class="text-comment text-caption-16 fw-light" aria-hidden="false">
                                                                    This is the perfect Baby socks baby shower corsage for my friend Katie.
                                                                </p>
                                                                <button class="btn-show-full-comment btn-etsy-main--small btn-hover-effect-sub width-btn-customize-small">

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div>
                                                        <button class="btn-etsy-main--small btn-hover-effect-sub text-caption-13 fw-normal" style="margin:0 -15px;">
                                                            <span class="etsy-icon--small" style="line-height: 0; margin-right:2px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                    <path d="M5,19.053c-0.584,0-1.058-0.474-1.058-1.058v-10c0-0.584,0.474-1.058,1.058-1.058s1.058,0.474,1.058,1.058v10 C6.058,18.579,5.584,19.053,5,19.053z"></path>
                                                                    <path d="M20.318,11.382c0-0.509-0.35-0.92-0.817-1.051c-0.014-0.009-0.028-0.023-0.042-0.031l-0.481-0.12 c0.497-0.111,0.875-0.534,0.875-1.065c0-0.587-0.458-1.07-1.034-1.112c-0.046-0.024-4.412,0-4.412,0s1.08-2.647,0.664-4.573 c-0.224-1.035-1.075-1.263-1.25-0.904c-0.453,0.925-2.253,5.476-4.609,5.476c-0.926,0-2.221,0-2.221,0v9.996 c0,0,9.348,0.096,11.227-1.713c0.251-0.204,0.421-0.502,0.421-0.851c0-0.3-0.122-0.57-0.314-0.77c0.001,0,0.002-0.001,0.003-0.001 h0.404c0.626,0,1.134-0.508,1.134-1.134c0-0.353-0.171-0.656-0.424-0.864c-0.059-0.07-0.135-0.129-0.229-0.175 C19.822,12.49,20.318,11.994,20.318,11.382z"></path>
                                                                </svg>
                                                            </span>
                                                            Helpful ?
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-customer">
                                            <div class="review-customer__infor d-flex align-items-center mb-2">
                                                <div class="me-3 d-flex align-items-center" style="width:36px; height: 36px; padding:6px; border-radius:50%;background-color:tomato">
                                                    <span>
                                                        M
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="d-flex align-items-center text-caption-13 text-gray">
                                                        <a class="user-name-link" href="">Micheal Scofield</a>
                                                        Dec 29, 2020
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-customer__main">
                                                <div class="review-customer-wrapper mb-2 d-flex flex-wrap">
                                                    <div class="content-review__text me-0 me-md-5">
                                                        <div class="user-rating mb-2">
                                                            <span class="d-flex align-items-center">
                                                                <span class="etsy-icon--small" data-rating="0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                                <span class="etsy-icon--small" data-rating="3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 18 18" aria-hidden="true" focusable="false">
                                                                        <path d="M20.83,9.15l-6-.52L12.46,3.08h-.92L9.18,8.63l-6,.52L2.89,10l4.55,4L6.08,19.85l.75.55L12,17.3l5.17,3.1.75-.55L16.56,14l4.55-4Z"></path>
                                                                    </svg></span>
                                                            </span>
                                                        </div>
                                                        <div class="variation-infor">
                                                            <ul class="variation-infor__list">
                                                                <li class="variation-infor--item text-caption-13 me-3">
                                                                    <p class="d-inline-flex fw-normal">Sock/Bow Color:</p>
                                                                    <p class="d-inline-flex fw-light">pink/pink</p>
                                                                </li>
                                                                <li class="variation-infor--item text-caption-13 me-3">
                                                                    <p class="d-inline-flex fw-normal">Wrist-Pin On:</p>
                                                                    <p class="d-inline-flex fw-light">Pin-on</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content__main d-block position-relative">
                                                                <p class="text-comment text-caption-16 fw-light" aria-hidden="false">
                                                                    Live it, was a great touch to the virtual shower
                                                                </p>
                                                                <button class="btn-show-full-comment btn-etsy-main--small btn-hover-effect-sub width-btn-customize-small">

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div>
                                                        <button class="btn-etsy-main--small btn-hover-effect-sub text-caption-13 fw-normal" style="margin:0 -15px;">
                                                            <span class="etsy-icon--small" style="line-height: 0; margin-right:2px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                    <path d="M5,19.053c-0.584,0-1.058-0.474-1.058-1.058v-10c0-0.584,0.474-1.058,1.058-1.058s1.058,0.474,1.058,1.058v10 C6.058,18.579,5.584,19.053,5,19.053z"></path>
                                                                    <path d="M20.318,11.382c0-0.509-0.35-0.92-0.817-1.051c-0.014-0.009-0.028-0.023-0.042-0.031l-0.481-0.12 c0.497-0.111,0.875-0.534,0.875-1.065c0-0.587-0.458-1.07-1.034-1.112c-0.046-0.024-4.412,0-4.412,0s1.08-2.647,0.664-4.573 c-0.224-1.035-1.075-1.263-1.25-0.904c-0.453,0.925-2.253,5.476-4.609,5.476c-0.926,0-2.221,0-2.221,0v9.996 c0,0,9.348,0.096,11.227-1.713c0.251-0.204,0.421-0.502,0.421-0.851c0-0.3-0.122-0.57-0.314-0.77c0.001,0,0.002-0.001,0.003-0.001 h0.404c0.626,0,1.134-0.508,1.134-1.134c0-0.353-0.171-0.656-0.424-0.864c-0.059-0.07-0.135-0.129-0.229-0.175 C19.822,12.49,20.318,11.994,20.318,11.382z"></path>
                                                                </svg>
                                                            </span>
                                                            Helpful ?
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-pagination">
                                <ul class="pagination-list hide-on-pc">
                                    <li>
                                        <a href="">
                                            <span class="etsy-icon etsy-icon--large"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M6.7 11.3L6 12l.7.7 4 4c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L9.8 13H17c.6 0 1-.4 1-1s-.4-1-1-1H9.8l2.3-2.3c.2-.2.3-.4.3-.7 0-.6-.4-1-1-1-.3 0-.5.1-.7.3l-4 4z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="etsy-icon etsy-icon--large"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M17.3 12.7l.7-.7-.7-.7-4-4c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l2.3 2.3H7c-.6 0-1 .4-1 1s.4 1 1 1h7.2l-2.3 2.3c-.2.2-.3.4-.3.7 0 .6.4 1 1 1 .3 0 .5-.1.7-.3l4-4z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pagination-list hide-on-mobie-tablet">
                                    <li>
                                        <a href="">
                                            <span class="etsy-icon etsy-icon--large"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M6.7 11.3L6 12l.7.7 4 4c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L9.8 13H17c.6 0 1-.4 1-1s-.4-1-1-1H9.8l2.3-2.3c.2-.2.3-.4.3-.7 0-.6-.4-1-1-1-.3 0-.5.1-.7.3l-4 4z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="active">
                                            1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">2</a>
                                    </li>
                                    <li>
                                        <a href="">3</a>
                                    </li>
                                    <li>
                                        <a href="">4</a>
                                    </li>
                                    <li>
                                        <a href="">5</a>
                                    </li>
                                    <li>
                                        <a href="">...</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="etsy-icon etsy-icon--large"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                    <path d="M17.3 12.7l.7-.7-.7-.7-4-4c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l2.3 2.3H7c-.6 0-1 .4-1 1s.4 1 1 1h7.2l-2.3 2.3c-.2.2-.3.4-.3.7 0 .6.4 1 1 1 .3 0 .5-.1.7-.3l4-4z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-review__photo">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
    <script src="{{asset('')}}"></script>
@endsection