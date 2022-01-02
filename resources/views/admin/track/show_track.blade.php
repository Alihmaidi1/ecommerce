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
                <th>website</th>
                <th>facebook</th>
                <th>icon</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>

            </thead>
            <tbody>
         @foreach($admin2=App\Models\track::paginate(2) as $track)
             
                <tr>

                    <td>{{ $track->id }}</td>
                    <td>{{ $track->name }}</td>
                    <td>{{ $track->person }}</td>
                    <td>{{ $track->website }}</td>
                    <td><a href="{{ $track->facebook }}">{{ $track->facebook }}</a></td>
                    <td><img width="100px" src="{{ asset("img/upload/track/$track->icon")  }}"/></td>
                    <td>{{ $track->created_at }}</td>
                    <td>{{ $track->updated_at }}</td>
                    <td>
                      <a href="{{ url("admin/edit_track/{$track->id}") }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <a  href="{{ url("admin/Delete_track/{$track->id}") }}" class="btn btn-danger"><i class=" fa fa-trash"></i></a>

                    </td>


                </tr>

                @endforeach       





            </tbody>


        </table>
        <a href="{{ route('add_track') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add track</a>
        <br/>
        <br/>
<div class="d-flex justify-content-center">{{ $admin2->links() }}</div>







    </div>
  








  </div>







  @include("admin.layout.footer")
