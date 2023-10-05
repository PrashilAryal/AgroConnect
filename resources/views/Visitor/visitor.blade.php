@php
$sn = 1;
@endphp
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container w-75">
    <section class="navbar">
        <h3>AgroConnect</h3>
        <div class="login-and-signup">
            @if ($data == null)
            <a href="{{ route('signup') }}" class="signIn">Sign in</a>
            <a href="{{ route('login') }}" class="logIn">Log in</a>
            @else
            <a href="{{ route('logout') }}" class="logIn">
                <button class="btn btn-success">
                    Log out
                </button>
            </a>
            @endif
        </div>
    </section>
    <div>
        <h3 class="text-center border-bottom mb-4 p-4">Product</h3>
        <div class="d-flex" style="gap:10px;flex-wrap:warp;">
            @foreach ($product as $item)
            @if ($item->user->role == 2)
            {
            <div style="width:300px;height:350px;" class="border">
                <div class="w-100 border-bottom" style="height:250px;">
                    <img src="{{ asset('/storage/' . $item->imgname) }}" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex flex-column align-items-center" style="gap:5px">
                    <p class="mb-0 fs-6">{{ $item->toolname }}</p>
                    <p class="mb-0 fs-6">{{ $item->price }}</p>
                    <button class="p-1 fs-6"
                        style="border:none;background-color:green;color:white;border-radius:5px;">Add
                        to cart</button>
                </div>
            </div>
            }
            @endif
            @endforeach
        </div>
    </div>
    <div>
        <h3 class="text-center border-bottom mb-4 p-4">Available jobs</h3>
        <table class="table">
            <thead thead class="table-dark">
                <tr>
                    <td>SN</td>
                    <td>Job Title</td>
                    <td>Job Description</td>
                    <td>Salary</td>
                    <td>No of worker</td>
                    <td>Contact Info</td>
                    <td>Location</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($jobs as $job)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->description }}</td>
                    <td>{{ $job->Salary }}</td>
                    <td>{{ $job->Noworker }}</td>
                    <td>{{ $job->Cno }}</td>
                    <td>{{ $job->location }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>