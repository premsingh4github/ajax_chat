<?php
	include('includes/loader.php');
	
	// Note: This is the page that matters to you

	include('tpl/head.php');
	include('tpl/header.php');
?>

<div class="container">
  <div class="row">
    <div class="content-wrap margin-reset">
         <!-- messages -->
        <div class="messages-box">
            <?php include('messages_load.php'); ?>
        </div>
        <p style="padding-top: 5px; color: #aaa;">Hint: Type [unread] to filter unread messages</p>
        <!-- // messages -->
    </div>
  </div><!-- // row -->
</div><!-- // container -->
    
<?php
	include('tpl/footer.php');
?>