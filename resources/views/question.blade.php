@include('layouts.header')
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('layouts.navigation')
        <div class="container-fluid d-flex flex-column">
            <div class="card row-md-3 shadow-sm p-3">
                <div class="d-flex">
                    <!-- Upvote/Downvote Section -->
                    <div class="d-flex flex-column align-items-center align-self-center me-3">
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-arrow-up"></i>
                        </button>
                        <span class="fw-bold my-1">{{ $question->total_votes }}</span>
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
            @auth
                <div class="d-flex justify-content-between mt-4">
                    <h4> Answer Here: </h4>
                    <button class="btn btn-primary" type="submit" form="answerForm">Submit</button>
                </div>

                <div class="card row-md-9 rounded">
                    <form id="answerForm" action="{{ route('answer.submit') }}" method="POST">
                        @csrf
                        <input name="question" value="{{ $question->id }}"hidden>
                        <textarea class="w-100 rounded" rows="3" name="answer" autofocus>

                    </textarea>
                    </form>
                </div>
            @endauth
        </div>


        <section class="position-relative py-4 py-xl-5 d-flex flex-column align-items-center">
            @if (isset($question->answer) && $question->answer->count() > 0)
                @foreach ($question->answer as $answer)
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="card shadow border-left-primary py-2 col-md-11" style="margin-right: 2px;">
                                <div class="card-body d-flex align-items-center">
                                    @auth
                                        <div class="d-flex flex-column align-items-center align-self-center me-3">
                                            <form id="upvoteForm" method="POST" action="{{ route('Q&A.upvote') }}">
                                                @csrf
                                                <input name="answer" value="{{ $answer->id }}"hidden>
                                                <input name="vote" value="1"hidden>
                                                <button id="upvote" type="submit"
                                                    class ="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-arrow-up"></i>
                                                </button>
                                            </form>
                                            <span id="score"
                                                class="fw-bold my-1">{{ $answer->vote->sum('value') }}</span>
                                            <!-- Placeholder for vote count -->
                                            <form id="downvoteForm" method="POST" action="{{ route('Q&A.upvote') }}">
                                                @csrf
                                                <input name="answer" value="{{ $answer->id }}"hidden>
                                                <input name="vote" value="-1"hidden>
                                                <button id="downvote" type="submit"
                                                    class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-arrow-down"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @endauth

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

    document.addEventListener("DOMContentLoaded", function() {
        const scoreElement = document.getElementById("score");

        function sendVote(formId, voteValue) {
            const form = document.getElementById(formId);
            const formData = new FormData(form);

            fetch("{{ route('Q&A.upvote') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        scoreElement.innerText = data.newVoteCount; // Update score dynamically
                    } else {
                        alert("Error submitting vote!");
                    }
                })
                .catch(error => console.error("Error:", error));
        }

        document.getElementById("upvoteForm").addEventListener("submit", function(e) {
            e.preventDefault();
            sendVote("upvoteForm", 1);
        });

        document.getElementById("downvoteForm").addEventListener("submit", function(e) {
            e.preventDefault();
            sendVote("downvoteForm", -1);
        });
    });
</script>

</html>
