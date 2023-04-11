@extends('layouts.user.index')
@section('PageTitle', 'About Us')
@section('user')
@include('user.include.header')

<section id="about_us" class="toppadding-20 bottompadding-30">
    <div class="container-fluid whitebg toppadding-20">
        <div class=" aboutuscard mt-5">
            <div class="container card rightpadding-20 leftpadding-20" style="width:100%;">
                <div class="card-header text-center whitebg">
                <h2 class="font-weight-bold themeblue">About Us</span></h2>
                <h3 class="blacktext">What makes you go for Whoviansoft as your ultimate, pertinent and Reliable partner</h3>
                </div>
                <div class="card-body toppadding-20">
                    <p class="card-text">We go above and beyond to simplify the lives of our clients, whether they're a brand, retailers, or digital agencies looking to improve their global reach. </p>
                    <p class="card-text">We are a team of digital analysts, web developers, SEO and SEM technicians, project managers, and Marketplace specialists. We help our clients to improve their corporate websites, manage the marketplace or create new projects. </p>
                    <p class="card-text">Our team of passionate experts believes in simplicity and agility, delivering versatile technology solutions that are tailored to your specific needs. With decades of experience and a focus on client needs, we have helped countless businesses achieve success through innovative solutions and flawless execution.  </p>
                    <p class="card-text">You can trust us to deliver world-class services and solutions! </p>
                </div>
                </div>
                </div>
        </div>
    </div>
</section>

<!-- ********************************** About us ends ****************************** -->

<div id="preloader"></div>
@include('user.include.footer')
@stop

