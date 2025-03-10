@include('layouts.header')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            @include('layouts.navigation')
                <div class="container-fluid">
                <div class="card shadow-sm mb-4 p-3">
    <div class="d-flex">
        <!-- Upvote/Downvote Section -->
        <div class="d-flex flex-column align-items-center align-self-center me-3">
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-up"></i>
            </button>
            <span class="fw-bold my-1">{{ $question->upVotes }}</span> <!-- Placeholder for vote count -->
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>

        <!-- Question Content -->
        <div class="flex-grow-1">
            <h4 class="card-title fw-bold">{{ $question->questiontext }}</h4>
            <p class="card-text text-muted">{{ $question->questionbody }}</p>
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