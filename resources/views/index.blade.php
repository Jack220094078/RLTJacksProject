@include('layouts.header')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('layouts.navigation')
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Home</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Module Content&nbsp;</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>Latest Information</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Attendance&nbsp;</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-percentage fa-2x text-gray-300" style="font-size: 32px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Tasks To Do&nbsp;</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-thumbs-up fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>2025 Academic year&nbsp;</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>Calendar</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar-alt fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Overview of Polls Taken</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small fw-bold">Poll 1 Students who answered&nbsp;<span class="float-end">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="visually-hidden">20%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Poll 2 Correct Answers Of Students&nbsp;<span class="float-end">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="visually-hidden">40%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Poll 3 Answers for Correct and Incorrect&nbsp;<span class="float-end">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="visually-hidden">60%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Poll 4 Correct Answers Of Students&nbsp;<span class="float-end">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4"></div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4"></div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">To do List Schedule&nbsp;</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col me-2">
                                                <h6 class="mb-0"><strong>Lesson 1&nbsp;</strong></h6><span class="text-xs">11:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col me-2">
                                                <h6 class="mb-0"><strong>Lesson 2&nbsp;</strong></h6><span class="text-xs">12:00 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col me-2">
                                                <h6 class="mb-0"><strong>Lunch Time&nbsp;</strong></h6><span class="text-xs">12:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col me-2">
                                                <h6 class="mb-0"><strong>Lesson 3</strong></h6><span class="text-xs">13:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col me-2">
                                                <h6 class="mb-0"><strong>Lesson 4</strong></h6><span class="text-xs">14:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4"></div>
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Comments Pinned&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M64 448l0-177.6c5.2 1 10.5 1.6 16 1.6l16 0 0 32 0 144c0 8.8-7.2 16-16 16s-16-7.2-16-16zM80 224c-17.7 0-32-14.3-32-32c0 0 0 0 0 0l0-24c0-66.3 53.7-120 120-120l48 0c52.5 0 97.1 33.7 113.4 80.7c-3.1-.5-6.2-.7-9.4-.7c-20 0-37.9 9.2-49.7 23.6c-9-4.9-19.4-7.6-30.3-7.6c-15.1 0-29 5.3-40 14c-11-8.8-24.9-14-40-14l-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-40 0-40 0zM0 192s0 0 0 0c0 18 6 34.6 16 48l0 208c0 35.3 28.7 64 64 64s64-28.7 64-64l0-82c5.1 1.3 10.5 2 16 2c25.3 0 47.2-14.7 57.6-36c7 2.6 14.5 4 22.4 4c20 0 37.9-9.2 49.7-23.6c9 4.9 19.4 7.6 30.3 7.6c35.3 0 64-28.7 64-64l0-64 0-24C384 75.2 308.8 0 216 0L168 0C75.2 0 0 75.2 0 168l0 24zm336 64c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-16c0-8.8 7.2-16 16-16s16 7.2 16 16l0 64zM160 272c5.5 0 10.9-.7 16-2l0 2 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-32 16 0zm64-24l0-40c0-8.8 7.2-16 16-16s16 7.2 16 16l0 48 0 16c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-24z"></path>
                                        </svg></p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="username"><strong>Comment 1&nbsp;</strong></label><input class="form-control" type="text" id="username" placeholder="Comment 1 " name="username"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="email"><strong>Comment 2&nbsp;</strong></label><input class="form-control" type="email" id="email" placeholder="Comment 2" name="email"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Comment 3&nbsp;</strong></label><input class="form-control" type="text" id="first_name" placeholder="Comment 3 " name="first_name"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Comment 4&nbsp;</strong></label><input class="form-control" type="text" id="last_name" placeholder="Comment 4 " name="last_name"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Comments</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                    </div>
                </div>
            </div>
@include('layouts.footer')
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>
