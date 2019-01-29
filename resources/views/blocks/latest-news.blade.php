<div class="latest-news text-center p-5 my-4 float-left w-100">

  <div class="{!! App::container() !!}">

    @query([
      'post_type' => 'post'
    ])

    @posts

    <article class="news-post p-4">

        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            @title
          </a>
        </h2>

        @include('partials/entry-meta')

      <div class="entry-summary">
        @excerpt
      </div>

    </article>

    @endposts

  </div>

</div>
