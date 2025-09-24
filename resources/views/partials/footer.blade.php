<footer class="bg-dark text-white text-center text-lg-start mt-auto">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">My Online Store</h5>
                <p>
                    Your one-stop shop for everything you need. We are committed to providing the best products and services.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ url('/about') }}" class="text-white">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white">Contact</a></li>
                    <li><a href="#!" class="text-white">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Follow Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#!" class="text-white">Facebook</a></li>
                    <li><a href="#!" class="text-white">Twitter</a></li>
                    <li><a href="#!" class="text-white">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © {{ date('Y') }} Copyright:
        <a class="text-white" href="{{ url('/') }}">MyOnlineStore.com</a>
    </div>
</footer>