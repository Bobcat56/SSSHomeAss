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
                      @if($manufacturers -> count())
                        @foreach($manufacturers as $index => $manufacturers)
                        <tr>
                          <th scope="row">{{ $index + 1 }}</th>
                          <td>{{ $manufacturers -> name }}</td>
                          <td>{{ $manufacturers -> address }}</td>
                          <td>{{ $manufacturers -> phone }}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection