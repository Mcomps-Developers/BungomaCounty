<main>
    @section('title')
    Events
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img50.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Events</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <header class="ifbFilterHead bg-light px-4 pt-4 pb-3 px-lg-8 pt-lg-7 pb-lg-6">
                <div class="form-row mx-n3 align-items-end">
                    <div class="formCol px-3">
                        <div class="form-group">
                            <label class="d-block fwMedium fontAlter text-lDark mb-2">Start Date</label>
                            <input type="date"
                                class="form-control inputHeightMedium inputBdrTransparent d-block w- shadow">
                        </div>
                    </div>
                    <div class="formCol px-3">
                        <div class="form-group">
                            <label class="d-block fwMedium fontAlter text-lDark mb-2">End Date</label>
                            <input type="date"
                                class="form-control inputHeightMedium inputBdrTransparent d-block w- shadow">
                        </div>
                    </div>
                    <div class="formCol px-3">
                        <div class="form-group">
                            <label class="d-block fwMedium fontAlter text-lDark mb-2">Event Type</label>
                            <select class="custom-select inputHeightMedium inputBdrTransparent shadow">
                                <option selected>Event Type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <button type="button"
                        class="btn btnTheme ml-lg-3 mt-4 mt-lg-0 ml-auto mr-auto mr-lg-0 font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0"
                        data-hover="Find Events">
                        <span class="d-block btnText">Find Events</span>
                    </button>
                </div>
            </header>
            <div class="row justify-content-center pt-8 pt-lg-11 pt-xl-14">
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="ueEveColumn position-relative shadow bg-white mb-6 mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/img09.jpg')}}" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="d-block text-white textDay flex-shrink-0 font-weight-bold">01</span>
                                <span class="d-block py-2 px-3">OCT 2022</span>
                            </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                            <strong class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Entertainement</strong>
                            <h3 class="h3Small fwMedium mb-3">
                                <a href="{{route('event.details')}}">Organizing City Photography Contest-2022</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        9:30am - 1:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        Mayor Office, Texas city
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="ueEveColumn position-relative shadow bg-white mb-6 mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/img10.jpg')}}" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="d-block text-white textDay flex-shrink-0 font-weight-bold">15</span>
                                <span class="d-block py-2 px-3">OCT 2022</span>
                            </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                            <strong class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Entertainement</strong>
                            <h3 class="h3Small fwMedium mb-3">
                                <a href="{{route('event.details')}}">Cultural Festival &amp; Concert at domanion</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        1:00pm - 5:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        32 Quincy Street, Cambridge, MA
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="ueEveColumn position-relative shadow bg-white mb-6 mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/img63.jpg')}}" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="d-block text-white textDay flex-shrink-0 font-weight-bold">08</span>
                                <span class="d-block py-2 px-3">NOV 2022</span>
                            </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                            <strong class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Conference</strong>
                            <h3 class="h3Small fwMedium mb-3">
                                <a href="{{route('event.details')}}">Annual Cycling Race 2020 for the Covid-19
                                    Donation</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        3:00pm - 7:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        32 Quincy Street, Cambridge, MA
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="ueEveColumn position-relative shadow bg-white mb-6 mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/img64.jpg')}}" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="d-block text-white textDay flex-shrink-0 font-weight-bold">23</span>
                                <span class="d-block py-2 px-3">NOV 2022</span>
                            </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                            <strong class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Health &amp;
                                Sports</strong>
                            <h3 class="h3Small fwMedium mb-3">
                                <a href="{{route('event.details')}}">Celebrating World Fiteness Day at White
                                    Corner’20</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        3:00pm - 7:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        Millenia Orlando, USA
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="ueEveColumn position-relative shadow bg-white mb-6 mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/img65.jpg')}}" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="d-block text-white textDay flex-shrink-0 font-weight-bold">03</span>
                                <span class="d-block py-2 px-3">DEC 2022</span>
                            </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                            <strong class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Meeting</strong>
                            <h3 class="h3Small fwMedium mb-3">
                                <a href="{{route('event.details')}}">City Innovation and Technology Committee
                                    Meeting</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        1:00pm - 5:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        Mastanow City Council
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <article class="ueEveColumn position-relative shadow bg-white mb-6 mb-xl-12 w-100">
                        <div class="imgHolder position-relative">
                            <a href="javascript:void(0);">
                                <img src="{{asset('assets/images/img66.jpg')}}" class="img-fluid d-block w-100"
                                    alt="image description">
                            </a>
                            <time
                                class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                                datetime="2011-01-12">
                                <span class="d-block text-white textDay flex-shrink-0 font-weight-bold">16</span>
                                <span class="d-block py-2 px-3">DEC 2022</span>
                            </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                            <strong class="d-block ueCatTitle fwSemiBold text-secondary mb-2">Workshop</strong>
                            <h3 class="h3Small fwMedium mb-3">
                                <a href="{{route('event.details')}}">Faith Forward Future - Social Awareness Seminar</a>
                            </h3>
                            <address>
                                <ul class="list-unstyled ueScheduleList">
                                    <li>
                                        <i class="icomoon-clock icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        9:30am - 1:00pm
                                    </li>
                                    <li>
                                        <i class="icomoon-location icn position-absolute"><span
                                                class="sr-only">icon</span></i>
                                        15 Champions Center, Crewey
                                    </li>
                                </ul>
                            </address>
                            <a href="{{route('event.details')}}"
                                class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                                data-hover="More Details">
                                <span class="d-block btnText">More Details</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center pt-2">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0);">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="javascript:void(0);">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">Next <i class="fas fa-chevron-right icn"><span
                                    class="sr-only">icon</span></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>
