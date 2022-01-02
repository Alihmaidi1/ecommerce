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
        <table class="table table-hover  text-center">
            <thead class="table-dark">
                <th>#id</th>
                <th>Ip</th>
                <th>Address</th>
                <th>Region</th>
                <th>City</th>
                <th>Visit in</th>

            </thead>
            <tbody>
         @foreach($admin2=App\Models\visitor::paginate(2) as $visitor)
             
                <tr>

                    <td>{{ $visitor->id }}</td>
                    <td>{{ $visitor->ip }}</td>
                    <td> @if($visitor->address=="")Unknown @else{{ $visitor->address }}@endif</td>
                    <td>@if($visitor->name_region=="")Unknown @else{{ $visitor->name_region }}@endif</td>
                    <td>@if($visitor->city_name=="")Unknown @else{{ $visitor->city_name }}@endif</td>
                    <td>{{ $visitor->created_at }}</td>



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
