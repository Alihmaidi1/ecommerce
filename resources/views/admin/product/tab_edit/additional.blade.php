<div class="tab-pane fade show " id="product_additional">
    <h4 class="text-center text-bold">Product More Information</h4>
    <div class="w-50 m-auto">
        <label>Color</label>

        <select value="{{ $product->color_id }}" name="color_id" class="form-control @error('color_id')is-invalid @enderror"> 
            @foreach(\App\Models\color::get() as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
                
            @endforeach

        </select>
        @error('color_id')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
        

    <div class="w-50 m-auto">
        <label>Factory</label>

        <select value="{{ $product->factory_id }}" name="factory_id" class="form-control @error('factory_id')is-invalid @enderror"> 
            @foreach(\App\Models\factory1::get() as $factory)
            <option value="{{ $factory->id }}">{{ $factory->name }}</option>
                
            @endforeach
        </select>
        @error('factory_id')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <br/>
        



</div>