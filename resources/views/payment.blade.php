


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
                                        <div class="row">
                                            <div class="col">


                                                      <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                                                          <div class="row">
                                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                                  <address>
                                                                      <strong>Company Name</strong>
                                                                      <br>
                                                                      CompanyAdress
                                                                      <br>
                                                                      City, ZIPCODE
                                                                      <br>
                                                                      <abbr title="Phone">P:</abbr> (213) 484-6829
                                                                  </address>
                                                              </div>
                                                              <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                                                  <p>
                                                                      <em>Date: 25st December, 2017</em>
                                                                  </p>
                                                                  <p>
                                                                      <em>Receipt #: 34522677W</em>
                                                                  </p>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="text-center">
                                                                  <h1>Receipt</h1>
                                                              </div>
                                                              </span>
                                                              <table class="table table-hover">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Product</th>
                                                                          <th>#</th>
                                                                          <th class="text-center">Price</th>
                                                                          <th class="text-center">Total</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      <tr>
                                                                          <td class="col-md-9"><em>Hyundai accent</em></h4></td>
                                                                          <td class="col-md-1" style="text-align: center"> 1</td>
                                                                          <td class="col-md-1 text-center">$100</td>
                                                                          <td class="col-md-1 text-center">$100</td>
                                                                      </tr>

                                                                      <tr>
                                                                          <td>   </td>
                                                                          <td>   </td>
                                                                          <td class="text-right">
                                                                          <p>
                                                                              <strong>Subtotal: $</strong>
                                                                          </p>
                                                                          <p>
                                                                              <strong>Tax: </strong>
                                                                          </p></td>
                                                                          <td class="text-center">
                                                                          <p>
                                                                              <strong>$100.0</strong>
                                                                          </p>
                                                                          <p>
                                                                              <strong>$0.0</strong>
                                                                          </p></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td>   </td>
                                                                          <td>   </td>
                                                                          <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                                                          <td class="text-center text-danger"><h4><strong>$100</strong></h4></td>
                                                                      </tr>
                                                                  </tbody>
                                                              </table>
                                                              <button type="button" class="btn btn-success btn-lg btn-block">
                                                                  Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                                                              </button></td>
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
