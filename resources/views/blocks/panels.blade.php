<div class="panels d-flex justify-content-between align-items-center my-4 float-left w-100">

@fields('panels')

    <div class="panel @sub('width') d-flex p-5 align-items-center float-left" style="{!! App::panel_bg() !!}">

      <div class="panel-content">

        @sub('content')

      </div>

    </div>

@endfields

</div>
