@extends('front.layout.master')

@section('title','Product')
@section('body')
     <!--Breadcrumb section begin(giup dinh vi vi tri ban dang o dau trong web)-->
     <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <a href="index.blade.php"><i class=""></i>Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->
    <!--Product Shop section begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    @include('front.shop.components.products-sidebar-filter')

                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="front/img/products/{{$product->productImage[0]->path}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>

                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">

                                    @foreach($product->productImage as $productImage)
                                    <div class="pt active" data-imgbigurl="front/img/products/{{$productImage->path}}">
                                        <img src="front/img/products/{{$productImage->path}}" alt="">

                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{$product->tag}}</span>
                                    <h3>{{$product->name}}</h3>
                                    <a href="#" class="'heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">

                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $avgRating)
                                    <i class="fa fa-star"></i>
                                    @else

                                    <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                    <!-- tạo sao đánh giá -o là không có sao -->
                                    <span>({{$avgRating}})</span>

                                </div>
                                <div class="pd-desc">
                                    <p>{{$product->content}}</p> <!--giới thiệu về sản phẩm-->

                                    @if($product->discount != null)
                                    <h4>${{$product->discount}}<span>${{$product->price}}</span></h4>  <!--giá sản phẩm-->
                                    @else
                                    <h4>${{$product->price}}</h4>
                                    @endif
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        @foreach(array_unique(array_column($product->productDetail->toArray(), 'color')) as $productColor)
                                        <div class="cc-item">
                                            <input type="radio" id="cc-{{$productColor}}">
                                            <label for="cc-{{$productColor}}" class="cc-{{$productColor}}"></label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    @foreach(array_unique(array_column($product->productDetail->toArray(), 'size')) as $productSize)

                                    <div class="sc-item">
                                        <input type="radio" id="{{$productSize}}-size">
                                        <label for="{{$productSize}}-size" class="{{$productSize}}-size">{{$productSize}}</label>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="primary-btn pd-card">Add To Card</a>

                                    </div>

                                </div>
                                <ul class="pd-tags">
                                <li><span>CATEGORIES</span>: {{$product->productcategory->name}}</li>
                                <li><span>TAGS</span>: {{$product->tag}}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : {{$product->sku}}</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">DESCRIPTION</a></li>
                                <li><a href="#tab-2" data-toggle="tab" role="tab">SPECIFICATIONS</a></li>
                                <li><a href="#tab-3" data-toggle="tab" role="tab">Customer Reviews ({{count($product->productComment)}})</a></li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                     {!! $product->description !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="specification-table">

                                            <table>
                                                <tr>
                                                    <td class="p-catagory">Customer Rating</td>
                                                    <td>
                                                        <div class="pd-rating">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                @if($i <= $avgRating)
                                                                    <i class="fa fa-star"></i>
                                                                @else

                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            @endfor
                                                            <!-- tạo sao đánh giá -o là không có sao -->
                                                            <span>({{$avgRating}})</span>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Price</td>
                                                    <td>
                                                        <div class="p-price">
                                                            ${{$product->price}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Add To Card</td>
                                                    <td>
                                                        <div class="card-add">+ add to card</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Availability</td>
                                                    <td>
                                                        <div class="p-stock">{{$product->qty}}</div> <!-- tồn kho-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Weight</td>
                                                    <td>
                                                        <div class="p-weight">{{$product->weight}}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Size</td>
                                                    <td>
                                                        <div class="p-size">
                                                            @foreach(array_unique(array_column($product->productdetail->toArray(), 'size')) as $productSize)
                                                          {{$productSize}}
                                                        @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Color</td>
                                                    <td>
                                                        <div class="cs-color">

                                                        @foreach(array_unique(array_column($product->productdetail->toArray(), 'color')) as $productColor)
                                                                <span class="cs-{{$productColor}}"></span>
                                                        @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Sku</td>
                                                    <td>
                                                        <div class="p-code">{{$product->sku}}</div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                  <div class="customer-review-option">
                                    <h4>{{count($product->productComment)}} Comments</h4>
                                    <div class="comment-option">
                                        @foreach($product->productComment as $productComment)
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="front/img/user/{{$productComment->user->avatar ?? 'default-avatar.png'}}" atl="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">

                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $productComment->rating)
                                                            <i class="fa fa-star"></i>
                                                        @else

                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
                                                    <!-- tạo sao đánh giá -o là không có sao -->
                                                </div>
                                            </div>
                                            <h5>{{$productComment->name}},<span> {{date('M d, Y', strtotime($productComment->created_at))}}</span></h5>
                                            <div class="at-reply">{{$productComment->messages}}</div>
                                        </div>
                                        @endforeach

                                    <div class="leave-comment">
                                        <h4>Leave A Comment</h4>
                                        <form action="" method="post" class="comment-form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <input type="hidden" name="user_id" value="{{Illuminate\Support\Facades\Auth::user()->id ?? null}}">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name" name="name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email" name="email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages" name="messages"></textarea>
                                                    <div class="rate">
                                                        <div class="personal-rating">
                                                            <h6>Your Rating</h6>
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="site-btn">Send Messages</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>


            </div>

        </div>

    </section>
    <!--Product Shop section end -->
    <!--Realeted Products section begin-->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                       <h2>Realeted Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($relatedProducts as $relatedProduct)
                <div class="col-lg-3 col-sm-6">
                    @include('front.components.product-item', ['product' => $relatedProduct])

                </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Realeted Products section end -->
@endsection
