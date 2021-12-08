<div class="row">
    <div class="col-12">
        <h2>News Articles</h2>
        <a href="<?php echo base_url('news/create')?>" class="btn btn-secondary">Add</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
               if (count($news)>0)
               {
                   foreach($news as $row)
                   {
                       ?>
                       <tr>
                           <th scope="row"><?php echo $row['id']; ?></th>
                           <td><?php echo $row['title']; ?></td>
                           <td><?php echo $row['status']; ?></td>
                           <td><?php echo $row['created_at']; ?></td>
                           <td><?php echo $row['updated_at']; ?></td>
                           <td>
                               <?php
                               $session = session();
                               //$session->get('user_id');
                               if ($session->get('user_id') == $row['user_id'])
                               {?>
                               <a href="<?php echo base_url('news/edit/'.$row['id']) ?>" class="btn btn-primary">Edit</a>
                               <a href="<?php echo base_url('news/delete/'.$row['id']) ?>" class="btn btn-danger">Delete</a>
                               <?php
                                   //session_destroy();
                               }
                               ?>

                           </td>
                       </tr>
            <?php
                   }
               }
               else
               {
                   ?>
                   <tr>
                       <td colspan="4">No Records Found.</td>
                   </tr>
                <?php
               }
            ?>

            </tbody>
        </table>
    </div>
</div>
