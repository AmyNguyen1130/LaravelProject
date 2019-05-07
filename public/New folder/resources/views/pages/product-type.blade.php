@extends("layouts/master")

@section("content")

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach($product_types as $type)
                        <li><a href="product-type/{{ $type->id }}">{{ $type->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>{{ $current_type->name }}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($products) }} styles found</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($products as $product)

                            <div class="col-sm-4" style="height: 400px">
                                <div class="single-item">

                                    @if($product->promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif

                                    <div class="single-item-header">
                                        <a href="product-detail/{{ $product->id }}"><img src="public/source/image/product/{{ $product->image }}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $product->name }}</p>
                                        <p class="single-item-price">
                                            <span>${{ $product->unit_price }}</span>
                                            @if($product->promotion_price != 0)
                                            <span class="flash-sale">${{ $product->promotion_price }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product-detail/{{ $product->id }}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Top Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($top_products) }} styles found</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($top_products as $product)

                            <div class="col-sm-4" style="height: 400px">
                                <div class="single-item">

                                    @if($product->promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif

                                    <div class="single-item-header">
                                        <a href="product-detail/{{ $product->id }}"><img src="public/source/image/product/{{ $product->image }}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $product->name }}</p>
                                        <p class="single-item-price">
                                            <span>${{ $product->unit_price }}</span>
                                            @if($product->promotion_price != 0)
                                            <span class="flash-sale">${{ $product->promotion_price }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product-detail/{{ $product->id }}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection