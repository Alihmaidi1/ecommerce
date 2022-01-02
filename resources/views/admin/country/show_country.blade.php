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
        <table class="table table-hover">
            <thead class="table-dark">
                <th>#id</th>
                <th>Name</th>
                <th>Abbr</th>
                <th>Mob</th>

                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>

            </thead>
            <tbody>
         @foreach($admin2=App\Models\country::paginate(2) as $user)
             
                <tr>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->abbr }}</td>
                    <td>{{ $user->mob }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                      <a href="{{ url("admin/edit_country/{$user->id}") }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <a  href="{{ url("admin/Delete_country/{$user->id}") }}" class="btn btn-danger"><i class=" fa fa-trash"></i></a>

                    </td>


                </tr>

                @endforeach       





            </tbody>


        </table>
        <a href="{{ route('add_country') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Country</a>
        <br/>
        <br/>
<div class="d-flex justify-content-center">{{ $admin2->links() }}</div>







    </div>
  








  </div>







  @include("admin.layout.footer")
