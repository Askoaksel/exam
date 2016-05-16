<?php

include('config.php');
if($_POST){
    if(isset($_POST['delete'])){
        $del = explode(':', $_POST['delete']);
        $del = trim($del[1]);
        $query = 'UPDATE ' . $tableName . ' SET deleted = "1" WHERE id = "' . $del . '";';
        mysqli_query($con, $query);
    }else {
        $query = 'INSERT INTO ' . $tableName . ' (id, user, date_taken, location, aperature, lens, prod) VALUES ("' . $_POST['id'] . '", "' . $_POST['user'] . '", "' . $_POST['date_taken'] . '", "' . $_POST['location'] . '", "' . $_POST['aperature'] . '", "' . $_POST['lens'] . '";';
        mysqli_query($con, $query);
    }
}



?>


<html lang="et">
<head>
	<meta charset="utf-8" />
    <style>

        tbody td{
            border: solid 1px darkgray;
        }
        thead td{
            border: solid 1px black;
            background-color: gray;
        }

    </style>
	</head>
	<body>
	<form method="post" action="">
	<div>
		<label>
	Name <em><abbr title= "kohustuslik väli">*</abbr></em><input type="text" name="name" required="required" size="50" maxlength="100" />
		</label>
	</div>
	<div>
		<label>
	Date taken<em><abbr title= "kohustuslik väli">*</abbr></em><input type="date" name="date" required="required"  />
		</label>
	</div>
	<div>
		<label>
	Location<em><abbr title= "kohustuslik väli">*</abbr></em><input type="text" name="location" required="required"  />
		</label>
	</div>

	
		<div>
		<label>
	Aperature<em><abbr title= "kohustuslik väli">*</abbr></em><input type="number" name="vanus" required="required"  />
		</label>
	</div>
	
		<div>
		<label>
	Lens<em><abbr title= "kohustuslik väli">*</abbr></em><input type="text" name="vanus" required="required"  />
		</label>
	</div>
	
	    	<div>
		<label>
	<input type= "submit" name="Save" value="Save" />
		</label>
	</div>
	
    </form>
    <div style="display:block;">
    <h2>Salvestatud andmed</h2>
        <form method="post" action="">
    <?php include('table.php'); ?>
        </form>
    </div>


</body>
</html>
