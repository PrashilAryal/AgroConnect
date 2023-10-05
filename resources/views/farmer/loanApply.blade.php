@extends('layout.header')
@section('homeContents')
<div class="container w-75 mt-5">
<form action="#" method="post">

        <h2 class="fs-2 mt-4">Personal Information</h2>
        <label for="full_name" class="fs-4">Full Name:</label>
<input type="text" id="full_name" class="form-control fs-4" name="full_name" required><br>

<label for="address" class="fs-4">Address:</label>
<input type="text" id="address" class="form-control fs-4" name="address" required><br>

<label for="contact_number" class="fs-4">Contact Number:</label>
<input type="tel" id="contact_number" class="form-control fs-4" name="contact_number" required><br>

<h2 class="fs-2 mt-4">Farm Information</h2>
<label for="farm_name" class="fs-4">Farm Name:</label>
<input type="text" id="farm_name" class="form-control fs-4" name="farm_name" required><br>

<label for="farm_size" class="fs-4">Farm Size (acres):</label>
<input type="number" id="farm_size" class="form-control fs-4" name="farm_size" required><br>

<label for="crop_type" class="fs-4">Crop Type:</label>
<select id="crop_type" name="crop_type" class="form-control fs-4" required>
    <option value="wheat">Wheat</option>
    <option value="rice">Rice</option>
    <option value="corn">Corn</option>
</select><br>

<h2 class="fs-2 mt-4">Loan Details</h2>
<label for="loan_amount" class="fs-4">Loan Amount (RS):</label>
<input type="number" id="loan_amount" class="form-control fs-4" name="loan_amount" required><br>

<label for="loan_purpose" class="fs-4">Loan Purpose:</label>
<textarea id="loan_purpose" name="loan_purpose" class="form-control fs-4" required></textarea><br>

<label for="repayment_period" class="fs-4">Repayment Period (months):</label>
<input type="number" id="repayment_period" class="form-control fs-4" name="repayment_period" required><br>

<h2 class="fs-2 mt-4">Supporting Documents</h2>
<label for="id_proof" class="fs-4">ID Proof (Upload):</label>
<input type="file" id="id_proof" name="id_proof" class="form-control fs-4" accept=".pdf,.jpg,.png" required><br>

<label for="land_documents" class="fs-4">Land Ownership Documents (Upload):</label>
<input type="file" id="land_documents" name="land_documents" class="form-control fs-4" accept=".pdf,.jpg,.png" required><br>

<button type="submit" class="btn btn-success fs-4">Submit Application</button>

    </form>

</div>
@endsection
