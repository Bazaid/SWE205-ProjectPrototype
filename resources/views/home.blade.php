


  @extends('templates.master')

  @section('main-banner')
      <!-- Main Banner Place Holder -->
  @stop

  @section('main-content')

    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#item-1-1" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true">Rent </a></li>
                                <li class="nav-item"><a class="nav-link" href="#item-1-2" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false">Instant Rent</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div id="nav-tabContent" class="tab-content">
                                <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                                    <h4>Rent a car</h4>
                                    <div class="row">
                                        <div class="col">
                                            <form role="form" method="POST" action="{{ url('/search') }}">
                                                <div class="form-group">
                                                  <label for="for" class="col-form-label">From: </label>
                                                    <input class="form-control form-control" value="{{ old('from') }}" name="from" type="date" id="from">
                                                </div>
                                            <div class="form-group">
                                                <label for="to" class="col-form-label">To: </label>
                                                <input type="date" id="to"  value="{{ old('to') }}" name="to"  class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Search </button>

                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
                                    <h4>Instant Rent</h4>
                                    <div class="row">
                                        <div class="col">
                                            <iframe allowfullscreen="" frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=+AIzaSyA6j6aA1IfNSd6vL9LJmhiuECv9z04Jbes+&amp;q=KFUPM+Daharan&amp;zoom=15"></iframe>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="button">Rent </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">Instant Rent</h2>
        <blockquote class="blockquote">
            <p>Instant rent provide you an easy and more conventional way to rent a car just chose the closest car to you and click Rent!</p>
            <footer class="blockquote-footer">Yor car is just one click a way!</footer>
        </blockquote>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About </h2>
                    <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                </div>

            </div>
        </div>
    </section>

    @if (Auth::guest())

    @include('modal/auth/login')
    @include('modal/auth/register')

    @if (Route::is('register'))
    <script type="text/javascript">
      $(window).on('load',function(){
       $('#RegisterModal').modal('show');
      });
      </script>
      @endif

    @if (Route::is('login'))

    <script type="text/javascript">
      $(window).on('load',function(){
          $('#LoginModal').modal('show');
      });
      </script>
      @endif

    @else

    @endif


    @endsection
