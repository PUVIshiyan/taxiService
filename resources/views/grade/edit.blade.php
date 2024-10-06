<x-layout>
    <x-dev/>
        <div id="layoutSidenav_content">

            <div class="container w-50 border-2 bg- ">
                <h1>Edit Grades</h1>

            <form action="/grades/{{$grade->id}}" method="POST">
                @csrf
                @method('put')

                <label for="grade_name">Grade Name</label>
                <input type="text" name="grade_name" id="grade_name" value="{{$grade->grade_name}}">
                <br>

                <label for="grade_group"> Grade Group </label>
                <input type="text" name="grade_group" id="grade_group" value="{{$grade->grade_group}}">
                <br>

                <label for="grade_order">Grade Order</label>
                <input type="text" name="grade_order" id="grade_order" value="{{$grade->grade_order}}">
                <br>

                <label for="grade_color">Grade Color</label>
                <input type="text" name="grade_color" id="grade_color" value="{{$grade->grade_color}}">
                <br>
                {{-- <input type="text" name="grade_id" id="grade_id"> --}}
                {{-- <select name="grade_id" id="grade_id">
                    @foreach ($grades as $k=>$v)

                    <option value="{{$k}}" {{($k==$student->grade_id)?"selected":""}}>{{$v}}</option>
                    @endforeach
                </select> --}}
                <br>
                <input type="submit" value="Update">
            </form>
            </div>
        </div>
</x-layout>
