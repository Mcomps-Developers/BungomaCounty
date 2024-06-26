<main>
    @section('title')
    Project Details
    @endsection
    <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
        style="background-image: url({{@asset('assets/images/img177.jpg')}});">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="text-white mb-2">Project Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('projects')}}">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article
        class="ItemfullBlock portfolioSingle bodyFontAlter pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
        <div class="container">
            <div class="row mb-3 mb-md-6">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{asset('assets/images/img173.jpg')}}"
                        class="potSingGallery overflow-hidden mb-6 lightbox d-block w-100" data-fancybox="true">
                        <img src="{{asset('assets/images/img173.jpg')}}" class="img-fluid" alt="image description">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{asset('assets/images/img178.jpg')}}"
                        class="potSingGallery overflow-hidden mb-6 lightbox d-block w-100" data-fancybox="true">
                        <img src="{{asset('assets/images/img178.jpg')}}" class="img-fluid" alt="image description">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{asset('assets/images/img179.jpg')}}"
                        class="potSingGallery overflow-hidden mb-6 lightbox d-block w-100" data-fancybox="true">
                        <img src="{{asset('assets/images/img179.jpg')}}" class="img-fluid" alt="image description">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{asset('assets/images/img175.jpg')}}"
                        class="potSingGallery overflow-hidden mb-6 lightbox d-block w-100" data-fancybox="true">
                        <img src="{{asset('assets/images/img175.jpg')}}" class="img-fluid" alt="image description">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{asset('assets/images/img180.jpg')}}"
                        class="potSingGallery overflow-hidden mb-6 lightbox d-block w-100" data-fancybox="true">
                        <img src="{{asset('assets/images/img180.jpg')}}" class="img-fluid" alt="image description">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{asset('assets/images/img181.jpg')}}"
                        class="potSingGallery overflow-hidden mb-6 lightbox d-block w-100" data-fancybox="true">
                        <img src="{{asset('assets/images/img181.jpg')}}" class="img-fluid" alt="image description">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                    <header class="fzMedium mb-6">
                        <h2 class="h2vii fwSemiBold mb-3 mb-md-5 mb-xl-8">Description of Project</h2>
                        <p class="text-lDark mb-6">We help our clients to build their best possible economic We
                            understand you’re saving for all different life events: retirement, a house, simply to build
                            wealth, or all of the above. Your famous investment account should adjust to your life — not
                            the other way around.</p>
                    </header>
                    <p class="mb-6">You have within you, right now, at this very moment, all that is necessary for you
                        to become the happy, successful person you’ve always wanted to be. All you need to do is unlock
                        the riches that have been locked away with-in you. Being lucky in life is the result of putting
                        yourself into action for good luck to happen to you. You’ve probably heard the statement “The
                        harder I work the luckier I get”. Another way. Being lucky in life is the result of putting
                        yourself into action for good luck to happen to you. campaign around four future-focused films
                        and a new website around the themes of Technology, Placemaking & Society, Climate & Resources
                        and Mobility.</p>
                    <p>We decided to create a thought leadership campaign around four future-focused films and a new
                        website around the themes of Technology, Placemaking & Society, Climate & Resources and Mobility
                        – issues that pose challenges and opportunities for our people and places. You have within you,
                        right now, at this very moment, all that is way necessary for you to become the wanted to be.
                    </p>
                </div>
                <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                    <div class="widget psShareWidget shadow bg-white mt-5 mt-md-0 px-4 px-lg-6 pt-7 pb-8">
                        <ul class="psMetaList list-unstyled p-0 m-0">
                            <li>
                                <strong class="d-block fwSemiBold text-lDark mb-1 fontAlter">Category:</strong>
                                <span class="d-block">Goverment</span>
                            </li>
                            <li>
                                <strong class="d-block fwSemiBold text-lDark mb-1 fontAlter">Date:</strong>
                                <span class="d-block">12 March 2020</span>
                            </li>
                            <li>
                                <strong class="d-block fwSemiBold text-lDark mb-1 fontAlter">Location:</strong>
                                <span class="d-block">Melborne, AUS</span>
                            </li>
                            <li>
                                <strong class="d-block fwSemiBold text-lDark mb-1 fontAlter">Department:</strong>
                                <span class="d-block">Service Department</span>
                            </li>
                            <li>
                                <strong class="d-block fwSemiBold text-lDark mb-1 fontAlter">Share:</strong>
                                <ul class="list-unstyled socialNetworks saSocialNetworks d-flex flex-wrap p-0 m-0">
                                    <li>
                                        <a href="javascript:void(0);" class="facebook">
                                            <i class="fab fa-facebook-square" aria-hidden="true"><span
                                                    class="sr-only">facebook</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="twitter">
                                            <i class="fab fa-twitter" aria-hidden="true"><span
                                                    class="sr-only">twitter</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="pinterest">
                                            <i class="fab fa-pinterest" aria-hidden="true"><span
                                                    class="sr-only">pinterest</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="linkedin">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"><span
                                                    class="sr-only">linkedin-in</span></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section class="bgLight pt-8 pt-md-12 pt-xl-16 pb-4 pb-md-8 pb-xl-16">
        <div class="container">
            <h2 class="text-center h2vii fwSemiBold mb-5 mb-md-8">Related Projects</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img18.jpg')}});">
                        <a href="{{route('project.details')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Public
                                    Places</strong>
                                <span class="d-block">Cinema Teatre</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img173.jpg')}});">
                        <a href="{{route('project.details')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Business</strong>
                                <span class="d-block">Business Agencies</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="echColumn echColumnii d-block w-100 bgCover position-relative mb-6"
                        style="background-image: url({{@asset('assets/images/img174.jpg')}});">
                        <a href="{{route('project.details')}}"
                            class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox"
                            data-fancybox="true" tabindex="-1">
                            <i class="far fa-image icn" aria-hidden="true"><span class="sr-only">icon</span></i>
                            6
                        </a>
                        <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                            <h3 class="mb-0 text-white">
                                <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Government</strong>
                                <span class="d-block">Historical Buildings</span>
                            </h3>
                            <a href="{{route('project.details')}}"><i
                                    class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center spanLinkGo"><span
                                        class="sr-only">icon</span></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
