@extends('frontend.master_dashboard')
@section('main')

    <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> <a href="shop-grid-right.html">Lab Materials</a> <span></span> Erlenmeyer Flask
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50 mt-30">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="{{asset('frontend/assets/imgs/shop/lab-material-1.jpg')}}" alt="product image" />
                                        </figure>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <div><img src="{{asset('frontend/assets/imgs/shop/lab-material-1.jpg')}}" alt="product image" /></div>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <h2 class="title-detail">Erlenmeyer Flask</h2>
                                    
                                    <div class="short-desc mb-30">
                                        <p class="font-lg">These 500 mL PYREX® Erlenmeyer flasks are designed with heavy duty rims to reduce chipping. Their uniform wall thickness provides the proper balance between mechanical strength and thermal shock resistance. Approximate graduations are in durable white enamel. An extra large marking space is also provided.</p>
                                    </div>
                                    <div class="attr-detail attr-size mb-30">
                                        <strong class="mr-10">Size / Weight: </strong>
                                        <ul class="list-filter size-filter font-small">
                                            <li><a href="#">500 ml</a></li>
                                        </ul>
                                    </div>
                                    <div class="detail-extralink mb-50">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
<div class="font-xs">
    <ul class="mr-50 float-start">
        <li class="mb-5">Type: <span class="text-brand">Heavy duty rim</span></li>
        <li class="mb-5">Neck Style: <span class="text-brand">Narrow mouth</span></li>
        <li class="mb-5">Feature: <span class="text-brand">Reusable</span></li>
        <li class="mb-5">Height: <span class="text-brand">176 mm</span></li>
        <li class="mb-5">O.D: <span class="text-brand">101 mm</span></li>
        <li class="mb-5">Sterile: <span class="text-brand">No</span></li>
        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
        <li>LIFE: <span class="text-brand">70 days</span></li>
    </ul>
    <ul class="float-start">
        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
        <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a href="#" rel="tag">Organic</a>, <a href="#" rel="tag">Brown</a></li>
        <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span></li>
    </ul>
</div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                            <div class="tab-pane fade show active" id="Description">
                                <div class="">
                                    <p>The Erlenmeyer Flask is a type of laboratory flask which features a flat bottom, a conical body, and a cylindrical neck. It is commonly used in educational and research laboratories for mixing, heating, and storing liquids.</p>
                                    <p>These flasks are made from high-quality borosilicate glass, which provides excellent thermal resistance and durability. They are available in various sizes to suit different laboratory needs.</p>
                                    <ul class="product-more-infor mt-30">
                                        <li><span>Material</span> Borosilicate Glass</li>
                                        <li><span>Color</span> Clear</li>
                                        <li><span>Capacity</span> 50ml, 100ml, 250ml, 500ml, 1000ml</li>
                                        <li><span>Graduations</span> White Enamel</li>
                                        <li><span>Neck Style</span> Narrow Mouth</li>
                                    </ul>
                                    <hr class="wp-block-separator is-style-dots" />
                                    <p>The Erlenmeyer Flask is designed to provide accurate measurements and easy mixing of solutions. The narrow neck helps to prevent spills and splashes, making it ideal for use in a laboratory environment.</p>
                                    <h4 class="mt-30">Packaging & Delivery</h4>
                                    <hr class="wp-block-separator is-style-wide" />
                                    <p>Each flask is individually wrapped to prevent damage during handling. They are packed in sturdy cartons to ensure they arrive safely at your laboratory.</p>
                                    <p>We ensure that the flasks are delivered promptly to meet your laboratory needs. Our packaging is designed to protect the flasks from any potential damage during transit.</p>
                                    <h4 class="mt-30">Suggested Use</h4>
                                    <ul class="product-more-infor mt-30">
                                        <li>Use for mixing, heating, and storing liquids.</li>
                                        <li>Ideal for use in chemistry and biology laboratories.</li>
                                    </ul>
                                    <h4 class="mt-30">Other Information</h4>
                                    <ul class="product-more-infor mt-30">
                                        <li>Autoclavable for easy sterilization.</li>
                                        <li>Resistant to thermal shock and chemical corrosion.</li>
                                        <li>Designed for long-term use in laboratory environments.</li>
                                    </ul>
                                    <h4 class="mt-30">Warnings</h4>
                                    <ul class="product-more-infor mt-30">
                                        <li>Handle with care to avoid breakage.</li>
                                        <li>Do not expose to sudden temperature changes.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Additional-info">
                                <table class="font-md">
                                    <tbody>
                                        <tr class="material">
                                            <th>Material</th>
                                            <td>
                                                <p>Borosilicate Glass</p>
                                            </td>
                                        </tr>
                                        <tr class="color">
                                            <th>Color</th>
                                            <td>
                                                <p>Clear</p>
                                            </td>
                                        </tr>
                                        <tr class="capacity">
                                            <th>Capacity</th>
                                            <td>
                                                <p>50ml, 100ml, 250ml, 500ml, 1000ml</p>
                                            </td>
                                        </tr>
                                        <tr class="graduations">
                                            <th>Graduations</th>
                                            <td>
                                                <p>White Enamel</p>
                                            </td>
                                        </tr>
                                        <tr class="neck-style">
                                            <th>Neck Style</th>
                                            <td>
                                                <p>Narrow Mouth</p>
                                            </td>
                                        </tr>
                                        <tr class="autoclavable">
                                            <th>Autoclavable</th>
                                            <td>
                                                <p>Yes</p>
                                            </td>
                                        </tr>
                                        <tr class="thermal-shock-resistance">
                                            <th>Thermal Shock Resistance</th>
                                            <td>
                                                <p>High</p>
                                            </td>
                                        </tr>
                                        <tr class="chemical-resistance">
                                            <th>Chemical Resistance</th>
                                            <td>
                                                <p>High</p>
                                            </td>
                                        </tr>
                                        <tr class="usage">
                                            <th>Usage</th>
                                            <td>
                                                <p>Mixing, Heating, Storing Liquids</p>
                                            </td>
                                        </tr>
                                        <tr class="ideal-for">
                                            <th>Ideal For</th>
                                            <td>
                                                <p>Chemistry and Biology Laboratories</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection