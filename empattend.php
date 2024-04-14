

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance</title>

     <link rel="stylesheet" type="text/css" href="styleattend.css">
     <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <h1>Trimurti Tools</h1>
            <ul id="navli">
                <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
                <li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>">My Profile</a></li>
                <li><a class="homeblack" href="empproject.php?id=<?php echo $id?>">My Projects</a></li>
                <li><a class="homered" href="empattend.php?id=<?php echo $id?>">Mark Attendance</a></li>
                <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>">Apply Leave</a></li>
                <li><a class="homeblack" href="elogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="divider"></div>
    <div id="divimg">
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
    </div>

    <script>
        function recordTime(action) {
            var timestamp = new Date().toLocaleString();
            document.getElementById(action).textContent = timestamp;
        }

        function submitAttendance() {
            var checkInTime = document.getElementById('check-in').textContent;
            var checkOutTime = document.getElementById('check-out').textContent;

            var attendanceData = {
                checkInTime: checkInTime,
                checkOutTime: checkOutTime
            };

            console.log(attendanceData);
            // Here you can send this data to your server for storage or processing
            // Example: You can use AJAX to send this data to a PHP script
        }
    </script>
</body>
</html>
