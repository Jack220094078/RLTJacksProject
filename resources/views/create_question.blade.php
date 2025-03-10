@include('layouts.header')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            @include('layouts.navigation')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Create Question Here:</h3>
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 col-xxl-11">
                                    <div class="p-5"><label class="form-label">Ask a Question</label>
                                        <div class="text-center"></div>
                                        <form class="question" method="POST" action="{{route("Q&A.submit") }}">
                                            @csrf
                                            <div class="mb-3">
                                            <input class="form-control form-control-user" type="text"  placeholder="Enter Question Title..." name="questiontext">
                                            <label class="form-label">Enter Question Body</label>
                                            <textarea class="form-control" name="questionbody" maxlength="100" placeholder="Enter your Question Body Here"></textarea></div>
                                            <div class="mb-3"></div>
                                            <div class="mb-3">
                                                <div class="custom-checkbox small"></div>
                                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Submit Question</button>
                                            <hr>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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