<x-layout>
    <x-dev/>
    <div id="layoutSidenav_content">
    <div class="container w-50 border-2 bg- ">
        <h1>Create Grade Detail</h1>

        <form action="/grades" method="POST">
            @csrf
            <label for="grade_name">Grade Name</label>
            <input type="text" name="grade_name" id="grade_name">
            <br>

            <label for="grade_group">Grade Group</label>
            <input type="text" name="grade_group" id="grade_group">
            <br>

            <label for="grade_order">Grade Order</label>
            <input type="text" name="grade_order" id="grade_order">
            <br>

            <label for="grade_color">Grade Color</label>
            <input type="text" name="grade_color" id="grade_color">
            <br>

            <br>
            <input type="submit">
        </form>
    </div>
    <form>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name">
          </div>
        </div>
      </form>
</x-layout>
