@extends('Layouts.CustomerMaster')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Form to Edit Profile -->
                        <form action="{{ route('updateprofile', $customers->customerid) }}" method="POST">
                            @csrf
                            <!-- Customer Name -->
                            <div class="mb-3">
                                <label for="customername" class="form-label">Customer Name</label>
                                <input type="text" name="customername" id="customername" class="form-control" value="{{ $customers->customername }}" required>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $customers->address }}" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $customers->email }}" required>
                            </div>

                            <!-- Location Dropdown -->
                            <div class="mb-3">
    <label for="locationid" class="form-label">Location</label>
    <select name="locationid" id="locationid" class="form-control" required>
        <option value="" disabled>Select a location</option>
        @foreach($location as $loc)
            <option value="{{ $loc->locationid }}"
                @if($customers->locationid == $loc->locationid) selected @endif>
                {{ $loc->locationname }}
            </option>
        @endforeach
    </select>
</div>


                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="{{ $customers->username }}" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" id="password" class="form-control" value="{{ $customers->password }}" required>
                            </div>

                            <!-- Contact -->
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" name="contact" id="contact" class="form-control" value="{{ $customers->contact }}" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="text-center mt-3">
                    <a href="{{ route('Viewprofile') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Back to Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
