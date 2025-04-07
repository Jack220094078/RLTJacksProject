<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Multi-Column-icons.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <a href="{{ route('teacher') }}" class="ms-4 mt-2 btn btn-primary rounded-circle"><i
                        class="fas fa-arrow-left"></i>
                </a>
                <div class="container-fluid d-flex flex-column pt-4">
                    <div class="card row-md-6 shadow-sm p-3">
                        <div class="d-flex">
                            <!-- Upvote/Downvote Section -->
                            <div class="d-flex flex-column align-items-center align-self-center me-3">
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-arrow-up"></i>
                                </button>
                                <span class="fw-bold my-1">{{ $question->total_votes ?? 0 }}</span>
                                <!-- Placeholder for vote count -->
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
                                    <div class="card shadow border-left-primary py-2 col-md-11"
                                        style="margin-right: 2px;">
                                        <div class="card-body d-flex flex-column align-items-center">

                                            <div class="d-flex flex-column align-items-center align-self-center me-3">
                                                <span id="score"
                                                    class="fw-bold my-1">{{ $answer->vote->sum('value') }}
                                                    Votes</span>
                                                <!-- Placeholder for vote count -->
                                            </div>


                                            <h1
                                                style="font-size: 25px;color: var(--bs-emphasis-color);font-weight: bold;height: 80px;">
                                                {{ $answer->answer }}</h1>

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
