<?php
$host = "localhost";
$username = "akaash";
$password = "Achielles@20";
$database = "miniproject";
$conn = new mysqli($host, $username, $password, $database);
$image_url = "./img/scrm.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Secondpage</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    *{
    margin: 0;
    padding: 0;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .content{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 55vh;
        width: 100%;
        background-color: black;
    }
    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        height: 400px;
        width: 300px;
        border-radius: 20px;
        border: 1px solid grey;
        transition: transform 0.9s;
        transform-style: preserve-3d;
    }
    .face {
        --flow-space: 1rem;
        position: absolute;
        height: 100%;
        width: 100%;
        backface-visibility: hidden;
        display: flex;
        justify-content: center;
    }
    .back {
        display: grid;
        place-items: center;
        background: cornflowerblue;
        border-radius: 20px;
        transform: rotateY(180deg);
    }
    .card:focus,
    .card:hover {
        transform: rotateY(180deg);
    }
    button {
        border: 1px solid white;
        background: none;
        color: white;
        font-size: 1.25rem;
        font-weight: lighter;
        padding: 1rem;
        transition-duration: 0.30s;
        cursor: pointer;
    }
    button:hover,
    button:focus {
        background: white;
        color: cornflowerblue;
    }

    .modalx {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-contentx {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-height: 35%; /* Set a maximum height for the modal content */
        overflow-y: auto; /* Enable vertical scrolling if the content exceeds the height */
        position: relative;
    }

    .closex {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        cursor: pointer;
    }

    #showModalButton {
        padding: 3px 5px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    #showModalButton:hover {
        background-color: #0056b3;
    }

    </style>
