<article class="contacts">
    <ul class="contacts-block">
        <?php if ($_COOKIE['lang']=='ua'){
            print '
            <li>Центральний офіс НВФ «Покров»</li>
        <li>
            <p>Україна<br/>Черкаська обл., м. Черкаси<br/>ул. Громова 165А<br/>18000</p>
            <a class="map-link">Знайти на карті</a>
        </li>
        <li>
            <a href="tel:+38096 5-300-300">+38096 5-300-300</a><br/>
            <a href="tel:+38066 5-600-300">+38066 5-600-300</a>
        </li>
        <li>
            <a href="mailto:info@pokrov-ltd.com.ua">info@pokrov-ltd.com.ua</a>
		<p>Skype: ooo pokrov</p>
        </li>
    </ul>
    <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li>
            <h1 class="with-margin">Залиште нам своє повідомлення</h1>
            <h2 class="with-margin">і ми зателефонуємо вам у найближчий час</h2>
        </li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <form action="" method="post" id="ajaxform">
        <ul class="form">
            <li><p>Ваше ім’я <input type="text" name="name" maxlength="100"></p></li>
            <li><p>Країна, місто <input type="text" name="country" maxlength="100"></p></li>
            <li><p>Ваш номер телефону <input type="text" name="telephone" maxlength="100"></p></li>
            <li><p>Ваш e-mail <input type="text" name="email" maxlength="100"></p></li>
            <li><p>Декілька слів про ваш проект</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <textarea maxlength="400" name="message"></textarea>
            </li>
        </ul>
        <a class="submit-button" href="?page=gallery">
            <input type="submit" value="" >
            <img class="top" src="images/UKR/send_message_ukr.png">
            <img class="back" src="images/UKR/send_message_ukr_gold.png">
        </a>
        <div class="clear"></div>
    </form>
    <div class="submit">
        <ul class="block-title">
            <li><img src="images/Decor_Gallery_Upper.png"></li>
            <li>
                <h1 class="with-margin">Ваши данные отправлены</h1>
            </li>
            <li><img src="images/Decor_Gallery_Down.png"></li>
    </div>';}
        elseif ($_COOKIE['lang']=='en'){
            print '
            <li>D&P Company “Pokrov” </li>
        <li>
            <p>Ukraine<br/>Cherkasy region, city Cherkasy<br/>Gromova str. 165A<br/>18000</p>
            <a class="map-link">Посмотреть на карте</a>
        </li>
        <li>
            <a href="tel:+38096 5-300-300">+38096 5-300-300</a><br/>
            <a href="tel:+38066 5-600-300">+38066 5-600-300</a>
        </li>
        <li>
            <a href="mailto:info@pokrov-ltd.com.ua">info@pokrov-ltd.com.ua</a>
		<p>Skype: ooo pokrov</p>
        </li>
    </ul>
    <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li>
            <h1 class="with-margin">LEAVE US YOUR REQUEST</h1>
            <h2 class="with-margin">and we’ll contact to you in recent time</h2>
        </li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <form action="" method="post" id="ajaxform">
        <ul class="form">
            <li><p>Your name <input type="text" name="name" maxlength="100"></p></li>
            <li><p>Country / city <input type="text" name="country" maxlength="100"></p></li>
            <li><p>Your telephone number <input type="text" name="telephone" maxlength="100"></p></li>
            <li><p>Your e-mail <input type="text" name="email" maxlength="100"></p></li>
            <li><p>A few words about your project</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <textarea maxlength="400" name="message"></textarea>
            </li>
        </ul>
        <a class="submit-button" href="?page=gallery">
            <input type="submit" value="" >
            <img class="top" src="images/ENG/send_message_eng.png">
            <img class="back" src="images/ENG/send_message_eng_gold.png">
        </a>
        <div class="clear"></div>
    </form>
    <div class="submit">
        <ul class="block-title">
            <li><img src="images/Decor_Gallery_Upper.png"></li>
            <li>
                <h1 class="with-margin">Ваши данные отправлены</h1>
            </li>
            <li><img src="images/Decor_Gallery_Down.png"></li>
    </div>'; }
        else {
            print '
        <li>Центральный офис НВФ «Покров»</li>
        <li>
            <p>Украина<br/>Черкасская обл., г. Черкассы<br/>ул. Громова 165А<br/>18000</p>
            <a class="map-link">Посмотреть на карте</a>
        </li>
        <li>
            <a href="tel:+38096 5-300-300">+38096 5-300-300</a><br/>
            <a href="tel:+38066 5-600-300">+38066 5-600-300</a>
        </li>
        <li>
            <a href="mailto:pokrov-ltd@ukr.net">pokrov-ltd@ukr.net</a>
		<p>Skype: ooo pokrov</p>
        </li>
    </ul>
    <ul class="block-title">
        <li><img src="images/Decor_Gallery_Upper.png"></li>
        <li>
            <h1 class="with-margin">Оставьте нам свой запрос</h1>
            <h2 class="with-margin">и мы свяжемся с вами с самое ближайшее время</h2>
        </li>
        <li><img src="images/Decor_Gallery_Down.png"></li>
    </ul>
    <form action="" method="post" id="ajaxform">
        <ul class="form">
            <li><p>Ваше имя <input type="text" name="name" maxlength="100"></p></li>
            <li><p>Страна, город <input type="text" name="country" maxlength="100"></p></li>
            <li><p>Ваш номер телефона <input type="text" name="telephone" maxlength="100"></p></li>
            <li><p>Ваш e-mail <input type="text" name="email" maxlength="100"></p></li>
            <li><p>Пару слов о вашем проекте</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <p class="invisible">0</p>
                <textarea maxlength="400" name="message"></textarea>
            </li>
        </ul>
        <a class="submit-button" href="?page=gallery">
            <input type="submit" value="" >
            <img class="top" src="images/ENG/send_message_eng.png">
            <img class="back" src="images/ENG/send_message_eng_gold.png">
        </a>
        <div class="clear"></div>
    </form>
    <div class="submit">
        <ul class="block-title">
            <li><img src="images/Decor_Gallery_Upper.png"></li>
            <li>
                <h1 class="with-margin">Ваши данные отправлены</h1>
            </li>
            <li><img src="images/Decor_Gallery_Down.png"></li>
    </div>
    ';} ?>
</article>