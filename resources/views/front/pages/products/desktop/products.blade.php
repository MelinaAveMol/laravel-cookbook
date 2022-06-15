<div class="products">
    <div class="mobile-one-column">
        <div class="column">
            <div class="shop">
                <div class="desktop-two-columns-aside mobile-one-columns">
                    <div class="column-aside column">
                        <div class="shop-categories">
                            <div class="shop-categories-title">
                                <h2>Categorias</h2>
                            </div>
                            <div class="shop-categories-elements desktop-only" data url="{{route('front_products')}}">
                                <div class="shop-categories-element">


                                    @if(isset($products))
                                        @foreach($product_categories as $category_element)
                                            <h3 class="category" {{isset($category)&& $category->id == $category_element->id ? 'active' : ''}}</h3>
                                        @endforeach
                                    @endif

                                    <form class="front-form" data-url="{{route('front_product_filter')}}">
                                        <input type="search" name="filter-box" placeholder="Introduce tu receta" value="">  
                                        
                                    </form>
                                   
                                    <button class="filter-button" value="">filtrar</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column-main column">
                        <div class="shop-articles">
                            <div class="shop-articles-sections-cards">
                                <div class="desktop-three-columns mobile-one-column">
                                    @if(isset($products))
                                        @foreach($products as $product)
                                            <div class="column">
                                                <div class="shop-articles-sections-cards-content form-content">
                                                    <div class="shop-articles-sections-cards-content-image">
                                                    </div>
                                                    
                                                    <div class="shop-articles-sections-cards-content-title">
                                                        <h3>{{$product->title}}</h3>
                                                    </div>
                                                    <div class="shop-articles-sections-cards-content-price">
                                                        <span>{{$product->price}}</span>
                                                    </div>
                                                    <div class="shop-articles-sections-cards-content-button" data-url="{{route('front_product', ['product' => $product->id])}}">
                                                        <button class="filter-button" data-url="{{route('front_product_filter')}}"> COMPRAR </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 
        </div>
    </div>
</div>
                    
                