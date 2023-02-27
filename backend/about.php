<?php
    include 'header.php';
?>

<div class="main-content">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                  <div class="card-header">
                    <h3>Banner List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Descrip</th>
								<th>Image</th>
								<th>Btn Text</th>
								<th>Btn Url</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
                        <tr>
                                <td>01</td>
                                <td>nans</td>
                                <td>sdfdf</td>
                                <td>
                                    <img src="../frontend/img/bg/about-img.jpg" width="80" alt="">
                                </td>
                                <td>
                                    <p>sdfdsf</p>
                                </td>
                                <td>
                                    <p>dsfsdf</p>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="">Deactive</a>
                                </td>
                                <td>
									<a class="btn btn-danger" href="">Delete</a>
								</td>
                            </tr>             
                    </table>
                </div>
              </div>
            </div>
        </div>
        <!--end row-->
        
        <div class="rpw">
            <div class="col-lg12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Content</h3>
                    </div>
                    <div>
                        <form action="banner_post.php" method="POST">
                            <div class="mb-3">
                                <label for="name">Enter Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" id="name">
                            </div>

                            <div class="mb-3">
                                <label for="descrip">Enter Description</label>
                                <input type="text" name="descrip" placeholder="Enter Your Description" class="form-control" id="descrip">
                            </div>

                            <div class="mb-3">
                                <label for="image">Enter Image</label>
                                <input type="text" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="name">

                                <img src="../frontend/img/bg/hero-img.jpg" alt="" width="80" id="Blah">
                            </div>

                            <div class="mb-3">
                                <label for="btn_text">Enter Button text</label>
                                <input type="text" name="btn_text" placeholder="Enter Button text" class="form-control" id="btn_text">
                            </div>

                            <div class="mb-3">
                                <label for="btn_url">Enter Button Url</label>
                                <input type="Url" name="btn_url" placeholder="Enter Button Url" class="form-control" id="btn_url">
                            </div>
                            
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php'
?>
