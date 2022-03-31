@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0 mr-2">{{$good->title}}</h1>
            <a href="{{route('admin.good.edit',$good->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{route('admin.good.delete',$good->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="border-0 bg-white">
                <i class="fas fa-trash text-danger" role="button"></i></a>
              </button>
              
            </form> 
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

                  <tbody>

                    <tr>
                      <td>ID</td>
                      <td>{{$good->id}}</td>
                      
                      
                    </tr>
                    <tr>
                      <td>Название</td>
                      <td>{{$good->title}}</td>
                    </tr>
                    <tr>
                      <td>Описание/td>
                      <td>{{$good->description}}</td>
                    </tr>
                    <tr>
                      <td>Цена</td>
                      <td>{{$good->price}}</td>
                    </tr>
                    <tr>
                      <td>Скидочная цена</td>
                      <td>{{$good->offer_price}}</td>
                    </tr>
                    <tr>
                      <td>Категория</td>
                      <td>{{$good->category->title}}</td>
                    </tr>
                    <tr>
                      <td>Бренд</td>
                      <td>{{$good->brand->title}}</td>
                    </tr>
                    
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