@include('admin.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src={{ asset("AdminLTE/dist/img/AdminLTELogo.png") }} alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Preloader -->
  @include('admin.layout.messages')
  @include('admin.layout.navbar')
  @include('admin.layout.sidebar')
  <div class="content-wrapper">
    <div class="container">
        <br/>
        @if(session()->has("success"))
    <div class="alert alert-success d-flex justify-content-center">{{ session()->get("success") }}</div>
        @endif
        @if(session()->has("error"))
    <div class="alert alert-danger d-flex justify-content-center">{{ session()->get("error") }}</div>
        @endif
        
        <div id="jstree" class="bg-white"></div>

          <br/>
        <table class="table table-hover text-center">
          <thead class="table-dark">
              <th>#id</th>
              <th>Name</th>
              <th>color</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Action</th>

          </thead>
          <tbody>
       @foreach($admin2=App\Models\color::paginate(2) as $color)
           
              <tr>

                  <td>{{ $color->id }}</td>
                  <td>{{ $color->name }}</td>
                  <td><div class="m-auto" style="width:40px;height:40px; background:{{ $color->color }}"></div></td>
                  <td>{{ $color->created_at }}</td>
                  <td>{{ $color->updated_at }}</td>
                  <td>
                    <a href="{{ url("admin/edit_color/{$color->id}") }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a  href="{{ url("admin/Delete_color/{$color->id}") }}" class="btn btn-danger"><i class=" fa fa-trash"></i></a>

                  </td>


              </tr>

              @endforeach       





          </tbody>


      </table>
      
  <div class="d-flex justify-content-center">{{ $admin2->links() }}</div>        

      <a href="{{ route('add_color') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add color</a>


    </div>
  








  </div>







  @include("admin.layout.footer")
