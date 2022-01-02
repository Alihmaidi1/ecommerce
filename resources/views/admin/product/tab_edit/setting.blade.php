<div id="product_setting" class="tab-pane fade show ">
    <h4 class="text-center text-bold">Product Setting</h4>

    <div class="w-75 m-auto">
        <label>Price</label>
        <input value="{{ $product->price }}"  class="form-control @error('price')is-invalid @enderror" name="price" placeholder=" Enter Price"/>
        @error('price')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror      
    </div>

    <div class="w-75 m-auto">
        <label>Quantity</label>
        <input  value="{{ $product->numbers }}" class="form-control @error('numbers')is-invalid @enderror" name="numbers" placeholder=" Enter Quantity"/>
        @error('numbers')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror  
    </div>
          
    
    <div class="w-75 m-auto">

        <div class="row">
            <div class="col-6"><label>start_at</label></div>
            <div class="col-6"><label>end_at</label></div>
        </div>
        <div class="row">
            <div class="col-6">
                <input  value="{{ $product->start_at}}" type="date" class="form-control @error('start_at')is-invalid @enderror" name="start_at" placeholder=" Start_at"/>
                @error('start_at')
                <span class="invalid-feedback " role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror  
            </div>
            <div class="col-6">
        <input  value="{{ $product->end_at }}" type="date" class="form-control @error('end_at')is-invalid @enderror" name="end_at" placeholder=" End_at"/>
        @error('end_at')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror          
    </div>
        </div>
    </div>

    
    <div class="w-75 m-auto">
        <label>Price the Offer</label>
        <input  class="form-control @error('price_offer')is-invalid @enderror" value="{{ $product->price_offer }}" name="price_offer" placeholder=" Enter price offer"/>
        @error('price_offer')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror  
    </div>


    <div class="w-75 m-auto">

        <div class="row">
            <div class="col-6"><label> offer start_at</label></div>
            <div class="col-6"><label>offer end_at</label></div>
        </div>
        <div class="row">
            <div class="col-6">
                <input  value="{{ $product->start_offer_at }}" type="date" class="form-control @error('start_offer_at')is-invalid @enderror" name="start_offer_at" placeholder=" Start_offer_at"/>
                @error('start_offer_at')
                <span class="invalid-feedback " role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror  
            </div>
            <div class="col-6">
        <input  type="date" class="form-control @error('end_offer_at')is-invalid @enderror" value="{{ $product->end_offer_at }}" name="end_offer_at" placeholder=" End_offer_at"/>
        @error('end_offer_at')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror          
    </div>
        </div>
    </div>

    <div class="w-75 m-auto">
        <label>Status</label>
        <select name="status" class="form-control @error('status')is-invalid @enderror">
            <option value="actice" @if($product->status=="active")selected @endif>active</option>
            <option value="waiting" @if($product->status=="waiting")selected @endif>waiting</option>
            <option value="ending" @if($product->status=="ending")selected @endif>ending</option>

        </select>

        @error('status')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror  
    </div>
        
    <br/>


</div>