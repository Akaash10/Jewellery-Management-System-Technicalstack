<?php
$host = "localhost";
$username = "akaash";
$password = "Achielles@20";
$database = "miniproject";
$conn = new mysqli($host, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View_Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         *{
            margin: 0;
            padding: 0;
        }
        .content {
          height: 100vh;
          width: 100%;
          display: flex;
          justify-content: flex-start;
          flex-wrap: wrap;
          gap: 20px;
        }
        .card {
          position: relative;
          display: flex;
          height: 400px;
          width: 300px;
          border-radius: 20px;
          border: 1px solid grey;
          flex-direction: column;
          justify-content: center;
          text-align: center;
          align-items: center;
          transition: transform 0.7s;
          transform-style: preserve-3d;
        }

        .face {
          --flow-space: 1rem;
          position: absolute;
          height: 100%;
          width: 100%;
          backface-visibility: hidden;
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

        .reduce-motion .back {
          z-index: 2;
          opacity: 0;
          pointer-events: none;
          transition-duration: 0.6s;
          transform: none;
        }

        .reduce-motion .card:focus,
        .reduce-motion .card:focus-within,
        .reduce-motion .card:hover {
          transform: none;
        }

        .reduce-motion .card:focus .back,
        .reduce-motion .card:focus-within .back,
        .reduce-motion .card:hover .back {
          opacity: 1;
          pointer-events: all;
          transform: none;
        }
    </style>
</head>
<body>
    <div class="content-c">
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
                <div class="box face front flow" style="background-image: url("./img/gold.jpg");border-radius: 20px;border-style: none;">
                <h2></h2>
                <p><b><i>'.$display_name.'</i></b></p>
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

        <?php
        $sql = "SELECT * FROM product_details";
        $result = $conn->query($sql);
        ?>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span id="modalName"></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Description: <span id="modalDescription"></span></p>
                    <p>Duration: <span id="modalDuration"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-toggle="modal" onclick="">Register</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
</body>
</html>
