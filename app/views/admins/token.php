<?php  if($_SESSION['user_category'] == 'admin') :?>
<?php require APPROOT.'/views/inc/headerAdmin.php'; ?>
<h1 class="mb-3 text-center">Give Token To Members</h1>
<?php foreach($data['categoryHeads'] as $categoryHead) : ?>
    <?php if(strcmp($categoryHead->category, "admin") != 0) : ?>
        <div class="card card-body mb-3">
            <div class="bg-light p-2 mb-3">
                <h5>Name : <?php echo $categoryHead->name; ?></h5><h5>Category : <?php  echo $categoryHead->category ;?></h5>
                <h5>Event : <?php  echo $categoryHead->event ;?></h5>
                <form action="<?php echo URLROOT;?>admins/tokenup/<?php echo $categoryHead->id; ?>" method="post">
                    <h5>Add Token : <input type="number" name="tokenValue" value="tokenValue"></h5>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    <?php endif ; ?>
 <?php endforeach ; ?>
</div>
 <?php else : ?>
<?php redirect($_SESSION['user_category'].'s'); ?>
<?php  endif ; ?>
<?php require APPROOT.'/views/inc/footer.php'; ?>
