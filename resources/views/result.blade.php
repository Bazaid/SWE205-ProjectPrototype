


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

                          <div class="card-body">
                              <div id="nav-tabContent" class="tab-content">
                                  <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                                      <h4>Result</h4>
                                      <div class="row">
                                          <div class="col">

                                            <div class="container">
	<div class="row">
	<table class=" table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>Car Name</th>
                <th>Manufacturer</th>
                <th>Color</th>
                <th>Model</th>
                <th>Price/day</th>
                <th>Rent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Accent</td>
                <td>Hyundai</td>
                <td>White</td>
                <th>2016</th>
                <td>$100</td>
                <td><a type="button" href="/payment" role="button" class="btn btn-primary">Rent</a></td>
            </tr>
            <tr>
              <td>Accord</td>
              <td>Honda</td>
              <td>Brown</td>
              <th>2016</th>
              <td>$100</td>
              <td><a type="button" href="/payment" role="button" class="btn btn-primary">Rent</a></td>
            </tr>
            <tr>
              <td>Fusion</td>
              <td>Ford</td>
              <td>White</td>
              <th>2015</th>
              <td>$100</td>
              <td><a type="button" href="/payment" role="button" class="btn btn-primary">Rent</a></td>
            </tr>
        </tbody>
    </table>
	</div>
</div>


                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


    @endsection
