<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Students</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active text-danger">Students </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-people-fill"></i>
                            Students DataTable
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">

                                    <h1>Students Details</h1>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Grade Name</th>
                                    </tr>
                                    <tr>
                                        @foreach ($students as $student)
                                        <td>{{$student->id}}</td>
                                        <td><a href="{{url("students/$student->id")}}">{{$student->first_name}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td>{{$student->grade->grade_name}}</td>
                                        {{-- <td><a href="{{url('student/show')}}">Show</a></td> --}}
                                        <td><a href="{{url("students/$student->id/edit")}}" class="btn btn-success">Edit</a></td>

                                        <td>
                                            <form action="/students/{{$student->id}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input type="submit" value="delete" onclick="return confirm('sure want to delete?')"class="btn btn-dark" >
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                            </table>
                            {{$students->links()}}
                        </div>
                    </div>
                </div>
            </div>
            </main>
</x-layout>
