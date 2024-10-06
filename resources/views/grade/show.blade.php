<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Grades</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/grades')}}">Grades</a> </li>
                        <li class="breadcrumb-item active text-danger">{{$grade->grade_name}} Grade </li>

                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Grade DataTable
                        </div>
                        <div class="card-body">
                            <h1>Grade {{$grade->grade_name}} Students</h1>
                            <table class="table table-hover table-striped table-bordered"">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                </tr>
                                @foreach ($students as $student)
                                <tr>
                                    <td><a href="{{url("students/$student->id")}}">{{$student->first_name}}</td>
                                    <td>{{$student->last_name}}</td>
                                </tr>
                                @endforeach
                            </table><br>
                            <table class="table table-striped">
                                <tr>
                                    <th>Subjects</th>
                                </tr>
                            @foreach ($grade->subjects as $subject)
                                <tr>
                                    <td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>
                                </tr>
                            @endforeach
                            </table>
                            <br>
                            <a href="/students">Back to Students</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layout>