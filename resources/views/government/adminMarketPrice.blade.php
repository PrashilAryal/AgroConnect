@extends('government.adminPanel')

@section('adminContent')

<div class="recentorders">

    <div class="profileBody">
        <div class="addRecipe">
            <div class="addRecipeForm" id="addRecipeForm">
                <h1>Add Price</h1>
                <form action="{{route('adminMarketPricePage')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="editInputBox w50">
                        <input type="text" name="vegetation_name" id="vegetation_name" autocomplete="off" required>
                        <span>Vegetation Name</span>
                    </div>
                    <div class="editInputBox w50">
                        <input type="text" name="price" id="price" autocomplete="off" required>
                        <span>Price</span>
                    </div>
                    <div class="editInputBox w50">
                        <input type="hidden" name="vegetation_id" id="vegetation_id" value="" autocomplete="off"
                            required>
                        <!-- <span>Chef ID</span> -->
                    </div>
                    <div>
                        <input type="submit" value="Add Price" class="btn btn-success" />
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="cardHeader">
        <h2>Market Price</h2>
        {{-- <a href="" class="btn">View All</a> --}}
    </div>
    <table>
        <thead>
            <tr>
                <td>S.N.</td>
                <td>Name</td>
                <td>Price</td>
                <td>Date</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>
                    <a class="btn btn-primary" href="/edit/1"> Edit</a>
                    <a class="btn btn-danger" href="/delete/1"> Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection