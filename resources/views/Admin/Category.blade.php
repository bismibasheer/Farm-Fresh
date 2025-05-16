@extends('Layouts.AdminMaster')
@section('content')
<div class="main-panel" style="background-color: #F0F4C3; min-height: 100vh; padding: 20px;">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px; padding: 30px;">
                        <div class="row" style="float: right;">
                            <a href="{{route('viewcategory')}}">
                                <button class="btn" style="background-color: #AED581; color: white; padding: 10px 20px; border: none; border-radius: 5px;">View Category</button>
                            </a>
                        </div>
                        <center>
                            <h4 class="card-title" style="color: #2E7D32; font-weight: bold; margin-bottom: 20px;">CATEGORY</h4>
                        </center>
                        <form action="{{route('categoryinsert')}}" enctype="multipart/form-data" method="post" id="category" style="background-color: #F9FBE7; padding: 20px; border-radius: 10px;">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputcategoryname" style="color: #2E7D32; font-weight: bold;">Category Name</label>
                                <input type="text" name="categoryname" class="form-control"  placeholder="Category Name" style="border: 2px solid #AED581; border-radius: 5px;" required>
                                @error('categoryname')
                                <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimage" style="color: #2E7D32; font-weight: bold;">Image</label>
                                <input type="file" name="categoryimage" class="form-control" style="border: 2px solid #AED581; border-radius: 5px;" required>
                                @error('categoryimage')
                                <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn" style="background-color: #2E7D32; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Submit</button>
                                <button type="button" class="btn" id="cancelButton" style="background-color: #EF9A9A; color: #8D6E63; padding: 10px 20px; border: none; border-radius: 5px;">Cancel</button>
                            </div>
                            @if(session('success'))
                            <script>
                                alert('{{ session('success') }}');
                            </script>
                            @endif
                        </form>
                        <script>
                            document.getElementById('cancelButton').addEventListener('click', function() {
                                document.getElementById('category').reset();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
  body {
    background-color: #F0F4C3; /* Light lime green */
    font-family: 'Arial', sans-serif;
}

.card {
    border: none;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.btn:hover {
    background-color: #558B2F; /* Slightly darker green for hover */
    color: white;
    transform: scale(1.05);
    transition: all 0.3s ease-in-out;
}

.form-control:focus {
    border-color: #81C784; /* Soft green focus */
    box-shadow: 0 0 5px rgba(129, 199, 132, 0.5);
}
</style>
