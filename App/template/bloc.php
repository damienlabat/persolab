
            <!-- BLOC <?= $bloc->filename ?> -->
            <article class='bloc<?= $bloc->class!==null?' '.$bloc->class:'' ?>'>
                <header>
                    <h2><?= $bloc->title ?></h2>
                    <?php

                    if ($bloc->tags!==null) {
                        echo '<ul>'.PHP_EOL;
                        foreach ($bloc->tags as $tag) {
                            echo '			<li class="c'.(WordSum($tag)%10).'"><a href="#'.$tag.'">'.$tag.'</a></li>'.PHP_EOL;
                        }
                        echo '		    </ul>'.PHP_EOL;
                    }?>
                </header>
                <?php
                if ($bloc->img!=null) echo '<figure>
                    <img src="./asset/img/'.$bloc->img.'" alt=""/>
                </figure>'.PHP_EOL;

                ?>
                <p class='content'><?= $bloc->content ?></p>
                <footer>
                    <ul>
                        <?php
                        if ($bloc->demo!=null) echo '<li><a class="demo" href="'.$bloc->demo.'" title="'.$bloc->demo.'"/>démo</a></li>'.PHP_EOL;
                        if ($bloc->github!=null) echo '                        <li><a class="github" href="'.$bloc->github.'" title="'.$bloc->demo.'"/>GitHub</a></li>'.PHP_EOL;
                        ?>
                    </ul>
                    <time datetime="<?= date(DATE_W3C,$bloc->date) ?>"><?= $bloc->humanDate() ?></time>
                </footer>
            </article>
