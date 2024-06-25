<!-- code here  table of contact us -->
<div class="col-md-12">
    <!--    Context Classes  -->
    <div class="panel panel-default">

        <div class="panel-heading">
            Contact Us
        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>text</th>
                            <th>status</th>
                            <th>change</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?PHP
                        foreach ($contactus as $contact) {



                        ?>


                            <tr class="success">
                                <td><?= $contact['id'] ?></td>
                                <td><?= $contact['name'] ?></td>
                                <td><?= $contact['email'] ?></td>
                                <td><?= $contact['subject'] ?></td>
                                <td><?= $contact['text'] ?></td>
                                <?php
                                    if ($contact['status']==0 ) {
                                       echo '<td><span class="label label-danger">not read</span></td>';
                                    }
                                    else{
                                      echo  '<td><span class="label label-success">ok</span></td>';
                                    }

                                ?>
                                
                                
                                <td><a class="btn btn-info" href="changestatus.php?id=<?=$contact['id']?>">change</a></td>

                            </tr>

                    </tbody>

                  <?PHP

                        }
                   ?>
                </table>
            </div>
        </div>
    </div>
    <!--  end  Context Classes  -->
</div>





<!-- end code -->
<?php
require_once '../layouts/endbody.php';
require_once '../layouts/footer.php';
?>