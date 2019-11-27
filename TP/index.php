<!DOCTYPE html>
<html>
<head>
    <title>Voting System</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div style="background: black; color: white; text-align: center; width: 100%; padding 7px; font-family: comic sans ms;"><h2>Voter pour votre fast-food préféré.</h2></div>
<div class="container">
    <form action="index.php" method="post" align="center">
        <img src="images/Burger King.jpg" width="250" height="200"/>
        <img src="images/KFC.jpg" width="250" height="200"/>
        <img src="images/McDo.jpg" width="250" height="200"/>
        <img src="images/Quick.jpg" width="250" height="200"/>

        <input type="submit" name="Burger King" value="Voter pour Burger King"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="KFC" value="Voter pour KFC"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="McDo" value="Voter pour McDo"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="Quick" value="Voter pour Quick"/>
        &nbsp;&nbsp;&nbsp;
    </form>

    <?php

    $con = mysqli_connect("localhost","root","","voting_online");

    if(isset($_POST['Burger King']))
    {
        $vote_Burger_King = "update votes set Burger King=Burger King+1";
		$run_Burger_King = mysqli_query($con,$vote_Burger_King);

	if($run_Burger_King) {
        echo "<h2 align='center'> Votre vote a été compté pour Burger King !</h2>";
        echo "<h2 align='center'><a href='index.php?results'>Voir Résultats</a></h2	>";
    }
}


    if(isset($_POST['KFC']))
    {
        $vote_KFC = "update votes set KFC=KFC+1";
        $run_KFC = mysqli_query($con,$vote_KFC);

        if($run_KFC) {
            echo "<h2 align='center'> Votre vote a été compté pour KFC !</h2>";
            echo "<h2 align='center'><a href='index.php?results'>Voir Résultats</a></h2>";
        }
    }


    if(isset($_POST['McDO']))
    {
        $vote_McDo = "update votes set McDo=McDo+1";
        $run_McDo = mysqli_query($con,$vote_McDo);

        if($run_McDo) {
            echo "<h2 align='center'> Votre vote a été compté pour McDo !</h2>";
            echo "<h2 align='center'><a href='index.php?results'>Voir Résultats</a></h2>";
        }
    }


    if(isset($_POST['Quick']))
    {
        $vote_Quick = "update votes set Quick=Quick+1";
        $run_Quick = mysqli_query($con,$vote_Quick);

        if($run_Quick) {
            echo "<h2 align='center'> Votre vote a été compté pour Quick !</h2>";
            echo "<h2 align='center'><a href='index.php?results'>Voir Résultats</a></h2>";
        }
    }

    if(isset($_GET['results']))
    {
        $get_votes = "select * from votes";
        $run_votes = mysqli_query($con, $get_votes);
        $row_votes = mysqli_fetch_array($run_votes);

        $Burger_King = $row_votes['Burger King'];
			$KFC = $row_votes['KFC'];
			$McDo = $row_votes['McDo'];
			$Quick = $row_votes['Quick'];

	$count = $Burger_King+$KFC+$McDo+$Quick;

	$per_Burger_King = round($Burger_King*100/$count) . "%";
	$per_KFC = round($KFC*100/$count) . "%";
	$per_McDo = round($McDo*100/$count) . "%";
	$per_Quick = round($Quick*100/$count) . "%";

	echo "
	<div style='background: orange' padding: 10px; text-align: center;>
		<center>
			<h2>Mise à jour des résultats:</h2>
		<p style='background: black; color: white; padding:10px; width=500px;'>
			<b>Burger King: </b> $Burger_King ($per_Burger_King)
		</p>
		
		<p style='background: black; color: white; padding:10px; width=500px;'>
			<b>KFC: </b> $KFC ($per_KFC)
		</p>
		
		<p style='background: black; color: white; padding:10px; width=500px;'>
			<b>McDo: </b> $McDo ($per_McDo)
		</p>
		
		<p style='background: black; color: white; padding:10px; width=500px;'>
			<b>Quick: </b> $Quick ($per_Quick)
		</p>
		</center>
	</div>
	";
}
    ?>
</div>


<div style="background: black; color: white; text-align: center; width: 100%; padding 7px; font-family: comic sans ms;"><h2>Créer par le groupe 4.</h2></div>
</body>
</html>