@extends ('layouts.master')

@section('content')
 

        <div class="col-sm-8 blog-main">

            @foreach ($companies as $company)

                 @include('company.company')
                
            @endforeach
            
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
        @include('layouts.sidebar') 

        
@endsection
