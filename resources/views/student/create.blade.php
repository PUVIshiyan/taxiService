<x-layout>
    <x-dev/>

        {{-- <div id="layoutSidenav_content"> --}}
            {{-- <form action="/students" method="POST">
                <h1 class="text-center mt-5">Create Student</h1>
                @csrf
                <div class="container w-50 border-2 bg- ">
                    <div class="row mt-5 mb-5">
                        <div class="col mt-3 mb-3">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                        </div>
                        <div class="col mt-3 mb-3">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="mb-">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="col mt-3 mb-2">
                            <select class="form-select" placeholder="Gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col mt-3 mb-2">
                            <input type="text" class="form-control" id="grade_id" name="grade_id" placeholder="Grade id">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Address">
                            <input class="bg-secondary text-white mt-2" type="submit">
                        </div>

                    </div>

                </div>
            </form> --}}
        {{-- </div> --}}
        <div id="layoutSidenav_content">

            <div class="container w-50 border-2 bg- ">
                <h1>Create Student Detail</h1>

            <form action="/students" method="POST">
                @csrf
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name">
                <br>

                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name">
                <br>

                <label for="grade_id">Grade Id</label>
                {{-- <input type="text" name="grade_id" id="grade_id"> --}}
                <select name="grade_id" id="grade_id">
                    @foreach ($grades as $k=>$v)          
                    <option value="{{$k}}">{{$v}}</option>

                    @endforeach
                </select>
                <br>
                <input type="submit">
            </form>
            </div>
        </div>

</x-layout>
