<?php

    //Connecting to the database
    include_once "dbConnect.php";

    //Executing the query and fetching the results
    $query = "SELECT * FROM comments WHERE id=$id";
    $result = $pdo->query($query);

    while($row = $result->fetch())
    {
        $username = $row['username'];
        $date = $row['date'];
        $text = $row['text'];
        $rating = $row['rating'];


        ?>


        <!-- User reviews -->
        <div class="ui stackable grid userReviews">
            <div class="sixteen wide column">
                <div class="userTitle">
                    <p><?php echo "$username"; ?></p>
                </div>
                <div class="ui form">

                    <div class="field">
                        <label>Date: <?php echo "$date"; ?></label>
                    </div>

                    <div class="field">
                        <label>Rating</label>
                        <div class="ui star rating review" data-rating="<?php echo "$rating"?>" data-max-rating="5"></div>
                    </div>

                    <div class="field">
                        <label>Description</label>
                        <div class="reviewDescription">
                            <p><?php echo "$text";?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php

    }

?>



