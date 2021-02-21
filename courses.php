<section id="courses" class="mt-5">
          <h3 class="display-5">Courses</h3>
          <hr>
          <ul class="clist">
            <?php foreach($courses as $course) {?>
            <li><?php echo $course['name'];?> <a href="javascript:void(0)" class="badge badge-info"><?php echo $course['attendedon'];?></a>
        </li>
            <?php }?>
          </ul>
</section>

