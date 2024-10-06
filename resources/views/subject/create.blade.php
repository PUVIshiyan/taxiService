<x-layout>
    <x-dev/>

    <div id="layoutSidenav_content">
        <div class="container w-50 border-2 bg- ">
            <h1>Create Subject Detail</h1>

            <form action="/subjects" method="POST">
                @csrf
                <label for="subject_name">Subject Name</label>
                <input type="text" name="subject_name" id="subject_name">
                <br>

                <label for="subject_order">Subject Order</label>
                <input type="text" name="subject_order" id="subject_order">
                <br>

                <label for="color">Color</label>
                <input type="text" name="color" id="color">
                <br>


                <br>
                <input type="submit">
            </form>

</x-layout>
