@extends('front.layout.master')
@section('title', 'Shop')
@section('body')
<!--Breadcrumb section begin(giup dinh vi vi tri ban dang o dau trong web)-->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section end-->
<!--Product shop section begin-->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
               @include('front.shop.components.products-sidebar-filter')

            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">

                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <form action="">
                            <div class="select-option">
                                <select name="sort_by" class="sorting" onchange="this.form.submit();">
                                    <option {{ request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">Latest</option>
                                    <option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">Oldest</option>
                                    <option {{ request('sort_by') == 'name-ascending' ? 'selected' : '' }} value="name-ascending">Name A-Z </option>
                                    <option {{ request('sort_by') == 'name-descending' ? 'selected' : '' }} value="name-descending">Name Z-A </option>
                                    <option {{ request('sort_by') == 'price-ascending' ? 'selected' : '' }} value="price-ascending">Price Ascending</option>
                                    <option {{ request('sort_by') == 'price-descending' ? 'selected' : '' }} value="price-descending">Price Descending</option>
                                </select>
                                <select name="show" class="p-show" onchange="this.form.submit();">
                                    <option {{ request('show') == '3' ? 'selected' : '' }} value="3">Show: 3</option>
                                    <option {{ request('show') == '6' ? 'selected' : '' }} value="6">Show: 6</option>
                                    <option {{ request('show') == '9' ? 'selected' : '' }} value="9">Show: 9</option>
                                </select>
                            </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">

                        </div>
                    </div>

        </div>
                <div class="product-list">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-sm-6">
                    @include('front.components.product-item', ['product' => $product])
                </div>
                @endforeach
            </div>

        </div>
                {{$products->links()}}
    </div>

</section>
<!--Product shop section end-->
@endsection
