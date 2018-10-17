<?php require_once "./v/openning.php";?>
<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">


                        <?php
                        foreach ($listView as $item) {


                            ?>
                            <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
                            <div class="image fit">
                                <a href="?p=detailProject&id=<?=$item->getIdproject();?>"><img src="images/pic01.jpg" alt=""/><?=$item->getThename();?></a>
                            </div>
d
                            <?php
                        }
                        ?>
					</div>
				</div>
			</div>

