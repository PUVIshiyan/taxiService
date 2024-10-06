<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Student Personal Details</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/students')}}">Students</a> </li>
                        <li class=" breadcrumb-item  active text-danger  ">{{$student->first_name}}  {{$student->last_name}} Student </li>

                    </ol>
                    <img src="" alt="" class="rounded-circle">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-people-fill"></i>
                                    Student
                                </div>
                                <div class="card">
                                <table class="table table-bordered border-primary">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Grade</th>
                                    </tr>
                                    <tr>
                                        <td>{{$student->first_name}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td><a href="{{url("grades/$student->grade_id")}}">{{$student->grade->grade_name}}</a></td>
                                    </tr>
                                </table>
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header bg-success text-white">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Subject
                                </div>
                                <table border="1">
                                    <tr>
                                        <th>Subject Name</th>
                                    </tr>
                                    @foreach ($student->subjects as $subject)
                                    <tr>
                                        <td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>
                                    </tr>
                                    @endforeach
                                </table>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <a href="/students">Back to Students</a>
                </div>
            </div>
            </main>

</x-layout>
