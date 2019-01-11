<div class="page-header sticky-top">
  <h1>{!! App::title() !!} </h1>
  <ul>

    @fields('carousel')

      <li>

        @sub('slide_content')

      </li>

    @endfields

    @field('testimonial')

  </ul>

</div>
