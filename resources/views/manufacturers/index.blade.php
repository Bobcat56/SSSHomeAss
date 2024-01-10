@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Manufacturers</h2>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <div class="input-group mb-3">
                          <select class="custom-select">
                            <option value="" selected>All Companies</option>
                            <option value="1">Company One</option>
                            <option value="2">Company Two</option>
                            <option value="3">Company Three</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Alfred</td>
                      <td>Kuhlman</td>
                      <td>Company one</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Frederick</td>
                      <td>Jerde</td>
                      <td>Company one</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Joannie</td>
                      <td>McLaughlin</td>
                      <td>Company Two</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Odie</td>
                      <td>Koss</td>
                      <td>Company Two</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Edna</td>
                      <td>Ondricka</td>
                      <td>Company Three</td>
                    </tr>
                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection