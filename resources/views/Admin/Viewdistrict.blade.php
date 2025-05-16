@extends('Layouts.AdminMaster')
@section('content')
<div class="content-wrapper" style="background-color: #E8F5E9; padding: 40px 20px;">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card" style="border-radius: 15px; box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);">
        <div class="card-body" style="background-color: #FFFFFF; border-radius: 15px; padding: 30px;">
          <h4 class="card-title" style="color: #388E3C; text-align: center; font-weight: bold; font-family: 'Poppins', sans-serif; font-size: 24px;">VIEW DISTRICT</h4>
          <div class="table-responsive" style="margin-top: 30px;">
            <table class="table table-hover" style="background-color: #FFFFFF; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
              <thead style="background-color: #388E3C; border-radius: 10px;">
                <tr>
                  <th style="color: #E8F5E9; font-weight: bold; font-size: 16px;">Sl.no</th>
                  <th style="color: #E8F5E9; font-weight: bold; font-size: 16px;">District Name</th>
                </tr>
              </thead>
              <tbody>
                @foreach($districts as $index => $district)
                <tr>
                  <td style="color: #388E3C; font-weight: bold; font-size: 14px; text-align: center;">{{$index + 1}}</td>
                  <td style="color: #388E3C; font-weight: bold; font-size: 14px; text-align: center;">{{$district->districtname}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<style>
  /* General body styling */
  body {
    background-color: #F3E5F5; /* Light pastel violet background */
    font-family: 'Poppins', sans-serif;
    color: #6A1B9A;
  }

  /* Card styling */
  .card {
    border: none;
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    background-color: #FFFFFF;
  }

  /* Table Styling */
  .table-hover tbody tr:hover {
    background-color: #F8BBD0; /* Soft light pink hover effect */
    transform: scale(1.02);
    transition: all 0.3s ease;
  }

  .table th, .table td {
    padding: 15px;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
  }

  /* Table header */
  .table thead {
    background-color: #CE93D8;
    border-radius: 10px;
  }

  .table th {
    color: #6A1B9A;
    font-size: 16px;
    font-weight: bold;
  }

  /* Table content styling */
  .table td {
    color: #6A1B9A;
    font-weight: bold;
    font-size: 14px;
  }

  /* Title Styling */
  .card-title {
    color: #6A1B9A;
    font-weight: bold;
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
  }

  /* Hover effect for action buttons */
  .btn:hover {
    transform: scale(1.05);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
  }

  /* Adding a smooth hover effect for table rows */
  .table-hover tbody tr:hover {
    background-color: #F3E5F5;
    transition: all 0.3s ease-in-out;
  }
</style>
