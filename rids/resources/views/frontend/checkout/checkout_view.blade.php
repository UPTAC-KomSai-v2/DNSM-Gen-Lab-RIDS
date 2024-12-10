@extends('frontend.master_dashboard')
@section('main')
@section('title')
   Checkout Page 
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a> 
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Checkout</h3>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are reservations in your cart</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
    
    <div class="row">
        <h4 class="mb-30">Reservation Details</h4>
    <form method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <input type="text" required="" name="name" placeholder="Name *">
            </div>
            <div class="form-group col-lg-6">
                <input type="text" required="" name="section" placeholder="Section *">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <input type="text" required="" name="course_in_charge" placeholder="Course In-Charge *">
            </div>
            <div class="form-group col-lg-6">
                <input type="date" required="" name="date_of_use" placeholder="Date of Use *">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <input type="time" required="" name="time_of_use" placeholder="Time of Use *">
            </div>
        </div>
        <div class="form-group mb-30">
            <textarea rows="5" name="additional_information" placeholder="Additional Information"></textarea>
        </div>
    </form>
                    </div>
                </div>

                
<div class="col-lg-5">
<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Your Reservations</h4>
        <h6 class="text-muted">Subtotal</h6>
    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">
        <table class="table no-border">
            <tbody>
                
                <tr>
                    <td class="image product-thumbnail"><img src="{{asset('frontend/assets/imgs/shop/lab-material-1.jpg')}}" alt="#"></td>
                    <td>
                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Erlenmeyer Flask</a></h6></span>
                        <div class="product-rate-cover">

                         <strong>Color : </strong>
                         <strong>Size : </strong>
                             
                        </div>
                    </td>
                    <td>
                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                    </td>
                    <td>
                        <h4 class="text-brand">$0.00</h4>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
                    <div class="payment ml-30">
                        <a href="#" class="btn btn-fill-out btn-block mt-30">Place reservation<i class="fi-rs-sign-out ml-15"></i></a>
                    </div>
                </div>
            </div>
        </div>


@endsection