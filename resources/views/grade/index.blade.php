<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Grades</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active text-danger">Grades </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header bg-warning">
                            <i class="fas fa-table me-1"></i>
                            Grades DataTable
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered"">
                                <tr>
                                    <th>ID</th>
                                    <th>Grade Name</th>
                                    <th>Grade Order</th>
                                    <th>Grade Color</th>
                                </tr>
                                @foreach ($grades as $grade)
                                <tr>
                                    <td>{{$grade->id}}</td>
                                    <td><a href="{{url("grades/$grade->id")}}">{{$grade->grade_name}}</a></td>
                                    <td>{{$grade->grade_order}}</td>
                                    <td>{{$grade->grade_color}}</td>
                                    <td><a href="{{url("grades/$grade->id/edit")}}" class="btn btn-success">Edit</a></td>

                                    <td>
                                        <form action="/grades/{{$grade->id}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="delete" onclick="return confirm('sure want to delete?')"class="btn btn-dark" >
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$grades->links()}}
                        </div>
                    </div>
                </div>
            </div>
            </main>
</x-layout>
