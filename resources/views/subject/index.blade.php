<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Subjects</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active text-danger">Subjects </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header bg-info text-black">
                            <i class="fas fa-chart-area me-1"></i>
                            Subject DataTable
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Subject Name</th>
                                    <th>Subject Order</th>
                                    <th>Subject Color</th>
                                </tr>
                                @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{$subject->id}}</td>
                                    <td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</td>
                                    <td>{{$subject->subject_order}}</td>
                                    <td>{{$subject->color}}</td>
                                    <td><a href="{{url("subjects/$subject->id/edit")}}" class="btn btn-success">Edit</a></td>
                                    <td>
                                        <form action="/subjects/{{$subject->id}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="delete" onclick="return confirm('sure want to delete?')"class="btn btn-dark" >
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$subjects->links()}}
                        </div>
                    </div>
                </div>
            </div>
            </main>
</x-layout>
