<div class="text-center p-5 my-4 float-left w-100">

  <div class="{!! App::container() !!}">

    <div class="flex-carousel">

    @query([
      'post_type' => 'testimonials'
    ])

    @posts

      <article class="news-post p-4">

        @content

        <h6 class="entry-title">

            @title

        </h6>

      </article>

    @endposts

    </div>

  </div>

</div>
