<div class="{!! App::container() !!}">

  <div class="testimonial p-4 my-4 shadow-lg">

    <blockquote class="mb-4 text-dark">

      @field('testimonial')

    </blockquote>

    <p class="text-primary mb-0">

      <a href="@field('customer_website')">

        @field('customer_name')

      </a>

    </p>

  </div>

</div>
