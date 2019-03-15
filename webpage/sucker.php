<?php
    /**
     * Created by PhpStorm.
     * User: User
     * Date: 2/28/2019
     * Time: 05:17 PM
     */
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>Buy Your Way to a Better Education!</title>
            <link href="buyagrade.css" type="text/css" rel="stylesheet" />
        </head>

        <body>
        <?php
            if (isset($_POST['name'])){

            }
        else{
            
            <h1>Thanks,student!</h1>
            <hr/>
            <h2>Your Information has been recorded</h2>
            <dl>
                <dt>Name</dt>
                <dd>
                    <?= $_POST['name'] ?>
                </dd>

                <dt>Section</dt>
                <dd>
                    <?= $_POST['section'] ?>
                </dd>

                <dt>Credit Card</dt>
                <dd>
                    <?= $_POST['cardnumber'] ?>
                    <?= $_POST['cardtype'] ?>
                </dd>
            </dl>
            <?php
        }
    ?>
        </body>
    </html>

<?php
    $name =$_POST['name'];
    $section=$_POST['section'];
    $cardnumber=$_POST['cardnumber'];
    $cardtype=$_POST['cardtype'];
    $string = $name." ;".$section." ;".$cardnumber." ;".$cardtype." ;";
    file_put_contents('sucker.txt', $string, FILE_APPEND);
