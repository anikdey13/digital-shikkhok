<?php
// include essential files
include('../includes/db.php');
include('../includes/session.php');
include('../includes/helpers.php');
include('../includes/get_courses.php');

// variables
$page_title = "My Course | Student Panel | Digital Shikkhok";
$user_id = $_SESSION['user_id'];
$courses = get_enrolled_course($conn, $user_id);
ob_start();
?>


<!-- Main content START -->
<div class="col-xl-9">
    <div class="card bg-transparent border rounded-3">
        <!-- Card header START -->
        <div class="card-header bg-transparent border-bottom">
            <h3 class="mb-0">My Courses List</h3>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">

            <!-- Search and select START -->
            <!-- Search and select END -->

            <!-- Course list table START -->
            <div class="table-responsive border-0">
                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope="col" class="border-0 rounded-start">Course Title</th>
                            <th scope="col" class="border-0">Total Lectures</th>
                            <th scope="col" class="border-0">Completed Lecture</th>
                            <th scope="col" class="border-0 rounded-end">Action</th>
                        </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
                        <?php if (empty($courses)) { ?>
                            <tr>
                                <td colspan="4" class="text-center">No courses found</td>
                            </tr>
                        <?php } else { ?>
                            <?php foreach ($courses as $course): ?>
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image -->
                                            <div class="w-100px">
                                                <img src="../uploads/img/thumbnails/<?= $course['thumbnail'] ?>" class="rounded" alt="">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="table-responsive-title"><a href="#"><?= htmlspecialchars($course['title']) ?></a></h6>
                                                <!-- Info -->
                                                <div class="overflow-hidden">
                                                    <h6 class="mb-0 text-end">100%</h6>
                                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td>10</td>
                                    
                                   
                                    <!-- Table data -->
                                    <td>
                                        <a href="watch_course.php?course_id=<?= $course['id'] ?>" type="submit" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
                                    </td>
                                </tr>
                        <?php endforeach;
                        } ?>



                    </tbody>
                    <!-- Table body END -->
                </table>
            </div>
            <!-- Course list table END -->

            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card body START -->
    </div>
</div>


<?php
$content = ob_get_clean();
include('../layouts/student.php');
?>