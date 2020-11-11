<?php include("includes/admin_header.php"); ?>

    <div id="wrapper">
 <!-- Navigation -->
<?php include("includes/admin_navigation.php"); ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>

                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php

    //find all posts query

     $query = "SELECT * FROM posts "; //select all from table posts 
                $select_posts = mysqli_query($connection, $query); //mysqli_query() use to simplify the use of performing query to db

    while ($row = mysqli_fetch_assoc($select_posts)) 
    { //amek and tukarkan column kepada key, and anak2 column as value dia s
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tag = $row['post_tag'];
        $post_comment_count = $row['post_comment_count'];
        echo $post_date = $row['post_date'];

        echo "<tr>";
        echo "<td> $post_id </td>";
        echo "<td> $post_author </td>";
        echo "<td> $post_title </td>";
        echo "<td> $post_category_id </td>";
        echo "<td> $post_status </td>";
        echo "<td><img class='img-responsive' width='100' src='../images/$post_image' alt='images'>  </td>";
        echo "<td> $post_tag </td>";
        echo "<td> $post_comment_count </td>";
        echo "<td> $post_date</td>";
        echo "</tr>";


    }



                                  ?>
                                    <td>10</td>
                                    <td>Edwin</td>
                                    <td>Bootstrap Framework</td>
                                    <td>Bootstrap</td>
                                    <td>Status</td>
                                    <td>Image</td>
                                    <td>Tags</td>
                                    <td>Comments</td>
                                    <td>Date</td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>






        <!-- /#page-wrapper -->


<?php include("includes/admin_footer.php"); ?>
