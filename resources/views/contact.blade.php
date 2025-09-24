@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="mb-4 text-center">Get In Touch</h1>

            {{-- Display Success Message --}}
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                {{-- Contact Information --}}
                <div class="col-md-5">
                    <h4>Contact Information</h4>
                    <p>Fill out the form and our team will get back to you within 24 hours.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-telephone-fill me-2"></i> +1 (555) 123-4567</li>
                        <li class="mb-3"><i class="bi bi-envelope-fill me-2"></i> support@mystore.com</li>
                        <li class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i> 123 Store Street, Commerce City, 12345</li>
                    </ul>
                </div>

                {{-- Contact Form --}}
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="fullname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
