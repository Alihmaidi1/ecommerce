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
        <table class="table table-hover table-responsive text-center">
            <thead class="table-dark">
                <th>#id</th>
                <th>Name</th>
                <th>person</th>
                <th>mobile</th>
                <th>email</th>
                <th>facebook</th>
                <th>icon</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>

            </thead>
            <tbody>
         @foreach($admin2=App\Models\factory1::paginate(2) as $factory)
             
                <tr>

                    <td>{{ $factory->id }}</td>
                    <td>{{ $factory->name }}</td>
                    <td>{{ $factory->person }}</td>
                    <td>{{ $factory->mobile }}</td>
                    <td>{{ $factory->email }}</td>
                    <td><a href="{{ $factory->facebook }}">{{ $factory->facebook }}</a></td>
                    <td><img width="100px" src="{{ asset("img/upload/factory/$factory->icon")  }}"/></td>
                    <td>{{ $factory->created_at }}</td>
                    <td>{{ $factory->updated_at }}</td>
                    <td>
                      <a href="{{ url("admin/edit_factory/{$factory->id}") }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <a  href="{{ url("admin/Delete_factory/{$factory->id}") }}" class="btn btn-danger"><i class=" fa fa-trash"></i></a>

                    </td>


                </tr>

                @endforeach       





            </tbody>


        </table>
        <a href="{{ route('add_factory') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add factory</a>
        <br/>
        <br/>
<div class="d-flex justify-content-center">{{ $admin2->links() }}</div>







    </div>
  








  </div>







  @include("admin.layout.footer")
