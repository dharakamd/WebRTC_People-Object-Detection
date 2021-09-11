<?php
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>People Counting System</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body style="background-image: url('assets/bg.jpg'); background-size: cover;">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="bg-transparent" id="sidebar-wrapper">
            <div class="sidebar-heading bg-transparent text-center">
                <!-- Page Tittle/Head -->
                <h4>People Counting System</h4>
            </div>
            <div class="list-group list-group-flush justify-content-center h-75 mt-3">
                <!-- Sidebar Container -->
                <div class="container bg-secondary text-white shadow-lg  w-90 p-3">
                    <form action="" method="">
                        <table border="0" width="75%">
                            <tr>
                                <td>Task</td>
                                <td>
                                    <select name="task" class="form-control">
                                        <option>Detection</option>
                                        <option>Segmentation</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Source</td>
                                <td>
                                    <select name="source" class="form-control">
                                        <option>Url</option>
                                        <option>Device</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Device ID</td>
                                <td>
                                    <input type="text" placeholder="Dev01/.../..." class="form-control">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <!-- Bottom Sidebar -->
            <!-- <div class="list-group list-group-flush" style="height: 14%;">
                
            </div> -->
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid px-0">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link text-white" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#!">Menu</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Menu 1</a>
                                    <a class="dropdown-item" href="#!">Menu 2</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Menu 3</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
            <!-- Page content-->
            <div class="row h-100">
                <div class="col-sm-1 col-1 list-group list-group-flush justify-content-center">
                    <button class="btn image-banner-2 scroll-nav-page" id="sidebarToggle">
                        <span class="text-dark" style="margin-left: -4px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="col-sm-11 col-11 list-group list-group-flush justify-content-center">
                    <!-- Info Header Box -->
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="float-start" style="margin-left: 5%; font-family: Poppins; font-size: 24px;">
                                <p class="mb-0">People Counting System</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="float-end" style="margin-right: 10%; font-family: Poppins; font-size: 24px;">
                                <p class="mb-0"><?= date("h:i A") ?> | <?= date("D, M y") ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Video Player Box  
                    <video autoplay loop muted class="shadow-lg p-1 mb-1" style="width: 92%; border-radius: 10px; margin-left: 120px; background: linear-gradient(to right, white, #262626)">
                        <source src="assets/bgobt.mp4" type="video/mp4">
                    </video> -->

                    <!--Camera-->
                     <!-- Video Player Box  -->
                     <video id ='video' autoplay loop muted class="shadow-lg p-1 mb-1" style="width: 99%; border-radius: 20px; background: linear-gradient(to right, black, #262626)">
    
                    </video>
                    <!-- Panel Footer Box -->
                    <div class="row mt-3">
                        <div class="col-sm-4 col-4">
                            <div class="float-start" style="font-family: Poppins; font-size: 24px;">
                                People :
                            </div>
                        </div>
                        <div class="col-sm-4 col-4" >
                            <div class="list-group list-group-flush justify-content-center">
                                <table width="100%">
                                    <tr>
                                        <td class="p-1">
                                            <button name="start" class="btn btn-danger form-control">STOP</button>
                                        </td>
                                        <td class="p-1">
                                            <button name="start" class="btn btn-secondary form-control" onclick="accwebcam()">START</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-4 col-4">
                            <div class="float-end">
                                <!-- Kosong -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script>
        'use strict';
    
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const snap = document.getElementById('snap');
    const errorMsgElement = document.getElementById('span#ErrorMsg');

    const constraints = {
        Audio: true,
        video:{
            width: 1080, height: 720,
        }
    };

    //Access Webcam
    function accwebcam(){
      async function init() {
        try{
            const stream = await navigator.mediaDevices.getUserMedia(constraints);
            handleSuccess(stream);
            document.getElementById("video").style.borderRadius = "20px";
        }
        catch(e){
            errorMsgElement.innerHTML = 'navigator.getUserMedia.error:${e.toString()}';
        }
    }
    //Success
    function handleSuccess(stream) {
        window.stream = stream;
        video.srcObject = stream;
    }
    //Load Init
    init();
    //Draw Image
    var context = canvas.getContext('2d');
    snap.addEventListener("click",function(){
        context.drawImage(video, 0, 0, 640, 480);
    })
    }
    </script>
</body>

</html>