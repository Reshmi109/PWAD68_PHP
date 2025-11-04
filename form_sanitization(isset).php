<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 1px solid beige;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
   
    <form action="" name="myform" method="post">
         Your Name :
        <input type="text" name="name"> <br> <br>
        Email Address :
        <input type="text" name="email"> <br> <br>
        <select name="skills[]" multiple="multiple">
            <option value="csharp">C#</option>
            <option value="javascript">JavaScript</option>
            <option value="php">PHP</option>
            <option value="perl">Perl</option>

        </select> <br> <br>

       What you want to learn ? <br> <br>
        <input type="checkbox" name="languages[]" value="c">C
        <input type="checkbox" name="languages[]" value="c++">C++
        <input type="checkbox" name="languages[]" value="java">Java
        <input type="checkbox" name="languages[]" value="jsrc">javascript <br> <br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>
     <?php
    if(isset($_REQUEST["submit"])){
        $name=$_REQUEST["name"];
        $email=$_REQUEST["email"];
        $skills=$_REQUEST['skills'];//array
        $langs=$_REQUEST['languages'];//array

        $skills_output="";
        $langs_output="";

        foreach($skills as $skill){
            $skills_output .= $skill . ",";

        }

        foreach($langs as $lang){
            $langs_output .= $skill . ",";

        }
        // echo "<pre>";
        // // print_r($_REQUEST);
        // // echo "SkIlls";
        // //   print_r($_REQUEST['skills']);
        // //   echo "Want to Learn:";
        // //     print_r($_REQUEST['languages']);
    

    ?>
    <table>
        <tr>
            <td>Name : </td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Skills : </td>
            <td><?php echo $skills_output; ?></td>
        </tr>
        <tr>
            <td>Languages : </td>
            <td><?php echo $langs_output; ?></td>
        </tr>
    </table>
    <?php 

    }

    ?>
    

    
</body>
</html>