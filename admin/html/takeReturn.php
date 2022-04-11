<?php include "header.php"; 
    if($_SESSION["user_role"]=='0')
    {
        header("Location: {$hostname}/user/html/");
    }
?>

<head>
    <link rel="stylesheet" href="../css/takeReturn.css">
</head>
<div class="search">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" placeholder=" Enter ID.." name="txtSearch" class="txtSearch" autocomplete="off">
        <button type="submit" name="submit" class="btnSearch">Search</button>
    </form>
</div>


<?php

if ($_GET['check']=='1' || isset($_POST['submit'])) {
    include 'config.php';

    if(isset($_POST['submit'])){
        $uid = $_POST['txtSearch'];
    }
    if($_GET['check']=='1')
    {
        $uid = ($_GET['uid']);
    }
            
    
    $sql = "select tib.book_id,tb.grp_id,tb.book_name,tb.book_edition,tb.book_author,tib.expected_return_date,tib.user_id,tib.issued_date from tbl_book_copies tbc join tbl_books tb on tb.grp_id = tbc.grp_id join tbl_issued_books tib where tbc.book_id = tib.book_id and tib.user_id = '{$uid}'";

    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

    if (mysqli_num_rows($result) > 0) {

?>
        <div class="tblReturnReport" style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Book Name</th>
                    <!-- <th>Book Id</th> -->
                    <th></th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['book_name'] ?></td>
                        <!-- <td><?php echo $row['book_id'] ?></td> -->

                        <td>
                        <form action="deleteBookFromUser.php" method="get">
                            <label class="switch">
                            
                            <input type="hidden"  name="id" value="<?php echo $row['book_id']; ?>"/>
                            <?php $checked='0'?>
                                <!-- <input type="checkbox" <?php echo $checked== '1' ? ' checked' : ''; ?>  name="chkReturn">
                                <span class="slider round"></span> -->
                                <!-- <div class="submit"> -->
                                    <button class="btnSubmit" name="btnSubmit">Return</button>   <!--class="btnSubmit"-->
                                <!-- </div> -->
                            </label>
                        </form>
                        </td>

                    </tr>
                <?php } //end of while loop ?>
                <!-- useless fellow -->
                <!-- <tr>
                    <td></td>
                    <td></td>
                </tr> -->
            </table>
        </div>

        
        <!-- <div class="submit">
            <button class="btnSubmit" name="btnSubmit">Submit</button>
        </div>
         -->
<?php

    }    //end of if   
}       //end of if (isset)
else
    echo "<h1 style='text-align: center; color: red;'>No book...</h1>"
?>




