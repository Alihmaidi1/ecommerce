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
            <thead class="table-light">
                <th>#id</th>
                <th>User</th>
                <th>Email</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>status</th>
                <th>Date</th>
  
            </thead>
            <tbody>
         @foreach($admin2=App\Models\order::paginate(2) as $order)
             
                <tr>
  
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total }}</td>
                    <td  @if($order->status=="success") class="text-success text-bold" @else class="text-danger text-bold"  @endif>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                    
  
  
                </tr>
  
                @endforeach       
  
            </tbody>
  
  
        </table>
        
        
        
        <br/>
        <br/>
<div class="d-flex justify-content-center">{{ $admin2->links() }}</div>







    </div>
  








  </div>







  @include("admin.layout.footer")
