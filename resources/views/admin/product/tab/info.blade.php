
<div id="product_info" class="tab-pane fade show active">

<h4 class="text-center text-bold">Product Information</h4>
    <div class="w-50 m-auto">
    <label>Title</label>
    <input  value="{{ old("title") }}" class="form-control @error('title')is-invalid @enderror" name="title" placeholder=" Enter Title"/>
    @error('title')
    <span class="invalid-feedback " role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

</div>
    <div class="w-50 m-auto">
        <label>Content</label>
        <textarea style="resize:none"  class="form-control @error('content')is-invalid @enderror" name="content" placeholder="Enter the Content">{{ old("keyword") }}</textarea>
        @error('content')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
    <div class="w-50 m-auto">
        <label>Department</label>
        
        <select id="product_department" name="department" class="form-control @error('department')is-invalid @enderror">
            <option value="0" selected>...</option>
            @foreach (\App\Models\category::get() as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
        @error('department')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
    <div class="w-50 m-auto">
        <label>Photo</label>
        <input  type="file"  class="form-control @error('photo')is-invalid @enderror" name="photo" placeholder="Enter the Photo"/>
        @error('photo')
        <span class="invalid-feedback " role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>
    <br/>


</div>