<?php
session_start(); // Start the session
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Record</title>
    <link rel="stylesheet" href="studentattendancerecord.css">
</head>
<body>
    <div id="attendance-record-page" 
        style="background-image: url('liceobg.jpg'); 
        background-size: cover; 
        min-height: 100vh;">

        <div class="community-service-container">
            <h1>Attendance Record</h1>
        </div>

        <div class="card-attendance">
            <div class="card-content">
                <h3>The Attendance Summary will show you how many Absences, Tardy, and cutting class you
                    have, and you can change the year you want. (e.g., 2024) that year will show the numbers of
                    absences, Tardy, and cutting class</h3>
            </div>
            <div class="card-record">
                <p>Year: <span id="attendanceYear">2024</span></p> 
                <input type="number" id="yearInput" value="2024">
                <p>Absent: <span id="absentCount">0</span></p>
                <p>Tardy: <span id="tardyCount">0</span></p>
            </div>
        </div>

        <div class="backtothedashboard">
            <button id="backToDashboardFromAttendance">Back to Dashboard</button>
        </div>

    </div>
</body>

</html>
