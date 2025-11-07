	</div><!-- end of gallery_wrapper -->

<div class="gallery_footer">
Powered by <a href="https://github.com/dr-danz/gallery2/" target="_blank">Gallery2</a>
&nbsp;|&nbsp;<a href="<?php echo $gallery_url;?>/admin">admin</a>
<?php if($is_admin){?>
&nbsp;|&nbsp;<a href="<?php echo $gallery_url;?>/logout">logout</a>
<?php } ?>
&nbsp;|&nbsp;<?php echo round((microtime(true)-$page_load_start)*1000)." ms"; ?>
</div><!-- end of gallery footer -->

</body>
</html>