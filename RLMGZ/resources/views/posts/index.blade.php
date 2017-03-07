
@extends ('layouts.master')

@section('content')
<main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Main column-->
                <div class="col-lg-8">

                    <!--Post-->
                    @foreach ($posts as $post)
                    @include ('posts.article')
                    @endforeach
                    <!--/.Post-->
                      <hr>

                    

                </div>

                <!--Sidebar-->
              @include ('layouts.sidebar')
                <!--/.Sidebar-->
            </div>
        </div>
        <!--/.Main layout-->

    </main>
@endsection
