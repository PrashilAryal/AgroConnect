<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

</head>

<body>
    <section class="navbar">
        <h1>AgroConnect</h1>
        <div class="login-and-signup">
            @if ($data == null)
                <a href="{{ route('signup') }}" class="signIn">Sign in</a>
                <a href="{{ route('login') }}" class="logIn">Log in</a>
            @else
                <a href="{{ route('logout') }}" class="logIn">Log out</a>
            @endif
        </div>
    </section>
    <div class="container w-75 border rounded p-3 mt-5">
        <form action="{{ route('postequipment') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Add Farming tools</h2>
            <div class="mb-3">
                <label for="toolname" class="form-label">Tool Name:</label>
                <input type="text" id="toolname" name="toolname" class="form-control" required>
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div>

            @if ($data->role === '4')
                <label for="role">Role:</label><br>
                <select name="loan" id="loan" class='form-control'>
                    <option value="loan">Loan</option>
                    <option value="sell">Sell</option>
                </select>
            @endif
            <br>
            <div class="mb-3">
                <label for="image">Upload Image</label>
                <input type="file" id="image" name="image" class="form-control-file" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">Submit Application</button>
        </form>
    </div>
    <div class="container w-75 mt-5">
        <h2>All Tools</h2>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>SN</th>
                    <th>Tool Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipmentDatas as $equipmentTool)
                    <tr>
                        <td>{{ $equipmentTool->toolname }}</td>
                        <td>{{ $equipmentTool->description }}</td>
                        <td>
                            {{ $equipmentTool->price }}
                        </td>
                        <td>
                            Rs. 10000
                        </td>
                        <td>
                            <img src="{{ asset('/storage/' . $equipmentTool->imgname) }}" alt=""
                                style="width:100px; height:100px; border-radius:50%; object-fill:cover;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
