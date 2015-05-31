<?php

	include "fragments/header.php";
	include "fragments/nav.php";

	require_once("fragments/connection.php");

	
		$query = $pdo->prepare("SELECT * FROM students ORDER BY student_id DESC LIMIT 1;");
		   	$query->execute();
    		$stud_id = $query->fetch();
    		$next_id = $stud_id['student_id'] + 1;
	if (isset($_POST["addStudent"])) {
		$password = $_POST["password"];
		$last_name = $_POST["last_name"];
		$first_name = $_POST["first_name"];
		$middle_name = $_POST["middle_name"];
		$gender = $_POST["gender"];
		$school = $_POST["sch"];
		$course = $_POST["course"];
		$email = $_POST["email"];

		$query = $pdo->prepare("INSERT INTO `students` VALUES (?,?,?,?,?,?,?,1,2,?,?,0);");
			$query->bindValue(1,$next_id);
		    $query->bindValue(2,$password);
		    $query->bindValue(3,$last_name);
		    $query->bindValue(4,$first_name);
		    $query->bindValue(5,$middle_name);
		    $query->bindValue(6,$school);
		    $query->bindValue(7,$course);
		    $query->bindValue(8,$gender);
		    $query->bindValue(9,$email);
		   	$query->execute();
		   	header("Location: success.php");
	
	}
	
?>
<script type="text/javascript">
    function updateSection(value) {
        var section = "";
        if (value == "SABM") {
            section="AAT";
            section1="BSBA Finman";
            section2="BSBA Bus Econ";
            section3="BSAc";
            section4="BS Entrep";
            section5="MBA";
            section6="BSMA";
            section7="BSBA HRDM";
            section8="PHD MGMT";
            section9="MSPM";
            section10="BSHTM";
            section11="BSHTM TTM";
            section12="MSBA";
            section13="MSAc";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    html += "<option>" + section1 + "</option>";
                    html += "<option>" + section2 + "</option>";
                    html += "<option>" + section3 + "</option>";
                    html += "<option>" + section4 + "</option>";
                    html += "<option>" + section5 + "</option>";
                    html += "<option>" + section6 + "</option>";
                    html += "<option>" + section7 + "</option>";
                    html += "<option>" + section8 + "</option>";
                    html += "<option>" + section9 + "</option>";
                    html += "<option>" + section10 + "</option>";
                    html += "<option>" + section11 + "</option>";
                    html += "<option>" + section12 + "</option>";
                    html += "<option>" + section13 + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SCIS") {
            section="BLIS";
            section1="BSCS";
            section2="BS MATH";
            section3="MS SME";
            section4="BSIT";
            section5="MIT";
            section6="BSIS";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    html += "<option>" + section1 + "</option>";
                    html += "<option>" + section2 + "</option>";
                    html += "<option>" + section3 + "</option>";
                    html += "<option>" + section4 + "</option>";
                    html += "<option>" + section5 + "</option>";
                    html += "<option>" + section6 + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SEA") {
            section="BSMecE";
            section1="MEP IE";
            section2="BSME";
            section3="BSIE";
            section4="D Eng Env E";
            section5="D Eng Info";
            section6="MSME";
            section7="MS MtE";
            section8="MS EN E";
            section9="MEP ME";
            section10="MEP EE";
            section11="MEP ECE";
            section12="MEP ChE";
            section13="MA EHP";
            section14="D Eng Ur PI";
            section15="BSGE";
            section16="BSEM";
            section17="BSEE";
            section18="BS ARCH";
            section19="BSCE";
            section20="BSCHE";
            section21="BSECE";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    html += "<option>" + section1 + "</option>";
                    html += "<option>" + section2 + "</option>";
                    html += "<option>" + section3 + "</option>";
                    html += "<option>" + section4 + "</option>";
                    html += "<option>" + section5 + "</option>";
                    html += "<option>" + section6 + "</option>";
                    html += "<option>" + section7 + "</option>";
                    html += "<option>" + section8 + "</option>";
                    html += "<option>" + section9 + "</option>";
                    html += "<option>" + section10 + "</option>";
                    html += "<option>" + section11 + "</option>";
                    html += "<option>" + section12 + "</option>";
                    html += "<option>" + section13 + "</option>";
                    html += "<option>" + section14 + "</option>";
                    html += "<option>" + section15 + "</option>";
                    html += "<option>" + section16 + "</option>";
                    html += "<option>" + section17 + "</option>";
                    html += "<option>" + section18 + "</option>";
                    html += "<option>" + section19 + "</option>";
                    html += "<option>" + section20 + "</option>";
                    html += "<option>" + section21 + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SNS") {
            section="BS PHARM";
            section1="MS PHARM";
            section2="MS M BIOL";
            section3="MS ECB";
            section4="MS A BIOL";
            section5="MPH";
            section6="MES";
            section7="PHD BIOL";
            section8="BSRT";
            section9="BS BIOL";
            section10="MSMT";
            section11="MBS";
            section12="BMLS";
            section13="MS P BIOL";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    html += "<option>" + section1 + "</option>";
                    html += "<option>" + section2 + "</option>";
                    html += "<option>" + section3 + "</option>";
                    html += "<option>" + section4 + "</option>";
                    html += "<option>" + section5 + "</option>";
                    html += "<option>" + section6 + "</option>";
                    html += "<option>" + section7 + "</option>";
                    html += "<option>" + section8 + "</option>";
                    html += "<option>" + section9 + "</option>";
                    html += "<option>" + section10 + "</option>";
                    html += "<option>" + section11 + "</option>";
                    html += "<option>" + section12 + "</option>";
                    html += "<option>" + section13 + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SOH") {
            section="MS GC";
            section1="MA RELG STDS";
            section2="BA PIS";
            section3="BA ENGL";
            section4="BS S WK";
            section5="BS PSYCH";
            section6="BS POLIT CS";
            section7="BARVS";
            section8="MS PSYCH";
            section9="MA PHILOS";
            section10="BA LS";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    html += "<option>" + section1 + "</option>";
                    html += "<option>" + section2 + "</option>";
                    html += "<option>" + section3 + "</option>";
                    html += "<option>" + section4 + "</option>";
                    html += "<option>" + section5 + "</option>";
                    html += "<option>" + section6 + "</option>";
                    html += "<option>" + section7 + "</option>";
                    html += "<option>" + section8 + "</option>";
                    html += "<option>" + section9 + "</option>";
                    html += "<option>" + section10 + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SOL") {
            section="LLB";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SOM") {
            section="MD";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "SON") {
            section="BSN";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    demoP.innerHTML = html;
}
        } else if (value == "STE") {
            section="BEED SPED";
            section1="BSED BIOL SCI";
            section2="BSED ENGL";
            section3="BSED FIL";
            section4="MAED IE";
            section5="BSED MAPEH";
            section6="MSPES";
            section7="BSED MAT";
            section8="BSED PHYS SCI";
            section9="PHD EM";
            section10="PHD LANG ED";
            section11="MA EM";
            section12="BSED SS";
            section13="MAMED";
            section14="BEED PRE SCHL";
            section15="MALIT";
            section16="MAED LANG";
            section17="BEED GEN ED";
            section18="BEED THE";
            section19="MAED FIL ED";
            section20="MAED ECED";
            section21="BEED VAL";
            section22="MA SPED";
            var demoP = document.getElementById("course");
{
                    var html = "";
                    html += "<option>" + section + "</option>";
                    html += "<option>" + section1 + "</option>";
                    html += "<option>" + section2 + "</option>";
                    html += "<option>" + section3 + "</option>";
                    html += "<option>" + section4 + "</option>";
                    html += "<option>" + section5 + "</option>";
                    html += "<option>" + section6 + "</option>";
                    html += "<option>" + section7 + "</option>";
                    html += "<option>" + section8 + "</option>";
                    html += "<option>" + section9 + "</option>";
                    html += "<option>" + section10 + "</option>";
                    html += "<option>" + section11 + "</option>";
                    html += "<option>" + section12 + "</option>";
                    html += "<option>" + section13 + "</option>";
                    html += "<option>" + section14 + "</option>";
                    html += "<option>" + section15 + "</option>";
                    html += "<option>" + section16 + "</option>";
                    html += "<option>" + section17 + "</option>";
                    html += "<option>" + section18 + "</option>";
                    html += "<option>" + section19 + "</option>";
                    html += "<option>" + section20 + "</option>";
                    html += "<option>" + section21 + "</option>";
                    html += "<option>" + section22 + "</option>";
                    demoP.innerHTML = html;
}
        } else section = null;
    }
