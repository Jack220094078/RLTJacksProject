@include('layouts.header')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            @include('layouts.navigation')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Any Questions Here:</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-primary m-0 fw-bold">Questions</p>
                            <a href="{{ route('Q&A.create') }}" class="btn btn-primary d-flex align-items-center justify-content-center rounded-circle" style="width: 35px; height: 35px; font-size: 20px; text-decoration: none;">
                                  +
                             </a>
                            </div>
                            <section class="position-relative py-4 py-xl-5 d-flex flex-column align-items-center">
                                @if (isset($questions)&& $questions->count() > 0)
    @foreach ( $questions as $question )
    <div class="container position-relative">
        <a class="text-decoration-none" href="{{ route("Q&A.question",['id' => $question -> id]) }}">
                                        <div class="row d-flex justify-content-center">
                                
                                                <div class="card shadow border-left-primary py-2 col-md-11" style="margin-right: 2px;">
                                                    <div class="card-body d-flex align-items-center">
                                                            <div class="d-flex flex-column align-items-center align-self-center me-3">
                                                                <button class="btn btn-outline-secondary btn-sm">
                                                                    <i class="fas fa-arrow-up"></i>
                                                                </button>
                                                                <span class="fw-bold my-1">{{ $question->upVotes }}</span> <!-- Placeholder for vote count -->
                                                                <button class="btn btn-outline-secondary btn-sm">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <h1 style="font-size: 25px;color: var(--bs-emphasis-color);font-weight: bold;height: 80px;">{{ $question -> questiontext }}</h1>
                                                                <strong>{{ $question -> answer_count }}</strong><span style="color: var(--bs-emphasis-color);"><strong> Answers</strong></span></span></div>
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
                                {{ $questions ->links() }}
                            </section>
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