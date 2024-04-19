<html>
    <head> 
        <title> TITLE
</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head> 
        <body>
            <form action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="form-group my-3">
                <label for="name">Name : </label>
                <input id="name" name="name" type="text" placeholder="Name">
</div>

                <div class="form-group my-3">
                <label for="email">Email : </label>
                <input id="email" name="email" type="email" placeholder="Email">
</div>

                <div class="form-group my-3">
                <label for="password">Password : </label>
                <input id="password" name="password" type="password" placeholder="Password">
</div>

                <div class="form-group my-3">
                <label for="address">Address : </label>
                <input id="address" name="address" type="text" placeholder="Address">
</div>

                <div class="form-group my-3">
                <label for="mobile_number">Mobile Number : </label>
                <input id="mobile_number" name="mobile_number" type="text" placeholder="Mobile Number">
</div>

                <div class="form-group my-3">
                <label for="mother_name">Mother's Name : </label>
                <input id="mother_name" name="mother_name" type="text" placeholder="Mother's Name">
</div>

                <div class="form-group my-3">
                <label for="profile_image">Upload Image </label>
                <input type="file" id="profile_image" name="profile_image">
</div>

                <div class="form-group my-3">
                <button type="submit" class="btn btn-success">SUBMIT</button>
</div>


                </form>

        </body>


</html>

