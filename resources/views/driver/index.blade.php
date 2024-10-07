<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Drivers</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active text-danger">Drivers </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-people-fill"></i>
                            Drivers DataTable
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">

                                    <h1>Drivers Details</h1>
                                    <tr>
                                        <th>ID</th>
                                        <th>Driver Name</th>
                                        <th>Phone Number</th>
                                        <th>License Number</th>
                                        <th>Vehicle Number</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        @foreach ($drivers as $driver)
                                        <td>{{$driver->id}}</td>
                                        <td><a href="{{url("drivers/$driver->id")}}">{{$driver->user->name}}</a></td>
                                        <td>{{$driver->user->phone_number}}</td>
                                        <td>{{$driver->license_number}}</td>
                                        <td>{{$driver->vehicle_number}}</td>
                                        <td>{{$driver->status}}</td>
                                        <td><a href="{{url("drivers/$driver->id")}}" class="btn btn-success">Show</a></td>
                                        {{-- <td><a href="{{url("studes/$student->id/edit")}}" class="btn btn-success">Edit</a></td> --}}

                                        <td>
                                            <form action="/drivers/{{$driver->id}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input type="submit" value="delete" onclick="return confirm('sure want to delete?')"class="btn btn-dark" >
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                            </table>
                            {{-- {{$students->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
            </main>
</x-layout>
