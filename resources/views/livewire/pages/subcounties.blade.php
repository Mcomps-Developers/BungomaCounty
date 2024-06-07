<main>
    @section('title')
    Sub-Counties
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url({{@asset('assets/images/img58.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Sub-Counties</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Administration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub-Counties</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="pb-4 servicesBlock pt-7 pt-md-9 pb-md-7 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
        <div class="container">
            <header class="mb-8 text-center headingHead mb-lg-12">
                <h2 class="fwSemiBold">Sub-Counties in {{config('app.name')}}</h2>
                <p>{{config('app.name')}} is organized into seven sub counties.</p>
            </header>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico1 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Kanduyi</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Kanduyi Sub-County....</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico1 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico2 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Bumula</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Bumula.....</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico2 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico3 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Webuye</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Webuye.....</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico3 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico4 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Chwele.....</h3>
                                <div class="dcscCaptionWrap">
                                    <p>It is located in the lower region of Bungoma County. It has five wards namely:
                                        Mayenje, Burumba, Matayos South, Busibwabo and Bukhayo West wards. It is majorly
                                        occupied by Bakhayo sub tribe,Teso and Luo tribes.</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico4 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico17 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Khasoko</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Khasoko..........</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico17 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico6 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Tongaren</h3>
                                <div class="dcscCaptionWrap">
                                    <p>STongaren..........</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico6 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="mb-6 overflow-hidden bg-white dcsColumn d-flex position-relative">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="px-3 py-2 align w-100 px-xl-6">
                                <i class="mb-4 icomoon-ico24 d-flex align-items-center icnWrap"><span
                                        class="sr-only">icon</span></i>
                                <h3 class="fwMedium">Any other Sub-County</h3>
                                <div class="dcscCaptionWrap">
                                    <p>Any other ....</p>
                                    <a href="{{route('subcounty.details')}}" class="readMoreLink fontAlter">Read More <i
                                            class="fas fa-arrow-right btnRmlIcn" aria-hidden="true"><span
                                                class="sr-only">icon</span></i></a>
                                    <i class="ml-1 icomoon-ico24 icnWatermark position-absolute"><span
                                            class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <aside class="pt-4 text-center helpAsideBlock pb-7 pt-md-7 pb-md-10 pb-lg-16 pb-xl-22">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                    <strong class="mb-2 d-block habTitle fontAlter font-weight-normal">Do you need help?</strong>
                    <h2>If you have any question, <br>Feel free to contact us</h2>
                    <a href="{{route('contact')}}"
                        class="p-0 mt-5 border-0 btn btnTheme text-capitalize position-relative minWidthMedium btnxLarge"
                        data-hover="Contact Us Now">
                        <span class="d-block btnText">Contact Us Now</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</main>
