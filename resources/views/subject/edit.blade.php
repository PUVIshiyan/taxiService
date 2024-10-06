<x-layout>
    <x-dev/>
        <div id="layoutSidenav_content">

            <div class="container w-50 border-2 bg- ">
                <h1>Edit Subject</h1>

            <form action="/subjects/{{$subject->id}}" method="POST">
                @csrf
                @method('put')

                <label for="subject_name">Subject Name</label>
                <input type="text" name="subject_name" id="subject_name" value="{{$subject->subject_name}}">
                <br>

                <label for="subject_order"> subject Order </label>
                <input type="text" name="subject_order" id="Subject_order" value="{{$subject->subject_order}}">
                <br>

                <label for="color">Subject Color</label>
                <input type="text" name="color" id="color" value="{{$subject->color}}">
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
