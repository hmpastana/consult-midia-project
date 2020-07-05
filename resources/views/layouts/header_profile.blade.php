<!-- HEADER -->
<div class="header">

    <!-- Image -->
    <img src="{{ asset('dashkit/src/assets/img/covers/profile-cover-1.jpg')}}" class="header-img-top" alt="...">

    <div class="container-fluid">

        <!-- Body -->
        <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
                <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-xxl header-avatar-top">
                        <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/me.jpg')}}" alt="..." class="avatar-img rounded-circle border border-4 border-body">
                    </div>

                </div>
                <div class="col mb-3 ml-n3 ml-md-n2">

                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                        @lang('titles.members')
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                        {{ Auth::User()->name }}
                    </h1>

                </div>
                {{-- <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">

                    <!-- Button -->
                    <a href="#!" class="btn btn-primary d-block d-md-inline-block lift">
                        Subscribe
                    </a>

                </div> --}}
            </div> <!-- / .row -->
            <div class="row align-items-center">
                <div class="col">

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                        <li class="nav-item">
                            <a href="{{ route('profile_posts', ['language' => 'pt-BR']) }}" class="nav-link active">
                                @lang('titles.overview')
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div> <!-- / .header-body -->

    </div>
</div>
