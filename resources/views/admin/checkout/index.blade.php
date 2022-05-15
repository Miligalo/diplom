@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Заказы</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th colspan="3">Дейсвие</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($checkouts as $checkout)
                        
                    
                    <tr>
                      <td>{{$checkout->id}}</td>
                      <td>{{$checkout->first_name}}</td>
                      <td><a href="{{route('admin.checkout.show',$checkout->id)}}"><i class="far fa-eye"></i></a></td>
                      <td>
                        <form action="{{route('admin.checkout.delete',$checkout->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-white">
                            <i class="fas fa-trash text-danger" role="button"></i></a>
                          </button>
                          
                        </form> 
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection