@extends('layouts.main')

@section('title', Lang::get('titles.profile').' | '.Lang::get('titles.posts'))

@section('css')
@parent
@endsection

@section('content')

<!-- CONTENT -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card">
              <div class="card-body">

                <!-- Form -->
                <form method="POST" id="post-form" action="{{ route('profile_posts_store', [ Request::Segment(1)]) }}" class="mt-1" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="3" name="content" required placeholder="@lang('titles.start_a_post')"></textarea>
                        <input type="file"  name="image" id="files" style="display:none"/>
                    </div>
                </form>

                <!-- Footer -->
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Symbols -->
                    <small class="text-muted">
                      0/500
                    </small>

                  </div>
                  <div class="col-auto">

                    <!-- Icons -->
                    <div class="text-muted">
                      <a class="text-reset mr-3" href="#!" id="fileup" data-toggle="tooltip" title="@lang('titles.add_photo')">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a class="text-reset mr-3" href="#!" onclick="event.preventDefault();document.getElementById('post-form').submit();" data-toggle="tooltip" title="@lang('titles.comment')">
                          <i class="fe fe-arrow-down-right mr-4"></i>
                      </a>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            @foreach($post_list as $post_ind => $post_array)
                <!-- Card -->
                <div class="card">
                    <div class="card-body">

                        <!-- Header -->
                        <div class="mb-3">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="#!" class="avatar">
                                        <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/me.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">
                                    <!-- Title -->
                                    <h4 class="mb-1">
                                        {{ $post_array['user_name'] }}
                                    </h4>
                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <span class="fe fe-clock"></span> <time datetime="{{ $post_array['created_at'] }}">{{ $post_array['created_at']->diffForHumans() }}</time>
                                    </p>
                                </div>
                                <div class="col-auto">

                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <form method="POST" id="delete-post-form" action="{{ route('profile_posts_delete', [ Request::Segment(1)]) }}" class="mt-1">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{ $post_array['id'] }}" />
                                            </form>
                                            <a href="#!" onclick="event.preventDefault();document.getElementById('delete-post-form').submit();" class="dropdown-item">
                                                @lang('titles.delete')
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                        <!-- Text -->
                        <p class="mb-3">
                            {!! $post_array['content'] !!}
                        </p>

                        <!-- Image -->
                        <p class="text-center mb-3">
                            @if(isset($post_array['image_name']))
                                <img src="{{ asset($post_array['image_name'])}}" alt="..." class="img-fluid rounded">
                            @endif
                        </p>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">

                                    <!-- Buttons -->
                                    <a href="#!" class="btn btn-sm btn-white addMe" id="" post_id="{{ $post_array['id'] }}" value="{{ $post_array['id'] }}" total_likes="{{ $post_array['post_likes']->count('id') }}" >👍
                                         <div id="theCount_{{ $post_array['id'] }}">{{ $post_array['post_likes']->count('id') }}</div>
                                    </a>
                                </div>
                                <div class="col-auto mr-n3">

                                    <!-- Avatar group -->
                                    <div class="avatar-group d-none d-sm-flex">
                                        @foreach($post_array['post_likes']->take(5) as $post_likes_ind => $post_likes_array)
                                            <a href="#" class="avatar avatar-xs" data-toggle="tooltip" title="{{ $post_likes_array['name'] }}">
                                                <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/avatar-5.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    {{-- <a href="#!" class="btn btn-sm btn-white">
                                        Share
                                    </a> --}}

                                </div>
                            </div> <!-- / .row -->
                        </div>

                        <!-- Divider -->
                        <hr>
                        @foreach($post_array['post_comments'] as $post_comments_ind => $post_comments_array)
                            <!-- Comments -->
                            <div class="comment mb-3">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a class="avatar" href="">
                                            <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Body -->
                                        <div class="comment-body">

                                            <div class="row">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h5 class="comment-title">
                                                        {{ $post_comments_array['name'] }}
                                                    </h5>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Time -->
                                                    <time class="comment-time">
                                                        {{ $post_comments_array['created_at']->format('H:s') }}
                                                    </time>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Text -->
                                            <p class="comment-text">
                                                {!! $post_comments_array['comment'] !!}
                                            </p>

                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        @endforeach
                            <!-- Divider -->
                        <hr>

                        <!-- Form -->
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('dashkit/src/assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Input -->
                                <form method="POST" id="comment-form" action="{{ route('profile_posts_comments_store', [ Request::Segment(1)]) }}" class="mt-1">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post_array['id'] }}" />
                                    <label class="sr-only">@lang('titles.leave_a_comment')</label>
                                    <textarea class="form-control form-control-flush" name="comment" data-toggle="autosize" rows="1" placeholder="@lang('titles.leave_a_comment')"></textarea>
                                </form>

                            </div>
                            <div class="col-auto align-self-end">

                                <!-- Icons -->
                                <div class="text-muted mb-2">
                                    <a class="text-reset mr-3" href="#!" onclick="event.preventDefault();document.getElementById('comment-form').submit();" data-toggle="tooltip" title="@lang('titles.comment')">
                                        <i class="fe fe-arrow-down-right mr-4"></i>
                                    </a>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 col-xl-4">

            <!-- Card -->
            <div class="card">
                <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="mb-0">
                                        @lang('titles.birthday')
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Time -->
                                    <time class="small text-muted" datetime="1988-10-24">
                                        {{ \Carbon\Carbon::parse(Auth::User()->birthday)->format('d-m-y') }}
                                    </time>

                                </div>
                                <div class="col-auto">

                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="dropdown-item">
                                                @lang('titles.edit')
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="mb-0">
                                        @lang('titles.joined')
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Time -->
                                    <time class="small text-muted" datetime="2018-10-28">
                                        {{ Auth::User()->created_at->format('d-m-y') }}
                                    </time>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <form method="POST" id="delete-post-form" action="{{ route('users_update', [ Request::Segment(1)]) }}" class="mt-1">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::User()->id }}" />
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">@lang('titles.edit')</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <!-- First name -->
                                                    <div class="form-group">
                                                        <!-- Label -->
                                                        <label>
                                                            @lang('titles.name')
                                                        </label>
                                                        <!-- Input -->
                                                        <input type="text" name="name" class="form-control" value="{{ Auth::User()->name }}" />
                                                    </div>

                                                </div>
                                                <div class="col-12">
                                                    <!-- Email address -->
                                                    <div class="form-group">
                                                        <!-- Label -->
                                                        <label class="mb-1">
                                                            @lang('titles.email')
                                                        </label>
                                                        <!-- Input -->
                                                        <input type="email" name="email" class="form-control" value="{{ Auth::User()->email }}">

                                                    </div>

                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Location -->
                                                    <div class="form-group">
                                                        <!-- Label -->
                                                        <label>
                                                            @lang('titles.location')
                                                        </label>
                                                        <!-- Input -->
                                                        <input type="text" name="location" class="form-control mb-3" value="{{ Auth::User()->location }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Birthday -->
                                                    <div class="form-group">
                                                        <!-- Label -->
                                                        <label>
                                                            @lang('titles.birthday')
                                                        </label>
                                                        <!-- Input -->
                                                        <input type="text" class="form-control" name="birthday" data-toggle="flatpickr" value="{{ Auth::User()->birthday }}">
                                                    </div>

                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <!-- Website -->
                                                    <div class="form-group">
                                                        <!-- Label -->
                                                        <label>
                                                            @lang('titles.website')
                                                        </label>
                                                        <!-- Input -->
                                                        <input type="text" name="website" class="form-control" value="{{ Auth::User()->website }}" />
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('titles.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('titles.save')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="mb-0">
                                        @lang('titles.location')
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Text -->
                                    <small class="text-muted">
                                        {{ Auth::User()->location }}
                                    </small>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="mb-0">
                                        @lang('titles.website')
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Link -->
                                    <a href="{{ Auth::User()->website }}" target="_blank" class="small">
                                        {{ Auth::User()->website }}
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                </div>
            </div>

            <!-- Weekly Hours -->
            <div class="card">
                <div class="card-header">

                    <!-- Title -->
                    <h4 class="card-header-title">
                        @lang('titles.weekly_hours')
                    </h4>

                </div>
                <div class="card-body">

                    <!-- Chart -->
                    <div class="chart chart-sm">
                        <canvas id="weeklyHoursChart" class="chart-canvas"></canvas>
                    </div>

                </div>
            </div>

        </div>
    </div> <!-- / .row -->
</div>
@endsection

@section('js')
@parent

<script>


   $(document).ready(function() {
       var counter = 0;
       $(".addMe").click(function(){
           var likes = parseInt($(this).attr('total_likes'));
           var post_id = $(this).attr('post_id');
           // alert(likes)
           counter++;
           sum= likes + counter
           $("#theCount_"+post_id).text(sum);

           $.ajax({
               url: "{{route('profile_posts_like', [ Request::Segment(1) ])}}",
               type: 'get',
               data: {
                   _token: '{{ csrf_token() }}',
                   post_id: post_id
               },
               dataType: 'html',

           });
       });
       $('#fileup').click(function() {
           $('#files').click();
        });
   });

</script>

@endsection
