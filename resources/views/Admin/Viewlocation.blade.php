@extends('Layouts.AdminMaster')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        // Fetch locations based on selected district
        $('#district').change(function () {
            var district = $(this).val();
            if (district) {
                $.ajax({
                    url: '/getlocations/' + district,
                    type: 'GET',
                    success: function (data) {
                        $('#location').empty();
                        let i = 1;
                        $.each(data, function (key, value) {
                            $('#location').append('<tr><td>' + i++ + '</td><td>' + value.locationname + '</td>' +
                                '<td><a href="/deletelocation/' + value.locationid + '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete?\')">Delete</a></td>' +
                                '<td><a href="/editlocation/' + value.locationid + '" class="btn btn-success">Edit</a></td></tr>');
                        });
                    }
                });
            }
            else {
                $('#location').empty();
                $('#location').append('<tr><td>No data</td></tr>');
            }
        });
    });

</script>

<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-md-6 mx-auto">
            <label for="district" class="h5 text-dark">Select District</label>
            <div class="mb-3">
                <select name="districtid" class="form-control" id="district" placeholder="District" aria-label="District">
                    <option value="">Select a district</option>
                    @foreach($districts as $district)
                        <option value="{{$district->districtid}}">{{$district->districtname}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5 shadow-lg rounded">
                <div class="card-header bg-gradient-purple text-white">
                    <h6 class="m-0 text-center">List of Locations</h6>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <script>
                            alert('{{ session('success') }}');
                        </script>
                    @endif

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Location</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="location">
                            @foreach($locations as $index => $location)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $location->locationname }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('editlocation', ['locationid' => $location->locationid]) }}" class="btn btn-success" style="background-color: #2E7D32; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('deletelocation', ['locationid' => $location->locationid]) }}" class="btn btn-danger " onclick="return confirm('Are you sure you want to delete?')"  style="background-color: #EF9A9A; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<Style>
   
  /* Global Background */
  body {
    background-color: #e8f5e9;
    /* Light green background */
    color: #1b5e20;
    /* Dark green text */
  }

  /* Card Header */
  .card-header {
    background: linear-gradient(135deg, #4caf50, #66bb6a);
    /* Gradient green */
    color: white;
    /* White text for contrast */
    font-weight: bold;
    /* Bold header text */
  }

  /* Table Styles */
  .table {
    border: 1px solid #4caf50;
    /* Green border */
  }

  .table th {
    background-color: #66bb6a;
    /* Green header */
    color: white;
    /* White text for contrast */
    text-align: center;
    font-weight: bold;
  }

  .table-hover tbody tr:hover {
    background-color: #c8e6c9;
    /* Light green hover */
  }

  .table-striped tbody tr:nth-child(odd) {
    background-color: #f1f8e9;
    /* Very light green for odd rows */
  }

  /* Button Styles */
  button,
  .btn {
    border-radius: 20px;
    /* Rounded corners */
    padding: 8px 20px;
    /* Adjust padding */
    font-size: 14px;
    /* Slightly larger text */
    font-weight: bold;
    /* Bold text */
    border: none;
    /* No border */
    transition: background-color 0.3s ease, transform 0.2s ease;
    /* Smooth hover */
    color: white;
    /* White text */
    cursor: pointer;
    /* Pointer cursor */
  }

  /* Edit Button */
  .btn-success {
    background-color: #4caf50;
    /* Vibrant green */
  }

  .btn-success:hover {
    background-color: #388e3c;
    /* Darker green on hover */
    transform: scale(1.09);
    /* Slight zoom */
  }

  /* Delete Button */
  .btn-danger {
    background-color: #ef5350;
    /* Soft red */
  }

  .btn-danger:hover {
    background-color: #d32f2f;
    /* Darker red */
    transform: scale(1.05);
    /* Slight zoom */
  }
</style>
