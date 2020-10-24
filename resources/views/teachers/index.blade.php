@extends('layouts.app')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Teachers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
         <div class="row">
          <a class="btn btn-success btn-sm" href="{{url('register/teacher')}}">+ @lang('Add Teacher')</a>
          </div><!-- /.add teacher row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
          <div class="card card-warning card-outline">
            <div class="col-sm-8 container-fluid">
            <div class="card-header ">
              <h3 class="card-title center">DataTable with Teachers features</h3>
              </div>
            </div>

            <div class="col-sm-12">
            <div>
              <h5>Subject Codes :</h5>
              </div>

              <div class="row">
                <div class="col-sm-3" >
               <ul>
                  <li>English (01)</li>
                  <li>Mathematics (02)</li>
                  <li>Sceince (03)</li>
                </ul>
              </div>
              <div class="col-sm-3" >
               <ul>
                  <li>Computer / ICT (04)</li>
                  <li>Creative Art(05)</li>
                  
                </ul>
              </div>
              </div><!-- /.row -->

              </div><!-- /.col --> 

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped center">
                <thead>
                <tr>
                  <th>Teachers image</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Suject Code</th>
                  <th>Classes</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="image"><img width="30%" height="30%" src="images/no-image.jpg" class="img-circle elevation-2" alt="User Image"></td>
                  <td>Mr. Shuaibu
                    Zachariyya
                  </td>
                  <td>Male</td>
                  <td> 04 </td>
                  <td>5 and 6</td>
                </tr>
                <tr>
                  <td class="image"><img width="30%" height="30%" src="images/no-image.jpg" class="img-circle elevation-2" alt="User Image"></td>
                  <td>Mrs. Khadija
                    Abdallah
                  </td>
                  <td>Female</td>
                  <td> 07 </td>
                  <td>1 and 2</td>
                </tr>
                <tr>
                 <td class="image"><img width="30%" height="30%" src="images/no-image.jpg" class="img-circle elevation-2" alt="User Image"></td>
                  <td>Mr. Kottey
                    Djane
                  </td>
                  <td>Male</td>
                  <td> 3 </td>
                  <td>4 and 3</td>
                </tr>
                <tr>
                 <td class="image"><img width="30%" height="30%" src="images/no-image.jpg" class="img-circle elevation-2" alt="User Image"></td>
                  <td>Mr. Seth
                    Tekpeh
                  </td>
                  <td>Male</td>
                  <td> 05 </td>
                  <td>3</td>
                </tr>
                <tr>
                  <td class="image"><img width="30%" height="30%" src="images/no-image.jpg" class="img-circle elevation-2" alt="User Image"></td>
                  <td>Mrs. Ayisha
                    Issah</td>
                  <td>Female</td>
                  <td>6</td>
                  <td>3 and 4</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  @endsection
  @section('scripts')

  @endsection
