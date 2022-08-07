@extends('layouts.master')
@section('title','Contact')
@section('content')

    <section class="contact-section">
        <h2 class="section-title">GET IN TOUCH</h2>
        <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>

        <div class="contact-cards-wrapper">
            <div class="contact-card">
                <h6 class="contact-card-title">CALL US</h6>
                <p class="contact-card-content">+987 654 3210 , +987 654 3210</p>
            </div>
            <div class="contact-card">
                <h6 class="contact-card-title">Email Us</h6>
                <p class="contact-card-content">hello@liveresume.com</p>
            </div>
        </div>

        <form action="#!" class="contact-form">
            <div class="form-group form-group-name">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="NAME">
            </div>
            <div class="form-group form-group-email">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
            </div>
            <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>
        </form>

    </section>
    <section class="location-section">

@endsection
