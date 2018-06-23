<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">


                        <?php
                        foreach ($listView as $item) {


                            ?>
                            <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
                            <div class="image fit">
                                <a href="?p=project"><img src="images/pic01.jpg" alt=""/><?=$item->getName();?></a>
                            </div>

                            <?php
                        }
                        ?>
					</div>
				</div>
			</div>

