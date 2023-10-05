@extends('government.adminPanel')

@section('adminContent')

<div class="recentorders">

    <div class="cardHeader">
        <h2>Loan Request</h2>
        {{-- <a href="" class="btn">View All</a> --}}
    </div>
    <table>
        <thead>
            <tr>
                <td>S.N.</td>
                <td>Applied By</td>
                <td>Amount Ask</td>
                <td>Phone Number</td>
                <td>Email</td>
                <td>Location</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>
                    <a class="btn btn-primary" href="/view/1"> View</a>
                    <a class="btn btn-danger" href="/delete/1"> Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="scroll_text_container">
        <marquee behavior="scroll" direction="left" scrollamount="8">Faster...</marquee>
    </div>
</div>
@endsection