</head>
<body>
    
            <div class="content" id="displayProduct">
                    <?php
                        $output='';
                        $sql='select * from product_details';
                        $exe=mysqli_query($conn,$sql);
                        if($exe->num_rows>0){
                        while($res=mysqli_fetch_array($exe)){
                            $display_name = $res["name"];
                            $display_description = $res["description"];
                            $display_duration = $res["duration"];
                            $output.='<div class="card">
                            <div class="box face front flow" style="background-image: url(<?php echo $image_url; ?>);border-radius: 20px;border-style: none;height:398px;width:298px;">
                            <h2></h2>
                            <p><b><i>'.$display_name.'</b></i></p>
                            </div>
                            <div class="face back">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-name="' . $display_name . '" data-description="' . $display_description . '" data-duration="' . $display_duration . '">Read More</button>
                            </div>
                            </div>';
                        }
                        echo $output;
                        }
                    ?>
            </div>

            <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><span id="modalName"></span></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>Description: <span id="modalDescription"></span></p>
                        <p>Duration: <span id="modalDuration"></span></p>
                        <button id="showModalButton">Accept terms and conditions to enroll</button>
                        
                        <div id="termsModal" class="modalx">
                            <div class="modal-contentx">
                                <span class="closex" id="closeModal">&times;</span>
                                <h2>Terms and Conditions</h2>
                                <div id="termsContent">
                                <p>1. This is a advance jewellery BOOKING plan. NO REFUND of money is allowed under any circumstances under the plan. <br>
        
                                2. The plan is unique and will not be linked to any other existing or future plans / offers and is not transferable under any circumstance.<br>
        
                                3. The money paid as advance under this plan shall not bear any interest.<br>
                                
                                4. Minimum booking amount is Rs.10,000/-. There is no CEILING for the maximum amount and a copy of PAN is to be furnished for amount exceeding Rs.2,00,000/-. All Online payments allowed above Rs.2 Lac except of cash payments. Cash payments shall not be allowed above Rs.1,80,000.<br>
                                
                                5. In this plan, MINOR CANNOT BECOME AN APPLICANT/MEMBER.<br>
                                
                                6. At the time of joining in the Jewellery Purchase Plan, the member may appoint a NOMINEE by furnishing KYC of both self and nominee. For Online Enrolled Member KYC and selfie photo of both attachment is mandatory.<br>
                                
                                7. Payment of monthly instalments can be made through all online payment mode i.e., Debit/Credit Card, UPI /QR, Net Banking, Wallet, Pay Later. EMI card not allowed. bond for payment made can be obtained or sent via courier.<br>
                                
                                8. Offline customers payments can be made through Cash, Credit / Debit Card, local cheques it shall be drawn in favour of “Lalithaa Jewellery Mart Private Ltd”. In case of dishonor of cheques, actual bank charges (Rs.200 to Rs.500 as the case maybe) shall be borne by the member. Member should ensure to collect receipt voucher / original membership bond while making payment directly at the respective branch.<br>
                                
                                9. The amount you pay is credited in 22 karat grams of gold as per the gold rate prevailing on the date of payment.<br>
                                
                                10. The time period for taking delivery of jewellery / purchase shall not exceed 365 days from the commencement date of the plan.<br>
                                
                                11. Members have the option to purchase gold coins also.<br>
                                
                                12. In case of balance money if any, left out in the plan account after adjusting the purchase price, various items shall be made available such as gold coins, silver coins, gift items and likewise for the members to purchase. Balance money will not be refunded.<br>
                                
                                13. Applicable Stone Charges will be collected from the members for ornaments with ruby, emerald, zircon, diamond, special stones, etc. Very few, special items such as oddiyanam, nagaz, kumkumchimizh, thirumangalyam, etc shall attract extra charges.<br>
                                
                                14. The person, who has enrolled in online application form, should sign on the invoice and prebooking bond at the time of purchase of jewellery. Produce ID & Address proof and bank passbook at the time of joining and redemption. Online Enrolled member if not come for jewellery purchase, the nominee ID and address proof shall be furnished along with declaration letter duly signed by the original enrolled member of respective scheme.<br>
                                
                                15. In case the member does not take delivery of the jewellery within 365 days from the enrolment date, sale invoice will be raised in the name of the member towards sale of jewellery, applicable GST on sale value will be paid to the Government and the ornaments weight due to the member will be held as “stock in custody” by the company till the member takes delivery of the ornament. This will be displayed in customer ledger in online app under the option Closed Scheme. The member can see their ledger and dues at any time and any where in mobile app and website under Lalithaa Jewellery Online Scheme. The offline member will be communicated/informed by the company in this regard by email / hard copy.<br>
                                </div>
                                <label>
                                    <input type="checkbox" id="acceptCheckbox"> I accept the terms and conditions
                                </label>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button class="btn btn-primary" data-toggle="modal" id="registerButton" style="width:100px;" disabled>Register</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
        
                 </div>
               </div>
            </div>



</body>
<script>
    $(document).ready(function () {
        // Handle the "Read More" button click event
        $('[data-toggle="modal"]').click(function () {
            var button = $(this);
            var name = button.data('name');
            var description = button.data('description');
            var duration = button.data('duration');

            // Populate the modal with the data
            $('#modalName').text(name);
            $('#modalDescription').text(description);
            $('#modalDuration').text(duration);
        });
    });
</script>
<script>
    
    var modal = document.getElementById("termsModal");
    var closeModal = document.getElementById("closeModal");
    var showModalButton = document.getElementById("showModalButton");
    var acceptCheckbox = document.getElementById("acceptCheckbox");
    var registerButton = document.getElementById("registerButton");

    // Function to toggle the Register button based on checkbox state
    function toggleRegisterButton() {
        if (acceptCheckbox.checked) {
            registerButton.disabled = false;
        } else {
            registerButton.disabled = true;
        }
    }

    // When the user clicks the button, display the modal and check the checkbox
    showModalButton.onclick = function () {
        modal.style.display = "block";
        acceptCheckbox.checked = false; // Ensure the checkbox is unchecked when the modal is shown
        toggleRegisterButton();
    }

    // When the user clicks on the close button, hide the modal
    closeModal.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }

    // Listen for changes in the checkbox state and update the Register button accordingly
    acceptCheckbox.addEventListener("change", toggleRegisterButton);

</script>
</html>