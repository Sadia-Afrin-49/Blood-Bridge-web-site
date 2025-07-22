<?php

//include header file
include ('include/header.php');

?>

<div class="container-fluid header-img">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="header">
                <h1 class="text-center">Donate the blood, save the life</h1>
                <p class="text-center">Donate the blood to help the others.</p>
            </div>

            <h1 class="text-center">Search The Donors</h1>
            <hr class="white-bar text-center">

            <form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                <div class="form-group text-center justify-content-center">

                    <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                        <option value="">-- Select --</option>
                        <optgroup title="Select District" label="&raquo; Select District"></optgroup>
                        <option value="Bagerhat">Bagerhat</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Barguna">Barguna</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Bogra">Bogra</option>
                        <option value="Brahmanbaria">Brahmanbaria</option>
                        <option value="Chandpur">Chandpur</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Chuadanga">Chuadanga</option>
                        <option value="Cox's Bazar">Cox's Bazar</option>
                        <option value="Cumilla">Cumilla</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Feni">Feni</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Habiganj">Habiganj</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <option value="Jashore">Jashore</option>
                        <option value="Jhalokati">Jhalokati</option>
                        <option value="Jhenaidah">Jhenaidah</option>
                        <option value="Joypurhat">Joypurhat</option>
                        <option value="Khagrachari">Khagrachari</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Kushtia">Kushtia</option>
                        <option value="Lakshmipur">Lakshmipur</option>
                        <option value="Lalmonirhat">Lalmonirhat</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Magura">Magura</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Meherpur">Meherpur</option>
                        <option value="Moulvibazar">Moulvibazar</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Narail">Narail</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Natore">Natore</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Panchagarh">Panchagarh</option>
                        <option value="Patuakhali">Patuakhali</option>
                        <option value="Pirojpur">Pirojpur</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Satkhira">Satkhira</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <option value="Sherpur">Sherpur</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Sunamganj">Sunamganj</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Tangail">Tangail</option>
                        <option value="Thakurgaon">Thakurgaon</option>
                    </select>
                </div>
                <div class="form-group center-aligned">
                    <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                    </select>
                </div>
                <div class="form-group center-aligned">
                    <button type="submit" class="btn btn-lg btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
            <hr class="white-bar">
            <p class="text-center pera-text">
			Though Bangladesh has more than 160 million people, the number of safe blood bank is very few. Without divisional towns, there is hardly any blood bank. But a huge amount of blood is needed for treatment purposes. A good number of accidents take place every day where blood needs essentially. As a result, people fall in real trouble to manage blood. But there are many blood donors who are interested in donating blood but don’t know who needs blood. The communication gap is resulting in the loss of many lives.
			
			Blood Bridge comes into the scenario to reduce or minimize the communication gap and connects people in a moment using the amazing power of SMS and email. As Blood Bridge services can also be availed by SMS, people from any class of the society can easily avail of Blood Bridge services.       
		</p>
            <a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
        </div>
    </div>
</div>
<!-- end donate section -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Vision</h3>
                <img src="img/binoculars.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
                <p class="text-center">
				Ensuring no more death just for the need of blood.               </p>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Goal</h3>
                <img src="img/target.png" alt="Our Goal" class="img img-responsive" width="168" height="168">
                <p class="text-center">
				Encouraging voluntary blood donation. Creating awareness about safe blood transfer. Enabling people to place blood request via SMS, website. Connecting voluntary blood donors via SMS.                 </p>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Mission</h3>
                <img src="img/goal.png" alt="Our Mission" class="img img-responsive" width="168" height="168">
                <p class="text-center">
				Connecting blood searchers with voluntary blood donors in a moment with the use of technology.                </p>
            </div>
        </div>
    </div>
</div>

<!-- end aboutus section -->

<?php
//include footer file
include ('include/footer.php');
?>
