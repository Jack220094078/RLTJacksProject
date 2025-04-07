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

<body>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <div class="container-fluid pt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="text-dark  text-center">Questions By Students:</h3>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('users.logout') }}">
                            @csrf
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout
                            </button>
                        </form>
                    </div>
                </div>


            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-primary m-0 fw-bold">Questions</p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item"
                                        href="{{ route('teacher', ['sort' => 'alphabetical']) }}">Alphabetical</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('teacher', ['sort' => 'latest']) }}">Latest</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('teacher', ['sort' => 'upvotes']) }}">Votes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <section class="position-relative py-4 py-xl-5 d-flex flex-column align-items-center">
                        @if (isset($questions) && $questions->count() > 0)
                            @foreach ($questions as $question)
                                <div class="container position-relative">
                                    <a class="text-decoration-none"
                                        href="{{ route('teacher.question', ['id' => $question->id]) }}">
                                        <div class="row d-flex justify-content-center">

                                            <div class="card shadow border-left-primary py-2 col-md-11"
                                                style="margin-right: 2px;">
                                                <span id="score"
                                                    class="fw-bold my-1">{{ $question->total_votes ?? 0 }}
                                                    Votes</span>
                                                <div class="card-body d-flex align-items-center">
                                                    <div>
                                                        <h1
                                                            style="font-size: 25px;color: var(--bs-emphasis-color);font-weight: bold;height: 80px;">
                                                            {{ $question->questiontext }}</h1>
                                                        <strong>{{ $question->answer_count }}</strong><span
                                                            style="color: var(--bs-emphasis-color);"><strong>
                                                                Answers</strong></span></span>
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
                        {{ $questions->links() }}
                    </section>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>
