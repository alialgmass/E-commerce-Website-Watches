@extends('layouts.layout') @section('content')

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <section class="cart container mt-2 my-3 py-5">
            <div class="container mt-2">
                <h4>Your Cart</h4>
            </div>

            <table class="pt-5">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                @isset($data) @foreach($data as $d)

                <tr>
                    <td>
                        <div class="product-info">
                            <img style="width: 75px; height: 75px" src="" />
                            <div>
                                <p>{{$d->product->name}}</p>
                                <small
                                    ><span>$</span
                                    >{{$d->product->sale_price}}</small
                                >
                                <br />
                                <form>
                                    <input
                                        type="submit"
                                        name="remove_btn"
                                        class="remove-btn"
                                        value="remove"
                                    />
                                </form>
                            </div>
                        </div>
                    </td>

                    <td>
                        <form>
                            <input
                                type="text"
                                name="quantity"
                                value="{{$d['quantity']}}"
                                readonly
                            />

                            <input
                                type="submit"
                                value="edit"
                                class="edit-btn"
                                name="edit_product_quantity_btn"
                            />
                        </form>
                    </td>

                    <td>
                        <span class="product-price"
                            >$ {{ $d['quantity'] *
                            $d->product->sale_price}}</span
                        >
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="cart-total">
                <table>
                    <tr>
                        <td>Total</td>

                        <td>{{$data->total}}</td>
                    </tr>
                </table>
            </div>

            @endisset
            <div class="checkout-container">
                <form method="get" action="{{route('checkout')}}">
                    <input
                        type="submit"
                        class="btn checkout-btn"
                        value="Checkout"
                        name=""
                    />
                </form>
            </div>
        </section>
    </div>
</div>
<!-- Cart End -->

@endsection
