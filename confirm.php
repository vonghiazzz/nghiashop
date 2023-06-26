<?php
   include_once 'header.php';
   $c = new Connect();
   $dblink = $c->connectToMySQL();

//    $sql ="SELECT MAX(oid) FROM user_order";
//         $re2 = $dblink->query($sql);
//        // $re3 = $re2->fetch(PDO::FETCH_BOTH);

    $sql = "SELECT * FROM `user_order` order by oid DESC LIMIT 1" ;
    $re = $dblink->query($sql);
    if($re->num_rows>0):
        while($row = $re->fetch_assoc()):


?>





<body>
    <div class="container pb-5">
                <h2>Bill:</h2>
                <form action="" id="form1" name="form1" method="post" class="needs-validation">

                <div class="row pb-3">
                        <label for="txtID" class="col-md-2 col-form-lable">User ID(*):</label>
                        <div class="col-md-10">
                            <input type="text" name="txtID" id="txtID" required class="form-control"
                                placeholder="Enter category ID" value="<?=$row['user_id'];?>" readonly>
                            <!--id với for giống nhau để chuyển sang id được -->
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label for="txtName" class="col-md-2 col-form-lable">Order ID(*):</label>
                        <div class="col-md-10">
                            <input type="text" name="txtName" id="txtName" required class="form-control"
                                placeholder="Enter category Name" value="<?=$row['oid'];?>">
                            <!--id với for giống nhau để chuyển sang id được -->
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label for="txtDes" class="col-md-2 col-form-lable">Total(*):</label>
                        <div class="col-md-10">
                            <input type="text" name="txtDes" id="txtDes" required class="form-control"
                                placeholder="Enter description" value="<?=$row['sum'];?>    ">
                                
                            <!--id với for giống nhau để chuyển sang id được -->
                        </div>
                    </div>
               
                  

                <div class="row pb-3 ms-auto">
                    <div class="">
                      <button onclick="window.location.href='homepage.php'" class="btn btn-outline-primary" type="button">Ok</button>                    </div>
                    </div>
                </form>
    </div>
</body>



<?php
endwhile; 
else:
echo "Not Found";
endif;
?>