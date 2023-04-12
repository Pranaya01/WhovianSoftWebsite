<footer id="footer">

<div class="footer-newsletter" id="newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4 class="header-4">Stay updated</h4>
        <p class="paragraph">with the latest insights, news, and resources</p>
        <form action="{{route('subscribe')}}" method="post">
          @csrf
         
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
        <div class="formrow row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                @if(session('status'))
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success ! </strong>  &nbsp; {{ session('status') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="container">
                                @if($messages = Session::get('Success'))
                                <div class="alert alert-success">
                                    <p align="center">{{$messages}}</p>
                                </div>
                                @endif

                                @if($messages = Session::get('error'))
                                <div class="alert alert-danger">
                                    <p align="center">{{$messages}}</p>
                                </div>
                                @endif
                                </div>
                            </div>
      </div>
    </div>
  </div>
</div>
            </footer>