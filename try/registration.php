<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">

</head>
<div class="container">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Registration Form</h1>
        
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="name">Student Name</label>
                        <input type="text" class="form-control" id="name" />
                    </div>
                    <div class="form-group">
                        <label for="id">Student ID</label>
                        <input type="text" class="form-control" id="id" />
                    </div>
                    <div class="form-group">
                        <label for="reg">Registration No</label>
                        <input type="text" class="form-control" id="reg" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="text" class="form-control" id="phone" />
                    </div>
                    <div class="form-group">
                        <label for="room">Room No</label>
                        <input type="text" class="form-control" id="room" />
                    </div>
                     <div class="form-group">
                        <label>Batch</label>
                        <select class="form-select" id="batch">
                            <option selected>Select batch</option>
                            <option value="50">50</option>
                            <option value="49">49</option>
                            <option value="48">48</option>
                            <option value="47">47</option>
                            <option value="46">46</option>
                            <option value="45">45</option>
                            <option value="44">44</option>
                            <option value="43">43</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="dept">Department</label>
                        <input type="text" class="form-control" id="dept" />
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary">
                </form>

            </div>
        </div>
    </div>
</div>


    <!-- <form>
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" class="form-control" id="name" />
        </div>
        <div class="form-group">
            <label for="id">Student ID</label>
            <input type="text" class="form-control" id="id" />
        </div>
        <div class="form-group">
            <label for="reg">Registration No</label>
            <input type="text" class="form-control" id="reg" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" />
        </div>
        <div class="form-group">
            <label for="phone">Phone </label>
            <input type="text" class="form-control" id="phone" />
        </div>
        <div class="form-group">
            <label for="room">Room No</label>
            <input type="text" class="form-control" id="room" />
        </div>
         <div class="form-group">
            <label>Batch</label>
            <select class="form-select" id="batch">
                <option selected>Select batch</option>
                <option value="50">50</option>
                <option value="49">49</option>
                <option value="48">48</option>
                <option value="47">47</option>
                <option value="46">46</option>
                <option value="45">45</option>
                <option value="44">44</option>
                <option value="43">43</option>
            </select>
            
        </div>
        <div class="form-group">
            <label for="dept">Department</label>
            <input type="text" class="form-control" id="dept" />
        </div>
        <br>
        <input type="submit" class="btn btn-primary">
    </form> -->
    
</body>
</html>