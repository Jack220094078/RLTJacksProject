@include('layouts.header')
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('layouts.navigation')
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Room 1 - Active</h3><a class="btn btn-primary" role="button"
                    href="{{ route('joinroom') }}">Leave&nbsp;</a>
            </div>
            <div class="row">
                <div class="col">
                    <header></header>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="card shadow mb-4"></div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="card shadow mb-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4"><video width="960" height="540" controls=""
                        style="padding-right: 0px;margin-right: -2px;width: 1080px;">
                        <source src="./assets/videos/room1Demo.mp4" type="video/mp4">
                    </video>
                    <h1 class="text-primary">Poll Here:</h1>
                    <div class="btn-toolbar" style="margin-right: -690px;">
                        <div class="btn-group" role="group"><button class="btn btn-primary" type="button"
                                style="background: rgb(241,64,8);padding: 11px 12px;margin: 44px;"><input
                                    class="form-control-plaintext" type="text" value="A " readonly=""
                                    style="color: rgb(255,255,255);text-align: center;"></button><button
                                class="btn btn-primary" type="button"
                                style="background: rgb(23,235,4);margin: 44px;"><input class="form-control-plaintext"
                                    type="text" value="B" readonly=""
                                    style="color: rgb(255,255,255);text-align: center;"></button><button
                                class="btn btn-primary" type="button"
                                style="background: rgb(41,8,245);margin: 44px;"><input class="form-control-plaintext"
                                    type="text" value="C" readonly=""
                                    style="color: rgb(255,255,255);text-align: center;"></button></div>
                        <div class="btn-group" role="group"></div>
                    </div><a class="btn btn-primary" role="button" href="Room1.html"
                        style="width: 280px;height: 40px;text-align: center;">Submit</a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
</body>

</html>
