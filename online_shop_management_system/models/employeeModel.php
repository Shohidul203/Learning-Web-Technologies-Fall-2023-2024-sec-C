<?php
    r

   
    function findDonor($bloodGroup, $location) {
        equire_once 'db.php';
        $con = getConnection();
        $sql = "select * from donors where bloodGroup = '{$bloodGroup}' and availability = 'Available' and address like '%{$location}%'";
        $result = mysqli_query($con, $sql);
        $donors = [];
        
        while($donor = mysqli_fetch_assoc($result)){
            array_push($donors, $donor);
        }
        
        return $donors;
    }
?>