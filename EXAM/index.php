<?php
    $hiddenGreeting = "Hello World!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Exam</title>
    
    <style>
        #divButton {
            display: flex;
            justify-content: left;
        }
        #button{
            width: 400px;
        }

    </style>
</head>

<body class="container">

    <br>
    <br>

    <h2 style="text-align: center; ">Exam Hello World!</h2>

    <br>

    <div id="divButton">
    <button id="button" class="btn btn-success">
        Press Me
    </button>

    </div>
   
    <br>
    <br>
    <h2>Technologies Used</h2>
    <table class="table ">
        <thead class="thead-dark">
            <tr>
                <th>Technologies Used</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HTML</td>
                <td>HTML was used in making the content of the page.</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>CSS was used for styling the page by modifying the width of certain elements to make it look better.</td>
            </tr>
            <tr>
                <td>JavaScript</td>
                <td>JavaScript makes the page interactive, with the button being clicked, making it go to the other side and clear its background color and change text to green.</td>
            </tr>
            <tr>
                <td>PHP</td>
                <td>PHP makes the website have server side data with the Hidden Greeting variable.</td>
            </tr>
            <tr>
                <td>Bootstrap</td>
                <td>Bootstrap makes the styling better than regular CSS, making the table and button look better.</td>
            </tr>
        </tbody>
    </table>

    <script>

        const button = document.getElementById("button");
        button.addEventListener("click", function() {
            button.innerHTML = "<?php echo $hiddenGreeting; ?>";
            
            button.classList.remove("btn-success");
            button.classList.add("text-success");
            button.style.fontWeight= "bold";

            document.getElementById("divButton").style.justifyContent = "right";
        });
    </script>
</body>
</html>