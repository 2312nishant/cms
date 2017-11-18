<?php if(!empty($posts)):?>
  <?php foreach($posts as $post):?>
  <div class="panel panel-default"> Post 
      <?php if(!empty($post['featured_image'])):?>
      <div class="panel-img">
        <img src="<?php echo BASE_URI.$post['featured_image']?>" alt="<?php echo $post['title'];?>"/>
      </div>
      <?php endif;?>
      <div class="panel-body content">
          <h2><a href="<?php echo site_url('read/'.$post['slug'])?>"><?php echo $post['title']?></a></h2>
          <?php echo word_limiter(strip_tags($post['body'],'<p><br>'),30)?>
      </div>
      <div class="panel-footer">
        <div class="post-meta">
          <span class="text-left"><i class="fa fa-calendar"></i> <?php echo date('d M Y',strtotime($post['published_at']))?> 
           <i class="fa fa-bars"></i> <a href="#">Web Design</a>, <a href="#">Bootstrap</a></span>  
           <span class="pull-right"><a href="single.html"><i class="fa fa-comments"></i> 23 Comments</a></span> 
        </div>
      </div>
  </div> End Post 
  <?php endforeach;?>
<?php endif;?>

<!--<!DOCTYPE html>
<html>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('http://localhost:8080/cms-blog/assets/themes/default/main/img/background/forestbridge.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>BLOG APPLICATION</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p>5 days left</p>
  </div>
  <div class="bottomleft">
    <p>Site Under Construction</p>
  </div>
</div>

</body>
</html>-->
