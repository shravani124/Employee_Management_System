



<html>
<head>
	<title>Employee Panel | Cutting Tools</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header{
            background: black;
            color: white;
            padding: 8px 20px 6px 40px;
            height: 50px;
        }
        header h1{
            display: inline;
            font-family: 'Lobster', cursive;
            font-weight: 400;
            font-size: 32px;
            float: left;
            margin-top: 0px;
            margin-right: 10px;
        }
        nav ul {
            display: inline;
            padding: 0px;
            float: right;
        }
        nav ul li{
            display: inline-block;
            list-style-type: none;
            color: white;
            float: left;
            margin-left: 12px;
        }
        nav ul li a{
            color: white;
            text-decoration: none;	
        }
        nav ul ul{
            display: none;
            position: absolute;
        }
        #navli ul li ul:hovar{
            visibility: visible;
            display: block;
        }
        #navli{
            font-family: 'Montserrat', sans-serif;
        }
        .homered{
            background-color: red;
            padding: 30px 10px 22px 10px;
        }
        .divider{
            background-color: red;
            height: 5px;
        }
        .homeblack:hover{
            background-color: blue;
            padding: 30px 10px 21px 10px;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .check-in, .check-out {
            background-color: #b9e6b5;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .check-out {
            background-color: #ffb5b5;
        }
        .timestamp {
            font-size: 14px;
            color: #666;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
	
	<header>
		<nav>
			<h1>Trimurti Tools</h1>
			<ul id="navli">
				<li><a class="homered" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homeblack" href="empattend.php?id=<?php echo $id?>"">Mark Attendance</a></li>
				<li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>

    <div class="divider"></div>
	<div id="divimg">
	<div>

	<div class="container">
        <h1>Employee Attendance</h1>
        <table>
            <thead>
                <tr>
                    <th>Check-In Time</th>
                    <th>Check-Out Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="check-in" class="check-in" onclick="recordTime('check-in')">Check-In</td>
                    <td id="check-out" class="check-out" onclick="recordTime('check-out')">Check-Out</td>
                </tr>
                
            </tbody>
        </table>
        <button onclick="submitAttendance()">Submit Attendance</button>
    </div>

    <script>
        function recordTime(employeeId, action) {
            var timestamp = new Date().toLocaleString();
            var elementId = employeeId + '-' + action;
            document.getElementById(elementId).textContent = timestamp;
        }

        function submitAttendance() {
            var employeeData = {};
            var rows = document.querySelectorAll('tbody tr');
            rows.forEach(function(row) {
                var employeeName = row.cells[0].textContent;
                var checkInTime = row.cells[1].textContent;
                var checkOutTime = row.cells[2].textContent;
                employeeData[employeeName] = {
                    checkInTime: checkInTime,
                    checkOutTime: checkOutTime
                };
            });
            console.log(employeeData);
            // Here you can send this data to your server for storage or processing
        }
    </script>
	
</body>
</html>