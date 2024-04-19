<?php


session_start();
ob_start();
include_once '../database/connection.php';

if (isset($_POST['vehicledetails'])) {
    $brnd = $_POST['brand'];
    $modle = $_POST['modle'];
    $vcondition = $_POST['vcondition'];
    $yom = $_POST['yom'];
    $yor = $_POST['yor'];
    $engineCapacity = $_POST['engineCapacity'];
    $fuelType = $_POST['fuelType'];
    $mileage = $_POST['mileage'];
    $vehicleNo = $_POST['vehicleNo'];
    $color = $_POST['color'];
    $noOfOwners = $_POST['noOfOwners'];
    $options = $_POST['options'];
    $vehicleimg1 = $_POST['vehicleimg1'];
    $vehicleimg2 = $_POST['vehicleimg2'];
    $vehicleimg3 = $_POST['vehicleimg3'];
    $vehicleimg4 = $_POST['vehicleimg4'];
    $vehicleimg5 = $_POST['vehicleimg5'];
    $insuarance = $_POST['inuarance'];
    $greenTest = $_POST['greenTest'];
    $active = $_POST['active'];
    $shifted = $_POST['shifted'];


   // $date = date("hmYsd_i");
    
    $img1name = $_FILES["vehicleimg1"]["name"];
                    $file_ext = substr($img1name, strripos($img1name, '.'));
                    $filesize = $_FILES["vehicleimg1"]["size"];
                    $newfilename1 = ($nic) . "vehicleimg1" . ($newname) . $file_ext;
                        
                            move_uploaded_file($_FILES["vehicleimg1"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename1);
                        
                         
                    $img2name = $_FILES["vehicleimg2"]["name"];
                    $file_ext = substr($img2name, strripos($img2name, '.'));
                    $filesize = $_FILES["vehicleimg2"]["size"];
                    $newfilename2 = ($nic) . "vehicleimg2" . ($newname) . $file_ext;
                       
                            move_uploaded_file($_FILES["vehicleimg2"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename2);
                        

                   
                                    $img3name = $_FILES["vehicleimg3"]["name"];
                                    $file_ext = substr($img3name, strripos($img3name, '.'));
                                    $filesize = $_FILES["vehicleimg3"]["size"];
                                    $newfilename3 = ($nic) . "vehicleimg3" . ($newname) . $file_ext;
                                        
                                    move_uploaded_file($_FILES["vehicleimg3"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename3);

                                    $img4name = $_FILES["vehicleimg4"]["name"];
                                    $file_ext = substr($img4name, strripos($img4name, '.'));
                                    $filesize = $_FILES["vehicleimg4"]["size"];
                                    $newfilename3 = ($nic) . "vehicleimg4" . ($newname) . $file_ext;
                                        
                                    move_uploaded_file($_FILES["vehicleimg4"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename4);

                                    $img5name = $_FILES["vehicleimg5"]["name"];
                                    $file_ext = substr($img5name, strripos($img5name, '.'));
                                    $filesize = $_FILES["vehicleimg5"]["size"];
                                    $newfilename3 = ($nic) . "vehicleimg5" . ($newname) . $file_ext;
                                        
                                    move_uploaded_file($_FILES["vehicleimg5"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename5);

                                    $img6name = $_FILES["insuarance"]["name"];
                                    $file_ext = substr($img6name, strripos($img6name, '.'));
                                    $filesize = $_FILES["insuarance"]["size"];
                                    $newfilename3 = ($nic) . "insuarance" . ($newname) . $file_ext;
                                        
                                    move_uploaded_file($_FILES["insuarance"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename6);

                                    $img6name = $_FILES["greenTest"]["name"];
                                    $file_ext = substr($img6name, strripos($img6name, '.'));
                                    $filesize = $_FILES["greenTest"]["size"];
                                    $newfilename3 = ($nic) . "greenTest" . ($newname) . $file_ext;
                                        
                                            move_uploaded_file($_FILES["greenTest"]["tmp_name"], "C:/wamp64/www/myproject/images/addimages/" . $newfilename6);
        
        

                            $quary = "INSERT INTO vehicledetails(brand,modle,vcondition,yom,yor,engineCapacity,fuleType,mileage,vehicleNo,colour,noOfOwners,options,vehicleimg1,vehicleimg2,vehicleimg3,vehicleimg4,vehicleimg5,insuarance,greenTet,active,shifted) 
                            VALUES('$brand','$modle','$vcondition','$yom','$yor','$engineCapcity','$fuelType','$mileage','$vehicleNo','$colour','$noOfOwners','$options','$vehicleimg1','$vehicleimg2','$vehicleimg3','$vehicleimg4','$vehicleimg5','$insuarance','$greenTest',,'$active',,'$shifted')";
                            mysqli_query($connection, $quary) or die("error" . mysqli_error($connection));
}
include("headder.php");
include("contentVehicleDetails.php");
include("footer.php");
?>