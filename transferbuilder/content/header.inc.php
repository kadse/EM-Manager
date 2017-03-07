<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Transferlisten Builder</h1>
            <hr>
            <p>Über dieses Tool ist es Dir möglich, schnell und einfach per Mausklick Deine Transferliste zusammenzustellen und dann den HTML Code für den Forumbeitrag zu generieren.</p>
            <?php
                if (!isset($_GET['p'])) {
            ?>
                    <a href="#start" class="btn btn-primary btn-xl page-scroll" data-toggle="collapse" data-target="#start">Transferliste erstellen</a>
            <?php
                }
            ?>
        </div>
    </div>
</header>