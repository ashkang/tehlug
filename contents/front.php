<div class="title">
    صفحه اصلی
</div>

<div class="col-md-6 col-sm-12">
    <div class="green box">
        تهران‌لاگ چیست؟
    </div>

    گروه کاربران گنو/لینوکس تهران یا «تهران‌لاگ» گروهی <b>مستقل</b> از کاربران کامپیوتر علاقه‌مند به <a
            href="http://www.gnu.org/gnu/linux-and-gnu.fa.html">گنو/لینوکس</a> ساکن تهران است. تم محوری جلسات تهران‌لاگ
    عبارت است از نرم افزار آزاد به صورت عمومی. با این حال، فعالیت‌های متفاوتی از جمله معرفی توزیع‌های آزاد گنو/لینوکسی،
    معرفی انواع سیستم‌عامل‌های آزاد خانواده‌ی بی‌اس‌دی، نصب آنها، محتوای آموزشی و حتی بحث آزاد در حوزه‌ی تئوریک نرم
    افزار آزاد نیز به طور همزمان در این اجتماع دنبال میشوند. در واقع تهران‌لاگ یک اجتماع از کاربران نرم افزار آزاد است
    که مایلند دقایقی را در کنار هم سپری کنند.
    <br/>
    شرکت در جلسات این گروه برای <b>عموم</b> آزاد است.
    شما نیز چنانچه علاقه‌مند هستید میتوانید در جلسات آن شرکت کنید و دانش خود را با سایر اعضا به اشتراک گذاشته و یا از
    دانش آنان استفاده کنید.

    <b> برای اطلاعات بیشتر میتوانید عضو <a href="http://lists.tehlug.org/mailman/listinfo/general">لیست پستی</a> گروه
        شوید.</b>
</div>


<div class="col-md-6 col-sm-12">
    <div class="orange box">
        تابلوی اخبار و جلسات

        <a href="rss.php">
            <img src="images/rss.png" alt="RSS Feed" title="RSS Feed" style="float: left;"/>
        </a>
    </div>

    <ul class="entries">
        <?php
        $next = getNextSession();
        foreach (getEntries(null, 6) as $entry) {
            echo '<li class="entry">';
            if ($entry == $next)
                echo 'جلسه بعدی:';
            echo '<a href="' . $entry->url . '">';
            echo $entry->title;
            echo '</a>';
            if ($entry->date)
                echo "<div class='date'>" . toPersian($entry->date) . "</div>";
            echo '</li>';
        }
        ?>
    </ul>
</div>

<div class="clear"></div>

<div class="col-md-6 col-sm-12">
    <div class="blue box" style="color: white;">
        محل برگزاری جلسه
    </div>
    <iframe class="map col"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.openstreetmap.org/export/embed.html?bbox=51.41039371490479%2C35.76676144406816%2C51.4124482870102%2C35.76809988960662&amp;layer=mapnik&amp;marker=35.76742958148567%2C51.41142100095749"></iframe>
    <br/>
    <a href="https://osm.org/go/zSR6uXnqk--?m=" target="_blank">
        <b> آدرس محل برگزاری جلسه: میدان آزادی، ابتدای بزرگراه شهید لشکری، نبش بیمه ۳، پلاک ۳۱، کارخانه نوآوری، فضای اشتراکی زاویه</b>
    </a>
    <br/>
</div>

<div class="col-md-6 col-sm-12">
    <div class="yellow box">
        تصویری از جلسه ۲۴۱
    </div>

    <div>
        <a href="photos/241/1396-12-16_241_01.JPG">
            <img class="col" src="images/Tehlug241_Thumb.JPG" style="margin: 0 auto; display: block;"></a>
    </div>
</div>
