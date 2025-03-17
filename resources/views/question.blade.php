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
        <section class="position-relative py-4 py-xl-5 d-flex flex-column align-items-center">
            @if (isset($question->answer) && $question->answer->count() > 0)
                @foreach ($question->answer as $answer)
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="card shadow border-left-primary py-2 col-md-11" style="margin-right: 2px;">
                                <div class="card-body d-flex align-items-center">
                                    <div class="d-flex flex-column align-items-center align-self-center me-3">
                                        <button class="btn btn-outline-secondary btn-sm">
                                            <i class="fas fa-arrow-up"></i>
                                        </button>
                                        <span class="fw-bold my-1">{{ $answer->upVotes }}</span>
                                        <button class="btn btn-outline-secondary btn-sm">
                                            <i class="fas fa-arrow-down"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <h1
                                            style="font-size: 25px;color: var(--bs-emphasis-color);font-weight: bold;height: 80px;">
                                            {{ $answer->answer }}</h1>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>

                            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                <div class="card mb-5"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No Questions Available</p>
            @endif

        </section>
    </div>


</div>
</div>
@include('layouts.footer')
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
</body>

</html>
