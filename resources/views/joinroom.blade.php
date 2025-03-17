@include('layouts.header')
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('layouts.navigation')
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Join Room</h3>
            </div>
            <div class="row">
                <div class="col">
                    <header></header>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="card shadow mb-4"></div>
                    <h1 style="font-size: 23px;">Enter room code -<input type="text" style="margin: 6px;">&nbsp;<div
                            class="btn-group"><button class="btn btn-primary" type="button" style="margin: 0px;">Join
                                Room&nbsp;</button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('room1') }}">Room 1</a>
                                <a class="dropdown-item" href="{{ route('room2') }}">Room 2</a>
                                <a class="dropdown-item" href="{{ route('room3') }}">Room 3</a>
                            </div>
                        </div>
                    </h1>
                </div>
                <div class="col">
                    <section></section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4"></div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary fw-bold m-0">Rooms Available</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <h6 class="mb-0"><strong>Room 1&nbsp;</strong></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <h6 class="mb-0"><strong>Room 2&nbsp;</strong></h6><span
                                            class="text-xs"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <h6 class="mb-0"><strong>Room 3&nbsp;</strong></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
</body>

</html>