</script>

	<div class="container-fluid" id="other">
		<div class="container well">
			<h2>Add Student</h2>
			<form action="addStudent.php" id="form" method="post">
				<label>Student ID: </label>
					<input class="form-control" type="text" value="<?php echo $next_id?>" disabled/>
				<label>Password:</label>
					<input class="form-control" type="text"  name="password" placeholder="1000512"/>
				<label>Last Name: </label>
					<input class="form-control" type="text"  name="last_name" placeholder="Doe"/>
				<label>First Name: </label>
					<input class="form-control" type="text"  name="first_name" placeholder="John"/>
				<label>Middle Name: </label>
					<input class="form-control" type="text"  name="middle_name" placeholder="Flores"/>
				<label>Gender:</label>
				<select class="form-control" name="gender">
						<option>M</option>
						<option>F</option>
				</select>
                    <label class="form-label" for="field-1">School</label>
                    <select class="form-control" id="sch" name="sch" onchange="updateSection(this.value);">
						<option>SABM</option>
						<option>SCIS</option>
						<option>SEA</option>
						<option>SNS</option>
						<option>SOH</option>
						<option>SOL</option>
						<option>SOM</option>
						<option>SON</option>
						<option>STE</option>
                    </select>
                    <div class="form-group">
                        <label class="form-label" for="field-1">Course</label>
                            <select class="form-control" id="course" name="course">
                                <option>HRM</option>
                                <option>AAT</option>
                                <option>BSBA Finman</option>
					            <option>BSBA Bus Econ</option>
					            <option>BSAc</option>
					            <option>BS Entrep</option>
					            <option>MBA</option>
					            <option>BSMA</option>
					            <option>BSBA HRDM</option>
					            <option>PHD MGMT</option>
					            <option>MSPM</option>
					            <option>BSHTM</option>
					            <option>BSHTM TTM</option>
					            <option>MSBA</option>
					            <option>MSAc</option>
                            </select>
                    </div>
				<label>Email:</label>
					<input class="form-control" type="text"  name="email" placeholder="johndoekennedy@gmail.com"/>
				<button class="btn btn-success" name="addStudent" type="submit">Register</button>
			</form>
		</div>
	</div>

<?php include "fragments/footer.php" ?>