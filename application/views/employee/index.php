<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD OPERATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
       
        
            <div class="card">
                <div class="card-header">
                   <h1>EMPLOYEE DATA
                    <a href="<?= base_url('Employee/create/');?>" class="btn btn-success btn-sm float-end">Add Employee</a>
                   </h1> 
                </div>
				
                <div class="card-body">
                     <table class="table table-bordered">
                        <thead>

						
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Designation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						  
                            <?php foreach ($records as $record) :?>
								
                                <tr>
									             <td><?= $record['id'] ?></td>
															 <td><?= $record['name'] ?></td>
															 <td><?= $record['email'] ?></td>
															 <td><?= $record['phone'] ?></td>
															 <td><?= $record['designation'] ?></td>
															 <td>
                                    <a href="<?= base_url('employee/edit/'. $record['id']);?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?= base_url('employee/delete/'. $record['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                                   </td>
								                </tr>
                              <?php endforeach; ?>
							
							
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
