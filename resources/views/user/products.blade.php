@extends('user.layout')

@php
    $wrapperId = 'templatemo_wrapper_sp';
    $headerId = 'templatemo_header_wsp';
    $header_home_subpage = 'header_subpage';
@endphp

@section('content')
    <div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <li><a href="#">Nulla odio ipsum</a></li>
                    <li><a href="#">Suspendisse posuere</a></li>
                    <li><a href="#">Aliquam euismod</a></li>
                    <li><a href="#">Curabitur ac mauris</a></li>
                    <li><a href="#">Mauris nulla tortor</a></li>
                    <li><a href="#">Nullam ultrices</a></li>
                    <li><a href="#">Vivamus scelerisque</a></li>
                    <li><a href="#">Suspendisse posuere</a></li>
                    <li><a href="#">Quisque vel justo</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="{{ asset('images/templatemo_image_01.jpg')}}" alt="Flowers" />
                <a href="#">Citrus Burst Bouquet</a>
                <p>
                	Price:
                    <span class="price normal_price">$160</span>&nbsp;&nbsp;
                    <span class="price special_price">$100</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
		<h2>Products</h2>
        <p>Cras aliquam, mi nec imperdiet volutpat, ligula est consequat odio, eu auctor urna augue eu quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum nec nunc ac hendrerit. Morbi lacinia placerat diam sit amet fringilla. Integer accumsan suscipit suscipit. Mauris non nunc sit amet turpis pharetra mattis. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
  <div class="product_box">
            <a href="/productdetail"><img src="{{ asset('images/product/01.jpg')}}" alt="floral set 1" /></a>
      		<h3>Ut eu feugiat</h3>
            <p class="product_price">$240</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>        	
        <div class="product_box">
            <a href="/productdetail"><img src="{{ asset('images/product/02.jpg')}}" alt="flowers 2" /></a>
            <h3>Donec Est Nisi</h3>
          	<p class="product_price">$160</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>        	
        <div class="product_box">
            <a href="/productdetail"><img src="{{ asset('images/product/03.jpg')}}" alt="floral 3" /></a>
            <h3>Tristique Vitae</h3>
          <p class="product_price">$140</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>      	
        <div class="product_box no_margin_right">
            <a href="/productdetail"><img src="{{ asset('images/product/04.jpg')}}" alt="flowers 4" /></a>
            <h3>Hendrerit Eu</h3>
            <p class="product_price">$320</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>
        
        <div class="product_box">
            <a href="/productdetail"><img src="{{ asset('images/product/05.jpg')}}" alt="floral set 5" /></a>
            <h3>Tincidunt Nisi</h3>
          	<p class="product_price">$150</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>        	
        <div class="product_box">
            <a href="/productdetail"><img src="{{ asset('images/product/07.jpg')}}" alt="flowers 7" /></a>
            <h3>Curabitur et turpis</h3>
            <p class="product_price">$110</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>        	
        <div class="product_box">
            <a href="/productdetail"><img src="{{ asset('images/product/06.jpg')}}" alt="flower set 6" /></a>
            <h3>Mauris consectetur</h3>
            <p class="product_price">$130</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>        	
        <div class="product_box no_margin_right">
            <a href="/productdetail"><img src="{{ asset('images/product/08.jpg')}}" alt="floral 8" /></a>
            <h3>Proin volutpat</h3>
            <p class="product_price">$170</p>
            <p class="add_to_cart">
                <a href="/productdetail">Detail</a>
                <a href="/shoppingcart">Add to Cart</a>
            </p>
        </div>
        <div class="blank_box">
        	<a href="#" class="button left">Previous</a> 
            <a href="#" class="button right">Next Page</a>
        </div>
        <div class="cleaner h20"></div>
    	<div class="blank_box">
        	<a href="#"><img src="{{ asset('images/free_shipping.jpg')}}" alt="Free Shipping" /></a>
        </div>    
    </div>
    <div class="cleaner"></div>
@endsection