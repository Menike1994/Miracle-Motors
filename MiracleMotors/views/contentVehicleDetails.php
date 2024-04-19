<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Staff_Registration</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/Reg.css" />
  </head>

  <body>
    <div class="container">
        <!--<div class="row">-->
        <form action="" method="post" id="vdetails">
            <h2 align="center">Vehicle Details</h2>
            <div class="col-md-6 mb-3">
                    <label for="brand"><b>Vehicle Brand : * </label>
                    <select name="brand" id="brand" required>
                        <option value="">--- Choose a Vehicle Brand ---</option>
                        <option value="Acura">Acura</option>
                        <option value="Alfa_Romeo">Alfa Romeo</option>
                        <option value="BMW">BMW</option>
                        <option value="Buick">Buick</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Dodge">Dodge</option>
                        <option value="FIAT">FIAT</option>
                        <option value="Ford">Ford</option>
                        <option value="GMC">DMC</option>
                        <option value="Genesis">Genesis</option>
                        <option value="Honda">Honda</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="INFINITI">INFINITI</option>
                        <option value="Jaguar">Jaguar</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Kia">Kia</option>
                        <option value="Land_Rover">Land Rover</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lincoln">Lincoln</option>
                        <option value="MINI">MINI</option>
                        <option value="Maserati">Maserati</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Mercedes_Benz">Mercedes-Benz</option>
                        <option value="Mitshubishi">Mitshubishi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Ram">Ram</option>
                        <option value="Subarn">Subaran</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                    </select>
                </div>
    
            <div class="col-md-6 mb-3">
                <label for="modle"><b>Vehicle Modle : * </b></label>
                <input type="text" placeholder="Enter Modle" name="modle" id="modle" required>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="Condition"><b>Vehicle Condition : * </label>
                <select name="condition" id="cindithion" required>
                    <option value="">--- Choose a Vehicle Condition ---</option>
                    <option value="new">Brand New</option>
                    <option value="re">Recondition</option>
                    <option value="sss">used</option>
                </select>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="yom"><b>Date of Manufacture : * </b></label>
                <input type="text" placeholder="Enter Maufacture Date" name="yom" id="yom" required>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="yor"><b>Date of Registration : * </b></label>
                <input type="text" placeholder="Enter Registration Date" name="yor" id="yor" required>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="engineCapacity"><b>Engine Capacity : * </b></label>
                <input type="text" placeholder="Enter Engine Capacity" name="engineCapacity" id="engineCapacity" required>
            </div>
            <br>
            <div class="col-md-6 mb-3 ">
                <label for="fuelType"><b>Vehicle Fuel Type : * </label>
                <select name="fuelType" id="FuelType" required>
                    <option value="">--- Choose Fuel Type ---</option>
                    <option value="petrol">Prtrol</option>
                    <option value="Desel">Desel</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Electric">Electric</option>
                </select>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="mileage"><b>Milage : </b></label>
                <input type="text" placeholder="Enter mileage" name="mileage" id="mileage">
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="vehicleNo"><b>Vehicle Number : * </b></label>
                <input type="text" placeholder="AAA" name="vehicleNo" id="vehicleNo" required>
                <input type="text" placeholder="1234" name="vehicleNo" id="vehicleNo" required>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="colour"><b>Colour : * </b></label>
                <input type="text" placeholder="Enter Colour" name="colour" id="colour" required>
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="noOfOwners"><b>Number Of Owners : * </b></label>
                <input type="text" placeholder="Enter Number of Owners " name="noOfOwners" id="noOfOwners" required>
            </div>
            <br>
            <div class="col-md-6 mb-12">
                <label for="options"><b>Options :</b></label>
                <textarea name="comment" rows="5" cols="40" placeholder="Enter ...."></textarea>
            </div>
            <br>
            <P>Upload Vehicle Photos</p>
            <div style=" float: bottom; margin-left: 5%">
                <input type='file' name="vehicleImg1" onchange="img001(this);" />
                <img class="sampleimg" id="vehicleImg1" src="#" alt="" />
            </div>
            <!--<div style=" float: bottom; margin-left: 5%">
                <input type='file' name="vehicleImg2" onchange="img001(this);" />
                <img class="sampleimg" id="vehicleImg2" src="#" alt="" />
            </div>
            <br>
            <div style=" float: bottom; margin-left: 5%">
                <input type='file' name="vehicleImg3" onchange="img001(this);" />
                <img class="sampleimg" id="vehicleImg3" src="#" alt="" />
            </div>
            <br>
            <div style=" float: bottom; margin-left: 5%">
                <input type='file' name="vehicleImg4" onchange="img001(this);" />
                <img class="sampleimg" id="vehicleImg4" src="#" alt="" />
            </div>
            <br>
            <div style=" float: bottom; margin-left: 5%">
                <input type='file' name="vehicleImg5" onchange="img001(this);" />
                <img class="sampleimg" id="vehicleImg5" src="#" alt="" />
            </div>-->

            <p>uplod Insurance photo</p>
            <div style=" float: bottom; margin-left: 5%">

                <input type='file' name="insurance" onchange="img001(this);" />
                <img class="sampleimg" id="insurance" src="#" alt="" />
            </div>
            <p>uplod Green Test photo</p>
            <div style=" float: bottom; margin-left: 5%">

                <input type='file' name="greenTest" onchange="img001(this);" />
                <img class="sampleimg" id="greenTest" src="#" alt="" />
            </div>

            <script>
                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#vehicleImg1')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#vehicleImg2')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#vehicleImg3')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#vehicleImg4')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#vehicleImg5')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#insurance')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function img001(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#greenTest')
                                .attr('src', e.target.result)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                setInterval(function() {
                    var gyt = $("#richTextField").contents().find("body").html().match(/@/g);
                    if ($("#richTextField").contents().find("body").html().match(/@/g) >= 0) {} else {
                        $("#discr").val($("#richTextField").contents().find("body").html());
                    }
                    $("#discr").val($("#richTextField").contents().find("body").html());
                }, 1000)
            </script>
            <br>
            Active:
            <input type="radio" name="active" value="yes">Yes
            <input type="radio" name="active" value="no">No
            <br>
            <br>
            Shifted:
            <input type="radio" name="shifted" value="yes">Yes
            <input type="radio" name="shifted" value="no">No
            <br>
            <br>
            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
            <input type="button" value="Submit" name="Submit" onclick="validate()" />
        </form>
        </div>
    <!--</div>-->
  </body>
</html>
