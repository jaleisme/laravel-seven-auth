@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0 d-flex justify-content-between">
                  <h3 class="mb-0">Administrator</h3>
                  <a href="{{ route('administrator.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i><span class="ml-1">Add new data</span></a>
                </div>
                <!-- Light table -->
                <div class="table-responsive text-center">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" style="width: 5%;"><strong>#</strong></th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col" style="width: 20%;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                      <tr>
                        <th scope="row">
                            1
                        </th>
                        <td>
                            Ahmad
                        </td>
                        <td>
                            Blablabla@g.co
                        </td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-sm btn-white text-warning btn-icon-only d-flex justify-content-center align-items-center" href="#" tooltip="Edit">
                              <i class="fas fa-pen"></i>
                            </a>
                            <a class="btn btn-sm btn-white text-danger btn-icon-only d-flex justify-content-center align-items-center" href="#" tooltip="Delete">
                              <i class="fas fa-trash"></i>
                            </a>

                            {{-- <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div> --}}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                  <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                          <i class="fas fa-angle-left"></i>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <i class="fas fa-angle-right"></i>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
