@extends('Layouts.AdminMaster')
@section('content')
<div class="main-panel" style="background-color: #f9fdf9;">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color: #e6f7e6; border: 1px solid #c8e6c9;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #2e7d32;">Update Location</h4>
                        <div>
                            <form action="{{route('updatelocation', $locations->locationid)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="district" style="color: #1b5e20;">Select District</label>
                                    <select name="districtid" id="districtid" class="form-control" style="background-color: #ffffff; border: 1px solid #aed581;">
                                        @foreach($district as $districts)
                                            @if($locations->districtid == $districts->districtid)
                                                <option value="{{ $districts->districtid }}" selected>{{ $districts->districtname }}</option>
                                            @else 
                                                <option value="{{ $districts->districtid }}">{{ $districts->districtname }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputlocationname" style="color: #1b5e20;">Location Name</label>
                                    <input type="text" name="location" class="form-control" id="exampleInputlocationname" value="{{$locations->locationname}}" placeholder="Location name" style="background-color: #ffffff; border: 1px solid #aed581;">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-success" style="background-color: #4caf50; border-color: #4caf50;">Submit</button>
                                    <button type="button" class="btn btn-danger" style="background-color: #e57373; border-color: #e57373;">Cancel</button>
                                </center>
                            </form>
                            @if(session('success'))
                                <script>
                                    alert('{{session('success')}}');
                                </script>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
  .light-green-card {
    background-color: #e6f7e6;
    border: 1px solid #c8e6c9;
}
.form-label {
    color: #1b5e20;
}
.form-control {
    background-color: #ffffff;
    border: 1px solid #aed581;
}

</style>