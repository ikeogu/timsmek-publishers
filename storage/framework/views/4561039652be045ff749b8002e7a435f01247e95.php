<?php $__env->startSection('content'); ?>
<section id="blog">
        <marquee behavior="" direction="left">Post article for publication  Post article for publication</marquee>
      <div class="container mt-5">
        <div class="jumbotron">
          <h1>Our Blog</h1>
        </div>
        <p>Read interesting topics from Timsmek Global Publishers.</p>

        <div class="row">
          <div class="col-md-8">
            <div class="row">
                <?php if($blog->count() > 0): ?>
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <a href="/blog/<?php echo e($item->id); ?>" class="blog-card mt-5">
                              <div class="card-img">
                              <img src="/storage/blog_post/<?php echo e($item->image); ?>" alt="" class="img-fluid">
                              </div>
                              <div class="blog-title">
                                <h3 class="heading"><?php echo e($item->caption); ?></h3>
                                <date><?php echo e($item->created_at->diffForHumans()); ?> <?php echo e($item->writter); ?><i class="icon ion-md-chatbubbles"></i> </date>
                                <p><?php echo e(str_limit($item->body, $limit = 50, $end = '...')); ?></p>
                              </div>
                            </a>
                          </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col-md-8">
                    <h3>We Don't have recent Post on Our Blog.</h3>
                    </div>
                <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar-box mt-5">
              <form action="" class="search-form">
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon icon ion-md-search"></i>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <h4 class="heading-sidebar">Categories</h4>
              <ul class="categories">
                <li>
                  <a href="#">
                    Researchers
                    .....<span>(12)</span>
                  </a>
                </li>
                <hr>
                <li>
                  <a href="#">
                    Poem
                    ......<span>(19)</span>
                  </a>
                </li>
                <hr>
                <li>
                  <a href="#">
                    Agriculture
                    ......<span>(32)</span>
                  </a>
                </li>
                <hr>
                <li>
                  <a href="#">
                    Science
                    ......<span>(92)</span>
                  </a>
                </li>
                <hr>
                <li>
                  <a href="#">
                    Medical
                    ......<span>(10)</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="sidebar-box">
              <h4 class="heading-sidebar">Pupolar Post</h4>
              <div class="d-flex mt-2">
                <a href="#" class="blog-img mr-4">
                  <img src="./img/blogImg.jpg" alt="" class="img-fluid">
                </a>
                <div class="text">
                  <h4 class="heading">
                    <a href="#">Why Lead Generation is Key for Business Growth</a>
                  </h4>
                  <div class="meta">
                    <div>
                      <i class="icon ion-md-calendar"></i>
                      <span>Oct, 14, 2019</span>
                    </div>
                    <div>
                      <i class="icon ion-md-person"></i>
                      <span>Admin</span>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="d-flex mt-2">
                <a href="#" class="blog-img mr-4">
                  <img src="./img/blogImg.jpg" alt="" class="img-fluid">
                </a>
                <div class="text">
                  <h4 class="heading">
                    <a href="#">Why Lead Generation is Key for Business Growth</a>
                  </h4>
                  <div class="meta">
                    <div>
                      <i class="icon ion-md-calendar"></i>
                      <span>Oct, 14, 2019</span>
                    </div>
                    <div>
                      <i class="icon ion-md-person"></i>
                      <span>Admin</span>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="d-flex mt-2">
                <a href="#" class="blog-img mr-4">
                  <img src="./img/blogImg.jpg" alt="" class="img-fluid">
                </a>
                <div class="text">
                  <h4 class="heading">
                    <a href="#">Why Lead Generation is Key for Business Growth</a>
                  </h4>
                  <div class="meta">
                    <div>
                      <i class="icon ion-md-calendar"></i>
                      <span>Oct, 14, 2019</span>
                    </div>
                    <div>
                      <i class="icon ion-md-person"></i>
                      <span>Admin</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/blog/index.blade.php ENDPATH**/ ?>