@include('layouts.header')
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('layouts.navigation')
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Any Questions and Answers Here:</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Questions and Answers</p>
                    <section class="position-relative py-4 py-xl-5">
                        <div class="container position-relative">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                    <div class="card mb-5">
                                        <div class="card-body p-sm-5">
                                            <h2 class="text-center mb-4">Ask a Question</h2>
                                            <form method="post">
                                                <div class="mb-3"></div>
                                                <div class="mb-3"></div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="message-2" name="message" rows="8" placeholder="Ask a question"></textarea>
                                                </div>
                                                <div><a class="btn btn-primary d-block w-100" role="button"
                                                        href="Q&amp;A.html">Send </a></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Questions Here:</p>
                                        </div>
                                        <div class="card-body"><select
                                                style="padding-right: 0px;margin-right: 0px;width: 300px;height: 75px;">
                                                <option value="0" selected="">Questions</option>
                                                <option value="12">Question 1</option>
                                                <option value="13">Question 2</option>
                                                <option value="14">Question 3</option>
                                            </select><select
                                                style="padding: 10px;padding-right: 0px;margin: 20px;margin-right: 0px;width: 300px;height: 75px;">
                                                <option value="12">Answer 1</option>
                                                <option value="13">Answer 2</option>
                                                <option value="14">Answer 3</option>
                                                <option value="13" selected="">Answers</option>
                                            </select>
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question
                                                                    1&nbsp;</strong></label><input class="form-control"
                                                                type="text" id="username-1" placeholder="Question 1"
                                                                name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-1"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question 2</strong></label><input
                                                                class="form-control" type="text" id="username-5"
                                                                placeholder="Question 2" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-5"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question 3</strong></label><input
                                                                class="form-control" type="text" id="username-4"
                                                                placeholder="Question 3" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-4"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question
                                                                    4</strong></label><input class="form-control"
                                                                type="text" id="username-3"
                                                                placeholder="Question 4" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-3"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question
                                                                    5</strong></label><input class="form-control"
                                                                type="text" id="username-8"
                                                                placeholder="Question 5" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-8"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question
                                                                    6</strong></label><input class="form-control"
                                                                type="text" id="username-7"
                                                                placeholder="Question 6" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-7"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question
                                                                    7</strong></label><input class="form-control"
                                                                type="text" id="username-6"
                                                                placeholder="Question 7" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-6"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Question
                                                                    8</strong></label><input class="form-control"
                                                                type="text" id="username-2"
                                                                placeholder="Question 8" name="Question1"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Answer:</strong></label><input
                                                                class="form-control" type="email" id="email-2"
                                                                placeholder="Enter Answer Here:" name="A1"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow"></div>
                                </div>
                            </div>
                        </div>
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
