<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
    <style>
        body{
            width: 500px;
            margin: 0 auto;
            padding: 100px;
        }
    </style>
</head>

<body>

    <form method="POST">
        <span>Study Level</span><br/>
        <select name="degree" required style="width:150px">
            <option disabled selected value="">Select</option>
            <option value="JSC">JSC</option>
            <option value="SSC">SSC</option>
            <option value="HSC">HSC</option>
            <option value="Graduation">Graduation</option>
            <option value="Masters">Master's</option>
        </select>
        <br />
        <br />
        <span>Grade Point</span><br/>
        <input type="number" style="width:140px" name="cgpa" min="0.00" max="5.00" step="0.01" required >
        <br />
        <br />
        <input type="submit" name="submit">
        <br/>
        <br/>
    </form>

    <?php

    if (isset($_POST['degree'],$_POST['cgpa'])) {
        $getDegree= $_POST['degree'];
        $getPoint= $_POST['cgpa'];
        if ($getDegree=="Graduation" || $getDegree=="Masters") {
            if ($getPoint>4.00) {
                echo "You have provided wrong grade point.
            ";
                exit;
            }
        }
        // JSC Section
        if ($getDegree=="JSC" && ($getPoint>=0 && $getPoint<1)) {
            echo "F <br/>";
            echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
        if ($getDegree=="JSC" && ($getPoint>=1 && $getPoint<2)) {
            echo "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="JSC" && ($getPoint>=2 && $getPoint<3)) {
            echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="JSC" && ($getPoint>=3 && $getPoint<3.5)) {
            echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="JSC" && ($getPoint>=3.5 && $getPoint<4)) {
            echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="JSC" && ($getPoint>=4 && $getPoint<5)) {
            echo "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="JSC" && $getPoint==5) {
            echo "Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.";
        }


        // SSC Section
        if ($getDegree=="JSC" && ($getPoint>=0 && $getPoint<1)) {
            echo "F <br/>";
            echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
        if ($getDegree=="SSC" && ($getPoint>=1 && $getPoint<2)) {
            echo "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="SSC" && ($getPoint>=2 && $getPoint<3)) {
            echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="SSC" && ($getPoint>=3 && $getPoint<3.5)) {
            echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="SSC" && ($getPoint>=3.5 && $getPoint<4)) {
            echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="SSC" && ($getPoint>=4 && $getPoint<5)) {
            echo "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="SSC" && $getPoint==5) {
            echo "Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.";
        }

        // HSC Section
        if ($getDegree=="HSC" && ($getPoint>=0 && $getPoint<1)) {
            echo "F <br/>";
            echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
        if ($getDegree=="HSC" && ($getPoint>=1 && $getPoint<2)) {
            echo "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="HSC" && ($getPoint>=2 && $getPoint<3)) {
            echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="HSC" && ($getPoint>=3 && $getPoint<3.5)) {
            echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="HSC" && ($getPoint>=3.5 && $getPoint<4)) {
            echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="HSC" && ($getPoint>=4 && $getPoint<5)) {
            echo "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="HSC" && $getPoint==5) {
            echo "Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.";
        }

        // Graduation Section
        if ($getDegree=="Graduation" && ($getPoint>=0 && $getPoint<2)) {
            echo "F <br/>";
            echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
        if ($getDegree=="Graduation" && ($getPoint>=2 && $getPoint<2.25)) {
            echo "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=2.25 && $getPoint<2.50)) {
            echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=2.50 && $getPoint<2.75)) {
            echo "You have been passed with grade 'C+'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=2.75 && $getPoint<3)) {
            echo "You have been passed with grade 'B-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=3 && $getPoint<3.25)) {
            echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=3.25 && $getPoint<3.50)) {
            echo "You have been passed with grade 'B+'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=3.5 && $getPoint<3.75)) {
            echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && ($getPoint>=3.75 && $getPoint<4)) {
            echo "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Graduation" && $getPoint==4) {
            echo "Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.";
        }

        // Masters Section
        if ($getDegree=="Masters" && ($getPoint>=0 && $getPoint<2)) {
            echo "F <br/>";
            echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success";
        }
        if ($getDegree=="Masters" && ($getPoint>=2 && $getPoint<2.25)) {
            echo "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=2.25 && $getPoint<2.50)) {
            echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=2.50 && $getPoint<2.75)) {
            echo "You have been passed with grade 'C+'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=2.75 && $getPoint<3)) {
            echo "You have been passed with grade 'B-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=3 && $getPoint<3.25)) {
            echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=3.25 && $getPoint<3.50)) {
            echo "You have been passed with grade 'B+'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=3.5 && $getPoint<3.75)) {
            echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && ($getPoint>=3.75 && $getPoint<4)) {
            echo "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons";
        }
        if ($getDegree=="Masters" && $getPoint==4) {
            echo "Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.";
        }
    }
    ?>

</body>

</html>