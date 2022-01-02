<div id="product_sizing" class="tab-pane fade show " >
    <h4 class="text-center text-bold">Product Sizing</h4>
    
    <div class="w-50 m-auto ">
        <label>size</label>
        <select id="size1" class="form-control @error('size_id')is-invalid @enderror" name="size_id">

        </select>
        @error('size_id')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror    
   
    </div>

    <div class="w-50 m-auto">
        <label>size</label>
        <input value="{{ old("size") }}"  class="form-control @error('size')is-invalid @enderror" name="size" placeholder="Enter Product Size"/>
        @error('size')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror    
   
    </div>
    <div class="w-50 m-auto">
        <label>Weight</label>
        <input  value="{{ old("weight") }}" class="form-control @error('weight')is-invalid @enderror" name="weight" placeholder="Enter Product Weight"/>
        @error('weight')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror    
   
    </div>
    <br/>


</div>