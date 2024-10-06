<x-layout>
    <x-dev/>
        <div id="layoutSidenav_content">

            <div class="container w-50 border-2 bg- ">
                <h1>Edit Student</h1>

            <form action="/students/{{$student->id}}" method="POST">
                @csrf
                @method('put')
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{$student->first_name}}">
                <br>

                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{$student->last_name}}">
                <br>

                <label for="grade_id">Grade Id</label>
                {{-- <input type="text" name="grade_id" id="grade_id"> --}}
                <select name="grade_id" id="grade_id">
                    @foreach ($grades as $k=>$v)

                    {{-- Method 1 --}}

                    {{-- @if ($k==$student->grade_id)
                    <option value="{{$k}}" selected>{{$v}}</option>
                    @else
                    <option value="{{$k}}">{{$v}}</option>
                    @endif --}}

                    {{-- Method 2 --}}
                    <option value="{{$k}}" {{($k==$student->grade_id)?"selected":""}}>{{$v}}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" value="Update">
            </form>
            </div>
        </div>
</x-layout>
