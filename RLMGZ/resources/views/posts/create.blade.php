
@extends ('layouts.master')

@section('content')
    <main>

    <div class="container">
        <form method="Post" action="/posts" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">

                <!--Main column-->
                <div class="col-lg-8">

                    <!--Create titles-->
                    <div class="post-wrapper">
                       
                        <h1 class="h1-responsive">Publish a Post</h1>
                        <hr>
                        <h1 class="h1-responsive">Title:</h1>
                        <input type="text" id="form81" name="title" class="form-control validate">

                        <h4 class="h4-responsive">Secondary Title:</h4>
                        <input type="text" id="form81" name="secondtitle" class="form-control validate">
                        <!--End of create title-->

                        <h4 class="h4-responsive">Your name:</h4>
                        <input type="text" id="form81" name="name" class="form-control validate">

                        <!--File upload button-->
                        <h4 class="h5-responsive">Choose a Photo</h4>
                        <div class="file-field">
                        <div class="btn btn-primary btn-md">
                        <span>Choose Photo</span>
                        <input type="file" name="image">
                        </div>                   
                        <!--End File upload button-->

                       <br>
                       <br>

                         <!--Body Post-->   
                        <h1 class="h1-responsive">
                        Body:
                        </h1>                        
                        <textarea type="text" id="form7" name="body" class="md-textarea"></textarea>                        
                        </div>
                        <!--End of body post-->
                        
                        <button type="submit" id="alert-target" name="submit" class="btn btn-primary">Publish</button>


                    </div>

                   
    

    
    




    </form>             
                        
    </div>

                        <!--Errors in errors.blade.php-->
                        @include ('layouts.errors')
                        <!--End of errors-->
    

    </main>



@endsection