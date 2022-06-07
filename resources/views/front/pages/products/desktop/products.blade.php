
<div class="products">
    <div class="mobile-one-column">
        <div class="column">
            @if(isset($products))
                @foreach($products as $product)
                
                    <!-- <div class="main-category">
                            <div class="main-category-title">
                                <h2>{$product->title!!}</h2>
                            </div>
                            <div class="main-category-elements">
                                <ul>
                                    <li><h3>{$product->title!!}</h3></li>
                                    <li><h3>{$product->title!!}</h3></li>
                                    <li><h3>{$product->title!!}</h3></li>
                                    <li><h3>{$product->price!!}</h3></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="column-main">
                        <!-- <div class="products-options">
                                <div class="mobile-two-columns">
                                <div class="column">
                                        <div class="products-options-counter">
                                        <h4>Se están enseñando 10 recetas 100</h4>
                                    </div> -->
                                <!-- </div> -->
                                <!-- <div class="column">
                                    <div class="products-options-filter">
                                            <select name="selectors">
                                            <option>Todas</option>
                                            <option>Italia</option>
                                            <option>Portugal</option>
                                            <option>Costa azul y Provenza</option>
                                        </select>
                                    </div>   -->
                                <!-- </div> 
                            </div> 
                        </div> -->
                        <div class="products-gallery">
                            <div class="mobile-one-column">
                                <div class="up">
                                        <div class="product">
                                            <h3>{{$product->name}}</h3>

                                            <img src="images/productsgallery4.jpg">
                                            <div class="product-info">
                                                {{$product->price}}
                                                {{$product->features}}
                                            </div>
                                            <div class="pick-button">
                                                <button type="submit" class="add">{{$product->name}}</button>
                                            </div>
                                        </div>
                                </div>
                                <div class="up">
                                    <div class="product">
                                        <h3>{{$product->name}}</h3>
                                        <img src="images/productsgallery4.jpg">
                                        <div class="product-info">
                                            {{$product->price}}
                                            {{$product->features}}
                                        </div>
                                            <div class="pick-button">
                                                <button type="submit" value="1" class="add">{{$product->name!!}}</button>
                                            </div>
                                    </div>
                                </div>
                                <div class="up">
                                    <div class="product">
                                        <h3>{{$product->name}}</h3>
                                        <img src="images/productsgallery4.jpg">
                                        <div class="product-info">
                                            {{$product->price}}
                                            {{$product->features}}
                                        </div>
                                            <div class="pick-button">
                                                <button type="submit" value="1" class="add">{{$product->name}}</button>
                                            </div>
                                    </div>
                                </div>
                                

                            </div>

                            <div class="mobile-one-column">
                                <div class="down">
                                    <div class="product">
                                        <h3>{{$product->name}}</h3>
                                        <img src="images/productsgallery4.jpg">
                                        <div class="product-info">
                                            {{$product->price}}
                                            {{$product->features}}
                                        </div>
                                            <div class="pick-button">
                                                <button type="submit" value="1" class="add">{{$product->name}}</button>
                                            </div>
                                    </div>
                                </div>
                                <div class="down">
                                    <div class="product">
                                        <h3>{{$product->name}}</h3>
                                        <img src="images/productsgallery4.jpg">
                                        <div class="product-info">
                                            {{$product->price}}
                                           {{$product->features}}
                                        </div>

                                            <div class="pick-button">
                                                <button type="submit" value="1" class="add">{{$product->name}}</button>
                                            </div>
                                    </div>
                                </div>
                                <div class="down">
                                    <div class="product">
                                        <h3>{{$product->name}}</h3>
                                        <img src="images/productsgallery4.jpg">
                                        <div class="product-info">
                                            {{$product->price}}
                                            {{$product->features}}
                                        </div>
                                            <div class="pick-button-button">
                                                <button type="submit" value="1" class="add">{{$product->name}}</button>
                                            </div>
                                    </div>
                                </div>
                        </div>
                @endforeach
            @endif
                
                    
                