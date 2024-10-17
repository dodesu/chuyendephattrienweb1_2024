<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="type-3023">
    <div class="container">
        <h2 class="text-center title">Categories</h2>
        <!-- Row 1 -->
        <div class="row">
            <!-- Apple iPhone -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <div class="icon-container">
                            <i class="fa fa-apple fa-3x"></i>
                        </div>
                        <div class="content-container">
                            <h4 class="h-content">APPLE IPHONE</h4>
                            <p class="p-content">Disassembly & replacement guides for the original iPhone, iPhone 3GS, iPhone 4...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Android Phone -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <div class="icon-container">
                            <i class="fa fa-android fa-3x"></i>
                        </div>
                        <div class="content-container">
                            <h4 class="h-content">ANDROID PHONE</h4>
                            <p class="p-content">We are pleased to offer a wide range of Android repair services...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Windows Phone -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <div class="icon-container">
                            <i class="fa fa-windows fa-3x"></i>
                        </div>
                        <div class="content-container">
                            <h4 class="h-content">WINDOWS PHONE</h4>
                            <p class="p-content">Repair guides and teardowns for many Windows cell phones...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
            <!-- Blackberry Phone -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <div class="icon-container">
                            <i class="fa fa-phone fa-3x"></i>
                        </div>
                        <div class="content-container">
                            <h4 class="h-content">BLACKBERRY PHONE</h4>
                            <p class="p-content">Are you looking for Blackberry repairs? We carry out large number repairs every day...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Phone Accessory -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <div class="icon-container">
                            <i class="fa fa-headphones fa-3x"></i>
                        </div>
                        <div class="content-container">
                            <h4 class="h-content">PHONE ACCESSORY</h4>
                            <p class="p-content">If you have any problems with your phone accessories, don't worry, we will repair them...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Desktop Laptop -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <div class="icon-container">
                            <i class="fa fa-desktop fa-3x"></i>
                        </div>
                        <div class="content-container">
                            <h4 class="h-content">DESKTOP LAPTOP</h4>
                            <p class="p-content">We also do all types of desktop repair. We have experienced technicians...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>