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
        

          <br/>
        <table class="table table-hover text-center">
          <thead class="table-dark">
              <th>#id</th>
              <th>Title</th>
              <th>photo</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Action</th>

          </thead>
          <tbody>
       @foreach($admin2=App\Models\product::paginate(2) as $product)
           
              <tr>

                  <td>{{ $product->id }}</td>
                  <td>{{ $product->title }}</td>
                  <td><img style="width:100px;height:auto" src={{asset("img/upload/product/$product->photo")  }} /></td>
                  <td>{{ $product->created_at }}</td>
                  <td>{{ $product->updated_at }}</td>
                  <td>
                    <a href="{{ url("admin/edit_product/{$product->id}") }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a  href="{{ url("admin/Delete_product/{$product->id}") }}" class="btn btn-danger"><i class=" fa fa-trash"></i></a>

                  </td>


              </tr>

              @endforeach       





          </tbody>


      </table>
      
        

      <a href="{{ route('add_product') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Product</a>


    </div>
  








  </div>







  @include("admin.layout.footer")
