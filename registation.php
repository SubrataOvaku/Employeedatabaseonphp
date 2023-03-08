<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="undefined" crossorigin="anonymous">
    <!--script link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="undefined"
        crossorigin="anonymous"></script>
	<script src="registation.js"></script>
	<script src="validation.js"></script>
    <!--icone link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registation</title>

</head>
<body>
    <!--full page
    **this div contain the full page
    -->
    <div class="container">
        <!-- this div store the form and table -->
        <div class="row">
            <!--
                **for heading
                **this span used for heading
            -->
            <span style="font-size: xx-large; color:#362c31;" >
                <h3 class="text-center"> Registration Form</h3>
            </span>
            <!--
                **left side
                **this div hold the from where we submit the data
             -->
            <div class="col-sm-4">
                <div class="row">
                       <!--input value-->
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <form method="POST" action="submit.php" id="form">
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label"><h6 class="text-drack ">Employee Name:</h6></label>
                                <input type="text" class="form-control" id="name" placeholder="Employee Name"
                                    name="name" onfocusout="isRegxValid(this, /^[a-zA-Z]+([ ][a-zA-Z]+)*$/,
                                    'Invalid Name!')">
                                <p class="text-danger validation-message"  ></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="number" class="form-label"><h6 class="text-drack ">Mobile Number:</h6>
                                </label>
                                <input type="number" class="form-control" id="number" placeholder="Mobile Number"
                                    name="number" onfocusout="isRegxValid(this, /^\d{10}$/, 'Invalid Phone Number!')">
                                <p class="text-danger validation-message" ></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label"><h6 class="text-drack ">Email:</h6></label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    onfocusout="isRegxValid(this, /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
                                        'Invalid Mail!')">
                                <p class="text-danger validation-message" ></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="city" class="form-label"><h6 class="text-drack ">City:</h6></label>
                                <select name="city"  id="city" class="form-control"
                                    onfocusout="isValueNull(this, 'Enter Your City!')">
                                    <option value="">select one</option>
                                    <option value="Bagnan">BAGNAN</option>
                                    <option value="Panskura">PANSKURA</option>
                                    <option value="Midnapur">MIDNAPUR</option>
                                    <option value="Uluberia">ULUBERIA</option>
                                    <option value="Howrah">HOWRAH</option>
                                </select>
                                <p class="text-danger validation-message" ></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="state" class="form-label"><h6 class="text-drack ">State:</h6></label>
                                <select name="state"  id="state" class="form-control"
                                    onfocusout="isValueNull(this, 'Enter Your State!')">
                                    <option value="" >select one</option>
                                    <option value="Kolkata">KOLKATA</option>
                                    <option value="Andhra Pradesh">ANDHARA PRADESH</option>
                                    <option value="Arunachal Prades">ARUNACHAL PRADES</option>
                                    <option value="Assam">ASSAM</option>
                                    <option value="Bihar">BIHAR</option>
                                </select>
                                <p class="text-danger validation-message" ></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="country" class="form-label"><h6 class="text-drack ">Country:</h6></label>
                                <select  class="form-control" id="country" name="country"
                                    onfocusout="isValueNull(this, 'Enter Your Country!')">
                                    <option value="" >select one</option>
                                    <option value="India">INDIA</option>
                                    <option value="France">FRANCE</option>
                                    <option value="South Africa">SOUTH AFRICA</option>
                                    <option value="Spain">SPAIN</option>
                                    <option value="Mexico">MEXICO</option>
                                </select>
                                <p class="text-danger validation-message" ></p>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="pincode" class="form-label"><h6 class="text-drack ">PIN Code:</h6></label>
                                <input type="text" class="form-control" id="pin" placeholder="PIN Code" name="pincode"
                                onfocusout="isRegxValid(this, /^\d{5,6}$/, 'Enter Your Proper Pincode!')">
                                <p class="text-danger validation-message" ></p>
                            </div>
                            <button class="btn btn-primary"  type="submit" onclick="displayDetails()">
                                Add to display
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
            <!--
                **right side
                **this div hold the table where you show the data
            -->
            <div class="col-sm-8">
                <table class="table" >
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile-number</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                            <th scope="col">Pin</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            require 'dbconn.php';
                            $sql = " SELECT * FROM employee ";
                            $result = $conn->query($sql);
                            while ($data = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $data['Id']; ?></td>
                                    <td><?php echo $data['Name']; ?></td>
                                    <td><?php echo $data['phone_no']; ?></td>
                                    <td><?php echo $data['email_id']; ?></td>
                                    <td><?php echo $data['city']; ?></td>
                                    <td><?php echo $data['state']; ?></td>
                                    <td><?php echo $data['country']; ?></td>
                                    <td><?php echo $data['pincode']; ?></td>
                                    <td><button class="btn edit" data-bs-toggle="modal" data-bs-target="#editModal"
                                        onclick="rowDetalis(this); showEditeValue();"><i class="fas fa-edit"></i>
                                        </button><button class="btn delete" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" onclick="rowDetalis(this)">
                                        <i class="fas fa-trash-alt" style="color: red"></i></button>
                                    </td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--
            **this is  a poup modal
            **this modal is used for delete a record in table
         -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete row</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Delete this row
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-primary"  data-bs-dismiss="modal" onclick="getId()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--
            **this is a toast modal
            **this toast is use for show Record Successfully Delete
         -->
          <div class="toast position-absolute top-0 end-0 p-3 bg-success" id="dtoast">
                <div class="toast-header bg-success text-light ">
                    <strong class="me-auto">Record Successfully Delete</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
          </div>
        <!--
            **this is a modal
            **this div used for updated data
         -->

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit row</h5>
                    </div>
                    <div class="modal-footer" >
                        <form action="update.php" method="POST" id="editForm">
                            <div class="row">                            
                                <div class="mb-3 mt-3">
                                    <label for="id" class="form-label"><h6 class="text-drack ">Employee ID:</h6></label>
                                    <input type="number" class="form-control" id="eid" readonly name="id" >
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label"><h6 class="text-drack ">Employee Name:</h6>
                                    </label>
                                    <input type="text" class="form-control" id="ename"  name="name"
                                        onfocusout="isRegxValid(this, /^[a-zA-Z]+([ ][a-zA-Z]+)*$/, 'Invalid Name!')"
                                        value="">
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="number" class="form-label"><h6 class="text-drack ">Mobile Number:</h6>
                                        </label>
                                    <input type="number" class="form-control" id="enumber"  name="number"
                                        onfocusout="isRegxValid(this, /^\d{10}$/, 'Invalid Phone Number!')">
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label"><h6 class="text-drack ">Email:</h6></label>
                                    <input type="email" class="form-control" id="eemail"  name="email"
                                        onfocusout="isRegxValid(this, /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
                                            'Invalid Mail!')">
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <div class="mb-0 mt-0">
                                    <label for="city" class="form-label"><h6 class="text-drack ">City:</h6></label>
                                    <select name="city"  id="ecity" class="form-control"
                                        onfocusout="isValueNull(this, 'Enter Your City!')">
                                        <option value="">select one</option>
                                        <option value="Bagnan">BAGNAN</option>
                                        <option value="Panskura">PANSKURA</option>
                                        <option value="Midnapur">MIDNAPUR</option>
                                        <option value="Uluberia">ULUBERIA</option>
                                        <option value="Howrah">HOWRAH</option>
                                    </select>
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="state" class="form-label"><h6 class="text-drack ">State:</h6></label>
                                    <select name="state"  id="estate" class="form-control"
                                        onfocusout="isValueNull(this, 'Enter Your State!')">
                                        <option value="" >select one</option>
                                        <option value="Kolkata">KOLKATA</option>
                                        <option value="Andhra Pradesh">ANDHARA PRADESH</option>
                                        <option value="Arunachal Prades">ARUNACHAL PRADES</option>
                                        <option value="Assam">ASSAM</option>
                                        <option value="Bihar">BIHAR</option>
                                    </select>
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="country" class="form-label"><h6 class="text-drack ">Country:</h6>
                                    </label>
                                    <select  class="form-control" id="ecountry" name="country"
                                        onfocusout="isValueNull(this, 'Enter Your Country!')">
                                        <option value="" >select one</option>
                                        <option value="India">INDIA</option>
                                        <option value="France">FRANCE</option>
                                        <option value="South Africa">SOUTH AFRICA</option>
                                        <option value="Spain">SPAIN</option>
                                        <option value="Mexico">MEXICO</option>
                                    </select>
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="pincode" class="form-label"><h6 class="text-drack ">PIN Code:</h6>
                                    </label>
                                    <input type="text" class="form-control" id="epin" name="pincode"
                                        onfocusout="isRegxValid(this, /^\d{5,6}$/, 'Enter Your Proper Pincode!')">
                                    <p class="text-danger validation-message" ></p>
                                </div>
                                <button class="btn btn-primary" type="submit" onclick="editeRow()"
                                    data-bs-dismiss="modal">
                                    Add to edit display
                                </button>                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--
            **this is a toast
            **this toast is used show Record Successfully Updated
        -->
        <div class="toast position-absolute top-0 end-0 p-3 bg-success " id="etoast">
            <div class="toast-header bg-success text-light ">
                <strong class="me-auto">Record Successfully Updated</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
</body>
</html>