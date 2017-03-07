                        <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="h1-responsive">{{$post->title}} <small class="text-muted">{{$post ->secondtitle}}</small></h1>
                        <h5>Written by <a href="">{{$post -> name}}</a>, {{$post ->created_at}}</h5>

                        <br>

                        <!--Featured image -->
                        @if(count($post->pictures))
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="" class="img-fluid " alt="">
                            <div class="mask">
                            </div>
                        </div>
                        @endif

                        <br>

                        <!--Post excerpt-->
                        <p>{{$post -> body}}</p>

                        <!--"Read more" button-->
                        <a href="/posts/{{$post->id}}"><button class="btn btn-primary">Read more</button></a>
                    </div>
                    