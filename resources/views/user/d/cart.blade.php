@extends('layouts.layout')

@section('content')
<div class="container-fluid pt-5" style="height: 100%">
        <div class="container">
        
             

    <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2">
            <h4>Add in Your Cart</h4>
        </div>

        <table class="pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>total</th>
            </tr>


         
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{asset('asset/img/product-1.png')}}">
                                <div>
                                    <p>{{$data->name}}</p>
                                    <small><span>$</span>{{$data->price}}</small>
                                    <br>
                                    <form method="post" action=""> 
                                      
                                        <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                                    </form>
                                </div>
                            </div>
                        </td>

                        <td>
                        <form method="post" action="{{route('cart-store')}}">
                @csrf
                <input type="hidden"  name="id" value="{{$data->id}}" />
                                <input type="number" id="quantity" name="quantity" value="1" min="1">
                               
                                
                           
                        </td>

                        <td>
                            $<span class="product-price" id="price">{{$data->price}}</span>
                        </td>
                    </tr>
           

        </table>


        

        <div class="checkout-container">
       
           
               
                <input type="submit" class="btn checkout-btn" value="Add to order" name="">
            </form>
          
        
        </div>





    </section>

              
        
        </div>
    </div>
    <!-- Cart End -->
@endsection
@section ('script')
<script>
  var quantity=document.getElementById('quantity');
  quantity.addEventListener('change',()=>{
    document.getElementById('price').innerText=quantity.value*{{$data->price}};
  })
      //  document.getElementById('price').innerText= $("input[name='quantity']").val();
   
  
</script>
@endsection