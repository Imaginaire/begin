<div class="latest-news text-center p-5 my-4 float-left w-100">

  <div class="{!! App::container() !!}">

    @query([
      'post_type' => 'case-study'
    ])

    <div class="row float-left">

    @posts

    <div class="col-md-6">

      <article class="news-post p-4">

        <a href="{{ get_permalink() }}">

            @featimg(large)

        </a>

        <h2 class="entry-title">

          <a href="{{ get_permalink() }}">

            @title

          </a>

        </h2>

        @include('partials/entry-meta')

      </article>

    </div>

    @endposts

    </div>

  </div>

</div>
