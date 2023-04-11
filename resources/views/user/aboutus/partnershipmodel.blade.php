@extends('layouts.user.index')
@section('PageTitle', 'Partnership Model')
@section('user')
@include('user.include.header')

<section id="partnership-model" class="toppadding-20 bottompadding-20">
    <div class="container toppadding-20">
        <div class="container headings text-center">
        <h2 class="font-weight-bold themeblue">Partnership Models</span></h2>
        <h3 class="blacktext bottompadding-40">We provide flexible business models to meet your diverse business needs. Choose the one that suits you.</h3>
        </div>
        <div class="row toppadding-20">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card text-center p-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/whoviansoft_dedicated_resource_model_virtual_assistant.png') }}" alt="whoviansoft inc dedicated resource model virtual assistant for your service at low cost" style="width:200px;">
                    </div>
                    <h4 class="font-weight-bold themered">Dedicated Resource Model (DRM)</h4>
                    <p class="toppadding-30">In this model, we provide you with dedicated number of skilled professionals and infrastructure
                        as per your requirement. The assigned resource will work exclusively for your project. It's like having your own remote virtual assistant.
                        </p>
                    <h4 class="toppadding-30 text-left">Why choose this model?</h4>
                    <ul class="fa-ul text-left themered">
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>For full control of project and resources</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Hassle free resource management</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Resource at reasonable price</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card text-center p-5 cardspace">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/whoviansoft_project_based_model_projectplan_time_estimation.png') }}" alt="whoviansoft inc project based model project planning timeline estimation low risk low cost model" style="width:200px;">
                    </div>
                    <h4 class="font-weight-bold themered">Project Based Model (PBM)</h4>
                    <p class="toppadding-30 paragraph-left" >Optimized and low risk model if you have definite work scope and know your end result. Our team collaborate with you to gather
                        project requirement and prepare a project plan with estimated timeline. We work on mutually agreed project.
                    </p>
                    <h4 class="toppadding-30 text-left">Why choose this model?</h4>
                    <ul class="fa-ul text-left themered">
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Fixed time line</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Project based billing</li>
                        <li class="mt-4 list"><span class="fa-li"><i class="fa fa-check mr-3" style="color: #00B900!important;"></i></span>Know your end result</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> 

<div id="preloader"></div>
@include('user.include.footer')
@stop

