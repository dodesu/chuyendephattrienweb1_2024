<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="type-3007">
<header class="header bg-primary">
    <div class="container py-4">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xs-6 col-sm-6 col-md-4 left-content">
                <h1 class="h1-left">Fast, Reliable Phone Repairs</h1>
                <p class="p-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
                <a href="#" class="btn btn-success a-left">Discover More</a>
            </div>
            <!-- Form Section -->
            <div class="col-xs-6 col-sm-6 col-md-8 right-form">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-center mb-4 title-form">Book an Appointment</h2>
                    <form>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>Phone</label>
                                <input type="tel" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <select class="form-control">
                                <option value="screen-repair">Screen Repair</option>
                                <option value="battery-replacement">Battery Replacement</option>
                                <option value="software-issues">Software Issues</option>
                            </select>
                        </div>
                        <div class="row">
                        <button type="submit" class="col-md-10 btn btn-success w-100 submit">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features Section -->
<section class="features bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 foot-ele">
            <i class="fa-regular fa-gem fa-2x icon"></i>
                <p class="tag">Affordable Pricing</p>
            </div>
            <div class="col-md-3 foot-ele">
            <i class="fa-solid fa-wrench fa-2x icon"></i>
                <p class="tag">High-Quality Parts</p>
            </div>
            <div class="col-md-3 foot-ele">
            <i class="fa-solid fa-globe fa-2x icon"></i>
                <p class="tag">Comprehensive Warranty</p>
            </div>
            <div class="col-md-3 foot-ele">
            <i class="fa-brands fa-centercode fa-2x icon"></i>
                <p class="tag">Free Diagnostics</p>
            </div>
        </div>
    </div>
</section>
</div>