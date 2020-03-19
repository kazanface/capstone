<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="/index.php" class="navbar-brand">
                <img src="/img/logo_white_gradient.png" height="40" alt="Kobayashi logo">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/company_pages/about.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/company_pages/services.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#contactModal" >contact</button>
                    </li>
                </ul>
                <a class="btn btn-outline-primary ml-5 mr-3 my-sm-0 btn-sm" href="/php/company_pages/cust_register.php" role="button">Register</a>
                <div class="dropdown">
                    <button class="btn btn-primary my-sm-0 btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        Login
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/php/company_pages/cust_login.php">Customers</a>
                        <a class="dropdown-item" href="/php/company_pages/sales_login.php">Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="column"  >
                    <h1 style="color: #4285f4!important; font-weight: bold;"> Contact Us!</h1>
                    <div class="personal">
                        <h4 style="color: #4285f4!important">Personal Info</h4>
                        <label for="FieldeFirstName"  style="margin-left:1% ;" ">First Name :</label>
                        <div class="row">
                            <input name="FieldeFirstName" id="FieldeFirstName" style="margin-left:6% ; background-color: #ACACAC; border-style: none; border-radius: 8px; width: 85%;" value="" >
                        </div>

                        <label for="FieldeLastName" style="margin-left:1% ;" >last Name :</label>
                        <div class="row">
                            <input name="FieldeLastName" id="FieldeLastName" style="margin-left:6% ; border-radius: 8px; width: 85%;background-color: #ACACAC; border-style: none;" value="" >
                        </div>

                        <label for="FieldeEmail" style="margin-left:1% ;" >Email :</label>

                        <div class="row">
                            <input name="FieldeEmail" id="FieldeEmail" style="margin-left:6% ; border-radius: 8px; width: 85%;background-color: #ACACAC; border-style: none;" value type="email" >
                        </div>

                        <label for="FieldePhone" style="margin-left:1% ;">phone number :</label>

                        <div class="row">
                            <input name="FieldePhone" id="FieldePhone" style="margin-left:6% ;border-radius: 8px; width: 85%; background-color: #ACACAC; border-style: none;" >
                        </div>
                    </div>
                    <div class="messageArea" >
                        <h4 style="padding-top:5% ; color: #4285f4!important"">Message</h4>

                        <div class="column">
                            <label for="FieldDropDown" style="margin-bottom: 0%;margin-left:1% ;  font-size: 18px; ">Perfered method of response</label>
                            <div class="dropdown" style="margin-left:6% ;">

                                <div class="dropdown-content">
                                    <select name="PerContact" id="DropDown" style="width: 45%;">
                                        <option value="Email">Email</option>
                                        <option value="Phone">Phone</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <label for="FieldeRadio" style="margin-bottom: 0%; font-size: 18px;margin-left:1% ; ">Reason for contacting</label><br>
                            <input type="radio" name="Rcontact" value="Job" style="margin-left:6% ;"> Becoming a customer<br>
                            <input type="radio" name="Rcontact" value="Techinical" style="margin-left:6% ;"> Service Question<br>
                            <input type="radio" name="Rcontact" value="Work Experance" style="margin-left:6% ;"> Service Rate<br>
                        </div>
                        <label for="FieldDropDown" style="margin-bottom: 0%;  font-size: 18px; color: #4285f4!important" ">Comment</label>
                        <br>
                        <br>


                        <textarea rows="5" cols="43" id="MessageArea" style="background-color:#ACACAC; border-radius: 8px; margin-left:5% ; width: 90% ;"> </textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" style="width:50%; background: #3FCC4F;border-color:#3FCC4F; margin-right: 2%; ">Send</button>
                    </div>
                </div>
            </div>
        </div>


    </div>



</header>

