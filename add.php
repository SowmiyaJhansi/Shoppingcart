<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Add List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
    <div class="container mt-5">
        <h1>Add Shopping List</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label>Item name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Item name" 
                    name="Item_Name" />
            </div>
  
            <div class="form-group">
                <label>Item quantity</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Item quantity" 
                    name="Item_Quantity" />
            </div>
  
            <div class="form-group">
                <label>Item status</label>
                <select class="form-control" 
                    name="Item_Status">
                    <option value="0">
                        PENDING
                    </option>
                    <option value="1">
                        BOUGHT
                    </option>
                    <option value="2">
                        NOT AVAILABLE
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" 
                    class="form-control" 
                    placeholder="Date" 
                    name="Date">
            </div>
            <div class="form-group">
                <input type="submit" 
                    value="Add" 
                    class="btn btn-danger" 
                    name="btn">
            </div>
        </form>
    </div>
  
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $item_name=$_POST['Item_Name'];
            $item_qty=$_POST['Item_Quantity'];
            $item_status=$_POST['Item_Status'];
            $date=$_POST['Date'];
      
  
            $q="insert into listtb(Item_name,
            Item_Quantity,Item_status,Date)
            values('$item_name',$item_qty,s
            '$item_status','$date')";
  
            mysqli_query($con,$q);
            header("location:index.php");
        }

    ?>
</body>
  
</html>
 