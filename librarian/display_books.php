<?php
  include "header.php";
  include "connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Display & Search Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form name="form1" action="" method="post">
                                <input type="text" name="t1" class="form-control"  placeholder="Search Books">
                                <input type="submit" name="submit1" value="Search" class="btn btn-primary">
                              </form>
                                <?php
                                if(isset($_POST["submit1"])){
                                  echo "<table class='table table-bordered'>";
                                  echo "<tr>";
                                    echo "<th>";echo "Book Name";echo "</th>";
                                    echo "<th>";echo "Book Image";echo "</th>";
                                    echo "<th>";echo "Author Name";echo "</th>";
                                    echo "<th>";echo "Publication Name";echo "</th>";
                                    echo "<th>";echo "Purchase Date";echo "</th>";
                                    echo "<th>";echo "Books Price";echo "</th>";
                                    echo "<th>";echo "Books QTY";echo "</th>";
                                    echo "<th>";echo "Available QTY";echo "</th>";
                                    echo "<th colspan='2' style='text-align:center'>";echo "Action";echo "</th>";
                                  echo "</tr>";
                                $res = mysqli_query($link,"select * from add_books where books_name like('%$_POST[t1]%')");
                                while($row = mysqli_fetch_array($res)){
                                  echo "<tr>";
                                    echo "<td>";?> <img src="<?php echo $row['books_image'];?>" height='70px' width='50px'> <?php echo "</td>";
                                    echo "<td>";echo $row['books_name'];echo "</td>";
                                    echo "<td>";echo $row['books_author_name'];echo "</td>";
                                    echo "<td>";echo $row['books_publication_name'];echo "</td>";
                                    echo "<td>";echo $row['books_purchase_date'];echo "</td>";
                                    echo "<td>";echo $row['books_price'];echo "</td>";
                                    echo "<td>";echo $row['books_qty'];echo "</td>";
                                    echo "<td>";echo $row['available_qty'];echo "</td>";
                                    echo "<td>";?> <a href="edit_book.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php echo "</td>";
                                    echo "<td>";?> <a href="delete_book.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><?php echo "</td>";
                                  echo "</tr>";
                                }


                                echo "</table>";
                                }else{


                                echo "<table class='table table-bordered'>";
                                  echo "<tr>";
                                    echo "<th>";echo "Book Name";echo "</th>";
                                    echo "<th>";echo "Book Image";echo "</th>";
                                    echo "<th>";echo "Author Name";echo "</th>";
                                    echo "<th>";echo "Publication Name";echo "</th>";
                                    echo "<th>";echo "Purchase Date";echo "</th>";
                                    echo "<th>";echo "Books Price";echo "</th>";
                                    echo "<th>";echo "Books QTY";echo "</th>";
                                    echo "<th>";echo "Available QTY";echo "</th>";
                                    echo "<th colspan='2' style='text-align:center'>";echo "Action";echo "</th>";
                                  echo "</tr>";
                                $res = mysqli_query($link,"select * from add_books");
                                while($row = mysqli_fetch_array($res)){
                                  echo "<tr>";
                                    echo "<td>";?> <img src="<?php echo $row['books_image'];?>" height='50px' width='50px'> <?php echo "</td>";
                                    echo "<td>";echo $row['books_name'];echo "</td>";
                                    echo "<td>";echo $row['books_author_name'];echo "</td>";
                                    echo "<td>";echo $row['books_publication_name'];echo "</td>";
                                    echo "<td>";echo $row['books_purchase_date'];echo "</td>";
                                    echo "<td>";echo $row['books_price'];echo "</td>";
                                    echo "<td>";echo $row['books_qty'];echo "</td>";
                                    echo "<td>";echo $row['available_qty'];echo "</td>";
                                    echo "<td>";?> <a href="edit_book.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php echo "</td>";
                                    echo "<td>";?> <a href="delete_book.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><?php echo "</td>";
                                  echo "</tr>";
                                }


                                echo "</table>";
                              }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


<?php
  include "footer.php";
?>