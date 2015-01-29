<article class="main">
    <div class="wrapper slide-show">
        <img src="images/slides/Slideshow/slide_1.jpg" alt="image 1">
        <img src="images/slides/Slideshow/slide_3.jpg" alt="image 3">
        <img src="images/slides/Slideshow/slide_4.jpg" alt="image 4">
        <img src="images/slides/Slideshow/slide_6.jpg" alt="image 6">
        <img src="images/slides/Slideshow/slide_7.jpg" alt="image 7">
        <img src="images/slides/Slideshow/slide_8.jpg" alt="image 8">
        <img src="images/slides/Slideshow/slide_9.jpg" alt="image 9">
        <img src="images/slides/Slideshow/slide_10.jpg" alt="image 10">
        <div class="bgNextButton"></div>
        <div class="bgBackButton"></div>
    </div>

    <?php if ($_COOKIE['lang']=='ua'){
        print '
    <ul class="block-title">
        <li><img src="images/Decor_About_Us_Upper.png"></li>
        <li><h1>ПРО КОМПАНІЮ</h1></li>
        <li><img src="images/Decor_About_Us_Down.png"></li>
    </ul>
         <h2>Декоративна нержавіюча сталь - ідеальний матеріал ХХI сторіччя.</h2>
    <div class="content">
        <p>Науково-виробнича фірма «Покров» займається проектуванням та виготовленням куполів,
        накупольні хрестів, реалізацією листів з нержавіючої сталі, а також виготовлення декоративних
        елементів з нержавіючої сталі. Свою діяльність компанія почала з 2010 року і на сьогоднішній
        день займає впевнені позиції на даному ринку матеріалів та послуг.</p>
    </div>
        <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li><h1 class="with-margin">Фотогалерея</h1></li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <ul class="gallery-list">
        <li>
            <a href="?page=album&id=25">
                <p>Декоративна<br/>нержавіюча сталь</p>
                <div class="to-big-img">
                    <img src="images/categories/1.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=26">
                <p>Проектування та виготовлення<br/> накупольних крестів</p>
                <div class="to-big-img">
                    <img src="images/categories/2.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=27">
                <p>Проектування<br/>та виготовлення куполів</p>
                <div class="to-big-img">
                    <img src="images/categories/3.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=28">
                <p>Декоративні елементи<br/>з нержавіючої сталі</p>
                <div class="to-big-img">
                    <img src="images/categories/4.jpg">
                </div>
            </a>
        </li>
    </ul>
    <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li><h1 class="with-margin">Зв’язатися з нами</h1></li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <ul class="contacts-block">
        <li>Центральний офіс НВФ «Покров» </li>
        <li>
            <p>Україна<br/>Черкаська обл., м. Черкаси<br/>ул. Громова 165А<br/>18000
            </p>
        </li>
    ';}
    elseif ($_COOKIE['lang']=='en'){
        print '
    <ul class="block-title">
        <li><img src="images/Decor_About_Us_Upper.png"></li>
        <li><h1>ABOUT</h1></li>
        <li><img src="images/Decor_About_Us_Down.png"></li>
    </ul>
         <h2>Decorative stainless steel is an ideal material of twenty-first century.</h2>
    <div class="content">
        <p>Research and Development Company “Pokrov” is engaged in projecting and manufacturing the doms,
        crosses, salling of stainless steel sheets , as well as the decorative elements made of stainless steel.</p>
        <p>The company was established in 2010 and now it holds a strong positions in the sphere of stainless steel
        materials and accompanying services.</p>
    </div>
        <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li><h1 class="with-margin">GALLERY</h1></li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <ul class="gallery-list">
        <li>
            <a href="?page=album&id=25">
                <p>Decorative<br/>stainless steel</p>
                <div class="to-big-img">
                    <img src="images/categories/1.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=26">
                <p>Projecting<br/>and manufacturing the crosses</p>
                <div class="to-big-img">
                    <img src="images/categories/2.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=27">
                <p>Projecting<br/>and manufacturing the domes</p>
                <div class="to-big-img">
                    <img src="images/categories/3.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=28">
                <p>Decorative elements<br/>of stainless steel</p>
                <div class="to-big-img">
                    <img src="images/categories/4.jpg">
                </div>
            </a>
        </li>
    </ul>
    <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li><h1 class="with-margin">CONTACT US</h1></li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <ul class="contacts-block">
        <li>D&P Company “Pokrov” </li>
        <li>
            <p>Ukraine<br/>Cherkasy region, city Cherkasy<br/>Gromova str. 165A<br/>18000</p>
        </li>
        '; }
    else {
        print '
    <ul class="block-title">
        <li><img src="images/Decor_About_Us_Upper.png"></li>
        <li><h1>О нас</h1></li>
        <li><img src="images/Decor_About_Us_Down.png"></li>
    </ul>
         <h2>Декоративная нержавеющая сталь — идеальный материал ХХI века.</h2>
    <div class="content">
        <p>Научно-производственная фирма «Покров» занимается проектированием и изготовлением куполов,
            накупольных крестов, реализацией листов из нержавеющей стали, а также изготовление декоративных
            элементов из нержавеющей стали. Свою деятельность компания начала с 2010 года и на сегодняшний
            день занимает уверенные позиции на данном рынке материалов и услуг.</p>
    </div>
        <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li><h1 class="with-margin">Фотогалерея</h1></li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <ul class="gallery-list">
        <li>
            <a href="?page=album&id=25">
                <p>ДЕКОРАТИВНАЯ<br/>НЕРЖАВЕЮЩАЯ СТАЛЬ</p>
                <div class="to-big-img">
                    <img src="images/categories/1.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=26">
                <p>ИЗГОТОВЛЕНИЕ<br/>НАКУПОЛЬНЫХ КРЕСТОВ</p>
                <div class="to-big-img">
                    <img src="images/categories/2.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=27">
                <p>ПРОЕКТИРОВАНИЕ<br/>И ИЗГОТОВЛЕНИЕ КУПОЛОВ</p>
                <div class="to-big-img">
                    <img src="images/categories/3.jpg">
                </div>
            </a>
        </li>
        <li>
            <a href="?page=album&id=28">
                <p>ДЕКОРАТИВНЫЕ ЭЛЕМЕНТЫ<br/>ИЗ НЕРЖАВЕЮЩЕЙ СТАЛИ</p>
                <div class="to-big-img">
                    <img src="images/categories/4.jpg">
                </div>
            </a>
        </li>
    </ul>
    <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li><h1 class="with-margin">Связяться с нами</h1></li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <ul class="contacts-block">
        <li>Центральный офис НВФ «Покров»</li>
        <li>
            <p>Украина<br/>Черкасская обл., г. Черкассы<br/>ул. Громова 165А<br/>18000
            </p>
        </li>';} ?>
        <li>
            <a href="tel:+38096 5-300-300">+38096 5-300-300</a><br/>
            <a href="tel:+38066 5-600-300">+38066 5-600-300</a>
        </li>
        <li>
            <a href="mailto:pokrov-ltd@ukr.net">pokrov-ltd@ukr.net</a>
        </li>
    </ul>
</article>
<script type='text/javascript'>
    QueryLoader.init();
</script>