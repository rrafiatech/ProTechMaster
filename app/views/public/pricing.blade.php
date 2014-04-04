@extends('public.master')
@section('title')
    Pricing
@stop
@section('content')
    <div id="header-btm">

            <div class="container">
                <h4 class="heading-icon clearfix"> <img src="assets/img/icons/heading-icon-tag.png" width="40" height="40" alt="icon" class="icon-small-bg">
                     <?php echo ucfirst(Request::segment(1));?>
                </h4>
            </div>

    </div>
    <div class="container">
        <div class="pricing-intro">
            <h2><span class="orange">Flexible & Affordable</span> plans to suite your business!</h2>
        </div>
        <div class="clearfix pricing four-col">
        <!--pricing first column starts-->
        <div class="price-column first">
            <div class="table-th">
                <h4>Standard </h4>
                <sup>$</sup>59<sup>.99</sup>/mo </div>
            <div class="clearfix"></div>
            <div class="table-content">
                <p><span class="color"> 2 </span> Users License</p>
                <p>Email Marketing</p>
                <p>Workflow Automation</p>
                <p><span class="color"> 5</span> Databases</p>
                <p class="sign-notavailable">Campaign Builder</p>
                <p><span class="color"> Daily </span>Sales reporting</p>
                <p><span class="color"> 2 </span> Users / email account</p>
                <a href="#" class="mybtn-small">Signup</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--pricing first column ends-->

        <!--pricing second column starts-->
        <div class="price-column focused">
            <div class="table-th">
                <p class="table-slug">Most Popular</p>
                <h4>Silver </h4>
                <sup>$</sup>159<sup>.99</sup>/mo</div>
            <div class="clearfix"></div>
            <div class="table-content">
                <p><span class="color"> 2 </span> Users License</p>
                <p>Email Marketing</p>
                <p>Workflow Automation</p>
                <p><span class="color"> 5</span> Databases</p>
                <p class="sign-available">Campaign Builder</p>
                <p><span class="color"> Daily </span>Sales reporting</p>
                <p><span class="color"> 2 </span> Users / email account</p>
                <a href="#" class="mybtn-small-color">Signup</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--pricing second column ends-->

        <!--pricing third column / focused starts-->
        <div class="price-column">
            <div class="table-th">
                <h4>Gold </h4>
                Custom/mo </div>
            <div class="clearfix"></div>
            <div class="table-content">
                <p><span class="color"> 2 </span> Users License</p>
                <p>Email Marketing</p>
                <p>Workflow Automation</p>
                <p><span class="color"> 5</span> Databases</p>
                <p class="sign-available">Campaign Builder</p>
                <p><span class="color"> Daily </span>Sales reporting</p>
                <p><span class="color"> 2 </span> Users / email account</p>
                <a href="#" class="mybtn-small">Signup</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--pricing third column ends-->

        <!--pricing fourth / last column starts-->
        <div class="price-column last">
            <div class="table-th">
                <h4>Platinum </h4>
                <sup>$</sup>499<sup>.00</sup> </div>
            <div class="clearfix"></div>
            <div class="table-content">
                <p><span class="color"> 2 </span> Users License</p>
                <p>Email Marketing</p>
                <p>Workflow Automation</p>
                <p><span class="color"> 5</span> Databases</p>
                <p class="sign-available">Campaign Builder</p>
                <p><span class="color"> Daily </span>Sales reporting</p>
                <p><span class="color"> 2 </span> Users / email account</p>
                <a href="#" class="mybtn-small">Signup</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--pricing fourth column ends-->
        </div>
    </div>
@stop