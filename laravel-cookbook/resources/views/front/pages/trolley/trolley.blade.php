@extends('front.layout.master')

@section('content')
    <div class="trolley">
        <div class="mobile-two-columns">
            <div class="trolley-title">
                <h3>Cookin'soul</h3>
            </div>
            <div class="menu-button-mobile">
                <div class="index hamburger " id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div>
        </div>
        <div class="mobile one column">
            <div class="column">
                <table>
                    <caption>Cesta</caption>
                    <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                    <tr>
                        <td>Curso 1</td>
                        <td>250€</td>
                        <td>
                            <div class="plus-minus-button">
                                <div class="minus">
                                    <button class="minus">-</button>
                                </div>
                                <div class="show">
                                    <input class="show" type="number" value="1">
                                </div>
                                <div class="plus">
                                    <button class="plus">+</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="" src="img/" alt="">
                        </td>
                        <td>Curso 2</td>
                        <td>300€</td>
                        <td>
                            <div class="amount-button">
                                <div class="minus">
                                    <button>-</button>
                                </div>
                                <div class="show">
                                    <input class="amount" type="number"  value="1">
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cart-resume-table">
                <table>
                    <caption>Resumen de la compra</caption>
                    <tr>
                        <th>IVA</th>
                        <td>106.34€</td>
                    </tr>
                    <tr>
                        <th>Transporte</th>
                        <td>0€</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>612.72 €</td>
                    </tr>
                </table>
                <div class="cart-buttons">
                    <div class="purchase-button">
                        <button>Atrás</button>
                    </div>
                    <div class="cancel-button">
                        <button>Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile two columns">
            <div class="column">
            </div>
        </div>
        <div class="column">
            <div class="main-trolley">
                <table class="products">
                    <tr>
                        <th>Talleres</th>
                        <th>Precio</th>
                        <th>Días</th>
                    </tr>
                    <tr>
                        <td class="image">
                            <img src="images/trolleyproduct.jpg">
                        </td> 
                        <td class="description">
                            Taller1
                        </td>
                        
                        <td class="price">
                            180€
                        </td>
                        
                    </tr>
                    <tr>
                        <td class="image">
                            <img src="images/trolleyproduct.jpg">
                        </td>  
                        <td class="description">
                            Taller2
                        </td>
                        
                        <td class="price">
                            250€
                        </td>
                    </tr>
                </table>
            </div> 
        </div>
    </div>

@endsection