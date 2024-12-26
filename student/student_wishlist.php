<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != '1') {
    header('Location: ../sign_in.php');
    exit();
}
$pageTitle = "Student Dashboard";
ob_start();
?>


<div class="col-xl-9">

<div class="card bg-transparent border rounded-3">
    <!-- Card header START -->
    <div class="card-header bg-transparent border-bottom">
        <h3 class="mb-0">WishList</h3>
    </div>
    <!-- Card header END -->

    <!-- Card body START -->
    <div class="card-body p-3 p-md-4">
        <div class="row g-4">
            <!-- Card item START -->
            <div class="col-sm-6 col-lg-4">
                <div class="card shadow h-100">
                    <!-- Image -->
                    <img src="assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
                    <div class="card-body pb-0">
                        <!-- Badge and favorite -->
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                        </div>
                        <!-- Title -->
                        <h5 class="card-title fw-normal"><a href="#">Graphic Design Masterclass</a></h5>
                        <p class="mb-2 text-truncate-2">Rooms oh fully taken by worse do Points afraid but may end Rooms
                            Points afraid but may end Rooms</p>
                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer pt-0 pb-3">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9h 56m</span>
                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 lectures</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card item END -->

            <!-- Card item START -->
            <div class="col-sm-6 col-lg-4">
                <div class="card shadow h-100">
                    <!-- Image -->
                    <img src="assets/images/courses/4by3/07.jpg" class="card-img-top" alt="course image">
                    <div class="card-body pb-0">
                        <!-- Badge and favorite -->
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                        </div>
                        <!-- Title -->
                        <h5 class="card-title fw-normal"><a href="#">Deep Learning with React-Native </a></h5>
                        <p class="mb-2 text-truncate-2">Far advanced settling say finished raillery. Offered chiefly farther.</p>
                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer pt-0 pb-3">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>18h 56m</span>
                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>99 lectures</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card item END -->

            <!-- Card item START -->
            <div class="col-sm-6 col-lg-4">
                <div class="card shadow h-100">
                    <!-- Image -->
                    <img src="assets/images/courses/4by3/11.jpg" class="card-img-top" alt="course image">
                    <div class="card-body pb-0">
                        <!-- Badge and favorite -->
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                        </div>
                        <!-- Title -->
                        <h5 class="card-title fw-normal"><a href="#">Build Responsive Websites with HTML</a></h5>
                        <p class="mb-2 text-truncate-2">Far advanced settling say finished raillery. Offered chiefly farther.</p>
                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer pt-0 pb-3">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>15h 30m</span>
                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>68 lectures</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card item END -->

            <!-- Card item START -->
            <div class="col-sm-6 col-lg-4">
                <div class="card shadow h-100">
                    <!-- Image -->
                    <img src="assets/images/courses/4by3/10.jpg" class="card-img-top" alt="course image">
                    <div class="card-body pb-0">
                        <!-- Badge and favorite -->
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="badge bg-info bg-opacity-10 text-info">Intermediate</a>
                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                        </div>
                        <!-- Title -->
                        <h5 class="card-title fw-normal"><a href="#">Bootstrap 5 From Scratch</a></h5>
                        <p class="text-truncate-2 mb-2">Far advanced settling say finished raillery. Offered chiefly farther.</p>
                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer pt-0 pb-3">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>25h 56m</span>
                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>38 lectures</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card item END -->

            <!-- Card item START -->
            <div class="col-sm-6 col-lg-4">
                <div class="card shadow h-100">
                    <!-- Image -->
                    <img src="assets/images/courses/4by3/04.jpg" class="card-img-top" alt="course image">
                    <div class="card-body pb-0">
                        <!-- Badge and favorite -->
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                        </div>
                        <!-- Title -->
                        <h5 class="card-title fw-normal"><a href="#">Learn Invision</a></h5>
                        <p class="mb-2">Arrived off she elderly beloved him Course regard to up he hardly.</p>
                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                            <li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer pt-0 pb-3">
                        <hr>
                        <div class="d-flex justify-content-between mt-2">
                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6h 56m</span>
                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 lectures</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card item END -->

            <!-- Card item START -->
            <div class="col-sm-6 col-lg-4">
                <div class="card shadow h-100">
                    <!-- Image -->
                    <img src="assets/images/courses/4by3/01.jpg" class="card-img-top" alt="course image">
                    <div class="card-body pb-0">
                        <!-- Badge and favorite -->
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                        </div>
                        <!-- Title -->
                        <h5 class="card-title fw-normal"><a href="#">Digital Marketing Masterclass</a></h5>
                        <p class="text-truncate-2 mb-2">Delivered dejection necessary objection do Mr prevailed.</p>
                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                        </ul>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer pt-0 pb-3">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6h 56m</span>
                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 lectures</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card item END -->

        </div>
    </div>
    <!-- Card body EMD -->
</div>  
</div>


<?php
$content = ob_get_clean();
include('../layouts/student.php');
?>