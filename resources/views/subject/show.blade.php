<x-layout>
    <div>
        <x-dev/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">{{$subject->subject_name}} Subject</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/subjects')}}">Subjects</a> </li>
                        <li class="breadcrumb-item active text-danger ">{{$subject->subject_name}} Subject</li>

                    </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-info">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Subject
                                    </div>
                                        <table class="table table-bordered border-primary">
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>subject color</th>
                                            </tr>
                                            <tr>
                                                <td>{{$subject->subject_name}}</td>
                                                <td>{{$subject->color}}</td>
                                            </tr>
                                        </table>
                                <h2>Students</h2>
                                <table class="table table-hover table-striped table-bordered">
                                    <tr>
                                        <th>Student Name</th>
                                    </tr>
                                    @foreach ($subject->students as $student)
                                    <tr>
                                        <td><a href="{{url("students/$student->id")}}">{{$student->first_name}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-info">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Grade
                                    </div>
                                    <table class="table table-bordered border-primary">
                                        <tr>
                                            <th>Grade Name</th>
                                            <th>Number of Students</th>
                                        </tr>
                                        @foreach ($subject->grades as $grade)
                                        <tr>
                                            <td><a href="{{url("/grades/$grade->id")}}">{{$grade->grade_name}}</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </main>
</x-layout>