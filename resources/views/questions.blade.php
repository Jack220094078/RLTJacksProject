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
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item"
                                        href="{{ route('Q&A', ['sort' => 'alphabetical']) }}">Alphabetical</a></li>
                                <li><a class="dropdown-item" href="{{ route('Q&A', ['sort' => 'latest']) }}">Latest</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('Q&A', ['sort' => 'upvotes']) }}">Votes</a>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('Q&A.create') }}"
                            class="btn btn-primary d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 35px; height: 35px; font-size: 20px; text-decoration: none;">
                            +
                        </a>
                    </div>
                    <section class="position-relative py-4 py-xl-5 d-flex flex-column align-items-center">
                        @if (isset($questions) && $questions->count() > 0)
                            @foreach ($questions as $question)
                                <div class="container position-relative">
                                    <!--    <a class="text-decoration-none"
                                        href="{{ route('Q&A.question', ['id' => $question->id]) }}"> -->
                                    <div class="row d-flex justify-content-center">

                                        <div class="card shadow border-left-primary py-2 col-md-11"
                                            style="margin-right: 2px;">
                                            <div class="card-body d-flex align-items-center">
                                                <div
                                                    class="d-flex flex-column align-items-center align-self-center me-3">
                                                    <form id="updownvotes" method="POST"
                                                        action="{{ route('Q&A.upvote') }}">
                                                        <button id="upvote"
                                                            class ="btn btn-outline-secondary btn-sm">
                                                            <i class="fas fa-arrow-up"></i>
                                                        </button>
                                                        <span id="score"
                                                            class="fw-bold my-1">{{ $question->upVotes }}</span>
                                                        <!-- Placeholder for vote count -->
                                                        <button id="downvote" class="btn btn-outline-secondary btn-sm">
                                                            <i class="fas fa-arrow-down"></i>
                                                        </button>
                                                    </form>
                                                </div>
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
                                    <!--</a>-->
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
<script>
    let currentVote = null; // null, "up", or "down

    const upvoteBtn = document.getElementById('upvote');
    const downvoteBtn = document.getElementById('downvote');
    const scoreDisplay = document.getElementById('score');

    let score = parseInt(scoreDisplay.textContent);

    function updateScoreDisplay() {
        scoreDisplay.textContent = score
    }

    upvoteBtn.addEventListener('click', () => {
        if (currentVote === 'up') {
            // Remove upvote
            score -= 1;
            currentVote = null;
            upvoteBtn.className = 'btn btn-outline-secondary btn-sm'
        } else {
            if (currentVote === "down") {
                score += 1; // Remove previous downvote
                downvoteBtn.className = 'btn btn-outline-secondary btn-sm'
            }
            score += 1;
            currentVote = 'up';
            upvoteBtn.className = 'btn btn-primary'
        }
        updateScoreDisplay();
    });

    downvoteBtn.addEventListener('click', () => {
        if (currentVote === 'down') {
            // Remove downvote
            score += 1;
            currentVote = null;
            downvoteBtn.className = 'btn btn-outline-secondary btn-sm'
        } else {
            if (currentVote === "up") {
                score -= 1;
                upvoteBtn.className = 'btn btn-outline-secondary btn-sm'
            }
            score -= 1; // Remove previous upvote
            currentVote = 'down';
            downvoteBtn.className = 'btn btn-primary'
        }
        updateScoreDisplay();
    });
</script>

</html>
